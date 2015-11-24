<?php
use yii\Helpers\ArrayHelper;
use yii\Helpers\Html;
use app\models\Lp;
use yii\db\Query;

$query = new Query();
$items=[
    'Компании'=>ArrayHelper::map(Lp::find()
        ->where('id < "1002"')
        ->all(),
        'id','name')
];

$compId = ( !empty($model["companyid"]) )?$model["companyid"]:1;

echo Html::activeDropDownList(
    Lp::find()->where( $compId )->one(),
    'id', $items);
?>