<?php
use yii\grid\GridView;
use yii\grid\ActionColumn;
$this->registerJsFile('/mertonic/global/scripts/app.js');
$this->registerJsFile('/mertonic/pages/scripts/dashboard.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/layouts/layout4/scripts/layout.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/layouts/layout4/scripts/demo.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/layouts/global/scripts/quick-sidebar.js', ['depends' => 'yii\web\JqueryAsset']);
$css = <<<'STYLE'
.tbl-header *
{
    text-align: center;
    height: 25px !important;
}
STYLE;
$this->registerCss($css);
$this->title = 'Ваши страницы';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-cogs font-blue"></i>
            <span class="caption-subject font-green-sharp bold uppercase">Друзья VK</span>
        </div>
        <div class="tools">
            <!-- Кнопка видео подсказки и во всю ширину --->
            <a class="btn-circle btn-icon-only" data-toggle="modal" data-target="#w1help"  href="#w1help">
                <i class="icon-support"></i></a>
            <a class="btn-icon-only fullscreen" href="javascript:;"> </a>
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
            <!-- Кнопка видео подсказки и во всю ширину --->
        </div>
    </div>
    <div class="portlet-body">
        <div class="row" style="border-bottom: solid 1px rgb(218, 218, 218); padding: 25px;">
            <div class="col-md-2" style="text-align: center !important;">
                <img src="https://pp.vk.me/c624825/v624825515/2a003/tstMP1ib20M.jpg" class="img-responsive" alt="" style="border-radius: 50% !important;">
            </div>
            <div class="col-md-10">
                <h3>Гошан волкин</h3>
                <button class="btn green" data-toggle="modal" href="#basic"> Добавить в  друзья </button>
            </div>
        </div>
        <div class="row" style="border-bottom: solid 1px rgb(218, 218, 218); padding: 25px;">
            <div class="col-md-2" style="text-align: center !important;">
                <img src="https://pp.vk.me/c624825/v624825515/2a003/tstMP1ib20M.jpg" class="img-responsive" alt="" style="border-radius: 50% !important;">
            </div>
            <div class="col-md-10">
                <h3>Гошан волкин</h3>
                <button class="btn green" data-toggle="modal" href="#basic"> Добавить в  друзья </button>
            </div>
        </div>
        <div class="row" style="border-bottom: solid 1px rgb(218, 218, 218); padding: 25px;">
            <div class="col-md-2" style="text-align: center !important;">
                <img src="https://pp.vk.me/c624825/v624825515/2a003/tstMP1ib20M.jpg" class="img-responsive" alt="" style="border-radius: 50% !important;">
            </div>
            <div class="col-md-10">
                <h3>Гошан волкин</h3>
                <button class="btn green" data-toggle="modal" href="#basic"> Добавить в  друзья </button>
            </div>
        </div>
        <div class="row" style="border-bottom: solid 1px rgb(218, 218, 218); padding: 25px;">
            <div class="col-md-2" style="text-align: center !important;">
                <img src="https://pp.vk.me/c624825/v624825515/2a003/tstMP1ib20M.jpg" class="img-responsive" alt="" style="border-radius: 50% !important;">
            </div>
            <div class="col-md-10">
                <h3>Гошан волкин</h3>
                <button class="btn green" data-toggle="modal" href="#basic"> Добавить в  друзья </button>
            </div>
        </div>
        <div class="row" style="border-bottom: solid 1px rgb(218, 218, 218); padding: 25px;">
            <div class="col-md-2" style="text-align: center !important;">
                <img src="https://pp.vk.me/c624825/v624825515/2a003/tstMP1ib20M.jpg" class="img-responsive" alt="" style="border-radius: 50% !important;">
            </div>
            <div class="col-md-10">
                <h3>Гошан волкин</h3>
                <button class="btn green" data-toggle="modal" href="#basic"> Добавить в  друзья </button>
            </div>
        </div>
    </div>
</div>

<div style="display: none; padding-right: 17px;" class="modal fade" id="basic" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Modal Title</h4>
            </div>
            <div class="modal-body"> Modal body goes here </div>
            <div class="modal-footer">
                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                <button type="button" class="btn green">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
</div>