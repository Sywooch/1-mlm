<?php
use yii\widgets\ActiveForm;
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
$this->title = 'Мои Проекты';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-trophy font-blue-sharp"></i>
            <span class="caption-subject font-blue-sharp"><?= $this->title; ?></span>
        </div>
        <!-- Кнопка видео подсказки и во всю ширину --->
        <div class="actions">
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
        </div>
        <!-- Кнопка видео подсказки и во всю ширину --->
    </div>
    <div class="portlet-body">
        <?php
        $form = ActiveForm::begin([
            'options' => ['class'=>'form-horizontal']
        ]);?>

        <div class="row">
            <div class="col-md-12">

                <div class="form-group form-md-line-input">
                    <label class="col-md-3 control-label">Имя проекта</label>
                    <div class="col-md-9">
                        <input type="text" name="title" class="form-control"
                            value="<?= @$linkDt->title; ?>">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <div class="form-group form-md-line-input">
                    <label class="col-md-3 control-label">Ссылка</label>
                    <div class="col-md-9">
                        <input type="text" name="url" class="form-control"
                               value="<?= @$linkDt->url; ?>">
                    </div>
                </div>
            </div>
        </div>

    <?php if(empty(Yii::$app->request->get("linkid"))): ?>
        <input name="link" value="new" type="hidden">
<?php
        else:
?>
        <input name="link" value="edit" type="hidden">
        <input name="linkid" value="<?= Yii::$app->request->get("linkid"); ?>" type="hidden">
    <?php endif; ?>

        <button type="submit" class="btn btn-danger waves-effect waves-effect" name="save" style="float: right;">ДОБАВИТЬ ПРОЕКТ</button>

        <?php $form->end(); ?>
        <div style="clear: both;"></div>
        <div class="table-responsive">
            <?= GridView::widget([
                'dataProvider'  =>  $dataProvider,
                'tableOptions'  =>  [
                    'class'     =>  'table'
                ],
                'rowOptions'   =>  [
                    'style'    =>  'text-align: center; background-color:'
                ],
                'headerRowOptions'   =>  [
                    'class'     =>  'tbl-header'
                ],
                'summary'   =>  '<div>Показаны записи {begin} - {end} из {totalCount}</div>',
                'columns' =>
                [
                    ['class' => 'yii\grid\SerialColumn'],
                    [
                        'attribute' => 'title',
                        'label' => 'Название'
                    ],
                    [
                        'header' => 'Ссылка на страницу',
                        'format' => 'raw',
                        'value' => function($modal)
                        {
                            return '<a href=\''.$modal["url"].'\' target="_blank">'.$modal["url"].'</a>';
                        }
                    ],
                    [
                        'header' => 'Редактировать',
                        'format' => 'raw',
                        'value' => function($modal)
                        {
                            return "<a href='/index.php?r=links%2Faddproject&linkid={$modal["id"]}'>редактировать</a>";
                        }
                    ]
                ]
            ]);
            ?>
        </div>
    </div>
</div>






<!-- конец страницы-->