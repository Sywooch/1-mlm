<?php
$this->registerJsFile('/mertonic/global/scripts/app_acc.js');

$this->registerJsFile('/mertonic/pages/scripts/dashboard.js'/*, ['depends' => 'yii\web\JqueryAsset']*/);
$this->registerJsFile('/mertonic/layouts/layout4/scripts/layout.js'/*, ['depends' => 'yii\web\JqueryAsset']*/);
$this->registerJsFile('/mertonic/layouts/layout4/scripts/demo.js'/*, ['depends' => 'yii\web\JqueryAsset']*/);
$this->registerJsFile('/mertonic/layouts/global/scripts/quick-sidebar.js'/*, ['depends' => 'yii\web\JqueryAsset']*/);

$this->registerJsFile("/mertonic/global/plugins/select2/js/select2.full.min.js"/*, ['depends' => 'yii\web\JqueryAsset']*/);
$this->registerJsFile("/mertonic/global/plugins/jquery-validation/js/jquery.validate.min.js"/*, ['depends' => 'yii\web\JqueryAsset']*/);
$this->registerJsFile("/mertonic/global/plugins/jquery-validation/js/additional-methods.min.js"/*, ['depends' => 'yii\web\JqueryAsset']*/);


$this->registerJsFile("/mertonic/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"/*, ['depends' => 'yii\web\JqueryAsset']*/);
$this->registerJsFile("/mertonic/pages/scripts/form-wizard.js"/*, ['depends' => 'yii\web\JqueryAsset']*/);

$this->registerJsFile('//www.youtube.com/player_api');

$this->title = '1-mlm';

//$this->params['breadcrumbs'][] = $this->title;
?>
<!-- BEGIN PAGE BASE CONTENT -->
<div class="row">
    <div class="col-md-12">
        <div class="m-heading-1 border-green m-bordered">
            <?php if( !empty($consultant) ): ?>
			<h3>Добро пажаловать,<b> <?php echo $model["fn"],' ',$model["ln"]; ?> </b></h3>
			<p>
			<table border="0">
                <tr>
                    <td>Ваш консультант:</td>
                    <td>
                        <div class="dropdown dropdown-extended quick-sidebar-toggler" style="cursor: pointer;">
                            <?php echo '&nbsp;<b>',$consultant->fn,' ',$consultant->ln,'</b>'; ?>
                        </div>
                    </td>
                </tr>
			</table>
			<?php endif; ?>
        </div>
        <div class="portlet light bordered" id="form_wizard_1">
            <div class="portlet-title">
                <div class="caption">
                    <i class=" icon-layers font-red"></i>
                        <span class="caption-subject font-red bold uppercase"> Всего несколько  шагов -
                            <span class="step-title"> Для настройки системы </span>
                        </span>
                </div>
                <div class="actions">
                    <!--<a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                        <i class="icon-cloud-upload"></i>
                    </a>
                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                        <i class="icon-wrench"></i>
                    </a>
                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                        <i class="icon-trash"></i>
                    </a>-->
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
                                                <i class="fa fa-check"></i> Настройка профиля </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#tab3" data-toggle="tab" class="step active">
                                        <span class="number"> 3 </span>
                                            <span class="desc">
                                                <i class="fa fa-check"></i> Выбор компани </span>
                                    </a>
                                </li>
                                <!--<li>
                                    <a href="#tab4" data-toggle="tab" class="step">
                                        <span class="number"> 4 </span>
                                            <span class="desc">
                                                <i class="fa fa-check"></i> Создание станицы </span>
                                    </a>
                                </li>-->
                            </ul>
                            <div id="bar" class="progress progress-striped" role="progressbar">
                                <div class="progress-bar progress-bar-success"> </div>
                            </div>
                            <div class="tab-content">
                                <div class="alert alert-danger display-none">
                                    <button class="close" data-dismiss="alert"></button> Ошибка! Пожалуйста, проверьте ниже. </div>
                                <div class="alert alert-success display-none">
                                    <button class="close" data-dismiss="alert"></button><div id="msg"> ***Поздравляем! Вы на шаг ближе к цели! </div></div>
                                <div class="tab-pane active" id="tab1">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <div align="center">

                                    <div id="player"></div>

                                        </div>
                                        </div>
                                    <center><h4 class="block">переход к следующему шагу - после просмотра видео!</h4></center>
                                </div>
                                <div class="tab-pane" id="tab2">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <div align="center">
                                                <?php
                                               echo $this->render('_index_edit_info', [
                                                    'model' => $model
                                                ]); ?>
                                            </div>
                                        </div>
                                </div>
                                <div class="tab-pane" id="tab3">
                                    <div class="form-group">

                                    <!--
                                        <label class="control-label col-md-3">Выбрать компанию
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="card_name" />
                                            <span class="help-block"> </span>
                                        </div>
                                    -->

                                                <?php
                                                echo $this->render('_index_edit_companies', [
                                                    'model' => $model
                                                ]); ?>


                                    </div>


                                </div>
                                <!--<div class="tab-pane" id="tab4">
                                    <h3 class="block">Создание страницы захвата</h3>

                                    <iframe width="640" height="360" src="https://www.youtube.com/embed/HBseUoVjSZo?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>

                                </div>-->
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <a href="javascript:;" class="btn default button-previous">
                                        <i class="fa fa-angle-left"></i> Назад </a>
                                    <button id="nxt_bnt" class="btn btn-outline green button-next" disabled=""> Дальше
                                        <i class="fa fa-angle-right"></i>
                                    </button>
                                    <input type="hidden" id="stepIndex" value="1" />
                                    <a href="index.php?r=site/landing" class="btn green button-submit"> Отправить
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
            videoId: 'HBseUoVjSZo',
            playerVars: {
                'autoplay': 0,
                'controls': 0,
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
            $("#nxt_bnt").attr("disabled", false);
            $("#stepIndex").val("2");
        }
    }
</script>
<!-- END PAGE BASE CONTENT -->