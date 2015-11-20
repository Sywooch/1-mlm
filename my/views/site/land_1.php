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
            <p><a onclick="btnclicked=1;" href="<?=$data["url"]?>" target="_self" title="Жмите здесь, чтобы узнать больше!" class="btn big yellow pulse"><?=$data["button"]?></a></p>

            <h3 style="color: #fff">самое интересное Вас ждет внутри. Регистрация в 1 клик!</h3>
        </div>
        <div id="share">
            <script type="text/javascript">(function() {
                    if (window.pluso)if (typeof window.pluso.start == "function") return;
                    if (window.ifpluso==undefined) { window.ifpluso = 1;
                        var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
                        s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
                        s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
                        var h=d[g]('body')[0];
                        h.appendChild(s);
                    }})();</script>
            <div class="pluso" data-background="none;" data-options="medium,square,line,horizontal,counter,sepcounter=1,theme=14" data-services="vkontakte,odnoklassniki,facebook,twitter,google,moimir,email" data-user="1654282972"></div>
        </div>
    </div>
    <div id="footer">
        <center id="opros">
            <big><b>МЫ ВКОНТАКТЕ</b></big>
            <div id="vk_groups"></div>
            <hr/>
        </center>
        <p id="copyright">&copy; 2015 <a href="http://delston-partners.com">Delston Partners&#8482;</a> | <a href="http://delston-partners.com/login">Войти в Личный Кабинет</a></p>
    </div>

</body>
</html>