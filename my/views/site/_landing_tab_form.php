<?php
use yii\widgets\ActiveForm;
use kartik\widgets\ColorInput;
?>

<?php $form = ActiveForm::begin();?>

    <div class="row">
        <div class="col-md-6">

            <div class="form-group">
                <?= $form->field(
                    $lp, 'name', ['template' => "<label>Название</label>\n{input}\n{hint}\n{error}" ]
                )->textInput(['placeholder' => 'Текст заголовка']);
                ?>
            </div>

            <div class="form-group">
                <?= $form->field(
                    $lp, 'h1', ['template' => "<label>Заголовок №1</label>\n{input}\n{hint}\n{error}" ]
                )->textInput(['placeholder' => 'Текст заголовка']);
                ?>
            </div>
            <div class="form-group">
                <?= $form->field(
                    $lp, 'h2', ['template' => "<label>Заголовок №2</label>\n{input}\n{hint}\n{error}" ]
                )->textInput(['placeholder' => 'Текст заголовка']);
                ?>
            </div>
            <div class="form-group">
                <?=$form->field(
                    $lp, 'h3', ['template' => "<label>Заголовок №3</label>\n{input}\n{hint}\n{error}" ]
                )->textInput(['placeholder' => 'Текст заголовка']);
                ?>
            </div>
            <div class="form-group">
                <?=$form->field(
                    $lp, 'yt1', ['template' => "<label>Id ролика с Youtube</label>\n{input}\n{hint}\n{error}" ]
                )->textInput(['placeholder' => 'Вставьте id ролика']);
                ?>
            </div>
            <div class="form-group">
                <?=$form->field(
                    $lp, 'desc', ['template' => "<label>Описание</label>\n{input}\n{hint}\n{error}" ]
                )
                    ->textArea([
                        'rows' => '11',
                        'placeholder' => 'Введите описание']);
                    //->textInput([]);
                ?>
            </div>
            <div class="form-group">
                <?=$form->field(
                    $lp, 'socpic', ['template' => "<label>Картинка для мета соц. сетей (700x500)</label>\n{input}\n{hint}\n{error}" ]
                )->textInput(['placeholder' => 'Введите описание']);
                ?>
            </div>
            <hr />
            <div class="form-group">
                <?=$form->field(
                    $lp, 'brandicon', ['template' => "<label>Бренд</label>
                            \n{input}\n{hint}\n{error}" ]
                )->textInput(['placeholder' => 'Введите адрес картинки']);
                ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <?=$form->field(
                    $lp, 'bg', ['template' => "<label>Цвет фона</label>\n{input}\n{hint}\n{error}" ]
                )->widget(ColorInput::classname(),[
                    'options' => ['placeholder' => '6 символов цвета', 'id'=>'bg_'.$i]
                ]);
                ?>
            </div>
            <div class="form-group">
                <?=$form->field(
                    $lp, 'h1c', ['template' => "<label>Цвет заголовка №1</label>\n{input}\n{hint}\n{error}" ]
                )->widget(ColorInput::classname(),[
                    'options' => ['placeholder' => '6 символов цвета', 'id'=>'col_h1_'.$i]
                ]);
                ?>
            </div>
            <div class="form-group">
                <?=$form->field(
                    $lp, 'h2c', ['template' => "<label>Цвет заголовка №2</label>\n{input}\n{hint}\n{error}" ]
                )->widget(ColorInput::classname(),[
                    'options' => ['placeholder' => '6 символов цвета', 'id'=>'col_h2_'.$i]
                ]);
                ?>
            </div>
            <div class="form-group">
                <?=$form->field(
                    $lp, 'h3c', ['template' => "<label>Цвет заголовка №3</label>\n{input}\n{hint}\n{error}" ]
                )->widget(ColorInput::classname(),[
                    'options' => ['placeholder' => '6 символов цвета', 'id'=>'col_h3_'.$i]
                ]);
                ?>
            </div>
            <div class="form-group">
                <?=$form->field(
                    $lp, 'button', ['template' => "<label>Надпись на кнопке</label>\n{input}\n{hint}\n{error}" ]
                )->textInput(['placeholder' => 'Призыв к действию']);
                ?>
            </div>

            <div class="form-group">
                <?=$form->field(
                    $lp, 'yt2', ['template' => "<label>Id ролика 2 с Youtube</label>\n{input}\n{hint}\n{error}" ]
                )->textInput(['placeholder' => 'Вставьте id ролика']);
                ?>
            </div>
            <div class="form-group">
                <?php
                echo $form->field(
                    $lp, 'id', [
                    "template" => "<label>Ваша ссылка</label>\n{input}\n{hint}\n{error}"])
                    ->textInput([
                        "readonly" => true,
                        "value"=>'http://1-mlm.com/'.$lp->id.'.html'
                    ]); ?>
            </div>
            <div class="form-group">
                <?=$form->field(
                    $lp, 'keywords', ['template' => "<label>Ключевые слова</label>\n{input}\n{hint}\n{error}" ]
                )->textInput(['placeholder' => 'Введите ключевые слова']);
                ?>
            </div>
            <div class="form-group">
                <?=$form->field(
                    $lp, 'yandexmetrika', ['template' => "<label>ID Yandex Metrika</label>\n{input}\n{hint}\n{error}" ]
                )->textInput(['placeholder' => 'Вставьте ID Yandex Metrika']);
                ?>
            </div>
            <div class="form-group">
                <label>Автопрогрывание видео</label>
                <!--<input name="autoplay" type="radio" value="1" >Вкл.
                <input name="autoplay" type="radio" value="0" >Выкл.-->
                <?=$form->field(
                    $lp, 'autoplay', ['template' => "\n{input}\n{hint}\n{error}" ]
                )->radioList([
                    1 => 'Вкл.',
                    0 => 'Выкл.'
                ])
                ?>
            </div>
        </div>


    </div>
    <input name="land" value="change" type="hidden">
    <button type="submit" class="btn btn-danger waves-effect waves-effect" name="save">СОХРАНИТЬ СТРАНИЦУ</button>
<?= \yii\helpers\Html::hiddenInput('Lp[id]', $lp['id']); ?>

<?php $form->end(); ?>