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
    case "google":
        $usrDt=\app\models\Users::find()->select('fn,ln,userpic,refdt')->where(['google'=>$identity["id"]])->one();
    break;
    case "yandex":
        $usrDt=\app\models\Users::find()->select('fn,ln,userpic,refdt')->where(['yandex'=>$identity["id"]])->one();
    break;
    case "mailru":
        $usrDt=\app\models\Users::find()->select('fn,ln,userpic,refdt')->where(['mailru'=>$identity["id"]])->one();
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
                <img alt="user picture" class="img-circle" src="<?= $usrDt->userpic; ?>" width="39" height="39" />
            </a>
    <ul class="dropdown-menu dropdown-menu-default">
        <li>
            <a href="index.php?r=site%2Faccount">
                <i class="icon-user"></i> Мой профиль </a>
        </li>
        <li>
            <a href="index.php?r=site%2Fteam">
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
            <a href="#"
               id="ref-usr-btn"
               data-clipboard-text="https://1-mlm.com/ref-<?= $usrDt->refdt; ?>.html"
>
            <i class="icon-rocket"></i><span

            >&nbsp;Ваш линк</span> </a>
        </li>

        <li class="divider"> </li>

        <li>
            <a href="index.php?r=/site/logout">
                <i class="icon-key"></i> Выход </a>
        </li>
    </ul>
</li>