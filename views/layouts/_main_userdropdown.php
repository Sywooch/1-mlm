<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
<li class="dropdown dropdown-user dropdown-dark">
    <a href="javascript:;"
       class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
           <span class="username username-hide-on-mobile"><?php
            if(!Yii::$app->user->isGuest):
                echo  \Yii::$app->user->identity->username;?>
                <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
                <img alt="" class="img-circle" src="mertonic/layouts/layout4/img/avatar9.jpg" />
            <?php
            else:
               //echo $this->render('_main_modal_eauth', compact('models'));
            ?>
            <button type="button" data-toggle="modal" data-target="#w0">log-in</button>
            <?php
            endif;
            ?></span>
</a>
    <?php if(!Yii::$app->user->isGuest): ?>
    <ul class="dropdown-menu dropdown-menu-default">
        <li>
            <a href="page_user_profile_1.html">
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
    <?php
endif; ?>
</li>