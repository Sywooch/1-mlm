<!DOCTYPE HTML>
<html class="landing_page js flexbox canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"><head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Language" content="pt">


    <meta name="description" content="<?=$data["desc"]?>">
    <meta name="keywords" content="<?=$data["keywords"]?>">
    <meta name="robots" content="noindex, follow">

    <!--<meta property="fb:app_id" content="356692267740215">-->
    <meta property="og:title" content="<?=$data["name"]?>">
    <meta property="og:description" content="<?=$data["desc"]?>">
    <!--<meta property="og:url" content="http://warthunder.com/">-->
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?=$user["userpic"]?>">

    <!--<link href="//1-mlm.com/lp/01/css/style.css" rel="stylesheet" type="text/css">
    <link href="//1-mlm.com/lp/01/css/photo.css" rel="stylesheet" type="text/css">-->
    <link href="lp/01/css/style.css" rel="stylesheet" type="text/css">
    <link href="lp/01/css/photo.css" rel="stylesheet" type="text/css">


    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!--<link rel="stylesheet" href="http://static.warthunder.com/css/modern/jquery_ui/jquery-ui.min.css">-->

    <title><?=$data["name"]?></title>
    <!--<base href="http://warthunder.com/" local="false" host="">-->

    <link href="https://1-mlm.com/lp/01/css/modern_style.min.css" rel="stylesheet" type="text/css"  media="screen" charset="utf-8">

    <link rel="stylesheet" type="text/css" href="//1-mlm.com/soc_net/social-likes_classic.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="//1-mlm.com/soc_net/social-likes.min.js"></script>


    <script async="" src="https://s.ytimg.com/yts/jsbin/www-widgetapi-vflpCdzwa/www-widgetapi.js" id="www-widgetapi-script" type="text/javascript"></script><script src="https://www.google-analytics.com/analytics.js" async="" type="text/javascript"></script><script src="https://www.googleadservices.com/pagead/conversion_async.js" async="" type="text/javascript"></script><script src="https://www.googletagmanager.com/gtm.js?id=GTM-HWDXK" async=""></script><script src="https://mc.yandex.ru/metrika/watch.js" async="" type="text/javascript"></script><script src="https://www.youtube.com/player_api"></script><script>window.startTime = new Date().getTime();</script>
    <link rel="stylesheet" type="text/css" href="<?=Yii::getAlias('@web') ?>/font/stylesheet.css" />
    <link rel="stylesheet" type="text/css" href="<?=Yii::getAlias('@web') ?>/css/land_style.css" />

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
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

    </style>
</head>



<body id="landing16" class="vid spring land-en tnk new-video-lp" style="background: #141414;">

<!-- BEGIN LOGIN BOX *****************************************************************-->
<div class="modal fade" id="modal-1" style="width: 620px;">
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

<div class="tip"><div class="tipMid"></div></div>
<div class="propeller hide">
    <div><img src="http://static.warthunder.com/i/64.gif" height="64" width="64"></div>
</div>

<div style="width: 1349px; height: 400px;" id="mask" class=""></div>

<div class="hide" id="media-container">
    <div class="popup-bg" onclick="$('#media-container').fadeTo( 250, 0, function() { $('#media-container .playvideo').html('');$(this).addClass('hide') } ); $('html').css('overflow','auto');return false"></div>
    <table class="popup">
        <tbody><tr>
            <td class="popup-head" id="popup-head"><div class="data"></div>  <a href="noscript" class="close" onclick="$('#media-container > div.popup-bg').trigger('click');return false"></a></td>
        </tr>
        <tr>
            <td>
                <div id="media-container-content"><div class="l-arrow"></div>  <div class="r-arrow"></div>  </div>
            </td>
        </tr>
        </tbody></table>
</div>




<div style="height: 400px; width: 1349px;" id="video_bg">
    <div style="background: transparent url(&quot;//img.youtube.com/vi/<?=$data["yt1"]?>/0.jpg&quot;) no-repeat scroll center top / 100% auto; z-index: 1; position: absolute; width: 1349px; min-width: 320px; height: 657px; display: block;" class="js-bg-video"></div>
    <iframe style="width: 100%; height: 755.299px;" id="player" type="text/html" src="https://www.youtube.com/embed/<?=$data["yt1"]?>?&amp;controls=0&amp;enablejsapi=1&amp;fs=0&amp;vq=hd720&amp;rel=0&amp;showinfo=0&amp;iv_load_policy=3&amp;wmode=transparent&amp;&amp;html5=1&amp;modestbranding=1" allowfullscreen="" frameborder="0" height="100%" width="100%"></iframe>    </div>

