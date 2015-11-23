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
    public function actionAr()
    {
        $identity = \Yii::$app->getUser()->getIdentity()->profile;
        $users100 = Users::findOne(
                   [
                       'socid'=>$identity["id"],
                       'service'=>$identity["service"]
                   ]);

                   $users100->fn=10;
                   if ($users100->validate())
                   {
                       $arrUsr[]=$users100->save(false);
                   }

                   $users101 = new Users();
                   $users101->setIsNewRecord(true);
                   $users101->fn="WOW";

                   if ($users101->validate())
                   {
                       $arrUsr[]=$users101->save(false);
                   }
                   var_dump($arrUsr);die;
    }
    public function beforeAction($action) {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }

    public function actionInnsave(){
            if (!\Yii::$app->user->isGuest) {
                if (\Yii::$app->request->isAjax) {
                    return Users::saveChange(\Yii::$app->request->post());
                }
            }
    }

    public function actionIndex()
    {
        if (!\Yii::$app->user->isGuest)
        {
            if (\Yii::$app->request->isAjax) {
                return $this->actionInnsave();
            }

            $identity = \Yii::$app->getUser()->getIdentity()->profile;
            $model = Users::find()
                ->where(['socid' => $identity["id"]])
                ->andWhere(['service' => $identity["service"]]);

            $consultant = Users::find()
                ->where(['refdt' => $model->one()["ref"]])->one();

            return $this->render('index', [
                'model' => $model->one(),
                'consultant' => $consultant
            ]);
        }
        return $this->render('index');
    }

    public function actionTmp()
    {
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

            $users = Users::findOne(['ref'=>$ref]);
            $users->ref=$usr->ref;
            $users->update();
        }
        return $this->goHome();
    }

    public function actionProfile()
    {
        if (!\Yii::$app->user->isGuest){
            return $this->render('profile');
        }
        else{return $this->goHome();}
    }

    public function actionTeam()
    {
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
            if( sizeof($arr)<1 ) return $this->render('team_empty');

            return $this->render('team', [
                'dataProvider' => new ActiveDataProvider([
                    'query' =>
                        $query->select('u.fn AS fn, u.ln AS ln, l.title AS title, u.userpic AS userpic, u.country AS country,
                        u.mobile AS mobile, u.skype AS skype, u.email AS email, u.vkontakte AS vkontakte')
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
        if (!\Yii::$app->user->isGuest)
        {
            $identity = \Yii::$app->getUser()->getIdentity()->profile;

            $model = Users::find()
                ->where(['socid' => $identity["id"]])
                ->andWhere(['service' => $identity["service"]]);

            if(\Yii::$app->request->post())
            {
                $p = \Yii::$app->request->post();
                if( 'soc'==$p["Users"]["formtype"] )
                {
                    if ($model->count() > 0)
                    {
/*
                        $users = Users::findOne([
                            'socid'=>$identity["id"],
                            'service'=>$identity["service"]
                        ]);
                        $users->active=date("Y-m-d");
                        $users->facebook=$p["Users"]["facebook"];
                        $users->vkontakte=$p["Users"]["vkontakte"];
                        $users->linkedin=$p["Users"]["linkedin"];
                        $users->googleplus=$p["Users"]["googleplus"];
                        $users->yandex=$p["Users"]["yandex"];
                        $users->mailru=$p["Users"]["mailru"];
                        $users->update();
*/
                        \Yii::$app->db->createCommand("
                                UPDATE `users` SET
                                    `active`='".date("Y-m-d")."',
                                    `facebook`='{$p["Users"]["facebook"]}',
                                    `vkontakte`='{$p["Users"]["vkontakte"]}',
                                    `linkedin`='{$p["Users"]["linkedin"]}',
                                    `googleplus`='{$p["Users"]["googleplus"]}',
                                    `yandex`='{$p["Users"]["yandex"]}';
                                    `mailru`='{$p["Users"]["mailru"]}';
                                WHERE
                                    `socid`='{$identity["id"]}'
                                AND
                                    `service` = '{$identity["service"]}'
                        ")
                            ->execute();
                    }
                }
                 if( 'picture'==$p["Users"]["formtype"] )
                 {
                     $upf = new Users();
                     $upf->userpic = UploadedFile::getInstance($upf, 'userpic');
                     if ($upf->validate())
                     {
                         $flname = $identity["id"] . time() . '.' . $upf->userpic->extension;
                         $upf->userpic
                             ->saveAs(Yii::getAlias('@webroot') .
                                 DIRECTORY_SEPARATOR . 'imgs' . DIRECTORY_SEPARATOR . $flname);
                         /*$users = Users::findOne([
                             'socid'=>$identity["id"],
                             'service'=>$identity["service"]
                         ]);
                         $users->active=date("Y-m-d");
                         $users->userpic=Yii::getAlias('@web')."/imgs/".$flname;
                         $users->update();
                         */
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
                if( 'personinfo'==$p["Users"]["formtype"] )
                {
                    if ($model->count() > 0)
                    {
/*
                        $users = Users::findOne([
                            'socid'=>$identity["id"],
                            'service'=>$identity["service"]
                        ]);
                        $users->active=date("Y-m-d");
                        $users->fn=$p["Users"]["fn"];
                        $users->ln=$p["Users"]["ln"];
                        $users->email=$p["Users"]["email"];
                        $users->mobile=$p["Users"]["mobile"];
                        $users->skype=$p["Users"]["skype"];
                        $users->city=$p["Users"]["city"];
                        $users->country=$p["Users"]["country"];
                        $users->purse=$p["Users"]["purse"];
                        $users->rating=$p["Users"]["rating"];

                        $users->save();
                        unset($users);
*/
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
            $lastFive=$query5->select('u.fn AS fn, u.ln AS ln,
            vkontakte, u.socid AS socid, u.userpic AS userpic')
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
            $lastFive=$query5->select('u.fn AS fn, u.ln AS ln,
            vkontakte, u.socid AS socid, u.userpic AS userpic')
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
        return $this->render('pricing');
    }

    public function actionPricing2()
    {
        return $this->render('pricing2');
    }
/********************************************************************/
    public function actionLand()
    {
        $this->layout = "landing";
        $landid = (int)\Yii::$app->request->get("landid");
        $landtype = (int)\Yii::$app->request->get("landtype");

        $query11=new \yii\db\Query();
        $data=$query11->from([Lp::tableName()])
                      ->where(['id' => $landid])
                      ->one();

        $usr = Users::find()->where(['id' => $data["uid"]]);

        return $this->render('land_'.$landtype, [
            'data'=>$data,
            'user'=>$usr->one()
        ]);
        $query=new \yii\db\Query();
        $data=$query->from([Lp::tableName()])
                ->where(['id' => $landid])
                ->one();
        return $this->render('land', [
             'data'=>$data
        ]);
    }

    public function actionLanding()
    {
        if (!\Yii::$app->user->isGuest){
            $identity = \Yii::$app->getUser()->getIdentity()->profile;
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
            $model_lp=false;
            $save=null;

            if (($model->count() == $usrLev["maxLandPage"]) && ($usrLev["maxLandPage"] != 5)) {
                $mes = "Вы исчерпали кол-во создание страниц. Смените тарифный план для увеличение к-ва";
            }

            if (isset($landid)) {
                if ($landid == 0) {
                    $tab = 1;
                    if ($model->count() == $usrLev["maxLandPage"]) {
                        $mes = "Вы исчерпали кол-во создание страниц. Смените тарифный план для увеличение к-ва";
                    } else {
                        /*\Yii::$app->db->createCommand("
                                INSERT `lp` SET
                                    `name`='Новый лэндПэйдж',
                                    `uid`='{$usr["id"]}'
                        ")
                            ->execute();
                        $mes = "Поздравляю вы создали новую страничку";*/
                    }
                } else {
                    $tab = 2;
                    $model_lp = Lp::find()
                        ->where(['uid' => $usr["id"]])
                        ->andWhere(['id' => $landid]);
                }
            } else {
                $tab = 1;
            }

            if(\Yii::$app->request->post()){
                /*****************************/
                $p = Yii::$app->request->post();
                /*****************************/


                if( 'change'==$p["Land"] ) {
                    $lp = Lp::findOne(
                        [
                            'uid' => $usr["id"],
                            'id' => $p["Lp"]["id"]
                        ]);

                    $lp->name = $p["Lp"]["name"];
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

                if( 'create'==$p["Land_2"] ) {
                    $lp_n = new Lp;

                    $lp_n->name = $p["name"];
                    $lp_n->uid = $usr["id"];
                    $lp_n->h1 = $p["h1"];
                    $lp_n->h2 = $p["h2"];
                    $lp_n->h3 = $p["h3"];
                    $lp_n->yt1 = $p["yt"];
                    $lp_n->h1c = $p["h1c"];
                    $lp_n->h2c = $p["h2c"];
                    $lp_n->h3c = $p["h3c"];
                    $lp_n->button = $p["button"];
                    $lp_n->save();

                    $save = "create";
                    $mes = "Ваша страничка создана";

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


            $save=( !empty($save) )?$save:null;
            if ($model_lp) {
                return $this->render('landing', [
                    'data' => $data->one(),
                    'model' => $model,
                    'level' => $usrLev,
                    'count_p' => $data->count(),
                    'm' => $mes,
                    'lp' => $model_lp->one(),
                    'save' => $save,
                    't' => $tab
                ]);
            } else {
                return $this->render('landing', [
                    'data' => $data->one(),
                    'model' => $model,
                    'level' => $usrLev,
                    'count_p' => $data->count(),
                    'm' => $mes,
                    't' => $tab
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
        private function usrEnter()
        {
            $identity = \Yii::$app->getUser()->getIdentity()->profile;
            list($firstName, $lastName) = explode(" ",  $identity["name"]);

            $usrDt=Users::find()
                ->where(['socid' => $identity["id"]])
                ->andWhere(['service' => $identity["service"]]);
                //->one();

            if( $usrDt->count()>0 )
            {
                $users = Users::findOne([
                    'socid'=>$identity["id"],
                    'service'=>$identity["service"]
                ]);
                $users->active=date("Y-m-d");
                $users->update();
            }
            else
            {
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
                /*
                $users = new Users();

                $users->ip=$_SERVER['REMOTE_ADDR'];
                $users->refdt=$this->ukey();
                $users->ref=Yii::$app->session->get('refuserId');
                $users->userpic=$pitureUrl;
                $users->fn=$firstName;
                $users->ln=$lastName;
                $users->socid=$identity["id"];
                $users->service=$identity["service"];
                $users->regdate=date("Y-m-d");
                $users->active=date("Y-m-d");

                switch($identity["service"])
                {
                    case "facebook":
                        $users->facebook=$identity["url"];
                    break;
                    case "vkontakte":
                        $users->vkontakte=$identity["url"];
                    break;
                    case "linkedin_oauth2":
                        $users->linkedin=$identity["url"];
                    break;
                    case "google":
                        $users->googleplus=$identity["url"];
                    break;
                    case "yandex":
                        $users->yandex=$identity["url"];
                    break;
                    case "mailru":
                        $users->mailru=$identity["url"];
                    break;
                }

                $users->save();*/
                \Yii::$app->db->createCommand
                ("
                    INSERT INTO users
                    (
                                   `ip`,
                                   `refdt`,
                                   `ref`,
                                   `userpic`,
                                   `fn`,
                                   `ln`,
                                   `socid`,
                                   `service`,
                                   `regdate`,
                                   `active`

                    ) VALUES
                    (
                                   '".$_SERVER['REMOTE_ADDR']."',
                                   '".$this->ukey()."',
                                   '".Yii::$app->session->get('refuserId')."',
                                   '".$pitureUrl."',
                                   '".$firstName."',
                                   '".$lastName."',
                                   '".$identity["id"]."',
                                   '".$identity["service"]."',
                                   '".date("Y-m-d")."',
                                   '".date("Y-m-d")."'
                    );
                    ")->execute();
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
    public function actionPolitika()
    {
        $this->layout = "politika";
        return $this->render('index');
    }

    public function actionOtkaz()
    {
        $this->layout = "otkaz";
        return $this->render('index');
    }
}
