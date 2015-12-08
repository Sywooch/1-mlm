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
use yii\helpers\Html;
use app\models\Lp;
use yii\data\ActiveDataProvider;

$heading="table users";
$exportConfig=
    [
        GridView::TEXT =>
        [
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
            'config' =>
            [
                'colDelimiter' => "\t",
                'rowDelimiter' => "\r\n",
            ]
        ],
    ];
$gridColumns=
    [
        ['class' => 'yii\grid\SerialColumn'],
        [
            'class' => 'kartik\grid\ExpandRowColumn',
            'value' => function ($model, $key, $index, $column) {
                return GridView::ROW_COLLAPSED;
            },
            'detail' => function ($model, $key, $index, $column) {

                $dataProvider=(new ActiveDataProvider([
                    'query'=>Lp::find()->where(['uid'=>3])
                ]));

                return Yii::$app->controller->renderPartial('_poitems', [
                    //'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
                ]);
            },
        ],

        [
            'attribute' =>  'ln',
            'label'=>"surname"
        ],
        [
            'attribute' =>  'level',
            'label'=>"level",
            'value'=>function($model){
                return $model->levels[title];
            }
        ],
        [
            'header'=>"status",
            'value'=>function($model){
                return $model->levels[title];
            }
        ]
    ];

echo GridView::widget([
    'dataProvider'    =>$dataProvider,
    //filterModel'     =>$searchModel,
    'columns'         =>$gridColumns,
    'containerOptions'=>['style'=>'overflow: auto'], // only set when $responsive = false
    'headerRowOptions'=>['class'=>'kartik-sheet-style'],
    'filterRowOptions'=>['class'=>'kartik-sheet-style'],
    'pjax'=>true,
    'toolbar'=>
    [
        [
            'content'=>
            Html::a('<i class="glyphicon glyphicon-repeat"></i>', [''], ['data-pjax'=>0, 'class'=>'btn btn-default',
                'title'=>'Reset Grid'])
        ],
        '{export}',
        '{toggleData}',
    ],
    'export'=>
    [
        'fontAwesome'=>true,
        'showConfirmAlert'=>false,
        'target'=>GridView::TARGET_BLANK
    ],
    'panel'=>
    [
        'type'=>GridView::TYPE_PRIMARY,
        'heading'=>$heading,
    ],
    'summary'   =>  '<div>Показаны записи {begin} - {end} из {totalCount}</div>',
    'persistResize'=>true,
    'exportConfig'=>$exportConfig,
]);
?>