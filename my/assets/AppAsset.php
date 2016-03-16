<?php
namespace app\assets;
use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl  = '@web';
    public $css = [
        "mlm-template/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css",
        "mlm-template/global/css/components.min.css",
        "mlm-template/pages/css/profile.min.css",
        "//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all",
        "mlm-template/global/plugins/font-awesome/css/font-awesome.min.css",
        "mlm-template/global/plugins/simple-line-icons/simple-line-icons.min.css",
        "mlm-template/global/plugins/bootstrap/css/bootstrap.min.css",
        "mlm-template/global/plugins/uniform/css/uniform.default.css",
        "mlm-template/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css",
        "mlm-template/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css",
        "mlm-template/global/plugins/morris/morris.css",
        "mlm-template/global/plugins/fullcalendar/fullcalendar.min.css",
        "mlm-template/global/plugins/jqvmap/jqvmap/jqvmap.css",
        "mlm-template/global/css/plugins.min.css",
        "mlm-template/layouts/layout4/css/layout.min.css",
        "mlm-template/layouts/layout4/css/themes/light.min.css",
        "mlm-template/layouts/layout4/css/custom.min.css",

        "mlm-template/global/plugins/select2/css/select2.min.css",
        "mlm-template/global/plugins/select2/css/select2-bootstrap.min.css"
    ];


    public $js = [];
    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}