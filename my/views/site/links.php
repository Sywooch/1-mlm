<?php
use yii\grid\GridView;
use yii\grid\ActionColumn;
$this->registerJsFile('/mlm-template/global/scripts/app.js');
$this->registerJsFile('/mlm-template/pages/scripts/dashboard.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mlm-template/layouts/layout4/scripts/layout.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mlm-template/layouts/layout4/scripts/demo.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mlm-template/layouts/global/scripts/quick-sidebar.js', ['depends' => 'yii\web\JqueryAsset']);
$css = <<<'STYLE'
.tbl-header *
{
    text-align: center;
    height: 25px !important;
}
STYLE;
$this->registerCss($css);
$this->title = 'Мои ссылки (на созданые  страницы)';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-link font-blue-sharp"></i>
            <span class="caption-subject font-blue-sharp"><?= $this->title; ?></span>
        </div>
        <!-- Кнопка видео подсказки и во всю ширину --->
        <div class="actions">
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
        </div>
        <!-- Кнопка видео подсказки и во всю ширину --->
    </div>
    <div class="portlet-body">
        <div class="table-responsive">
            <?= GridView::widget([
                'dataProvider'  =>  $dataProvider,
                'tableOptions'  =>  [
                    'class'     =>  'table'
                ],
                'rowOptions'   =>  [
                    'style'    =>  'text-align: center; background-color:'
                ],
                'headerRowOptions'   =>  [
                    'class'     =>  'tbl-header'
                ],
                'summary'   =>  '<div>Показаны записи {begin} - {end} из {totalCount}</div>',
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    [
                        'attribute' => 'name',
                        'label' => 'Название'
                    ],
                    [
                        'header' => 'Ссылка на страницу',
                        'format' => 'raw',
                        'value' => function($data)use($refdt){
                            return '<a href=\'http://1-mlm.com/'
                            .$data["id"].'.html\' target="_blank">http://1-mlm.com/'.$data["id"]
                            .'-'.$refdt
                            .'.html</a>';
                        }
                    ]
                ]
            ]);
            ?>
        </div>
    </div>
</div>
<!-- конец страницы-->