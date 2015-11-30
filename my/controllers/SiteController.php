<?php

namespace app\controllers;

use app\models\Commands;
use app\models\Hangouts;
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
    public function beforeAction($action) {
        if("innsave"==$action->id){
            $this->enableCsrfValidation = false;
        }
        return parent::beforeAction($action);
    }

    public function actionInnsave() {
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
            $identity = \Yii::$app->getUser()->getIdentity()->profile;
            switch($identity["service"])
            {
                case "facebook":
                    $model = Users::find()->where(['facebook'=>$identity["id"]]);
                    break;
                case "vkontakte":
                    $model = Users::find()->where(['vkontakte'=>$identity["id"]]);
                    break;
                case "linkedin_oauth2":
                    $model = Users::find()->where(['linkedin'=>$identity["id"]]);
                    break;
                case "google":
                    $model = Users::find()->where(['googleplus'=>$identity["id"]]);
                    break;
                case "yandex":
                    $model = Users::find()->where(['yandex'=>$identity["id"]]);
                    break;
                case "mailru":
                    $model = Users::find()->where(['mailru'=>$identity["id"]]);
                    break;
            }
            $consultant = Users::find()
                ->where(['refdt' => $model->one()["ref"]])->one();

            return $this->render('index', [
                'model' => $model->one(),
                'consultant' => $consultant
            ]);
        }else{
            $this->layout = "empty";
            return $this->render("first");
        }
    }

    public function actionTmp()
    {
        if (!\Yii::$app->user->isGuest)
        {
            return $this->render('tmp');
        }
        return $this->goHome();
    }

    public function actionDelusr()
    {
        if (!\Yii::$app->user->isGuest)
        {
           $identity = \Yii::$app->getUser()->getIdentity()->profile;
            $usr = Users::find()->select('refdt, ref, level');
                switch($identity["service"])
                {
                    case "facebook":
                        $usr=$usr->where(['facebook' => $identity["id"]]);
                    break;
                    case "vkontakte":
                        $usr=$usr->where(['vkontakte' => $identity["id"]]);
                    break;
                    case "linkedin_oauth2":
                        $usr=$usr->where(['linkedin' => $identity["id"]]);
                    break;
                    case "google":
                        $usr=$usr->where(['googleplus' => $identity["id"]]);
                    break;
                    case "yandex":
                        $usr=$usr->where(['yandex' => $identity["id"]]);
                    break;
                    case "mailru":
                        $usr=$usr->where(['mailru' => $identity["id"]]);
                    break;
                }
            $usr=$usr->one();

            if($usr->level>4)return $this->goHome();
            Users::findOne($usr->id)->delete(false);

            if( !empty($usr->refdt) )
                {$ref=$usr->refdt;}
            else{$ref=2;}

            $users = Users::findOne(['ref'=>$ref]);
            $users->ref=$usr->ref;
            $users->update(false);
        }
        return $this->goHome();
    }

    public function actionProfile()
    {
        if (!\Yii::$app->user->isGuest){
            return $this->render('profile');
        }
        return $this->goHome();
    }

    public function actionTeam()
    {
        if ( !\Yii::$app->user->isGuest ){
            $query=new \yii\db\Query();
            $query1=new \yii\db\Query();
            $identity = \Yii::$app->getUser()->getIdentity()->profile;

            $usr = Users::find()->select('refdt');
            switch($identity["service"])
            {
                case "facebook":
                    $usr=$usr->where(['facebook' => $identity["id"]]);
                    break;
                case "vkontakte":
                    $usr=$usr->where(['vkontakte' => $identity["id"]]);
                    break;
                case "linkedin_oauth2":
                    $usr=$usr->where(['linkedin' => $identity["id"]]);
                    break;
                case "google":
                    $usr=$usr->where(['googleplus' => $identity["id"]]);
                    break;
                case "yandex":
                    $usr=$usr->where(['yandex' => $identity["id"]]);
                    break;
                case "mailru":
                    $usr=$usr->where(['mailru' => $identity["id"]]);
                    break;
            }
            $usr=$usr->one();

            $filter = new Users;

            $array=$query1->select('u.id AS id')
                ->from([Users::tableName().' u'])
                ->where(['u.ref'=>$usr->refdt])->all();
            $arr=array();
            for($i=0;$i<sizeof($array);$i++){
                $arr[]=$array[$i]["id"];
            }
            if( sizeof($arr)<1 ) return $this->render('team_empty');

            //$dataprovider =

            return $this->render('team', [
                'dataProvider' => new ActiveDataProvider([
                    'query' =>
                        $query->select('u.fn AS fn, u.ln AS ln, l.title AS title, u.userpic AS userpic, u.country AS country,
                        u.mobile AS mobile, u.skype AS skype, u.email AS email, u.vkontakte AS vkontakte')
                            ->from([Users::tableName().' u'])
                            ->innerJoin(Levels::tableName().' l','l.id = u.level')
                            ->where(['u.id'=>$arr])
                ]),
                'searchModel' => $filter
            ]);
        }
        return $this->goHome();
    }

    public function actionAccount()
    {
        if (!\Yii::$app->user->isGuest)
        {
            $identity = \Yii::$app->getUser()->getIdentity()->profile;

            $model = Users::find();
            switch($identity["service"])
            {
                case "facebook":
                    $model=$model->where(['facebook' => $identity["id"]]);
                    break;
                case "vkontakte":
                    $model=$model->where(['vkontakte' => $identity["id"]]);
                    break;
                case "linkedin_oauth2":
                    $model=$model->where(['linkedin' => $identity["id"]]);
                    break;
                case "google":
                    $model=$model->where(['googleplus' => $identity["id"]]);
                    break;
                case "yandex":
                    $model=$model->where(['yandex' => $identity["id"]]);
                    break;
                case "mailru":
                    $model=$model->where(['mailru' => $identity["id"]]);
                    break;
            }

            if(\Yii::$app->request->post())
            {
                $p = \Yii::$app->request->post();
                if( 'soc'==$p["Users"]["formtype"] )
                {
                    if ($model->count() > 0)
                    {
                        switch($identity["service"])
                        {
                            case "facebook":
                                $users = Users::findOne(['facebook' => $identity["id"]]);
                            break;
                            case "vkontakte":
                                $users = Users::findOne(['vkontakte' => $identity["id"]]);
                            break;
                            case "linkedin_oauth2":
                                $users = Users::findOne(['linkedin' => $identity["id"]]);
                            break;
                            case "google":
                                $users = Users::findOne(['googleplus' => $identity["id"]]);
                            break;
                            case "yandex":
                                $users = Users::findOne(['yandex' => $identity["id"]]);
                            break;
                            case "mailru":
                                $users = Users::findOne(['mailru' => $identity["id"]]);
                            break;
                        }

                        $users->active=date("Y-m-d");
                        $users->facebook=$p["Users"]["facebook"];
                        $users->vkontakte=$p["Users"]["vkontakte"];
                        $users->linkedin=$p["Users"]["linkedin"];
                        $users->googleplus=$p["Users"]["googleplus"];
                        $users->yandex=$p["Users"]["yandex"];
                        $users->mailru=$p["Users"]["mailru"];
                        $users->update(false);
/*
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
                        */
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
                         switch($identity["service"])
                         {
                             case "facebook":
                                 $users = Users::findOne(['facebook'=>$identity["id"]]);
                             break;
                             case "vkontakte":
                                 $users = Users::findOne(['vkontakte'=>$identity["id"]]);
                             break;
                             case "linkedin_oauth2":
                                 $users = Users::findOne(['linkedin'=>$identity["id"]]);
                             break;
                             case "google":
                                 $users = Users::findOne(['googleplus'=>$identity["id"]]);
                             break;
                             case "yandex":
                                 $users = Users::findOne(['yandex'=>$identity["id"]]);
                             break;
                             case "mailru":
                                 $users = Users::findOne(['mailru'=>$identity["id"]]);
                             break;
                         }
                         $users->active=date("Y-m-d");
                         $users->userpic=Yii::getAlias('@web')."/imgs/".$flname;
                         $users->update(false);
                         /*
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
                         */
                     }
                 }
                if( 'personinfo'==$p["Users"]["formtype"] )
                {
                    if ($model->count() > 0)
                    {
                        switch($identity["service"])
                        {
                            case "facebook":
                                $users = Users::findOne(['facebook'=>$identity["id"]]);
                                break;
                            case "vkontakte":
                                $users = Users::findOne(['vkontakte'=>$identity["id"]]);
                                break;
                            case "linkedin_oauth2":
                                $users = Users::findOne(['linkedin'=>$identity["id"]]);
                                break;
                            case "google":
                                $users = Users::findOne(['googleplus'=>$identity["id"]]);
                                break;
                            case "yandex":
                                $users = Users::findOne(['yandex'=>$identity["id"]]);
                                break;
                            case "mailru":
                                $users = Users::findOne(['mailru'=>$identity["id"]]);
                                break;
                        }
                        $users->active=date("Y-m-d");
                        $users->fn=$p["Users"]["fn"];
                        $users->ln=$p["Users"]["ln"];
                        $users->email=$p["Users"]["email"];
                        $users->mobile=$p["Users"]["mobile"];
                        $users->skype=$p["Users"]["skype"];
                        $users->city=$p["Users"]["city"];
                        $users->country=$p["Users"]["country"];
                        $users->purse=$p["Users"]["purse"];
                        $users->companyid=$p["Users"]["companyid"];
                        $users->save(false);
                        unset($users);
/*
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
                                    `companyid`='{$p["Users"]["companyid"]}'
                                WHERE
                                    `socid`='{$identity["id"]}'
                                AND
                                    `service` = '{$identity["service"]}'
                        ")
                            ->execute();*/
                    }
                }
            }

            $query3=new \yii\db\Query();

            $usrDt=$query3->select('u.fn AS fn, u.ln AS ln, u.refdt AS refdt,
                u.active AS active, l.title AS level, u.userpic AS userpic')
                ->from([Users::tableName().' u'])
                ->innerJoin(Levels::tableName().' l','l.id = u.level');

            switch($identity["service"])
            {
                case "facebook":
                    $usrDt=$usrDt->where(['facebook'=>$identity["id"]]);
                break;
                case "vkontakte":
                    $usrDt=$usrDt->where(['vkontakte'=>$identity["id"]]);
                break;
                case "linkedin_oauth2":
                    $usrDt=$usrDt->where(['linkedin'=>$identity["id"]]);
                break;
                case "google":
                    $usrDt=$usrDt->where(['googleplus'=>$identity["id"]]);
                break;
                case "yandex":
                    $usrDt=$usrDt->where(['yandex'=>$identity["id"]]);
                break;
                case "mailru":
                    $usrDt=$usrDt->where(['mailru'=>$identity["id"]]);
                break;
            }
            $usrDt=$usrDt->one();

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
        return $this->goHome();
    }

    public function actionHelp()
    {
        if (!\Yii::$app->user->isGuest){
            $identity = \Yii::$app->getUser()->getIdentity()->profile;

            $query3=new \yii\db\Query();
            $usrDt=$query3->select('u.fn AS fn, u.ln AS ln, u.refdt AS refdt,
                u.active AS active, l.title AS level, u.userpic AS userpic')
                ->from([Users::tableName().' u'])
                ->innerJoin(Levels::tableName().' l','l.id = u.level');

            switch($identity["service"])
            {
                case "facebook":
                    $usrDt=$usrDt->where(['facebook' => $identity["id"]]);
                    break;
                case "vkontakte":
                    $usrDt=$usrDt->where(['vkontakte' => $identity["id"]]);
                    break;
                case "linkedin_oauth2":
                    $usrDt=$usrDt->where(['linkedin' => $identity["id"]]);
                    break;
                case "google":
                    $usrDt=$usrDt->where(['googleplus' => $identity["id"]]);
                    break;
                case "yandex":
                    $usrDt=$usrDt->where(['yandex' => $identity["id"]]);
                    break;
                case "mailru":
                    $usrDt=$usrDt->where(['mailru' => $identity["id"]]);
                    break;
            }
            $usrDt=$usrDt->one();

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
        return $this->goHome();
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
        if (!\Yii::$app->user->isGuest)
        {
            return $this->render('calendar');
        }
        return $this->goHome();
    }

    public function actionTodo()
    {
        if (!\Yii::$app->user->isGuest)
        {
            return $this->render('todo');
        }
        return $this->goHome();
    }


    public function actionInbox()
    {
        if (!\Yii::$app->user->isGuest)
        {
            $this->layout = "inbox";
            return $this->render('inbox');
        }
        return $this->goHome();
    }

    public function actionPricing()
    {
        if (!\Yii::$app->user->isGuest)
        {
            return $this->render('pricing');
        }
        return $this->goHome();
    }

    public function actionPricing2()
    {
        if (!\Yii::$app->user->isGuest)
        {
            return $this->render('pricing2');
        }
        return $this->goHome();
    }
/********************************************************************/
    public function actionLanding()
    {
        if (!\Yii::$app->user->isGuest){
            $identity = \Yii::$app->getUser()->getIdentity()->profile;
            $mes = "";

            $query10=new \yii\db\Query();
            $usr=$query10->from([Users::tableName()]);
                        switch($identity["service"])
                        {
                            case "facebook":
                                $usr=$usr->where(['facebook' => $identity["id"]]);
                                break;
                            case "vkontakte":
                                $usr=$usr->where(['vkontakte' => $identity["id"]]);
                                break;
                            case "linkedin_oauth2":
                                $usr=$usr->where(['linkedin' => $identity["id"]]);
                                break;
                            case "google":
                                $usr=$usr->where(['googleplus' => $identity["id"]]);
                                break;
                            case "yandex":
                                $usr=$usr->where(['yandex' => $identity["id"]]);
                                break;
                            case "mailru":
                                $usr=$usr->where(['mailru' => $identity["id"]]);
                                break;
                        }
            $usr=$usr->one();

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
                    if ($model->count() <= $usrLev["maxLandPage"]) {
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

                $p["Land"]=( !empty($p["Land"]) )?$p["Land"]:null;
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
                    $lp->yandexmetrika = $p["Lp"]["yandexmetrika"];
                    $lp->button = $p["Lp"]["button"];
                    $lp->update();

                    $save = "good";
                    $mes = "Ваша страничка обновлена";

                }

                $p["Land_2"]=( !empty($p["Land_2"]) )?$p["Land_2"]:null;
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
                    $lp_n->yandexmetrika = $p["yandexmetrika"];
                    $lp_n->button = $p["button"];
                    $lp_n->save();

                    $save = "create";
                    $mes = "Ваша страничка создана";

                }
            }
            $query11=new \yii\db\Query();
            switch($identity["service"])
            {
                case "facebook":
                    $_usr=$query11->from([Users::tableName()])->where(['facebook'=>$identity["id"]])->one();
                break;
                case "vkontakte":
                    $_usr=$query11->from([Users::tableName()])->where(['vkontakte'=>$identity["id"]])->one();
                break;
                case "linkedin_oauth2":
                    $_usr=$query11->from([Users::tableName()])->where(['linkedin'=>$identity["id"]])->one();
                break;
                case "google":
                    $_usr=$query11->from([Users::tableName()])->where(['google'=>$identity["id"]])->one();
                break;
                case "yandex":
                    $_usr=$query11->from([Users::tableName()])->where(['yandex'=>$identity["id"]])->one();
                break;
                case "mailru":
                    $_usr=$query11->from([Users::tableName()])->where(['mailru'=>$identity["id"]])->one();
                break;
            }
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
        return $this->goHome();
    }

/********************************************************************/

    public function actionLanding2()
    {
        if(!\Yii::$app->user->isGuest)
        {
            return $this->render('landing2');
        }
        return $this->goHome();
    }

    public function actionLanding3()
    {
        if(!\Yii::$app->user->isGuest)
        {
            return $this->render('landing3');
        }
        return $this->goHome();
    }

    public function actionTraining()
    {
        if(!\Yii::$app->user->isGuest)
        {
            return $this->render('training');
        }
        return $this->goHome();
    }

    public function actionCompany()
    {
        if ( !\Yii::$app->user->isGuest ){
            $query1=new \yii\db\Query();
            $identity = \Yii::$app->getUser()->getIdentity()->profile;

            $usr = Users::find();
            switch($identity["service"])
            {
                case "facebook":
                    $usr=$usr->where(['facebook' => $identity["id"]]);
                    break;
                case "vkontakte":
                    $usr=$usr->where(['vkontakte' => $identity["id"]]);
                    break;
                case "linkedin_oauth2":
                    $usr=$usr->where(['linkedin' => $identity["id"]]);
                    break;
                case "google":
                    $usr=$usr->where(['googleplus' => $identity["id"]]);
                    break;
                case "yandex":
                    $usr=$usr->where(['yandex' => $identity["id"]]);
                    break;
                case "mailru":
                    $usr=$usr->where(['mailru' => $identity["id"]]);
                    break;
            }
            $usr=$usr->one();
            /*
                        $array=$query1
                            ->from([Lp::tableName()])
                            ->one();
            */
            return $this->render('company', [
                'model' => Lp::find()->where(['id'=>$usr['companyid']])->one(),
                'ref' =>$usr['refdt']
            ]);
        }
        else{return $this->goHome();}
    }

    public function actionNews()
    {
        if(!\Yii::$app->user->isGuest)
        {
            return $this->render('news');
        }
        return $this->goHome();
    }

    public function actionBlog()
    {
        if(!\Yii::$app->user->isGuest)
        {
            return $this->render('blog');
        }
        return $this->goHome();
    }

    public function actionAbout()
    {
         if(!\Yii::$app->user->isGuest)
         {
             return $this->render('about');
         }
        return $this->goHome();
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

            switch($identity["service"])
            {
                case "facebook":
                    $usrDt = Users::find()->where(['facebook'=>$identity["id"]]);
                break;
                case "vkontakte":
                    $usrDt = Users::find()->where(['vkontakte'=>$identity["id"]]);
                break;
                case "linkedin_oauth2":
                    $usrDt = Users::find()->where(['linkedin'=>$identity["id"]]);
                break;
                case "google":
                    $usrDt = Users::find()->where(['googleplus'=>$identity["id"]]);
                break;
                case "yandex":
                    $usrDt = Users::find()->where(['yandex'=>$identity["id"]]);
                break;
                case "mailru":
                    $usrDt = Users::find()->where(['mailru'=>$identity["id"]]);
                break;
            }
            if( $usrDt->count()>0 )
            {
                switch($identity["service"])
                {
                    case "facebook":
                        $users = Users::findOne(['facebook'=>$identity["id"]]);
                        break;
                    case "vkontakte":
                        $users = Users::findOne(['vkontakte'=>$identity["id"]]);
                        break;
                    case "linkedin_oauth2":
                        $users = Users::findOne(['linkedin'=>$identity["id"]]);
                        break;
                    case "google":
                        $users = Users::findOne(['googleplus'=>$identity["id"]]);
                        break;
                    case "yandex":
                        $users = Users::findOne(['yandex'=>$identity["id"]]);
                        break;
                    case "mailru":
                        $users = Users::findOne(['mailru'=>$identity["id"]]);
                        break;
                }
                $users->active=date("Y-m-d");
                $users->update(false);
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
                $users = new Users();
                $users->ip=$_SERVER['REMOTE_ADDR'];
                $users->refdt=$this->ukey();
                $users->ref=Yii::$app->session->get('refuserId');
                $users->userpic=$pitureUrl;
                $users->fn=$firstName;
                $users->ln=$lastName;
                //$users->socid=$identity["id"];
                //$users->service=$identity["service"];
                $users->regdate=date("Y-m-d");
                $users->active=date("Y-m-d");

                switch($identity["service"])
                {
                    case "facebook":
                        $users->facebook=$identity["id"];
                    break;
                    case "vkontakte":
                        $users->vkontakte=$identity["id"];
                    break;
                    case "linkedin_oauth2":
                        $users->linkedin=$identity["id"];
                    break;
                    case "google":
                        $users->googleplus=$identity["id"];
                    break;
                    case "yandex":
                        $users->yandex=$identity["id"];
                    break;
                    case "mailru":
                        $users->mailru=$identity["id"];
                    break;
                }
                $users->save(false);
                $this->sandMailFirst($users,$identity);
            }
        }
/*********************************/

    public function sandMailFirst($users,$iden)
    {
        /* получатель */
        $to = Users::find()
            ->where([
                'refdt' => $users->ref
            ])->one();

        $to = @$to->email;
        if (empty($to)) $to = 'support@1-mlm.com';

        /* тема/subject */
        $subject = 'Поздравляем! У Вас новый кандидат!';

        /* сообщение */
        $message = '<p>Только что по Вашей ссылке был создан Личный кабинет для Вашего нового кандидата:</p>';

        switch($iden["service"])
        {
            case "vkontakte":
                $message .= '<p>Его данные: <a href="http://vk.com/id' . $iden["id"] . '">';
            break;
            case "facebook":
                $message .= '<p>Его данные: <a href="http://facebook.com/' . $iden["id"] . '">';
            break;
            case "linkedin_oauth2":
            break;
            case "google":
            break;
            case "yandex":
            break;
            case "mailru":
            break;
        }

        $message .= '<strong>'.$users->fn.' '.$users->ln.'</strong></a></p>';
        $message .= '<p>Зайдите в свой Личный кабинет, чтобы связаться с ним по скайпу как можно скорее!</p>';
        $message .= '<p>Служба поддержки системы "1-й млм Реусрс"</p>
                    <p>Скайп: support.mlm</p>';

        /* Для отправки HTML-почты вы можете установить шапку Content-type. */
        $headers= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

        /* дополнительные шапки */
        $headers .= "From: support <support@1-mlm.com>\r\n";
        $headers .= "Cc: support@1-mlm.com\r\n";
        $headers .= "Bcc: support@1-mlm.com\r\n";

        /* и теперь отправим из */
        mail($to, $subject,
            $message,
            $headers);
    }

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
        return $this->goHome();
    }

    public function actionContact()
    {
        if (!\Yii::$app->user->isGuest)
        {
            $model = new ContactForm();
            if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('contactFormSubmitted');

                return $this->refresh();
            }
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
        return $this->goHome();
    }
/***************************************************************/
    public function actionPolitika()
    {
        $this->layout = "empty";
        return $this->render('politika');
    }

    public function actionOtkaz()
    {
        $this->layout = "empty";
        return $this->render('otkaz');
    }

    public function actionLinks()
    {
        if ( !\Yii::$app->user->isGuest ){
            $query=new \yii\db\Query();
            $query1=new \yii\db\Query();
            $identity = \Yii::$app->getUser()->getIdentity()->profile;
            switch($identity["service"])
            {
                case "facebook":
                    $usr=Users::find()->where(['facebook'=>$identity["id"]])->one();
                    break;
                case "vkontakte":
                    $usr=Users::find()->where(['vkontakte'=>$identity["id"]])->one();
                    break;
                case "linkedin_oauth2":
                    $usr=Users::find()->where(['linkedin'=>$identity["id"]])->one();
                    break;
                case "google":
                    $usr=Users::find()->where(['google'=>$identity["id"]])->one();
                    break;
                case "yandex":
                    $usr=Users::find()->where(['yandex'=>$identity["id"]])->one();
                    break;
                case "mailru":
                    $usr=Users::find()->where(['mailru'=>$identity["id"]])->one();
                    break;
            }
            /*$array=$query1->select('id')
                ->from([Lp::tableName()])
                ->where(['uid'=>$usr['id']])->all();
            $arr=array();
            for($i=0;$i<sizeof($array);$i++){
                $arr[]=$array[$i]["id"];
            }*/

            return $this->render('links', [
                'dataProvider' => new ActiveDataProvider([
                    'query' =>
                        $query->select('id, name')
                            ->from([Lp::tableName()])
                            ->where(['uid'=>$usr['id']])
                ])
            ]);
        }
        return $this->goHome();
    }
}