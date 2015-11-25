<?php
use yii\widgets\ActiveForm;

$this->registerJsFile('/mertonic/global/scripts/app_acc.js');

$this->registerJsFile('/mertonic/pages/scripts/dashboard.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/layouts/layout4/scripts/layout.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/layouts/layout4/scripts/demo.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/layouts/global/scripts/quick-sidebar.js', ['depends' => 'yii\web\JqueryAsset']);
?>

<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <span class="caption-subject font-green-sharp bold uppercase">Компания</span>
                </div>
            </div>
            <div class="portlet-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="embed-responsive embed-responsive-16by9">
                            <div align="center">

                                <iframe src="https://www.youtube.com/embed/<?=$model['yt2'] ?>" title="YouTube video player" allowfullscreen="1" id="player" frameborder="0" height="360" width="640"></iframe>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <?php $form = ActiveForm::begin();?>
                        <div class="form-group">
                            <?php echo $form->field(
                                $model, 'name', ['template' => "<label>Название</label>\n{input}\n{hint}\n{error}" ]
                            )->textInput([
                                "readonly" => true
                            ]);
                            ?>
                        </div>
                        <div class="form-group">
                            <?php echo $form->field(
                                $model, 'desc', ['template' => "<label>Описание</label>\n{input}\n{hint}\n{error}" ]
                            )->textInput([
                                "readonly" => true
                            ]);
                            ?>
                        </div>
                        <div class="form-group">
                            <?php echo $form->field(
                                $model, 'id', ['template' => "<label>Ваша рефереальная ссылка</label>\n{input}\n{hint}\n{error}" ]
                            )->textInput([
                                "readonly" => true,
                                "value"=>'http://1-mlm.com/index.php?site/ref&refid='.$ref
                            ]);
                            ?>
                        </div>
                        <!--<div class="form-group">
                            <?php
                        /*echo $form->field(
                            $model, 'ref', [
                            "template" => "<label>Ваша рефереальная ссылка</label>
                            <div class=\"input-icon\">
                            <i class=\"icon-link\"></i>\n{input}\n{hint}\n{error}</div>"])
                            ->textInput([
                                "placeholder" => "Если продвигаете 1 компанию...",
                                "readonly" => true,
                                "class"=>"form-control",
                                "value"=>'http://1-mlm.com/index.php?site/ref&refid='.$model->refdt
                            ]); */?>
                        </div>-->

                        <?php $form->end(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>