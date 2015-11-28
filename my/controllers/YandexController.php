<?php
namespace app\controllers;
use yii\web\Controller;
use app\models\Lp;

class YandexController extends Controller
{
    public function actionIndex()
    {
        $yanid=( !empty(\Yii::$app->request->get("yanid")) )?\Yii::$app->request->get("yanid"):null;
        $a=Lp::find()->where(['yandexmetrika'=>$yanid])->one();
        if($a)
        {
            return $this->render('index');
        }
        else
        {
            return $this->redirect('index',404);
        }
    }
}