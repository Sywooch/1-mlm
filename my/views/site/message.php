<?php

use app\models\Users;

$identity = \Yii::$app->getUser()->getIdentity()->profile;
switch($identity["service"])
{
    case "facebook":
        $usrDt = Users::find()->where(['facebook'=>$identity["id"]])->one();
        break;
    case "vkontakte":
        $usrDt = Users::find()->where(['vkontakte'=>$identity["id"]])->one();
        break;
    case "linkedin_oauth2":
        break;
    case "google":
        $usrDt = Users::find()->where(['googleplus'=>$identity["id"]])->one();
        break;
    case "yandex":
        $usrDt = Users::find()->where(['yandex'=>$identity["id"]])->one();
        break;
    case "mailru":
        $usrDt = Users::find()->where(['mailru'=>$identity["id"]])->one();
        break;
    case "twitter":
        $usrDt = Users::find()->where(['twitter'=>$identity["id"]])->one();
        break;
    case "instagram":
        $usrDt = Users::find()->where(['instagram'=>$identity["id"]])->one();
        break;
}
$usrDt2 = Users::find()->where(['id'=>$second_user])->one();

foreach ($data as $msg) {
    if ($msg['uid4'] == $usrDt['id']) {
        ?>
        <div class="post out">
            <img class="avatar" alt="" src="<?=$usrDt['userpic'];?>" />
            <div class="message">
                <span class="arrow"></span>
                <a style="color: black;" href="javascript:;" class="name"><?php echo $usrDt['fn'], ' ', $usrDt['ln']?></a>
                <span style="color: white;" class="body"> <?=$msg['msg']?> </span>
            </div>
        </div>
    <?php
    } else {
        ?>
        <div class="post in">
            <img class="avatar" alt="" src="<?=$usrDt2['userpic'];?>" />
            <div class="message">
                <span class="arrow"></span>
                <a style="color: black;" href="javascript:;" class="name"><?php echo $usrDt2['fn'], ' ', $usrDt2['ln']?></a>
                <span style="color: white;" class="body"> <?=$msg['msg']?> </span>
            </div>
        </div>
        <?php
    }
}

?>