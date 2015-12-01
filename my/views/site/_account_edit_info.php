<?php
use yii\widgets\ActiveForm;

$form = ActiveForm::begin([
    'options' => ['class'=>'form-horizontal']
]);?>

    <div class="form-group form-md-line-input">
        <?=$form->field(
            $model, 'fn', ["template" => "<label class='col-md-3 control-label'>Ваше Имя</label>
                            <div class='col-md-9'>
                                <div class=\"input-icon\">
                                    <i class=\"icon-user\"></i>\n{input}\n{hint}\n{error}
                                    <div class=\"form-control-focus\"></div>
                                    <span class=\"help-block\">Введите свое имя</span>
                                </div>

                            </div>"]
        )->textInput(["class"=>"form-control"]); ?>
    </div>
    <div class="form-group form-md-line-input">
        <?=$form->field(
            $model, 'ln', ["template" => "<label class='col-md-3 control-label'>Ваша Фамилия</label>
                                <div class='col-md-9'>
                                    <div class=\"input-icon\">
                                        <i class=\"icon-user\"></i>\n{input}\n{hint}\n{error}
                                        <div class=\"form-control-focus\"></div>
                                        <span class=\"help-block\">Введите свою фамилию</span>
                                    </div>

                                </div>"]
        )->textInput(["class"=>"form-control"]); ?>
    </div>
    <div class="form-group form-md-line-input">
        <?=$form->field(
            $model, 'email', ["template" => "<label class='col-md-3 control-label'>Ваш Email</label>
                                    <div class='col-md-9'>
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
            $model, 'mobile', ["template" => "<label class='col-md-3 control-label'>Номер телефона</label>
                                        <div class='col-md-9'>
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
            $model, 'skype', ["template" => "<label class='col-md-3 control-label'>Ваш скайп</label>
                                            <div class='col-md-9'>
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
            $model, 'city', ["template" => "<label class='col-md-3 control-label'>Город</label>
                                                <div class='col-md-9'>
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
            $model, 'country', ["template" => "<label class='col-md-3 control-label'>Страна</label>
                                                    <div class='col-md-9'>
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
            $model, 'purse', ["template" => "<label class='col-md-3 control-label'>Номер Кошелька</label>
                                                        <div class='col-md-9'>
                                                            <div class=\"input-icon\">
                                                                <i class=\"icon-wallet\"></i>\n{input}\n{hint}\n{error}
                                                                <div class=\"form-control-focus\"></div>
                                                                <span class=\"help-block\">Введите ваш номер кошелька для получения партнерских начисслений</span>
                                                            </div>

                                                        </div>"]
        )->textInput(["placeholder" => "Perfect money или Payeer","class"=>"form-control"]); ?>
    </div>

    <div class="form-group form-md-line-input">
        <?php echo $this->render('_account_edit_companies', [
            'form' => $form,
            'model' => $model
        ]);?>
    </div>

<!--------------------------------------------------------------------------------------------------------------------->
    <div class="form-group form-md-line-input">
        <?=$form->field(
            $model, 'id', ["template" => "<label class='col-md-3 control-label'>Компании ссылка</label>
                                                            <div class='col-md-9'>
                                                                <div class=\"input-icon\">
                                                                    <i class=\"icon-link\"></i>\n{input}\n{hint}\n{error}
                                                                    <div class=\"form-control-focus\"></div>
                                                                    <span class=\"help-block\">Ссылка для выбраной компании</span>
                                                                </div>

                                                            </div>"]
        )->textInput([
            "placeholder" => "Если продвигаете 1 компанию...",
            "readonly" => true,
            "class"=>"form-control",
            "value"=>'https://1-mlm.com/'.$model->companyid.'-'.$model->refdt.'.html'
        ]); ?>
    </div>


    <div class="form-group form-md-line-input">
        <?=$form->field(
            $model, 'ref', ["template" => "<label class='col-md-3 control-label'>Ваша ссылка</label>
                                                            <div class='col-md-9'>
                                                                <div class=\"input-icon\">
                                                                    <i class=\"icon-link\"></i>\n{input}\n{hint}\n{error}
                                                                    <div class=\"form-control-focus\"></div>
                                                                    <span class=\"help-block\">Ваша Реферальная ссылка</span>
                                                                </div>

                                                            </div>"]
        )->textInput([
            "placeholder" => "Если продвигаете 1 компанию...",
            "readonly" => true,
            "class"=>"form-control",
            "value"=>'https://1-mlm.com/ref-'.$model->refdt.'.html'
        ]); ?>
    </div>

<!--------------------------------------------------------------------------------------------------------------------->
    <div class="margiv-top-10">
        <?= \yii\helpers\Html::hiddenInput('Users[formtype]', 'personinfo', ["id"=>"users-formtype"]); ?>
        <?= '<button class="btn green"> Сохранить изменения </button>'; ?>
        <a href="index.php?r=site%2Faccount" class="btn default"> Отменить </a>
    </div>
<?php $form->end(); ?>