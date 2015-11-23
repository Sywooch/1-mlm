<?php
use yii\grid\GridView;
use yii\grid\ActionColumn;

$this->registerJsFile('/mertonic/global/scripts/app.js');

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
STYLE;
$this->registerCss($css);

$this->title = 'profile';
$this->params['breadcrumbs'][] = $this->title;
?>
<div>
    <div class="col-md-12">
        <div class="portlet light bordered">
            <?= GridView::widget([
                'dataProvider'  =>  $dataProvider,
                'tableOptions'  =>  [
                    'class'     =>  'table table-striped table-bordered table-hover'
                ],
                'rowOptions'   =>  [
                    'style'    =>  'text-align: center; background-color:'
                ],
                'headerRowOptions'   =>  [
                    'class'     =>  'tbl-header'
                ],
                'columns' => [
                    [
                        'attribute' => 'name',
                        'label' => 'Название'
                    ],
                    [
                        'header' => 'Ссылка на страницу',
                        'format' => 'raw',
                        'value' => function($data) {
                            return '<a href=\'http://1-mlm.com/1/'.$data["id"].'.html\' target="_blank">http://1-mlm.com/1/'.$data["id"].'.html</a>';
                        }
                    ]
                ]
            ]);
            ?>
        </div>
    </div>
</div>