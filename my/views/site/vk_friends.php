<?php
$this->registerJsFile('/mertonic/global/scripts/app.js');
$this->registerJsFile('/mertonic/pages/scripts/dashboard.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/layouts/layout4/scripts/layout.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/layouts/layout4/scripts/demo.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/layouts/global/scripts/quick-sidebar.js', ['depends' => 'yii\web\JqueryAsset']);
$css = <<<'STYLE'
.tbl-header *
{
    text-align: center;
    height: 25px !important;
}
STYLE;
$this->registerCss($css);
$this->title = 'Друзья VK';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-user-follow font-blue-sharp"></i>
            <span class="caption-subject font-blue-sharp"><?= $this->title; ?></span>
        </div>
        <!-- Кнопка видео подсказки и во всю ширину --->
        <div class="actions">
            <a class="btn btn-circle btn-icon-only btn-default" data-toggle="modal" data-target="#w1help"  href="#w1help">
                <i class="icon-support"></i></a>
            <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;"> </a>
            <div style="display: none;" id="w1help" class="fade modal" role="dialog" tabindex="-1">
                <div class="modal-dialog ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 style="margin-top: 0px;"><div align="center">Помощь</div></h4>
                        </div>
                        <div class="modal-body">
                            <iframe width="560" height="315"
                                    src="https://www.youtube-nocookie.com/embed/<?php
                                    echo "iBfk37Fa3H0";
                                    ?>?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Кнопка видео подсказки и во всю ширину --->
    </div>
    <div class="portlet-body">
        <?php
        if( is_array($usrlist) ):
            foreach($usrlist as $val):?>
                <div class="row" style="border-bottom: solid 1px rgb(218, 218, 218); padding: 25px;">
                    <div class="col-md-2" style="text-align: center !important;">
                        <img src="<?= $val->userpic; ?>" class="img-responsive" alt="" style="border-radius: 50% !important;">
                    </div>
                    <div class="col-md-10">
                        <h3><?= $val->fn; ?>&nbsp;<?= $val->ln; ?></h3>
                        <?php
                        /*echo $this->render('_vk_friends',[
                            'vkID'=>$val->vkontakte
                        ]);*/

                        ?>
                            <!--<a class="btn green" href="https://vk.com/id<?= $val->vkontakte;?>" target="_blank">
                                Добавить в  друзья</a>-->
                            <a class="btn green" href="https://vk.com/id<?=
                            $val->vkontakte;?>"
                               onclick="popupWin = window.open(this.href,'contacts',
                               'location,width=555,height=555,top=0');
                               popupWin.focus(); return false;"> Добавить в  друзья </a>
                    </div>
                </div>
        <?php
            endforeach;
        endif;
        ?>
    </div>
</div>