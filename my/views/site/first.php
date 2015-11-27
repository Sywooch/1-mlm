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
?><!DOCTYPE html>
<html>
<head>
    <!--<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,300,700" rel="stylesheet">-->
    <link href="//fonts.googleapis.com/css?family=Roboto:100,300&subset=cyrillic' rel='stylesheet' type='text/css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>1-й МЛМ Ресурс</title>
    <meta name="description" content="1-й МЛМ Ресурс">

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/img/favicon.ico" type="image/x-icon">
    <!--<link href="s/css/bootstrap.min.css" rel="stylesheet">-->
    <link href="s/css/font-awesome.min.css" rel="stylesheet">
    <link href="s/css/magnific-popup.css" rel="stylesheet">
    <link href="s/css/main.css" rel="stylesheet">
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
    <link rel="stylesheet" type="text/css" href="<?=Yii::getAlias('@web') ?>/soc_net/social-likes_classic.css" />
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
</head>
<body>
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
                               onclick="window.location.href='index.php?r=site%2Flogin&amp;service=facebook'"
                               class="socbtn facebook-btn" data-uloginbutton="facebook">
                                <span><img src="s/img/facebook-btn.png" width="25" ></span>Facebook</a>
                            <a style="" href="javascript:void(0)"
                               onclick="window.location.href='index.php?r=site%2Flogin&amp;service=google'"
                               class="socbtn googleplus-btn" data-uloginbutton="googleplus">
                                <span><img src="s/img/googleplus-btn.png" width="25" ></span>Google+ - скоро</a>
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
                               onclick="window.location.href='index.php?r=site%2Flogin&amp;service=yandex'"
                               class="socbtn yandex-btn" data-uloginbutton="odnoklassniki">
                                <span><img src="s/img/yandex-btn.png" width="25" ></span>Yandex - скоро</a>
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
<!-- END LOGIN BOX *****************************************************************-->
<!--hero section-->

<header class="hero-section">

    <!--navigation-->

    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href=""><img class="logo-nav" alt="1-й МЛМ Ресурс" src="../img/logo.png" width="50" height="50"><img class="logo-head" alt="logo" src="../img/logo.png" width="80" height="80"></a> </div>
            <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
                <ul class="nav navbar-nav nav-left">
                    <li><a href="#features">преимущества</a></li>
                    <li><a href="#reviews">отзывы</a></li>
                    <li><a href="#pricing">прайс</a></li>
                    <li><a href="http://blog.1-mlm.com">блог</a></li>
                    <!--<li><a href="#contact">Contact</a></li>-->
                </ul>
                <ul class="nav navbar-nav navbar-right">

                    <li><a href="#modal" data-toggle="modal" data-target="#modal-1"><i class="fa fa-sign-in"></i> вход</a></li>
                    <!--<li><a  class="btn" href="javascript:void(0)"
                           onclick="location.href='#openModal'">регистрация</a></li>-->
                    <li><a class="btn" href="#modal" data-toggle="modal" data-target="#modal-1">регистрация</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!--navigation end-->
    <!--Приветственное сообщение-->
    <section class="container text-center welcome-message">
        <div class="row">
            <div class="col-md-12">
                <!--<h1>1-й млм ресурс</h1>-->
                <h1>1 mlm ресурс</h1>
                <h2>Автоматизация бизнеса на 80% !!!</h2>
                <div class="play-btn"> <a href="https://www.youtube.com/watch?v=HBseUoVjSZo" class="play litebox-hero"><img src="s/img/play-btn.png" alt="play"></a> </div>
                <div class="cta-btn"><a class="btn" href="#modal" data-toggle="modal"
                                        data-target="#modal-1">попробуйте бесплатно</a>
                    <br><br>
                    <h2>уже используют &nbsp; <span class="total-number-1"> 0 </span> &nbsp; пользователей</h2>
                </div>
            </div>
        </div>
    </section>

    <!--Приветственное сообщение end-->

</header>

<!--hero section end-->

