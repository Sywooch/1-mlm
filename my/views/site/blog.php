<?php

$this->registerJsFile('//1-mlm.com/mlm-template/global/scripts/app_acc.js');

$this->registerJsFile('//1-mlm.com/mlm-template/pages/scripts/dashboard.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('//1-mlm.com/mlm-template/layouts/layout4/scripts/layout.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('//1-mlm.com/mlm-template/layouts/layout4/scripts/demo.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('//1-mlm.com/mlm-template/layouts/global/scripts/quick-sidebar.js', ['depends' => 'yii\web\JqueryAsset']);
?>
<iframe id="player" src="mp.php/<?= $site; ?>" style="border: 0; width: 100%; height: 1200px;"></iframe>