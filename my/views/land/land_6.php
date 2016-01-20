<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="ru"> <!--<![endif]-->
<head>

	<!-- Основные страницы потребности
  ================================================== -->
	
	<meta charset="utf-8">
    <title><?=$data["name"]?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="<?=$data["desc"]?>" />
    <meta name="keywords" content="<?=$data["keywords"]?>" />

    <meta property="og:title" content="<?=$data["name"]?>"/>
    <meta property="og:description" content="<?=$data["desc"]?>" />
    <meta property="og:image" content="<?=$data["socpic"]?>" />

    <meta name="robots" content="noindex,nofollow">
    

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
  	<link rel="stylesheet" type="text/css" href="<?=Yii::getAlias('@web') ?>/tp6/stylesheets/menu.css" />
	<link rel="stylesheet" type="text/css" href="<?=Yii::getAlias('@web') ?>/tp6/stylesheets/flat-ui-slider.css" />
	<link rel="stylesheet" type="text/css" href="<?=Yii::getAlias('@web') ?>/tp6/stylesheets/base.css" />
	<link rel="stylesheet" type="text/css" href="<?=Yii::getAlias('@web') ?>/tp6/stylesheets/skeleton.css" />
	<link rel="stylesheet" type="text/css" href="<?=Yii::getAlias('@web') ?>/tp6/stylesheets/landings.css" />
	<link rel="stylesheet" type="text/css" href="<?=Yii::getAlias('@web') ?>/tp6/stylesheets/main.css" />
	<link rel="stylesheet" type="text/css" href="<?=Yii::getAlias('@web') ?>/tp6/stylesheets/pixicon.css" />
	<link rel="stylesheet" type="text/css" href="<?=Yii::getAlias('@web') ?>/tp6/stylesheets/landings_layouts.css" />
	<link rel="stylesheet" type="text/css" href="<?=Yii::getAlias('@web') ?>/tp6/stylesheets/box.css" />
  
   <link href="s/css/modal_dialog.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="<?=Yii::getAlias('@web') ?>/tp1/soc_net/social-likes_classic.css" />

	<!--[if lt IE 9]>
		<script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

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
</head>

<body>



	<!-- Primary Page Layout
	================================================== -->


<!-- Part 1: #Header -->


<div class="pixfort_ecourse_8">

<div class="header_style">
	<div class="container">
	<img src="https://infinii.com/image/logo.png" class="logo_padd_left" alt="" style="max-width:180px; max-height:50px;">
		<div class="twelve columns">
		<br>	
    <h3 style="line-height: 23px; <?php if ($data["h1c"]) echo "color: ".$data['h1c'].";" ?>"><?=$data["h1"]?></h3>
             <!--<h3 style="color: white; font-size: 23px;" >Легальный Заработок в Интернете</h3>-->
             <!--<a href="http://bit.do/bromq" class="yt_button"></a>
             <a href="http://bit.do/bromq" class="twitter_button"></a>
             <a href="http://bit.do/bromq" class="facebook_button"></a>-->

            <div class="htext_style"></div>
		</div>
	</div><!-- container -->
</div>

</div>


<!-- Part 2: #Video & #Contact -->


<div class="pixfort_ecourse_8">

<div class="page_style">
	<div class="container">
		<div class="sixteen columns">
        		<div class="nine columns  alpha">
                    <div class="left_zone">
                        <div class="video_style">
                              <iframe width="480" height="360" src="https://www.youtube.com/embed/yRLqWLpxOp0?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                        </div>
<div class="text_input">
                       <p class="title_st" style="color: white; font-size: 18px;">Электронная Коммерция Теперь Доступна Для Всех!</p>
                       <p class="txt_st" style="color: white; font-size: 14px;"> Компания INFINii разработала специальную программу обучения и платформу,  помогая людям освоить навыки торговли на таких площадках, как Amazon, eBay и др.</p>
</div>
                    </div>
                </div>
                <div class="seven columns  omega">
                    <div class="text_input">
          				<div class="headtext_style" style="color: rgba(255, 207, 0, 0.99); font-size: 28px;"><?=$data["h2"]?></div>                       
          				<p class="subtext_style" style="color: white; font-size: 20px;"><?=$data["h3"]?></p>         				
          				 <center><p class="txt_st" style="color: white; font-size: 17px;">Как освоить Новую профессию и получать Приличный Доход в ближайшее время</p></center>
          				
          				<div class="contact_st">
          					<form id="contact_form" pix-confirm="hidden_pix_8">
                                           
                      
                        <span class="editContent"><!-- href="index.php?r=site/ref&refid=<?=$user["refdt"]?>" -->
                        <a href="#"
                        data-toggle="modal"
                        data-target="#modal-1" 
                        title="Жмите здесь, чтобы узнать больше!"
			class="btn big yellow pulse"
                        >Регистрация</a>
                        </span>
                    </form>
          	</div>
<br>
                        <center><p class="txt_st" style="color: white; font-size: 16px;">После того, как Вы Зарегистрируетесь, Свяжитесь с Своим консультантом в Skype.</p></center>
