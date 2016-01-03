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
                    ->all()
            ]);
        }
        return $this->goHome();
    }
}
