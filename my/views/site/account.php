<?php
$this->registerJsFile('/my/web/mertonic/global/scripts/app_acc.js');

$this->registerJsFile('/my/web/mertonic/pages/scripts/dashboard.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/my/web/mertonic/layouts/layout4/scripts/layout.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/my/web/mertonic/layouts/layout4/scripts/demo.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/my/web/mertonic/layouts/global/scripts/quick-sidebar.js', ['depends' => 'yii\web\JqueryAsset']);

$this->title = 'profile';
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
                                        <img src="<?= $model->userpic; ?>" class="img-responsive" alt="">
                                    </div>
                                    <!-- END SIDEBAR USERPIC -->
                                    <!-- SIDEBAR USER TITLE -->
                                    <div class="profile-usertitle">
                                        <div class="profile-usertitle-name"><?php
                                            echo $model->fn,' ',$model->ln;
                                            ?></div><br />Дата последнего входа: <?= $usrDt["active"]; ?>
                                        <br />
                                        <div class="profile-usertitle-job"> <?php echo $usrDt["level"]; ?> </div>
                                    </div>
                                    <!-- END SIDEBAR USER TITLE -->
                                    <!-- SIDEBAR BUTTONS -->
                                    <div class="profile-userbuttons">
                                        <button
                                            onClick="window.location.href='index.php?r=site%2Fpricing';"
                                            type="button" class="btn btn-circle green btn-sm">тарифный план</button>
                                        <button
                                            onClick="if (confirm('Вы уверены, что хотите удалить свой аккаунт?'))
                                                  window.location.href='index.php?r=site%2Fdelusr';"
                                            type="button" class="btn btn-circle red btn-sm">Удалить аккаунт</button>
                                    </div>
                                    <!-- END SIDEBAR BUTTONS -->
                                    <!-- SIDEBAR MENU -->
                                    <div class="profile-usermenu">
                                        <ul class="nav">
                                           <!-- <li>
                                                <a href="page_user_profile_1.html">
                                                    <i class="icon-home"></i> Профиль </a>
                                            </li>-->
                                            <li class="active">
                                                <a href="index.php?r=site%2Faccount">
                                                    <i class="icon-settings"></i> Настройки аккаунта </a>
                                            </li>
                                            <li>
                                                <a href="index.php?r=site%2Fhelp">
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
                                        <span class="profile-desc-text"> 5 последных регистраций </span><br /><br />
                                    <?php
                                         for($i=0;$i<sizeof($lastFive);$i++):
                                    ?>
                                    <a href="http://vk.com/id<?= $lastFive[$i]["socid"]; ?>">
                                        <img alt="user picture" class="img-circle"
                                           style="margin-left: 5px;margin-top: -8px;height: 39px;display: inline-block;"
                                           src="<?= $lastFive[$i]["userpic"]; ?>"><span class="username username-hide-on-mobile"><?php
                                            echo $lastFive[$i]["fn"], ' ',$lastFive[$i]["ln"]
                                        ?></span>
                                     </a>
                                        <br /><br />
                                    <?php
                                         endfor; ?>
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
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-settings"></i>
                                        <span class="caption-subject font-purple-soft bold uppercase">Настройки профиля</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#tab_1_1" data-toggle="tab"> Персональные данные </a>
                                        </li>
                                        <li>
                                            <a href="#tab_1_2" data-toggle="tab"> Изменение аватара </a>
                                        </li>
										<li>
                                            <a href="#tab_1_3" data-toggle="tab"> Социальные Аккаунты </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade active in" id="tab_1_1">
                                            <?php
                                            echo $this->render('_account_edit_info', [
                                                'model' => $model
                                            ]); ?>
                                        </div>
                                        <div class="tab-pane fade" id="tab_1_2">
                                            <?php
                                               echo $this->render('_account_edit_photo', [
                                                 'model' => $model
                                                ]); ?>
                                        </div>
                                        <div class="tab-pane fade" id="tab_1_3">
                                            <?php
                                            echo $this->render('_account_edit_soc', [
                                                'model' => $model
                                            ]); ?>
                                        </div>
                                    </div>
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