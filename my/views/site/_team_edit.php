<?php
\yii\bootstrap\Modal::begin([
'header' => '<h2>Редактирование</h2>',
'toggleButton' =>
    [
        'tag' => 'button',
        'class' => 'btn btn-primary icon-user',
        'label' => '',
    ]
]);

echo $dt["fn"], ' ', $dt["ln"];

\yii\bootstrap\Modal::end();
?>