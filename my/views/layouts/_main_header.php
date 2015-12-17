<?php
$identity = \Yii::$app->getUser()->getIdentity()->profile;
$usr = \app\models\Users::find();
switch($identity["service"])
{
    case "facebook":
        $usr=$usr->where(['facebook' => $identity["id"]]);
    break;
    case "vkontakte":
        $usr=$usr->where(['vkontakte' => $identity["id"]]);
    break;
    case "linkedin_oauth2":
        $usr=$usr->where(['linkedin' => $identity["id"]]);
    break;
    case "google":
        $usr=$usr->where(['googleplus' => $identity["id"]]);
    break;
    case "yandex":
        $usr=$usr->where(['yandex' => $identity["id"]]);
    break;
    case "mailru":
        $usr=$usr->where(['mailru' => $identity["id"]]);
    break;
    case "twitter":
        $usr=$usr->where(['twitter' => $identity["id"]]);
        break;
    case "instagram":
        $usr=$usr->where(['instagram' => $identity["id"]]);
        break;
}
$usr=$usr->one();
$brand=\app\models\Lp::find()->where(['id'=>$usr['companyid']])->one();
$brand=$brand["brandicon"];
?>
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner ">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <img src="<?php
            echo
            (
                (!empty($brand))?$brand:"/img/logo.png"
            );
            ?>" alt="logo" class="logo-default" width="auto" height="50">
            <div class="menu-toggler sidebar-toggler"></div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
           data-target=".navbar-collapse"> </a>
        <!-- BEGIN PAGE TOP -->
        <div class="page-top">
            <!-- END HEADER SEARCH BOX -->
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <li class="separator hide"> </li>
                    <li class="separator hide"> </li>
                    <!-- END INBOX DROPDOWN -->
                    <li class="separator hide"> </li>
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <?php echo $this->render('_main_userdropdown', [
                        'this'=>$this
                    ]); ?>
                    <!-- END USER LOGIN DROPDOWN -->
                    <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                    <li class="dropdown dropdown-extended quick-sidebar-toggler">
                        <span class="sr-only">Toggle Quick Sidebar</span>
                        <i class="icon-logout"></i>
                    </li>
                    <!-- END QUICK SIDEBAR TOGGLER -->
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END PAGE TOP -->
    </div>
    <!-- END HEADER INNER -->
</div>