<div class="wrapper js-overlay" style="background:url('http://static.warthunder.com/i/layer2.png');margin-bottom:-405px;">
    <!-- No Script Pixels -->
    <!-- /No Script Pixels -->
    <div style="font-weight: 500; line-height:16px; padding-top: 50px;" id="main">
        <h1 <?php if ($data["h1c"]) echo "style='color: ".$data['h1c']."'" ?>><?=$data["h1"]?></h1>
        <h2 <?php if ($data["h2c"]) echo "style='color: ".$data['h2c']."'" ?>><?=$data["h2"]?></h2>
        <h3 <?php if ($data["h3c"]) echo "style='color: ".$data['h3c']."'" ?>><?=$data["h3"]?></h3>
    </div>
    <div style="display: none;" class="controller">
        <img src="http://static.warthunder.com/i/modern/sprite/volOn.png" alt="volume" id="volumeicon" height="15" width="14">
        <input orient="vertical" min="0" value="0" max="1" step="0.05" id="volume" type="range">
    </div>
    <form class="hide" onsubmit="return Gaijin.Registration($(this));" action="" method="post" style="">
        <input name="token" value="0" type="hidden">
        <div id="notifier">
            <div id="messagearea">

            </div>
            <div id="pattern" class="hide">
                <div class="%classname% korobka">
                    <div class="close2">x</div>
                    <span class="title">%title%</span>
                    <span class="message">%message%</span>
                </div>
            </div>
        </div>
        <div style="top: 7px;" class="head" id="registration-container">
            <div class="close"></div>


            <table class="signup-table">
                <tbody><tr>
                    <td colspan="2">
                        <a class="social fb" href="#"></a>

                        <a class="social gp" href="https://accounts.google.com/o/oauth2/auth?scope=https://www.googleapis.com/auth/userinfo.email+https://www.googleapis.com/auth/userinfo.profile&amp;response_type=code&amp;redirect_uri=http://warthunder.com/pt/login/gg/registration&amp;client_id=169954886993.apps.googleusercontent.com&amp;hl=en&amp;from_login=1&amp;as=6e9899be50bd1a58"></a>

                        <p class="small" style="margin-left:80px;font-size:12px;"> Usar dados de outros serviços <br> para criar uma conta rapidamente </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b> Nome de Jogo </b>
                        <input name="nick" value="" data-message=" Erro no no campo 'Nome de Jogo'. Podes apenas usar letras Latinas e números " data-message_firstdigit=" Erro no no campo 'Nome de Jogo'. O teu nome de jogo não pode começar com um número " data-message_busy=" O Nome de Jogo já é usado " data-message_checking=" Verificando... " data-message_ok=" Nome de Jogo OK. " tabindex="1" type="text">
                        <span class="que hide">? <div><i> Coloca o teu nome de jogo. Podes apenas usar letras Latinas e números </i><span></span></div></span>
                        <!-- Error messages on registration -->
                        <div class="reg_messager">
                            <span class="loader_gspb"></span>
                            <span class="email_gspb"></span>
                        </div>
                        <div class="lp que_error">
    <span class="lp que_block">
        <p class="lp que_text"></p>
    </span>
                        </div>                        </td>
                    <td>
                        <b> Password </b>
                        <input id="create-container-input-password" name="password" value="" data-message=" Erro no campo 'Password' " data-message_length=" A Password deve ter pelo menos 6 carateres " tabindex="3" type="password">
                        <span class="que hide">? <div><i> Coloca a tua password </i><span></span></div></span>
                        <div class="lp que_error">
    <span class="lp que_block">
        <p class="lp que_text"></p>
    </span>
                        </div>                        </td>
                </tr>
                <tr>
                    <td>
                        <b> Email </b>
                        <input id="create-container-input-login" name="login" value="" data-message=" Erro no campo 'Email' " tabindex="2" type="text">
                        <span class="que reg_lp hide">? <div><i> Coloca o teu endereço de email para ser usado na comunicação como nome da tua conta </i><span></span></div></span>
                        <div class="lp que_error">
    <span class="lp que_block">
        <p class="lp que_text"></p>
    </span>
                        </div>                            <div id="login-domain-error" class="hide"> Por favor, certifica-te que disponibilizas um endereço de email válido. <br><a href="/noscript/" class="script" onclick="return Gaijin.FixEmail(this,'create-container-input-login','login-domain-error')"> Talvez queiras dizer  <span class="email"></span></a>.</div>
                    </td>
                    <td>
                        <b> Repete a password </b>
                        <input id="create-container-input-login" name="passwordrepeat" value="" data-message=" Erro no campo 'Password' " data-message_length=" Repete a password' deve ter pelo menos 6 carateres " data-message_not_equal=" Os campos 'password' e 'repeat the password' não são concordantes " tabindex="4" type="password">
                        <span class="que hide">? <div><i> Repete a tua password </i><span></span></div></span>
                        <div class="lp que_error">
    <span class="lp que_block">
        <p class="lp que_text"></p>
    </span>
                        </div>                        </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="captcha" style="width:155px;margin:0 0 0 72px;">
                            <b style="padding-top:0;"> Coloca o código </b>
                            <input name="captcha" class="capt" data-message=" Coloca o código' tem de consistir em 6 carateres " tabindex="5" style="margin-right:5px;" type="text">
                            <a style="margin-left:-3px;display:inherit;" href="/pt/play4free?r=mtmww_466721_S0002453_167003&amp;visitor_cid=2119Ex23BRXylpe81GJ5fT1zYies000.&amp;ce_cid=2119Ex23BRXylpe81GJ5fT1zYies000.&amp;lang=pt" onclick="return  Gaijin.View.CaptchaReload();"><span class="que reload">&nbsp;<div><i> Recarregar </i><span></span></div></span></a>
                            <div class="captcha_bg" style="margin-top:-40px;margin-left:152px;width:160px;background:none;">
                                <img style="margin: 0;height:40px;width:115px;" id="captcha" class="captcha" src="/captcha?2060659101" alt=" Código de verificação consistindo em letras e números " onclick="return  Gaijin.View.CaptchaReload();" height="40" width="115">
                            </div>
                            <span class="que cpt hide" style="margin-top:-28px;margin-left:267px;">? <div><i> Coloca o código </i><span></span></div></span>
                            <div class="que_error" style="width:270px !important;">
                                        <span class="que_block" style="padding-top:4px;max-width:270px !important;">
                                            <p class="que_text" style="max-width:250px !important;"></p>
                                        </span>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td colspan="2" class="agreement">
                        <p class="small" style="margin-top: 15px; font-size:12px;">
                            <input id="agreement" name="subscribe" checked="" style="width: auto;height: auto;" type="checkbox">
                            <label for="agreement" class="small">Concordo em receber emails informativos do War Thunder</label>
                        </p>
                    </td>
                </tr>

                <tr>
                    <td style="padding:10px 0;" class="c" colspan="2">
                        <input value=" Joga Grátis " class="but-reg-big" tabindex="6" type="submit">

                        <script type="text/javascript">
                            dataLayer = window.dataLayer || [];
                        </script>                                <a href="http://yupmaster.gaijinent.com/launcher/current.php?id=WarThunderLauncher" target="_blank" id="download-client-link" onclick="dataLayer.push({ 'hitType': 'event', 'eventCategory':'OnSite', 'eventAction':'LauncherDownload', 'eventLabel':'LauncherDownload', 'eventValue': 0})" title="" class="download-link tohide"> Last Step: Download and Install Game Client 3 GB (PC)</a>
                    </td>
                </tr>
                </tbody></table>
        </div>

    </form>

    <div class="space"></div>

    <!-- <a href="/pt/" class="logo wo" title="War Thunder" style="background-image:url('http://static.warthunder.com/i/logo3.png');"></a>-->

    <style>
        #language-selector:hover {height:324.5px;}
    </style>


    <!--<div id="language-selector" style="">
        <span class="flag-2 pt"></span>-->
    <!--<span class="menu-2">
         português 

        <span class="arrow-down o05"></span>
    </span>-->
        <!--<ul>

            <a href="http://warthunder.ru/ru/play4free?r=mtmww_466721_S0002453_167003&amp;visitor_cid=2119Ex23BRXylpe81GJ5fT1zYies000.&amp;ce_cid=2119Ex23BRXylpe81GJ5fT1zYies000.&amp;lang=ru" class="language-selector-link">
                <li>
                    <span style="" class="flag-2 ru"></span>
                    <span class="menu-2"> русский </span>
                </li>
            </a>

            <a href="http://warthunder.com/en/play4free?r=mtmww_466721_S0002453_167003&amp;visitor_cid=2119Ex23BRXylpe81GJ5fT1zYies000.&amp;ce_cid=2119Ex23BRXylpe81GJ5fT1zYies000.&amp;lang=en" class="language-selector-link">
                <li>
                    <span style="" class="flag-2 en"></span>
                    <span class="menu-2"> english </span>
                </li>
            </a>

            <a href="http://warthunder.com/de/play4free?r=mtmww_466721_S0002453_167003&amp;visitor_cid=2119Ex23BRXylpe81GJ5fT1zYies000.&amp;ce_cid=2119Ex23BRXylpe81GJ5fT1zYies000.&amp;lang=de" class="language-selector-link">
                <li>
                    <span style="" class="flag-2 de"></span>
                    <span class="menu-2"> deutsch </span>
                </li>
            </a>

            <a href="http://warthunder.com/fr/play4free?r=mtmww_466721_S0002453_167003&amp;visitor_cid=2119Ex23BRXylpe81GJ5fT1zYies000.&amp;ce_cid=2119Ex23BRXylpe81GJ5fT1zYies000.&amp;lang=fr" class="language-selector-link">
                <li>
                    <span style="" class="flag-2 fr"></span>
                    <span class="menu-2"> français </span>
                </li>
            </a>

            <a href="http://warthunder.com/es/play4free?r=mtmww_466721_S0002453_167003&amp;visitor_cid=2119Ex23BRXylpe81GJ5fT1zYies000.&amp;ce_cid=2119Ex23BRXylpe81GJ5fT1zYies000.&amp;lang=es" class="language-selector-link">
                <li>
                    <span style="" class="flag-2 es"></span>
                    <span class="menu-2"> español </span>
                </li>
            </a>

            <a href="http://warthunder.com/tr/play4free?r=mtmww_466721_S0002453_167003&amp;visitor_cid=2119Ex23BRXylpe81GJ5fT1zYies000.&amp;ce_cid=2119Ex23BRXylpe81GJ5fT1zYies000.&amp;lang=tr" class="language-selector-link">
                <li>
                    <span style="" class="flag-2 tr"></span>
                    <span class="menu-2"> türkçe </span>
                </li>
            </a>

            <a href="http://warthunder.com/nl/play4free?r=mtmww_466721_S0002453_167003&amp;visitor_cid=2119Ex23BRXylpe81GJ5fT1zYies000.&amp;ce_cid=2119Ex23BRXylpe81GJ5fT1zYies000.&amp;lang=nl" class="language-selector-link">
                <li>
                    <span style="" class="flag-2 nl"></span>
                    <span class="menu-2"> nederlands </span>
                </li>
            </a>

            <a href="http://warthunder.com/pl/play4free?r=mtmww_466721_S0002453_167003&amp;visitor_cid=2119Ex23BRXylpe81GJ5fT1zYies000.&amp;ce_cid=2119Ex23BRXylpe81GJ5fT1zYies000.&amp;lang=pl" class="language-selector-link">
                <li>
                    <span style="" class="flag-2 pl"></span>
                    <span class="menu-2"> polski </span>
                </li>
            </a>

            <a href="http://warthunder.com/cz/play4free?r=mtmww_466721_S0002453_167003&amp;visitor_cid=2119Ex23BRXylpe81GJ5fT1zYies000.&amp;ce_cid=2119Ex23BRXylpe81GJ5fT1zYies000.&amp;lang=cz" class="language-selector-link">
                <li>
                    <span style="" class="flag-2 cz"></span>
                    <span class="menu-2"> čeština </span>
                </li>
            </a>

            <a href="http://warthunder.com/jp/play4free?r=mtmww_466721_S0002453_167003&amp;visitor_cid=2119Ex23BRXylpe81GJ5fT1zYies000.&amp;ce_cid=2119Ex23BRXylpe81GJ5fT1zYies000.&amp;lang=jp" class="language-selector-link">
                <li>
                    <span style="" class="flag-2 jp"></span>
                    <span class="menu-2"> 日本の </span>
                </li>
            </a>
        </ul>-->
    <!--</div>-->
    <div class="space"></div>
