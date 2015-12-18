<?php
use kartik\grid\GridView;
use app\models\Users;
use yii\data\ActiveDataProvider;

$this->registerJsFile('/mertonic/global/scripts/app_acc.js');

$js =<<<'SCRIPT'
$(document).ready(function() {
    $('#sample_1').DataTable();
} );
SCRIPT;

$this->registerJsFile('/mertonic/pages/scripts/dashboard.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/layouts/layout4/scripts/layout.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/layouts/layout4/scripts/demo.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/layouts/global/scripts/quick-sidebar.js', ['depends' => 'yii\web\JqueryAsset']);

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

.yellow{
  width: 18px;
  height: 18px;
  border-radius: 50% !important;
  background-color: yellow;
  border: 0px;
}

.green{
  width: 18px;
  height: 18px;
  border-radius: 50% !important;
  background-color: green;
  border: 0px;
}

.pagination {
  display: none;
}
STYLE;
$this->registerCss($css);
$this->title = 'Последние 10 зарегестрированных пользователей';

?>

<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-blue-sharp">
                    <i class="icon-users font-blue-sharp"></i>
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
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">?</button>
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
                <?php echo GridView::widget([
                    'dataProvider'  => $dataProvider,
                    //'filterModel' => $searchModel,
                    'summary'   =>  '<div>Показаны записи {begin} - {end} из {totalCount}</div>',
                    'emptyText' => 'Еще нет кандидатов в команде',
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
                            'class' => 'kartik\grid\ExpandRowColumn',
                            'value' => function ($model, $key, $index, $column) {
                                return GridView::ROW_COLLAPSED;
                            },
                            'detail' => function ($model, $key, $index, $column) {

                                $array=(new \yii\db\Query())->select('u.id AS id')
                                    ->from([Users::tableName().' u'])
                                    ->where(['u.ref'=>$model["refdt"]])->all();
                                $arr=array();
                                for($i=0;$i<sizeof($array);$i++){
                                    $arr[]=$array[$i]["id"];
                                }
                                $dataProvider= new ActiveDataProvider([
                                    'query' =>
                                        (new \yii\db\Query())->select
                                        ([
                                            "IF (`active`<DATE_SUB(NOW(), INTERVAL 10 DAY),'yellow', 'green') AS `status`",
                                            'u.fn AS fn',
                                            'u.ln AS ln',
                                            'l.title AS title',
                                            'u.userpic AS userpic',
                                            'u.country AS country',
                                            'u.mobile AS mobile',
                                            'u.skype AS skype',
                                            'u.email AS email',
                                            'u.vkontakte AS vkontakte',
                                            'u.active AS active'
                                        ])
                                            ->from([Users::tableName().' u'])
                                            ->innerJoin(\app\models\Levels::tableName().' l','l.id = u.level')
                                            ->where(['u.id'=>$arr])
                                ]);
                                return Yii::$app->controller->renderPartial('_team_items', [
                                    //'searchModel' => $searchModel,
                                    'dataProvider' => $dataProvider,
                                ]);
                            },
                        ],
                        [
                            //'header'     =>  'Вход',
                            'label'     =>  'Вход',
                            'attribute' =>  'active',
                            'format' => 'raw',
                            'options' => ['style' => 'width: 100px; max-width: 100px;'],
                            'value'  =>  function($dt)
                            {
                                return "<div class='{$dt["status"]}'></div>".$dt["active"];
                            }
                        ],
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
                    ],
                    //'pjax'=>true,
                    /*             'exportConfig' => [
                                     GridView::CSV => [
                                         $pdf
                                     ],
                                 ]*/
                ]);
                ?>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
<!-- END PAGE BASE CONTENT -->