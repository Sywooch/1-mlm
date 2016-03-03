<?php
$this->title = 'Партнерская программа';
//$this->params['breadcrumbs'][] = $this->title;


$this->registerJsFile('/mertonic/global/scripts/app_acc.js');

$this->registerJsFile('/mertonic/pages/scripts/dashboard.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/layouts/layout4/scripts/layout.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/layouts/layout4/scripts/demo.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/layouts/global/scripts/quick-sidebar.js', ['depends' => 'yii\web\JqueryAsset']);

$css = <<<'STYLE'
    #section1 {
        cursor: text;
        background: transparent url("img/partners.jpg") no-repeat scroll 50% 50%;
    }

    .builder-section.bg-img .wrap::after {
        content: "";
        display: block;
        height: 0px;
        overflow: hidden;
        clear: both;
    }

    .no-padding {
        padding: 0px !important;
    }

    .bg-img {
        background-size: cover !important;
        height: 280px;
    }

    .builder-section {
        padding: 60px 0px;
    }

    .wrap {
        width: 940px;
        margin: 0px auto;
        position: relative;
        min-width: 940px;
    }

    .white-block {
        background: rgba(255, 255, 255, 0.7) none repeat scroll 0% 0%;
        box-sizing: border-box;
        height: 280px;
        padding: 10px 50px;
        text-align: center;
        width: 670px;
        float: right;
        margin-right: 30px;
        line-height: 8px;
    }

    .white-block h3 {
        color: #313131;
        font-size: 36px;
        margin-bottom: 7px;
    }

    .wrap p {
        font-family: "ProximaNova",sans-serif;
        font-size: 18px;
        color: #333;
        line-height: 23px;
    }

    .white-block p {
        color: #313131;
        font-size: 16px;
        margin-bottom: 7px;
    }

    .white-block .phone {
        display: block;
        margin: 22px 0px 23px;
        color: #313131;
        font-size: 24px;
        font-family: "ProximaNovaLight",sans-serif;
    }

    .white-block .skype {
        display: inline-block;
        position: relative;
        margin-left: 23px;
        color: #656565;
        font-size: 16px;
        /*border-bottom: 1px solid rgba(101, 101, 101, 0.5);*/
        transition: border 0.3s ease 0s;
    }

    .white-block .skype::before {
        left: -33px;
        background-position: -56px -143px;
        width: 25px;
        height: 25px;
    }
    
    
    
    #section2 {
        cursor: text;
        background: transparent url("img/partners2.jpg") no-repeat scroll 50% 50%;
    }

    .builder-section.bg-img .wrap::after {
        content: "";
        display: block;
        height: 0px;
        overflow: hidden;
        clear: both;
    }

    .no-padding {
        padding: 0px !important;
    }

    .bg-img {
        background-size: cover !important;
        height: 280px;
    }

    .builder-section {
        padding: 60px 0px;
    }

    .wrap {
        width: 940px;
        margin: 0px auto;
        position: relative;
        min-width: 940px;
    }

    .white-block {
        background: rgba(255, 255, 255, 0.7) none repeat scroll 0% 0%;
        box-sizing: border-box;
        height: 280px;
        padding: 10px 50px;
        text-align: center;
        width: 670px;
        float: right;
        margin-right: 30px;
        line-height: 8px;
    }

    .white-block h3 {
        color: #313131;
        font-size: 36px;
        margin-bottom: 7px;
    }

    .wrap p {
        font-family: "ProximaNova",sans-serif;
        font-size: 18px;
        color: #333;
        line-height: 23px;
    }

    .white-block p {
        color: #313131;
        font-size: 16px;
        margin-bottom: 7px;
    }

    .white-block .phone {
        display: block;
        margin: 22px 0px 23px;
        color: #313131;
        font-size: 24px;
        font-family: "ProximaNovaLight",sans-serif;
    }

    .white-block .skype {
        display: inline-block;
        position: relative;
        margin-left: 23px;
        color: #656565;
        font-size: 16px;
        /*border-bottom: 1px solid rgba(101, 101, 101, 0.5);*/
        transition: border 0.3s ease 0s;
    }

    .white-block .skype::before {
        left: -33px;
        background-position: -56px -143px;
        width: 25px;
        height: 25px;
    }
    
    
