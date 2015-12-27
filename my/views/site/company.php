<?php
use yii\widgets\ActiveForm;
$this->title = 'Компания';
$this->registerJsFile('/mertonic/global/scripts/app_acc.js');
$this->registerJsFile('/mertonic/pages/scripts/dashboard.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/layouts/layout4/scripts/layout.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/layouts/layout4/scripts/demo.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/layouts/global/scripts/quick-sidebar.js', ['depends' => 'yii\web\JqueryAsset']);
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
                <div class="actions">
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
                <div class="tools"> </div>
            </div>
            <div class="portlet-body">
                <div class="row">
                    <div class="col-md-8">
                        <div class="embed-responsive embed-responsive-16by9">
                            <div align="center">
                                <iframe src="https://www.youtube.com/embed/<?=$model['yt2']; ?>"
                                        title="YouTube video player"
                                        allowfullscreen="1"
                                        id="player"
                                        frameborder="0"
                                        height="360"
                                        width="640"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <h3> <?=$model['name'];?> </h3>
                        </div>
                        <div class="form-group">
                            <?= $model['desc']; ?>
                        </div>
                        <hr style="50%">
                        <div class="form-group">
                            <h4>Вы сделали правильный выбор!</h4>
                                <?php
                                if( !empty($company_link) ):
                                ?>
                                Регистрация в Компанию
                                <!-- <a href="<?=$company_link;?>">Регистрация в Компанию</a>-->

                                    <button class="btn blue" onclick="window.location='<?= $company_link; ?>';
                                    target='_blank';" type="button">&gt;&gt;&gt;</button>
                                <?php
                                endif;
                                ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
