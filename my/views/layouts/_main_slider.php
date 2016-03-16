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

$act=\Yii::$app->controller->route;
?>

<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">

        <li class="nav-item start <?= ( "site/index"==$act ) ? 'active open' : null; ?>">
            <a href="<?= Yii::$app->urlManager->createUrl(['site/index']) ?>" class="nav-link ">
                <i class="icon-home"></i>
                <span class="title">Главная</span>
                <!--<span class="badge badge-success">home</span>-->
            </a>
        </li>

        <li class="nav-item start <?= ( "site/company"==$act ) ? 'active open' : null; ?>">
            <a href="<?= Yii::$app->urlManager->createUrl(['site/company']) ?>" class="nav-link">
                <i class="icon-info"></i>
                <span class="title">О Нас</span>
            </a>
        </li>

        <li class="nav-item start <?php echo ( "site/account"==$act ) ? 'active open' : null;
        echo ( "help"==$act ) ? 'active open' : null;
        echo ( "brand"==$act ) ? 'active open' : null;
        ?>">
            <a href="<?= Yii::$app->urlManager->createUrl(['site/account']) ?>" class="nav-link">
                <i class="icon-user"></i>
                <span class="title">Профиль</span>
            </a>
            </li>
        <li class="nav-item start <?= ( "site/team"==$act ) ? 'active open' : null; ?>">
            <a href="<?= Yii::$app->urlManager->createUrl(['site/team']) ?>" class="nav-link nav-toggle">
                <i class="icon-users"></i>
                <span class="title">Команда</span>
                <span class="badge badge-success"><?= $cntMemCom ?></span>
            </a>
        </li>

        <li class="nav-item start <?php
        echo ( "site/landing"==$act ) ? 'active open' : null;
        echo ( "site/links"==$act ) ? 'active open' : null;
        echo ( "site/landingedit"==$act ) ? 'active open' : null;
        ?>">
            <a href="<?= Yii::$app->urlManager->createUrl(['site/landing']) ?>" class="nav-link">
                <i class="icon-wrench"></i>
                <span class="title">Создание страниц</span>
                <span class="arrow open"></span>
            </a>
                <ul class="sub-menu">
                    <li class="nav-item  <?= ( "site/landing"==$act ) ? 'active open' : null; ?>">
                        <a href="<?= Yii::$app->urlManager->createUrl(['site/landing']) ?>" class="nav-link nav-toggle">
                            <i class="icon-chemistry"></i>
                            <span class="title">Конструктор</span>
                            <!--<span class="arrow"></span>-->
                        </a>
                    </li>
                    <li class="nav-item  <?= ( "landingedit"==$act ) ? 'active open' : null; ?>">
                        <a href="<?= Yii::$app->urlManager->createUrl(['site/landingedit']) ?>"
                           class="nav-link nav-toggle">
                            <i class="icon-note"></i>
                            <span class="title">Редактор</span>
                            <!--<span class="arrow"></span>-->
                        </a>
                    </li>
                    <li class="nav-item  <?= ( "links"==$act ) ? 'active open' : null; ?>">
                        <a href="<?= Yii::$app->urlManager->createUrl(['site/links']) ?>" class="nav-link nav-toggle">
                            <i class="icon-link"></i>
                            <span class="title">Мои ссылки</span>
                            <span class="badge badge-success"><?= $cntLp ?></span>
                            <!--<span class="arrow"></span>-->
                        </a>
                    </li>
                </ul>
            </li>


            <li class="nav-item start <?= ( "addproject"==$act ) ? 'active open' : null; ?>">
                <a href="<?= Yii::$app->urlManager->createUrl(['links/addproject']) ?>" class="nav-link">
                    <i class="icon-trophy"></i>
                    <span class="title">Я рекомендую</span>

                </a>
            </li>

            <li class="nav-item start <?php
            echo ( "site/friendsvk"==$act ) ? 'active open' : null;
            echo ( "site/friendsfb"==$act ) ? 'active open' : null;
            ?>">
                <a href="#" class="nav-link">
                    <i class="icon-like"></i>
                    <span class="title">Давайте дружить!</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start <?= ( "site/friendsvk"==$act ) ? 'active open' : null; ?>">
                        <a href="<?= Yii::$app->urlManager->createUrl(['site/friendsvk'])
                        ?>" class="nav-link nav-toggle">
                            <i class="icon-cup"></i>
                            <span class="title">Друзья в VK</span>
                            <span class="badge badge-success"><?= $cntVkfrinds; ?></span>
                        </a>
                    </li>
                    <li class="nav-item start <?= ( "site/friendsfb"==$act ) ? 'active open' : null; ?>">
                        <a href="<?= Yii::$app->urlManager->createUrl(['site/friendsfb'])
                        ?>" class="nav-link nav-toggle">
                            <i class="icon-social-facebook"></i>
                            <span class="title">Друзья в FB</span>
                            <span class="badge badge-danger">скоро</span>
                        </a>

                    </li>
                </ul>
            </li>
            <li class="nav-item start <?php
            echo( "mc/mcedit"==$act ) ? 'active open' : null;
            echo( "mc/mcarchive"==$act ) ? 'active open' : null;
            ?>">
                <a href="#" class="nav-link">
                    <i class="icon-camcorder"></i>
                    <span class="title">Мастер Класс</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item <?=( "mc/mcedit"==$act ) ? 'active open' : null; ?>">
                        <a href="<?= Yii::$app->urlManager->createUrl(['mc/mcedit'])
                        ?>" class="nav-link ">
                            <i class="icon-wrench"></i>
                            <span class="title">Создание МК</span>
                        </a>
                    </li>
                    <li class="nav-item <?=( "mc/mcarchive"==$act ) ? 'active open' : null; ?>">
                        <a href="<?= Yii::$app->urlManager->createUrl(['mc/mcarchive'])
                        ?>" class="nav-link ">
                            <i class="icon-eye"></i>
                            <span class="title">Архив МК</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item start <?= ( "site/news"==$act ) ? 'active open' : null; ?>">
            <a href="<?= Yii::$app->urlManager->createUrl(['site/blog'])
            ?>" class="nav-link">
                <i class="icon-book-open"></i>
                <span class="title">Наш Блог</span>

            </a>
        </li>

            <li class="nav-item start <?php
            echo ( "site/blog0"==$act ) ? 'active open' : null;
            echo ( "site/blog1"==$act ) ? 'active open' : null;
            echo ( "site/blog2"==$act ) ? 'active open' : null;
            echo ( "site/blog3"==$act ) ? 'active open' : null;
            ?>">
                <a href="<?= Yii::$app->urlManager->createUrl(['site/blog0'])
                ?>" class="nav-link">
                    <i class="icon-star"></i>
                    <span class="title">МЛМ Блог</span>
                    <span class="badge badge-danger">скоро</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  <?= ( "site/blog0"==$act ) ? 'active open' : null; ?>">
                        <a href="<?= Yii::$app->urlManager->createUrl(['site/blog0'])
                        ?>" class="nav-link nav-toggle">
                            <i class="icon-present"></i>
                            <span class="title">Сделай Сам</span>
                            <span class="badge badge-success">бесплатно</span>
                        </a>
                    </li>
                    <li class="nav-item  <?= ( "site/blog1"==$act ) ? 'active open' : null; ?>">
                        <a href="<?= Yii::$app->urlManager->createUrl(['site/blog0'])
                        ?>" class="nav-link nav-toggle">
                            <i class="icon-note"></i>
                            <span class="title">Сделай Сам</span>
                            <span class="badge badge-danger">Pro</span>
                        </a>
                    </li>
                    <li class="nav-item  <?= ( "site/blog2"==$act ) ? 'active open' : null; ?>">
                        <a href="<?= Yii::$app->urlManager->createUrl(['site/blog0'])
                        ?>" class="nav-link nav-toggle">
                            <i class="icon-support"></i>
                            <span class="title">Сделайте Мне блог</span>
                        </a>
                    </li>
                    <li class="nav-item  <?= ( "site/blog3"==$act ) ? 'active open' : null; ?>">
                        <a href="<?= Yii::$app->urlManager->createUrl(['site/blog0'])
                        ?>" class="nav-link nav-toggle">
                            <i class="icon-refresh"></i>
                            <span class="title">Обновите Мой блог</span>
                        </a>
                    </li>
                </ul>
            </li>




            <li class="nav-item start <?php
            echo ( "site/pricing"==$act ) ? 'active open' : null;
            echo ( "site/pricing2"==$act ) ? 'active open' : null;
            ?>">
                <a href="<?= Yii::$app->urlManager->createUrl(['site/pricing'])
                ?>" class="nav-link">
                    <i class="icon-briefcase"></i>
                    <span class="title">Тарифы</span>
                </a>
            </li>
            
             <li class="nav-item start">
                <a href="<?= Yii::$app->urlManager->createUrl(['site/partners'])
                ?>" class="nav-link">
                    <i class="icon-briefcase"></i>
                    <span class="title">Партнерская программа</span>
                </a>
            </li>
            
            <li class="nav-item start">
                <a href="<?= Yii::$app->urlManager->createUrl(['site/contact'])
                ?>" class="nav-link">
                    <i class="icon-call-out"></i>
                    <span class="title">Помощь</span>
                </a>
            </li>
            <li class="heading">
                <h3 class="uppercase">В ближайшее время</h3>
            </li>
            <li class="nav-item start <?= ( "site/calendar"==$act ) ? 'active open' : null; ?>">
                <a href="<?= Yii::$app->urlManager->createUrl(['site/calendar'])
                ?>" class="nav-link nav-toggle">
                    <i class="icon-calendar"></i>
                    <span class="title">Календарь</span>
                    <span class="badge badge-danger">скоро</span>
                </a>
            </li>

            <li class="nav-item start <?= ( "site/todo"==$act ) ? 'active open' : null; ?>">
                <a href="<?= Yii::$app->urlManager->createUrl(['site/todo'])
                ?>" class="nav-link nav-toggle">
                    <i class="icon-check"></i>
                    <span class="title">Мои задачи</span>
                    <span class="badge badge-danger">скоро</span>
                </a>
            </li>

            <li class="nav-item start <?= ( "site/training"==$act ) ? 'active open' : null; ?>">
                <a href="<?= Yii::$app->urlManager->createUrl(['site/training'])
                ?>" class="nav-link">
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
            echo ( "admin/adnew"==$act ) ? 'active open' : null;
            echo ( "admin/adactive"==$act ) ? 'active open' : null;
            ?>">
                <a href="###" class="nav-link">
                    <i class="icon-like"></i>
                    <span class="title">Меню админа </span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start <?= ( "admin/adnew"==$act ) ? 'active open' : null; ?>">
                        <a href="<?= Yii::$app->urlManager->createUrl(['admin/adnew'])
                        ?>" class="nav-link nav-toggle">
                            <i class="icon-user-follow"></i>
                            <span class="title">Новые</span>


                        </a>
                    </li>
                    <li class="nav-item start <?= ( "active"==$act ) ? 'active open' : null; ?>">
                        <a href="<?= Yii::$app->urlManager->createUrl(['admin/active'])
                        ?>" class="nav-link nav-toggle">
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
          
<!-----------  Конец меню  ------------>
       
       
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
