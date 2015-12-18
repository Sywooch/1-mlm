<?php
$this->title = 'Архив мастер классов';

$this->params['breadcrumbs'][] = $this->title;
$this->registerJsFile('/mertonic/global/scripts/app_acc.js');
$this->registerJsFile('/mertonic/pages/scripts/dashboard.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/layouts/layout4/scripts/layout.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/layouts/layout4/scripts/demo.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/layouts/global/scripts/quick-sidebar.js', ['depends' => 'yii\web\JqueryAsset']);

$css = <<<'STYLE'
.tbl-header *
{
    text-align: center;
    height: 25px !important;
}
.dt-buttons {
    margin-top: 0px !important;
    float: left !important;
    margin-right: 20px;
}
STYLE;
$this->registerCss($css);
?>

    <div class="portlet light bordered">
        <div class="portlet-title tabbable-line">
            <div class="caption">
                <i class="icon-settings"></i>
                <span class="caption-subject font-purple-soft bold uppercase">Архив мастер классов</span>
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
            <!--<div align="right">

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#w1help"><i class="icon-cloud-upload"></i></button>
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

            </div>-->
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#tab_1_1" data-toggle="tab"> Системные  </a>
                </li>
                <li>
                    <a href="#tab_1_2" data-toggle="tab"> Партнера  </a>
                </li>
                <li>
                    <a href="#tab_1_3" data-toggle="tab"> Мои  </a>
                </li>
            </ul>
        </div>
        <div class="portlet-body">
            <div class="tab-content">
                <div class="tab-pane fade active in" id="tab_1_1">
                    <?php
                    echo $this->render('_mcarchive_list', [
                        'dataProvider' => $dataProviderSys
                    ]); ?>
                </div>
                <div class="tab-pane fade" id="tab_1_2">
                    <?php
                    echo $this->render('_mcarchive_list', [
                        'dataProvider' => $dataProviderPartner
                    ]); ?>
                </div>
                <div class="tab-pane fade" id="tab_1_3">
                    <?php
                   echo $this->render('_mcarchive_list', [
                        'dataProvider' => $dataProviderMy
                    ]); ?>
                </div>
            </div>
        </div>
    </div>