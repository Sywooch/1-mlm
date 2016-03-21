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

 <style>
.skype_button
{
  cursor: pointer;
  bottom: 75px;
  right: 70px;
  position: relative;
  height: 190px;
  width: 140px;
  margin-top: 30px;
  margin-left: -80px;
}	 
	 
 </style>
 
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner ">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="//1-mlm.com"><img src="<?php
            echo
            (
                (!empty($brand))?$brand:"/img/logo.png"
            );
            ?>" alt="logo" class="logo-default" width="auto" height="auto" style="max-width:180px; max-height:50px;"></a>
            <div class="menu-toggler sidebar-toggler"></div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
           data-target=".navbar-collapse"> </a>
           
                   <!-- BEGIN PAGE ACTIONS -->
               <div class="page-actions">
	               
	        <div class="btn-group">
	                 <button class="btn green-soft page-quick-sidebar"  onclick="window.location='#';
	                 " type="button">  Ваш Консультант&nbsp; <i class="icon-microphone"></i></button>
                                    
            </div>
            
            <div class="btn-group">
                 
                    <button class="btn red" onclick="window.location='pricing';
                      " type="button"> Активировать&nbsp;<i class="icon-rocket"></i> </button>
            </div>
                
            <div class="btn-group">
	                 <button class="btn blue" onclick="window.location='skype:support.mlm?chat';
                     target='_blank';" type="button">  Есть Вопросы?&nbsp; <i class="icon-speech"></i></button>
                                    
            </div>
            
            <div class="btn-group">
	                 <button class="btn yellow-lemon"  onclick="window.location='partners';
	                 " type="button">  Партнерка&nbsp; <i class="icon-wallet"></i></button>
                                    
            </div>
            <div class="skype_button">
		<a href="skype:support.mlm?call">
		<img src="http://skypebutton.com/images/skype.svg" alt="" width="70" height="70" >
		</a>
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
                        <span class="sr-only">меню спонсора</span>
                        <big><b><i class="icon-logout" style="color: #F64747;"></i></b></big>
                        <!--<i class="icon-call-out" style="color: #F64747;"></i>-->
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