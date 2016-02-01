<?php $form = yii\widgets\ActiveForm::begin();?>

<?= \yii\helpers\Html::hiddenInput('cameoff[type]', 'yes', ["id"=>"cameoff-type"]); ?>
<?= '<button class="btn green"> Подписаться </button>'; ?>

<?php $form->end(); ?>
