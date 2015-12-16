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
                            <?=$this->render('_landing_tab_form_clr',['type'=>'3']);?>
                        </div>
                        <div id="tab_1_1_4" class="tab-pane">
                            В разработке
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>