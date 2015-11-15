<?php
use yii\widgets\ActiveForm;

$form = ActiveForm::begin();?>
    <div class="form-group">
        <?=$form->field(
            $model, 'fn', ["template" => "<label>Имя</label>
                            <div class=\"input-icon\">
                            <i class=\"icon-user\"></i>\n{input}\n{hint}\n{error}</div>"]
        )->textInput(["class"=>"form-control"]); ?>
    </div>
    <div class="form-group">
        <?=$form->field(
            $model, 'ln', ["template" => "<label>Фамилия</label>
                            <div class=\"input-icon\">
                            <i class=\"icon-user\"></i>\n{input}\n{hint}\n{error}</div>"]
        )->textInput(["class"=>"form-control"]); ?>
    </div>
    <div class="form-group">
        <?=$form->field(
            $model, 'email', ["template" => "<label>Ваш email</label>
                            <div class=\"input-icon\">
                            <i class=\"icon-envelope-open\"></i>\n{input}\n{hint}\n{error}</div>"])
            ->textInput(['placeholder' => 'example@gmail.com',"class"=>"form-control"]); ?>
    </div>
    <div class="form-group">
        <?=$form->field(
            $model, 'mobile', ["template" => "<label>Номер телефона</label>
                            <div class=\"input-icon\">
                            <i class=\"icon-call-end\"></i>\n{input}\n{hint}\n{error}</div>"])
            ->textInput(['placeholder' => '+99(99)9999-9999', "class"=>"form-control",]); ?>
    </div>
    <div class="form-group">
        <?=$form->field(
            $model, 'skype', ["template" => "<label>Ваш skype</label>
                            <div class=\"input-icon\">
                            <i class=\"fa fa-skype\"></i>\n{input}\n{hint}\n{error}</div>"])
            ->textInput(['placeholder' => 'Логин skype',"class"=>"form-control"]); ?>
    </div>

    <div class="form-group">
        <?=$form->field(
            $model, 'city', ["template" => "<label>Город</label>
                            <div class=\"input-icon\">
                            <i class=\"icon-user\"></i>\n{input}\n{hint}\n{error}</div>"]
        )->textInput(["class"=>"form-control"]); ?>
    </div>

    <div class="form-group">
        <?=$form->field(
            $model, 'country', ["template" => "<label>Страна</label>
                            <div class=\"input-icon\">
                            <i class=\"icon-user\"></i>\n{input}\n{hint}\n{error}</div>"]
        )->textInput(["class"=>"form-control"]); ?>
    </div>

    <div class="form-group">
         <?=$form->field(
            $model, 'purse', ["template" => "<label>Ваш номер кошелька</label>
                            <div class=\"input-icon\">
                            <i class=\"icon-wallet\"></i>\n{input}\n{hint}\n{error}</div>"])
            ->textInput(["placeholder" => "Perfect money или Payeer","class"=>"form-control"]); ?>
    </div>

    <div class="form-group">
        <?php echo $this->render('_account_edit_companies', [
            'form' => $form,
            'model' => $model
        ]);?>
    </div>

    <div class="form-group">
        <?php
        echo $form->field(
            $model, 'ref', [
                            "template" => "<label>Ваша рефереальная ссылка</label>
                            <div class=\"input-icon\">
                            <i class=\"icon-link\"></i>\n{input}\n{hint}\n{error}</div>"])
            ->textInput([
                "placeholder" => "Если продвигаете 1 компанию...",
                "readonly" => true,
                "class"=>"form-control",
                "value"=>'http://i.ua/'.$model->ref
            ]); ?>
    </div>

    <div class="margiv-top-10">
        <?= \yii\helpers\Html::hiddenInput('Users[formtype]', 'personinfo', ["id"=>"users-formtype"]); ?>
        <?= '<button class="btn green"> Сохранить изменения </button>'; ?>
        <a href="index.php?r=site%2Faccount" class="btn default"> Отменить </a>
    </div>
<?php $form->end(); ?>