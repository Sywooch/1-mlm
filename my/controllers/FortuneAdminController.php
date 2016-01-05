<?php

namespace app\controllers;

use app\models\FortuneUsers;
use app\models\Users;

class FortuneAdminController extends \yii\web\Controller
{
    public function actionIndex()
    {
        if (!\Yii::$app->user->isGuest)
        {
            if(!$this->isAdmin()){return $this->goHome();}

            $this->layout="empty";
            $array=(new \yii\db\Query())
                ->distinct()
                ->select('fu.uid AS id')
                ->from([FortuneUsers::tableName().' fu'])
                ->where(["fu.fortune_id"=>1])
                ->all();
            $arr=array();
            for($i=0;$i<sizeof($array);$i++)
            {
                $arr[]=$array[$i]["id"];
            }
            return $this->render('index',
            [
                "fu"=>(new \yii\db\Query())
                    ->select
                    ([
                        'u.id AS id',
                        'u.fn AS fn',
                        'u.ln AS ln',
                        'u.userpic AS userpic',
                        'u.email AS email',
                        'u.vkontakte AS vkontakte',
                        'u.facebook AS facebook'
                    ])
                    ->from([Users::tableName().' u'])
                    ->where(['u.id'=>$arr])
                    ->andWhere(['not', ['u.id' => [
                        1,3,22196
                    ]]])
                    ->andWhere(['<>', 'u.vkontakte', ''])
                    ->andWhere(['not', ['u.vkontakte' => null]])
                    ->all()
            ]);
        }
        return $this->goHome();
    }

    private function isAdmin()
    {
        $identity = \Yii::$app->getUser()->getIdentity()->profile;
        switch($identity["service"])
        {
            case "facebook":
                $usr=\app\models\Users::find()->select('id, refdt, vkontakte, level')
                    ->where(['facebook'=>$identity["id"]])->one();
                break;
            case "vkontakte":
                $usr=\app\models\Users::find()->select('id, refdt, vkontakte, level')
                    ->where(['vkontakte'=>$identity["id"]])->one();
                break;
            case "linkedin_oauth2":
                $usr=\app\models\Users::find()->select('id, refdt, vkontakte, level')
                    ->where(['linkedin'=>$identity["id"]])->one();
                break;
            case "google":
                $usr=\app\models\Users::find()->select('id, refdt, vkontakte, level')
                    ->where(['google'=>$identity["id"]])->one();
                break;
            case "yandex":
                $usr=\app\models\Users::find()->select('id, refdt, vkontakte, level')
                    ->where(['yandex'=>$identity["id"]])->one();
                break;
            case "mailru":
                $usr=\app\models\Users::find()->select('id, refdt, vkontakte, level')
                    ->where(['mailru'=>$identity["id"]])->one();
                break;
            case "twitter":
                $usr=\app\models\Users::find()->select('id, refdt, vkontakte, level')
                    ->where(['twitter'=>$identity["id"]])->one();
                break;
            case "instagram":
                $usr=\app\models\Users::find()->select('id, refdt, vkontakte, level')
                    ->where(['instagram'=>$identity["id"]])->one();
                break;
        }
        if($usr['level'] == 5)
        {return true;}
        return false;
    }
}