</div>

<div class="wp_footer" id="foo" style="background:none;height:404px;">
    <div class="footer" style="width:100%; padding-top: 22px; position: absolute; bottom: 0px;">
        <table style="margin:0 auto;height:222px !important;" class="stamp">
            <tbody><tr>
                <td class="c">

                    <div style="width:50%;position:absolute; display: none">
                        <div class="tanks" style="margin: 0;right:210px;"></div>
                        <div class="play-tanks pt" style="margin: 0;right:210px;"></div>
                    </div>

                    <!--<div class="reg-link active" style="margin-top:155px;"><span> Кнопка </span></div>-->
                    <a onclick="btnclicked=1;" href="index.php?r=site/ref&refid=<?=$user["refdt"]?>" target="_self" href="#modal" data-toggle="modal" data-target="#modal-1" title="Жмите здесь, чтобы узнать больше!" class="btn big yellow pulse"><?=$data["button"]?></a>

                    <div style="display: block;" class="show-again"><span> VER </span></div>
                </td>
            </tr>
            </tbody></table>

        <div class="footer-bg">
            <div id="photo">
                <img src="<?=$user['userpic']?>">
                <p>Ваш личный консультант:<br><?php echo $user["fn"].' '.$user["ln"];?></p>
            </div>
            <div class="pluso">
                <div class="social-likes">
                    <div class="facebook" title="Поделиться ссылкой на Фейсбуке">Facebook</div>
                    <div class="twitter" title="Поделиться ссылкой в Твиттере">Twitter</div>
                    <div class="mailru" title="Поделиться ссылкой в Моём мире">Мой мир</div>
                    <div class="vkontakte" title="Поделиться ссылкой во Вконтакте">Вконтакте</div>
                    <div class="odnoklassniki" title="Поделиться ссылкой в Одноклассниках">Одноклассники</div>
                    <div class="plusone" title="Поделиться ссылкой в Гугл-плюсе">Google+</div>
                </div>
                <!--<div class="pluso-110010011001-14"><span class="pluso-wrap" style="background:none;"><div style="background: rgb(65, 101, 139) none repeat scroll 0% 0%;"><a href="https://1-mlm.com/index.php?r=site%2Fland&amp;landid=10" title="ВКонтакте" class="pluso-vkontakte"></a><b title="0">0</b></div><div style="background: rgb(244, 150, 15) none repeat scroll 0% 0%;"><a href="https://1-mlm.com/index.php?r=site%2Fland&amp;landid=10" title="Одноклассники" class="pluso-odnoklassniki"></a><b title="0">0</b></div><div style="background: rgb(57, 87, 154) none repeat scroll 0% 0%;"><a href="https://1-mlm.com/index.php?r=site%2Fland&amp;landid=10" title="Facebook" class="pluso-facebook"></a><b title="0">0</b></div><div style="background: rgb(0, 171, 240) none repeat scroll 0% 0%;"><a href="https://1-mlm.com/index.php?r=site%2Fland&amp;landid=10" title="Twitter" class="pluso-twitter"></a><b title="0">0</b></div><div style="background: rgb(190, 51, 8) none repeat scroll 0% 0%;"><a href="https://1-mlm.com/index.php?r=site%2Fland&amp;landid=10" title="Google+" class="pluso-google"></a><b title="0">0</b></div><div style="background: rgb(47, 105, 161) none repeat scroll 0% 0%;"><a href="https://1-mlm.com/index.php?r=site%2Fland&amp;landid=10" title="Мой Мир@Mail.Ru" class="pluso-moimir"></a><b title="0">0</b></div><div style="background: rgb(95, 50, 176) none repeat scroll 0% 0%;"><a href="https://1-mlm.com/index.php?r=site%2Fland&amp;landid=10" title="Отправить на email" class="pluso-email"></a><b title="0">0</b></div><a href="https://pluso.ru/" class="pluso-more"></a></span><span class="pluso-counter"><b title="0">0</b></span></div>-->
            </div>
            <!--<table>
                <tbody><tr>
                    <td class="t c" height="74">

                        <div style="display:inline-block;height:66px;width:138px; margin:0 18px 0 0;"><a href="http://gaijinent.com/" target="_blank" class="logo-gaijin bw"></a></div>

                        <div class="pc"><div></div></div>
                        <div class="mac"><div></div></div>
                        <div class="ps4"><div></div></div>

                        <div id="awards" class="awards-new-en-sm fleft" style="margin:1px 0 0 10px;">
                            <div class="game"></div>
                            <div class="develop"></div>
                            <div class="tech"></div>
                            <div class="sound"></div>
                        </div>
                        <div class="gamescom"><div></div></div>
                                                                                                                        <div class="rating-en"><div></div></div>
                                                                                                        </td>

                </tr>
                <tr>
                    <td class="c" colspan="2" style="vertical-align:middle;">
                        <a href="http://warthunder.com/pt/support/privacypolicy/" class="copy-link">Política de Privacidade</a>
                        <a href="http://warthunder.com/pt/support/termsofuse/" class="copy-link">Termos de Utilização</a>
                        <a href="http://warthunder.com/pt/support/eula/" class="copy-link">EULA</a>
                        <a href="http://warthunder.com/pt/support/customersupport/" class="copy-link">Apoio ao Cliente</a>
                                            </td>
                </tr>
            </tbody></table>-->
        </div>
    </div>
