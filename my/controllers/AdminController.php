<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\data\ActiveDataProvider;
use app\models\Users;

class AdminController extends Controller
{
    public function actionIndex()
    {
        if (!\Yii::$app->user->isGuest) {

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
                case "twitter":
                    $model = Users::find()->where(['twitter'=>$identity["id"]]);
                    break;
                case "instagram":
                    $model = Users::find()->where(['instagram'=>$identity["id"]]);
                    break;
            }

            $dataProvider = new ActiveDataProvider([
                'query' => Users::find()->orderBy(['id' => SORT_DESC])->limit(10),
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
}