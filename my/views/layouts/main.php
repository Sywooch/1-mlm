<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use yii\bootstrap\Modal;
use app\assets\AppAsset;
use app\models\Users;
use app\models\Lp;
use app\models\Links;
use app\components\AlertWidget;

AppAsset::register($this);

$identity = \Yii::$app->getUser()->getIdentity()->profile;
switch($identity["service"])
{
    case "facebook":
        $model = Users::find()->where(['facebook'=>$identity["id"]]);
        break;
    case "vkontakte":
        $model = Users::find()->where(['vkontakte'=>$identity["id"]]);
        break;
    case "linkedin_oauth2":
        $model = Users::find()->where(['linkedin'=>$identity["id"]]);
        break;
    case "google":
        $model = Users::find()->where(['googleplus'=>$identity["id"]]);
        break;
    case "yandex":
        $model = Users::find()->where(['yandex'=>$identity["id"]]);
        break;
    case "mailru":
        $model = Users::find()->where(['mailru'=>$identity["id"]]);
        break;
    case "twitter":
        $model = Users::find()->where(['twitter'=>$identity["id"]]);
        break;
    case "instagram":
        $model = Users::find()->where(['instagram'=>$identity["id"]]);
        break;
}

$ref=( !empty($model->one()["ref"]) )?$model->one()["ref"]:"28020677"; //admin user refdt

$consultant = Users::find()
    ->where(['refdt' => $ref])->one();

$cntConTeam=Users::find()
    ->where(['ref' => $consultant["refdt"]])->count();

if( !empty(\Yii::$app->request->get("r")) )
{
    list($mod,$act) = explode("/",\Yii::$app->request->get("r"));
    unset($mod);
}else{$act=null;}

    $compName=Lp::find()
        ->select("name")
        ->where([
                'id'=>$consultant["companyid"]
            ])->one()->name;
/*
$this->registerJsFile('/my/web/mertonic/global/scripts/app.js');
$this->registerJsFile('/my/web/mertonic/pages/scripts/dashboard.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/my/web/mertonic/layouts/layout4/scripts/layout.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/my/web/mertonic/layouts/layout4/scripts/demo.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/my/web/mertonic/layouts/global/scripts/quick-sidebar.js', ['depends' => 'yii\web\JqueryAsset']);
*/

/*
<!-- BEGIN THEME GLOBAL SCRIPTS-->
<script src="mertonic/global/scripts/app.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS-->
<script src="mertonic/pages/scripts/dashboard.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS-->
<script src="mertonic/layouts/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="mertonic/layouts/layout4/scripts/demo.js" type="text/javascript"></script>
<script src="mertonic/layouts/global/scripts/quick-sidebar.js" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
*/

?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <!--[if IE 8]> <html lang="<?= Yii::$app->language ?>" class="ie8 no-js"> <![endif]-->
    <!--[if IE 9]> <html lang="<?= Yii::$app->language ?>" class="ie9 no-js"> <![endif]-->
    <!--[if !IE]><!-->
    <html lang="<?= Yii::$app->language ?>">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="mertonic/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <link rel="shortcut icon" href="favicon.ico" />
    </head>
    <!-- END HEAD -->
    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
    <?php $this->beginBody() ?>
    <!-- BEGIN HEADER -->
    <?php echo $this->render('_main_header', [
        'this'=>$this
    ]);?>
    <!-- END HEADER -->
    <!-- BEGIN HEADER & CONTENT DIVIDER -->
    <div class="clearfix"> </div>
    <!-- END HEADER & CONTENT DIVIDER -->
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <!-- BEGIN SIDEBAR -->
        <?php echo $this->render('_main_slider', compact('models'));?>
        <!-- END SIDEBAR -->
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->
            <div class="page-content">
                <!-- BEGIN PAGE HEAD-->
                <div class="page-head">
                    <!-- BEGIN PAGE TITLE -->
                    <!--<div class="page-title">
                        <h1>Dashboard
                            <small>dashboard & statistics</small>
                        </h1>
                    </div>-->
                    <!-- END PAGE TITLE -->
                    <!-- BEGIN PAGE TOOLBAR -->
                    <!--<div class="page-toolbar">-->
                    <!-- BEGIN THEME PANEL -->
                    <!-- END THEME PANEL -->
                    <!--</div>-->
                    <!-- END PAGE TOOLBAR -->
                </div>
                <!-- END PAGE HEAD-->
                <!-- BEGIN PAGE BREADCRUMB -->
                <!-- END PAGE BREADCRUMB -->
                <?= AlertWidget::widget(); ?>
                <?= $content; ?>
            </div>
            <!-- END CONTENT BODY -->
        </div>
        <!-- END CONTENT -->

        <!-- BEGIN QUICK SIDEBAR -->
        <a href="javascript:;" class="page-quick-sidebar-toggler">
            <i class="icon-login"></i>
        </a>
        <div class="page-quick-sidebar-wrapper" data-close-on-body-click="false">
            <div class="page-quick-sidebar">

                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab"> Консультант
                            <span class="badge badge-danger"></span>
                        </a>
                    </li>
