<?php
$css = <<<'STYLE'
.modal-header
{
    height: 48px !important;
}

.mtb {
    padding-top: 5px;
    padding-bottom: 20px;
}

#table_contact tr td {
    text-align: left;
}

STYLE;
$this->registerCss($css);
\yii\bootstrap\Modal::begin([
'header' => '<h4 style="margin-top: 0px;">Информация о пользователе</h4>',
'toggleButton' =>
    [
        'tag' => 'button',
        'class' => 'btn btn-circle btn-icon-only btn-default icon-user',
        'label' => '',
    ]
]);
?>
<!--echo $dt["fn"], ' ', $dt["ln"];-->
<div class="row mtb">
    <div class="col-md-4">
        <img style="border-radius: 75px !important;" src="mp.php/<?=$dt['userpic']?>" height="150">
    </div>
    <!--<div class="col-md-8" style="text-align: left; margin-left: -18px;">
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
    </div>-->
    <div class="col-md-8" style="text-align: center;">
        <h2 style="margin-top: 52px;"><?php echo $dt["fn"].' '.$dt["ln"] ?></h2>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <table class="table table-bordered" id="table_contact">
            <tr>
                <td><i class="fa fa-paper-plane"></i></td>
                <td>Уровень</td>
                <td><?=$dt["title"]?></td>
                <td>Линк</td>
            </tr>
<?php
            if( !empty($dt["email"]) ):
?>
            <tr>
                <td><i class="fa fa-envelope-o"></i></td>
                <td>E-mail</td>
                <td><?=$dt["email"]?></td>
                <td><a href="mailto:<?=$dt["email"]?>"><i class="fa fa-paper-plane"></i></a></td>
            </tr>
<?php
            endif;
            if( !empty($dt["mobile"]) ):
?>
            <tr>
                <td><i class="fa fa-mobile"></i></td>
                <td>Телефон</td>
                <td><?=$dt["mobile"]?></td>
                <td><a href="tel:<?=$dt["mobile"]?>"><i class="fa fa-paper-plane"></i></a></td>
            </tr>
<?php
            endif;
            if( !empty($dt["skype"]) ):
?>
            <tr>
                <td><i class="fa fa-skype"></i></td>
                <td>Skype</td>
                <td><?=$dt["skype"]?></td>
                <td><a href="skype:<?=$dt["skype"]?>?call"><i class="fa fa-paper-plane"></i></a></td>
            </tr>
<?php
            endif;
            if( !empty($dt["vkontakte"]) ):
?>
            <tr>
                <td><i class="fa fa-vk"></i></td>
                <td>Вконтакте</td>
                <td>vk.com</td>
                <td><a href="http://vk.com/id<?=$dt["vkontakte"]?>"><i class="fa fa-paper-plane"></i></a></td>
            </tr>
<?php
            endif;
            if( !empty($dt["facebook"]) ):
?>
            <tr>
                <td><i class="fa fa-facebook"></i></td>
                <td>Facebook</td>
                <td>facebook.com</td>
                <td><a href="https://www.facebook.com/app_scoped_user_id/<?=$dt["facebook"]?>"><i class="fa fa-paper-plane"></i></a></td>
            </tr>
            <?php endif; ?>
        </table>
    </div>
</div>
<?php
\yii\bootstrap\Modal::end();
?>