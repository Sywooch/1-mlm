<?php

namespace app\controllers;

use app\models\Lpbuilder;

class OwnlpController extends \yii\web\Controller
{
    public function actionIndex($lp=1)
    {
        $this->layout = "empty";

        $dt=Lpbuilder::find()
            ->select(['dt'])
            ->where(['id'=>$lp])
            ->one();

        print_r($dt->dt);

    }
}