<!-- 20 last users start -->
<section class="white">
    <div class="row">
        <div class="col-md-2">
            <div class="arrow_box">
                Новые пользователи:
            </div>
        </div>
        <div class="col-md-10">
            <div class="marquee">
                <!--Здесь будет выводиться список пользователей-->
                <?php
                $lastTwentyRegUsers=\app\models\Users::find()->orderBy(['id' => SORT_DESC])->limit(20)->all();

                //print_r($lastTwentyRegUsers);
                foreach($lastTwentyRegUsers as $lt) {
                    echo $this->render('_first_list_users', [
                        'user' => $lt
                    ]);
                }

                ?>

            </div>
        </div>
    </div>
</section>
<!-- 20 last users end -->


<!--MLM Компании on-->

<section class="featured-on section-spacing text-center">
    <div class="container">
        <!--<header class="section-header">
            <h3>дистрибьюторы компаний использующие 1 mlm</h3>
        </header>-->
        <div class="row">
            <div class="col-md-12">
                <ul class="featured-sites">
                    <li><a href="" title="Site Name"><img src="s/img/site-1.png" alt="site" height="50" width="100" ></a> </li>
                    <li><a href="" title="Site Name"><img src="s/img/site-2.png" alt="site" height="50" width="100"></a></li>
                    <li><a href="" title="Site Name"><img src="s/img/site-3.png" alt="site" height="50" width="100"></a></li>
                    <li><a href="" title="Site Name"><img src="s/img/site-1.png" alt="site" height="50" width="100"></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!--MLM Компании on end-->



<!--Features-->

<div class="features section-spacing">
    <div class="container">

        <!--feature 1-->

        <div class="row">
            <div class="col-md-7 col-md-push-5 text-center"> <img src="s/img/feature-1.png" alt="1-й МЛМ Ресурс"> </div>
            <div class="col-md-5 col-md-pull-7">
                <article>
                    <h2>Идея 1 mlm</h2>
                    <p> Все интернет предприниматели  сталкиваются с трудностью -
                        <strong>СОЗДАНИЕ КОММАНДНОЙ РАБОТЫ</strong></p> <p>Для этого необходимо использовать целый
                        ряд ресурсов (сайтов) которые нужно еще и  правильно синхронизировать между собой. </p>
                    <p>Это сложная задача, которая отнимает много времени и усилий.
                        В млм ресурсе - все основные инструменты находятся в одном месте, а именно: </p>
                    <ul>
                        <li>Страница захвата (LendingPage)</li>
                        <li>Cписок холодный контактов (кандидаты)</li>
                        <li>Cтатистика выполненых действий</li>
                        <li>Взаимодействие с командой</li>
                        <!--<li>Проведение вебинаров (обучение)</li>-->
                    </ul>

                </article>
            </div>
        </div>

        <!--feature 1 end-->

        <!--feature 2-->
        <div class="row">
            <div class="col-md-7 text-center"> <img src="s/img/feature-2.png" alt="1-й МЛМ Ресурс"> </div>
            <div class="col-md-5">
                <article>
                    <h2>Как работает система???</h2>
                    <p>Aвтоматизация Вашего бизнеса благодаря системе  происходит в три этапа:</p>
                    <ul>
                        <li>Создание страницы</li>
                        <li>Настройка кабинета под свой проект</li>
                        <li>Создание трафика</li>
                    </ul>
                    <br>
                    <p> Единожды правильно настроенная система способна освободить до 80% Вашего времени.</p>
                    <p> Которое лучше использовать на работу с командой, увеличивая темпы роста Вашей структуры! </p>

                </article>
            </div>
        </div>
        <!--feature 2 end-->

        <!--feature 3-->
        <div class="row">
            <div class="col-md-7 col-md-push-5 text-center"> <img src="s/img/feature-3.png" alt="1-й МЛМ Ресурс"> </div>
            <div class="col-md-5 col-md-pull-7">
                <article>
                    <h2>Кому подходит  1 mlm?</h2>
                    <p>Существует миф о автоматизации млм бизнеса.<br>
                        Всем хочется строить бизнес на автмате!<br>
                        В реальности  100% автоматизации - НЕТ!<br>
                        Вам прийдется принимать активное участие как и раньше, мы можем  только упростить ваш труд.<br>
                        И по тому 1 mlm ресурс НЕ Подходит:
                    </p>
                    <ul>
                        <li>Лентяям</li>
                        <li>Скептикам</li>
                        <li>Шаровикам и т.д.</li>
                        <br>
                        <p>Всем остальным<br>  -  Рекомендуется как Отличный инструмент для рекрутинга</p>
                    </ul>
                </article>
            </div>
        </div>
        <!--feature 3 end-->
    </div>
