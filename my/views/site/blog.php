<?php

$this->registerJsFile('//1-mlm.com/mertonic/global/scripts/app_acc.js');

$this->registerJsFile('//1-mlm.com/mertonic/pages/scripts/dashboard.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('//1-mlm.com/mertonic/layouts/layout4/scripts/layout.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('//1-mlm.com/mertonic/layouts/layout4/scripts/demo.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('//1-mlm.com/mertonic/layouts/global/scripts/quick-sidebar.js', ['depends' => 'yii\web\JqueryAsset']);
?>
<iframe id="player" src="mp.php/<?= $site; ?>" style="border: 0; width: 100%; height: 1200px;"></iframe>