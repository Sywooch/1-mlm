<?php
namespace app\controllers;
use yii\web\Controller;
use app\models\Users;
use app\models\Msgs;

class MsgController extends Controller
{
    public function actionIndex()
    {
        $this->layout = "empty";

        return $this->render('index');
    }
}