STYLE;
$this->registerCss($css);
?>
   <link href="http://1-mlm.com/css/partners-tab.css" rel="stylesheet">
<!--<link href="https://hostpro.ua/wp-content/themes/hostpro/assets/css/style.css" rel="stylesheet">-->

<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-wallet font-blue-sharp"></i>
                    <span class="caption-subject font-blue-sharp"><?= $this->title; ?></span>
                </div>
                <!-- Кнопка видео подсказки и во всю ширину --->
                <div class="actions">
                    <a class="btn btn-circle btn-icon-only btn-default" data-toggle="modal" data-target="#w1help"  href="#w1help">
                        <i class="icon-support"></i></a>
                    <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;"> </a>
                    <div style="display: none;" id="w1help" class="fade modal" role="dialog" tabindex="-1">
                        <div class="modal-dialog ">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 style="margin-top: 0px;"><div align="center">Помощь</div></h4>
                                </div>
                                <div class="modal-body">
                                    <iframe width="560" height="315"
                                            src="https://www.youtube-nocookie.com/embed/<?php
                                            echo "iBfk37Fa3H0";
                                            ?>?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Кнопка видео подсказки и во всю ширину --->
            </div>
            
            
            <div class="portlet-body">
<section id="section1" data-scen-id="0" class="builder-section no-padding bg-img ng-touched ng-dirty-parse" ng-mouseup="deTextCustomize()">
    <div class="wrap">
        <div class="white-block">
	        <br>
            <h3>Приводите людей
и зарабатывайте на этом деньги!</h3>
            <p><span style="font-size: 25px;">Мы ценим наших клиентов и партнеров,<br> поэтому отдаем</span> <span style="color: #F64747; font-size: 35px;">
50%</span> <br>от всех оплат привлеченных Вами пользователей.</p>
            <p>Просто поделись ссылкой и получай пассивный доход.</p>
            <p> Ваша партнерская ссылка <?= "<a href=\"http://1-mlm.com/ref-{$usrDt->refdt}.html\"
                 target=\"_blank\">http://1-mlm.com/ref-{$usrDt->refdt}.html</a>"; ?><br /></p>
                 
                 

            <br>
        </div>
    </div>
