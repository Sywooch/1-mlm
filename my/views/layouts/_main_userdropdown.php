<?php
$identity = \Yii::$app->getUser()->getIdentity()->profile;
switch($identity["service"])
{
    case "facebook":
        $usrDt=\app\models\Users::find()->select('fn,ln,userpic,refdt')->where(['facebook'=>$identity["id"]])->one();
        break;
    case "linkedin_oauth2":
        $usrDt=\app\models\Users::find()->select('fn,ln,userpic,refdt')->where(['linkedin'=>$identity["id"]])->one();
    break;
    case "google_oauth":
        $usrDt=\app\models\Users::find()->select('fn,ln,userpic,refdt')->where(['googleplus'=>$identity["id"]])->one();
    break;
    case "yandex":
        $usrDt=\app\models\Users::find()->select('fn,ln,userpic,refdt')->where(['yandex'=>$identity["id"]])->one();
    break;
    case "mailru":
        $usrDt=\app\models\Users::find()->select('fn,ln,userpic,refdt')->where(['mailru'=>$identity["id"]])->one();
    break;
    case "twitter":
        $usrDt=\app\models\Users::find()->select('fn,ln,userpic,refdt')->where(['twitter'=>$identity["id"]])->one();
        break;
    case "instagram":
        $usrDt=\app\models\Users::find()->select('fn,ln,userpic,refdt')->where(['instagram'=>$identity["id"]])->one();
        break;
	case "vkontakte":
	default:
        $usrDt=\app\models\Users::find()->select('fn,ln,userpic,refdt')->where(['vkontakte'=>$identity["id"]])->one();
    break;
	$object = new StdClass;
	$usrDt=(!empty($usrDt))?$usrDt:$object;
}
?>
<!-- DOC: Применить "dropdown-dark" После класса ниже "dropdown-extended" чтобы изменить стиль раскрывающийся список меню -->
<li class="dropdown dropdown-user dropdown-dark">
    <a href="javascript:;"
       class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
           <span class="username username-hide-on-mobile"><?php echo $usrDt->fn,' ',$usrDt->ln; ?></span>
                <!-- DOC: Не удаляйте ниже пустого пространства (&nbsp;) как нарочно использовал -->
                <img alt="user picture" class="img-circle" src="<?=(!empty(@$usrDt->userpic))?@$usrDt->userpic:'http://1-mlm.com/img/up0.png'?>" width="39" height="39" />
            </a>
    <ul class="dropdown-menu dropdown-menu-default">
        <li>
            <a href="<?= Yii::$app->urlManager->createUrl(['site/account']) ?>">
                <i class="icon-user"></i> Мой профиль </a>
        </li>
        <li>
            <a href="<?= Yii::$app->urlManager->createUrl(['brand/brand']) ?>">
                <i class="icon-user"></i> Мой Брендинг </a>
        </li>
        
        <li>
            <a href="<?= Yii::$app->urlManager->createUrl(['site/team']) ?>">
                <i class="icon-diamond"></i> Моя Команда </a>

        </li>
<!--
        <li>
            <a href="index.php?r=site%2Fcalendar">
                <i class="icon-calendar"></i> Мой календарь </a>
        </li>
        <li>
            <a href="index.php?r=site%2Finbox">
                <i class="icon-envelope-open"></i> Сообщения
                <span class="badge badge-danger"> 3 </span>
                <span class="badge badge-success"> 7 </span>
            </a>
        </li>
-->
        <li>
 <!--
        <a href="#"
               id="ref-usr-btn"
               data-clipboard-text="https://1-mlm.com/ref-<?= $usrDt->refdt; ?>.html"
>
 -->
            <a href="<?= Yii::$app->urlManager->createUrl(['site/myref']) ?>">
            <i class="icon-rocket"></i><span

            >&nbsp;Реф. линк системы</span> </a>
        </li>

        <li class="divider"> </li>

        <li>
            <a href="<?= Yii::$app->urlManager->createUrl(['site/logout']) ?>">
                <i class="icon-key"></i> Выход </a>
        </li>
    </ul>
</li>