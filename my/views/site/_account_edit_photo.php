<?php
use yii\widgets\ActiveForm;

$form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]);?>
    <p> Здесь Вы можете поменять аватар своего профиля. Для этого нажмите на кнопку "Выбрать картинку" и выберите желаемую, а затем нажмите кнопку "Изменить". </p>
    <div class="form-group">
        <div class="fileinput fileinput-new" data-provides="fileinput">
            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                <img src="<?= $model->userpic; ?>" alt="user picture" width="140"/>
            </div>
            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
            <div>
                 <span class="btn default btn-file">
                 <span class="fileinput-new"> Выбрать картнику </span>
                 <span class="fileinput-exists"> Изменить </span>
                <?=
                    $form->field(
                        $model, 'userpic', ["template" => "<div>\n{input}\n{hint}\n{error}</div>"]
                    )->fileInput();
                ?>
                <!--
                <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Удалить </a>
                -->
            </div>
        </div>
        <div class="clearfix margin-top-10">
            <span class="label label-danger">Важно!</span>
               <span style="left: 8px;position: relative;">
                   Картинки поддерживаются в последних версиях браузеров : Firefox, Chrome, Opera, Safari and Internet Explorer 10.
               </span>
        </div>
        <div class="margin-top-10">
            <?= \yii\helpers\Html::hiddenInput('Users[formtype]', 'picture', ["id"=>"users-formtype"]); ?>
            <?= '<button class="btn green"> Применить </button>'; ?>
            <a href="index.php?r=site%2Faccount" class="btn default"> Отменить </a>
        </div>
    </div>
<?php $form->end(); ?>