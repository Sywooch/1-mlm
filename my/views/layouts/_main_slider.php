<?php
$identity = \Yii::$app->getUser()->getIdentity()->profile;
switch($identity["service"])
{
    case "facebook":
        $usr=\app\models\Users::find()->select('id, refdt, vkontakte, level')->where(['facebook'=>$identity["id"]])->one();
        break;
    case "vkontakte":
        $usr=\app\models\Users::find()->select('id, refdt, vkontakte, level')->where(['vkontakte'=>$identity["id"]])->one();
        break;
    case "linkedin_oauth2":
        $usr=\app\models\Users::find()->select('id, refdt, vkontakte, level')->where(['linkedin'=>$identity["id"]])->one();
        break;
    case "google":
        $usr=\app\models\Users::find()->select('id, refdt, vkontakte, level')->where(['google'=>$identity["id"]])->one();
        break;
    case "yandex":
        $usr=\app\models\Users::find()->select('id, refdt, vkontakte, level')->where(['yandex'=>$identity["id"]])->one();
        break;
    case "mailru":
        $usr=\app\models\Users::find()->select('id, refdt, vkontakte, level')->where(['mailru'=>$identity["id"]])->one();
        break;
    case "twitter":
        $usr=\app\models\Users::find()->select('id, refdt, vkontakte, level')->where(['twitter'=>$identity["id"]])->one();
        break;
    case "instagram":
        $usr=\app\models\Users::find()->select('id, refdt, vkontakte, level')->where(['instagram'=>$identity["id"]])->one();
        break;
}

$usrFrinds=json_decode
(
    file_get_contents
    (
        "https://api.vk.com/method/friends.get?user_id=".$usr->vkontakte
    )
);

$usrFrinds=$usrFrinds->response;
$cntVkfrinds=count($usrFrinds);

$cntMemCom=
    \app\models\Users::find()->select('id')
        ->where(['ref' => $usr->refdt])
        ->count();

$cntLp=
    \app\models\Lp::find()->select('id')
        ->where(['uid' => $usr->id])
        ->count();

if( !empty(\Yii::$app->request->get("r")) )
{
    list($mod,$act) = explode("/",\Yii::$app->request->get("r"));
    unset($mod);
}else{$act=null;}
?>