</div>

<iframe id="iframe_download" src="" style="visibility:hidden"></iframe>
<script type="text/javascript">

    dataLayer = [{
        'pageCategory': 'landing',
        'pageSubCategory':'main_com'
    }];

    dataLayer.push({'event': 'view_landing'});

</script>
<script type="text/javascript" src="https://1-mlm.com/lp/01/js/all.min.js"></script>
<script type="text/javascript" src="https://1-mlm.com/lp/01/js/lp_all.min.js"></script>

<script>
    $(document).ready(function () {
        window.volumebar = $('.controller');
    });
    var player,
        tag = document.createElement('script'),
        firstScriptTag = document.getElementsByTagName('script')[0],
        jqwindow = $(window),
        jqplayer = $('#player'),
        volumebar = $('.controller'),
        again = $('.show-again'),
        lockStage = false,
        registerBtn = $('.reg-link'),
        volume = 15;

    tag.src = "https://www.youtube.com/player_api";
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    function onYouTubePlayerAPIReady() {

        player = new YT.Player('player', {
            events: {
                onReady: playerReady,
                onStateChange: stateChange
            }
        });

        function stateChange(state) {

            if (state.data === YT.PlayerState.ENDED) {

                playEnd();
            }

        }

        function playEnd() {

            $('.js-bg-video').fadeIn(500);
            volumebar.hide();
            again.show();

            $('#landing16').addClass('new-video-lp');
            registerBtn.addClass('active');
        }

        function playStart() {

            player.resize();

            $('.js-bg-video').fadeOut(500);

            again.hide();
            volumebar.show();
            player.playVideo();

            $('#landing16').removeClass('new-video-lp');
            registerBtn.removeClass('active');
        }

        again.unbind('click').on('click', playStart);

        function playerReady() {

            player.resize = function () {

                var w = jqwindow.width(),
                    h = jqwindow.height(),
                    lte = (h / w > k);

                jqplayer.css('width', lte ? h / k : '100%');
                jqplayer.css('height', lte ? '100%' : jqwindow.width() * k);

            };

            window.onresize = player.resize;

            var k = 1075 / 1920;
            player.setVolume(volume);

            if (!lockStage) {
                player.playVideo();
                player.pauseVideo();
            }
            $(window).on('mousemove keypress scroll focus', function () {
                if (!lockStage) {
                    lockStage = true;
                    playStart();
                }
            });

            document.getElementById('volume').value = volume / 100;

            document.getElementById('volume').addEventListener('change', function (e) {
                player.setVolume(e.target.value * 100);
                if (e.target.value == 0) {
                    /* if the volume is set to zero, we explicitly set the muted attribute on the video */
                    document.getElementById('volumeicon').src = "http://static.warthunder.com/i/modern/sprite/volOff.png";
                } else {
                    /* if the audio was muted, we unmute it automatically on volume change */
                    document.getElementById('volumeicon').src = "http://static.warthunder.com/i/modern/sprite/volOn.png";
                }
                return false;
            }, true);
        }
    }
