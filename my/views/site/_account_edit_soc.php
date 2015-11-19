<?php
use yii\widgets\ActiveForm;
$form = ActiveForm::begin();?>

    <div class="form-group">
            <?=$form->field(
                $model, 'facebook', ["template" => "<label>facebook</label>
                            <div class=\"input-icon\">
                            <i class=\"icon-link\"></i>\n{input}\n{hint}\n{error}</div>"]
            )->textInput(["class"=>"form-control"]); ?>
    </div>

    <div class="form-group">
        <?=$form->field(
            $model, 'vkontakte', ["template" => "<label>vkontakte</label>
                            <div class=\"input-icon\">
                            <i class=\"icon-link\"></i>\n{input}\n{hint}\n{error}</div>"]
        )->textInput(["class"=>"form-control"]); ?>
    </div>

    <div class="form-group">
        <?=$form->field(
            $model, 'linkedin', ["template" => "<label>linkedin</label>
                            <div class=\"input-icon\">
                             <i class=\"icon-link\"></i>\n{input}\n{hint}\n{error}</div>"]
        )->textInput(["class"=>"form-control"]); ?>
    </div>

    <div class="form-group">
        <?=$form->field(
            $model, 'googleplus', ["template" => "<label>googleplus</label>
                            <div class=\"input-icon\">
                             <i class=\"icon-link\"></i>\n{input}\n{hint}\n{error}</div>"]
        )->textInput(["class"=>"form-control"]); ?>
    </div>

    <div class="form-group">
        <?=$form->field(
            $model, 'yandex', ["template" => "<label>yandex</label>
                            <div class=\"input-icon\">
                             <i class=\"icon-link\"></i>\n{input}\n{hint}\n{error}</div>"]
        )->textInput(["class"=>"form-control"]); ?>
    </div>

    <div class="form-group">
        <?=$form->field(
            $model, 'mailru', ["template" => "<label>mail.ru</label>
                            <div class=\"input-icon\">
                             <i class=\"icon-link\"></i>\n{input}\n{hint}\n{error}</div>"]
        )->textInput(["class"=>"form-control"]); ?>
    </div>

        <div class="margin-top-10">
            <?= \yii\helpers\Html::hiddenInput('Users[formtype]', 'soc', ["id"=>"users-formtype"]); ?>
            <?= '<button class="btn green"> Применить </button>'; ?>
            <a href="index.php?r=site%2Faccount" class="btn default"> Отменить </a>
        </div>

<?php $form->end(); ?>