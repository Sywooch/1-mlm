<?php
/*$js_1 = <<<'SCRIPT'
$(document).ready(function() {
    $('.media').on('click', function(){
        alert($('.media input[type=hidden]').val());
    });
});
SCRIPT;

$this->registerJs($js_1);*/
use app\models\Users;

$identity = \Yii::$app->getUser()->getIdentity()->profile;
switch($identity["service"])
{
    case "facebook":
        $usrDt = Users::find()->where(['facebook'=>$identity["id"]])->one();
        break;
    case "vkontakte":
        $usrDt = Users::find()->where(['vkontakte'=>$identity["id"]])->one();
        break;
    case "linkedin_oauth2":
        $usrDt = Users::find()->where(['linkedin'=>$identity["id"]])->one();
        break;
    case "google":
        $usrDt = Users::find()->where(['googleplus'=>$identity["id"]])->one();
        break;
    case "yandex":
        $usrDt = Users::find()->where(['yandex'=>$identity["id"]])->one();
        break;
    case "mailru":
        $usrDt = Users::find()->where(['mailru'=>$identity["id"]])->one();
        break;
}
?>
<script type="text/javascript">
    var uid = <?=$usrDt["id"]?>;

    function getMessages(id2) {
        $('#send_id').val(id2)
        $('.page-quick-sidebar-chat-user-messages').html('');
        $('#chart').css('display', 'none');
        $.ajax({
            //type: 'POST',
            url: 'index.php?r=site%2Flistmessages&toid='+id2,
            //data: 'toid='+id2,
            success: function(data) {
                $('.page-quick-sidebar-chat-user-messages').html(data);
            }
        });
        $('.page-quick-sidebar-item').css('display', 'inline');
    }

    function readMessage(id4) {
        //$('.page-quick-sidebar-chat-user-messages').html('');
        $.ajax({
            //type: 'POST',
            url: 'index.php?r=site%2Freadmessage&fromid='+id4,
            //data: 'toid='+id2,
            success: function(data) {
                //$('.page-quick-sidebar-chat-user-messages').html(data);
                //$('#send_id').val('');
            }
        });

    }

    function sendMessage() {
        $('.page-quick-sidebar-chat-user-messages').html('');
        $.ajax({
            //type: 'POST',
            url: 'index.php?r=site%2Fsendmessage&toid='+$('#send_id').val()+'&text='+$('#m_text').val(),
            //data: 'toid='+id2,
            success: function(data) {
                $('.page-quick-sidebar-chat-user-messages').html(data);
                //$('#send_id').val('');
            }
        });

    }

    function lum() {
        $.ajax({
            //type: 'POST',
            url: 'index.php?r=site%2Flistusrmes',
            //data: 'toid='+id2,
            success: function(data) {
                $('#lu').html(data);
                //$('#send_id').val('');
            }
        });
    }
/*
    var timerId = setTimeout(function tick() {
        if ($('#send_id').val() != '') {
            $.ajax({
                //type: 'POST',
                url: 'index.php?r=site%2Flistmessages&toid=' + $('#send_id').val(),
                //data: 'toid='+id2,
                success: function (data) {
                    $('.page-quick-sidebar-chat-user-messages').html(data);
                    readMessage($('#send_id').val());
                }
            });
        }
        lum();
        timerId = setTimeout(tick, 20000);
    }, 20000);

    */
</script>
<style>
    .ms {
        /*right: 25px !important;*/
        position: relative !important;
    }
</style>
<div id="chart" class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">
    <h3 class="list-heading">Команда</h3>
    <ul class="media-list list-items" style="height: 510px !important; overflow-y: scroll;" id="lu">
        <?php


        $lastTenRegUsers=\app\models\Users::find()
            ->where(['ref'=>$usrDt['refdt']])
            ->orderBy(['id' => SORT_ASC])
            ->limit(10)
            ->all();

        //print_r($lastTwentyRegUsers);
        foreach($lastTenRegUsers as $lt) {
            echo $this->render('_main_message', [
                'user' => $lt,
                'user_id' => $usrDt['id']
            ]);
        }

        ?>
        <!--<li class="media">
            <div class="media-status">
                <span class="badge badge-success">8</span>
            </div>
            <img class="media-object" src="../assets/layouts/layout/img/avatar3.jpg" alt="...">
            <div class="media-body">
                <h4 class="media-heading">Bob Nilson</h4>
                <div class="media-heading-sub"> Project Manager </div>
            </div>
        </li>
        <li class="media">
            <img class="media-object" src="../assets/layouts/layout/img/avatar1.jpg" alt="...">
            <div class="media-body">
                <h4 class="media-heading">Nick Larson</h4>
                <div class="media-heading-sub"> Art Director </div>
            </div>
        </li>
        <li class="media">
            <div class="media-status">
                <span class="badge badge-danger">3</span>
            </div>
            <img class="media-object" src="../assets/layouts/layout/img/avatar4.jpg" alt="...">
            <div class="media-body">
                <h4 class="media-heading">Deon Hubert</h4>
                <div class="media-heading-sub"> CTO </div>
            </div>
        </li>
        <li class="media">
            <img class="media-object" src="../assets/layouts/layout/img/avatar2.jpg" alt="...">
            <div class="media-body">
                <h4 class="media-heading">Ella Wong</h4>
                <div class="media-heading-sub"> CEO </div>
            </div>
        </li>
    </ul>
    <h3 class="list-heading">Customers</h3>
    <ul class="media-list list-items">
        <li class="media">
            <div class="media-status">
                <span class="badge badge-warning">2</span>
            </div>
            <img class="media-object" src="../assets/layouts/layout/img/avatar6.jpg" alt="...">
            <div class="media-body">
                <h4 class="media-heading">Lara Kunis</h4>
                <div class="media-heading-sub"> CEO, Loop Inc </div>
                <div class="media-heading-small"> Last seen 03:10 AM </div>
            </div>
        </li>
        <li class="media">
            <div class="media-status">
                <span class="label label-sm label-success">new</span>
            </div>
            <img class="media-object" src="../assets/layouts/layout/img/avatar7.jpg" alt="...">
            <div class="media-body">
                <h4 class="media-heading">Ernie Kyllonen</h4>
                <div class="media-heading-sub"> Project Manager,
                    <br> SmartBizz PTL </div>
            </div>
        </li>
        <li class="media">
            <img class="media-object" src="../assets/layouts/layout/img/avatar8.jpg" alt="...">
            <div class="media-body">
                <h4 class="media-heading">Lisa Stone</h4>
                <div class="media-heading-sub"> CTO, Keort Inc </div>
                <div class="media-heading-small"> Last seen 13:10 PM </div>
            </div>
        </li>
        <li class="media">
            <div class="media-status">
                <span class="badge badge-success">7</span>
            </div>
            <img class="media-object" src="../assets/layouts/layout/img/avatar9.jpg" alt="...">
            <div class="media-body">
                <h4 class="media-heading">Deon Portalatin</h4>
                <div class="media-heading-sub"> CFO, H&D LTD </div>
            </div>
        </li>
        <li class="media">
            <img class="media-object" src="../assets/layouts/layout/img/avatar10.jpg" alt="...">
            <div class="media-body">
                <h4 class="media-heading">Irina Savikova</h4>
                <div class="media-heading-sub"> CEO, Tizda Motors Inc </div>
            </div>
        </li>
        <li class="media">
            <div class="media-status">
                <span class="badge badge-danger">4</span>
            </div>
            <img class="media-object" src="../assets/layouts/layout/img/avatar11.jpg" alt="...">
            <div class="media-body">
                <h4 class="media-heading">Maria Gomez</h4>
                <div class="media-heading-sub"> Manager, Infomatic Inc </div>
                <div class="media-heading-small"> Last seen 03:10 AM </div>
            </div>
        </li>-->
    </ul>
