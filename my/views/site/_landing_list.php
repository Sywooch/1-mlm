<?php
use yii\widgets\ActiveForm;
use yii\Helpers\ArrayHelper;

$form = ActiveForm::begin();
$params = [
    'prompt' => '-выберите из списка-'
];

$youcomp=array();

$lendList = ArrayHelper::map($model->all(),'id','name');
if( sizeof($youcomp)<1  )
{$youcomp=['0'=>'Создать страницу'];}
$items=[
    'Создание'=>$youcomp,
    'Редактирование'=>$lendList
];

echo $form->field( $model->one(), 'id',
["template" => "<label>Ваши странички</label>\n{input}\n{hint}\n{error}"] )
    ->dropDownList($items,$params);
?>

<input id="users-formtype" name="List" value="change" type="hidden">

<?php $form->end(); ?>
</div>
</div>