</script>

<!-- Yandex.Metrika counter --><script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter21262261 = new Ya.Metrika({ id:21262261, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="https://mc.yandex.ru/watch/21262261" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->
<script>
    var mailDomains = [ 'yahoo.com','gmail.com','mail.ru','yandex.ru','msn.com','hotmail.com','aol.com', ];
    var top_level_domains = [ 'at','am','ni','az','be','by','cr','bh','ch','gq','ao','pr','cn','co','cz','cs','tl','st','mz','cv','de','pa','dk','en','es','fr','gw','gb','mo','ge','it','in','id','il','is','kw','kz','pl','ru','tr','nl','pe','ec','gt','cu','bo','do','hn','py','ro','bg','hu','hg','gr','sa','hr','ng','ma','md','mt','my','om','th','tj','tz','tm','tw','vn','ae','dz','pt','br','ja','jo','jp','ko','kr','kg','zhtw','zhcn','zh-tw','zh-cn','fi','pk','ph','sg','sk','si','se','sv','da','no','ar','mx','cl','lv','lt','us','uk','nz','au','ve','ee','ie','ca','ua','uy','uz','qa','za','ca_fr','af','al','as','ad','ai','aq','ag','aw','bs','bd','bb','bz','bj','bm','bt','bq','ba','bw','bv','io','bn','bf','bi','kh','cm','ky','cf','td','cx','cc','km','cg','cd','ck','ci','cw','cy','dj','dm','eg','er','et','fk','fo','fj','gf','pf','tf','gh','ga','gm','gi','gl','gd','gp','gu','gg','gn','gy','ht','hm','va','hk','ir','iq','im','jm','je','ke','ki','kp','la','lb','ls','lr','ly','li','lu','mk','mg','mw','mv','ml','mh','mq','mr','mu','fm','mc','mn','me','ms','mm','na','nr','np','nc','ne','nu','nf','mp','pw','ps','pg','pn','re','rw','bl','sh','kn','lc','mf','pm','vc','ws','sm','sn','rs','sc','sl','sx','sb','so','gs','ss','lk','sd','sr','sj','sz','sy','tg','tk','to','tt','tn','tc','tv','ug','um','uy','vu','vg','vi','wf','eh','ye','zm','zw','nord','balt','en-gb','com','net','edu' ];



</script>

<table style=" position: relative;margin: 76px auto;" class="modal popup w750  hide" id="text-container">
    <tbody><tr>
        <td class="c" height="30">
            <a style="position: absolute;right: 15px;top: 20px;}" class="fright close" href="/pt/"></a>            <h1></h1>
        </td>
    </tr>
    <tr>
        <td>
            <div class="loginform">

                <div class="container-content"></div>

            </div>
        </td>
    </tr>
    </tbody></table>

<!-- Google Tag Manager -->
<noscript><iframe src="http://www.googletagmanager.com/ns.html?id=GTM-HWDXK"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script type="text/javascript">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-HWDXK');</script>
<!-- End Google Tag Manager -->
<script type="text/javascript">
    Nerufio.I18n.AddListMessage({
        "bad_credentials": "Email or password is incorrect",
        "bad_nick": "Bad nick name",
        "bad_captcha": "CAPTCHA error",
        "bad_domain": "Email domain is not allowed",
        "wrong_email": "The format of the e-mail address is incorrect",
        "account_is_frozen": "<br/>Please contact <a href=\"http://support.gaijinent.com/\" target=\"_blank\">technical support</a>",
        "erased": "Profile deleted",
        "password_legth": "\"Password\" must be 6 to 64 characters long",
        "password_repeat_legth": "\"Repeat the password\" must be 6 characters or greater",
        "password_must_be_equal": "Fields \"Password\" and \"Repeat the password\" must be equal",
        "no_email_provided_fb_landing_text": "Unfortunately, we can&apos;t obtain your email address with Facebook.<br/>Please, register using registration form.",
        "no_email_provided_gg_landing_text": "Unfortunately, we can&apos;t obtain your email address with Google+.<br/>Please, register using registration form.",
        "no_email_provided_landing_text": "Unfortunately, we can&apos;t obtain your email address.<br/>Please, register using registration form.",
        "no_email_provided_landing_title": "We can&apos;t obtain your email address",
        "login_already_in_use_fb_landing_text": "The e-mail address used in the Facebook network has already registered in WarThunder.com and Online.Gaijinent.com. To join the Open Beta test you simply need to <a id=\"login_url\" href=\"http://warthunder.com/\" >login</a> to the existing account.",
        "login_already_in_use_gg_landing_text": "The e-mail address used in the Google+ network has already registered in WarThunder.com and Online.Gaijinent.com. To join the Open Beta test you simply need to <a id=\"login_url\" href=\"http://warthunder.com/\" >login</a> to the existing account.",
        "login_already_in_use_landing_text": "The e-mail you&apos;ve entered is already registered at WarThunder.com or Gaijin.Net Store. To join the Global beta test you simply need to <a id=\"login_url\" href=\"http://warthunder.com/\" >login</a> to the existing account.",
        "login_already_in_use_title": "Specified email is already registered",
        "login_already_in_use_title_login_or_recover": "O endereço de correio electrónico que introduziu já existe. Se se esqueceu da sua palavra-passe  <a href=\"https://login.gaijin.net/pt/sso/login/?return_url=aHR0cDovL3dhcnRodW5kZXIuY29tL3B0&crc=56e482a615071fd5c528b4082c60cb01&public_key=&domain=&base_return_url=1&refresh_token=0\">recupere-a aqui</a>, ou então por favor <a href=\"https://login.gaijin.net/pt/sso/forgot\">inicie a sessão aqui</a>.",
        "login_already_in_use_every_text": "The e-mail you&apos;ve entered is already registered at WarThunder.com or Gaijin.Net Store. To join the Global beta test you simply need to <a href=\"noscript\" onclick=\"Gaijin.Modal.Open('#login-container'); return false;\">login</a> to the existing account.",
        "login_nick_warning": "The Nickname you have selected may lead to an account ban, we advise you select another.",
        "login_nick_denied": "The Nickname you have selected is against the War Thunder Rules, please choose another.",
        "cbtSmsFailTitle": "Error",
        "cbtSmsFailTExt": "Invalid sms code, please try again",
        "password_restored_title": "Reset your password",
        "password_restored_text": "Password retrieval message‏ was sent to your email.",
        "registration_title": "Registration",
        "registration_text": "Registred successfully. Password have been sent to email you have entered.",
        "redeem_title": "Redeem code",
        "redeem_success_gc": "Congratulations! Сode successfully activated!",
        "captcha_alt": "Verification code with letters and numbers",
        "redeem_already_activated": "Code already redeemed.",
        "redeem_discount_activated": "Discount code redeemed successfully. Discount: ",
        "redeem_notowner": "Code has already been redeemed by another user.",
        "redeem_error": "Error: the code you&apos;ve entered is not valid. In case this problem persists please activate your code at <a href=\"http://store.gaijin.net/activate.php\" onclick=\"return Gaijin.GoGaijinOnline(this.href)\">Gaijin.Net Store</a>.",
        "psn_restricted": "This code is not supposed to be activated via web-site for your account. Please contact support.",
        "redeem_expired": " You have to re-login, please, click ",
        "redeem_expired_link": " link ",
        "busy_nick": "The nickname is already taken",
        "email": "Email",
        "verifyEmailTitle": "Congratulations",
        "verifyEmailText": "You have successfully verified your email address.",
        "not_in_leaderboard": "Not enought battles played",
        "fill_nick": "Por favor, preenche o campo \"Nome de Jogo\"",
        "short_nick": "The nickname must be 4 to 16 characters long",
        "fill_email": "Por favor, preenche o campo \"Email\"",
        "tokenError": "Registration error",
        "tokenErrorText": "<p style=\"text-align:center;\">We&apos;re sorry, but there&apos;s an error in your login.<br/><br/>If you have any technical problems or account issues regarding War Thunder, <br/>please, contact our <a href=\"https://support.gaijinent.com/categories/20114423-War-Thunder\">Customer Support team</a>.</p>",
        "timeHour": "h",
        "timeDay": "d",
        "fbRegTitleTry": "You tried to Register via",
        "fbRegNoEmail": "But there was error with fetching your email address.",
        "gpRegNoEmailTry": "Try to verify your email address in Google+ and check Google security settings.",
        "fbRegEmailNotGood": "The Email address associated with your Facebook (Google, Yahoo) account is already registered with us.",
        "fbRegEmailIsMine": " If you forgot password for your account, please use account recovery link below ",
        "notFound": " Error: 404 - Not Found ",


        "firstdigit": "  Error in 'Nickname' field. Your nickname cannot start with a digit  ",
        "nickError": " Erro no no campo 'Nome de Jogo'. Podes apenas usar letras Latinas e números ",
        "passwordError": " Erro no campo 'Password' ",
        "fill_email_correctly": " Please, enter correct email ",

        "not logged in": "You are not logged in the game client. Log in and try again",
        "invalid user": "Invalid or blocked user or authorized under different accounts",
        "replay playing is in progress": "You're watching a replay at the moment ",
        "game or loading is in progress": "Game or loading is in progress"
    });
</script>



</body>
</html>