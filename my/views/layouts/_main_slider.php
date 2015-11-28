<?php
$identity = \Yii::$app->getUser()->getIdentity()->profile;
switch($identity["service"])
{
    case "facebook":
        $usr=\app\models\Users::find()->select('refdt')->where(['facebook'=>$identity["id"]])->one();
        break;
    case "vkontakte":
        $usr=\app\models\Users::find()->select('refdt')->where(['vkontakte'=>$identity["id"]])->one();
        break;
    case "linkedin_oauth2":
        $usr=\app\models\Users::find()->select('refdt')->where(['linkedin'=>$identity["id"]])->one();
        break;
    case "google":
        $usr=\app\models\Users::find()->select('refdt')->where(['google'=>$identity["id"]])->one();
        break;
    case "yandex":
        $usr=\app\models\Users::find()->select('refdt')->where(['yandex'=>$identity["id"]])->one();
        break;
    case "mailru":
        $usr=\app\models\Users::find()->select('refdt')->where(['mailru'=>$identity["id"]])->one();
        break;
}
$cntMemCom=
    \app\models\Users::find()->select('id')
        ->where(['ref' => $usr->refdt])
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
                <span class="title">Главная</span>
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
                <!--<ul class="sub-menu">
                    <li class="nav-item  <?php echo ( "account"==$act ) ? 'active open' : null; ?>">
                        <a href="index.php?r=site%2Faccount" class="nav-link ">
                            <i class="icon-settings"></i>
                            <span class="title">Настойки аккаунта</span>
                        </a>
                    </li>
                    <li class="nav-item  <?php echo ( "help"==$act ) ? 'active open' : null; ?>">
                        <a href="index.php?r=site%2Fhelp" class="nav-link ">
                            <i class="icon-settings"></i>
                            <span class="title">Помощь</span>
                        </a>
                    </li>

                </ul>-->
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
        <!--<li class="nav-item start <?= ( "mc"==$act ) ? 'active open' : null; ?>">
            <a href="index.php?r=site%2Fmc" class="nav-link">
                <i class="icon-user"></i>
                <span class="title">Мастер Класс</span>

            </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="index.php?r=site%2Fmc" class="nav-link ">
                            <span class="title">Создание МК</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="index.php?r=site%2Fmc" class="nav-link ">
                            <span class="title">Архив МК</span>
                        </a>
                    </li>
                </ul>
            </li>-->
        <!--<li class="nav-item start <?= ( "training"==$act ) ? 'active open' : null; ?>">
            <a href="index.php?r=site%2Ftraining" class="nav-link">
                <i class="icon-folder"></i>
                <span class="title">Обучение</span>

            </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="page/charts_amcharts.html" class="nav-link ">
                            <i class="icon-folder"></i>
                            <span class="title">Бесплатное</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page/charts_flotcharts.html" class="nav-link ">
                            <i class="icon-folder"></i>
                            <span class="title">Курсы</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page/charts_flowchart.html" class="nav-link ">
                            <i class="icon-folder"></i>
                            <span class="title">Книги</span>
                        </a>
                    </li>
                </ul>
            </li>
  -->
            <li class="nav-item start <?php
            echo( "edit"==$act ) ? 'active open' : null;
            echo( "mcarchive"==$act ) ? 'active open' : null;
            ?>">
                <a href="#" class="nav-link">
                    <i class="icon-camcorder"></i>
                    <span class="title">Мастер Класс</span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item <?=( "mc"==$act ) ? 'active open' : null; ?>">
                        <a href="index.php?r=mc%2Fedit" class="nav-link ">
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
                    <li class="nav-item  <?=( "pricing2"==$act ) ? 'active open' : null;?>">
                        <a href="index.php?r=site%2Fpricing2" class="nav-link ">
                            <i class="icon-wallet"></i>
                            <span class="title"> Оплата</span>
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


            <li class="nav-item start <?= ( "news"==$act ) ? 'active open' : null; ?>">
                <a href="index.php?r=site%2Fnews" class="nav-link">
                    <i class="icon-user"></i>
                    <span class="title">Новости</span>

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
                        <a href="page/charts_amcharts.html" class="nav-link ">
                            <i class="icon-folder"></i>
                            <span class="title">Бесплатное</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page/charts_flotcharts.html" class="nav-link ">
                            <i class="icon-folder"></i>
                            <span class="title">Курсы</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page/charts_flowchart.html" class="nav-link ">
                            <i class="icon-folder"></i>
                            <span class="title">Книги</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!--
            <li class="nav-item start <?= ( "company"==$act ) ? 'active open' : null; ?>">
                <a href="index.php?r=site%2Fcompany" class="nav-link">
                    <i class="icon-pointer"></i>
                    <span class="title">Компания</span>
                    <span class="badge badge-danger">скоро</span>

                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="page/maps_google.html" class="nav-link ">
                            <span class="title">Google Maps</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page/maps_vector.html" class="nav-link ">
                            <span class="title">Vector Maps</span>
                        </a>
                    </li>
                </ul>
            </li>
            -->
            <!--<li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-layers"></i>
                    <span class="title">Page Layouts</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="page/layout_language_bar.html" class="nav-link ">
                            <span class="title">Header Language Bar</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="layout_footer_fixed.html" class="nav-link ">
                            <span class="title">Fixed Footer</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page/layout_boxed_page.html" class="nav-link ">
                            <span class="title">Boxed Page</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page/layout_blank_page.html" class="nav-link ">
                            <span class="title">Blank Page</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-feed"></i>
                    <span class="title">Sidebar Layouts</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="page/layout_sidebar_menu_hover.html" class="nav-link ">
                            <span class="title">Hover Sidebar Menu</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page/layout_sidebar_reversed.html" class="nav-link ">
                            <span class="title">Reversed Sidebar Page</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="layout_sidebar_fixed.html" class="nav-link ">
                            <span class="title">Fixed Sidebar Layout</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page/layout_sidebar_closed.html" class="nav-link ">
                            <span class="title">Closed Sidebar Layout</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class=" icon-wrench"></i>
                    <span class="title">Custom Layouts</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="page/layout_disabled_menu.html" class="nav-link ">
                            <span class="title">Disabled Menu Links</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="heading">
                <h3 class="uppercase">Pages</h3>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-basket"></i>
                    <span class="title">eCommerce</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="page/ecommerce_index.html" class="nav-link ">
                            <i class="icon-home"></i>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page/ecommerce_orders.html" class="nav-link ">
                            <i class="icon-basket"></i>
                            <span class="title">Orders</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page/ecommerce_orders_view.html" class="nav-link ">
                            <i class="icon-tag"></i>
                            <span class="title">Order View</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page/ecommerce_products.html" class="nav-link ">
                            <i class="icon-graph"></i>
                            <span class="title">Products</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page/ecommerce_products_edit.html" class="nav-link ">
                            <i class="icon-graph"></i>
                            <span class="title">Product Edit</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-docs"></i>
                    <span class="title">Apps</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="page/app_todo.html" class="nav-link ">
                            <i class="icon-clock"></i>
                            <span class="title">Todo 1</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page/app_todo_2.html" class="nav-link ">
                            <i class="icon-check"></i>
                            <span class="title">Todo 2</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page/app_inbox.html" class="nav-link ">
                            <i class="icon-envelope"></i>
                            <span class="title">Inbox</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page/app_calendar.html" class="nav-link ">
                            <i class="icon-calendar"></i>
                            <span class="title">Calendar</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-user"></i>
                    <span class="title">User</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="page/page_user_profile_1.html" class="nav-link ">
                            <span class="title">Profile 1</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page/page_user_profile_1_account.html" class="nav-link ">
                            <span class="title">Profile 1 Account</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page/page_user_profile_1_help.html" class="nav-link ">
                            <span class="title">Profile 1 Help</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page/page_user_profile_2.html" class="nav-link ">
                            <span class="title">Profile 2</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page/page_user_login_1.html" class="nav-link " target="_blank">
                            <span class="title">Login Page 1</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page/page_user_login_2.html" class="nav-link " target="_blank">
                            <span class="title">Login Page 2</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page/page_user_login_3.html" class="nav-link " target="_blank">
                            <span class="title">Login Page 3</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page/page_user_login_4.html" class="nav-link " target="_blank">
                            <span class="title">Login Page 4</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page/page_user_login_5.html" class="nav-link " target="_blank">
                            <span class="title">Login Page 5</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page/page_user_login_6.html" class="nav-link " target="_blank">
                            <span class="title">Login Page 6</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page/page_user_lock_1.html" class="nav-link " target="_blank">
                            <span class="title">Lock Screen 1</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page/page_user_lock_2.html" class="nav-link " target="_blank">
                            <span class="title">Lock Screen 2</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-social-dribbble"></i>
                    <span class="title">General</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="page/page_general_about.html" class="nav-link ">
                            <span class="title">About</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page/page_general_contact.html" class="nav-link ">
                            <span class="title">Contact</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page/page_general_search.html" class="nav-link ">
                            <span class="title">Search</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page/page_general_search_2.html" class="nav-link ">
                            <span class="title">Search 2</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page/page_general_search_3.html" class="nav-link ">
                            <span class="title">Search 3</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page/page_general_search_4.html" class="nav-link ">
                            <span class="title">Search 4</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page/page_general_search_5.html" class="nav-link ">
                            <span class="title">Search 5</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page/page_general_pricing.html" class="nav-link ">
                            <span class="title">Pricing</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page/page_general_faq.html" class="nav-link ">
                            <span class="title">FAQ</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page/page_general_blog.html" class="nav-link ">
                            <span class="title">Blog</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page/page_general_blog_post.html" class="nav-link ">
                            <span class="title">Blog Post</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page/page_general_invoice.html" class="nav-link ">
                            <span class="title">Invoice</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page/page_general_invoice_2.html" class="nav-link ">
                            <span class="title">Invoice 2</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-settings"></i>
                    <span class="title">System</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="page/page_system_coming_soon.html" class="nav-link " target="_blank">
                            <span class="title">Coming Soon</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page/page_system_404_1.html" class="nav-link ">
                            <span class="title">404 Page 1</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page/page_system_404_2.html" class="nav-link " target="_blank">
                            <span class="title">404 Page 2</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page/page_system_404_3.html" class="nav-link " target="_blank">
                            <span class="title">404 Page 3</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page/page_system_500_1.html" class="nav-link ">
                            <span class="title">500 Page 1</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page/page_system_500_2.html" class="nav-link " target="_blank">
                            <span class="title">500 Page 2</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-folder"></i>
                    <span class="title">Multi Level Menu</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-settings"></i> Item 1
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="?p=dashboard-2" target="_blank" class="nav-link">
                                    <i class="icon-user"></i> Arrow Toggle
                                    <span class="arrow nav-toggle"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="icon-power"></i> Sample Link 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="icon-paper-plane"></i> Sample Link 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="icon-star"></i> Sample Link 1</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="icon-camera"></i> Sample Link 1</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="icon-link"></i> Sample Link 2</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="icon-pointer"></i> Sample Link 3</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="?p=dashboard-2" target="_blank" class="nav-link">
                            <i class="icon-globe"></i> Arrow Toggle
                            <span class="arrow nav-toggle"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="icon-tag"></i> Sample Link 1</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="icon-pencil"></i> Sample Link 1</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="icon-graph"></i> Sample Link 1</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="icon-bar-chart"></i> Item 3 </a>
                    </li>
                </ul>
            </li>--->
        </ul>
        <!-- END SIDEBAR MENU -->


        <script type="text/javascript" src="//vk.com/js/api/openapi.js?121"></script>

        <!-- VK Widget -->
        <div id="vk_groups"></div>
        <script type="text/javascript">
            VK.Widgets.Group("vk_groups", {mode: 1, width: "235", height: "200", color1: 'FFFFFF', color2: '276798', color3: '5B7FA6'}, 76966334);
        </script>
        <!--  VK -->
        <br>
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

<div class="g-ytsubscribe" data-channelid="UC4Q97tIPa3_xn3uUdjybPQw" data-layout="full" data-count="default" data-onytevent="onYtEvent"></div>

    </div>
    <!-- END SIDEBAR -->
</div>
