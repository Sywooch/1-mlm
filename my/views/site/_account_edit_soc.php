<?php
use yii\widgets\ActiveForm;

$form = ActiveForm::begin([
    'options' => ['class'=>'form-horizontal']
]);?>

   
   <div class="alert alert-warning alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                       <h3>Где взять ID? </h3> 
<h5>Перейдите по <a href="http://id.1-mlm.com"  target="_blank" >этой ссылке</a> и узнайте свой ID в соц. сетях в 1 клик</h5>
 </div>
   
   
   
    <div class="form-group form-md-line-input">
        <?=$form->field(
            $model, 'facebook', ["template" => "<label class='col-md-2 control-label'>facebook</label>
                                                            <div class='col-md-10'>
                                                                <div class=\"input-icon\">
                                                                    <i class=\"icon-link\"></i>\n{input}\n{hint}\n{error}
                                                                    <div class=\"form-control-focus\"></div>
                                                                    <span class=\"help-block\">Ваш ID в  Facebook</span>
                                                                </div>

                                                            </div>"]
        )->textInput(["class"=>"form-control",]); ?>
    </div>
    <div class="form-group form-md-line-input">
        <?=$form->field(
            $model, 'vkontakte', ["template" => "<label class='col-md-2 control-label'>vkontakte</label>
                                                            <div class='col-md-10'>
                                                                <div class=\"input-icon\">
                                                                    <i class=\"icon-link\"></i>\n{input}\n{hint}\n{error}
                                                                    <div class=\"form-control-focus\"></div>
                                                                    <span class=\"help-block\">Ваш ID в Vkontakte</span>
                                                                </div>

                                                            </div>"]
        )->textInput(["class"=>"form-control",]); ?>
    </div>
    <div class="form-group form-md-line-input">
        <?=$form->field(
            $model, 'linkedin', ["template" => "<label class='col-md-2 control-label'>linkedin</label>
                                                            <div class='col-md-10'>
                                                                <div class=\"input-icon\">
                                                                    <i class=\"icon-link\"></i>\n{input}\n{hint}\n{error}
                                                                    <div class=\"form-control-focus\"></div>
                                                                    <span class=\"help-block\">Ваш ID в Linkedin</span>
                                                                </div>

                                                            </div>"]
        )->textInput(["class"=>"form-control",]); ?>
    </div>
    <div class="form-group form-md-line-input">
        <?=$form->field(
            $model, 'googleplus', ["template" => "<label class='col-md-2 control-label'>googleplus</label>
                                                            <div class='col-md-10'>
                                                                <div class=\"input-icon\">
                                                                    <i class=\"icon-link\"></i>\n{input}\n{hint}\n{error}
                                                                    <div class=\"form-control-focus\"></div>
                                                                    <span class=\"help-block\">Ваш ID в GooglePlus</span>
                                                                </div>

                                                            </div>"]
        )->textInput(["class"=>"form-control",]); ?>
    </div>
    <div class="form-group form-md-line-input">
        <?=$form->field(
            $model, 'yandex', ["template" => "<label class='col-md-2 control-label'>yandex</label>
                                                            <div class='col-md-10'>
                                                                <div class=\"input-icon\">
                                                                    <i class=\"icon-link\"></i>\n{input}\n{hint}\n{error}
                                                                    <div class=\"form-control-focus\"></div>
                                                                    <span class=\"help-block\">Ваш ID в Yandex</span>
                                                                </div>

                                                            </div>"]
        )->textInput(["class"=>"form-control",]); ?>
    </div>
    <div class="form-group form-md-line-input">
        <?=$form->field(
            $model, 'mailru', ["template" => "<label class='col-md-2 control-label'>mail.ru</label>
                                                            <div class='col-md-10'>
                                                                <div class=\"input-icon\">
                                                                    <i class=\"icon-link\"></i>\n{input}\n{hint}\n{error}
                                                                    <div class=\"form-control-focus\"></div>
                                                                    <span class=\"help-block\">Ваш ID в Mail.ru</span>
                                                                </div>

                                                            </div>"]
        )->textInput(["class"=>"form-control",]); ?>
    </div>

    <div class="form-group form-md-line-input">
        <?=$form->field(
            $model, 'twitter', ["template" => "<label class='col-md-2 control-label'>twitter</label>
                                                            <div class='col-md-10'>
                                                                <div class=\"input-icon\">
                                                                    <i class=\"icon-link\"></i>\n{input}\n{hint}\n{error}
                                                                    <div class=\"form-control-focus\"></div>
                                                                    <span class=\"help-block\">Ваш ID в Twitter</span>
                                                                </div>

                                                            </div>"]
        )->textInput(["class"=>"form-control",]); ?>
    </div>
    <div class="form-group form-md-line-input">
        <?=$form->field(
            $model, 'instagram', ["template" => "<label class='col-md-2 control-label'>instagram</label>
                                                            <div class='col-md-10'>
                                                                <div class=\"input-icon\">
                                                                    <i class=\"icon-link\"></i>\n{input}\n{hint}\n{error}
                                                                    <div class=\"form-control-focus\"></div>
                                                                    <span class=\"help-block\">Ваш ID в Instagram</span>
                                                                </div>

                                                            </div>"]
        )->textInput(["class"=>"form-control",]); ?>
    </div>

        <div class="margin-top-10">
            <?= \yii\helpers\Html::hiddenInput('Users[formtype]', 'soc', ["id"=>"users-formtype"]); ?>
            <?= '<button class="btn green"> Применить </button>'; ?>
            <a href="index.php?r=site%2Faccount" class="btn default"> Отменить </a>
        </div>

<?php $form->end(); ?>