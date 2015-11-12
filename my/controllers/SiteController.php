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
        return $this->render('index');
    }

    public function actionTmp()
    {
        //$this->chkusr();
        return $this->render('tmp');
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

            $usr = \app\models\Users::find()->select('id')
                ->where(['socid' => $identity["id"]])
                ->andWhere(['service' => $identity["service"]])
                ->one();

            $array=$query1->select('c.id AS id')
                     ->from([Commands::tableName().' c'])
                     ->where(['c.refusr_id'=>$usr->id])->all();

            for($i=0;$i<sizeof($array);$i++){
                $arr[]=$array[$i]["id"];
            }

            //$arr=['98d69c', '625759', 'bd066e', '7e57ea', '1caaf1', '84e53a', '9a1a29'];

            return $this->render('team', [
                'dataProvider' => new ActiveDataProvider([
                    'query' =>
                        $query->select('u.fn AS fn, u.ln AS ln, l.title AS title')
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
                 if( 'picture'==$p["Users"]["formtype"] ) {
                     $upf = new Users();
                     $upf->userpic = UploadedFile::getInstance($upf, 'userpic');
                     if ($upf->validate()) {
                         $flname = $identity["id"] . mktime() . '.' . $upf->userpic->extension;
                         $upf->userpic
                             ->saveAs(Yii::getAlias('@webroot') . DIRECTORY_SEPARATOR . 'imgs' . DIRECTORY_SEPARATOR . $flname);
                         \Yii::$app->db->createCommand("
                                        UPDATE `users` SET
                                            `active`='" . date("Y-m-d") . "',
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
                                    `active`='" . date("Y-m-d") . "',
                                    `fn`='{$p["Users"]["fn"]}',
                                    `ln`='{$p["Users"]["ln"]}',
                                    `email`='{$p["Users"]["email"]}',
                                    `mobile`='{$p["Users"]["mobile"]}',
                                    `skype`='{$p["Users"]["skype"]}',
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

            return $this->render('account', [
                'model' => $model->one(),
            ]);
        }
        else{return $this->goHome();}
    }

    public function actionLanding()
    {
        return $this->render('landing');
    }

    public function actionLanding2()
    {
        return $this->render('landing2');
    }

    public function actionLanding3()
    {
        return $this->render('landing3');
    }

    public function actionMc()
    {
        return $this->render('mc');
    }

    public function actionTraining()
    {
        return $this->render('training');
    }

    public function actionCompany()
    {
        return $this->render('company');
    }

    public function actionNews()
    {
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