</div>
<div class="page-quick-sidebar-item" style="display: none;">
    <div class="page-quick-sidebar-chat-user">
        <div class="page-quick-sidebar-nav">
            <a href="javascript:;" class="page-quick-sidebar-back-to-list" onclick="$('#chart').css('display', 'inline'); $('.page-quick-sidebar-item').css('display', 'none'); $('#send_id').val(''); ">
                <i class="icon-arrow-left"></i>Назад</a>
        </div>
        <div class="page-quick-sidebar-chat-user-messages" style="height: 440px !important; overflow-y: scroll;">
            <!--<div class="post out">
                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                <div class="message">
                    <span class="arrow"></span>
                    <a href="javascript:;" class="name">Bob Nilson</a>
                    <span class="datetime">20:15</span>
                    <span class="body"> When could you send me the report ? </span>
                </div>
            </div>
            <div class="post in">
                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                <div class="message">
                    <span class="arrow"></span>
                    <a href="javascript:;" class="name">Ella Wong</a>
                    <span class="datetime">20:15</span>
                    <span class="body"> Its almost done. I will be sending it shortly </span>
                </div>
            </div>
            <div class="post out">
                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                <div class="message">
                    <span class="arrow"></span>
                    <a href="javascript:;" class="name">Bob Nilson</a>
                    <span class="datetime">20:15</span>
                    <span class="body"> Alright. Thanks! :) </span>
                </div>
            </div>
            <div class="post in">
                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                <div class="message">
                    <span class="arrow"></span>
                    <a href="javascript:;" class="name">Ella Wong</a>
                    <span class="datetime">20:16</span>
                    <span class="body"> You are most welcome. Sorry for the delay. </span>
                </div>
            </div>
            <div class="post out">
                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                <div class="message">
                    <span class="arrow"></span>
                    <a href="javascript:;" class="name">Bob Nilson</a>
                    <span class="datetime">20:17</span>
                    <span class="body"> No probs. Just take your time :) </span>
                </div>
            </div>
            <div class="post in">
                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                <div class="message">
                    <span class="arrow"></span>
                    <a href="javascript:;" class="name">Ella Wong</a>
                    <span class="datetime">20:40</span>
                    <span class="body"> Alright. I just emailed it to you. </span>
                </div>
            </div>
            <div class="post out">
                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                <div class="message">
                    <span class="arrow"></span>
                    <a href="javascript:;" class="name">Bob Nilson</a>
                    <span class="datetime">20:17</span>
                    <span class="body"> Great! Thanks. Will check it right away. </span>
                </div>
            </div>
            <div class="post in">
                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                <div class="message">
                    <span class="arrow"></span>
                    <a href="javascript:;" class="name">Ella Wong</a>
                    <span class="datetime">20:40</span>
                    <span class="body"> Please let me know if you have any comment. </span>
                </div>
            </div>
            <div class="post out">
                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                <div class="message">
                    <span class="arrow"></span>
                    <a href="javascript:;" class="name">Bob Nilson</a>
                    <span class="datetime">20:17</span>
                    <span class="body"> Sure. I will check and buzz you if anything needs to be corrected. </span>
                </div>
            </div>        -->
        </div>
        <div class="page-quick-sidebar-chat-user-form">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Введите сообщение..." id="m_text">
                <input type="hidden" id="send_id" value="">
                <div class="input-group-btn">
                    <button type="button" class="btn green" onclick="sendMessage(); return false;">
                        <i class="icon-paper-clip"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
