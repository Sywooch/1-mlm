<?php


use yii\Helpers\ArrayHelper;
use app\models\Lp;
use app\models\Users;

$identity = \Yii::$app->getUser()->getIdentity()->profile;
$query = new \yii\db\Query();

switch($identity["service"])
{
    case "facebook":
        $usr=$query->from([Users::tableName()])->where(['facebook'=>$identity["id"]])->one();
        break;
    case "vkontakte":
        $usr=$query->from([Users::tableName()])->where(['vkontakte'=>$identity["id"]])->one();
        break;
    case "linkedin_oauth2":
        $usr=$query->from([Users::tableName()])->where(['linkedin'=>$identity["id"]])->one();
        break;
    case "google":
        $usr=$query->from([Users::tableName()])->where(['googleplus'=>$identity["id"]])->one();
        break;
    case "yandex":
        $usr=$query->from([Users::tableName()])->where(['yandex'=>$identity["id"]])->one();
        break;
    case "mailru":
        $usr=$query->from([Users::tableName()])->where(['mailru'=>$identity["id"]])->one();
        break;
    case "twitter":
        $usr=$query->from([Users::tableName()])->where(['twitter'=>$identity["id"]])->one();
        break;
    case "instagram":
        $usr=$query->from([Users::tableName()])->where(['instagram'=>$identity["id"]])->one();
        break;
}


$params = [
    'prompt' => '-выберите из списка-'
];

$lp=\app\models\Lp::find()
    //->where(['<','id',501])
    ->where("id<501")
    ->all();

$youcomp=ArrayHelper::map(Lp::find()
    ->where(['uid' => $usr["id"]])
    ->all(),
    'id','name');

$companies = \yii\Helpers\ArrayHelper::map($lp,'id','name');
if( sizeof($youcomp)<1  )
    {$youcomp=[''=>'вы еще не создали страницу'];}
$items=[
    'Вашы'=>$youcomp,
    'Компании'=>$companies
];

echo $form->field( $model, 'companyid', ["template" => "<label class='col-md-3 control-label'>Выбор Компании</label>
                                                        <div class='col-md-9'>\n{input}\n{hint}\n{error}</div>"] )
    ->dropDownList($items,$params);
?>