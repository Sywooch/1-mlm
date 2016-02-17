<?php
use yii\helpers\Html;
use kartik\social\VKPlugin;
use app\assets\HangoutAsset;

HangoutAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html dir="ltr" lang="ru">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="Автоматизация Рекрутинга на 80% Идея 1 mlm - предоставить Вам профессиональную маркетинговую систему для маштабного развития и автоматизации сетевого и партнёрского бизнеса." />


        <meta property="og:title" content="1 mlm Ресурс™  2016"/>
        <meta property="og:description" content="Автоматизация Рекрутинга на 80% Идея 1 mlm - предоставить Вам профессиональную маркетинговую систему для маштабного развития и автоматизации сетевого и партнёрского бизнеса." />
        <meta property="og:image" content="//1-mlm.com/img/1-mlm-og.png" />

        <meta property="og:url" content="//1-mlm.com/ref-<?php
        $identity = \Yii::$app->getUser()->getIdentity()->profile;
        $usr = \app\models\Users::find();
        switch($identity["service"])
        {
            case "facebook":
                $usr=$usr->where(['facebook' => $identity["id"]])->one();
                break;
            case "vkontakte":
                $usr=$usr->where(['vkontakte' => $identity["id"]])->one();
                break;
            case "linkedin_oauth2":
                $usr=$usr->where(['linkedin' => $identity["id"]])->one();
                break;
            case "google":
                $usr=$usr->where(['googleplus' => $identity["id"]])->one();
                break;
            case "yandex":
                $usr=$usr->where(['yandex' => $identity["id"]])->one();
                break;
            case "mailru":
                $usr=$usr->where(['mailru' => $identity["id"]])->one();
                break;
            case "twitter":
                $usr=$usr->where(['twitter' => $identity["id"]])->one();
                break;
            case "instagram":
                $usr=$usr->where(['instagram' => $identity["id"]])->one();
                break;
        }

        echo $usr["refdt"];

        ?>.html" />

        <meta name="robots" content="noindex,nofollow">
        <?= Html::csrfMetaTags() ?>
        <title><?php//$data["name"]?></title>
        <?php $this->head() ?>
        <style>
            .modalDialog > div {
                width: 400px;
                position: relative;
                margin: 10% auto;
                padding: 5px 20px 13px 20px;
                border-radius: 10px;
                background: #fff;
                background: -moz-linear-gradient(#fff, #505c99);
                background: -webkit-linear-gradient(#fff, #505c99);
                background: -o-linear-gradient(#fff, #505c99);
            }
            .close {
                background: #606061;
                color: #FFFFFF;
                line-height: 25px;
                position: absolute;
                right: -12px;
                text-align: center;
                top: -10px;
                width: 24px;
                text-decoration: none;
                font-weight: bold;
                -webkit-border-radius: 12px;
                -moz-border-radius: 12px;
                border-radius: 12px;
                -moz-box-shadow: 1px 1px 3px #000;
                -webkit-box-shadow: 1px 1px 3px #000;
                box-shadow: 1px 1px 3px #000;
            }
            .close:hover { background: #00d9ff; }
        </style>
        <style>

            .socbtn.facebook-btn {
                background-color: #38559c;
            }

            .socbtn.googleplus-btn {
                background-color: #d13b20;
            }
            .socbtn.vkontakte-btn {
                background-color: #466fa1;
            }
            .socbtn.linkedin-btn {
                background-color: #4875b4;
            }
            .socbtn.yandex-btn {
                background-color: #D22626;
            }
            .socbtn.mailru-btn {
                background-color: #FFCF00;
            }

            .socbtn, .socbtn:hover {
                display: block;
                font-size: 14px;
                line-height: 30px;
                font-weight: 600;
                color: #ffffff;
                text-decoration: none;
                text-transform: uppercase;
                padding: 5px 10px;
                margin: 0px 0px 10px 0px;
                background-color: #eeeeee;
                transition: all 0.5s;
            }

            .cta-btn .btn {
                padding: 10px 37px !important;
            }

            .white {
                /*background-color: white;*/
                padding-top: 8px;
                position: absolute;
                top: 600px;
                height: 48px;
                border-top: solid 2px yellow;
                border-bottom: solid 2px yellow;
                padding-left: 10px;
            }

            .user_item {
                display: inline-block;
                margin-right: 20px;
            }

            .user_item img {
                border-radius: 15px !important;
                border: solid 1px white;
            }

            .user_item a {
                color: white;
            }

            .marquee {
                overflow:hidden;
                /*zoom:1;*/
                width:1200px;
                /*font-size:12px;
                line-height:16px;
                position:relative;
                -moz-user-select: none;
                -khtml-user-select: none;
                user-select: none;
                background:#f6f6f6;*/
                white-space:nowrap;
            }

            h1, h2, h3 {
                margin-top: 2px !important;
                margin-bottom: 2px !important;
            }

            h1 {
                margin-top: 9px !important;
            }

            #share {
                padding: 0 !important;
            }

            #main h1 {
                font-size:28px;
            }

            #main h2 {
                font-size:24px;
            }

            #main h3 {
                font-size:20px;
            }

        </style>
    </head>
    <body>
    <?php $this->beginBody() ?>
    <?=$content;?>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>