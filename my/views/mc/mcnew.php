<?php
use yii\widgets\ActiveForm;

$this->registerJsFile('/mertonic/global/scripts/app_acc.js');

$this->registerJsFile('/mertonic/pages/scripts/dashboard.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/layouts/layout4/scripts/layout.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/layouts/layout4/scripts/demo.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/layouts/global/scripts/quick-sidebar.js', ['depends' => 'yii\web\JqueryAsset']);

$this->title = 'mcedit';
$this->params['breadcrumbs'][] = $this->title;

$form = ActiveForm::begin();?>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <div class="form-group field-hangouts-title required has-success">
                    <label>Заголовок</label>
                    <div class="input-icon">
                        <input id="hangouts-title" class="form-control" name="Hangouts[title]" value="" type="text">

                        <div class="help-block"></div></div>
                </div>            </div>
            <div class="form-group">
                <div class="form-group field-hangouts-description required has-success">
                    <label>Описание</label>
                    <div class="input-icon">
                        <input id="hangouts-description" class="form-control" name="Hangouts[description]" value="" type="text">

                        <div class="help-block"></div></div>
                </div>            </div>
            <div class="form-group">
                <div class="form-group field-hangouts-speaker required has-success">
                    <label>Организатор</label>
                    <div class="input-icon">
                        <input id="hangouts-speaker" class="form-control" name="Hangouts[speaker]" value="" type="text">

                        <div class="help-block"></div></div>
                </div>            </div>

            <div class="form-group">
                <div class="form-group field-hangouts-yt required has-success">
                    <label>ID youtube</label>
                    <div class="input-icon">
                        <input id="hangouts-yt" class="form-control" name="Hangouts[yt]" value="" type="text">

                        <div class="help-block"></div></div>
                </div>            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <div class="form-group field-hangouts-url required has-error">
                    <label>url</label>
                    <div class="input-icon">
                        <input id="hangouts-url" class="form-control" name="Hangouts[url]" value="" type="text">

                        <div class="help-block">Url cannot be blank.</div></div>
                </div>            </div>
            <div class="form-group">
                <div class="form-group field-hangouts-download required has-error">
                    <label>download</label>
                    <div class="input-icon">
                        <input id="hangouts-download" class="form-control" name="Hangouts[download]" value="" type="text">

                        <div class="help-block">Download cannot be blank.</div></div>
                </div>            </div>
            <div class="form-group">
                <div class="form-group field-hangouts-button required has-success">
                    <label>button</label>
                    <div class="input-icon">
                        <input id="hangouts-button" class="form-control" name="Hangouts[button]" value="" type="text">

                        <div class="help-block"></div></div>
                </div>            </div>
            <div class="form-group">
                <div class="form-group field-hangouts-link required has-success">
                    <label>link</label>
                    <div class="input-icon">
                        <input id="hangouts-link" class="form-control" name="Hangouts[link]" value="" type="text">

                        <div class="help-block"></div></div>
                </div>            </div>
        </div>
    </div>


    <div class="margiv-top-10">
        <?= \yii\helpers\Html::hiddenInput('Hangouts[id]', '0', ["id"=>"Hangouts-id"]); ?>
        <?= '<button class="btn green"> Сохранить изменения </button>'; ?>
        <a href="index.php?r=site%2Faccount" class="btn default"> Отменить </a>
    </div>
<?php $form->end(); ?>