<center><p class="txt_st" style="color: #FFCF00; font-size: 16px;"> 
Все партнёры нашей команды получают такой же сайт для построения команды.</p></center>
            		</div>
                </div>
        </div>
	</div><!-- container -->
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
                    
                    <div data-ulogin-inited="1446737975834" class="col-md-12 wl" id="uLogin1" data-ulogin="lang=ru;display=buttons;fields=first_name,last_name,email,phone,photo,photo_big,city,country;providers=facebook,twitter,vkontakte,odnoklassniki,mailru,googleplus;optional=phone;hidden=;redirect_uri=;receiver=http%3A%2F%2Fjoinetwork.ru%2Fxd_custom.html;callback=LoginAutorizer">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="socbtn facebook-btn">
                                <a style="" href="javascript:void(0)"
                                   onclick="window.location.href='<?=Yii::getAlias('@web') ?>/index.php?r=site%2Flogin&amp;service=facebook&refid=<?=$user["refdt"]?>'"
                                   class="socbtnn" data-uloginbutton="facebook">
                                    <span><img src="s/img/facebook-btn.png" width="25" ></span>Facebook</a>
                            </div>
                            <!--<div class="socbtn googleplus-btn">
                                <a style="" href="javascript:void(0)"
                                   onclick="window.location.href='<?=Yii::getAlias('@web') ?>/index.php?r=site%2Flogin&amp;service=google&refid=<?=$user["refdt"]?>'"
                                   class="socbtn" data-uloginbutton="googleplus">
                                    <span><img src="s/img/googleplus-btn.png" width="25" ></span>Google+ - скоро</a>
                            </div>-->
                            <div class="socbtn vkontakte-btn">
                                <a style="" href="javascript:void(0)"
                                   onclick="window.location.href='<?=Yii::getAlias('@web') ?>/index.php?r=site%2Flogin&amp;service=vkontakte&refid=<?=$user["refdt"]?>'"
                                   class="socbtn" data-uloginbutton="vkontakte">
                                    <span><img src="s/img/vkontakte-btn.png" width="25" ></span>Vkontakte</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            
                            <div class="socbtn odnoklassniki-btn">
                                <a href="javascript:void(0)"
                                   onclick="window.location.href='<?=Yii::getAlias('@web') ?>/index.php?r=site%2Flogin&amp;service=linkedin_oauth2&refid=<?=$user["refdt"]?>'"
                                   class="socbtn" data-uloginbutton="odnoklassniki">
                                    <span><img src="s/img/linkedin-icon.png" width="25" ></span>Linkedin</a>
                            </div>
                            <!--<div class="socbtn yandex-btn">
                                <a href="javascript:void(0)"
                                   onclick="window.location.href='<?=Yii::getAlias('@web') ?>/index.php?r=site%2Flogin&amp;service=yandex&refid=<?=$user["refdt"]?>'"
                                   class="socbtn" data-uloginbutton="odnoklassniki">
                                    <span><img src="s/img/yandex-btn.png" width="25" ></span>Yandex - скоро</a>
                            </div>-->
                            <div class="socbtn mailru-btn">
                                <a href="javascript:void(0)"
                                   onclick="window.location.href='<?=Yii::getAlias('@web') ?>/index.php?r=site%2Flogin&amp;service=mailru&refid=<?=$user["refdt"]?>'"
                                   class="socbtn" data-uloginbutton="odnoklassniki">
                                    <span><img src="s/img/mailru-btn.png" width="25" ></span>Mailru</a>
                            </div>
                            
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

<!-- Part 7: #Footer -->

        <div class="social-likes">
            <div class="facebook" title="Поделиться ссылкой на Фейсбуке">Facebook</div>
            <div class="twitter" title="Поделиться ссылкой в Твиттере">Twitter</div>
            <div class="mailru" title="Поделиться ссылкой в Моём мире">Мой мир</div>
            <div class="vkontakte" title="Поделиться ссылкой во Вконтакте">Вконтакте</div>
            <div class="odnoklassniki" title="Поделиться ссылкой в Одноклассниках">Одноклассники</div>
            <div class="plusone" title="Поделиться ссылкой в Гугл-плюсе">Google+</div>
        </div>

<!-- JavaScript
================================================== -->
<script src="//code.jquery.com/jquery-1.9.1.min.js"></script> <!-- jQuery -->
<script src="/tp6/js-files/jquery.easing.1.3.js" type="text/javascript"></script> <!-- jQuery easing -->
<script type='text/javascript' 
			src='/tp6/js-files/jquery.common.min.js'></script>
<script src="/tp6/js-files/custom.js" type="text/javascript"></script>
<script src="/tp6/assets/js/smoothscroll.min.js" type="text/javascript"></script>
<script src="/tp6/assets/js/appear.min.js" type="text/javascript"></script>
<script src="<?=Yii::getAlias('@web') ?>/tp1/soc_net/social-likes.min.js"></script>

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>