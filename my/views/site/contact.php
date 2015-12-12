<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>

<br><br><br><br><br>


<link href="https://hostpro.ua/wp-content/themes/hostpro/assets/css/style.css" rel="stylesheet">

<section id="section2" data-scen-id="0" class="builder-section no-padding bg-img ng-touched ng-dirty-parse" style="cursor: text; background: url(&quot;https://hostpro.ua/wp-content/themes/hostpro/assets/photo/vps-bg.jpg&quot;) 50% 50% no-repeat;" ng-mouseup="deTextCustomize()">
    <div class="wrap">
        <div class="white-block">
            <h3>Есть вопросы?</h3>
            <p>Обращайтесь в техподдержку</p>
            <p>с 10:00 до 20:00</p>
            <span class="phone">(067) 233-67-55</span>
            <span class="phone">support@1-mlm.com</span>
            <div><a class="skype" href="skype:support.mlm?chat" style="" data-edit-now="false">support.mlm</a></div>
            <br></div>
    </div>
</section>





<!--<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            Thank you for contacting us. We will respond to you as soon as possible.
        </div>

        <p>
            Note that if you turn on the Yii debugger, you should be able
            to view the mail message on the mail panel of the debugger.
            <?php if (Yii::$app->mailer->useFileTransport): ?>
                Because the application is in development mode, the email is not sent but saved as
                a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                application component to be false to enable email sending.
            <?php endif; ?>
        </p>

    <?php else: ?>

        <p>
            If you have business inquiries or other questions, please fill out the following form to contact us.
            Thank you.
        </p>

        <div class="row">
            <div class="col-lg-5">

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                    <?= $form->field($model, 'name') ?>
                    <?= $form->field($model, 'email') ?>
                    <?= $form->field($model, 'subject') ?>
                    <?= $form->field($model, 'body')->textArea(['rows' => 6]) ?>
                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div>
                        <div class="col-lg-6">{input}</div></div>',
                    ]) ?>
                    <div class="form-group">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>
                <?php ActiveForm::end(); ?>

            </div>
        </div>

    <?php endif; ?>
</div>-->