</section>
            </div>
            
                                        <!-- BEGIN PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                       
                                    </div>
                                    <!--<div class="actions">
                                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                            <i class="icon-cloud-upload"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                            <i class="icon-wrench"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                            <i class="icon-trash"></i>
                                        </a>
                                    </div>-->
                                </div>
                                <div class="portlet-body">
                                    
                                    <!-- Button to trigger modal -->
                                    <a href="#myModal1" role="button" class="btn blue" data-toggle="modal"> условия партнерской программы </a>
                                    
                                    <!-- Modal -->
                                    <div id="myModal1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                    <h4 class="modal-title">Условия партнерской программы</h4>
                                                </div>
                                                <div class="modal-body">
                                                   <div class="wind-body" style="padding: 0 30px;">
        1. Участником партнерской программы может стать любой зарегистрированный пользователь на тарифе "мастер".
        <br>
        2. Используя свою партнерские ссылку, Вы становитесь участником данной
        партнерской программы и полностью принимаете все ее правила и условия.
        <br>
       3. Когда привлеченный Вами клиент выполняет оплату тарифа, Вам начисляется
        вознаграждение в размере 50% от суммы его первого и всех последующих платежей.
        <br>
        3.1. Партнерское вознаграждение начисляется в течение первого года после регистрации
        пользователя. Дальнейшие вознаграждение с пользователя не начисляются.
        <br>
        3.2. Партнерское вознаграждение не начисляется при оплате клиентом дополнительных услуг (в
        разделе Услуги).
        <br>
        4. Участник партнерской программы обязан предоставлять привлекаемым клиентам достоверную
        информацию об услугах сервиса.
        <br>
        5. Запрещено использовать незаконные способы привлечения клиентов или любое другое искусственное
        увеличение количества заказов.
        <br>
        6.1. Запрещенный вид трафика:
        <br>
        6.1.1. Email-рассылки (по согласованию)
        <br>
        6.1.2. ClickUnder-реклама
        <br>
        6.1.3. SMS-рассылки
        <br>
        6.1.4. Push-реклама
        <br>
        6.1.5. Cookie-Dropping
        <br>
        6.2. Запрещенные источники трафика:
        <br>
        6.2.1. Социальные сети:
        <br>
        6.2.1.1. Создание брендированных групп;
        <br>
        6.2.1.2. Реклама через статусы/рекомендации от лица сотрудников 1-го млм Ресурса;
        <br>
        6.2.1.3. Мотивированный трафик;
        <br>
        6.2.1.4. Офферная реклама.
        <br>
        6.3. Запрещено использование собственных рекламных материалов
        <br>
        6.2.2. Incentive любой (мотивированный трафик)
        <br>
        6.2.3. Контекстная реклама (Yandex Direct, Google Adwords, Begun)
        Рекламные кампании по словам и словосочетаниям, в которых есть слова: 1 млм Ресурс (любые словосочетания и слова-синонимы);
        <br>
        6.2.5. Спам-рассылки (мессенжеры)
        <br>
        6.2.6. Adult-трафик
        <br>
        6.3. Запрещается использование собственных рекламных материалов
        <br>
        7. В случае выявления нарушения любого из пунктов настоящих Правил, начисление вознаграждения не
        осуществляется. Аккаунт партнера блокируется, без возможности возврата средств с баланса сервиса
        и партнерского счета.
        <br>
        8. Партнерское вознаграждение можно использовать для оплаты услуг сервиса либо вывести в
        платежную систему Яндекс.Деньги. Для этого нужно сделать заявку в разделе Вывод средств.
        <br>

        8.1. Минимальная сумма вывода  - 100$
        <br>
        9. Сервис "1-й млм Ресурс" не несет ответственности за любые неполадки в работе
        партнерской программы, простои, ошибки и перебои, а также за любой ущерб, понесенный участником
        партнерской программы, привлеченным клиентом или третьими лицами в ходе использования данной
        партнерской программы.
        <br>
        10. Сервис "1-й млм Ресурс" оставляет за собой право в любой момент в
        одностороннем порядке изменить условия данной Партнерской программы, а также условия участия в
        ней.
        <br>
        11. Сервис "1-й млм Ресурс" оставляет за собой право в любой момент в
        одностороннем порядке прекратить действие данной Партнерской программы.
    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn default" data-dismiss="modal" aria-hidden="true">Закрыть</button>
                                                    <button class="btn yellow">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="myModal2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                    <h4 class="modal-title">Alert Header</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p> Body goes here... </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button data-dismiss="modal" class="btn green">OK</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="myModal3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                    <h4 class="modal-title">Confirm Header</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p> Body goes here... </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn default" data-dismiss="modal" aria-hidden="true">Close</button>
                                                    <button data-dismiss="modal" class="btn blue">Confirm</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END MODAL DIALOG PORTLET-->
            
            <div class="portlet-body">
<section id="section2" data-scen-id="0" class="builder-section no-padding bg-img ng-touched ng-dirty-parse" ng-mouseup="deTextCustomize()">
    <div class="wrap">
        <div class="white-block">
            <h3>Статистика</h3>
            <br>
            <p><span style="font-size: 23px;">Здесь БУДЕТ СКОРО отображается статистика по переходам, 
регистрациям и оплатам с вашей партнёрской ссылки</p>
           <div class="portlet-body">
            <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-green-sharp">
                                            <span data-counter="counterup" data-value="7800"><?= $money; ?></span>
                                            
                                        </h3>
                                        <small>Переходов</small>
                                    </div>
                                    <div class="icon">
                                        <i class="icon-pie-chart"></i>
                                    </div>
                                </div>
                          
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-red-haze">
                                            <span data-counter="counterup" data-value="1349"><?= $cntMemCom; ?></span>
                                        </h3>
                                        <small>Регистраций</small>
                                    </div>
                                    <div class="icon">
                                        <i class="icon-like"></i>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-blue-sharp">
                                            <span data-counter="counterup" data-value="567"><?= $cntMemAct; ?></span>
                                        </h3>
                                        <small>Оплат</small>
                                    </div>
                                    <div class="icon">
                                        <i class="icon-basket"></i>
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                        
                    </div>
           </div>
            <br>
        </div>
    </div>
</section>
            </div>
        </div>
    </div>
</div>