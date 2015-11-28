<?php
use yii\widgets\ActiveForm;
use kartik\widgets\ColorInput;
?><div class="portlet-body">
    <div class="tab-content">
        <div id="tab_1_1" class="tab-pane fade <?=($t==1)?"active in":"" ?>">
            <?php
            if ($m != ''):
                ?>
                <div class="note note-success">

                    <h4 class="block">Внимание</h4>
                    <p>
                        <?= $m; ?>
                    </p>

                </div>
                <?php
            else:
                ?>
                <?php $form_n = ActiveForm::begin();?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Название</label>
                            <input class="form-control" name="name" placeholder="Имя странички" type="text">
                        </div>
                        <div class="form-group">
                            <label>Заголовок №1</label>
                            <input class="form-control" name="h1" placeholder="Текст заголовка" type="text">
                        </div>
                        <div class="form-group">
                            <label>Заголовок №2</label>
                            <input class="form-control" name="h2" placeholder="Текст заголовка" type="text">
                        </div>
                        <div class="form-group">
                            <label>Заголовок №3</label>
                            <input class="form-control" name="h3" placeholder="Текст заголовка" type="text">
                        </div>
                        <div class="form-group">
                            <label>Id ролика с youtube</label>
                            <input id="lp-name" class="form-control" name="yt" placeholder="Вставьте id ролика" type="text">
                        </div>
                        <div class="form-group">
                            <label>ID Yandex Metrika</label>
                            <input id="lp-name" class="form-control" name="yandexmetrika" placeholder="Вставьте ID Yandex Metrika" type="text">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Цвет заголовка №1</label>
                            <input class="form-control" name="h1c" placeholder="6 символов цвета" type="text">
                        </div>
                        <div class="form-group">
                            <label>Цвет заголовка №2</label>
                            <input class="form-control" name="h2c" placeholder="6 символов цвета" type="text">
                        </div>
                        <div class="form-group">
                            <label>Цвет заголовка №3</label>
                            <input class="form-control" name="h3c" placeholder="6 символов цвета" type="text">
                        </div>
                        <div class="form-group">
                            <label>Надись на кнопке</label>
                            <input class="form-control" name="button" placeholder="Призыв к действию" type="text">
                        </div>
                        <div class="form-group">
                            <label>Id ролика 2 с youtube</label>
                            <input id="lp-name" class="form-control" name="yt" placeholder="Вставьте id ролика" type="text">
                        </div>
                    </div>
                </div>
                <input id="users-formtype_2" name="Land_2" value="create" type="hidden">
                <button type="submit" class="btn btn-danger waves-effect waves-effect" name="save">СОЗДАТЬ СТРАНИЦУ</button>
                <?php $form_n->end(); ?>
            <?php endif; ?>


        </div>
        <div id="tab_1_2" class="tab-pane fade <?=($t==2)?"active in":"" ?>">
            <div class="row">
                <div class="col-md-12">
                    <?= $this->render('_landing_list');?>
                </div>
            </div>
            <?php
            if ( !empty($lp) ):
                $form = ActiveForm::begin();?>
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
                                $lp, 'yandexmetrika', ['template' => "<label>Id ролика с Youtube</label>\n{input}\n{hint}\n{error}" ]
                            )->textInput(['placeholder' => 'Вставьте ID Yandex Metrika']);
                            ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <?=$form->field(
                                $lp, 'h1c', ['template' => "<label>Цвет заголовка №1</label>\n{input}\n{hint}\n{error}" ]
                            )->widget(ColorInput::classname(),[
                                'options' => ['placeholder' => '6 символов цвета']
                            ]);
                            ?>
                        </div>
                        <div class="form-group">
                            <?=$form->field(
                                $lp, 'h2c', ['template' => "<label>Цвет заголовка №2</label>\n{input}\n{hint}\n{error}" ]
                            )->widget(ColorInput::classname(),[
                                'options' => ['placeholder' => '6 символов цвета']
                            ]);
                            ?>
                        </div>
                        <div class="form-group">
                            <?=$form->field(
                                $lp, 'h3c', ['template' => "<label>Цвет заголовка №3</label>\n{input}\n{hint}\n{error}" ]
                            )->widget(ColorInput::classname(),[
                                'options' => ['placeholder' => '6 символов цвета']
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
                    </div>

                    <div class="form-group">
                        <?php
                        echo $form->field(
                            $lp, 'id', [
                            "template" => "<label>Ваша ссылка</label>\n{input}\n{hint}\n{error}"])
                            ->textInput([
                                "readonly" => true,
                                "value"=>'http://1-mlm.com/1/'.$lp->id.'.html'
                            ]); ?>
                    </div>
                </div>
                <input id="users-formtype" name="Land" value="change" type="hidden">
                <button type="submit" class="btn btn-danger waves-effect waves-effect" name="save">СОХРАНИТЬ СТРАНИЦУ</button>
                <?= \yii\helpers\Html::hiddenInput('Lp[id]', $lp['id'], ["id"=>"users-formtype"]); ?>
                <?php $form->end(); ?>
            <?php endif; ?>
        </div>
    </div>
</div>