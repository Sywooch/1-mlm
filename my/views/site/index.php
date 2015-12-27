<?php
$css = <<<'STYLE'
.btn.btn-outline.green
{
    position: absolute !important;
    top: 45px !important;
    right: 50px !important;
}

.btn.default.button-previous
{
    position: absolute !important;
    top: 45px !important;
    right: 170px !important;
}

.btn.green.button-submit
{
    position: absolute !important;
    top: 45px !important;
    right: 50px !important;
}

/* мигающий текст  */

#blink1 {
  -webkit-animation: blink1 3s linear infinite;
  animation: blink1 3s linear infinite;
}
@-webkit-keyframes blink1 {
  0% { color: rgba(34, 34, 34, 1); }
  50% { color: rgba(34, 34, 34, 0); }
  100% { color: rgba(34, 34, 34, 1); }
}
@keyframes blink1 {
  0% { color: rgba(34, 34, 34, 1); }
  50% { color: rgba(34, 34, 34, 0); }
  100% { color: rgba(34, 34, 34, 1); }
}

#blink2 {
  -webkit-animation: blink2 3s linear infinite;
  animation: blink2 3s linear infinite;
}
@-webkit-keyframes blink2 {
  0% { color: rgba(255, 0, 37, 1); }
  50% { color: rgba(255, 0, 37, 0.1); }
  100% { color: rgba(255, 0, 37, 1); }
}
@keyframes blink2 {
  0% { color: rgba(255, 0, 37, 1); }
  50% { color: rgba(255, 0, 37, 0.1); }
  100% { color: rgba(255, 0, 37, 1); }
}
STYLE;
$this->registerCss($css);

$this->registerJsFile('/mertonic/global/plugins/jquery.pulsate.min.js');
$this->registerJsFile('/mertonic/global/plugins/jquery-bootpag/jquery.bootpag.min.js');
$this->registerJsFile('/mertonic/global/plugins/holder.js');

$this->registerJsFile('/mertonic/global/scripts/app_acc.js');
$this->registerJsFile('/mertonic/pages/scripts/dashboard.js'/*, ['depends' => 'yii\web\JqueryAsset']*/);
$this->registerJsFile('/mertonic/layouts/layout4/scripts/layout.js'/*, ['depends' => 'yii\web\JqueryAsset']*/);
$this->registerJsFile('/mertonic/layouts/layout4/scripts/demo.js'/*, ['depends' => 'yii\web\JqueryAsset']*/);
$this->registerJsFile('/mertonic/layouts/global/scripts/quick-sidebar.js'/*, ['depends' => 'yii\web\JqueryAsset']*/);
$this->registerJsFile("/mertonic/global/plugins/select2/js/select2.full.min.js"/*, ['depends' => 'yii\web\JqueryAsset']*/);
$this->registerJsFile("/mertonic/global/plugins/jquery-validation/js/jquery.validate.min.js"/*, ['depends' => 'yii\web\JqueryAsset']*/);
$this->registerJsFile("/mertonic/global/plugins/jquery-validation/js/additional-methods.min.js"/*, ['depends' => 'yii\web\JqueryAsset']*/);
$this->registerJsFile("/mertonic/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.js"/*, ['depends' => 'yii\web\JqueryAsset']*/);
$this->registerJsFile("/mertonic/pages/scripts/form-wizard.js"/*, ['depends' => 'yii\web\JqueryAsset']*/);

$this->registerJsFile("/mertonic/global/plugins/jquery.pulsate.min.js"/*, ['depends' => 'yii\web\JqueryAsset']*/);

