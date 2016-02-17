<!DOCTYPE HTML>
<html><head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Language" content="ru">
    <meta name="description" content="<?=$data["desc"]?>">
    <meta name="keywords" content="<?=$data["keywords"]?>">
    <meta name="robots" content="noindex, follow">

    <!--<meta property="fb:app_id" content="356692">-->
    <meta property="og:title" content="<?=$data["name"]?>">
    <meta property="og:description" content="<?=$data["desc"]?>">
    <meta property="og:url" content="//1-mlm.com/">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?=$user["userpic"]?>">
    <link href="lp/01/css/style.css" rel="stylesheet" type="text/css">
    <link href="lp/01/css/photo.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <title><?=$data["name"]?></title>

<link href="//1-mlm.com/lp/01/css/modern_style.min.css" rel="stylesheet" type="text/css"  media="screen" charset="utf-8">
    <link rel="stylesheet" type="text/css" href="//1-mlm.com/soc_net/social-likes_classic.css" />
    
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="//1-mlm.com/soc_net/social-likes.min.js"></script>


    <script async="" src="//s.ytimg.com/yts/jsbin/www-widgetapi-vflpCdzwa/www-widgetapi.js" id="www-widgetapi-script" type="text/javascript"></script>
    <script src="https://www.google-analytics.com/analytics.js" async="" type="text/javascript"></script>
    <script src="https://www.googleadservices.com/pagead/conversion_async.js" async="" type="text/javascript"></script>       <script src="https://www.googletagmanager.com/gtm.js?id=GTM-HWDXK" async=""></script>
    <script src="https://mc.yandex.ru/metrika/watch.js" async="" type="text/javascript"></script>
    <script src="https://www.youtube.com/player_api"></script>
    <script>window.startTime = new Date().getTime();</script>
    
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
    <div class="space"></div>

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

                    <div style="display: block;" class="show-again"><span> ЗАПУСК </span></div>
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
               
            </div>

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
<script type="text/javascript" src="//1-mlm.com/lp/01/js/all.min.js"></script>
<script type="text/javascript" src="//1-mlm.com/lp/01/js/lp_all.min.js"></script>

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





</body>
</html>