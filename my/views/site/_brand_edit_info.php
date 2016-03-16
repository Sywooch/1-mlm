<?php
use yii\widgets\ActiveForm;

$form = ActiveForm::begin([
    'action'=>\yii\helpers\BaseUrl::toRoute(['brand/brand']),
    'options' => ['class'=>'form-horizontal']
]);?>






    <div class="form-group form-md-line-input">
        <?php echo $this->render('_account_edit_companies', [
            'form' => $form,
            'model' => $model
        ]);?>
    </div>

    <div class="form-group form-md-line-input">
        <?php echo $this->render('_account_company_link', [
            'form' => $form
        ]);?>
    </div>

    <div class="form-group form-md-line-input">
        <label class='col-md-4 control-label'>Ссылка на лендинг</label>
        <div class='col-md-8'>

        <div class="input-group">
            <input type="text"
                   value="<?= "http://1-mlm.com/{$model->companyid}-{$model->refdt}.html"; ?>"
                   class="form-control" />
            <span class="input-group-btn">
                <button class="btn blue" onclick="window.location='<?php
                echo "http://1-mlm.com/{$model->companyid}-{$model->refdt}.html";
                ?>';target='_blank';" type="button">Go!</button>
            </span>
        </div>

        </div>
    </div>

    <div class="form-group form-md-line-input">
    <label class='col-md-4 control-label'>Ваш сайт</label>
    <div class='col-md-8'>
        <div class="input-icon">
            <!--<i class="icon-user"></i>-->
            <input
                class="form-control"
                name="Users[site]" value="<?= $model->site; ?>" type="text">
            <div class="form-control-focus"></div>
            <span class="help-block">Ваша адрес Вашего сайта</span>

        </div>
    </div>
</div>

    <div class="form-group form-md-line-input">
        <label class='col-md-4 control-label'>Ваш playlistId</label>
        <div class='col-md-8'>
            <div class="input-icon">
                <!--<i class="icon-user"></i>-->
                <input
                    class="form-control"
                    name="Users[playlistId]" value="<?= $model->playlistId; ?>" type="text">
                <div class="form-control-focus"></div>
                <span class="help-block">Ваш playlistId</span>

            </div>
        </div>
    </div>

<br>
    <div class="margiv-top-10">
        <?= '<button class="btn green"> Сохранить изменения </button>'; ?>
        <a href="index.php?r=site%2Faccount" class="btn default"> Отменить </a>
    </div>
<?php $form->end(); ?>