<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">

        <li class="nav-item start <?= ( (""==$act) || ("index"==$act) ) ? 'active open' : null; ?>">
            <a href="index.php?r=site%2Findex" class="nav-link ">
                <i class="icon-home"></i>
                <span class="title">Стартовая страница</span>
                <!--<span class="badge badge-success">home</span>-->
            </a>
        </li>

        <li class="nav-item start <?= ( "company"==$act ) ? 'active open' : null; ?>">
            <a href="index.php?r=site%2Fcompany" class="nav-link">
                <i class="icon-info"></i>
                <span class="title">О Нас</span>
            </a>
        </li>

        <li class="nav-item start <?php echo ( "account"==$act ) ? 'active open' : null;
        echo ( "help"==$act ) ? 'active open' : null;
        echo ( "brand"==$act ) ? 'active open' : null;
        ?>">
            <a href="index.php?r=site%2Faccount" class="nav-link">
                <i class="icon-user"></i>
                <span class="title">Профиль</span>
            </a>
            </li>
        <li class="nav-item start <?= ( "team"==$act ) ? 'active open' : null; ?>">
            <a href="index.php?r=site%2Fteam" class="nav-link nav-toggle">
                <i class="icon-users"></i>
                <span class="title">Команда</span>
                <span class="badge badge-success"><?= $cntMemCom ?></span>
            </a>
        </li>

        <li class="nav-item start <?php
        echo ( "landing"==$act ) ? 'active open' : null;
        echo ( "links"==$act ) ? 'active open' : null;
        echo ( "landingedit"==$act ) ? 'active open' : null;
        ?>">
            <a href="index.php?r=site%2Flanding" class="nav-link">
                <i class="icon-wrench"></i>
                <span class="title">Создание страниц</span>
                <span class="arrow"></span>
            </a>
                <ul class="sub-menu">
                    <li class="nav-item  <?= ( "landing"==$act ) ? 'active open' : null; ?>">
                        <a href="index.php?r=site%2Flanding" class="nav-link nav-toggle">
                            <i class="icon-chemistry"></i>
                            <span class="title">Конструктор</span>
                            <!--<span class="arrow"></span>-->
                        </a>
                    </li>
                    <li class="nav-item  <?= ( "landingedit"==$act ) ? 'active open' : null; ?>">
                        <a href="index.php?r=site%2Flandingedit" class="nav-link nav-toggle">
                            <i class="icon-note"></i>
                            <span class="title">Редактор</span>
                            <!--<span class="arrow"></span>-->
                        </a>
                    </li>
                    <li class="nav-item  <?= ( "links"==$act ) ? 'active open' : null; ?>">
                        <a href="index.php?r=site%2Flinks" class="nav-link nav-toggle">
                            <i class="icon-link"></i>
                            <span class="title">Мои ссылки</span>
                            <span class="badge badge-success"><?= $cntLp ?></span>
                            <!--<span class="arrow"></span>-->
                        </a>
                    </li>
                </ul>
            </li>


            <li class="nav-item start <?= ( "addproject"==$act ) ? 'active open' : null; ?>">
                <a href="index.php?r=links%2Faddproject" class="nav-link">
                    <i class="icon-trophy"></i>
                    <span class="title">Я рекомендую</span>

                </a>
            </li>

            <li class="nav-item start <?php
            echo ( "friendsvk"==$act ) ? 'active open' : null;
            echo ( "friendsfb"==$act ) ? 'active open' : null;
            ?>">
                <a href="#" class="nav-link">
                    <i class="icon-like"></i>
                    <span class="title">Давайте дружить!</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start <?= ( "friendsvk"==$act ) ? 'active open' : null; ?>">
                        <a href="index.php?r=site%2Ffriendsvk" class="nav-link nav-toggle">
                            <i class="icon-cup"></i>
                            <span class="title">Друзья в VK</span>
                            <span class="badge badge-success"><?= $cntVkfrinds; ?></span>
                        </a>
                    </li>
                    <li class="nav-item start <?= ( "friendsfb"==$act ) ? 'active open' : null; ?>">
                        <a href="index.php?r=site%2Ffriendsfb" class="nav-link nav-toggle">
                            <i class="icon-social-facebook"></i>
                            <span class="title">Друзья в FB</span>
                            <span class="badge badge-danger">скоро</span>
                        </a>

                    </li>
                </ul>
            </li>
            <li class="nav-item start <?php
            echo( "mcedit"==$act ) ? 'active open' : null;
            echo( "mcarchive"==$act ) ? 'active open' : null;
            ?>">
                <a href="#" class="nav-link">
                    <i class="icon-camcorder"></i>
                    <span class="title">Мастер Класс</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item <?=( "mcedit"==$act ) ? 'active open' : null; ?>">
                        <a href="index.php?r=mc%2Fmcedit" class="nav-link ">
                            <i class="icon-wrench"></i>
                            <span class="title">Создание МК</span>
                        </a>
                    </li>
                    <li class="nav-item <?=( "mcarchive"==$act ) ? 'active open' : null; ?>">
                        <a href="index.php?r=mc%2Fmcarchive" class="nav-link ">
                            <i class="icon-eye"></i>
                            <span class="title">Архив МК</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item start <?= ( "news"==$act ) ? 'active open' : null; ?>">
            <a href="index.php?r=site%2Fblog" class="nav-link">
                <i class="icon-book-open"></i>
                <span class="title">Наш Блог</span>

            </a>
        </li>

            <li class="nav-item start <?php
            echo ( "blog0"==$act ) ? 'active open' : null;
            echo ( "blog1"==$act ) ? 'active open' : null;
            echo ( "blog2"==$act ) ? 'active open' : null;
            echo ( "blog3"==$act ) ? 'active open' : null;
            ?>">
                <a href="index.php?r=site%2Fblog0" class="nav-link">
                    <i class="icon-star"></i>
                    <span class="title">МЛМ Блог</span>
                    <span class="badge badge-danger">скоро</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  <?= ( "blog0"==$act ) ? 'active open' : null; ?>">
                        <a href="index.php?r=site%2Fblog0" class="nav-link nav-toggle">
                            <i class="icon-present"></i>
                            <span class="title">Сделай Сам</span>
                            <span class="badge badge-success">бесплатно</span>
                        </a>
                    </li>
                    <li class="nav-item  <?= ( "blog1"==$act ) ? 'active open' : null; ?>">
                        <a href="index.php?r=site%2Fblog1" class="nav-link nav-toggle">
                            <i class="icon-note"></i>
                            <span class="title">Сделай Сам</span>
                            <span class="badge badge-danger">Pro</span>
                        </a>
                    </li>
                    <li class="nav-item  <?= ( "blog2"==$act ) ? 'active open' : null; ?>">
                        <a href="index.php?r=site%2Fblog2" class="nav-link nav-toggle">
                            <i class="icon-support"></i>
                            <span class="title">Сделайте Мне блог</span>
                        </a>
                    </li>
                    <li class="nav-item  <?= ( "blog3s"==$act ) ? 'active open' : null; ?>">
                        <a href="index.php?r=site%2Fblog3" class="nav-link nav-toggle">
                            <i class="icon-refresh"></i>
                            <span class="title">Обновите Мой блог</span>
                        </a>
                    </li>
                </ul>
            </li>




            <li class="nav-item start <?php
            echo ( "pricing"==$act ) ? 'active open' : null;
            echo ( "pricing2"==$act ) ? 'active open' : null;
            ?>">
                <a href="index.php?r=site%2Fpricing" class="nav-link">
                    <i class="icon-briefcase"></i>
                    <span class="title">Тарифы</span>
                </a>
            </li>
            <li class="nav-item start">
                <a href="index.php?r=site%2Fcontact" class="nav-link">
                    <i class="icon-call-out"></i>
                    <span class="title">Помощь</span>
                </a>
            </li>
            <li class="heading">
                <h3 class="uppercase">В ближайшее время</h3>
            </li>
            <li class="nav-item start <?= ( "calendar"==$act ) ? 'active open' : null; ?>">
                <a href="index.php?r=site%2Fcalendar" class="nav-link nav-toggle">
                    <i class="icon-calendar"></i>
                    <span class="title">Календарь</span>
                    <span class="badge badge-danger">скоро</span>
                </a>
            </li>

            <li class="nav-item start <?= ( "todo"==$act ) ? 'active open' : null; ?>">
                <a href="index.php?r=site%2Ftodo" class="nav-link nav-toggle">
                    <i class="icon-check"></i>
                    <span class="title">Мои задачи</span>
                    <span class="badge badge-danger">скоро</span>
                </a>
            </li>

            <li class="nav-item start <?= ( "training"==$act ) ? 'active open' : null; ?>">
                <a href="index.php?r=site%2Ftraining" class="nav-link">
                    <i class="icon-folder"></i>
                    <span class="title">Обучение</span>
                    <span class="badge badge-danger">скоро</span>

                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="#" class="nav-link ">
                            <i class="icon-folder"></i>
                            <span class="title">Бесплатное</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="#" class="nav-link ">
                            <i class="icon-folder"></i>
                            <span class="title">Курсы</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="#" class="nav-link ">
                            <i class="icon-folder"></i>
                            <span class="title">Книги</span>
                        </a>
                    </li>
                </ul>
            </li>
 <!--  Меню  Админа  начало --->
            <?php if($usr['level'] == 5): ?>
            <li class="nav-item start <?php
            echo ( "adnew"==$act ) ? 'active open' : null;
            echo ( "adactive"==$act ) ? 'active open' : null;
            ?>">
                <a href="###" class="nav-link">
                    <i class="icon-like"></i>
                    <span class="title">Меню админа </span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start <?= ( "adnew"==$act ) ? 'active open' : null; ?>">
                        <a href="index.php?r=admin%2Fadnew" class="nav-link nav-toggle">
                            <i class="icon-user-follow"></i>
                            <span class="title">Новые</span>


                        </a>
                    </li>
                    <li class="nav-item start <?= ( "active"==$act ) ? 'active open' : null; ?>">
                        <a href="index.php?r=admin%2Fadactive" class="nav-link nav-toggle">
                            <i class="icon-user-following"></i>
                            <span class="title">Активные</span>


                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="###" class="nav-link nav-toggle">
                            <i class="icon-shuffle"></i>
                            <span class="title">Смена наставника</span>
                            <span class="badge badge-danger">s</span>

                        </a>

                    </li>
                </ul>
            </li>
            <?php endif; ?>
