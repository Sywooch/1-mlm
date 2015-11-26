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
$this->title = 'profile';
$this->params['breadcrumbs'][] = $this->title;
?>



<!-- BEGIN SAMPLE TABLE PORTLET-->
<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-cogs"></i>Вашы страницы
        </div>
        <div class="tools">
            <!-- Кнопка видео подсказки и во всю ширину --->
            <a class="btn-icon-only" data-toggle="modal" data-target="#w1help"  href="#w1help">
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
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th> # </th>
                    <th> Название </th>
                    <th> Ссылка на страницу </th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <td> 1 </td>
                    <td> Название 2 </td>
                    <td> Table cell </td>

                </tr>
                <tr>
                    <td> 2 </td>
                    <td> Название 3 </td>
                    <td> Table cell </td>

                </tr>
                <tr>
                    <td> 3 </td>
                    <td> Table cell </td>
                    <td> Table cell </td>
                 
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- END SAMPLE TABLE PORTLET-->




<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-cogs font-blue"></i>
                   <span class="caption-subject font-blue uppercase">Вашы страницы</span>
                </div>
<div align="right">
    <!-- Кнопка видео подсказки и во всю ширину --->
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
     <!-- Кнопка видео подсказки и во всю ширину --->
</div>
<div>
    <div class="col-md-12">
        <div class="portlet light bordered">
            <?= GridView::widget([
                'dataProvider'  =>  $dataProvider,
                'tableOptions'  =>  [
                    'class'     =>  'table table-striped table-bordered table-hover'
                ],
                'rowOptions'   =>  [
                    'style'    =>  'text-align: center; background-color:'
                ],
                'headerRowOptions'   =>  [
                    'class'     =>  'tbl-header'
                ],
                'columns' => [
                    [
                        'attribute' => 'name',
                        'label' => 'Название'
                    ],
                    [
                        'header' => 'Ссылка на страницу',
                        'format' => 'raw',
                        'value' => function($data) {
                            return '<a href=\'http://1-mlm.com/1/'.$data["id"].'.html\' target="_blank">http://1-mlm.com/1/'.$data["id"].'.html</a>';
                        }
                    ]
                ]
            ]);
            ?>
        </div>
    </div>
</div>
        </div></div></div>