</div>

<!--Features end-->

<!--Video section-->

<section class="video-tour text-center">
    <div class="play-btn"> <a href="https://www.youtube.com/watch?v=HBseUoVjSZo" class="play litebox-tour"><img src="s/img/play-btn-vs.png" alt="play"></a>
        <!--<h2>Video 1 mlm</h2>-->
    </div>

    <!--HTML5 Video-->
    <video autoplay loop muted id="bgvid" poster="s/video/poster.jpg">
        <source src="s/video/vb.mp4" type="video/mp4">
        <source src="s/video/vb.webm" type="video/webm">
    </video>
    <!--HTML5 Video end-->

</section>

<!--Video section end-->

<!-- Преимущества 1 mlm ресурса - начало -->

<section class="benefits section-spacing text-center" id="features">
    <div class="container">
        <header class="section-header">
            <h2>Преимущества 1 mlm ресурса</h2>
        </header>
        <div class="row">
            <div class="col-sm-4"> <img src="s/img/benefits-3.png" alt="benefits of product"><br>
                <h4>Простота во всем</h4>
                <p>Cтруктура сайта, а также навигация,  удобна и интуитивно понятна для пользователей любого возраста и уровня подготовки</p>
            </div>
            <div class="col-sm-4"> <img src="s/img/benefits-2.png" alt="benefits of product">
                <h4>Адаптивный дизайн</h4>
                <p>Это корректное отображение сайта на различных устройствах,  динамически подстраивающийся под размеры окна браузера</p>
            </div>
            <div class="col-sm-4"> <img src="s/img/benefits-1.png" alt="benefits of product" style="margin-bottom: 23px">
                <h4>Чистый код</h4>
                <p>Валидный код страниц способствует тому, что в разных браузерах, а также устройствах, сайт  будет также хорошо отображаться</p>
            </div>
        </div>
    </div>
</section>

<!-- Преимущества 1 mlm ресурса - конец -->

<!--Tour-->

<section class="tour section-spacing text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-8 center-block">
                <h2>Приступить к использованию <a
                        class="btn" href="#modal" data-toggle="modal" data-target="#modal-1"
                        >пройдите регистрацию <i class="fa fa-arrow-right"></i></a></h2>
            </div>
        </div>
    </div>
</section>

<!--Tour end-->

<!--reviews-->

<section class="reviews section-spacing" id="reviews">
    <div class="container">
        <header class="section-header text-center">
            <h2>Отзывы от наших пользователей</h2>
            <h3>Что наши пользователи говорят о сервисе...</h3>
        </header>
        <div class="row">
            <div class="col-sm-4">

                <!--review 1-->

                <figure class="text-center"><img src="s/img/otz-02.png" alt="face" class="img-circle" width="60%" height="60%"> </figure>
                <blockquote>
                    <p>За первую неделю моя команда увеличелась в 2 раза.  Считаю что это Отлично! Спасибо за сервис. </p>
                    <cite style="font-size: 16px;">— Игорь Сальников, Предприниматель</cite> </blockquote>

                <!--review 1 end-->

            </div>
            <div class="col-sm-4">

                <!--review 2-->

                <figure class="text-center"><img src="s/img/otz-01.png" alt="face" class="img-circle" width="60%" height="60%"> </figure>
                <blockquote>
                    <p>Я просто в Шоке, от этих ребят,<br> они с ума сошли! Отличный сервис и практически на шару...  нет слов</p>
                    <cite style="font-size: 16px;">— Александр Новиков, Алмазный огранщик</cite> </blockquote>

                <!--review 2 end-->

            </div>
            <div class="col-sm-4">

                <!--review 3-->

                <figure class="text-center"><img src="s/img/otz-03.png" alt="face" class="img-circle" width="60%" height="60%"> </figure>
                <blockquote>
                    <p> Считаю, что благодаря Вашим отзывам и предложениям. Мы вместе сможем сделать этот сервис лучше </p>
                    <cite style="font-size: 16px;">— Vitaliy Kovalenko, CEO</cite> </blockquote>

                <!--review 3 end-->

            </div>
        </div>
    </div>
