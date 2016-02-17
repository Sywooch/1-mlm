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

<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- TITLE OF SITE -->
    <title>1-й МЛМ Ресурс</title>

    <meta name="description" content="1-й МЛМ Ресурс" />
    <meta name="keywords" content="Автоматизация, млм, mlm, html landing page, one page, landing page" />
    <meta name="author" content="Автоматизация млм">

    <meta property="og:title"       content="1-й МЛМ Ресурс"/>
    <meta property="og:description" content="Автоматизация МЛМ Рекрутинга на 80%. Сервис для создания списка новых кандидатов и работы с командой" />
    <meta property="og:image"       content="http://1-mlm.com/first/images/vk-post.jpg" />

    <!-- FAVICON  -->
    <!-- Place your favicon.ico in the images directory -->
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/img/favicon.ico" type="image/x-icon">
    
    <!-- =========================
       STYLESHEETS 
    ============================== -->
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="first/css/plugins/bootstrap.min.css">

    <!-- FONT ICONS -->
    <link rel="stylesheet" href="first/css/icons/iconfont.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
     
    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    
    <!-- PLUGINS STYLESHEET -->
    <link rel="stylesheet" href="first/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="first/css/plugins/owl.carousel.css">
    <link rel="stylesheet" href="first/css/plugins/loaders.css">
    <link rel="stylesheet" href="first/css/plugins/animate.css">
    <link rel="stylesheet" href="first/css/plugins/pickadate-default.css">
    <link rel="stylesheet" href="first/css/plugins/pickadate-default.date.css">
    
    <!-- CUSTOM STYLESHEET -->
    <link rel="stylesheet" href="first/css/style.css">

    <!-- RESPONSIVE FIXES -->
    <link rel="stylesheet" href="first/css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
       <link rel="stylesheet" type="text/css" href="<?=Yii::getAlias('@web') ?>/tp1/soc_net/social-likes_classic.css" />
     
     
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

    </style>
    <style>
        /* Roll Down */

        .roll-down {
            position: relative;
            height: 65px;
            margin-top: 20px;
            width: 40px;
            display: inline-block;
            border: 3px solid #fff;
            -webkit-border-radius: 22px;
            -moz-border-radius: 22px;
            border-radius: 22px;
            content: ' ';
        }

        .roll-down:after {
            position: absolute;
            top: 15px;
            left: 50%;
            width: 6px;
            height: 6px;
            margin-left: -3px;
            display: block;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            content: ' ';
            background: #fff;
            -webkit-animation-fill-mode:both;
            animation-fill-mode:both;
            -webkit-animation-duration:2s;
            animation-duration:2s;
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            -webkit-animation-name: scrolling;
            animation-name: scrolling;
        }

        @-webkit-keyframes scrolling {
            0% {
                -webkit-transform: none;
                transform: none;
            }
            50% {
                -webkit-transform: translate3d(0, 400%, 0);
                transform: translate3d(0, 400%, 0);
            }
            100% {
                -webkit-transform: none;
                transform: none;
            }
        }

        @keyframes scrolling {
            0% {
                -webkit-transform: none;
                transform: none;
            }
            50% {
                -webkit-transform: translate3d(0, 400%, 0);
                transform: translate3d(0, 400%, 0);
            }
            100% {
                -webkit-transform: none;
                transform: none;
            }
        }

        }


    </style>

</head>

