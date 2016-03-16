<?php
$this->title = 'Создайте Мне блог';
$this->registerJsFile('//1-mlm.com/mlm-template/global/scripts/app_acc.js');
$this->registerJsFile('//1-mlm.com/mlm-template/pages/scripts/dashboard.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('//1-mlm.com/mlm-template/layouts/layout4/scripts/layout.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('//1-mlm.com/mlm-template/layouts/layout4/scripts/demo.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('//1-mlm.com/mlm-template/layouts/global/scripts/quick-sidebar.js', ['depends' => 'yii\web\JqueryAsset']);
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
                <h3>Вы настоящий предприниматель!</h3>
                <h4>Вы цените свое время и делигируте свои задачи специалистам в нужной Вам отрасли.</h4>
                <p>Отправьте нам заявку на создание блога с Вами свяжется менеджер по работе с клиентами</p>
<p>Сроки изготовления вашего блога - 3 рабочих дня с момента получения брифа на сайт.</p>
                        </div>
                    </div>
                   
        </div></div>
                     
<!-- Конец страницы -->