<!--
                    <li>
                        <a href="javascript:;" data-target="#quick_sidebar_tab_2" data-toggle="tab"> Команда
                            <span class="badge badge-success"></span>
                        </a>
                    </li>
-->
                    <!--
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> More
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li>
                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                    <i class="icon-bell"></i> Alerts </a>
                            </li>
                            <li>
                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                    <i class="icon-info"></i> Notifications </a>
                            </li>
                            <li>
                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                    <i class="icon-speech"></i> Activities </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                    <i class="icon-settings"></i> Settings </a>
                            </li>
                        </ul>
                    </li>
                    -->
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
                        <div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">
                            <h3 class="list-heading">Ваш консультант</h3>
                            <ul class="media-list list-items">
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-success"><?= $cntConTeam;?></span>
                                    </div>
                                    <img class="media-object" src="<?php echo "mp.php/".$consultant["userpic"]; ?>" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading"><?php
                                            echo '&nbsp;<b>',$consultant["fn"],' ',$consultant["ln"],'</b>';
                                            ?></h4>
                                        <div class="media-heading-sub"><?= $compName; ?></div>
                                        <div class="media-heading-sub">
                                            <?php if( !empty($consultant["skype"]) ): ?>
                                                <a href="skype:<?php echo $consultant["skype"];?>?call">
                                                    <img src="https://az659314.vo.msecnd.net/assets/20151109092457/images/responsive/elements/favicon.ico"
                                                         style="border: none;" /></a>&nbsp;
                                                <?php
                                            endif;?>
                                            <?php if( !empty($consultant["facebook"]) ): ?>
                                                <a href="https://www.facebook.com/app_scoped_user_id/<?php echo $consultant["facebook"];?>/" target="_blank">
                                                    <img src="http://www.cambridgeenglish.org.ru/images/facebook-round-16x16.png"
                                                         style="border: none;" /></a>&nbsp;
                                                <?php
                                            endif;?>
                                            <?php if( !empty($consultant["vkontakte"]) ): ?>
                                                <a href="https://vk.com/id<?php echo $consultant["vkontakte"];?>" target="_blank">
                                                    <img src="http://solpole.ru/images/Vk.png"
                                                         style="border: none;" /></a>&nbsp;
                                                <?php
                                            endif;?>
                                            <?php if( !empty($consultant["linkedin"]) ): ?>
                                                <a href="<?php echo $consultant["linkedin"];?>" target="_blank">
                                                    <img src="http://www.ihi.org/_layouts/IHI/1033/Images/Icons/LinkedIn_Logo16px.png"
                                                         style="border: none;" /></a>&nbsp;
                                                <?php
                                            endif;?>
                                            <?php if( !empty($consultant["googleplus"]) ): ?>
                                                <a href="<?php echo $consultant["googleplus"];?>" target="_blank">
                                                    <img src="https://www.med.unc.edu/timetoconceive/images/GooglePlusLogo02.png/@@images/bba79109-8512-4c53-ab49-ec089794e883.png"
                                                         style="border: none;" /></a>&nbsp;
                                                <?php
                                            endif;?>
                                            <?php if( !empty($consultant["yandex"]) ): ?>
                                                <a href="<?php echo $consultant["yandex"];?>" target="_blank">
                                                    <img src="http://www.aquajournal.ru/forum/images/misc/yandex-logo.png"
                                                         style="border: none;" /></a>&nbsp;
                                                <?php
                                            endif;?>
                                            <?php if( !empty($consultant["mailru"]) ): ?>
                                                <a href="<?php echo $consultant["mailru"];?>" target="_blank">
                                                    <img src="http://x-race.info.images.1c-bitrix-cdn.ru/bitrix/templates/x-raceCalendar/components/bitrix/asd.share.buttons/share/images/mailru.png?1447097337608"
                                                         style="border: none;" /></a>
                                                <?php
                                            endif;?>

                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <hr />
                            <h3 class="list-heading">Проекты консультанта</h3>
                            <?php
                                $conslinks = Links::find()->where(['uid' => $consultant["id"]])->all();
                           foreach($conslinks as $val):
                               ?>
                               <a style="margin-left: 25px;" href="<?= $val->url; ?>" target="_blank"><?= $val->title; ?></a><br />
                               <?php endforeach;
                            ?>
                        </div>
                    </div>
                    <div class="tab-pane page-quick-sidebar-chat" id="quick_sidebar_tab_2">
                        <div class="page-quick-sidebar-alerts-list">
                            <!--<iframe id="player" src="index.php?r=site%2Finbox"
                                    style="border: 0;
                                    width: 100%;
                                    height: 600px;"
                            ></iframe>-->
                            <?php //echo $this->render('inbox') ?>
                        </div>
                    </div>
                    <div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">
                        <div class="page-quick-sidebar-settings-list">
                            <h3 class="list-heading">General Settings</h3>
                            <ul class="list-items borderless">
                                <li> Enable Notifications
                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                <li> Allow Tracking
                                    <input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                <li> Log Errors
                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                <li> Auto Sumbit Issues
                                    <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                <li> Enable SMS Alerts
                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                            </ul>
                            <h3 class="list-heading">System Settings</h3>
                            <ul class="list-items borderless">
                                <li> Security Level
                                    <select class="form-control input-inline input-sm input-small">
                                        <option value="1">Normal</option>
                                        <option value="2" selected>Medium</option>
                                        <option value="e">High</option>
                                    </select>
                                </li>
                                <li> Failed Email Attempts
                                    <input class="form-control input-inline input-sm input-small" value="5" /> </li>
                                <li> Secondary SMTP Port
                                    <input class="form-control input-inline input-sm input-small" value="3560" /> </li>
                                <li> Notify On System Error
                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                <li> Notify On SMTP Error
                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                            </ul>
                            <div class="inner-content">
                                <button class="btn btn-success">
                                    <i class="icon-settings"></i> Save Changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END QUICK SIDEBAR -->
    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->
    <?php echo $this->render('_main_footer', compact('models'));?>
    <!-- END FOOTER -->
    <!--[if lt IE 9]>
    <script src="mertonic/global/plugins/respond.min.js"></script>
    <script src="mertonic/global/plugins/excanvas.min.js"></script>
    <![endif]-->
    <!-- BEGIN CORE PLUGINS-->
    <script src="mertonic/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="mertonic/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="mertonic/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
    <script src="mertonic/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="mertonic/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="mertonic/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
    <script src="mertonic/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="mertonic/global/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
    <script src="mertonic/global/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <script src="mertonic/global/plugins/morris/morris.min.js" type="text/javascript"></script>
    <script src="mertonic/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
    <script src="mertonic/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
    <script src="mertonic/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
    <script src="mertonic/global/plugins/amcharts/amcharts/amcharts.js" type="text/javascript"></script>
    <script src="mertonic/global/plugins/amcharts/amcharts/serial.js" type="text/javascript"></script>
    <script src="mertonic/global/plugins/amcharts/amcharts/pie.js" type="text/javascript"></script>
    <script src="mertonic/global/plugins/amcharts/amcharts/radar.js" type="text/javascript"></script>
    <script src="mertonic/global/plugins/amcharts/amcharts/themes/light.js" type="text/javascript"></script>
    <script src="mertonic/global/plugins/amcharts/amcharts/themes/patterns.js" type="text/javascript"></script>
    <script src="mertonic/global/plugins/amcharts/amcharts/themes/chalk.js" type="text/javascript"></script>
    <script src="mertonic/global/plugins/amcharts/ammap/ammap.js" type="text/javascript"></script>
    <script src="mertonic/global/plugins/amcharts/ammap/maps/js/worldLow.js" type="text/javascript"></script>
    <script src="mertonic/global/plugins/amcharts/amstockcharts/amstock.js" type="text/javascript"></script>
    <script src="mertonic/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
    <script src="mertonic/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
    <script src="mertonic/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
    <script src="mertonic/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
    <script src="mertonic/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
    <script src="mertonic/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
    <!--------------------------------------------------------------------------------------------------------------------->
    <script src="mertonic/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
    <script src="mertonic/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
    <script src="mertonic/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
    <script src="mertonic/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
    <script src="mertonic/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
    <script src="mertonic/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
    <script src="mertonic/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>

    <script src="mertonic/layouts/global/scripts/quick-sidebar.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS-->
    <!---

<pre>
    <?php
    //print_r($this->getView());
    ?>
</pre>

<script src="mertonic/global/scripts/app.js" type="text/javascript"></script>
<script src="mertonic/pages/scripts/dashboard.js" type="text/javascript"></script>
<script src="mertonic/layouts/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="mertonic/layouts/layout4/scripts/demo.js" type="text/javascript"></script>
<script src="mertonic/layouts/global/scripts/quick-sidebar.js" type="text/javascript"></script>

-----------------------------------------------------------
<!---
<script src="mertonic/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
<script src="mertonic/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="mertonic/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
<script src="mertonic/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>
<script src="mertonic/pages/scripts/form-wizard.min.js" type="text/javascript"></script>

<!--------------------------------------------------------------------->

    <?php //echo $this->render('_main_modal_eauth', compact('models'));?>
    <?php $this->endBody() ?>

    <script src="s/js/step.js"></script>

    <script src="s/js/clipboard.min.js"></script>
    <script>
        var clipboard = new Clipboard("#ref-usr-btn");
            $("#ref-usr-btn").click(function(){
                alert('Ваша реферальная ссылка скопирована в буфер обмена');
            });
    </script>

    </body>
    </html>
<?php $this->endPage() ?>