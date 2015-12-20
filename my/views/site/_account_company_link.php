<?php
use app\models\Users;
use app\models\UsrCompaniesLink;

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

$usrCompLink=UsrCompaniesLink::find()
    ->where([
        "uid"=>$usr["id"],
        "lp_id"=>$usr["companyid"]
    ])->one();
?>

<label class='col-md-4 control-label'>Рефиральная ссылка</label>
<div class='col-md-8'>
    <div class="input-icon">
        <!--<i class="icon-user"></i>-->
        <input
            class="form-control"
            name="Users-comp[link]" value="<?= $usrCompLink->link; ?>" type="text">
        <div class="form-control-focus"></div>
        <span class="help-block">Ваша рефиральная ссылка на регистрацию в компанию</span>
        
    </div>
</div>