<!--  Меню  Админа Конец --->
            <!-----------  Начало Социальные виджеты  ------------>
                  
                   <br>
               <li class="nav-item">
                <!-- VK Widget начало -->
                <div id="vk_groups"></div>
                <script type="text/javascript">
                    VK.Widgets.Group("vk_groups", {mode: 1, width: "235", height: "200", color1: 'FFFFFF', color2: '276798', color3: '5B7FA6'}, 76966334);
                </script>
                <!--  VK Widget конец -->
                   <br>
               </li>
               
               <li class="nav-item">              
                <!-- facebook Widget начало -->
<div class="fb-page" data-href="https://www.facebook.com/1mlmcom/" data-width="235" data-height="70" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/1mlmcom/"><a href="https://www.facebook.com/1mlmcom/">1 mlm ресурс</a></blockquote></div></div>
                <!--  facebook Widget конец -->
                  </li> 
                  
                  <br>
                 <li class="nav-item">              
                                                                                            
                           <center>  <a href="https://twitter.com/1mlmcom" class="twitter-follow-button" data-show-count="false" data-lang="ru" data-size="large">Читать @1mlmcom</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                     </center>
                    </li> 
                  
                     <br>
                  
               <li class="nav-item">
               
               <!-- Yotube Widget начало -->
                   <center><div class="g-ytsubscribe" data-channelid="UC4Q97tIPa3_xn3uUdjybPQw" data-layout="full" data-count="default" data-onytevent="onYtEvent"></div></center>
                <!-- Yotube Widget конец -->
                    </li>
                </ul>
<!-----------  Конец Социальные виджеты  ------------>

<!-----------  Конец меню  ------------>

        <script type="text/javascript" src="//vk.com/js/api/openapi.js?121"></script>
        <!-- VK Widget -->
        <div id="vk_groups"></div>
        <script type="text/javascript">
            VK.Widgets.Group("vk_groups", {mode: 1, width: "235", height: "200", color1: 'FFFFFF', color2: '276798', color3: '5B7FA6'}, 76966334);
        </script>
        <!--  VK -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.5&appId=1657698847844895";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
       <!--  facebook -->
       
       
        <script src="https://apis.google.com/js/platform.js"></script>

<script>
  function onYtEvent(payload) {
    if (payload.eventType == 'subscribe') {
      // Add code to handle subscribe event.
    } else if (payload.eventType == 'unsubscribe') {
      // Add code to handle unsubscribe event.
    }
    if (window.console) { // for debugging only
      window.console.log('YT event: ', payload);
    }
  }
</script>
    </div>
    <!-- END SIDEBAR -->
</div>
