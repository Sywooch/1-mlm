<?php
/**
 * http://demos.krajee.com/grid
 * https://github.com/kartik-v/yii2-grid
 * http://demos.krajee.com/grid-demo
 *
 * http://stackoverflow.com/questions/33606339/how-to-join-two-tables-and-get-values-in-yii2-gridview
 * http://newtips.co/st/questions/32166185/how-to-join-two-tables-and-get-values-in-yii2-gridview.html
 *
 * http://stackoverflow.com/questions/23337431/wrong-results-when-using-join-in-yii2
 * >>>http://developer.uz/blog/activerecord-yii2-and-yii1/
 * http://www.phpactiverecord.org/projects/main/wiki/Finders
 *
 * >>>http://nix-tips.ru/yii2-razbiraemsya-s-gridview.html
 * >>>http://nix-tips.ru/yii2-sortirovka-i-filtr-gridview-po-svyazannym-i-vychislyaemym-polyam.html
 * >>>http://nix-tips.ru/yii2-eksport-v-excel-pdf-csv-i-drugie-formaty.html
 */
use kartik\grid\GridView;

$exportConfig=
    [
        GridView::TEXT => [
            'label' => "export",
            'iconOptions' => ['class' => 'text-muted'],
            'showHeader' => true,
            'showPageSummary' => true,
            'showFooter' => true,
            'showCaption' => true,
            'filename' => "export",
            'alertMsg' => "The TEXT export file will be generated for download.",
            'options' => ['title' => "Tab Delimited Text"],
            'mime' => 'text/plain',
            'config' => [
                'colDelimiter' => "\t",
                'rowDelimiter' => "\r\n",
            ]
        ],
    ];

echo GridView::widget([
    'dataProvider'  =>$dataProvider,
    'filterModel'=>$searchModel,

    /*'tableOptions'  =>  [
        'class'     =>  'table table-striped table-bordered table-hover',
        'id' => 'sample_1'
    ],
    'rowOptions'   =>  [
        'style'    =>  'text-align: center; background-color:'
    ],
    'headerRowOptions'   =>  [
        'class'     =>  'tbl-header'
    ],
    'responsive'    =>  true,*/

    'summary'   =>  '<div>Показаны записи {begin} - {end} из {totalCount}</div>',
    'autoXlFormat'=>true,
    'export'=>[
        'fontAwesome'=>true,
        'showConfirmAlert'=>false,
        'target'=>GridView::TARGET_BLANK
    ],
    'columns'   =>
        [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' =>  'ln',
                'label'=>"surname"
            ],
            [
                'attribute' =>  'level',
                'label'=>"level",
                //'header'=>"level",
                'value'=>function($model){
                    return $model->levels[title];
                }
            ],
            [
                //'attribute' =>  'level',
                //'label'=>"level",
                'header'=>"status",
                'value'=>function($model){
                    return $model->levels[title];
                }
            ]
        ],
    'pjax'=>true,
    'panel'=>[
        'type'=>'primary',
        'heading'=>'USERS table'
    ],
    'persistResize'=>true,
    'exportConfig'=>$exportConfig,
]);
?>