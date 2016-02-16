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
            ?>" alt="logo" class="logo-default" width="auto" height="auto" style="max-width:180px; max-height:50px;">
            <div class="menu-toggler sidebar-toggler"></div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
           data-target=".navbar-collapse"> </a>
           
                   <!-- BEGIN PAGE ACTIONS -->
        <!-- DOC: Remove "hide" class to enable the page header actions -->
        <div class="page-actions">
            <div class="btn-group">
                 <!--<button type="button" class="btn green-meadow btn-sm dropdown-toggle" onclick="window.location='https://1-mlm.com/index.php?r=site%2Fpricing' data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                     <span class="hidden-sm hidden-xs">Обновится до платной версии&nbsp;</span>
                   <i class="fa fa-angle-down"></i>
                </button>-->
                
                 <button class="btn green-meadow btn-sm dropdown-toggle" onclick="window.location='https://1-mlm.com/index.php?r=site%2Fpricing';
                                    target='_blank';" type="button">Обновится до платной версии&nbsp;</button>
                <!--<ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="javascript:;">
                            <i class="icon-docs"></i> New Post </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="icon-tag"></i> New Comment </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="icon-share"></i> Share </a>
                    </li>
                    <li class="divider"> </li>
                    <li>
                        <a href="javascript:;">
                            <i class="icon-flag"></i> Comments
                            <span class="badge badge-success">4</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="icon-users"></i> Feedbacks
                            <span class="badge badge-danger">2</span>
                        </a>
                    </li>
                </ul>-->
            </div>
        </div>
        <!-- END PAGE ACTIONS -->
        
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