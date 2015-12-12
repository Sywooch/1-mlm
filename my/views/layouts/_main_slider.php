<?php
$identity = \Yii::$app->getUser()->getIdentity()->profile;
switch($identity["service"])
{
    case "facebook":
        $usr=\app\models\Users::find()->select('id, refdt')->where(['facebook'=>$identity["id"]])->one();
        break;
    case "vkontakte":
        $usr=\app\models\Users::find()->select('id, refdt')->where(['vkontakte'=>$identity["id"]])->one();
        break;
    case "linkedin_oauth2":
        $usr=\app\models\Users::find()->select('id, refdt')->where(['linkedin'=>$identity["id"]])->one();
        break;
    case "google":
        $usr=\app\models\Users::find()->select('id, refdt')->where(['google'=>$identity["id"]])->one();
        break;
    case "yandex":
        $usr=\app\models\Users::find()->select('id, refdt')->where(['yandex'=>$identity["id"]])->one();
        break;
    case "mailru":
        $usr=\app\models\Users::find()->select('id, refdt')->where(['mailru'=>$identity["id"]])->one();
        break;
}
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

        <li class="nav-item start <?php echo ( "account"==$act ) ? 'active open' : null;
        echo ( "help"==$act ) ? 'active open' : null;
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
                        <!--<ul class="sub-menu">
                            <li class="nav-item ">
                                <a href="index.php?r=site%2Flanding" class="nav-link "> Вариант 1 а </a>
                            </li>
                            <li class="nav-item ">
                                <a href="index.php?r=site%2Flanding" class="nav-link "> Вариант 1 б </a>
                            </li>
                        </ul>-->
                    </li>
                    <li class="nav-item  <?= ( "links"==$act ) ? 'active open' : null; ?>">
                        <a href="index.php?r=site%2Flinks" class="nav-link nav-toggle">
                            <i class="icon-link"></i>
                            <span class="title">Мои ссылки</span>
                            <span class="badge badge-success"><?= $cntLp ?></span>
                            <!--<span class="arrow"></span>-->
                        </a>
                        <!--<ul class="sub-menu">
                            <li class="nav-item ">
                                <a href="page/table_datatables_managed.html" class="nav-link "> Вариант 2 а </a>
                            </li>
                            <li class="nav-item ">
                                <a href="page/table_datatables_buttons.html" class="nav-link "> Вариант 2 б </a>
                            </li>
                        </ul>-->
                    </li>
                </ul>
            </li>




            <li class="nav-item start">
                <a href="###" class="nav-link">
                    <i class="icon-bulb"></i>
                    <span class="title">Мои проекты</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="###" class="nav-link nav-авитьoggle">
                            <i class="icon-puzzle"></i>
                            <span class="title">Добавить</span>

                        </a>

                    </li>
                    <li class="nav-item">
                        <a href="###" class="nav-link nav-toggle">
                            <i class="icon-link"></i>
                            <span class="title">Список проектов</span>
                            <!--<span class="arrow"></span>-->
                        </a>

                    </li>
                </ul>
            </li>

            <li class="nav-item start">
                <a href="###" class="nav-link">
                    <i class="icon-like"></i>
                    <span class="title">Давайте дружить!</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="###" class="nav-link nav-toggle">
                            <i class="icon-cup"></i>
                            <span class="title">Друзья в VK</span>

                        </a>

                    </li>
                    <li class="nav-item">
                        <a href="###" class="nav-link nav-toggle">
                            <i class="icon-social-facebook"></i>
                            <span class="title">Друзья в FB</span>
                            <span class="badge badge-success"><?= $cntLp ?></span>
                            <!--<span class="arrow"></span>-->
                        </a>

                    </li>
                </ul>
            </li>




            <li class="nav-item start <?php
            echo( "edit"==$act ) ? 'active open' : null;
            echo( "mcarchive"==$act ) ? 'active open' : null;
            ?>">
                <a href="#" class="nav-link">
                    <i class="icon-camcorder"></i>
                    <span class="title">Мастер Класс</span>
                    <span class="badge badge-danger">скоро</span>
                </a>
                <ul class="sub-menu">
                    <!--<li class="nav-item <?=( "mc"==$act ) ? 'active open' : null; ?>">
                        <a href="index.php?r=mc%2Fedit" class="nav-link ">
                            <i class="icon-wrench"></i>
                            <span class="title">Создание МК</span>
                        </a>
                    </li>-->
                    <li class="nav-item <?=( "mc"==$act ) ? 'active open' : null; ?>">
                        <a href="#" class="nav-link ">
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

            <li class="nav-item start <?= ( "company"==$act ) ? 'active open' : null; ?>">
                <a href="index.php?r=site%2Fcompany" class="nav-link">
                    <i class="icon-info"></i>
                    <span class="title">О Нас</span>
                </a>
            </li>


            <li class="nav-item start <?php
            echo ( "pricing"==$act ) ? 'active open' : null;
            echo ( "pricing2"==$act ) ? 'active open' : null;
            ?>">
                <a href="index.php?r=site%2Fpricing" class="nav-link">
                    <i class="icon-briefcase"></i>
                    <span class="title">Тарифы</span>

                </a>
                <ul class="sub-menu">
                    <li class="nav-item  <?=( "pricing"==$act ) ? 'active open' : null;?>">
                        <a href="index.php?r=site%2Fpricing" class="nav-link ">
                            <i class="icon-wallet"></i>
                            <span class="title">Выбор тарифа</span>
                        </a>
                    </li>
                    <!--<li class="nav-item  <?=( "pricing2"==$act ) ? 'active open' : null;?>">
                        <a href="index.php?r=site%2Fpricing2" class="nav-link ">
                            <i class="icon-wallet"></i>
                            <span class="title"> Оплата</span>
                        </a>
                    </li>-->

                </ul>
            </li>



            <li class="nav-item start <?= ( "news"==$act ) ? 'active open' : null; ?>">
            <a href="index.php?r=site%2Fblog" class="nav-link">
                <i class="icon-book-open"></i>
                <span class="title">Наш Блог</span>

            </a>
        </li>

            <li class="nav-item start">
                <a href="index.php?r=site%2Fcontact" class="nav-link">
                    <i class="icon-call-end"></i>
                    <span class="title">Контакт</span>
                </a>
            </li>


            <!--<li class="nav-item start <?= ( "news"==$act ) ? 'active open' : null; ?>">
                <a href="index.php?r=site%2Fnews" class="nav-link">
                    <i class="icon-user"></i>
                    <span class="title">Новости</span>

                </a>
            </li>-->

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

            <!--<li class="nav-item start <?= ( "inbox"==$act ) ? 'active open' : null; ?>">
                <a href="index.php?r=site%2Finbox" class="nav-link nav-toggle">
                    <i class="icon-envelope-open"></i>
                    <span class="title">Мои Сообщения</span>
                    <span class="badge badge-danger">скоро</span>
                </a>
            </li>-->


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
               <li class="nav-item">
               <!-- Yotube Widget начало -->
                <div class="g-ytsubscribe" data-channelid="UC4Q97tIPa3_xn3uUdjybPQw" data-layout="full" data-count="default" data-onytevent="onYtEvent"></div>
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
