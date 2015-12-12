<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Контакт - 1 mlm ресурс';
$this->params['breadcrumbs'][] = $this->title;
?>

<style>
    #section2 {
        cursor: text;
        background: transparent url("vps-bg.jpg") no-repeat scroll 50% 50%;
    }

    .builder-section.bg-img .wrap::after {
        content: "";
        display: block;
        height: 0px;
        overflow: hidden;
        clear: both;
    }

    .no-padding {
        padding: 0px !important;
    }

    .bg-img {
        background-size: cover !important;
        height: 280px;
    }

    .builder-section {
        padding: 60px 0px;
    }

    .wrap {
        width: 940px;
        margin: 0px auto;
        position: relative;
        min-width: 940px;
    }

    .white-block {
        background: rgba(255, 255, 255, 0.9) none repeat scroll 0% 0%;
        box-sizing: border-box;
        height: 280px;
        padding: 10px 50px;
        text-align: center;
        width: 470px;
        float: right;
        margin-right: 30px;
        line-height: 8px;
    }

    .white-block h3 {
        color: #313131;
        font-size: 36px;
        margin-bottom: 7px;
    }

    .wrap p {
        font-family: "ProximaNova",sans-serif;
        font-size: 18px;
        color: #333;
        line-height: 23px;
    }

    .white-block p {
        color: #313131;
        font-size: 16px;
        margin-bottom: 7px;
    }

    .white-block .phone {
        display: block;
        margin: 22px 0px 23px;
        color: #313131;
        font-size: 24px;
        font-family: "ProximaNovaLight",sans-serif;
    }

    .white-block .skype {
        display: inline-block;
        position: relative;
        margin-left: 23px;
        color: #656565;
        font-size: 16px;
        /*border-bottom: 1px solid rgba(101, 101, 101, 0.5);*/
        transition: border 0.3s ease 0s;
    }

    .white-block .skype::before {
        left: -33px;
        background-position: -56px -143px;
        width: 25px;
        height: 25px;
    }
</style>
<!--<link href="https://hostpro.ua/wp-content/themes/hostpro/assets/css/style.css" rel="stylesheet">-->
<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-call-end font-blue-sharp"></i>
                    <span class="caption-subject font-blue-sharp"><?= $this->title; ?></span>
                </div>
                <div align="right">
                    <a class="btn btn-circle btn-icon-only btn-default" data-toggle="modal"
                       data-target="#w1help" href="#w1help">
                        <i class="icon-support"></i></a>
                    <a title="" data-original-title=""
                       class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;"> </a>

                    <div style="display: none;" id="w1help" class="fade modal" role="dialog" tabindex="-1">
                        <div class="modal-dialog ">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"
                                            aria-hidden="true">×</button>
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
            </div>
                    <!------------------------------------------------------------>
<section id="section2" data-scen-id="0" class="builder-section no-padding bg-img ng-touched ng-dirty-parse" ng-mouseup="deTextCustomize()">
    <div class="wrap">
        <div class="white-block">
            <h3>Есть вопросы?</h3>
            <p>Обращайтесь в техподдержку</p>
            <p>с 10:00 до 20:00</p>
            <!--<span class="phone">(067) 233-67-55</span>-->
            <span class="phone">support@1-mlm.com</span>
            <div><a class="skype" href="skype:support.mlm?chat" style="" data-edit-now="false"><i class="fa fa-skype"></i> support.mlm</a></div>
            <br></div>
    </div>
</section>

                    </div>