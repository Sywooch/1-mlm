<?php
use yii\widgets\ActiveForm;

$form = ActiveForm::begin([
    'options' => ['class'=>'form-horizontal']
]);?>

    <div class="form-group form-md-line-input">
        <?=$form->field(
            $model, 'fn', ["template" => "<label class='col-md-3 control-label'>���� ���</label>
                            <div class='col-md-9'>
                                <div class=\"input-icon\">
                                    <i class=\"icon-user\"></i>\n{input}\n{hint}\n{error}
                                    <div class=\"form-control-focus\"></div>
                                    <span class=\"help-block\">������� ���� ���</span>
                                </div>

                            </div>"]
        )->textInput(["class"=>"form-control"]); ?>
    </div>
    <div class="form-group form-md-line-input">
        <?=$form->field(
            $model, 'ln', ["template" => "<label class='col-md-3 control-label'>���� �������</label>
                                <div class='col-md-9'>
                                    <div class=\"input-icon\">
                                        <i class=\"icon-user\"></i>\n{input}\n{hint}\n{error}
                                        <div class=\"form-control-focus\"></div>
                                        <span class=\"help-block\">������� ���� �������</span>
                                    </div>

                                </div>"]
        )->textInput(["class"=>"form-control"]); ?>
    </div>
    <div class="form-group form-md-line-input">
        <?php echo
        $form->field(
            $model, 'email', ["template" => "<label class='col-md-3 control-label'>��� Email</label>
                                    <div class='col-md-9'>
                                        <div class=\"input-icon\">
                                            <i class=\"icon-envelope-open\"></i>\n{input}\n{hint}\n{error}
                                            <div class=\"form-control-focus\"></div>
                                            <span class=\"help-block\">������� ��� Email</span>
                                        </div>

                                    </div>"]
        )->textInput([/*"placeholder"=>"example@gmail.com",*/"class"=>"form-control"]); ?>
    </div>
    <div class="form-group form-md-line-input">
        <?php echo
        $form->field(
            $model, 'mobile', ["template" => "<label class='col-md-3 control-label'>����� ��������</label>
                                        <div class='col-md-9'>
                                            <div class=\"input-icon\">
                                                <i class=\"icon-screen-smartphone \"></i>\n{input}\n{hint}\n{error}
                                                <div class=\"form-control-focus\"></div>
                                                <span class=\"help-block\">������� ����� �������� � �������: + .....</span>
                                            </div>

                                        </div>"]
        )->textInput([/*'placeholder' => '+99(99)9999-9999',*/ "class"=>"form-control"]); ?>
    </div>
    <div class="form-group form-md-line-input">
        <?=$form->field(
            $model, 'skype', ["template" => "<label class='col-md-3 control-label'>��� �����</label>
                                            <div class='col-md-9'>
                                                <div class=\"input-icon\">
                                                    <i class=\"fa fa-skype\"></i>\n{input}\n{hint}\n{error}
                                                    <div class=\"form-control-focus\"></div>
                                                    <span class=\"help-block\">������� ��� �����</span>
                                                </div>

                                            </div>"]
        )->textInput(['placeholder' => '����� skype',"class"=>"form-control"]); ?>
    </div>
    <div class="form-group form-md-line-input">
        <?=$form->field(
            $model, 'city', ["template" => "<label class='col-md-3 control-label'>�����</label>
                                                <div class='col-md-9'>
                                                    <div class=\"input-icon\">
                                                        <i class=\"icon-user\"></i>\n{input}\n{hint}\n{error}
                                                        <div class=\"form-control-focus\"></div>
                                                        <span class=\"help-block\">������� �����</span>
                                                    </div>

                                                </div>"]
        )->textInput(["class"=>"form-control"]); ?>
    </div>
    <div class="form-group form-md-line-input">
        <?=$form->field(
            $model, 'country', ["template" => "<label class='col-md-3 control-label'>������</label>
                                                    <div class='col-md-9'>
                                                        <div class=\"input-icon\">
                                                            <i class=\"icon-user\"></i>\n{input}\n{hint}\n{error}
                                                            <div class=\"form-control-focus\"></div>
                                                            <span class=\"help-block\">������� ������</span>
                                                        </div>

                                                    </div>"]
        )->textInput(["class"=>"form-control"]); ?>
    </div>

    <br>
    <div class="margiv-top-10">
        <?= \yii\helpers\Html::hiddenInput('Users[formtype]', 'personinfo', ["id"=>"users-formtype"]); ?>
        <?= '<button class="btn green"> ��������� ��������� </button>'; ?>
        <a href="index.php?r=site%2Faccount" class="btn default"> �������� </a>
    </div>
<?php $form->end(); ?>