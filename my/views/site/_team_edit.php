<?php
\yii\bootstrap\Modal::begin([
'header' => '<h2>Редактирование</h2>',
'toggleButton' =>
    [
        'tag' => 'button',
        'class' => 'btn btn-primary glyphicon glyphicon-pencil',
        'label' => '',
    ]
]);
echo $model->fn, $model->city;
\yii\bootstrap\Modal::end();
?>