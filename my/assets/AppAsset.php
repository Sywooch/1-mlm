<?php
namespace app\assets;
use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl  = '@web';
    public $css = [
        "mertonic/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css",
        "mertonic/global/css/components.min.css",
        "mertonic/pages/css/profile.min.css",
        "//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all",
        "mertonic/global/plugins/font-awesome/css/font-awesome.min.css",
        "mertonic/global/plugins/simple-line-icons/simple-line-icons.min.css",
        "mertonic/global/plugins/bootstrap/css/bootstrap.min.css",
        "mertonic/global/plugins/uniform/css/uniform.default.css",
        "mertonic/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css",
        "mertonic/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css",
        "mertonic/global/plugins/morris/morris.css",
        "mertonic/global/plugins/fullcalendar/fullcalendar.min.css",
        "mertonic/global/plugins/jqvmap/jqvmap/jqvmap.css",
        "mertonic/global/css/plugins.min.css",
        "mertonic/layouts/layout4/css/layout.min.css",
        "mertonic/layouts/layout4/css/themes/light.min.css",
        "mertonic/layouts/layout4/css/custom.min.css"
    ];
    public $js = [];
    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}