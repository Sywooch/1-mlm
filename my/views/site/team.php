<?php
use yii\grid\GridView;
use yii\grid\ActionColumn;

$identity = \Yii::$app->getUser()->getIdentity()->profile;
$usrDt = \app\models\Users::find()->select('fn,ln,userpic')
    ->where(['socid' => $identity["id"]])
    ->andWhere(['service' => $identity["service"]])
    ->one();

$this->registerJsFile('/mertonic/global/scripts/app.js');

$js =<<<'SCRIPT'
$(document).ready(function() {
    $('#sample_1').DataTable();
} );
SCRIPT;

$this->registerJsFile('/mertonic/pages/scripts/dashboard.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/layouts/layout4/scripts/layout.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/layouts/layout4/scripts/demo.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/layouts/global/scripts/quick-sidebar.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/metronic/theme/assets/global/scripts/datatable.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/metronic/theme/assets/global/plugins/datatables/datatables.min.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/metronic/theme/assets/global/plugins/adtatable/plugins/bootstrap/datatables.bootstrap.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJs($js);
$css = <<<'STYLE'
.tbl-header *
{
    text-align: center;
    height: 25px !important;
}

.dt-buttons {
    margin-top: 0px !important;
    float: left !important;
    margin-right: 20px;
}
STYLE;
$this->registerCss($css);
$this->registerCssFile('/metronic/theme/assets/global/plugins/datatables/datatables.min.css');
$this->registerCssFile('/metronic/theme/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css');

$this->title = 'profile';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- BEGIN PAGE BASE CONTENT -->
<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="note note-info">
                <h4 class="block">Ваша 1-я линия</h4>
                <p> Для поиска по имени или фамилии используете сочетание клавиш на клавиатуре: Ctrl+F </p>
            </div>
        <?php echo GridView::widget([
            'dataProvider'  =>  $dataProvider,
            'tableOptions'  =>  [
                'class'     =>  'table table-striped table-bordered table-hover',
                'id' => 'sample_1'
            ],
            'rowOptions'   =>  [
                'style'    =>  'text-align: center; background-color:'
            ],
            'headerRowOptions'   =>  [
                'class'     =>  'tbl-header'
            ],
            /*'responsive'    =>  true,*/
            'summary'   =>  '<div>Показаны записи {begin} - {end} из {totalCount}</div>',
            'columns'   => [
            /*    [
                    'attribute' =>  'date',
                    'label'     =>  'Дата',
                    'width'     =>  '300px',
                    'value'     =>  function($model){
                        return date( "Y-m-d \n H:i", strtotime($model->date) );
                    }
                ],
            */
                [
                    'attribute' =>  'fn',
                    'label'     =>  'Имя',
                    'options' => ['style' => 'width: 220px; max-width: 220px;']
                ],
                [
                    'attribute' =>  'ln',
                    'label'     =>  'Фамилия',
                    'options' => ['style' => 'width: 220px; max-width: 220px;']
                ],
                /*[
                    'attribute' =>  'city',
                    'label'     =>  'Город'
                ],*/
                [
                    'attribute' =>  'title',
                    'label'     =>  'Уровень'
                ],
                [
                    'header' => 'Действия',
                    'format' => 'raw',
                    'options' => ['style' => 'width: 100px; max-width: 100px;'],
                    'value'  =>  function($dataProvider)
                    {
                        return $this->render('_team_edit', [
                            'dt' => $dataProvider
                        ]);
                    }
                    /*'class'     =>  ActionColumn::className(),*/
                    /*'width'     =>  '300px',*/
                   /* 'buttons'   => [
                        'edit'=>function($model)
                        {
                            return $this->render('_team_edit', [
                                'model' => $model
                            ]);
                        }
                    ],*/
                    /*'template'    =>  '<div class="btn-group">{hidden}&nbsp;&nbsp;{edit}</div>'*/
                ]

            ]
        ]);
        ?>
        </div>
    </div>
</div>
<!-- END PAGE BASE CONTENT -->

<!-- BEGIN NEW CONTENT -->
<!--<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-body">
                <div class="dataTables_wrapper no-footer" id="sample_1_wrapper">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                                <div id="sample_1_length" class="dataTables_length">
                                    <label>
                                        <select class="form-control input-sm input-xsmall input-inline" aria-controls="sample_1" name="sample_1_length">
                                            <option value="5">5</option>
                                            <option value="10">10</option>
                                            <option value="15">15</option>
                                            <option value="20">20</option>
                                            <option value="-1">All</option>
                                        </select> entries
                                    </label>
                                </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="dt-buttons">
                                <a aria-controls="sample_1" tabindex="0" class="dt-button buttons-excel buttons-flash btn yellow btn-outline">
                                    <span>Excel</span>
                                    <div style="position: absolute; left: 0px; top: 0px; width: 56px; height: 32px; z-index: 99;">
                                        <embed id="ZeroClipboard_TableToolsMovie_2" src="//cdn.datatables.net/buttons/1.0.0/swf/flashExport.swf" loop="false" menu="false" quality="best" bgcolor="#ffffff" name="ZeroClipboard_TableToolsMovie_2" allowscriptaccess="always" allowfullscreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="id=2&amp;width=56&amp;height=32" wmode="transparent" align="middle" height="32" width="56">
                                    </div>
                                </a>
                                <a aria-controls="sample_1" tabindex="0" class="dt-button buttons-pdf buttons-html5 btn green btn-outline">
                                    <span>PDF</span>
                                </a>
                                <a aria-controls="sample_1" tabindex="0" class="dt-button buttons-print btn dark btn-outline">
                                    <span>Print</span>
                                </a>
                            </div>
                            <div class="dataTables_filter" id="sample_1_filter">
                                <label>
                                    Search:<input aria-controls="sample_1" placeholder="" class="form-control input-sm input-small input-inline" type="search">
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="table-scrollable">
                        <table class="table table-striped table-bordered table-hover" id="sample_2">
                            <thead>
                            <tr>
                                <th> Id </th>
                                <th> Имя </th>
                                <th> Фамилия </th>
                                <th> Уровень </th>
                                <th> Страна и город </th>
                                <th> Контакты </th>
                                <th> Опции </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td> 1 </td>
                                <td> Алекандр </td>
                                <td> Цыбулевсий </td>
                                <td> Новичок </td>
                                <td> Украина, Киев </td>
                                <td> Конт. </td>
                                <td> Опц. </td>
                            </tr>
                            <tr>
                                <td> 2 </td>
                                <td> Dilbar </td>
                                <td> Isakova </td>
                                <td> Новичок </td>
                                <td> Украина, Киев </td>
                                <td> Конт. </td>
                                <td> Опц. </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>-->
<!-- END CONTENT -->