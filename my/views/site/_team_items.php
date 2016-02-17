<?php
use yii\grid\GridView;
?>

<div class="po-item-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'summary'   =>  '<div>Показаны записи {begin} - {end} из {totalCount}</div>',
        'emptyText' => 'Еще нет кандидатов в команде',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'header'     =>  'Вход',
                'format' => 'raw',
                'options' => ['style' => 'width: 100px; max-width: 100px;'],
                'value'  =>  function($dt)
                {
                    return "<div class='{$dt["status"]}'></div>".$dt["active"];
                }
            ],
            [
                'attribute' =>  'fn',
                'label'     =>  'Имя',
                'options' => ['style' => 'width: 220px; max-width: 220px;']
            ],
            [
                'attribute' =>  'ln',
                'label'     =>  'Фамилия',
                'options' => ['style' => 'width: 220px; max-width: 220px;']
            ],
            [
                'attribute' =>  'title',
                'label'     =>  'Уровень'
            ],
            [
                "header"=>"Лендинг",
                "format"=>"raw",
                'options' => ['style' => 'width: 100px; max-width: 100px;'],
                'value'  =>  function($dt)
                {
                    return  "<a href='http://1-mlm.com/{$dt["companyid"]}-{$dt["refdt"]}.html'
                                        target='_blank'
                                        ><i class='fa fa-paper-plane'></i></a>";
                }
            ],
            [
                'header' => 'Действия',
                'format' => 'raw',
                'options' => ['style' => 'width: 100px; max-width: 100px;'],
                'value'  =>  function($model)
                {
                    return $this->render('_team_edit', [
                        'dt' => $model
                    ]);
                }
            ]
        ],
    ]); ?>

</div>