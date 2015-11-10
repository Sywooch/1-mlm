<?php

$identity = \Yii::$app->getUser()->getIdentity()->profile;
$usrDt = \app\models\Users::find()->select('fn,ln,userpic')
    ->where(['socid' => $identity["id"]])
    ->andWhere(['service' => $identity["service"]])
    ->one();

$this->registerJsFile('/my/web/mertonic/global/scripts/app.js');

$this->registerJsFile('/my/web/mertonic/pages/scripts/dashboard.js'/*, ['depends' => 'yii\web\JqueryAsset']*/);
$this->registerJsFile('/my/web/mertonic/layouts/layout4/scripts/layout.js'/*, ['depends' => 'yii\web\JqueryAsset']*/);
$this->registerJsFile('/my/web/mertonic/layouts/layout4/scripts/demo.js'/*, ['depends' => 'yii\web\JqueryAsset']*/);
$this->registerJsFile('/my/web/mertonic/layouts/global/scripts/quick-sidebar.js'/*, ['depends' => 'yii\web\JqueryAsset']*/);

$this->registerJsFile("/my/web/mertonic/global/plugins/select2/js/select2.full.min.js"/*, ['depends' => 'yii\web\JqueryAsset']*/);
$this->registerJsFile("/my/web/mertonic/global/plugins/jquery-validation/js/jquery.validate.min.js"/*, ['depends' => 'yii\web\JqueryAsset']*/);
$this->registerJsFile("/my/web/mertonic/global/plugins/jquery-validation/js/additional-methods.min.js"/*, ['depends' => 'yii\web\JqueryAsset']*/);
$this->registerJsFile("/my/web/mertonic/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"/*, ['depends' => 'yii\web\JqueryAsset']*/);
$this->registerJsFile("/my/web/mertonic/pages/scripts/form-wizard.min.js"/*, ['depends' => 'yii\web\JqueryAsset']*/);

$this->registerJsFile('http://www.youtube.com/player_api');

$this->title = '1-mlm';
//$this->params['breadcrumbs'][] = $this->title;
?>
<!-- BEGIN PAGE BASE CONTENT -->
    <div class="row">
        <div class="col-md-12">
            <div class="m-heading-1 border-green m-bordered">
                <h3>Добро пажаловать, <?php echo $usrDt->fn,' ',$usrDt->ln; ?></h3>
                <p> Вы легко и быстро сможете сами разобраться, как работает Система, посмотрев короткий видеообзор. </p>
                <p> Ваш кольсунтальтант: [имя пользователя который пригласил]
                    <a class="btn red btn-outline" href="http://vadimg.com/twitter-bootstrap-wizard-example" target="_blank">[кнопка на профиль спонсора] the official documentation</a>
                </p>
            </div>
            <div class="portlet light bordered" id="form_wizard_1">
                <div class="portlet-title">
                    <div class="caption">
                        <i class=" icon-layers font-red"></i>
                        <span class="caption-subject font-red bold uppercase"> Для настройки системы -
                            <span class="step-title"> осталось несколько простых шагов </span>
                        </span>
                    </div>
                    <div class="actions">
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-cloud-upload"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-wrench"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-trash"></i>
                        </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <form action="#" class="form-horizontal" id="submit_form" method="POST">
                        <div class="form-wizard">
                            <div class="form-body">
                                <ul class="nav nav-pills nav-justified steps">
                                    <li>
                                        <a href="#tab1" data-toggle="tab" class="step">
                                            <span class="number"> 1 </span>
                                            <span class="desc">
                                                <i class="fa fa-check"></i> Введение </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#tab2" data-toggle="tab" class="step">
                                            <span class="number"> 2 </span>
                                            <span class="desc">
                                                <i class="fa fa-check"></i> Обзор </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#tab3" data-toggle="tab" class="step active">
                                            <span class="number"> 3 </span>
                                            <span class="desc">
                                                <i class="fa fa-check"></i> Настройка </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#tab4" data-toggle="tab" class="step">
                                            <span class="number"> 4 </span>
                                            <span class="desc">
                                                <i class="fa fa-check"></i> Создание станицы </span>
                                        </a>
                                    </li>
                                </ul>
                                <div id="bar" class="progress progress-striped" role="progressbar">
                                    <div class="progress-bar progress-bar-success"> </div>
                                </div>
                                <div class="tab-content">
                                    <div class="alert alert-danger display-none">
                                        <button class="close" data-dismiss="alert"></button> You have some form errors. Please check below. </div>
                                    <div class="alert alert-success display-none">
                                        <button class="close" data-dismiss="alert"></button> Your form validation is successful! </div>
                                    <div class="tab-pane active" id="tab1">
                                        <h3 class="block">Начните с просмотра этого видео</h3>
                                        <div id="player"></div>
                                    </div>
                                    <div class="tab-pane" id="tab2">
                                        <h3 class="block">Видео обзор системы</h3>

                                        <iframe width="640" height="360" src="https://www.youtube.com/embed/tylvmEpKcLY?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>

                                    </div>
                                    <div class="tab-pane" id="tab3">
                                        <h3 class="block">Здесь дублируем поля профиля ( с траницы настройка профиля) </h3>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Card Holder Name
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" name="card_name" />
                                                <span class="help-block"> </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Card Number
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" name="card_number" />
                                                <span class="help-block"> </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">CVC
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-4">
                                                <input type="text" placeholder="" class="form-control" name="card_cvc" />
                                                <span class="help-block"> </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Expiration(MM/YYYY)
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-4">
                                                <input type="text" placeholder="MM/YYYY" maxlength="7" class="form-control" name="card_expiry_date" />
                                                <span class="help-block"> e.g 11/2020 </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Payment Options
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-4">
                                                <div class="checkbox-list">
                                                    <label>
                                                        <input type="checkbox" name="payment[]" value="1" data-title="Auto-Pay with this Credit Card." /> Auto-Pay with this Credit Card </label>
                                                    <label>
                                                        <input type="checkbox" name="payment[]" value="2" data-title="Email me monthly billing." /> Email me monthly billing </label>
                                                </div>
                                                <div id="form_payment_error"> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab4">
                                        <h3 class="block">Создание страницы захвата</h3>

                                        <iframe width="640" height="360" src="https://www.youtube.com/embed/tylvmEpKcLY?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>

                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <a href="javascript:;" class="btn default button-previous">
                                            <i class="fa fa-angle-left"></i> Back </a>
                                        <button id="nxt_bnt" class="btn btn-outline green button-next" disabled=""> Continue
                                            <i class="fa fa-angle-right"></i>
                                        </button>
                                        <a href="javascript:;" class="btn green button-submit"> Submit
                                            <i class="fa fa-check"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<script>

    // create youtube player
    var player;
    function onYouTubePlayerAPIReady() {
        player = new YT.Player('player',{
            height: '360',
            width: '640',
            videoId: 'tylvmEpKcLY',
            playerVars: {
                'autoplay': 0,
                'controls': 1,
                'showinfo': '0',
                'rel': 0
            },
            events: {
                //'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
            }
        });
    }
    /*
     // autoplay video
     function onPlayerReady(event) {
     event.target.playVideo();
     }
     */
    // when video ends
    function onPlayerStateChange(event) {
        if(event.data === 0) {
            // alert('done');
            $("#nxt_bnt").attr("disabled", false);
        }
    }

</script>

     <!-- END PAGE BASE CONTENT -->