$this->registerJsFile('//www.youtube.com/player_api');
$this->title = '1-mlm';
?>
<!-- BEGIN PAGE BASE CONTENT -->
<div class="row">
    <div class="col-md-12">

			<table border="0">
                <tr>
                    <td><span style="color: #47acd0; font-size: 18px;">Добро пожаловать,</span><span style="color: #4aa0d0; font-size: 20px; font-style: italic;"> <?php echo $model["fn"],' ',$model["ln"]; ?></span></td>
                </tr>
                <tr>
                    <td class="quick-sidebar-toggler" style="cursor: pointer;">
                       <span style="color: #5b5c5b; font-size: 16px;"> Ваш личный консультант:</span>
                         <span style="font-size: 16px; font-style: italic;" id="blink1"><?= $consultant->fn,' ',$consultant->ln; ?></span>
                        <span style="color: #959695; font-size: 16px;"> &#9668; кликните на имя чтобы получить консультацию</span>
                    </td>
                </tr>

			</table>

        <div class="portlet light bordered" id="form_wizard_1">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-list font-blue-sharp"></i>
                        <span class="caption-subject font-blue-sharp"> 3 Шага для настройки системы</span>
                </div>
                <div class="actions">
                    <!---------------------------------------------------------->
                    <a class="btn btn-circle btn-icon-only btn-default" data-toggle="modal" data-target="#w1help"  href="#w1help">
                        <i class="icon-support"></i></a>
                    <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;"> </a>
                    <div style="display: none;" id="w1help" class="fade modal" role="dialog" tabindex="-1">
                        <div class="modal-dialog ">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 style="margin-top: 0px;"><div align="center">Помощь</div></h4>
                                </div>
                                <div class="modal-body">
                                    <iframe width="560" height="315"
                                            src="https://www.youtube-nocookie.com/embed/<?php
                                            echo "iBfk37Fa3H0";
                                            ?>?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!------------------------------------------------------------>
                </div>
            </div>
            <div class="portlet-body form">
                <form action="#" id="submit_form" method="POST">
                    <div class="form-wizard">
                        <div class="form-body">
                            <ul class="nav nav-pills nav-justified steps">
                                <li>
                                    <a href="#tab1" data-toggle="tab" class="step">
                                        <span class="number"> 1 </span>
                                            <span class="desc">
                                                <i class="fa fa-check"></i> О нас </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#tab2" data-toggle="tab" class="step">
                                        <span class="number"> 2 </span>
                                            <span class="desc">
                                                <i class="fa fa-check"></i> Введение </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#tab3" data-toggle="tab" class="step">
                                        <span class="number"> 3 </span>
                                            <span class="desc">
                                                <i class="fa fa-check"></i> Настройка профиля </span>
                                    </a>
                                </li>
                                <!--<li>
                                    <a href="#tab4" data-toggle="tab" class="step active">
                                        <span class="number"> 4 </span>
                                            <span class="desc">
                                                <i class="fa fa-check"></i> Выбор компани </span>
                                    </a>
                                </li>
                                <li>
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

                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <a href="javascript:;" class="btn default button-previous">
                                            <i class="fa fa-angle-left"></i> Назад </a>
                                        <button id="nxt_bnt"
                                                class="btn default btn-outline green button-next" disabled=""> Дальше
                                            <i class="fa fa-angle-right"></i>
                                        </button>
                                        <input type="hidden" id="stepIndex" value="1" />

                                        <button id="nxt_submit"
                                                class="btn green button-submit" disabled=""> Дальше
                                            <i class="fa fa-check"></i>
                                        </button>
                                        <!--
                                        <a href="index.php?r=site/landing" class="btn green button-submit"> Отправить
                                            <i class="fa fa-check"></i>
                                        </a>
                                        -->
                                    </div>
                                </div>
                            </div>

                            <div class="tab-content">
                                <div class="alert alert-danger display-none">
                                    <button class="close" data-dismiss="alert"></button> Ошибка! Пожалуйста, проверьте ниже. </div>
                                <div class="alert alert-success display-none">
                                    <button class="close" data-dismiss="alert"></button><div id="msg"> ***Поздравляем! Вы на шаг ближе к цели! </div></div>

                                <div class="tab-pane active" id="tab1"><br>
                                    <center><h4 class="block" id="blink2">переход к следующему шагу - после просмотра видео!</h4></center>
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <div align="center">
                                            <div id="player"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane active" id="tab2"><br>
                                    <center><h4 class="block" id="blink2">переход к следующему шагу - после просмотра видео!</h4></center>
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <div align="center">
                                            <div id="player2"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="tab3"><br>
                                   <h4 class="block" id="blink2">последний шаг - заполнить форму, e-mail и skype (обьязательные поля)</h4>
                                        <?php
                                       echo $this->render('_index_edit_info', [
                                            'model' => $model
                                        ]); ?>
                                </div>
                                <div class="tab-pane" id="tab4"><br>
                                    <div class="form-group">
                                        Или создайте свою собственную уникальную страницу для своих целей по готовому шаблону за пару минут.
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

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    // create youtube player
    var player;
    var player2;
    function onYouTubePlayerAPIReady() {
        player = new YT.Player('player',{
            height: '360',
            width: '640',
            videoId: '<?= $comVideo; ?>',
            playerVars: {
                'autoplay': 0,
                'controls': 1,
                'showinfo': '0',
                'rel': 0
            },
            events: {
                'onStateChange': onPlayerStateChange
            }
        });

        player2 = new YT.Player('player2',{
            height: '360',
            width: '640',
            videoId: 'HBseUoVjSZo',//about system
            playerVars: {
                'autoplay': 0,
                'controls': 1,
                'showinfo': '0',
                'rel': 0
            },
            events: {
                //'onReady': onPlayerReady,
                'onStateChange': onPlayer2StateChange
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
    function onPlayer2StateChange(event) {
        if(event.data === 0) {
            $("#nxt_bnt").attr("disabled", false);
            $("#stepIndex").val("2");
        }
    }
</script>
<!-- END PAGE BASE CONTENT -->