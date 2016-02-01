<?php $form = yii\widgets\ActiveForm::begin();?>

<?= \yii\helpers\Html::hiddenInput('cameoff[type]', 'no', ["id"=>"cameoff-type"]); ?>
<?= '<button class="btn green"> Отписаться </button>'; ?>

<?php $form->end(); ?>
