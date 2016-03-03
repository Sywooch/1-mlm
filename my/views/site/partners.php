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
            <p> Ваша партнерская ссылка для приглашения в саму систему <a href=\"http://1-mlm.com/ref-{$usrDt->refdt}.html\"
                 target=\"_blank\">http://1-mlm.com/ref-{$usrDt->refdt}.html</a><br /></p>
                 
                 

            <br>
        </div>
    </div>
</section>
            </div>
            
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