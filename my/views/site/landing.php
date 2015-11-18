<?php
$this->title = 'profile';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php
$js = <<<'SCRIPT'

 $(function(){
      // bind change event to select
      $('#lp-id').on('change', function () {
          if ($(this).val() != '') {
              var url = 'index.php?r=site%2Flanding&landid=' + $(this).val();
          }
           // get selected value
          if (url) { // require a URL
              window.location = url; // redirect
              //alert(url);
          }
          return false;
      });
 });

SCRIPT;
$this->registerJs($js);
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
                <!--<div class="tools">
                    <a href="javascript:;" class="collapse"> </a>
                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                    <a href="javascript:;" class="reload"> </a>
                    <a href="javascript:;" class="remove"> </a>
                </div>-->
            </div>
            <div class="portlet-body">
                <?php
                if (($m != '') && ($save!='good')) {
                ?>
                <div class="note note-success">

                    <h4 class="block">Внимание</h4>
                    <p>
                        <?=$m; ?>
                    </p>

                </div>
                <?php } ?>
                <div class="row">
                    <div class="col-md-12">
                    <?php
                        use yii\widgets\ActiveForm;
                        use kartik\widgets\ColorInput;

                        $formlpmenu = ActiveForm::begin();
                    //echo $level["maxLandPage"];
                        $params = [
                            'prompt' => '-выберите из списка-'
                        ];

                        //$lp=\app\models\Lp::find()->all();
                        $youcomp=array();

                        $companies = \yii\Helpers\ArrayHelper::map($model->all(),'id','name');
                        if( sizeof($youcomp)<1  )
                        {$youcomp=['0'=>'Создать страницу'];}
                        $items=[
                            'Создание'=>$youcomp,
                            'Редактирование'=>$companies
                        ];

                        echo $formlpmenu->field( $model->one(), 'id', ["template" => "<label>Ваши странички</label>\n{input}\n{hint}\n{error}"] )
                            ->dropDownList($items,$params);
                    ?>
                    <!--<input id="users-formtype" name="Land" value="addLp" type="hidden">
                    <button type="submit" class="btn btn-danger waves-effect waves-effect" name="save" <?php //if ($count_p == $level['maxLandPage']) echo 'disabled'; ?>>СОЗДАТЬ СТРАНИЦУ</button>-->
                        <input id="users-formtype" name="List" value="change" type="hidden">
                    <?php $formlpmenu->end(); ?>
                    </div>
                </div>

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
                <?php if ($lp) { ?>
                <?php


                $form = ActiveForm::begin();?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <?=$form->field(
                                $lp, 'h1', ['template' => "<label>Заголовок №1</label>\n{input}\n{hint}\n{error}" ]
                            )->textInput(['placeholder' => 'Текст заголовка']);
                            ?>
                        </div>
                        <div class="form-group">
                            <?=$form->field(
                                $lp, 'h2', ['template' => "<label>Заголовок №2</label>\n{input}\n{hint}\n{error}" ]
                            )->textInput(['placeholder' => 'Текст заголовка']);
                            ?>
                        </div>
                        <div class="form-group">
                            <?=$form->field(
                                $lp, 'h3', ['template' => "<label>Заголовок №3</label>\n{input}\n{hint}\n{error}" ]
                            )->textInput(['placeholder' => 'Текст заголовка']);
                            ?>
                        </div>
                        <div class="form-group">
                            <?=$form->field(
                                $lp, 'yt1', ['template' => "<label>Id ролика с Youtube</label>\n{input}\n{hint}\n{error}" ]
                            )->textInput(['placeholder' => 'Вставьте id ролика']);
                            ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <?=$form->field(
                                $lp, 'h1c', ['template' => "<label>Цвет заголовка №1</label>\n{input}\n{hint}\n{error}" ]
                            )->widget(ColorInput::classname(),[
                                'options' => ['placeholder' => '6 символов цвета']
                            ]);
                            ?>
                        </div>
                        <div class="form-group">
                            <?=$form->field(
                                $lp, 'h2c', ['template' => "<label>Цвет заголовка №2</label>\n{input}\n{hint}\n{error}" ]
                            )->widget(ColorInput::classname(),[
                                'options' => ['placeholder' => '6 символов цвета']
                            ]);
                            ?>
                        </div>
                        <div class="form-group">
                            <?=$form->field(
                                $lp, 'h3c', ['template' => "<label>Цвет заголовка №3</label>\n{input}\n{hint}\n{error}" ]
                            )->widget(ColorInput::classname(),[
                                'options' => ['placeholder' => '6 символов цвета']
                            ]);
                            ?>
                        </div>
                        <div class="form-group">
                            <?=$form->field(
                                $lp, 'button', ['template' => "<label>Надпись на кнопке</label>\n{input}\n{hint}\n{error}" ]
                            )->textInput(['placeholder' => 'Призыв к действию']);
                            ?>
                        </div>
                    </div>
                </div>
                <input id="users-formtype" name="Land" value="change" type="hidden">
                <button type="submit" class="btn btn-danger waves-effect waves-effect" name="save">СОХРАНИТЬ СТРАНИЦУ</button>
                    <?= \yii\helpers\Html::hiddenInput('Lp[id]', $lp['id'], ["id"=>"users-formtype"]); ?>
                <?php $form->end(); ?>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<!-- END PAGE BASE CONTENT -->

<?php if ($save=="good") { ?>
<div class="fade modal <?= ("good"==$save)?"in":null; ?>" style="display: block; padding-right: 17px;" id="GoodsaveWindow"  role="dialog" tabindex="-1">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"
                        onclick='$("#GoodsaveWindow").removeClass("fade modal in");//$("#GoodsaveWindow").addClass("fade modal");'
                    >×</button>
            </div>
            <div class="modal-body">
                <div
                    style="color:green" align="center"
                    >Данные успешно обновлены</div>
                <br />
                <button type="button"
                        onclick='$("#GoodsaveWindow").removeClass("fade modal in");//$("#GoodsaveWindow").addClass("fade modal");'>
                    Закрыть</button>
            </div>
        </div>
    </div>
</div>
<?php } ?>