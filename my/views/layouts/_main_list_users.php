<?php
$style_user = <<<'STYLE'
.user_item {
    display: inline;
    margin-right: 25px;
}

.user_item img {
    border-radius: 15px !important;
}
STYLE;
$this->registerCss($style_user);
?>
<div class="user_item">
    <img width="30" src="mp.php/<?=$user['userpic']; ?>">
    <a href="<?= $user["vkontakte"]; ?>"><?php echo $user["fn"]." "; ?></a>
</div>