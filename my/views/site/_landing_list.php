<?php
use yii\Helpers\ArrayHelper;
use yii\Helpers\Html;
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

$items=[
    'Создание'=>[
        '000'=>'**************',
        '0'=>'Создать страницу',
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