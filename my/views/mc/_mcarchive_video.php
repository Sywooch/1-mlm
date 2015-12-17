<?php
use yii\bootstrap\Modal;

Modal::begin([
'header' => "<h4 style='margin-top: 0px;'>{$data->title}</h4>",
'toggleButton' =>
    [
        'tag' => 'button',
        //'class' => 'btn btn-primary icon-user',
        'label' => "{$data->title}",
    ]
]);
?>

    <iframe src="//www.youtube.com/embed/<?= $data->yt; ?>?showinfo=0&amp;rel=0&amp;controls=1&amp;autoplay=0&amp;fs=1"
            allowfullscreen=""
            frameborder="0"
            height="315"
            width="560">
    </iframe>

<pre><?php
    print_r($data);
    ?></pre>

<?php
\yii\bootstrap\Modal::end();
?>