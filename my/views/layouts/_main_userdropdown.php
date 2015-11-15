<?php
$identity = \Yii::$app->getUser()->getIdentity()->profile;
$usrDt = \app\models\Users::find()->select('fn,ln,userpic')
        ->where(['socid' => $identity["id"]])
        ->andWhere(['service' => $identity["service"]])
        ->one();
?>

<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
<li class="dropdown dropdown-user dropdown-dark">
    <a href="javascript:;"
       class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
           <span class="username username-hide-on-mobile"><?php echo $usrDt->fn,' ',$usrDt->ln; ?></span>
                <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
                <img alt="user picture" class="img-circle" src="<?= $usrDt->userpic; ?>" />
            </a>
    <ul class="dropdown-menu dropdown-menu-default">
        <li>
            <a href="index.php?r=site%2Faccount">
                <i class="icon-user"></i> Мой профиль </a>
        </li>
        <li>
            <a href="index.php?r=site%2Fcalendar">
                <i class="icon-calendar"></i> Мой календарь </a>
        </li>
        <li>
            <a href="index.php?r=site%2Finbox">
                <i class="icon-envelope-open"></i> Сообщения
                <span class="badge badge-danger"> 3 </span>
            </a>
        </li>
        <li>
            <a href="index.php?r=site%2Ftodo">
                <i class="icon-rocket"></i> Мои задания
                <span class="badge badge-success"> 7 </span>
            </a>
        </li>
        <li class="divider"> </li>
<!--
        <li>
            <a href="page_user_lock_1.html">
                <i class="icon-lock"></i> Lock Screen </a>
        </li>
-->
        <li>
            <a href="index.php?r=/site/logout">
                <i class="icon-key"></i> Выход </a>
        </li>
    </ul>
</li>