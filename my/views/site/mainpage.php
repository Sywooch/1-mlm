<?php
$this->registerJsFile('/mertonic/global/scripts/app_acc.js');

$this->registerJsFile('/mertonic/pages/scripts/dashboard.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/layouts/layout4/scripts/layout.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/layouts/layout4/scripts/demo.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/layouts/global/scripts/quick-sidebar.js', ['depends' => 'yii\web\JqueryAsset']);


$this->registerJsFile('/mertonic/global/plugins/jqvmap/jqvmap/jquery.vmap.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js', ['depends' => 'yii\web\JqueryAsset']);



            
            
            
            
            

$this->title = 'Главная';
?>
<!-- Начало  страницы -->
    <div class="row">
        <div class="col-md-12">
            <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-blue-sharp">
                    <i class="icon-user font-blue-sharp"></i>
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
                <div class="tools"> </div>
            </div>
            <div class="portlet-body">

<div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-green-sharp">
                                            <span data-counter="counterup" data-value="7800"><?= $money; ?></span>
                                            <small class="font-green-sharp">$</small>
                                        </h3>
                                        <small>Партнеский Бонус</small>
                                    </div>
                                    <div class="icon">
                                        <i class="icon-pie-chart"></i>
                                    </div>
                                </div>
                          
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-red-haze">
                                            <span data-counter="counterup" data-value="1349"><?= $cntMemCom; ?></span>
                                        </h3>
                                        <small>Ваша команда</small>
                                    </div>
                                    <div class="icon">
                                        <i class="icon-like"></i>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-blue-sharp">
                                            <span data-counter="counterup" data-value="567"><?= $cntMemAct; ?></span>
                                        </h3>
                                        <small>Вашы активние</small>
                                    </div>
                                    <div class="icon">
                                        <i class="icon-basket"></i>
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-purple-soft">
                                            <span data-counter="counterup" data-value="276"><?= $allUsers; ?></span>
                                        </h3>
                                        <small>Всего в системе</small>
                                    </div>
                                    <div class="icon">
                                        <i class="icon-user"></i>
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    
                    <div class="row">
                       
                            <!-- BEGIN REGIONAL STATS PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-share font-red-sunglo"></i>
                        <span class="caption-subject font-red-sunglo bold uppercase">Региональная Статистика</span>
                                    </div>
                                    <div class="actions">
                                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                            <i class="icon-cloud-upload"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                            <i class="icon-wrench"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;"> </a>
                                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                            <i class="icon-trash"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div id="region_statistics_loading">
                                        <img src="/mertonic/global/img/loading.gif" alt="loading" /> </div>
                                    <div id="region_statistics_content" class="display-none">
                                        <div class="btn-toolbar margin-bottom-10">
                                            <div class="btn-group btn-group-circle" data-toggle="buttons">
                                                <a href="" class="btn grey-salsa btn-sm active"> Пользователи </a>
                                                <a href="" class="btn grey-salsa btn-sm"> Активные </a>
                                            </div>
                                            <div class="btn-group pull-right">
                                                <a href="" class="btn btn-circle grey-salsa btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Выбрать регион
                                                    <span class="fa fa-angle-down"> </span>
                                                </a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="javascript:;" id="regional_stat_world"> Весь мир </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;" id="regional_stat_usa"> USA </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;" id="regional_stat_europe"> Европа </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;" id="regional_stat_russia"> Россия </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;" id="regional_stat_germany"> Германия </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div id="vmap_world" class="vmaps display-none"> </div>
                                        <div id="vmap_usa" class="vmaps display-none"> </div>
                                        <div id="vmap_europe" class="vmaps display-none"> </div>
                                        <div id="vmap_russia" class="vmaps display-none"> </div>
                                        <div id="vmap_germany" class="vmaps display-none"> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END REGIONAL STATS PORTLET-->
                        </div>
                    
                    
                    
                    

            </div>
        </div>
    </div>
</div>











