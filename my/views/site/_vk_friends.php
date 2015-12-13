<?php
\yii\bootstrap\Modal::begin([
    'header' => '<h4 style="margin-top: 0px;">Добавить в  друзья</h4>',
    'toggleButton' =>
        [
            'tag' => 'button',
            'class' => 'btn green',
            'label' => 'Добавить в  друзья',
        ]
]);?>
<iframe src="https://vk.com/id<?= $vkID; ?>"
        allowfullscreen="" frameborder="0"
        height="315" width="560"></iframe>
<?php \yii\bootstrap\Modal::end(); ?>

