<!DOCTYPE html>
<html>
<head>
    <link href="//fonts.googleapis.com/css?family=Roboto:100,300&subset=cyrillic' rel='stylesheet' type='text/css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>1-й МЛМ Ресурс</title>
    <meta name="description" content="1-й МЛМ Ресурс">
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

        .modal-dialog span img {
            position: relative;
            top: 5px;
        }

    </style>

</head>

<body>
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <!--<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>-->
            <h5 class="modal-title" id="myModalLabel" style="text-align: center;"><span>Для просмотра мастер-класс зарегестрируйтесь или автоматизируйтесь через соц. сеть</span></h5>

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
        <!--<div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal"><span>Закрыть</span></button>
        </div>-->
    </div>
</div>
</body>
</html>