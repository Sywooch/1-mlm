<?php
namespace app\assets;
use yii\web\AssetBundle;

class HangoutAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl  = '@web';
    public $css = [
        "lp777/777.css",
        "soc_net/social-likes_classic.css",
        "//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css",
        "font/stylesheet.css"
    ];
    public $js = [
        "//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js",
        "//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js",
        "soc_net/social-likes.min.js"
    ];
    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}