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
                <span class="caption-subject font-purple-soft bold uppercase" style="font-size: 14px;">Архив мастер классов</span>
            </div>
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#tab_1_1" data-toggle="tab"> Системные  </a>
                </li>
                <li>
                    <a href="#tab_1_2" data-toggle="tab"> Партнера  </a>
                </li>
                <li>
                    <a href="#tab_1_2" data-toggle="tab"> Мои  </a>
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
                        'dataProvider' => $dataProviderMy,
                        'my'=>"yes"
                    ]); ?>
                </div>
            </div>
        </div>
    </div>