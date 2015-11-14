<?php
$this->registerJsFile('/my/web/mertonic/global/scripts/app_acc.js');
$this->registerJsFile('/my/web/mertonic/pages/scripts/dashboard.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/my/web/mertonic/layouts/layout4/scripts/layout.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/my/web/mertonic/layouts/layout4/scripts/demo.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/my/web/mertonic/layouts/global/scripts/quick-sidebar.js', ['depends' => 'yii\web\JqueryAsset']);
$this->title = 'help';
$this->params['breadcrumbs'][] = $this->title;
?>


<!-- BEGIN PAGE BASE CONTENT -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN PROFILE SIDEBAR -->
                            <div class="profile-sidebar">
                                <!-- PORTLET MAIN -->
                                <div class="portlet light profile-sidebar-portlet bordered">
                                    <!-- SIDEBAR USERPIC -->
                                    <div class="profile-userpic">
                                        <img src="#" class="img-responsive" alt=""> </div>
                                    <!-- END SIDEBAR USERPIC -->
                                    <!-- SIDEBAR USER TITLE -->
                                    <div class="profile-usertitle">
                                        <div class="profile-usertitle-name">имя</div>
                                        <div class="profile-usertitle-job">  </div>
                                    </div>
                                    <!-- END SIDEBAR USER TITLE -->
                                    <!-- SIDEBAR BUTTONS -->
                                    <div class="profile-userbuttons">
                                        <button type="button" class="btn btn-circle green btn-sm">тарифный план</button>
                                        <button
                                            onClick="if (confirm('Вы уверены, что хотите удалить свой аккаунт?'))
                                                  window.location.href='index.php?r=site%2Fdelusr';"
                                            type="button" class="btn btn-circle red btn-sm">Удалить аккаунт</button>
                                    </div>
                                    <!-- END SIDEBAR BUTTONS -->
                                    <!-- SIDEBAR MENU -->
                                    <div class="profile-usermenu">
                                        <ul class="nav">

                                            <li>
                                                <a href="index.php?r=site%2Faccount">
                                                    <i class="icon-settings"></i> Настройки аккаунта </a>
                                            </li>
                                            <li class="active">
                                                <a href="#">
                                                    <i class="icon-info"></i> Помощь </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- END MENU -->
                                </div>
                                <!-- END PORTLET MAIN -->
                                <!-- PORTLET MAIN -->
                                <div class="portlet light bordered">
                                    <!-- STAT -->
                                    <div class="row list-separated profile-stat">
                                        <div class="col-md-12 col-sm-12 col-xs-6">
                                            <div class="uppercase profile-stat-title"> 0 $ </div>
                                            <div class="uppercase profile-stat-text"> начистненно по партнерке </div>
                                        </div>
                                        <!--<div class="col-md-4 col-sm-4 col-xs-6">
                                            <div class="uppercase profile-stat-title"> 51 </div>
                                            <div class="uppercase profile-stat-text"> Tasks </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <div class="uppercase profile-stat-title"> 61 </div>
                                            <div class="uppercase profile-stat-text"> Uploads </div>
                                        </div>-->
                                    </div>
                                    <!-- END STAT -->
                                    <div>
                                        <h4 class="profile-desc-title">Ваши партнеры</h4>
                                        <span class="profile-desc-text"> 5 последных регистраций </span>
                                        <div class="margin-top-20 profile-desc-link">
                                            <i class="fa fa-globe"></i>
                                            <a href="http://www.keenthemes.com">www.keenthemes.com</a>
                                        </div>
                                        <div class="margin-top-20 profile-desc-link">
                                            <i class="fa fa-twitter"></i>
                                            <a href="http://www.twitter.com/keenthemes/">@keenthemes</a>
                                        </div>
                                        <div class="margin-top-20 profile-desc-link">
                                            <i class="fa fa-facebook"></i>
                                            <a href="http://www.facebook.com/keenthemes/">keenthemes</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- END PORTLET MAIN -->
                            </div>
                            <!-- END BEGIN PROFILE SIDEBAR -->
                            <!-- BEGIN PROFILE CONTENT -->
                            <div class="profile-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="portlet light bordered">
                                            <div class="portlet-title tabbable-line">
                                                <div class="caption caption-md">
                                                    <i class="icon-globe theme-font hide"></i>
                                                    <span class="caption-subject font-blue-madison bold uppercase">Помощь</span>
                                                </div>
                                                <ul class="nav nav-tabs">
                                                    <li class="active">
                                                        <a href="#tab_1_1" data-toggle="tab">По профилю</a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab_1_2" data-toggle="tab">По тарифам</a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab_1_3" data-toggle="tab">По созданию страниц</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="tab-content">
                                                    <!-- GENERAL QUESTION TAB -->
                                                    <div class="tab-pane active" id="tab_1_1">
                                                        <div id="accordion1" class="panel-group">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <h4 class="panel-title">
                                                                        <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_1"> 1. Вопрос? </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="accordion1_1" class="panel-collapse collapse in">
                                                                    <div class="panel-body">
                                                                        <p>Ответ....... </p> </div>
                                                                </div>
                                                            </div>
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <h4 class="panel-title">
                                                                        <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_2"> 2. Вопрос? </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="accordion1_2" class="panel-collapse collapse">
                                                                    <div class="panel-body"> Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit,
                                                                        enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                                                                        moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                                                        ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore
                                                                        sustainable VHS. </div>
                                                                </div>
                                                            </div>
                                                            <div class="panel panel-success">
                                                                <div class="panel-heading">
                                                                    <h4 class="panel-title">
                                                                        <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_3"> 3. Вопрос? </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="accordion1_3" class="panel-collapse collapse">
                                                                    <div class="panel-body"> Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit,
                                                                        enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                                                                        moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                                                        ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore
                                                                        sustainable VHS. </div>
                                                                </div>
                                                            </div>
                                                            <div class="panel panel-warning">
                                                                <div class="panel-heading">
                                                                    <h4 class="panel-title">
                                                                        <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_4"> 4. Вопрос? </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="accordion1_4" class="panel-collapse collapse">
                                                                    <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
                                                                </div>
                                                            </div>
                                                            <div class="panel panel-danger">
                                                                <div class="panel-heading">
                                                                    <h4 class="panel-title">
                                                                        <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_5"> 5. Вопрос? </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="accordion1_5" class="panel-collapse collapse">
                                                                    <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod.
                                                                        Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
                                                                </div>
                                                            </div>
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <h4 class="panel-title">
                                                                        <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_6"> 6. Вопрос? </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="accordion1_6" class="panel-collapse collapse">
                                                                    <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod.
Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
                                                                </div>
                                                            </div>
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <h4 class="panel-title">
                                                                        <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_7"> 7. Вопрос? </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="accordion1_7" class="panel-collapse collapse">
                                                                    <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod.
                                                                        Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END GENERAL QUESTION TAB -->
                                                    <!-- MEMBERSHIP TAB -->
                                                    <div class="tab-pane" id="tab_1_2">
                                                        <div id="accordion2" class="panel-group">
                                                            <div class="panel panel-warning">
                                                                <div class="panel-heading">
                                                                    <h4 class="panel-title">
                                                                        <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_1"> 1. Вопрос? </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="accordion2_1" class="panel-collapse collapse in">
                                                                    <div class="panel-body">
                                                                        <p>Ответ....... </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="panel panel-danger">
                                                                <div class="panel-heading">
                                                                    <h4 class="panel-title">
                                                                        <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_2"> 2. Вопрос? </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="accordion2_2" class="panel-collapse collapse">
                                                                    <div class="panel-body"> Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit,
                                                                        enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                                                                        moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                                                        ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore
                                                                        sustainable VHS. </div>
                                                                </div>
                                                            </div>
                                                            <div class="panel panel-success">
                                                                <div class="panel-heading">
                                                                    <h4 class="panel-title">
                                                                        <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_3"> 3. Вопрос? </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="accordion2_3" class="panel-collapse collapse">
                                                                    <div class="panel-body"> Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit,
                                                                        enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                                                                        moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                                                        ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore
                                                                        sustainable VHS. </div>
                                                                </div>
                                                            </div>
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <h4 class="panel-title">
                                                                        <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_4"> 4. Вопрос? </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="accordion2_4" class="panel-collapse collapse">
                                                                    <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
                                                                </div>
                                                            </div>
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <h4 class="panel-title">
                                                                        <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_5"> 5. Вопрос? </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="accordion2_5" class="panel-collapse collapse">
                                                                    <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod.
                                                                        Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
                                                                </div>
                                                            </div>
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <h4 class="panel-title">
                                                                        <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_6"> 6. Вопрос? </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="accordion2_6" class="panel-collapse collapse">
                                                                    <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod.
Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
                                                                </div>
                                                            </div>
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <h4 class="panel-title">
                                                                        <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_7"> 7. Вопрос? </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="accordion2_7" class="panel-collapse collapse">
                                                                    <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod.
                                                                        Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END MEMBERSHIP TAB -->
                                                    <!-- TERMS OF USE TAB -->
                                                    <div class="tab-pane" id="tab_1_3">
                                                        <div id="accordion3" class="panel-group">
                                                            <div class="panel panel-danger">
                                                                <div class="panel-heading">
                                                                    <h4 class="panel-title">
                                                                        <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_1"> 1. Вопрос? </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="accordion3_1" class="panel-collapse collapse in">
                                                                    <div class="panel-body">
                                                                        <p>Ответ....... </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="panel panel-success">
                                                                <div class="panel-heading">
                                                                    <h4 class="panel-title">
                                                                        <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_2"> 2. Вопрос? </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="accordion3_2" class="panel-collapse collapse">
                                                                    <div class="panel-body"> Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit,
                                                                        enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                                                                        moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                                                        ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore
                                                                        sustainable VHS. </div>
                                                                </div>
                                                            </div>
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <h4 class="panel-title">
                                                                        <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_3"> 3. Вопрос? </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="accordion3_3" class="panel-collapse collapse">
                                                                    <div class="panel-body"> Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit,
                                                                        enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                                                                        moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                                                        ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore
                                                                        sustainable VHS. </div>
                                                                </div>
                                                            </div>
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <h4 class="panel-title">
                                                                        <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_4"> 4. Вопрос? </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="accordion3_4" class="panel-collapse collapse">
                                                                    <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
                                                                </div>
                                                            </div>
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <h4 class="panel-title">
                                                                        <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_5"> 5. Вопрос? </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="accordion3_5" class="panel-collapse collapse">
                                                                    <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod.
Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
                                                                </div>
                                                            </div>
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <h4 class="panel-title">
                                                                        <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_6"> 6. Вопрос? </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="accordion3_6" class="panel-collapse collapse">
                                                                    <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod.
                                                                        Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
                                                                </div>
                                                            </div>
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <h4 class="panel-title">
                                                                        <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_7"> 7. Вопрос? </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="accordion3_7" class="panel-collapse collapse">
                                                                    <div class="panel-body"> 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                                                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod.
Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END TERMS OF USE TAB -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PROFILE CONTENT -->
                        </div>
                    </div>
                    <!-- END PAGE BASE CONTENT -->