<?php
use yii\widgets\ActiveForm;
use kartik\widgets\ColorInput;
?>
<div class="portlet-body">
    <div class="tab-content">
        <div id="tab_1_1" class="tab-pane fade <?=($t==1)?"active in":"" ?>">
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