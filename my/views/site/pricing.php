<?php

$this->registerJsFile('/mertonic/global/scripts/app.js');
$this->registerJsFile('/mertonic/pages/scripts/dashboard.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/layouts/layout4/scripts/layout.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/layouts/layout4/scripts/demo.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/layouts/global/scripts/quick-sidebar.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerCssFile('/mertonic/pages/css/pricing.min.css');

$this->title = 'pricing';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- BEGIN PAGE BASE CONTENT -->
<div class="portlet light portlet-fit bordered">
    <div class="portlet-title">
        <div class="caption">
            <span class="caption-subject font-green bold uppercase">Тарифы пакетов доступа</span>
        </div>
    </div>
    <div class="portlet-body">
        <div class="pricing-content-1">
            <div class="row">
                <div class="col-md-3">
                    <div class="price-column-container border-active">
                        <div class="price-table-head bg-blue">
                            <h2 class="no-margin">Новичек</h2>
                        </div>
                        <div class="arrow-down border-top-blue"></div>
                        <div class="price-table-pricing">
                            <h3>
                                2<span class="price-sign">&nbsp;$</span></h3>
                            <p>в месяц</p>
                        </div>
                        <div class="price-table-content">
                            <div class="row mobile-padding">
                                <div class="col-xs-3 text-right mobile-padding">
                                    <i class="icon-user"></i>
                                </div>
                                <div class="col-xs-9 text-left mobile-padding">1 Страница</div>
                            </div>
                            <div class="row mobile-padding">
                                <div class="col-xs-3 text-right mobile-padding">
                                    <i class="icon-drawer"></i>
                                </div>
                                <div class="col-xs-9 text-left mobile-padding">50GB Storage</div>
                            </div>
                            <div class="row mobile-padding">
                                <div class="col-xs-3 text-right mobile-padding">
                                    <i class="icon-screen-smartphone"></i>
                                </div>
                                <div class="col-xs-9 text-left mobile-padding">Single Device</div>
                            </div>
                            <div class="row mobile-padding">
                                <div class="col-xs-3 text-right mobile-padding">
                                    <i class="icon-refresh"></i>
                                </div>
                                <div class="col-xs-9 text-left mobile-padding">Weekly Backups</div>
                            </div>
                        </div>
                        <div class="arrow-down arrow-grey"></div>
                        <div class="price-table-footer">
                            <button type="button" class="btn grey-salsa btn-outline sbold uppercase price-button">Выбрать</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="price-column-container border-active">
                        <div class="price-table-head bg-red">
                            <h2 class="no-margin">Мастер</h2>
                        </div>
                        <div class="arrow-down border-top-red"></div>
                        <div class="price-table-pricing">
                            <h3>
                                10<span class="price-sign">&nbsp;$</span></h3>
                            <p>в месяц</p>
                        </div>
                        <div class="price-table-content">
                            <div class="row mobile-padding">
                                <div class="col-xs-3 text-right mobile-padding">
                                    <i class="icon-user"></i>
                                </div>
                                <div class="col-xs-9 text-left mobile-padding">3 Страница</div>
                            </div>
                            <div class="row mobile-padding">
                                <div class="col-xs-3 text-right mobile-padding">
                                    <i class="icon-drawer"></i>
                                </div>
                                <div class="col-xs-9 text-left mobile-padding">100GB Storage</div>
                            </div>
                            <div class="row mobile-padding">
                                <div class="col-xs-3 text-right mobile-padding">
                                    <i class="icon-screen-smartphone"></i>
                                </div>
                                <div class="col-xs-9 text-left mobile-padding">Single Device</div>
                            </div>
                            <div class="row mobile-padding">
                                <div class="col-xs-3 text-right mobile-padding">
                                    <i class="icon-refresh"></i>
                                </div>
                                <div class="col-xs-9 text-left mobile-padding">Weekly Backups</div>
                            </div>
                        </div>
                        <div class="arrow-down arrow-grey"></div>
                        <div class="price-table-footer">
                            <button type="button" class="btn grey-salsa btn-outline price-button sbold uppercase">Выбрать</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="price-column-container border-active">
                        <div class="price-table-head bg-green">
                            <h2 class="no-margin">Лидер</h2>
                        </div>
                        <div class="arrow-down border-top-green"></div>
                        <div class="price-table-pricing">
                            <h3>
                                25<span class="price-sign">$</span></h3>
                            <p>в месяц</p>
                            <div class="price-ribbon">Popular</div>
                        </div>
                        <div class="price-table-content">
                            <div class="row mobile-padding">
                                <div class="col-xs-3 text-right mobile-padding">
                                    <i class="icon-user-follow"></i>
                                </div>
                                <div class="col-xs-9 text-left mobile-padding">10 Страниц</div>
                            </div>
                            <div class="row mobile-padding">
                                <div class="col-xs-3 text-right mobile-padding">
                                    <i class="icon-drawer"></i>
                                </div>
                                <div class="col-xs-9 text-left mobile-padding">500GB Storage</div>
                            </div>
                            <div class="row mobile-padding">
                                <div class="col-xs-3 text-right mobile-padding">
                                    <i class="icon-cloud-download"></i>
                                </div>
                                <div class="col-xs-9 text-left mobile-padding">Cloud Syncing</div>
                            </div>
                            <div class="row mobile-padding">
                                <div class="col-xs-3 text-right mobile-padding">
                                    <i class="icon-refresh"></i>
                                </div>
                                <div class="col-xs-9 text-left mobile-padding">Daily Backups</div>
                            </div>
                        </div>
                        <div class="arrow-down arrow-grey"></div>
                        <div class="price-table-footer">
                            <button type="button" class="btn green price-button sbold uppercase">Выбрать</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="price-column-container border-active">
                        <div class="price-table-head bg-purple">
                            <h2 class="no-margin">Профисионал</h2>
                        </div>
                        <div class="arrow-down border-top-purple"></div>
                        <div class="price-table-pricing">
                            <h3>
                                50<span class="price-sign">&nbsp;$</span></h3>
                            <p>в месяц</p>
                        </div>
                        <div class="price-table-content">
                            <div class="row mobile-padding">
                                <div class="col-xs-3 text-right mobile-padding">
                                    <i class="icon-users"></i>
                                </div>
                                <div class="col-xs-9 text-left mobile-padding">25 Страниц</div>
                            </div>
                            <div class="row mobile-padding">
                                <div class="col-xs-3 text-right mobile-padding">
                                    <i class="icon-drawer"></i>
                                </div>
                                <div class="col-xs-9 text-left mobile-padding">2TB Storage</div>
                            </div>
                            <div class="row mobile-padding">
                                <div class="col-xs-3 text-right mobile-padding">
                                    <i class="icon-cloud-download"></i>
                                </div>
                                <div class="col-xs-9 text-left mobile-padding">Cloud Syncing</div>
                            </div>
                            <div class="row mobile-padding">
                                <div class="col-xs-3 text-right mobile-padding">
                                    <i class="icon-refresh"></i>
                                </div>
                                <div class="col-xs-9 text-left mobile-padding">Weekly Backups</div>
                            </div>
                        </div>
                        <div class="arrow-down arrow-grey"></div>
                        <div class="price-table-footer">
                            <button type="button" class="btn grey-salsa btn-outline price-button sbold uppercase">Выбрать</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END PAGE BASE CONTENT -->