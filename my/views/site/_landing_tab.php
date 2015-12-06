<?php
use yii\widgets\ActiveForm;
use kartik\widgets\ColorInput;
?>
<div class="portlet-body">
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
                <div class="tabbable-custom nav-justified">
                    <ul class="nav nav-tabs nav-justified">
                        <li class="active">
                            <a href="#tab_1_1_1" data-toggle="tab"> Шаблон 1 </a>
                        </li>
                        <li>
                            <a href="#tab_1_1_2" data-toggle="tab"> Шаблон 2 </a>
                        </li>
                        <li>
                            <a href="#tab_1_1_3" data-toggle="tab"> Шаблон 3 </a>
                        </li>
                        <li>
                            <a href="#tab_1_1_4" data-toggle="tab"> Шаблон 4 </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab_1_1_1" class="tab-pane active">
                            <?=$this->render('_landing_tab_form_clr',['type'=>'1']);?>
                        </div>
                        <div id="tab_1_1_2" class="tab-pane">
                            <?=$this->render('_landing_tab_form_clr',['type'=>'2']);?>
                        </div>
                        <div id="tab_1_1_3" class="tab-pane">
                            В разработке
                        </div>
                        <div id="tab_1_1_4" class="tab-pane">
                            В разработке
                        </div>
                    </div>
                </div>
                <?php //$form_n = ActiveForm::begin();?>
                <!--<div class="row">
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
                <button type="submit" class="btn btn-danger waves-effect waves-effect" name="save">СОЗДАТЬ СТРАНИЦУ</button>-->
                <?php //$form_n->end(); ?>
            <?php endif; ?>


        </div>
        <div id="tab_1_2" class="tab-pane fade <?=($t==2)?"active in":"" ?>">
            <div class="tabbable-custom ">
                <ul class="nav nav-tabs ">
                    <?php
                        $mod_list = $model->all();
                        $i = 1;
                        foreach ($mod_list as $ml) {
                            ?>
                        <li <?php if ($i==1) echo 'class="active"' ?>>
                            <a href="#tab_1_2_<?=$i?>" data-toggle="tab"><?php echo "&nbsp;",$i,"&nbsp;"; $i++;?></a>
                        </li>
                    <?php
                        }
                    ?>
                    <!--<li class="active">
                        <a href="#tab_1_1_1" data-toggle="tab"> Шаблон 1 </a>
                    </li>
                    <li>
                        <a href="#tab_1_1_2" data-toggle="tab"> Шаблон 2 </a>
                    </li>
                    <li>
                        <a href="#tab_1_1_3" data-toggle="tab"> Шаблон 3 </a>
                    </li>
                    <li>
                        <a href="#tab_1_1_4" data-toggle="tab"> Шаблон 4 </a>
                    </li>-->

                </ul>
                <div class="tab-content">
                    <?php
                        $lp_data = $model->all();
                        $i = 1;
                        foreach ($lp_data as $lp) {
                    ?>
                            <div class="tab-pane <?php if ($i==1) echo 'active' ?>" id="tab_1_2_<?=$i; $i++?>" >
                                <?php
                                    echo $this->render('_landing_tab_form',[
                                        'lp' => $lp,
                                        'i' => $i,
                                    ]);
                                ?>
                            </div>

                            <?php
                        }
                    ?>
                    <!--</div>-->
                </div>
            </div>
            <!--<div class="row">
                <div class="col-md-12">
                    <?= $this->render('_landing_list');?>
                </div>
            </div>-->

        </div>
    </div>
</div>