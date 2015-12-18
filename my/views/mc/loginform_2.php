<?php
$style_user = <<<'STYLE'
.user_item {
    display: inline;
    margin-right: 25px;
}
.user_item img {
    border-radius: 15px !important;
}
STYLE;
$this->registerCss($style_user);
?>

<!DOCTYPE html>
<html>
<head>
    <link href="//fonts.googleapis.com/css?family=Roboto:100,300&subset=cyrillic' rel='stylesheet' type='text/css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>1-й МЛМ Ресурс</title>
    <meta name="description" content="1-й МЛМ Ресурс">

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/img/favicon.ico" type="image/x-icon">
    <link href="s/css/font-awesome.min.css" rel="stylesheet">
    <link href="s/css/magnific-popup.css" rel="stylesheet">
    <link href="s/css/main.css" rel="stylesheet">
    <link href="s/css/modal_dialog.css" rel="stylesheet">
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
            color: white;
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
            width:1200px;
            white-space:nowrap;
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
            color: rgba(200, 200, 200, 0.9);
        }

    </style>
    <link rel="stylesheet" type="text/css" href="<?=Yii::getAlias('@web') ?>/soc_net/social-likes_classic.css" />

</head>
<body>

<!-- ************ Блок Авторизации на сайте 1-mlm.com - НАЧАЛО ************ -->
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
                               onclick="window.location.href='index.php?r=site%2Flogin&amp;service=facebook'"
                               class="socbtn facebook-btn" data-uloginbutton="facebook">
                                <span><img src="s/img/facebook-btn.png" width="25" ></span>Facebook</a>
                            <a style="" href="javascript:void(0)"
                               onclick="window.location.href='index.php?r=site%2Flogin&amp;service=twitter'"
                               class="socbtn googleplus-btn" data-uloginbutton="googleplus">
                                <span><img src="s/img/twitter-btn.png" width="25" ></span>Twitter</a>
                            <a style="" href="javascript:void(0)"
                               onclick="window.location.href='index.php?r=site%2Flogin&amp;service=vkontakte'"
                               class="socbtn vkontakte-btn" data-uloginbutton="vkontakte">
                                <span><img src="s/img/vkontakte-btn.png" width="25" ></span>Vkontakte</a>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <!--------------------------------------------------------------------------------->
                            <a href="javascript:void(0)"
                               onclick="window.location.href='index.php?r=site%2Flogin&amp;service=linkedin_oauth2'"
                               class="socbtn odnoklassniki-btn" data-uloginbutton="odnoklassniki">
                                <span><img src="s/img/linkedin-icon.png" width="25" ></span>Linkedin</a>
                            <a href="javascript:void(0)"
                               onclick="window.location.href='index.php?r=site%2Flogin&amp;service=instagram'"
                               class="socbtn yandex-btn" data-uloginbutton="odnoklassniki">
                                <span><img src="s/img/instagram-btn.png" width="25" ></span>Instagram</a>
                            <a href="javascript:void(0)"
                               onclick="window.location.href='index.php?r=site%2Flogin&amp;service=mailru'"
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
<!-- ************ Блок Авторизации на сайте 1-mlm.com - КОНЕЦ ************ -->
<!--hero section-->
<header class="hero-section" style="background: transparent url('img/296260-0-bgheader.original.jpg') no-repeat scroll center center / cover;">
    <!--navigation-->
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">меню</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <!--<a class="navbar-brand" href=""><img class="logo-nav" alt="1-й МЛМ Ресурс" src="../img/logo.png" width="50" height="50"><img class="logo-head" alt="logo" src="../img/logo.png" width="80" height="80"></a>--> </div>
                <div id="photo" style="float: left;">
                    <img src="https://pp.vk.me/c624825/v624825515/2a003/tstMP1ib20M.jpg" />
                    <p>Вёдет мастер-класс:<br>  <b>Гошан Волкин</b></p>
                </div>
            <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
                <ul class="nav navbar-nav nav-left">

                    <!--<li><a href="#features">преимущества</a></li>
                    <li><a href="#reviews">отзывы</a></li>
                    <li><a href="#pricing">прайс</a></li>
                    <li><a href="http://blog.1-mlm.com" target="_blank" >блог</a></li>-->
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#modal" data-toggle="modal" data-target="#modal-1"><i class="fa fa-sign-in">                       </i> Войти для просмотра мастер-класса</a></li>
                    <!--<li><a class="btn" href="#modal" data-toggle="modal" data-target="#modal-1">регистрация</a></li>-->
                </ul>
            </div>
        </div>
    </nav>
    <!--navigation end-->
    <!--Приветственное сообщение-->
    <section class="container text-center welcome-message">
        <div class="row">
            <div class="col-md-12">
                <h1>Заголовок 1</h1>
                <!--<h1><span style="color: rgb(227, 101, 101) !important;">(</span>1 mlm ресурс<span style="color: rgb(227, 101, 101) !important;">)</span></h1>-->
                <h2>Заголовок 2</h2>
                <div class="play-btn"> <a href="#modal" data-toggle="modal" data-target="#modal-1" class=""><img src="s/img/play-btn.png" alt="play"></a> </div>
                <div class="cta-btn"><a class="btn" href="#modal" data-toggle="modal"
                                        data-target="#modal-1">Для просмотра мастер-класса авторизируйтесь</a>
                    <br><br>
                    <!--<h2>уже используют &nbsp; <span class="total-number-1"> 0 </span> &nbsp; пользователей</h2>-->
                </div>
            </div>
        </div>
    </section>
    <!--Приветственное сообщение end-->
