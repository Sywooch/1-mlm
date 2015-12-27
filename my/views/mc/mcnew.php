<?php
use yii\widgets\ActiveForm;
use kartik\widgets\DatePicker;
use kartik\widgets\TimePicker;

$this->registerJsFile('/mertonic/global/scripts/app_acc.js');

$this->registerJsFile('/mertonic/pages/scripts/dashboard.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/layouts/layout4/scripts/layout.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/layouts/layout4/scripts/demo.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/layouts/global/scripts/quick-sidebar.js', ['depends' => 'yii\web\JqueryAsset']);

$this->title = 'mcedit';
$this->params['breadcrumbs'][] = $this->title;

$form = ActiveForm::begin();?>
    <div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-settings"></i>
            <span class="caption-subject font-blue-sharp">Создание мастер класса</span>
        </div>
        <!-- Кнопка видео подсказки и во всю ширину --->
        <div class="actions">
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
        </div>
        <!-- Кнопка видео подсказки и во всю ширину --->
    </div>
    <div class="portlet-body">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <div class="form-group field-hangouts-title required">
                    <label>Заголовок</label>
                    <div class="input-icon">
                        <input id="hangouts-title" class="form-control" name="Hangouts[title]" value="" type="text">

                        <div class="help-block"></div></div>
                </div>            </div>
            <div class="form-group">
                <div class="form-group field-hangouts-description required">
                    <label>Описание</label>
                    <div class="input-icon">
                        <input id="hangouts-description" class="form-control" name="Hangouts[description]" value="" type="text">

                        <div class="help-block"></div></div>
                </div>            </div>
            <div class="form-group">
                <div class="form-group field-hangouts-speaker required">
                    <label>Организатор</label>
                    <div class="input-icon">
                        <input id="hangouts-speaker" class="form-control" name="Hangouts[speaker]" value="" type="text">

                        <div class="help-block"></div></div>
                </div>            </div>

            <div class="form-group">
                <div class="form-group field-hangouts-yt required">
                    <label>ID youtube</label>
                    <div class="input-icon">
                        <input id="hangouts-yt" class="form-control" name="Hangouts[yt]" value="" type="text">

                        <div class="help-block"></div></div>
                </div>            </div>

            <!--<div class="form-group">
                <div class="form-group field-hangouts-yt required">
                    <label>Дата проведения мастер-класса</label>
                    <div class="input-icon">
                        <input id="hangouts-yt" class="form-control date-picker" name="Hangouts[date]" value="" type="text">

                        <div class="help-block"></div></div>
                </div>            </div>-->
            <div class="form-group">
                <label>Дата проведения мастер-класса</label>
                <div class="input-icon">
                    <?php
                    echo DatePicker::widget([
                        'name' => 'Hangouts[date]',
                        'type' => DatePicker::TYPE_INPUT,
                        'value' => '2015-12-01',
                        'pluginOptions' => [
                            'autoclose'=>true,
                            'format' => 'yyyy-mm-dd'
                        ]
                    ]);
                    ?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <div class="form-group field-hangouts-url required">
                    <label>url</label>
                    <div class="input-icon">
                        <input id="hangouts-url" class="form-control" name="Hangouts[url]" value="" type="text">

                        <!--<div class="help-block">Url cannot be blank.</div>--></div>
                </div>            </div>
            <div class="form-group">
                <div class="form-group field-hangouts-download required">
                    <label>download</label>
                    <div class="input-icon">
                        <input id="hangouts-download" class="form-control" name="Hangouts[download]" value="" type="text">

                        <!--<div class="help-block">Download cannot be blank.</div>--></div>
                </div>            </div>
            <div class="form-group">
                <div class="form-group field-hangouts-button required">
                    <label>button</label>
                    <div class="input-icon">
                        <input id="hangouts-button" class="form-control" name="Hangouts[button]" value="" type="text">

                        <div class="help-block"></div></div>
                </div>            </div>
            <div class="form-group">
                <div class="form-group field-hangouts-link required">
                    <label>link</label>
                    <div class="input-icon">
                        <input id="hangouts-link" class="form-control" name="Hangouts[link]" value="" type="text">

                        <div class="help-block"></div></div>
                </div>            </div>

            <div class="form-group">
                <div class="form-group field-hangouts-link required">
                    <label>Время проведения мастер-класса</label>
                    <div class="input-icon">
                        <!--<input id="hangouts-link" class="form-control timepicker timepicker-default" name="Hangouts[time]" value="" type="text">-->
                        <?php echo TimePicker::widget([
                            'name' => 'Hangouts[time]',
                            'pluginOptions' => [
                                'showMeridian' => false,
                                'timeFormat' => 'H-i'
                            ],
                        ]); ?>

                        <div class="help-block"></div></div>
                </div>
            </div>
        </div>
    </div>


    <div class="margiv-top-10">
        <?= \yii\helpers\Html::hiddenInput('Hangouts[id]', '0', ["id"=>"Hangouts-id"]); ?>
        <?= '<button class="btn green"> Сохранить изменения </button>'; ?>
        <a href="index.php?r=site%2Faccount" class="btn default"> Отменить </a>
    </div>
<?php $form->end(); ?>
    </div>
    </div>
