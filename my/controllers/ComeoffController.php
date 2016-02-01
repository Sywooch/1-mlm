<?php

namespace app\controllers;

use app\models\Users;
use Yii;

class ComeoffController extends \yii\web\Controller
{
    public function actionComeoff()
    {
        if (!\Yii::$app->user->isGuest)
        {
            $model  =   $this->getUsrModel();
            $p = \Yii::$app->request->post();
            if($p)
            {
                $users = Users::findOne(['id' => $model->id]);
                if("no"==$p["cameoff"]["type"])
                {
                    $users->acvmail=0;
                }
                elseif("yes"==$p["cameoff"]["type"])
                {
                    $users->acvmail=1;
                }
                $users->update(false);
            }
            if(1==$model->acvmail)
               {return $this->render('cameoff');}
            else
               {return $this->render('cameon');}
        }
        return $this->goHome();
    }

    private function getUsrModel()
    {
        $identity = \Yii::$app->getUser()->getIdentity()->profile;
        switch($identity["service"])
        {
            case "facebook":
                return Users::find()->where(['facebook' => $identity["id"]])->one();
                break;
            case "vkontakte":
                return Users::find()->where(['vkontakte' => $identity["id"]])->one();
                break;
            case "linkedin_oauth2":
                return Users::find()->where(['linkedin' => $identity["id"]])->one();
                break;
            case "google":
                return Users::find()->where(['googleplus' => $identity["id"]])->one();
                break;
            case "yandex":
                return Users::find()->where(['yandex' => $identity["id"]])->one();
                break;
            case "mailru":
                return Users::find()->where(['mailru' => $identity["id"]])->one();
                break;
            case "twitter":
                return Users::find()->where(['twitter' => $identity["id"]])->one();
                break;
            case "instagram":
                return Users::find()->where(['instagram' => $identity["id"]])->one();
                break;
        }
    }
}

