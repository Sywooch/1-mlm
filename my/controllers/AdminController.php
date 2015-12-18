<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\data\ActiveDataProvider;
use app\models\Users;

class AdminController extends Controller
{
    public function actionAdnew()
    {
        if (!\Yii::$app->user->isGuest)
        {
            if(!$this->isAdmin()){return $this->goHome();}

            $dataProvider = new ActiveDataProvider([
                'query' => Users::find()->orderBy(['id' => SORT_DESC]),
                    //->limit(10),
                'pagination' => [
                    'pageSize' => 10,
                ],
            ]);

            return $this->render('index', [
                'dataProvider' => $dataProvider,
            ]);
        }

        return $this->goHome();
    }

    public function actionAdactive()
    {
        if (!\Yii::$app->user->isGuest)
        {
            if(!$this->isAdmin()){return $this->goHome();}

            $dataProvider = new ActiveDataProvider([
                'query' => Users::find()->orderBy(['active' => SORT_DESC]),
                //->limit(25),
                'pagination' => [
                    'pageSize' => 25,
                ],
            ]);

            return $this->render('active', [
                'dataProvider' => $dataProvider,
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