</section>

<!--reviews end-->

<!--Pricing-->

<section class="pricing section-spacing text-center" id="pricing">
    <div class="container">
        <header class="section-header">
            <h2>Отличный Сервис по цене чашки кофе )</h2>
            <p style="color: #ffffff; font-size: 16px;">Бесплатная регистрация, для активации не нужна кредитная карта.</p>
        </header>
        <div class="row">
            <div class="col-md-12">

                <!--PRICE TABLE-->
                <div class="plan">
                    <div class="plan-details">
                        <div class="header">
                            <h4>Новичек</h4>
                        </div>
                        <div class="price"> <b><strike>2$</strike></b> <span class="price-amount">0</span><span class="currency">$</span><span class="period"></span> </div>
                        <ul class="plan-features">
                            <li align="left"><i class="fa fa-bullseye"></i> Страница - 1 </li>
                            <li align="left"><i class="fa fa-university"></i> Компания - <span>1</span></li>
                            <li align="left"><i class="fa fa-graduation-cap"></i> Мастер Класс - 0</li>
                            <li align="left"><i class="fa fa-usd "></i> Партнерка - нет</li>
                        </ul>
                    </div>
                    <div class="buy-button">  <!--<a class="btn" href="#">выбрать</a>-->
                        <p>Идеальное решение для новичков</p>
                    </div>
                </div>
                <!--PRICE TABLE END-->

                <!--PRICE TABLE-->
                <div class="plan">
                    <div class="plan-details">
                        <div class="header">
                            <h4>Мастер</h4>
                        </div>
                        <div class="price"> <b><strike>10$</strike></b> <span class="price-amount">2</span><span class="currency">$</span><span class="period">/ месяц</span> </div>
                        <ul class="plan-features">
                            <li align="left"><i class="fa fa-bullseye"></i> Страниц - 3 </li>
                            <li align="left"><i class="fa fa-university"></i> Компания - 3 </li>
                            <li align="left"><i class="fa fa-graduation-cap"></i> Мастер Класс - да </li>
                            <li align="left"><i class="fa fa-usd "></i> Партнерка - 50% </li>
                        </ul>
                    </div>
                    <div class="buy-button"> <!--<a class="btn" href="#">выбрать</a>-->
                        <p>Подойдет настоящим Лидерам</p>
                    </div>
                </div>
                <!--PRICE TABLE END-->
                <!--<br>   <br>-->
                <!--PRICE TABLE-->
                <div class="plan">
                    <div class="plan-details">
                        <div class="header">
                            <h4>Лидер</h4>
                        </div>
                        <div class="price"> <b><strike>25$</strike></b> <span class="price-amount">10</span><span class="currency">$</span><span class="period">/ месяц</span> </div>
                        <ul class="plan-features">
                            <li align="left"><i class="fa fa-bullseye"></i> Страниц - 10 </li>
                            <li align="left"><i class="fa fa-university"></i> Компания - 10 </li>
                            <li align="left"><i class="fa fa-graduation-cap"></i> Мастер Класс - да </li>
                            <li align="left"><i class="fa fa-usd "></i> Партнерка - 50% </li>
                        </ul>
                    </div>
                    <div class="buy-button">  <!--<a class="btn" href="#">выбрать</a>-->
                        <p>Идеальное решение для новичков</p>
                    </div>
                </div>
                <!--PRICE TABLE END-->

                <!--PRICE TABLE-->
                <div class="plan">
                    <div class="plan-details">
                        <div class="header">
                            <h4>Профи</h4>
                        </div>
                        <div class="price"> <b><strike>50$</strike></b> <span class="price-amount">25</span><span class="currency">$</span><span class="period">/ месяц</span> </div>
                        <ul class="plan-features">
                            <li align="left"><i class="fa fa-bullseye"></i> Страниц - 25 </li>
                            <li align="left"><i class="fa fa-university"></i> Компания - 25 </li>
                            <li align="left"><i class="fa fa-graduation-cap"></i> Мастер Класс - да </li>
                            <li align="left"><i class="fa fa-usd "></i> Партнерка - 50% </li>
                        </ul>
                    </div>
                    <div class="buy-button"> <!--<a class="btn" href="#">выбрать</a>-->
                        <p>Подойдет настоящим Лидерам</p>
                    </div>
                </div>
                <!--PRICE TABLE END-->
                <p style="color: #ffffff; font-size: 18px;"> Внимание !!! Все тарифы снижены до 31.12.2015</p>
            </div>
        </div>
    </div>
