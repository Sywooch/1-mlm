<!DOCTYPE html>
<html dir="ltr" lang="ru">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="<?=$data["desc"]?>" />
    <meta name="keywords" content="<?=$data["keywords"]?>" />
    <meta property="og:title" content="<?=$data["name"]?>"/>
    <meta property="og:description" content="<?=$data["desc"]?>" />
    <meta property="og:image" content="<?=$user["userpic"]?>" />
    <meta name="robots" content="noindex,nofollow">
    <title><?=$data["name"]?></title>
    <link rel="stylesheet" type="text/css" href="<?=Yii::getAlias('@web') ?>/lp777/777.css" />
    <link href="<?=Yii::getAlias('@web') ?>/favicon.ico" rel="icon">
    <link rel="stylesheet" type="text/css" href="<?=Yii::getAlias('@web') ?>/soc_net/social-likes_classic.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

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

    </style>
</head>
<body>
<div id="wrapper">
    <div id="header">
        <div class="content">
            <div id="photo">
                <img src="<?=$user['userpic']?>" />
                <p>Ваш личный консультант:<br/><?php echo $user["fn"].' '.$user["ln"];?></p>
            </div>
        </div>
    </div>
    <div id="main" style="background-color: #<?=$data["bg"]?>;?>">
        <h1 <?php if ($data["h1c"]) echo "style='color: ".$data['h1c']."'" ?>><?=$data["h1"]?></h1>
        <h2 <?php if ($data["h2c"]) echo "style='color: ".$data['h2c']."'" ?>><?=$data["h2"]?></h2>
        <h3 <?php if ($data["h3c"]) echo "style='color: ".$data['h3c']."'" ?>><?=$data["h3"]?></h3>
        <div id="youtube">
            <iframe id="ytplayer" width="500" height="300" src="//www.youtube.com/embed/<?=$data["yt1"]?>?rel=0&controls=0&showinfo=0&autoplay=<?=$data["autoplay"]?>&" frameborder="0" allowfullscreen></iframe>
            <div class="watermark"></div>
            <div class="clear"></div>
        </div>
        <div id="cta">
            <p><a href="#modal" data-toggle="modal" data-target="#modal-1"
                  title="Жмите здесь, чтобы узнать больше!"
                  class="btn big yellow pulse"><?=$data["button"]?></a></p>

            <h3 style="color: #fff">самое интересное Вас ждет внутри. Регистрация в 1 клик!</h3>
        </div>
        <div id="share">
            <!--<script type="text/javascript">(function() {
                    if (window.pluso)if (typeof window.pluso.start == "function") return;
                    if (window.ifpluso==undefined) { window.ifpluso = 1;
                        var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
                        s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
                        s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
                        var h=d[g]('body')[0];
                        h.appendChild(s);
                    }})();</script>
            <div class="pluso" data-background="none;" data-options="medium,square,line,horizontal,counter,sepcounter=1,theme=14" data-services="vkontakte,odnoklassniki,facebook,twitter,google,moimir,email" data-user="1654282972"></div>-->
            <div class="social-likes">
                <div class="facebook" title="Поделиться ссылкой на Фейсбуке">Facebook</div>
                <div class="twitter" title="Поделиться ссылкой в Твиттере">Twitter</div>
                <div class="mailru" title="Поделиться ссылкой в Моём мире">Мой мир</div>
                <div class="vkontakte" title="Поделиться ссылкой во Вконтакте">Вконтакте</div>
                <div class="odnoklassniki" title="Поделиться ссылкой в Одноклассниках">Одноклассники</div>
                <div class="plusone" title="Поделиться ссылкой в Гугл-плюсе">Google+</div>
            </div>
        </div>
    </div>
    <div id="footer">
        <p id="copyright">&copy; 2015 <a href="#modal" data-toggle="modal" data-target="#modal-1">
                1-mlm.com&#8482;</a> | <a href="#modal" data-toggle="modal" data-target="#modal-1">
                Войти в Личный Кабинет</a></p>
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
                                <a style="" href="javascript:void(0)"
                                   onclick="window.location.href='<?=Yii::getAlias('@web') ?>/index.php?r=site%2Flogin&amp;service=facebook&refid=<?=$user["refdt"]?>'"
                                   class="socbtn facebook-btn" data-uloginbutton="facebook">
                                    <span><img src="s/img/facebook-btn.png" width="25" ></span>Facebook</a>
                                <a style="" href="javascript:void(0)"
                                   onclick="window.location.href='<?=Yii::getAlias('@web') ?>/index.php?r=site%2Flogin&amp;service=google&refid=<?=$user["refdt"]?>'"
                                   class="socbtn googleplus-btn" data-uloginbutton="googleplus">
                                    <span><img src="s/img/googleplus-btn.png" width="25" ></span>Google+ - скоро</a>
                                <a style="" href="javascript:void(0)"
                                   onclick="window.location.href='<?=Yii::getAlias('@web') ?>/index.php?r=site%2Flogin&amp;service=vkontakte&refid=<?=$user["refdt"]?>'"
                                   class="socbtn vkontakte-btn" data-uloginbutton="vkontakte">
                                    <span><img src="s/img/vkontakte-btn.png" width="25" ></span>Vkontakte</a>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <!--------------------------------------------------------------------------------->
                                <a href="javascript:void(0)"
                                   onclick="window.location.href='<?=Yii::getAlias('@web') ?>/index.php?r=site%2Flogin&amp;service=linkedin_oauth2&refid=<?=$user["refdt"]?>'"
                                   class="socbtn odnoklassniki-btn" data-uloginbutton="odnoklassniki">
                                    <span><img src="s/img/linkedin-icon.png" width="25" ></span>Linkedin</a>
                                <a href="javascript:void(0)"
                                   onclick="window.location.href='<?=Yii::getAlias('@web') ?>/index.php?r=site%2Flogin&amp;service=yandex&refid=<?=$user["refdt"]?>'"
                                   class="socbtn yandex-btn" data-uloginbutton="odnoklassniki">
                                    <span><img src="s/img/yandex-btn.png" width="25" ></span>Yandex - скоро</a>
                                <a href="javascript:void(0)"
                                   onclick="window.location.href='<?=Yii::getAlias('@web') ?>/index.php?r=site%2Flogin&amp;service=mailru&refid=<?=$user["refdt"]?>'"
                                   class="socbtn mailru-btn" data-uloginbutton="odnoklassniki">
                                    <span><img src="s/img/mailru-btn.png" width="25" ></span>Mailru</a>
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

</body>
</html>