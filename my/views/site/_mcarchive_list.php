<?php
use yii\grid\GridView;

echo GridView::widget([
    'dataProvider'  =>  $dataProvider,
    'tableOptions'  =>  [
        'class'     =>  'table table-striped table-bordered table-hover',
        'id' => 'sample_1'
    ],
    'rowOptions'   =>  [
        'style'    =>  'text-align: left; background-color:'
    ],
    'headerRowOptions'   =>  [
        'class'     =>  'tbl-header'
    ],
    'summary'   =>  '<div>Показаны записи {begin} - {end} из {totalCount}</div>',
    'columns'   => [
        [
            //'header' => 'Картинка',
            //'attribute' =>  'title',
            'options' => ['style' => 'width: 120px; max-width: 120px;'],
            'format' => 'raw',
            'value'=>function($data) {
                return "<img src='http://i1.ytimg.com/vi/{$data->yt}/1.jpg'>";
            }
        ],
        [
            //'header' => 'Просмотр',
            'format' => 'raw',
            'options' => ['style' => 'width: 1000px; max-width: 1000px;'],
            'value'  =>  function($data)
            {
                return
                    $str="Мастер-класс от {$data->date}<br />".
                        ( !empty($my) )?"Редактировать":null.
                        "Смотреть в записи: ".
                        $this->render('_mcarchive_video', [
                            'data' => $data
                        ]).
                        "<br />".
                        "Пригласить партнеров или кандидатов: Cсылка на мастер-класс для партнеров";
            }
        ]
    ]
]);
?>