</section>

<!--Pricing end-->

<!--cta section-->

<section class="cta-section section-spacing text-center">
    <div class="container">
        <header class="section-header">
            <h2>Попробуйте запустить уже сегодня!</h2>
            <h3>И получите <strong>сотни новых партнеров</strong> используя наши удивительные инструменты.</h3>
        </header>
        <div class="row">
            <div class="col-md-12"> <a class="btn" href="#modal" data-toggle="modal" data-target="#modal-1">Начать сейчас!</a>
                <p>Есть вопрос?  &nbsp;<a href="skype:support.mlm?add" title="Позвонить Сейчас? Просто Кликните Здесь!" ><span style="background-color: #ffff00;">   &nbsp;skype: support.mlm &nbsp;</span> </a></p>
            </div>
        </div>
    </div>
</section>

<!--cta section end-->

<!--Team-->

<!--Team end-->


<!--sub-form-->
<section class="sub-form section-spacing text-center">
    <div class="container">
        <header class="section-header">
            <h2>Поделитесь с друзьями и партнерами</h2>
            <div class="social-likes">
                <div class="facebook" title="Поделиться ссылкой на Фейсбуке">Facebook</div>
                <div class="twitter" title="Поделиться ссылкой в Твиттере">Twitter</div>
                <div class="mailru" title="Поделиться ссылкой в Моём мире">Мой мир</div>
                <div class="vkontakte" title="Поделиться ссылкой во Вконтакте">Вконтакте</div>
                <div class="odnoklassniki" title="Поделиться ссылкой в Одноклассниках">Одноклассники</div>
                <div class="plusone" title="Поделиться ссылкой в Гугл-плюсе">Google+</div>
            </div>
            <!--<h2>Подпишитесь на нашу рассылку</h2>
            <h3>Подписаться на ежемесячные обновления продуктов и эксклюзивные предложения </h3>-->
        </header>
        <div class="row">
            <!--<div class="col-md-6 center-block col-sm-11">
                <form id="mc-form">
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Email Address" required id="mc-email">
            <span class="input-group-btn">
            <button type="submit" class="btn btn-default">Подписаться <i class="fa fa-envelope"></i> </button>
            </span> </div>
                    <label for="mc-email" id="mc-notification"></label>
                </form>
            </div>-->
        </div>
    </div>
</section>
<!--sub-form end-->

<!--site-footer-->
<footer class="site-footer section-spacing text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <p class="footer-links"><a href="">...</a></p>
            </div>
            <div class="col-md-4"> <small>&copy; 2015 1 mlm. Все для вашего бизнеса.</small></div>
            <div class="col-md-4">

                <!--social-->

                <ul class="social">
                    <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
                </ul>

                <!--social end-->

            </div>
            <div class="col-md-12">
                <p class="footer-links"><span style="color: #05549e; font-size: 12px;"><a href="index.php?r=site%2Fpolitika">политика конфиденциальности</a> <a href="index.php?r=site%2Fotkaz">отказ от ответственности</a></span></p>

            </div>
        </div>
    </div>
</footer>
<!--site-footer end-->
<link href="s/css/modal_dialog.css" rel="stylesheet">
<script src="s/js/modal_dialog.js"></script>

<!--<script src="s/js/jquery-2.1.4.min.js"></script>
<script src="s/js/bootstrap.min.js"></script> -->
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
</body>
</html>