<body data-spy="scroll" data-target="#main-navbar">

    <!-- Preloader -->
    <div class="loader bg-blue">
        <div class="loader-inner ball-scale-ripple-multiple vh-center">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    


    <div class="main-container" id="page">

        <!-- =========================
            HEADER 
        ============================== -->
        <header id="nav2-3">
            
            <nav class="navbar navbar-fixed-top bg-transparent cta-header" id="main-navbar">
                
                <div class="container">
                    <!-- Menu Button for Mobile Devices -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="sr-only">меню</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        
                        <!-- Image Logo -->
                        <!-- note:
                            recommended sizes
                                width: 150px;
                                height: 35px;
                        -->
                        <!-- Image Logo For Background Transparent -->
                        <a href="#" class="navbar-brand logo-black smooth-scroll"><img src="../img/logo.png" alt="logo" width="40" height="40" /></a>
                        <a href="#" class="navbar-brand logo-white smooth-scroll"><img src="../img/logo.png" alt="logo" width="50" height="50" /></a>
                    </div><!-- /End Navbar Header -->

                    <div class="collapse navbar-collapse" id="navbar-collapse">
                            <!-- меню 1-й млм ресурс начало -->
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#servis" class="smooth-scroll">О сервисе </a></li>
                            <li><a href="#testimonials" class="smooth-scroll">Отзывы</a></li>
                            <li><a href="#pricing" class="smooth-scroll">Тарифы</a></li>
                            <li><a href="http://1-mlm.com/777-28020677.html" target="_blank">млм Блог</a></li>
                            <!-- меню 1-й млм ресурс конец -->

                            <li><a href="http://1-mlm.com/login.html" class="btn-nav btn-grey btn-login" target="_blank">Вход</a></li>
                            <li><a href="http://1-mlm.com/login.html" class="btn-nav btn-blue btn-green smooth-scroll" target="_blank">Регистрация</a></li>
                        </ul><!-- /End Menu Links -->
                    </div><!-- /End Navbar Collapse -->

                </div><!-- /End Container -->
            </nav><!-- /End Navbar -->
        </header>
        <!-- /End Header -->


        <!-- =========================
            HERO SECTION
        ============================== -->
        <section id="hero8" class="hero hero-countdown bg-img" style="background-image:url('first/images/polygonal.png');">
            <!-- <div class="overlay"></div> -->
            <div class="container">
                <!-- Hero Conten -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <big><h1 class="text-white" style="text-shadow:1px 0px 4px #333;">Автоматизация МЛМ <br> Рекрутинга  на 80%</h1></big>
                        <p class="lead text-white m-b-0 f-w-900" style="text-shadow:1px 0px 4px #333;">инструмент  для создания списка новых кандидатов и работы с командой</p>
                    </div>
                </div>
                <!-- Play Popup Button -->
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-md-offset-3 text-center">
                        <div class="big-popup p-y-md">
                            <a class="mp-iframe" href="https://www.youtube.com/watch?v=aBttZ3f28tQ"><i class="fa fa-play-circle"></i></a>
                        </div>
                    </div>
                </div>
                <center><span class="roll-down"></span></center>
                <!-- Subscription Form -->

            </div><!-- /End Container -->
        </section>
        <!-- /End Hero Section -->



        <!-- =========================
          Создать аккаунт Бесплатно!
         ============================== -->
        <section id="cta2" class="p-y cta bg-edit bg-blue">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center single-line">
                        <p class="lead text-white m-r-md f-w-500">Приступить к использованию бесплатно</p>
                        <a href="http://1-mlm.com/login.html" class="btn btn-ghost btn-md smooth-scroll" target="_blank">Создать аккаунт<i class="fa fa-arrow-right m-l"></i></a>
                    </div>
                </div>
            </div>
        </section>



        <!-- =========================
           FEATURES-TAB SECTION
        ============================== -->
        <section id="servis" class="p-y-lg">

            <div class="container">
                <div class="row features-tab m-y">



                    <!--Tab Item -->
                    <div class="tab-title current">
                        <p class="f-w-600 m-b-0">Идея 1-го МЛМ Ресурса<i class="fa fa-caret-right i-right"></i></p>
                    </div>
                    <div class="tab-content">
                        <div class="row text-center">
                            <div class="col-md-12">
                                <h4>Идея 1-го МЛМ Ресурса</h4>
                                <p class="p-tab m-b-md">Предоставить Вам профессиональную маркетинговую систему для масштабного развития и автоматизации сетевого и партнёрского бизнеса.</p>
                            </div>
                        </div>

                        <div class="row c2">
                            <div class="col-md-6">
                                <div class="features-block">
                                    <div class="col-sm-12 icon-left m-b-md clearfix">
                                        <i class="icon-notebook2"></i>
                                        <h5 class="m-t f-w-500">Список Контактов</h5>
                                        <p>Расширяйте список холодных контактов через интернет профессионально.</p>
                                    </div>
                                    <div class="col-sm-12 icon-left clearfix">
                                        <i class="icon-diamond"></i>
                                        <h5 class="m-t f-w-900">100% Дупликация</h5>
                                        <p>Ваши партнеры получают уже готовую систему однажды настроенную Вами.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="features-block">
                                    <div class="col-sm-12 icon-left m-b-md clearfix">
                                        <i class="icon-rocket"></i>
                                        <h5 class="m-t f-w-900">LP Генератор</h5>
                                        <p>Страницы захвата (LendingPage) это надежный инструмент для рекрутинга.</p>
                                    </div>
                                    <div class="col-sm-12 icon-left clearfix">
                                        <i class="icon-cash"></i>
                                        <h5 class="m-t f-w-900">Партнерка</h5>
                                        <p>Мы ценим наших пользователей - 50% за лично приглашенных партнеров.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /End Tab Content -->

                    <!--Tab Item -->
                    <div class="tab-title">
                        <p class="f-w-600 m-b-0">Как работает система? <i class="fa fa-caret-right i-right"></i></p>
                    </div>
                    <div class="tab-content content-align-md">
                        <div class="row text-center">
                            <div class="col-md-12">
                                <h4>Как работает система?</h4><br>
                                <p class="p-tab m-b-md">Автоматизация Вашего бизнеса благодаря системе происходит в 2 этапа:</p>
                            </div>
                        </div>

                        <div class="row text-left">
                            <div class="col-md-12">
                                <div class="features-block">
                                    <div class="col-sm-12 icon-left m-b-md clearfix">
                                        <i class="icon-tools"></i>

                                        <h5 class="m-t f-w-300" style="padding-top: 10px;">Настройка кабинета под свой проект</h5>
                                        <p></p>
                                    </div>

                                    <div class="col-sm-12 icon-left m-b-md clearfix">
                                    <i class="icon-config"></i>

                                    <h5 class="m-t f-w-300" style="padding-top: 10px;">Создание страницы</h5>
                                    <p></p>
                                </div>

                                    </div>

                                <p> Единожды правильно настроенная система способна освободить до 80% Вашего времени.</p>
                                <p> Которое лучше использовать на работу с командой, увеличивая темпы роста Вашей структуры! </p></p>

                                </ul>
                                </p>
                            </div>
                        </div>
                    </div><!-- /End Tab Content -->

                    <!--Tab Item -->
                    <div class="tab-title">
                        <p class="f-w-600 m-b-0">Кому подходит?<i class="fa fa-caret-right i-right"></i></p>
                    </div>
                    <div class="tab-content">
                        <div class="row text-center">
                            <div class="col-md-12">
                                <h4>Кто может использовать наш сервис?</h4>
                                <p class="p-tab m-b-md">Благодаря множеству тонких настроек системы под Ваши нужды, наш сервис могут использовать:</p>
                            </div>
                        </div>

                        <div class="row c2">
                            <div class="col-md-6">
                                <div class="features-block">
                                    <div class="col-sm-12 icon-left m-b-md clearfix">
                                        <i class="icon-angle-right-circle"></i>

                                        <h5 class="m-t f-w-300" style="padding-top: 10px;">МЛМ Предприниматели</h5>
                                        <p></p>
                                    </div>
                                    <div class="col-sm-12 icon-left clearfix">
                                        <i class="icon-angle-right-circle"></i>

                                        <h5 class="m-t f-w-300" style="padding-top: 10px;">Инфо Бизнесмены</h5>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="features-block">
                                    <div class="col-sm-12 icon-left m-b-md clearfix">
                                        <i class="icon-angle-right-circle"></i>

                                        <h5 class="m-t f-w-300" style="padding-top: 10px;">Предприниматели</h5>
                                        <p></p>
                                    </div>
                                    <div class="col-sm-12 icon-left clearfix">
                                        <i class="icon-angle-right-circle"></i>

                                        <h5 class="m-t f-w-300" style="padding-top: 10px;">Дистрибьюторы млм</h5>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <h4>Внимание!</h4>
                        <div class="col-md-12">
                            <div class="features-block">
                                <div class="col-sm-12 icon-left m-b-md clearfix">
                                    <i class="icon-global2"></i>

                                    <h5 class="m-t f-w-300" style="padding-top: 10px;">НЕТ аналогов в рунете</h5>

                                </div>

                            </div>
                        </div>


                    </div><!-- /End Tab Content -->

                    <!--Tab Item -->
                    <div class="tab-title">
                        <p class="f-w-600 m-b-0">Кому НЕ подходит? <i class="fa fa-caret-right i-right"></i></p>
                    </div>
                    <div class="tab-content">
                        <div class="row text-center">
                            <div class="col-md-12">
                                <h4>Существует миф о автоматизации млм бизнеса.</h4>
                                <p class="p-tab m-b-md">

                                    В реальности 100% автоматизации - НЕТ!<br>
                                    Вам прийдется принимать активное участие как и раньше, мы можем только упростить ваш труд.
                                    И по тому наш сервис НЕ Подходит:</p>
                            </div>
                        </div>

                        <div class="row c2">
                            <div class="col-md-6">
                                <div class="features-block">
                                    <div class="col-sm-12 icon-left m-b-md clearfix">
                                        <i class="icon-close"></i>

                                        <h5 class="m-t f-w-300" style="padding-top: 10px;">Лентяям</h5>

                                    </div>
                                    <div class="col-sm-12 icon-left clearfix">
                                        <i class="icon-close"></i>

                                        <h5 class="m-t f-w-300" style="padding-top: 10px;">Скептикам</h5>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="features-block">
                                    <div class="col-sm-12 icon-left m-b-md clearfix">
                                        <i class="icon-close"></i>

                                        <h5 class="m-t f-w-300" style="padding-top: 10px;">Писимистам</h5>

                                    </div>
                                    <div class="col-sm-12 icon-left clearfix">
                                        <i class="icon-close"></i>

                                        <h5 class="m-t f-w-300" style="padding-top: 10px;">Негативщикам</h5>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <h4>Всем остальным:</h4>
                        <div class="col-md-12">
                            <div class="features-block">
                                <div class="col-sm-12 icon-left m-b-md clearfix">
                                    <i class="icon-door-lock"></i>

                                    <h5 class="m-t f-w-300" style="padding-top: 10px;">Рекомендуется как Отличный инструмент для рекрутинга</h5>

                                </div>

                            </div>
                        </div>

                    </div><!-- /End Tab Content -->

                </div><!-- /End Features-tab -->
            </div><!-- /End Container -->
        </section>
        <!-- /End Features-Tab Section-->


        <!-- =========================
           Создать аккаунт Бесплатно!
        ============================== -->
        <section id="cta2" class="p-y cta bg-edit bg-blue">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center single-line">
                        <p class="lead text-white m-r-md f-w-500">Приступить к использованию бесплатно</p>
                        <a href="http://1-mlm.com/login.html" class="btn btn-ghost btn-md smooth-scroll" target="_blank">Создать аккаунт<i class="fa fa-arrow-right m-l"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- =========================
             Отзывы о 1-м млм ресурсе
        ============================== -->
        <section id="testimonials" class="p-y-lg bg-edit">

            <div class="container">
                <!-- Section Header -->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="section-header text-center wow fadeIn">
                            <h2>Отзывы наших пользователей </h2>
                            <p class="lead">о системе рекрутинга</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Item -->
                <div class="row testimonials m-b-lg wow slideInUp">
                    <div class="col-md-2 col-md-offset-1 hidden-sm hidden-xs text-right">
                        <figure>
                            <img src="first/images/quote1.png" class="img-responsive m-x-auto"  alt="">
                        </figure>
                    </div>

                    <div class="col-md-9 big-img-left">
                        <div class="col-md-3 col-md-push-8 text-center">
                            <!-- Testimonial Image -->
                            <figure>
                                <img src="s/img/otz-02.png" class="img-circle img-thumbnail m-x-auto" width="130" height="130" alt="">
                            </figure>
                        </div>

                        <!-- Testimonial Quote -->
                        <div class="col-md-8 col-md-pull-3">
                            <blockquote>
                                <p class="m-b p-opacity f-w-300">"За первую неделю моя команда увеличилась в 2 раза. <br>Считаю что это Отлично! Спасибо за сервис." </p>
                                <div class="cite text-edit">
                                    <span class="cite-info">— Игорь Сальников, Предприниматель<br>
                                    www.igorsalnikov.com</span>
                                </div>
                            </blockquote>
                        </div>
                    </div><!-- /End Col-md-8 -->
                </div><!-- /End Row -->

                <!-- Testimonial Item -->
                <div class="row testimonials wow slideInUp">
                    <div class="col-md-12">
                        <div class="col-md-9 big-img-left">
                            <div class="col-md-3 col-md-offset-1 text-center">
                                <!-- Testimonial Image -->
                                <figure>
                                    <img src="s/img/otz-01.png" class="img-circle img-thumbnail m-x-auto" width="130" height="130" alt="">
                                </figure>
                            </div>

                            <!-- Testimonial Quote -->
                            <div class="col-md-8">
                                <blockquote>
                                    <p class="m-b p-opacity f-w-300">"Я просто в Шоке, от этих ребят, они с ума сошли!<br> Отличный сервис и практически на шару... нет слов" </p>
                                    <div class="cite text-edit">
                                        <span class="cite-info">— Александр Новиков, Алмазный огранщик<br>
                                        alexnovikov.com</span>
                                    </div>
                                </blockquote>
                            </div>
                        </div><!-- /End Col-md-9 -->

                        <div class="col-md-2 hidden-sm hidden-xs text-right">
                            <figure>
                                <img src="first/images/quote2.png" class="img-responsive m-x-auto"  alt="">
                            </figure>
                        </div>
                    </div>
                </div><!-- /End Row -->
                <!-- Testimonial Item -->
                <br> <br>
                <div class="row testimonials m-b-lg wow slideInUp">
                    <div class="col-md-2 col-md-offset-1 hidden-sm hidden-xs text-right">
                        <figure>
                            <img src="first/images/quote1.png" class="img-responsive m-x-auto"  alt="">
                        </figure>
                    </div>

                    <div class="col-md-9 big-img-left">
                        <div class="col-md-3 col-md-push-8 text-center">
                            <!-- Testimonial Image -->
                            <figure>
                                <img src="s/img/otz-03.png" class="img-circle img-thumbnail m-x-auto" width="130" height="130" alt="">
                            </figure>
                        </div>

                        <!-- Testimonial Quote -->
                        <div class="col-md-8 col-md-pull-3">
                            <blockquote>
                                <p class="m-b p-opacity f-w-300">"Считаю, что благодаря Вашим отзывам и предложениям. Мы вместе сможем сделать этот сервис лучше" </p>
                                <div class="cite text-edit">
                                    <span class="cite-info">— Vitaliy Kovalenko, CEO<br>
                                    www.vitaliykovalenko.com</span>
                                </div>
                            </blockquote>
                        </div>
                    </div><!-- /End Col-md-8 -->
                </div><!-- /End Row -->

                <!-- Testimonial Item -->

            </div><!-- /End Container -->
        </section>
        <!-- /End  Отзывы о 1-м млм ресурсе -->


        <!-- =========================
          Создать аккаунт Бесплатно!
        ============================== -->
        <section id="cta2" class="p-y cta bg-edit bg-blue">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center single-line">
                        <p class="lead text-white m-r-md f-w-500">Приступить к использованию бесплатно</p>
                        <a href="http://1-mlm.com/login.html" class="btn btn-ghost btn-md smooth-scroll" target="_blank">Создать аккаунт<i class="fa fa-arrow-right m-l"></i></a>
                    </div>
                </div>
            </div>
        </section>





        <!-- =========================
           ТАРИФЫ 1 млм ресурс
        ============================== -->
        <section id="pricing" class="p-y-lg bg-edit">
            <div class="container">
                <!-- Section Header -->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="section-header text-center wow fadeIn">
                            <h2 class="f-w-300">Тарифные планы</h2>
                            <p class="lead"> Позволяют Вам увеличивать количество воронок захвата + дополнительные инструменты</p>
                        </div>
                    </div>
                </div>

                <div class="row pricing-3pf">
                    <div class="col-md-10 col-md-offset-1">
                        <!-- Pricing Tab -->
                        <div class="col-md-3 green">
                            <div class="info bg-edit bg-green text-center text-white">
                                <h4>« Новичок »</h4>
                                <div class="price text-edit">
                                    0<span class="currency"> $</span>

                                </div>
                                <p class="p-opacity m-b-md">навсегда бесплатно</p>
                                <!--<a class="btn btn-ghost smooth-scroll" href="#subscription5-1">Выбрать</a>-->
                            </div>

                        </div>
                        <!-- Pricing Tab -->
                        <div class="col-md-3 dark">
                            <div class="info bg-edit bg-blue text-center text-white">
                                <h4>« Мастер »</h4>
                                <div class="price text-edit">
                                    2<span class="currency"> $</span>

                                </div>
                                <p class="p-opacity m-b-md">в месяц</p>
                                <!--<a class="btn btn-ghost smooth-scroll" href="#subscription5-1">Выбрать</a>-->
                            </div>

                        </div>
                        <!-- Pricing Tab -->
                        <div class="col-md-3 red">
                            <div class="info bg-edit bg-yellow text-center text-white">
                                <h4>« Лидер »</h4>
                                <div class="price text-edit">
                                    10<span class="currency"> $</span>

                                </div>
                                <p class="p-opacity m-b-md">в месяц</p>
                                <!--<a class="btn btn-ghost smooth-scroll" href="#subscription5-1">Выбрать</a>-->
                            </div>


                        </div>
                        <!-- Pricing Tab -->
                        <div class="col-md-3 yellow">
                            <div class="info bg-edit bg-red text-center text-white">
                                <h4>« Профи »</h4>
                                <div class="price text-edit">
                                    25<span class="currency"> $</span>

                                </div>
                                <p class="p-opacity m-b-md">в месяц</p>
                                <!--<a class="btn btn-ghost smooth-scroll" href="#subscription5-1">Выбрать</a>-->
                            </div>

                        </div>
                    </div><!-- /End Col-10 -->
                </div><!-- /End Row -->
            </div><!-- /End Container -->
        </section>
        <!-- /End Pricing Section -->


        <!-- =========================
          Создать аккаунт Бесплатно!
        ============================== -->
        <section id="cta2" class="p-y cta bg-edit bg-blue">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center single-line">
                        <p class="lead text-white m-r-md f-w-500">Приступить к использованию бесплатно</p>
                        <a href="http://1-mlm.com/login.html" class="btn btn-ghost btn-md smooth-scroll" target="_blank">Создать аккаунт<i class="fa fa-arrow-right m-l"></i></a>
                    </div>
                </div>
            </div>
        </section>



       <!-- =========================
             FOOTER
        ============================== -->
        <footer id="footer5-2" class="p-y-md footer f5 bg-img" style="background-image:url('images/polygonal.png');">
            <div class="container">    

                <div class="row">
                    <div class="col-sm-12 text-center">
                        <div class="m-t-md">
                            <p><span style="color: #979897; font-size: 16px;">© 2016 Автоматизация млм рекрутинга. Все для вашего бизнеса.</span>
                            </p>    

                        <p><span style="color: #979897; font-size: 7px;"><a href="http://1-mlm.com/politika.html" target="_blank">политика конфиденциальности</a>&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp; <a href="http://1-mlm.com/otkaz.html" target="_blank">отказ от ответственности</a></span></p>
                        </div>                    </div>
                </div>
                <div class="col-md-4">
                    <!-- Yandex.Metrika informer --><a href="http://metrika.yandex.ru/stat/?id=33980350&amp;from=informer"target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/33980350/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" onclick="try{Ya.Metrika.informer({i:this,id:33980350,lang:'ru'});return false}catch(e){}" /></a><!-- /Yandex.Metrika informer --> <!-- Yandex.Metrika counter --><script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter33980350 = new Ya.Metrika({ id:33980350, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, ecommerce:"dataLayer" }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="https://mc.yandex.ru/watch/33980350" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->
                </div>
            </div><!-- /End Container -->
        </footer>
        <!-- /End Footer Section -->


    </div><!-- /End Main Container -->

        
    <!-- Back to Top Button -->
    <a href="#" class="top" style="background-color:#439FE0;">Вверх</a>


    <!-- =========================
         SCRIPTS 
    ============================== -->
    <script src="first/js/plugins/jquery1.11.2.min.js"></script>
    <script src="first/js/plugins/bootstrap.min.js"></script>
    <script src="first/js/plugins/jquery.easing.1.3.min.js"></script>
    <script src="first/js/plugins/jquery.countTo.js"></script>
    <script src="first/js/plugins/jquery.formchimp.min.js"></script>
    <script src="first/js/plugins/jquery.jCounter-0.1.4.js"></script>
    <script src="first/js/plugins/jquery.magnific-popup.min.js"></script>
    <script src="first/js/plugins/jquery.vide.min.js"></script>
    <script src="first/js/plugins/owl.carousel.min.js"></script>
    <script src="first/js/plugins/spectragram.min.js"></script>
    <script src="first/js/plugins/twitterFetcher_min.js"></script>
    <script src="first/js/plugins/wow.min.js"></script>
    <script src="first/js/plugins/picker.js"></script>
    <script src="first/js/plugins/picker.date.js"></script>
    <!-- Custom Script -->
    <script src="first/js/custom.js"></script>


</body>
</html>