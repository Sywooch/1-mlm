<?php
use yii\grid\GridView;
use yii\grid\ActionColumn;

$identity = \Yii::$app->getUser()->getIdentity()->profile;
$usrDt = \app\models\Users::find()->select('fn,ln,userpic')
    ->where(['socid' => $identity["id"]])
    ->andWhere(['service' => $identity["service"]])
    ->one();

$this->registerJsFile('/my/web/mertonic/global/scripts/app.js');

$this->registerJsFile('/my/web/mertonic/pages/scripts/dashboard.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/my/web/mertonic/layouts/layout4/scripts/layout.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/my/web/mertonic/layouts/layout4/scripts/demo.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/my/web/mertonic/layouts/global/scripts/quick-sidebar.js', ['depends' => 'yii\web\JqueryAsset']);

$css = <<<'STYLE'
.tbl-header *
{
    text-align: center;
}
STYLE;
$this->registerCss($css);

$this->title = 'profile';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- BEGIN PAGE BASE CONTENT -->
<div class="row">
    <div class="col-md-12">
        <div class="note note-info">
            <h4 class="block">Ваша 1-я линия</h4>
            <p> Для поиска по имени или фамилии используете сочетание клавиш на клавиатуре: Ctrl+F </p>
        </div>
        <?php echo GridView::widget([
            'dataProvider'  =>  $dataProvider,
            'tableOptions'  =>  [
                'class'     =>  'table table-stripped table-hover block-center'
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
                    'label'     =>  'Имя'
                ],
                [
                    'attribute' =>  'ln',
                    'label'     =>  'Фамилия'
                ],
                [
                    'attribute' =>  'city',
                    'label'     =>  'Город'
                ],
                [
                    'header' => 'Действия',
                    'format' => 'raw',
                    'value'  =>  function($model)
                    {
                        return $this->render('_team_edit', [
                            'model' => $model
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
<!-- END PAGE BASE CONTENT -->