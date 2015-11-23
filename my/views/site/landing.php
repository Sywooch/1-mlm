<?php
use yii\widgets\ActiveForm;
use kartik\widgets\ColorInput;

$this->registerJsFile('/mertonic/global/scripts/app_acc.js');

$this->registerJsFile('/mertonic/pages/scripts/dashboard.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/layouts/layout4/scripts/layout.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/layouts/layout4/scripts/demo.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/layouts/global/scripts/quick-sidebar.js', ['depends' => 'yii\web\JqueryAsset']);

$this->title = 'profile';
$this->params['breadcrumbs'][] = $this->title;
$save=(isSet($save))?$save:"www";
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
            <div class="portlet-title tabbable-line">
                <div class="caption">
                    <i class="fa fa-cogs font-green-sharp"></i>
                    <span class="caption-subject font-green-sharp bold uppercase">Создание страницы</span>
                </div>
                <ul class="nav nav-tabs">
                    <li class="<?=($t==1)?"active":"" ?>">
                        <a href="#tab_1_1" data-toggle="tab">Создать страничку </a>
                    </li>
                    <li class="<?=($t==2)?"active":"" ?>">
                        <a href="#tab_1_2" data-toggle="tab">Редактировать страничку </a>
                    </li>
                </ul>
            </div>
            <div class="portlet-body">
                <div class="tab-content">
                    <div id="tab_1_1" class="tab-pane fade <?=($t==1)?"active in":"" ?>">
                        <?php
                        if ($m != ''):
                            ?>
                            <div class="note note-success">

                                <h4 class="block">Внимание</h4>
                                <p>
                                    <?= $m; ?>
                                </p>

                            </div>
                        <?php
                            else:
                            ?>
                            <h1>Hello</h1>
                            <input type="text" name="h1" value="">
                        <?php endif; ?>


                    </div>
                    <div id="tab_1_2" class="tab-pane fade <?=($t==2)?"active in":"" ?>">
                        <div class="row">
                            <div class="col-md-12">
                                <?= $this->render('_landing_list');?>
                            </div>
                        </div>
                        <?php
                        if ( !empty($lp) ):
                            $form = ActiveForm::begin();?>
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <?= $form->field(
                                            $lp, 'name', ['template' => "<label>Название</label>\n{input}\n{hint}\n{error}" ]
                                        )->textInput(['placeholder' => 'Текст заголовка']);
                                        ?>
                                    </div>

                                    <div class="form-group">
                                        <?= $form->field(
                                            $lp, 'h1', ['template' => "<label>Заголовок №1</label>\n{input}\n{hint}\n{error}" ]
                                        )->textInput(['placeholder' => 'Текст заголовка']);
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <?= $form->field(
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

                                    <div class="form-group">
                                        <?php
                                        echo $form->field(
                                            $lp, 'id', [
                                            "template" => "<label>Ваша ссылка</label>\n{input}\n{hint}\n{error}"])
                                            ->textInput([
                                                "readonly" => true,
                                                "value"=>'http://1-mlm.com/1/'.$lp->id.'.html'
                                            ]); ?>
                                    </div>
                                </div>
                            </div>
                            <input id="users-formtype" name="Land" value="change" type="hidden">
                            <button type="submit" class="btn btn-danger waves-effect waves-effect" name="save">СОХРАНИТЬ СТРАНИЦУ</button>
                            <?= \yii\helpers\Html::hiddenInput('Lp[id]', $lp['id'], ["id"=>"users-formtype"]); ?>
                            <?php $form->end(); ?>
                        <?php endif; ?>
                    </div>
                </div>



            </div>
        </div>
    </div>
</div>
<!-- END PAGE BASE CONTENT -->

<?php if ($save=="good"): ?>
<div class="fade modal <?= ("good"==$save)?"in":null; ?>" style="display: block; padding-right: 17px;" id="GoodsaveWindow"  role="dialog" tabindex="-1">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"
                        onclick='
                        $("#GoodsaveWindow").removeClass("fade modal in");
                        $("#GoodsaveWindow").css("display", "none");
                        //$("#GoodsaveWindow").addClass("fade modal");'
                    >×</button>
            </div>
            <div class="modal-body">
                <div
                    style="color:green" align="center"
                    >Данные успешно обновлены</div>
                <br />
                <button type="button"
                        onclick='
                        $("#GoodsaveWindow").removeClass("fade modal in");
                        $("#GoodsaveWindow").css("display", "none");
                        //$("#GoodsaveWindow").addClass("fade modal");'>
                    Закрыть</button>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>