<!DOCTYPE html>
<html lang="ru">

<head>
	<head>
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
    
	<title><?=$data["name"]?></title>
	
	<link href="//1-mlm.com/lp/01/css/modern_style.min.css" rel="stylesheet" type="text/css"  media="screen" charset="utf-8">
    <link rel="stylesheet" type="text/css" href="//1-mlm.com/soc_net/social-likes_classic.css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="//1-mlm.com/soc_net/social-likes.min.js"></script>

	<link href="lp/01/css/photo.css" rel="stylesheet" type="text/css">

	<!-- Bootstrap Core CSS -->
	<link href="tp2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="tp2/vendor/fontawesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
	<link href="tp2/vendor/animateit/animate.min.css" rel="stylesheet">

	<!-- Vendor css -->
	<link href="tp2/vendor/owlcarousel/owl.carousel.css" rel="stylesheet">
	<link href="tp2/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

	<!-- Template base -->
	<link href="tp2/css/theme-base.css" rel="stylesheet">

	<!-- Template elements -->
	<link href="tp2/css/theme-elements.css" rel="stylesheet">	
	
<!-- Responsive classes -->
	<link href="tp2/css/responsive.css" rel="stylesheet">

<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->	


	<!-- Template color -->
	<link href="tp2/css/color-variations/blue.css" rel="stylesheet" type="text/css" media="screen" title="blue">

	<!-- LOAD GOOGLE FONTS -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,800,700,600%7CRaleway:100,300,600,700,800" rel="stylesheet" type="text/css" />

	<!-- CSS CUSTOM STYLE -->
    <link rel="stylesheet" type="text/css" href="tp2/css/custom.css" media="screen" />

    <!--VENDOR SCRIPT-->
    <script src="tp2/vendor/jquery/jquery-1.11.2.min.js"></script>
    <script src="tp2/vendor/plugins-compressed.js"></script>
    
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

<body class="wide">
	

	<!-- WRAPPER -->
	<div class="wrapper">

		<!-- HEADER -->
		<header id="header">
			<div id="header-wrap">
				<div class="container">

					<!--LOGO-->
					<div class="col-md-4">
					<div id="photo">
                <img src="<?=$user['userpic']?>">
                <p>Ваш личный консультант:<br><?php echo $user["fn"].' '.$user["ln"];?></p>
            </div>
					</div>
					<!--END: LOGO-->

				
				</div>
				
			</div>
		</header>
		<!-- END: HEADER -->


		<!-- SECTION IMAGE FULLSCREEN -->
		<section id="slider" class="fullscreen background-overlay youtube-background" data-youtube-url="http://youtu.be/<?=$data["yt1"]?>" data-youtube-autoplay="true" data-youtube-autopause="true" data-videoattributes="version=3&amp;enablejsapi=1&amp;html5=1&amp;volume=60&hd=auto&wmode=opaque&showinfo=0&rel=0;">
			<div class="container-fluid">
				<div class="container-fullscreen">
					<div class="text-middle text-center text-light">
						<button id="youtube-background-controls">
							<i class="fa fa-play fa-4x" style="color: #fff;"></i>
							<i class="fa fa-pause fa-4x"  style="color: #fff;"></i>
						</button>                       
	
	<h1 <?php if ($data["h1c"]) echo "style='color: ".$data['h1c']."'" ?> class="text-lg font-wight-700"><?=$data["h1"]?></h1>
    <h2 <?php if ($data["h2c"]) echo "style='color: ".$data['h2c']."'" ?> class="text-lg font-wight-700"><?=$data["h2"]?></h2>
    <h3 <?php if ($data["h3c"]) echo "style='color: ".$data['h3c']."'" ?> class="text-lg font-wight-700"><?=$data["h3"]?></h3>
    
												<br><br><br>
												
												 <a onclick="btnclicked=1;" href="index.php?r=site/ref&refid=<?=$user["refdt"]?>" target="_self" href="#modal" data-toggle="modal" data-target="#modal-1" title="Жмите здесь, чтобы узнать больше!" class="button button-light rounded"><?=$data["button"]?></a>
					</div>


				</div>
			</div>

		</section>
		<!-- END: SECTION IMAGE FULLSCREEN -->



		<!-- FOOTER -->
		<footer class="background-dark text-grey" id="footer">
			
			<div class="copyright-content">
				<div class="container">
					<div class="row">
						<div class="copyright-text col-md-2"> &copy; 2016
						</div>
						<div class="col-md-10">
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
			</div>
		</footer>
		<!-- END: FOOTER -->

	</div>
	<!-- END: WRAPPER -->

	<!-- GO TOP BUTTON -->
	<a class="gototop gototop-button" href="#"><i class="fa fa-chevron-up"></i></a>
	
	<!-- Theme Base, Components and Settings -->
	<script src="tp2/js/theme-functions.js"></script>

	<!-- Custom js file -->
	<script src="tp2/js/custom.js"></script>



</body>

</html>
