<?php

namespace app\controllers;

use app\models\Commands;
use Yii;
use yii\filters\AccessControl;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\User;
use app\models\Users;
use app\models\Levels;
use app\models\UploadForm;
use app\models\Lp;
use yii\web\UploadedFile;

class SiteController extends Controller
{
    private $siteUrl="https://gmail.com/";
/*
 public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }
*/

    public function behaviors() {
        return [
            'eauth' => [
                // required to disable csrf validation on OpenID requests
                'class' => \nodge\eauth\openid\ControllerBehavior::className(),
                'only' => ['login'],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }
/****************************************************************/
    public function actionIndex()
    {
        //$this->chkusr();
        if (!\Yii::$app->user->isGuest) {
            $identity = \Yii::$app->getUser()->getIdentity()->profile;
            $model = Users::find()
                ->where(['socid' => $identity["id"]])
                ->andWhere(['service' => $identity["service"]]);
            return $this->render('index', [
                'model' => $model->one(),
            ]);
        }
        return $this->render('index');
    }

    public function actionTmp()
    {
        //$this->chkusr();
        return $this->render('tmp');
    }

    public function actionDelusr()
    {
        if (!\Yii::$app->user->isGuest)
        {
           $identity = \Yii::$app->getUser()->getIdentity()->profile;
            $usr = Users::find()->select('refdt, ref, level')
                ->where(['socid' => $identity["id"]])
                ->andWhere(['service' => $identity["service"]])
                ->one();
            if($usr->level>4)return $this->goHome();
            Users::findOne($usr->id)->delete();

            if( !empty($usr->refdt) )
                {$ref=$usr->refdt;}
            else{$ref=2;}

            \Yii::$app->db->createCommand("
                                        UPDATE `users` SET
                                            `ref`='{$usr->ref}'
                                        WHERE
                                            `ref`='{$ref}'
                                ")
                ->execute();
        }
        return $this->goHome();
    }

    public function actionProfile()
    {
        //$this->chkusr();
        if (!\Yii::$app->user->isGuest){
            return $this->render('profile');
        }
        else{return $this->goHome();}
    }

    public function actionTeam()
    {
        //$this->chkusr();
        if ( !\Yii::$app->user->isGuest ){
            $query=new \yii\db\Query();
            $query1=new \yii\db\Query();
            $identity = \Yii::$app->getUser()->getIdentity()->profile;

            $usr = Users::find()->select('refdt')
                ->where(['socid' => $identity["id"]])
                ->andWhere(['service' => $identity["service"]])
                ->one();

            $array=$query1->select('u.id AS id')
                     ->from([Users::tableName().' u'])
                     ->where(['u.ref'=>$usr->refdt])->all();
            $arr=array();
            for($i=0;$i<sizeof($array);$i++){
                $arr[]=$array[$i]["id"];
            }

            //$arr=['98d69c', '625759', 'bd066e', '7e57ea', '1caaf1', '84e53a', '9a1a29'];
            if( sizeof($arr)<1 ) return $this->render('team_empty');

            return $this->render('team', [
                'dataProvider' => new ActiveDataProvider([
                    'query' =>
                        $query->select('u.fn AS fn, u.ln AS ln, l.title AS title, u.userpic AS userpic')
                            ->from([Users::tableName().' u'])
                            ->innerJoin(Levels::tableName().' l','l.id = u.level')
                            ->where(['u.id'=>$arr])
                ])
            ]);
        }
        else{return $this->goHome();}
    }

    public function actionAccount()
    {
        //this->chkusr();
        if (!\Yii::$app->user->isGuest){
            $identity = \Yii::$app->getUser()->getIdentity()->profile;

            $model = Users::find()
                ->where(['socid' => $identity["id"]])
                ->andWhere(['service' => $identity["service"]]);

                //->where(['service' => $identity["service"]]);
                //->one();

            if(\Yii::$app->request->post()){
/*****************************/
                $p = \Yii::$app->request->post();
                if( 'soc'==$p["Users"]["formtype"] )
                {
                    if ($model->count() > 0)
                    {
                        \Yii::$app->db->createCommand("
                                UPDATE `users` SET
                                    `active`='" . date("Y-m-d") . "',
                                    `facebook`='{$p["Users"]["facebook"]}',
                                    `vkontakte`='{$p["Users"]["vkontakte"]}',
                                    `linkedin`='{$p["Users"]["linkedin"]}',
                                    `googleplus`='{$p["Users"]["googleplus"]}',
                                WHERE
                                    `socid`='{$identity["id"]}'
                                AND
                                    `service` = '{$identity["service"]}'
                        ")
                        ->execute();
                    }
                }
                 if( 'picture'==$p["Users"]["formtype"] ) {
                     $upf = new Users();
                     $upf->userpic = UploadedFile::getInstance($upf, 'userpic');
                     if ($upf->validate()) {
                         $flname = $identity["id"] . mktime() . '.' . $upf->userpic->extension;
                         $upf->userpic
                             ->saveAs(Yii::getAlias('@webroot') . DIRECTORY_SEPARATOR . 'imgs' . DIRECTORY_SEPARATOR . $flname);
                         \Yii::$app->db->createCommand("
                                        UPDATE `users` SET
                                            `active`='".date("Y-m-d")."',
                                            `userpic`='".Yii::getAlias('@web')."/imgs/{$flname}'
                                        WHERE
                                            `socid`='{$identity["id"]}'
                                        AND
                                            `service` = '{$identity["service"]}'
                                ")
                             ->execute();
                     }
                 }
/*****************************/
                if( 'personinfo'==$p["Users"]["formtype"] ) {
                    if ($model->count() > 0) {
                        \Yii::$app->db->createCommand("
                                UPDATE `users` SET
                                    `active`='".date("Y-m-d")."',
                                    `fn`='{$p["Users"]["fn"]}',
                                    `ln`='{$p["Users"]["ln"]}',
                                    `email`='{$p["Users"]["email"]}',
                                    `mobile`='{$p["Users"]["mobile"]}',
                                    `skype`='{$p["Users"]["skype"]}',
                                    `city`='{$p["Users"]["city"]}',
                                    `country`='{$p["Users"]["country"]}',
                                    `purse`='{$p["Users"]["purse"]}',
                                    `rating`='{$p["Users"]["rating"]}'
                                WHERE
                                    `socid`='{$identity["id"]}'
                                AND
                                    `service` = '{$identity["service"]}'
                        ")
                            ->execute();
                    }
                }
            }

            $query3=new \yii\db\Query();
            $usrDt=$query3->select('u.fn AS fn, u.ln AS ln, u.refdt AS refdt,
                u.active AS active, l.title AS level, u.userpic AS userpic')
                ->from([Users::tableName().' u'])
                ->innerJoin(Levels::tableName().' l','l.id = u.level')
                ->where(['u.socid' => $identity["id"]])
                ->andWhere(['u.service' => $identity["service"]])->one();

            $query5=new \yii\db\Query();
            $lastFive=$query5->select('u.fn AS fn, u.ln AS ln, u.socid AS socid, u.userpic AS userpic')
                ->from([Users::tableName().' u'])
                ->where(['u.ref' => $usrDt["refdt"]])
                ->orderBy(['regdate' => SORT_DESC])->limit(5)->all();

            return $this->render('account', [
                'model' => $model->one(),
                'usrDt'=> $usrDt,
                'lastFive'=>$lastFive
            ]);
        }
        else{return $this->goHome();}
    }

    public function actionHelp()
    {
        //this->chkusr();
        if (!\Yii::$app->user->isGuest){
            $identity = \Yii::$app->getUser()->getIdentity()->profile;

            $query3=new \yii\db\Query();
            $usrDt=$query3->select('u.fn AS fn, u.ln AS ln, u.refdt AS refdt,
                u.active AS active, l.title AS level, u.userpic AS userpic')
                ->from([Users::tableName().' u'])
                ->innerJoin(Levels::tableName().' l','l.id = u.level')
                ->where(['u.socid' => $identity["id"]])
                ->andWhere(['u.service' => $identity["service"]])->one();

            $query5=new \yii\db\Query();
            $lastFive=$query5->select('u.fn AS fn, u.ln AS ln, u.socid AS socid, u.userpic AS userpic')
                ->from([Users::tableName().' u'])
                ->where(['u.ref' => $usrDt["refdt"]])
                ->orderBy(['regdate' => SORT_DESC])->limit(5)->all();


            return $this->render('help', [
                'usrDt'=> $usrDt,
                'lastFive'=>$lastFive
            ]);
        }
        else{return $this->goHome();}
    }

    public function actionRef()
    {
        if( !empty(\Yii::$app->request->get("refid")) )
        {
            $refdt=\Yii::$app->request->get("refid");
            $usrDt=Users::find()
                ->where(['refdt' => $refdt]);
            if( $usrDt->count()>0 )
            {
                Yii::$app->session->set('refuserId', $refdt);
            }
        }
        return $this->goHome();
    }

    public function actionCalendar()
    {
        return $this->render('calendar');
    }

    public function actionTodo()
    {
        return $this->render('todo');
    }


    public function actionInbox()
    {
        return $this->render('inbox');
    }

    public function actionPricing()
    {
        //this->chkusr();
        return $this->render('pricing');
    }
/********************************************************************/
    public function actionLand()
    {
        $this->layout = "landing";

        $landid = (int)\Yii::$app->request->get("landid");

        $query11=new \yii\db\Query();
        $data=$query11->from([Lp::tableName()])
                      ->where(['id' => $landid])
                      ->one();

        $usr = Users::find()->where(['id' => $data["uid"]]);

        return $this->render('land', [
            'data'=>$data,
            'user'=>$usr->one()
        ]);
    }

    public function actionLanding()
    {
        //this->chkusr();
        if (!\Yii::$app->user->isGuest){
            $identity = \Yii::$app->getUser()->getIdentity()->profile;

            /*$model = Users::find()
                ->where(['socid' => $identity["id"]])
                ->andWhere(['service' => $identity["service"]]);*/

            //->where(['service' => $identity["service"]]);
            //->one();
            $mes = "";

            $query10=new \yii\db\Query();
            $usr=$query10->from([Users::tableName()])
                ->where(['socid' => $identity["id"]])
                ->andWhere(['service' => $identity["service"]])
                ->one();

            $query13=new \yii\db\Query();
            $usrLev=$query13
                ->from([Levels::tableName()])
                ->where(['id' => $usr["level"]])->one();

            $model = Lp::find()
                ->where(['uid' => $usr["id"]]);
                //->andWhere(['id' => $landid]);

            $landid = \Yii::$app->request->get("landid");

            if (isset($landid)) {
                if ($landid == 0) {
                    if ($model->count() == $usrLev["maxLandPage"]) {
                        $mes = "Вы исчерпали кол-во создание страниц. Смените тарифный план для увеличение к-ва";
                    } else {
                        \Yii::$app->db->createCommand("
                                INSERT `lp` SET
                                    `name`='Новый лэндПэйдж',
                                    `uid`='{$usr["id"]}'
                        ")
                            ->execute();
                        $mes = "Поздравляю вы создали новую страничку";
                    }
                } else {
                    $model_lp = Lp::find()
                        ->where(['uid' => $usr["id"]])
                        ->andWhere(['id' => $landid]);
                }
            }

            if(\Yii::$app->request->post()){
                /*****************************/
                $p = \Yii::$app->request->post();

                /*****************************/


                if( 'change'==$p["Land"] ) {
                    /*\Yii::$app->db->createCommand("
                                UPDATE `lp` SET
                                    `h1`='{$p["Lp"]["h1"]}',
                                    `h2`='{$p["Lp"]["h2"]}',
                                    `h3`='{$p["Lp"]["h3"]}',
                                    `yt1`='{$p["Lp"]["yt1"]}',
                                    `h1c`='{$p["Lp"]["h1c"]}',
                                    `h2c`='{$p["Lp"]["h2c"]}',
                                    `h3c`='{$p["Lp"]["h3c"]}',
                                    `button`='{$p["Lp"]["button"]}'
                                WHERE
                                    `uid`='{$usr["id"]}'
                                AND
                                    `id` = '{$p["Lp"]["id"]}'
                        ")
                        ->execute();*/
                    $lp = Lp::findOne(
                        [
                            'uid' => $usr["id"],
                            'id' => $p["Lp"]["id"]
                        ]);

                    $lp->h1 = $p["Lp"]["h1"];
                    $lp->h2 = $p["Lp"]["h2"];
                    $lp->h3 = $p["Lp"]["h3"];
                    $lp->yt1 = $p["Lp"]["yt1"];
                    $lp->h1c = $p["Lp"]["h1c"];
                    $lp->h2c = $p["Lp"]["h2c"];
                    $lp->h3c = $p["Lp"]["h3c"];
                    $lp->button = $p["Lp"]["button"];
                    $lp->update();

                    $save = "good";
                    $mes = "Ваша страничка обновлена";

                }
            }

            $query11=new \yii\db\Query();
            $_usr=$query11->from([Users::tableName()])
                ->where(['socid' => $identity["id"]])
                ->andWhere(['service' => $identity["service"]])
                ->one();

            $query12=new \yii\db\Query();
            $data=$query12->from([Lp::tableName()])
                ->where(['uid' => $_usr["id"]]);

            if ($model_lp) {

                return $this->render('landing', [
                    'data' => $data->one(),
                    'model' => $model,
                    'level' => $usrLev,
                    'count_p' => $data->count(),
                    'm' => $mes,
                    'lp' => $model_lp->one(),
                    'save' => $save
                ]);
            } else {
                return $this->render('landing', [
                    'data' => $data->one(),
                    'model' => $model,
                    'level' => $usrLev,
                    'count_p' => $data->count(),
                    'm' => $mes
                ]);
            }
        }
        else{return $this->goHome();}

        //return $this->render('landing');
    }

    public function actionLanding2()
    {
        //this->chkusr();
        return $this->render('landing2');
    }

    public function actionLanding3()
    {
        //this->chkusr();
        return $this->render('landing3');
    }
/********************************************************************/
    public function actionMc()
    {
        //this->chkusr();
        return $this->render('mc');
    }

    public function actionTraining()
    {
        //this->chkusr();
        return $this->render('training');
    }

    public function actionCompany()
    {
        //this->chkusr();
        return $this->render('company');
    }

    public function actionNews()
    {
        //this->chkusr();
        return $this->render('news');
    }
/*
    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }
***********************************************************************************************************************/
        private function usrEnter(){
            $identity = \Yii::$app->getUser()->getIdentity()->profile;
            list($firstName, $lastName) = explode(" ",  $identity["name"]);

            $usrDt=Users::find()
                ->where(['socid' => $identity["id"]])
                ->andWhere(['service' => $identity["service"]]);
                //->one();

            if( $usrDt->count()>0 ) {
                /*$usrDt->one()->active=date("Y-m-d");
                $usrDt->one()->fn=date("Y-m-d");
                $usrDt->one()->save();*/

                \Yii::$app->db->createCommand("
                                UPDATE `users` SET
                                `active`='".date("Y-m-d")."'
                                WHERE
                                `socid`='{$identity["id"]}'
                                AND
                                `service` = '{$identity["service"]}'
                        ")
                    ->execute();
            }
            else{

                switch($identity["service"])
                {
                    case "facebook":
                        $pitureUrl="http://graph.facebook.com/".$identity["id"]."/picture?type=square";
                    break;
                    case "vkontakte":
                        $usrPic=json_decode
                        (
                            file_get_contents('http://api.vkontakte.ru/method/users.get?uids='.
                                $identity["id"].
                                '&fields=photo_100')
                        );
                        $pitureUrl=$usrPic->response[0]->photo_100;
                    break;
                    default:
                        $pitureUrl="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image";
                    break;
                }
                \Yii::$app->db->createCommand()
                    ->insert('users', [
                       // 'id'=>mktime(),
                        'ip'=>$_SERVER['REMOTE_ADDR'],
                        'refdt'=>$this->ukey(),
                        'ref'=>Yii::$app->session->get('refuserId'),
                        'userpic'=>$pitureUrl,
                        'fn' => $firstName,
                        'ln' => $lastName,
                        'socid' => $identity["id"],
                        'service' => $identity["service"],
                        'regdate'=>date("Y-m-d"),
                        'active'=>date("Y-m-d")
                    ])->execute();
            }
        }
/*********************************/
    protected function ukey()
    {
        for(;;)
        {
            $key=$this->rand_str();
            $cntKey=Users::find()
                ->where(['refdt' => $key])->count();
            if(0==$cntKey){break;}
        }
        return $key;
    }
    protected function rand_str
    (
        $length = 10,
        $chars = 'qwertyuioplkjhgfdsazxcvbnmQWERTYUIOPLKJHGFDSAZXCVBNM1234567890'
    )
    {
        $chars_length = (strlen($chars) - 1);
        $string = $chars{rand(0, $chars_length)};
        for ($i = 1; $i < $length; $i = strlen($string))
        {
            $r = $chars{rand(0, $chars_length)};
            if ($r != $string{$i - 1}) $string .=  $r;
        }
        return $string;
    }
/*********************************/
    public function actionLogin() {
        /*
        if(\Yii::$app->user->isGuest)
            {return $this->redirect($this->siteUrl);}
        */
        $serviceName = \Yii::$app->getRequest()->getQueryParam('service');
        if (isset($serviceName)) {
            /** @var $eauth \nodge\eauth\ServiceBase */
            $eauth = \Yii::$app->get('eauth')->getIdentity($serviceName);
            $eauth->setRedirectUrl(Yii::$app->getUser()->getReturnUrl());
            $eauth->setCancelUrl(Yii::$app->getUrlManager()->createAbsoluteUrl('site/login'));

            try {
                if ($eauth->authenticate()) {
//                  var_dump($eauth->getIsAuthenticated(), $eauth->getAttributes()); exit;

                    $identity = User::findByEAuth($eauth);
                    \Yii::$app->getUser()->login($identity);

                    // special redirect with closing popup window

                    //print_r(\Yii::$app->getUser()->getIdentity()->profile["service"]);exit();

                    $this->usrEnter();

                    $eauth->redirect();
                }
                else {
                    // close popup window and redirect to cancelUrl
                    $eauth->cancel();
                }
            }
            catch (\nodge\eauth\ErrorException $e) {
                // save error to show it later
                \Yii::$app->getSession()->setFlash('error', 'EAuthException: '.$e->getMessage());

                // close popup window and redirect to cancelUrl
//              $eauth->cancel();
                $eauth->redirect($eauth->getCancelUrl());
            }
        }
/////////////////////////////////////if login
        if (!\Yii::$app->user->isGuest){
            $this->usrEnter();
            return $this->goHome();
        }
/////////////////////////////////////////////
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
/*
        if(\Yii::$app->user->isGuest)
            {return $this->redirect($this->siteUrl);}
*/
        return $this->goHome();
    }

    public function actionContact()
    {
/*
        if(\Yii::$app->user->isGuest)
            {return $this->redirect($this->siteUrl);}
*/
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionAbout()
    {
/*
        if(\Yii::$app->user->isGuest)
            {return $this->redirect($this->siteUrl);}
*/
        return $this->render('about');
    }
    private function chkusr()
    {
        if(\Yii::$app->user->isGuest)
            {return $this->redirect($this->siteUrl);}
    }
/***************************************************************/

}
