<?php
\yii\bootstrap\Modal::begin([
'header' => '<h3>Информация о пользователе</h3>',
'toggleButton' =>
    [
        'tag' => 'button',
        'class' => 'btn btn-primary icon-user',
        'label' => '',
    ]
]);
?>
<!--echo $dt["fn"], ' ', $dt["ln"];-->
<div class="row">
    <div class="col-md-4">
        <img style="border-radius: 21px !important;" src="mp.php/<?=$dt['userpic']?>" height="150">
    </div>
    <div class="col-md-8" style="text-align: left; margin-left: -18px;">
        Имя: <?=$dt["fn"]?><br>
        Фамилия: <?=$dt["ln"]?><br>
        <?php if ( !is_numeric($dt['country']) ) :?>
        Страна: <?=$dt['country']?> <br>
        <?php endif;?>
        Уровень: <?=$dt["title"]?><br>
        Телефон: <?=$dt["mobile"]?><br>
        Скайп: <?=$dt["skype"]?><br>
        E-mail: <?=$dt["email"]?><br>
        Вконтакте: <a href="<?=$dt["vkontakte"]?>">Ссылка</a><br>
    </div>
</div>
<?php
\yii\bootstrap\Modal::end();
?>