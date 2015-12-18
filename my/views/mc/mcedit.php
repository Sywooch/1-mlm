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
<?php
/*
    id
    uid

    date
    time
    class

*/
?>
    <div class="portlet light bordered">
    <div class="portlet-title">
    <div class="caption">
        <i class="icon-settings"></i>
        <span class="caption-subject font-purple-soft bold uppercase" style="font-size: 14px;">Редактирование мастер класса</span>
    </div>
        <div class="tools">
            <!-- Кнопка видео подсказки и во всю ширину --->
            <a class="btn-circle btn-icon-only" data-toggle="modal" data-target="#w1help"  href="#w1help">
                <i class="icon-support"></i></a>
            <a class="btn-icon-only fullscreen" href="javascript:;"> </a>
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
            <!-- Кнопка видео подсказки и во всю ширину --->
        </div>
    </div>
    <div class="portlet-body">

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <?=$form->field(
                    $model, 'title', ["template" => "<label>Заголовок</label>
                        <div class=\"input-icon\">\n{input}\n{hint}\n{error}</div>"]);
                ?>
            </div>
            <div class="form-group">
                <?=$form->field(
                    $model, 'description', ["template" => "<label>Описание</label>
                        <div class=\"input-icon\">\n{input}\n{hint}\n{error}</div>"]);
                ?>
            </div>
            <div class="form-group">
                <?=$form->field(
                    $model, 'speaker', ["template" => "<label>Организатор</label>
                        <div class=\"input-icon\">\n{input}\n{hint}\n{error}</div>"]);
                ?>
            </div>

            <div class="form-group">
                <?=$form->field(
                    $model, 'yt', ["template" => "<label>ID youtube</label>
                        <div class=\"input-icon\">\n{input}\n{hint}\n{error}</div>"]);
                ?>
            </div>

            <div class="form-group">
                <label>Дата проведения мастер-класса</label>
                <div class="input-icon">
                    <?php
                    echo DatePicker::widget([
                        'name' => 'Hangouts[date]',
                        'type' => DatePicker::TYPE_INPUT,
                        'value' => $model['date'],
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
                <?=$form->field(
                    $model, 'url', ["template" => "<label>url</label>
                        <div class=\"input-icon\">\n{input}\n{hint}\n{error}</div>"]);
                ?>
            </div>
            <div class="form-group">
                <?=$form->field(
                    $model, 'download', ["template" => "<label>download</label>
                        <div class=\"input-icon\">\n{input}\n{hint}\n{error}</div>"]);
                ?>
            </div>
            <div class="form-group">
                <?=$form->field(
                    $model, 'button', ["template" => "<label>button</label>
                        <div class=\"input-icon\">\n{input}\n{hint}\n{error}</div>"]);
                ?>
            </div>
            <div class="form-group">
                <?=$form->field(
                    $model, 'link', ["template" => "<label>link</label>
                        <div class=\"input-icon\">\n{input}\n{hint}\n{error}</div>"]);
                ?>
            </div>
            <div class="form-group">
                <div class="form-group required">
                    <label>Время проведения мастер-класса</label>
                    <div class="input-icon">
                        <!--<input id="hangouts-link" class="form-control timepicker timepicker-default" name="Hangouts[time]" value="" type="text">-->
                        <?php echo TimePicker::widget([
                            'name' => 'Hangouts[time]',
                            'value' => $model['time'],
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
        <?= \yii\helpers\Html::hiddenInput('Hangouts[id]', $model->id, ["id"=>"Hangouts-id"]); ?>
        <?= '<button class="btn green"> Сохранить изменения </button>'; ?>
        <a href="index.php?r=site%2Faccount" class="btn default"> Отменить </a>
    </div>
<?php $form->end(); ?>
        </div>
        </div>
