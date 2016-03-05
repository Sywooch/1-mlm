<?php
namespace app\controllers;
use yii\web\Controller;
use app\models\Lp;

class YandexController extends Controller
{
    public function actionIndex($yanid=null)
    {
        $cnt=Lp::find()->where(['yandexmetrika'=>$yanid])->count();
        if($cnt>0)
        {
            return $this->render('index');
        }
        else
        {
            return $this->redirect('index',404);
        }
    }
}