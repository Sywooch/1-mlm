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

<div class="caption">
    <i class="fa fa-cogs font-green-sharp"></i>
    <span class="caption-subject font-green-sharp bold uppercase">Вашы страницы</span>
</div>
<div align="right">
    <!---------------------------------------------------------->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#w1help"><i class="icon-cloud-upload"></i></button>
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