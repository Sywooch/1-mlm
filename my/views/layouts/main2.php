<?php app\assets\AppAsset::register($this);?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
<head>
    <title>gridview</title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

 <?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>