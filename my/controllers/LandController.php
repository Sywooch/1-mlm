<?php
namespace app\controllers;
use yii\web\Controller;
use app\models\Users;
use app\models\Lp;

class YandexController extends Controller
{
    public function actionIndex()
    {
        $this->layout = "landing";
        $landid = (int)\Yii::$app->request->get("landid");
        $uid = (int)\Yii::$app->request->get("uid");
        $query11=new \yii\db\Query();
        $data=$query11->from([Lp::tableName()])
            ->where(['id' => $landid])
            ->one();
        if( $data["id"]>1001 )
        {
            $usr = Users::find()->where(['id' => $data["uid"]])->one();
        }
        else
        {
            $usr = Users::find()->where(['id' => $uid])->one();
        }
        return $this->render('land_'.$data["landtype"], [
            'data'=>$data,
            'user'=>$usr
        ]);
    }
}