<!DOCTYPE html>
<html lang="en">
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
    <link href="<?=Yii::getAlias('@web') ?>/tp3/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=Yii::getAlias('@web') ?>/tp3/sticky-footer-navbar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        #youtube {
            background: transparent url("<?=Yii::getAlias('@web') ?>/tp3/macbook650.png") no-repeat scroll center center;
            height: 365px;
            /*background-size:100% auto;*/

        }

        #youtube_small {
            background: transparent url("<?=Yii::getAlias('@web') ?>/tp3/macbook650.png") no-repeat scroll center center;
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
                height: 200px;
                background-size: 330px;
            }

            #ytscr {
                width: 245px;
                margin: 0px auto;
                height: 138px;
            }

            #ytscr iframe {
                margin-top: 25px;
            }
        }

        /*@media (max-width:768px) {
            #youtube {
                background-size:100% auto;
            }
        }*/
    </style>
    <link rel="stylesheet" type="text/css" href="<?=Yii::getAlias('@web') ?>/tp3/soc_net/social-likes_classic.css" />
</head>
<body <?php if ($data["bg"]) echo "style='background-color: ".$data['bg']."'" ?>>
<div class="navbar navbar-default" role="navigation">
    <div class="container">
        <!--<div>
            Г. Волкин
        </div>-->
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
        <!--<div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>-->
        <!--<div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        </div>--><!--/.nav-collapse -->
    </div>
</div>
<div class="container" style="text-align: center;">
    <div>
        <h1 style="line-height: 14px; <?php if ($data["h1c"]) echo "color: ".$data['h1c'].";" ?>"><?=$data["h1"]?></h1>
        <h2 style="line-height: 14px; <?php if ($data["h2c"]) echo "color: ".$data['h2c'].";" ?>"><?=$data["h2"]?></h2>
        <h3 style="line-height: 14px; <?php if ($data["h3c"]) echo "color: ".$data['h3c'].";" ?>"><?=$data["h3"]?></h3>
    </div>
    <div id="youtube">
        <div id="ytscr">
            <iframe id="ytplayer" src="https://www.youtube-nocookie.com/embed/<?=$data["yt1"]?>?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=<?=$data["autoplay"]?>" allowfullscreen="" frameborder="0" style="width: 100%; height: 100%;"></iframe>
        </div>
        <p style="margin-top: 25px;"><a href="index.php?r=site/ref&refid=<?=$user["refdt"]?>" data-toggle="modal" data-target="#modal-1" title="Жмите здесь, чтобы узнать больше!" class="btn big yellow pulse"><?=$data["button"]?></a></p>
    </div>

</div>
<h3 style="text-align: center; font-size: 18px;">самое интересное Вас ждет внутри. Регистрация в 1 клик!</h3>

<div id="footer">
    <div class="container">
        <p class="text-muted"  style="text-align: center; font-size: 12px;">
            © 2015 <a href="#modal" data-toggle="modal" data-target="#modal-1">
                1-mlm.com™</a> | <a href="#modal" data-toggle="modal" data-target="#modal-1">
                Войти в Личный Кабинет</a>
        </p>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?=Yii::getAlias('@web') ?>/tp3/js/bootstrap.min.js"></script>
<script src="<?=Yii::getAlias('@web') ?>/tp3/soc_net/social-likes.min.js"></script>
</body>
</html>
