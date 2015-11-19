<?php
use yii\Helpers\ArrayHelper;
use yii\Helpers\Html;
use app\models\Lp;
use app\models\Users;

$identity = \Yii::$app->getUser()->getIdentity()->profile;
$query = new \yii\db\Query();

$usr=$query->from([Users::tableName()])
    ->where(['socid' => $identity["id"]])
    ->andWhere(['service' => $identity["service"]])
    ->one();

$params = [
    'prompt' => '-выберите из списка-'
];

$items=[
    'Создание'=>[
        '0'=>'Создать страницу'
    ],
    'Редактирование'=>ArrayHelper::map(Lp::find()
        ->where(['uid' => $usr["id"]])
        ->all(),
        'id','name')
];

$lpId=\Yii::$app->request->get("lp");
$lpId=( !empty($lpId) )? $lpId: 1;

echo Html::activeDropDownList(
    Lp::find()->where( ['id'=>$lpId] )->one(),
    'id', $items);
?>