</header>
<!--hero section end-->


<script src="s/js/modal_dialog.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="<?=Yii::getAlias('@web') ?>/soc_net/social-likes.min.js"></script>
<script type='text/javascript' src='//cdn.jsdelivr.net/jquery.marquee/1.3.1/jquery.marquee.min.js'></script>
<script>
    $(document).ready(function(){
        $('.marquee').marquee({
            duplicated: true,
            duration: 20000
        });
    })
</script>

<script src="s/js/waypoints.min.js"></script>
<script src="s/js/jquery.animateNumber.min.js"></script>
<script src="s/js/waypoints-sticky.min.js"></script>
<script src="s/js/retina.min.js"></script>
<script src="s/js/jquery.magnific-popup.min.js"></script>
<script src="s/js/jquery.ajaxchimp.min.js"></script>
<script src="s/js/tweetie.min.js"></script>
<script src="s/js/main.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script src="s/js/gmap.js"></script>

<input type="hidden" id="usrall" value="<?= \app\models\Users::find()->count(); ?>" />

<!-- BEGIN CALLPY CODE {literal}  --><script>(function(w,t,p,v,c,f,s,r,h,l,d){w[p]="//callpy.com/";w[v]="3.86";w[c]=false;if(t==w){var tmp=l.callpy_data;if(tmp==null||!l.callpy_html||!l[c]){w[f]=false}else{w[f]=true;w[s]=JSON.parse(tmp);var tm=new Date().getTime();if(tm-w[s].lastSave<20000){if(w[s].insertcode){eval(w[s].insertcode)}else{w[f]=false}}else{w[f]=false}}}else{w[f]=false}var callpy_script=d.createElement("script");try{var tmp=parent.window.location.href?1:0}catch(e){var tmp=0}callpy_script.type="text/javascript";callpy_script.async=true;if(!w[f]||!l[h]){l[h]=new Date().getTime()}callpy_script.src=w[p]+"c/"+w.location.host.replace(/www./i,"")+"/"+(t==w?(w[f]?1:2):(tmp==1?4:3))+".js?id=2983&m="+l[h];callpy_script.onload=function(){iowisp.init()};d.body.appendChild(callpy_script)})(window,window.top,"callpy_path","callpy_version","tiny","sven","callpy_storage","callpy_chat_scroller","callpy_lastchat",localStorage,document);</script><!-- {/literal} END CALLPY CODE  -->

</body>
</html>
