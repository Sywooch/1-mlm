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

$c_msg=\yii::$app->db->createCommand('SELECT count(status) AS c_msg
                                                       FROM msgs
                                                       WHERE ((uid4 = '.$user["id"].') AND (uid2 = '.$user_id.')) AND (status=1)
                                                       GROUP BY uid4, uid2')->queryOne();

?>
<li class="media" onclick="$(this).children('.ms').html(''); getMessages($(this).children('input').val()); readMessage($(this).children('input').val());">
    <div class="media-status ms" style="float: right;">
        <!--<span class="badge badge-success">8</span>-->
        <?php if ($c_msg): ?>
            <span class="badge badge-success"><?=$c_msg['c_msg'];?></span>
        <?php endif; ?>
    </div>
    <img class="media-object" src="<?=$user['userpic']; ?>" alt="...">
    <div class="media-body">
        <h4 class="media-heading"><?php echo $user['fn'],' ',$user['ln']; ?></h4>

        <div class="media-heading-sub"> <!--Project Manager-->
            <?php
            $level = \app\models\Levels::find()->where(['id' => $user['level']])->one();
            echo $level['title'];
            ?>
        </div>
    </div>
    <input class="val_id" type="hidden" value="<?=$user['id']?>">
</li>