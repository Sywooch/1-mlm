<?php

\yii\bootstrap\Modal::begin([
    'header' => '<h2>Вход---</h2>',
    'toggleButton' =>
        [
            'tag' => 'button',
            //'class' => 'btn btn-primary glyphicon glyphicon-pencil',
            'label' => 'log-in',
        ]
]); ?>
<?php echo \nodge\eauth\Widget::widget(['action' => 'site/login']); ?>
<?php

\yii\bootstrap\Modal::end();
?>