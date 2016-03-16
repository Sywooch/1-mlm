<?php
$this->title = 'Партнерская программа';
$this->params['breadcrumbs'][] = $this->title;


$this->registerJsFile('//1-mlm.com/mlm-template/global/scripts/app_acc.js');

$this->registerJsFile('//1-mlm.com/mlm-template/pages/scripts/dashboard.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('//1-mlm.com/mlm-template/layouts/layout4/scripts/layout.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('//1-mlm.com/mlm-template/layouts/layout4/scripts/demo.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('//1-mlm.com/mlm-template/layouts/global/scripts/quick-sidebar.js', ['depends' => 'yii\web\JqueryAsset']);

$css = <<<'STYLE'
    #section1 {
        cursor: text;
        background: transparent url("//1-mlm.com/img/partners.jpg") no-repeat scroll 50% 50%;
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
        background: transparent url("//1-mlm.com/img/partners2.jpg") no-repeat scroll 50% 50%;
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
          <p> Ваша партнерская ссылка <a href="http://1-mlm.com/ref-<?= $usrDt->refdt ?>.html"
target="_blank">http://1-mlm.com/ref-<?= $usrDt->refdt ?>.html</a>
<br />
</p>                
                 

            <br>
        </div>
    </div>
</section>
            </div>
            
                                        <!-- BEGIN PORTLET-->
                                        
                                        
                                        
                            
                                
                                    <div class="caption">
                                       
                                    </div>
                                 
                                
            <div class="portlet-body">
                                    
                                    <!-- Button to trigger modal -->
                                    <a href="#myModal1" role="button" class="btn white" data-toggle="modal"> условия партнерской программы </a>
                                    
                                    <!-- Modal -->
                                    <div id="myModal1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                    <h4 class="modal-title">Условия партнерской программы</h4>
                                                </div>
                                                <div class="modal-body">
                                                   <div class="wind-body" style="padding: 0 0px;">
        1. Участником партнерской программы может стать любой зарегистрированный пользователь на тарифе "мастер".
        <br>
        2. Используя свою <a href="http://1-mlm.com/index.php?r=site/myref">партнерские ссылку</a>
, Вы становитесь участником данной
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
                                                    <button class="btn yellow" data-dismiss="modal" aria-hidden="true">Закрыть</button>
                                                    
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
            
            <div class="portlet-body">
            <h3>Как начать пользоваться сервисом бесплатно? </h3>
            <p>Вы можете стать партнерами сервиса.<br>

Для этого необходимо следующее:<br>

Скопировать вашу партнерскую ссылку<br>

Разослать всем своим друзьям и коллегам, которым мог бы быть интересен наш сервис, с рекомендацией воспользоваться им.<br>

После пополнения счета за использование сервиса одного из вами приглашенных коллег вам на счет будет зачислено 50% от его суммы. И такое будет происходить постоянно, в течение того времени, пока вами приглашенные коллеги пользуются сервисом и пополняют счет.<br>

Таким образом, если вы пригласите 5-10 коллег или друзей, и 2 из них начнут постоянно пользоваться сервисом, то автоматически вам будет зачисляться равный 50%+50% = 100%.<br>

В этом случае вы будете пользоваться сервисом абсолютно бесплатно.<br>

Для тех из вас, кто хотел бы начать зарабатывать на нашей партнерской программе.<br>

Вы можете настроить Яндекс.Директ, рекламу в VK, в тизерной сети и другие виды рекламы на вашу партнерскую ссылку<br>

Вывод денег вы сможете осуществлять от 100 $. на вашу банковскую карту.<br>
Для этого вам нужно будет написать в тех поддержку:<br>

реквизиты карты; сумму, которую вы бы хотели вывести. И деньги перечисляются 5 числа каждого месяца с подачи запроса.<br>

Чуть позже мы настроим автовывод.</p>
            </div>
        </div>
    </div>
</div>