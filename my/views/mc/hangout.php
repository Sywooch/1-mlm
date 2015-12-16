<?php echo Yii::getAlias('@web'); ?>
<!DOCTYPE html>
<html dir="ltr" lang="ru">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="<?=$data["desc"]?>" />
    <meta name="keywords" content="<?=$data["keywords"]?>" />

    <meta property="og:title" content="<?=$data["name"]?>"/>
    <meta property="og:description" content="<?=$data["desc"]?>" />
    <meta property="og:image" content="<?=$data["socpic"]?>" />

    <meta name="robots" content="noindex,nofollow">
    <title><?php//$data["name"]?></title>
    <link rel="stylesheet" type="text/css" href="<?=Yii::getAlias('@web') ?>/lp777/777.css" />
    <link href="<?=Yii::getAlias('@web') ?>/favicon.ico" rel="icon">
    <link rel="stylesheet" type="text/css" href="<?=Yii::getAlias('@web') ?>/soc_net/social-likes_classic.css" />

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="<?=Yii::getAlias('@web') ?>/soc_net/social-likes.min.js"></script>
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
    <link rel="stylesheet" type="text/css" href="<?=Yii::getAlias('@web') ?>/font/stylesheet.css" />
    <!--<link rel="stylesheet" type="text/css" href="<?=Yii::getAlias('@web') ?>/css/land_style.css" />-->
</head>
<body>
    <div style="background: transparent url('<?=Yii::getAlias('@web') ?>/img/5.jpg') no-repeat scroll center top; text-align: center;">
        <div class="container">
            <h1>Delston capital group</h1>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe src="//www.youtube.com/embed/UZ2DWN7zW6o" allowfullscreen="" frameborder="0" height="480" width="853"></iframe>
            </div>
            <h4>Внимание! задержка видео с чатом 15 секунд!</h4>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <?php
                    //use kartik\social\FacebookPlugin;
                    //echo FacebookPlugin::widget(['appId'=>'FACEBOOK_APP_ID']);
                    ?>
                </div>
                <div class="col-md-6">
                    ----------------------
                    <?php
                    use kartik\social\VKPlugin;
                    echo VKPlugin::widget([
                        'type' => VKPlugin::COMMENTS,
                        'apiId' => 5129822,
                        'options' => [
                            'limit' => 10,
                            'width' => '665',
                            'attach' => '*'
                        ]
                    ]);
                    ?>
                    -----------------------
                </div>
            </div>
        </div>
    </div>

</body>
</html>