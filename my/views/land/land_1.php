<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?=$data["desc"]?>" />
    <meta name="keywords" content="<?=$data["keywords"]?>" />

    <meta property="og:title" content="<?=$data["name"]?>"/>
    <meta property="og:description" content="<?=$data["desc"]?>" />
    <meta property="og:image" content="<?=$data["socpic"]?>" />

    <meta name="robots" content="noindex,nofollow">
    <title><?=$data["name"]?></title>

    <!-- Bootstrap -->
    <link href="<?=Yii::getAlias('@web') ?>/tp1/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=Yii::getAlias('@web') ?>/tp1/sticky-footer-navbar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .col-md-offset-4{margin-left: 0% !important;}
        .container {
            padding-right: 0px !important;;
            padding-left: 0px !important;;
        }
        .modalDialog {
            position: fixed;
            font-family: Arial, Helvetica, sans-serif;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: rgba(0,0,0,0.8);
            z-index: 99999;
            -webkit-transition: opacity 400ms ease-in;
            -moz-transition: opacity 400ms ease-in;
            transition: opacity 400ms ease-in;
            display: none;
            pointer-events: none;
        }
        .modalDialog:target {
            display: block;
            pointer-events: auto;
        }
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
        .socbtn {
            padding: 10px;
            margin-bottom: 5px;
        }

        .socbtn a {
            color: white;
            text-decoration: none;
        }

        .socbtn.facebook-btn {
            background-color: #38559c;
        }

        .socbtn.googleplus-btn {
            background-color: #5dd7fc;
        }
        .socbtn.vkontakte-btn {
            background-color: #466fa1;
        }
        .socbtn.linkedin-btn {
            background-color: #4875b4;
        }
        .socbtn.yandex-btn {
            background-color: #13488D;
        }
        .socbtn.mailru-btn {
            background-color: #FFCF00;
        }

        #youtube {
            background: transparent url("<?=Yii::getAlias('@web') ?>/tp1/macbook650.png") no-repeat scroll center center;
            height: 365px;
            /*background-size:100% auto;*/

        }

        #youtube_small {
            background: transparent url("<?=Yii::getAlias('@web') ?>/tp1/macbook650.png") no-repeat scroll center center;
            height: 200px;
            /*background-size:100% auto;*/
            background-size: 330px;

        }

        .btn.yellow {
            color: #111 !important;
            text-shadow: 0px -1px 0px #222;
            background-color: #FFC000;
            border-radius: 4px;
            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.45);
        }

        .btn.big {
            padding: 5px 20px;
            font-size: 20px;
        }

        #ytscr {
            width: 480px;
            margin: 0 auto;
            height: 310px;
        }

        #ytscr iframe {
            margin-top: 20px;
        }

        #photo img {
            width: 60px;
            height: 60px;
            border: 2px solid #DDD;
            border-radius: 60px;
            float: left;
            margin-left: 10px;
        }

        #photo p {
            margin: 0px;
            padding: 10px;
            float: left;
            text-align: left;
            font-size: 16px;
            color: rgba(0, 0, 0, 0.45);
        }

        .social-likes {
            float: right;
            margin-top: 15px !important;
        }

        @media (max-width:641px) {
            #youtube {
                background: transparent url("<?=Yii::getAlias('@web') ?>/tp1/iphone-bg.png") no-repeat scroll center center;
                height: 200px;
                background-size: 330px;
            }

            #ytscr {
                width: 245px;
                margin: 0px auto;
                height: 138px;
            }

            #ytscr iframe {
                margin-top: 32px;
            }
        }

        /*@media (max-width:768px) {
            #youtube {
                background-size:100% auto;
            }
        }*/
    </style>
    <link href="s/css/modal_dialog.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?=Yii::getAlias('@web') ?>/tp1/soc_net/social-likes_classic.css" />
</head>
<body <?php if ($data["bg"]) echo "style='background-color: ".$data['bg']."'" ?>>
<div class="navbar navbar-default" role="navigation">
    <div class="container">
        
        <div id="photo">
            <img src="<?=$user['userpic']?>">
            <p>Ваш консультант:  <b><?php echo $user["fn"].' '.$user["ln"];?></b></p>
        </div>
        <div class="social-likes">
            <div class="facebook" title="Поделиться ссылкой на Фейсбуке">Facebook</div>
            <div class="twitter" title="Поделиться ссылкой в Твиттере">Twitter</div>
            <div class="mailru" title="Поделиться ссылкой в Моём мире">Мой мир</div>
            <div class="vkontakte" title="Поделиться ссылкой во Вконтакте">Вконтакте</div>
            <div class="odnoklassniki" title="Поделиться ссылкой в Одноклассниках">Одноклассники</div>
            <div class="plusone" title="Поделиться ссылкой в Гугл-плюсе">Google+</div>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>
