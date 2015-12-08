<?php
use yii\grid\GridView;
?>

<div class="po-item-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' =>  'ln',
                'header'     =>  'Фамилия',
                'options' => ['style' => 'width: 220px; max-width: 220px;']
            ],
            [
                'attribute' =>  'fn',
                'header'     =>  'Имя',
                'options' => ['style' => 'width: 220px; max-width: 220px;']
            ],
            [
                'attribute' =>  'active',
                'header'     =>  'Вход',
                'options' => ['style' => 'width: 220px; max-width: 220px;']
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