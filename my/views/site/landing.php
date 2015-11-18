<?php
use yii\widgets\ActiveForm;
use kartik\widgets\ColorInput;

$this->title = 'profile';
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- BEGIN PAGE BASE CONTENT -->
<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-cogs font-green-sharp"></i>
                    <span class="caption-subject font-green-sharp bold uppercase">Создание страницы</span>
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"> </a>
                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                    <a href="javascript:;" class="reload"> </a>
                    <a href="javascript:;" class="remove"> </a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="note note-success">
                    <h4 class="block">первый вариант ( стандарт )</h4>
                    <p> Pretty simple jQuery plugin that turns standard Bootstrap alerts into hovering "Growl-like" notifications. For more info please check
                        <a href="https://github.com/ifightcrime/bootstrap-growl/" target="_blank"> the official github respository </a>
                    </p>
                </div>
                <?php
                $form = ActiveForm::begin();?>
                <!--<div class="form-group">
                    <label class="col-md-3 control-label" for="title">Notification text:</label>
                    <div class="col-md-5">
                        <input id="growl_text" type="text" class="form-control" value="Some demo text goes here" placeholder="enter a text ..." /> </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="title">Life:</label>
                    <div class="col-md-5">
                        <select id="growl_type" class="form-control input-small input-inline">
                            <option value="info">Info</option>
                            <option value="danger">Danger</option>
                            <option value="success">Success</option>
                            <option value="warning">Warning</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="title">Align:</label>
                    <div class="col-md-5">
                        <select id="growl_align" class="form-control input-small input-inline">
                            <option value="left">Left</option>
                            <option value="right">Right</option>
                            <option value="center">Center</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="title">Width:</label>
                    <div class="col-md-5">
                        <input id="growl_width" type="text" class="form-control input-small input-inline" value="250" placeholder="enter a width ..." /> </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="title">Allow dismiss ?</label>
                    <div class="col-md-5">
                        <div class="checkbox-list">
                            <label class="checkbox-inline">
                                <input type="checkbox" id="glowl_dismiss" checked value="1"> </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="title">Life:</label>
                    <div class="col-md-5">
                        <select id="growl_delay" class="form-control input-small input-inline">
                            <option value="5000">5 second</option>
                            <option value="10000">10 seconds</option>
                            <option value="12000">12 seconds</option>
                            <option value="15000">15 seconds</option>
                        </select>
                        <span class="help-block"> Time while the message will be displayed. </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="title">Offset:</label>
                    <div class="col-md-5">
                        <select id="growl_offset" class="form-control input-small input-inline">
                            <option value="top">Top</option>
                            <option value="bottom">Bottom</option>
                        </select>
                        <input id="growl_offset_val" type="text" class="form-control input-small input-inline" value="100" placeholder="enter offset ..." /> </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="title"></label>
                    <div class="col-md-5">
                        <a href="javascript:;" class="btn red btn-lg" id="bs_growl_show"> Show Notification! </a>
                    </div>
                </div> -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <!--<label>Заголовок №1</label>
                            <input class="form-control" placeholder="Текст заголовка" name="h1" type="text" value="<?=$data['h1']?>">-->
                            <?=$form->field(
                                $model, 'h1', ['template' => "<label>Заголовок №1</label>\n{input}\n{hint}\n{error}" ]
                            )->textInput(['placeholder' => 'Текст заголовка']);
                            ?>
                        </div>
                        <div class="form-group">
                            <!--<label>Заголовок №2</label>
                            <input class="form-control" placeholder="Текст заголовка" name="h2" type="text" value="<?=$data['h2']?>">-->
                            <?=$form->field(
                                $model, 'h2', ['template' => "<label>Заголовок №2</label>\n{input}\n{hint}\n{error}" ]
                            )->textInput(['placeholder' => 'Текст заголовка']);
                            ?>
                        </div>
                        <div class="form-group">
                            <!--<label>Заголовок №3</label>
                            <input class="form-control" placeholder="Текст заголовка" name="h3" type="text" value="<?=$data['h3']?>">-->
                            <?=$form->field(
                                $model, 'h3', ['template' => "<label>Заголовок №3</label>\n{input}\n{hint}\n{error}" ]
                            )->textInput(['placeholder' => 'Текст заголовка']);
                            ?>
                        </div>
                        <div class="form-group">
                            <!--<label>Id ролика с Youtube</label>
                            <input class="form-control" placeholder="Вставьте id ролика" name="yt" type="text" value="<?=$data['yt1']?>">-->
                            <?=$form->field(
                                $model, 'yt1', ['template' => "<label>Id ролика с Youtube</label>\n{input}\n{hint}\n{error}" ]
                            )->textInput(['placeholder' => 'Вставьте id ролика']);
                            ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <!--<label>Цвет заголовка №1</label>
                            <input class="form-control" placeholder="Текст заголовка" name="h1c" type="text" value="<?=$data['h1c']?>">-->
                            <?=$form->field(
                                $model, 'h1c', ['template' => "<label>Цвет заголовка №1</label>\n{input}\n{hint}\n{error}" ]
                            )->widget(ColorInput::classname(),[
                                'options' => ['placeholder' => '6 символов цвета']
                            ]);
                            ?>
                        </div>
                        <div class="form-group">
                            <!--<label>Цвет заголовка №2</label>
                            <input class="form-control" placeholder="Текст заголовка" name="h2c" type="text" value="<?=$data['h2c']?>">-->
                            <?=$form->field(
                                $model, 'h2c', ['template' => "<label>Цвет заголовка №2</label>\n{input}\n{hint}\n{error}" ]
                            )->widget(ColorInput::classname(),[
                                'options' => ['placeholder' => '6 символов цвета']
                            ]);
                            ?>
                        </div>
                        <div class="form-group">
                            <!--<label>Цвет заголовка №3</label>
                            <input class="form-control" placeholder="Текст заголовка" name="h3c" type="text" value="<?=$data['h3c']?>">-->
                            <?=$form->field(
                                $model, 'h3c', ['template' => "<label>Цвет заголовка №3</label>\n{input}\n{hint}\n{error}" ]
                            )->widget(ColorInput::classname(),[
                                'options' => ['placeholder' => '6 символов цвета']
                            ]);
                            ?>
                        </div>
                        <div class="form-group">
                            <!--<label>Надпись на кнопке</label>
                            <input class="form-control" placeholder="Вставьте id ролика" name="button" type="text" value="<?=$data['button']?>">-->
                            <?=$form->field(
                                $model, 'button', ['template' => "<label>Надпись на кнопке</label>\n{input}\n{hint}\n{error}" ]
                            )->textInput(['placeholder' => 'Призыв к действию']);
                            ?>
                        </div>
                    </div>
                </div>
                <input id="users-formtype" name="Land" value="change" type="hidden">
                <button type="submit" class="btn btn-danger waves-effect waves-effect" name="save">СОХРАНИТЬ СТРАНИЦУ</button>
                <?php $form->end(); ?>
            </div>
        </div>
    </div>
</div>
<!-- END PAGE BASE CONTENT -->