<div class="container" style="text-align: center;">
    <div>
        <h1 style="line-height: 23px; <?php if ($data["h1c"]) echo "color: ".$data['h1c'].";" ?>"><?=$data["h1"]?></h1>
        <h2 style="line-height: 23px; <?php if ($data["h2c"]) echo "color: ".$data['h2c'].";" ?>"><?=$data["h2"]?></h2>
        <h3 style="line-height: 23px; <?php if ($data["h3c"]) echo "color: ".$data['h3c'].";" ?>"><?=$data["h3"]?></h3>
    </div>
    <div id="youtube">
        <div id="ytscr">
            <iframe id="ytplayer" src="https://www.youtube-nocookie.com/embed/<?=$data["yt1"]?>?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=<?=$data["autoplay"]?>" allowfullscreen="" frameborder="0" style="width: 100%; height: 100%;"></iframe>
        </div>
        <p style="margin-top: 25px;"><a href="index.php?r=site/ref&refid=<?=$user["refdt"]?>" data-toggle="modal" data-target="#modal-1" title="Жмите здесь, чтобы узнать больше!" class="btn big yellow pulse"><?=$data["button"]?></a></p>
    </div>

</div>
<h3 style="text-align: center; font-size: 14px; line-height: 28px;">самое интересное Вас ждет внутри. Регистрация в 1 клик!</h3>

<div id="footer">
    <div class="container">
        <p class="text-muted"  style="text-align: center; font-size: 12px;">
            © 2015 <a href="#modal" data-toggle="modal" data-target="#modal-1">
                1-mlm.com™</a> | <a href="#modal" data-toggle="modal" data-target="#modal-1">
                Войти в Личный Кабинет</a>
        </p>
    </div>
</div>

<!-- BEGIN LOGIN BOX *****************************************************************-->
<div class="modal fade" id="modal-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h5 class="modal-title" id="myModalLabel"><span>Вход и Регистрация -  Используя социальные сети</span></h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <!--<h5 class="col-md-12 wl"><span>Используя социальные сети</span></h5>-->
                    <div data-ulogin-inited="1446737975834" class="col-md-12 wl" id="uLogin1" data-ulogin="lang=ru;display=buttons;fields=first_name,last_name,email,phone,photo,photo_big,city,country;providers=facebook,twitter,vkontakte,odnoklassniki,mailru,googleplus;optional=phone;hidden=;redirect_uri=;receiver=http%3A%2F%2Fjoinetwork.ru%2Fxd_custom.html;callback=LoginAutorizer">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="socbtn facebook-btn">
                                <a style="" href="javascript:void(0)"
                                   onclick="window.location.href='<?=Yii::getAlias('@web') ?>/index.php?r=site%2Flogin&amp;service=facebook&refid=<?=$user["refdt"]?>'"
                                   class="socbtnn" data-uloginbutton="facebook">
                                    <span><img src="s/img/facebook-btn.png" width="25" ></span>Facebook</a>
                            </div>
                            <div class="socbtn googleplus-btn">
                                <a style="" href="javascript:void(0)"
                                   onclick="window.location.href='<?=Yii::getAlias('@web') ?>/index.php?r=site%2Flogin&amp;service=google&refid=<?=$user["refdt"]?>'"
                                   class="socbtn" data-uloginbutton="googleplus">
                                    <span><img src="s/img/googleplus-btn.png" width="25" ></span>Google+ - скоро</a>
                            </div>
                            <div class="socbtn vkontakte-btn">
                                <a style="" href="javascript:void(0)"
                                   onclick="window.location.href='<?=Yii::getAlias('@web') ?>/index.php?r=site%2Flogin&amp;service=vkontakte&refid=<?=$user["refdt"]?>'"
                                   class="socbtn" data-uloginbutton="vkontakte">
                                    <span><img src="s/img/vkontakte-btn.png" width="25" ></span>Vkontakte</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <!--------------------------------------------------------------------------------->
                            <div class="socbtn odnoklassniki-btn">
                                <a href="javascript:void(0)"
                                   onclick="window.location.href='<?=Yii::getAlias('@web') ?>/index.php?r=site%2Flogin&amp;service=linkedin_oauth2&refid=<?=$user["refdt"]?>'"
                                   class="socbtn" data-uloginbutton="odnoklassniki">
                                    <span><img src="s/img/linkedin-icon.png" width="25" ></span>Linkedin</a>
                            </div>
                            <div class="socbtn yandex-btn">
                                <a href="javascript:void(0)"
                                   onclick="window.location.href='<?=Yii::getAlias('@web') ?>/index.php?r=site%2Flogin&amp;service=yandex&refid=<?=$user["refdt"]?>'"
                                   class="socbtn" data-uloginbutton="odnoklassniki">
                                    <span><img src="s/img/yandex-btn.png" width="25" ></span>Yandex - скоро</a>
                            </div>
                            <div class="socbtn mailru-btn">
                                <a href="javascript:void(0)"
                                   onclick="window.location.href='<?=Yii::getAlias('@web') ?>/index.php?r=site%2Flogin&amp;service=mailru&refid=<?=$user["refdt"]?>'"
                                   class="socbtn" data-uloginbutton="odnoklassniki">
                                    <span><img src="s/img/mailru-btn.png" width="25" ></span>Mailru</a>
                            </div>
                            <!--------------------------------------------------------------------------------->
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span>Закрыть</span></button>
            </div>
        </div>
    </div>
</div>
<!-- END LOGIN BOX *****************************************************************-->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?=Yii::getAlias('@web') ?>/tp1/js/bootstrap.min.js"></script>
<script src="<?=Yii::getAlias('@web') ?>/tp1/soc_net/social-likes.min.js"></script>
</body>
</html>
