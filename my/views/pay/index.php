<?php

$this->registerJsFile('/mertonic/global/scripts/app.js');
$this->registerJsFile('/mertonic/pages/scripts/dashboard.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/layouts/layout4/scripts/layout.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/layouts/layout4/scripts/demo.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/layouts/global/scripts/quick-sidebar.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerCssFile('/mertonic/pages/css/pricing.min.css');

$this->title = 'Выбор тарифа';
//$this->params['breadcrumbs'][] = $this->title;
?>
    <!-- BEGIN PAGE BASE CONTENT -->
    <div class="portlet light portlet-fit bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-cogs font-green-sharp"></i>
                <span class="caption-subject font-green-sharp uppercase"><?= $this->title; ?></span>
            </div>
            <div align="right">
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
        </div>
        <div><p align="center" style="font-size: 18px;">
                Ваш  текущий тарифный план - <?= $level; ?> <br /></p></div>
        <div class="portlet-body">
        <?php echo $this->render("m.php",[
            'btn2'=>$btn2,
            'btn10'=>$btn10,
            'btn25'=>$btn25
        ])?>
        </div>
        <div><p align="center"><span style="color: #F64747;">Внимание !!!</span> Все тарифы снижены до 31.12.2015</p></div>
    </div>
    <!-- END PAGE BASE CONTENT -->