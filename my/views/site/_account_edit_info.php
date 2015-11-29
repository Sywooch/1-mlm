<!-- Пример кода для полей профиля   можно посмотреть на странице   http://localhost/page/form_controls_md.html   --->

<?php
use yii\widgets\ActiveForm;

$form = ActiveForm::begin([
    'options' => ['class'=>'form-horizontal']
]);?>

    <div class="form-group form-md-line-input">
        <?=$form->field(
            $model, 'fn', ["template" => "<label class='col-md-2 control-label'>Имя</label>
                            <div class='col-md-10'>
                                <div class=\"input-icon\">
                                    <i class=\"icon-user\"></i>\n{input}\n{hint}\n{error}
                                    <div class=\"form-control-focus\"></div>
                                    <span class=\"help-block\">Введите имя</span>
                                </div>

                            </div>"]
        )->textInput(["class"=>"form-control"]); ?>
    </div>
    <div class="form-group form-md-line-input">
        <?=$form->field(
            $model, 'ln', ["template" => "<label class='col-md-2 control-label'>Фамилия</label>
                                <div class='col-md-10'>
                                    <div class=\"input-icon\">
                                        <i class=\"icon-user\"></i>\n{input}\n{hint}\n{error}
                                        <div class=\"form-control-focus\"></div>
                                        <span class=\"help-block\">Введите фамилию</span>
                                    </div>

                                </div>"]
        )->textInput(["class"=>"form-control"]); ?>
    </div>
    <div class="form-group form-md-line-input">
        <?=$form->field(
            $model, 'email', ["template" => "<label class='col-md-2 control-label'>Ваш Email</label>
                                    <div class='col-md-10'>
                                        <div class=\"input-icon\">
                                            <i class=\"icon-envelope-open\"></i>\n{input}\n{hint}\n{error}
                                            <div class=\"form-control-focus\"></div>
                                            <span class=\"help-block\">Введите ваш Email</span>
                                        </div>

                                    </div>"]
        )->textInput(["placeholder"=>"example@gmail.com","class"=>"form-control"]); ?>
    </div>
    <div class="form-group form-md-line-input">
        <?=$form->field(
            $model, 'mobile', ["template" => "<label class='col-md-2 control-label'>Номер телефона</label>
                                        <div class='col-md-10'>
                                            <div class=\"input-icon\">
                                                <i class=\"icon-screen-smartphone \"></i>\n{input}\n{hint}\n{error}
                                                <div class=\"form-control-focus\"></div>
                                                <span class=\"help-block\">Введите ваш номер мобильного телефона</span>
                                            </div>

                                        </div>"]
        )->textInput(['placeholder' => '+99(99)9999-9999', "class"=>"form-control"]); ?>
    </div>
    <div class="form-group form-md-line-input">
        <?=$form->field(
            $model, 'skype', ["template" => "<label class='col-md-2 control-label'>Ваш скайп</label>
                                            <div class='col-md-10'>
                                                <div class=\"input-icon\">
                                                    <i class=\"fa fa-skype\"></i>\n{input}\n{hint}\n{error}
                                                    <div class=\"form-control-focus\"></div>
                                                    <span class=\"help-block\">Введите ваш скайп</span>
                                                </div>

                                            </div>"]
        )->textInput(['placeholder' => 'Логин skype',"class"=>"form-control"]); ?>
    </div>
    <div class="form-group form-md-line-input">
        <?=$form->field(
            $model, 'city', ["template" => "<label class='col-md-2 control-label'>Город</label>
                                                <div class='col-md-10'>
                                                    <div class=\"input-icon\">
                                                        <i class=\"icon-user\"></i>\n{input}\n{hint}\n{error}
                                                        <div class=\"form-control-focus\"></div>
                                                        <span class=\"help-block\">Введите город</span>
                                                    </div>

                                                </div>"]
        )->textInput(["class"=>"form-control"]); ?>
    </div>
    <div class="form-group form-md-line-input">
        <?=$form->field(
            $model, 'country', ["template" => "<label class='col-md-2 control-label'>Страна</label>
                                                    <div class='col-md-10'>
                                                        <div class=\"input-icon\">
                                                            <i class=\"icon-user\"></i>\n{input}\n{hint}\n{error}
                                                            <div class=\"form-control-focus\"></div>
                                                            <span class=\"help-block\">Введите страну</span>
                                                        </div>

                                                    </div>"]
        )->textInput(["class"=>"form-control"]); ?>
    </div>
    <div class="form-group form-md-line-input">
        <?=$form->field(
            $model, 'purse', ["template" => "<label class='col-md-2 control-label'>Ваш номер кошелька</label>
                                                        <div class='col-md-10'>
                                                            <div class=\"input-icon\">
                                                                <i class=\"icon-wallet\"></i>\n{input}\n{hint}\n{error}
                                                                <div class=\"form-control-focus\"></div>
                                                                <span class=\"help-block\">Введите ваш номер кошелька</span>
                                                            </div>

                                                        </div>"]
        )->textInput(["placeholder" => "Perfect money или Payeer","class"=>"form-control"]); ?>
    </div>

    <div class="form-group">
        <?php echo $this->render('_account_edit_companies', [
            'form' => $form,
            'model' => $model
        ]);?>
    </div>

    <div class="form-group form-md-line-input">
        <?=$form->field(
            $model, 'ref', ["template" => "<label class='col-md-2 control-label'>Ваш реферальная ссылка</label>
                                                            <div class='col-md-10'>
                                                                <div class=\"input-icon\">
                                                                    <i class=\"icon-link\"></i>\n{input}\n{hint}\n{error}
                                                                    <div class=\"form-control-focus\"></div>
                                                                    <span class=\"help-block\">Реферальная ссылка</span>
                                                                </div>

                                                            </div>"]
        )->textInput([
            "placeholder" => "Если продвигаете 1 компанию...",
            "readonly" => true,
            "class"=>"form-control",
            "value"=>'http://1-mlm.com/index.php?site/ref&refid='.$model->refdt
        ]); ?>
    </div>

    <div class="margiv-top-10">
        <?= \yii\helpers\Html::hiddenInput('Users[formtype]', 'personinfo', ["id"=>"users-formtype"]); ?>
        <?= '<button class="btn green"> Сохранить изменения </button>'; ?>
        <a href="index.php?r=site%2Faccount" class="btn default"> Отменить </a>
    </div>
<?php $form->end(); ?>