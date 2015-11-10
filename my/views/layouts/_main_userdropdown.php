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
                <img alt="user picture" class="img-circle" src="<?php
                if( empty($usrDt->userpic) )
                    {echo "http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image";}
                else{echo Yii::getAlias('@web').'/imgs/'.$usrDt->userpic;} ?>" />
            </a>
    <ul class="dropdown-menu dropdown-menu-default">
        <li>
            <a href="index.php?r=site%2Fprofile">
                <i class="icon-user"></i> My Profile </a>
        </li>
        <li>
            <a href="app_calendar.html">
                <i class="icon-calendar"></i> My Calendar </a>
        </li>
        <li>
            <a href="app_inbox.html">
                <i class="icon-envelope-open"></i> My Inbox
                <span class="badge badge-danger"> 3 </span>
            </a>
        </li>
        <li>
            <a href="app_todo_2.html">
                <i class="icon-rocket"></i> My Tasks
                <span class="badge badge-success"> 7 </span>
            </a>
        </li>
        <li class="divider"> </li>
        <li>
            <a href="page_user_lock_1.html">
                <i class="icon-lock"></i> Lock Screen </a>
        </li>
        <li>
            <a href="index.php?r=/site/logout">
                <i class="icon-key"></i> Log Out </a>
        </li>
    </ul>
</li>