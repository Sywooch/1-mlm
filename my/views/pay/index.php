<?php

$this->registerJsFile('/mertonic/global/scripts/app.js');
$this->registerJsFile('/mertonic/pages/scripts/dashboard.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/layouts/layout4/scripts/layout.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/layouts/layout4/scripts/demo.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/layouts/global/scripts/quick-sidebar.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerCssFile('/mertonic/pages/css/pricing.min.css');

$this->title = 'Выбор тарифа';
$this->params['breadcrumbs'][] = $this->title;
?>
    <!-- BEGIN PAGE BASE CONTENT -->
    <div class="portlet light portlet-fit bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-cogs font-green-sharp"></i>
                <span class="caption-subject font-green-sharp uppercase"><?= $this->title; ?></span>
            </div>
            <div align="right">
                <!---------------------------------------------------------->
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
                <!------------------------------------------------------------>
            </div>
        </div>
        <div><p align="center" style="font-size: 18px;">
                Ваш  текущий тарифный план - ... <br /></p></div>
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
                                    <small><strike style="color: #959695; font-size: 23px;">2$</strike></small> 0<span class="price-sign">&nbsp;$</span></h3>
                                <p>в месяц</p>
                            </div>
                            <div class="price-table-content">
                                <div class="row mobile-padding">
                                    <div class="col-xs-3 text-right mobile-padding">
                                        <i class="icon-rocket"></i>
                                    </div>
                                    <div class="col-xs-9 text-left mobile-padding"> Страница - 1 </div>
                                </div>
                                <div class="row mobile-padding">
                                    <div class="col-xs-3 text-right mobile-padding">
                                        <i class="icon-briefcase"></i>
                                    </div>
                                    <div class="col-xs-9 text-left mobile-padding"> Компания - 1 </div>
                                </div>
                                <div class="row mobile-padding">
                                    <div class="col-xs-3 text-right mobile-padding">
                                        <i class="icon-magnet"></i>
                                    </div>
                                    <div class="col-xs-9 text-left mobile-padding"> Мастер Класс - 0 </div>
                                </div>
                                <div class="row mobile-padding">
                                    <div class="col-xs-3 text-right mobile-padding">
                                        <i class="icon-close"></i>
                                    </div>
                                    <div class="col-xs-9 text-left mobile-padding"> Партнерка - нет </div>
                                </div>
                                <div class="row mobile-padding">
                                    <div class="col-xs-3 text-right mobile-padding">
                                        <i class="icon-close"></i>
                                    </div>
                                    <div class="col-xs-9 text-left mobile-padding"> Поддержка - нет </div>
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
                                    <small><strike style="color: #959695; font-size: 23px;">10$</strike></small> 2<span class="price-sign">&nbsp;$</span></h3>
                                <p>в месяц</p>
                            </div>
                            <div class="price-table-content">
                                <div class="row mobile-padding">
                                    <div class="col-xs-3 text-right mobile-padding">
                                        <i class="icon-rocket"></i>
                                    </div>
                                    <div class="col-xs-9 text-left mobile-padding"> Страниц - 3 </div>
                                </div>
                                <div class="row mobile-padding">
                                    <div class="col-xs-3 text-right mobile-padding">
                                        <i class="icon-briefcase"></i>
                                    </div>
                                    <div class="col-xs-9 text-left mobile-padding"> Компания - 3 </div>
                                </div>
                                <div class="row mobile-padding">
                                    <div class="col-xs-3 text-right mobile-padding">
                                        <i class="icon-magnet"></i>
                                    </div>
                                    <div class="col-xs-9 text-left mobile-padding"> Мастер Класс - да </div>
                                </div>
                                <div class="row mobile-padding">
                                    <div class="col-xs-3 text-right mobile-padding">
                                        <i class="icon-wallet"></i>
                                    </div>
                                    <div class="col-xs-9 text-left mobile-padding"> Партнерка - да </div>
                                </div>
                                <div class="row mobile-padding">
                                    <div class="col-xs-3 text-right mobile-padding">
                                        <i class="icon-envelope-letter"></i>
                                    </div>
                                    <div class="col-xs-9 text-left mobile-padding"> Поддержка - e-mail </div>
                                </div>
                            </div>
                            <div class="arrow-down arrow-grey"></div>
                            <div class="price-table-footer">

                                <form id="" action="https://www.liqpay.com/api/checkout" method="post" accept-charset="utf-8">
                                    <?= $btn2; ?>
                                    <button type="submit" class="btn grey-salsa btn-outline price-button sbold uppercase">
                                        Выбрать</button>
                                </form>

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
                                    <small><strike style="color: #959695; font-size: 23px;">25$</strike></small> 10<span class="price-sign">$</span></h3>
                                <p>в месяц</p>
                                <div class="price-ribbon">Лучший</div>
                            </div>
                            <div class="price-table-content">
                                <div class="row mobile-padding">
                                    <div class="col-xs-3 text-right mobile-padding">
                                        <i class="icon-rocket"></i>
                                    </div>
                                    <div class="col-xs-9 text-left mobile-padding"> Страниц - 10 </div>
                                </div>
                                <div class="row mobile-padding">
                                    <div class="col-xs-3 text-right mobile-padding">
                                        <i class="icon-briefcase"></i>
                                    </div>
                                    <div class="col-xs-9 text-left mobile-padding"> Компания - 10 </div>
                                </div>
                                <div class="row mobile-padding">
                                    <div class="col-xs-3 text-right mobile-padding">
                                        <i class="icon-magnet"></i>
                                    </div>
                                    <div class="col-xs-9 text-left mobile-padding"> Мастер Класс - да </div>
                                </div>
                                <div class="row mobile-padding">
                                    <div class="col-xs-3 text-right mobile-padding">
                                        <i class="icon-wallet"></i>
                                    </div>
                                    <div class="col-xs-9 text-left mobile-padding"> Партнерка - да </div>
                                </div>
                                <div class="row mobile-padding">
                                    <div class="col-xs-3 text-right mobile-padding">
                                        <i class="icon-earphones-alt"></i>
                                    </div>
                                    <div class="col-xs-9 text-left mobile-padding"> Поддержка - skype </div>
                                </div>
                            </div>
                            <div class="arrow-down arrow-grey"></div>
                            <div class="price-table-footer">

                                <form id="" action="https://www.liqpay.com/api/checkout" method="post" accept-charset="utf-8">
                                    <?= $btn10; ?>
                                    <button type="submit" class="btn green price-button sbold uppercase">
                                        Выбрать</button>
                                </form>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="price-column-container border-active">
                            <div class="price-table-head bg-purple">
                                <h2 class="no-margin">Профи</h2>
                            </div>
                            <div class="arrow-down border-top-purple"></div>
                            <div class="price-table-pricing">
                                <h3>
                                    <small><strike style="color: #959695; font-size: 23px;">50$</strike></small>  25<span class="price-sign">&nbsp;$</span></h3>
                                <p>в месяц</p>
                            </div>
                            <div class="price-table-content">
                                <div class="row mobile-padding">
                                    <div class="col-xs-3 text-right mobile-padding">
                                        <i class="icon-rocket"></i>
                                    </div>
                                    <div class="col-xs-9 text-left mobile-padding"> Страниц - 25 </div>
                                </div>
                                <div class="row mobile-padding">
                                    <div class="col-xs-3 text-right mobile-padding">
                                        <i class="icon-briefcase"></i>
                                    </div>
                                    <div class="col-xs-9 text-left mobile-padding"> Компания - 25 </div>
                                </div>
                                <div class="row mobile-padding">
                                    <div class="col-xs-3 text-right mobile-padding">
                                        <i class="icon-magnet"></i>
                                    </div>
                                    <div class="col-xs-9 text-left mobile-padding"> Мастер Класс - да </div>
                                </div>
                                <div class="row mobile-padding">
                                    <div class="col-xs-3 text-right mobile-padding">
                                        <i class="icon-wallet"></i>
                                    </div>
                                    <div class="col-xs-9 text-left mobile-padding"> Партнерка - да </div>
                                </div>
                                <div class="row mobile-padding">
                                    <div class="col-xs-3 text-right mobile-padding">
                                        <i class="icon-earphones-alt"></i>
                                    </div>
                                    <div class="col-xs-9 text-left mobile-padding"> Поддержка - skype </div>
                                </div>
                            </div>
                            <div class="arrow-down arrow-grey"></div>
                            <div class="price-table-footer">
                                <form id="" action="https://www.liqpay.com/api/checkout" method="post" accept-charset="utf-8">
                                    <?= $btn25; ?>
                                    <button type="submit"
                                                           class="btn grey-salsa btn-outline price-button sbold uppercase">
                                        Выбрать</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div><p align="center"><span style="color: #F64747;">Внимание !!!</span> Все тарифы снижены до 31.12.2015</p></div>
    </div>
    <!-- END PAGE BASE CONTENT -->