<?php
$params = [
    'prompt' => '-выберите из списка-'
];

$lp=\app\models\Lp::find()->all();
$youcomp=array();

$companies = \yii\Helpers\ArrayHelper::map($lp,'id','name');
if( sizeof($youcomp)<1  )
    {$youcomp=[''=>'вы еще не создали страницу'];}
$items=[
    'Вашы'=>$youcomp,
    'Компании'=>$companies
];

echo $form->field( $model, 'rating', ["template" => "<label>Ваша компания</label>\n{input}\n{hint}\n{error}"] )
    ->dropDownList($items,$params);
?>