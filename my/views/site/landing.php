<?php
$this->registerJsFile('//1-mlm.com/mlm-template/global/scripts/app_acc.js');
$this->registerJsFile('//1-mlm.com/mlm-template/pages/scripts/dashboard.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('//1-mlm.com/mlm-template/layouts/layout4/scripts/layout.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('//1-mlm.com/mlm-template/layouts/layout4/scripts/demo.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('//1-mlm.com/mlm-template/layouts/global/scripts/quick-sidebar.js', ['depends' => 'yii\web\JqueryAsset']);
$this->title = 'Создание страницы';
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
<!-- Начало  страницы -->
    <div class="row">
        <div class="col-md-12">
            <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-blue-sharp">
                    <i class="icon-user font-blue-sharp"></i>
                    <span class="caption-subject font-blue-sharp"><?= $this->title; ?></span>
                </div>
                <div class="actions">
                    <!---------------------------------------------------------->
                    <a class="btn btn-circle btn-icon-only btn-default" data-toggle="modal" data-target="#w1help"  href="#w1help">
                        <i class="icon-support"></i></a>
                    <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;"> </a>
                    <div style="display: none;" id="w1help" class="fade modal" role="dialog" tabindex="-1">
                        <div class="modal-dialog ">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 style="margin-top: 0px;"><div align="center">Помощь</div></h4>
                                </div>
                                <div class="modal-body">
                                    <iframe width="560" height="315"
                                            src="https://www.youtube-nocookie.com/embed/<?php
                                            echo "iBfk37Fa3H0";
                                            ?>?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!------------------------------------------------------------>
                </div>
                <ul class="nav nav-tabs">
                    <li class="<?=($t==1)?"active":"" ?>">
                        <a href="#tab_1_1" data-toggle="tab">Создать страничку </a>
                    </li>
                </ul>
            </div>
            <?php 
			$lp=( !empty($lp) )?$lp:null;
			echo $this->render('_landing_tab',[
                'data' => $data,
                'model' => $model,
                'level' => $level,
                'count_p' => $count_p,
                'lp'=>$lp,
                'm' => $m,
                't' => $t
            ]);?>
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

<?php if ($save=="create"): ?>
    <div class="fade modal <?= ("create"==$save)?"in":null; ?>" style="display: block; padding-right: 17px;" id="GoodsaveWindow"  role="dialog" tabindex="-1">
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
