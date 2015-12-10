<?php
namespace app\controllers;
use yii\web\Controller;
use app\models\Users;
use app\models\Lp;

class LandController extends Controller
{
    public function actionIndex()
    {
        $this->layout = "empty";
        $landid = (int)\Yii::$app->request->get("landid");
        $uid = (string)\Yii::$app->request->get("uid");
        $data=(new \yii\db\Query())->from([Lp::tableName()])
            ->where(['id' => $landid])
            ->one();
        $lp=Lp::findOne(['id' => $landid]);
        $lp->clicks=++$lp->clicks;
        $lp->update(false);

        if( $data["id"]>501 )
        {
            $usr = Users::find()->where(['id' => $data["uid"]])->one();
        }
        else
        {
            $usr = Users::find()->where(['refdt' => $uid])->one();
        }
        return $this->render('land_'.$data["landtype"], [
            'data'=>$data,
            'user'=>$usr
        ]);
    }
}