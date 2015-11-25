<?php
$this->title = 'Мастер класс';
$this->params['breadcrumbs'][] = $this->title;

$this->registerJsFile('/mertonic/global/scripts/app_acc.js');

$this->registerJsFile('/mertonic/pages/scripts/dashboard.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/layouts/layout4/scripts/layout.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/layouts/layout4/scripts/demo.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile('/mertonic/layouts/global/scripts/quick-sidebar.js', ['depends' => 'yii\web\JqueryAsset']);
?>
<!--мастер класс-->
<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-graduation-cap font-green-sharp"></i>
                    <span class="caption-subject font-green-sharp bold uppercase">Мастер класс</span>
                </div>
            </div>
            <div class="portlet-body">
                <div class="row">
                    <div class="col-md-8">
                        <div class="videourok">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe id="player" width="718" height="404" src="https://www.youtube.com/embed/<?php //echo $mklas['yt'];?>?rel=0&showinfo=0&autoplay=1" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <div class="urok">
                                <center id="buy"><a href="<?php //echo $link;?>" target="_blank" class="btn medium alizarin"><?php //echo $button;?></a></center>
                                <p><i class="fa fa-diamond"></i>Доступ к мастер-классу: <i><?php //echo $hangout['class'];?>-й класс</i></p>
                                <p><i class="fa fa-user"></i>Организатор мастер-класса: <i><?php //echo '<a href="http://vk.com/id'.$hangout['uid'].'" target="_blank">'.$speaker['fn'].' '.$speaker['ln'].'</a>';?></i></p>
                                <p><i class="fa fa-user"></i>Спикер: <i><?php //if (!empty($hangout['speaker'])) echo $hangout['speaker']; else echo $speaker;?></i></p>
                                <p><i class="fa fa-calendar"></i>Дата проведения мастер-класса: <i><?php //echo $date;?></i></p>
                                <p><i class="fa fa-clock-o"></i>Время проведения мастер-класса: <i><?php //echo $time;?> мск</i></p>
                                <p><i class="fa fa-link"></i><a href="http://mlm.re/<?php //if ($hangout['class']==0) echo 'my/hangout?id='.$hangout['id'].'&u='.$user['uid']; else echo '888/'.$user['uid'].'.html';?>" target="_blank">Ваша ссылка для привлечения кандидатов</a></p>
                                <p><i class="fa fa-download"></i>Материалы к мастер-классу: <i><a href="<?php //echo $download;?>" target="_blank">Скачать к себе на компьютер</a></i></p>
                                <p><i class="fa fa-question-circle"></i>Что Вы узнаете на этом мастер-классе?</p>
                                <p style="font-size: 17px; color: #27ae60; text-align: justify;"><i class="fa fa-lightbulb-o" style="font-size: 132px; float: left; padding-right: 80px;"></i>"<?php //echo nl2br($description);?>"</p>
                                <div class="clear"></div>
                                <div id="result"></div>
                                <p><button class="btn medium alizarin" id="send2wall" title="Жмите здесь, чтобы разместить у себя на стене ВКонтакте приглашение на этот мастер-класс!">Отправить на стену ВК</button></p>
                                <div class="col-md-6">
                                    <h3>Киевское время:</h3>
                                    <p><iframe frameborder="no" scrolling="no" style="width:280px;height:150px;"
                                               src="https://time.yandex.ru/widget/?geoid=143&lang=ru&layout=horiz&type=digital&face=serif"></iframe></p>
                                </div>
                                <div class="col-md-6">
                                    <h3>Московское время:</h3>
                                    <p><iframe frameborder="no" scrolling="no" style="width:280px;height:150px;"
                                               src="https://time.yandex.ru/widget/?geoid=213&lang=ru&layout=horiz&type=digital&face=serif"></iframe></p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>











                    <div class="col-md-4">
                        <p><a href="https://plus.google.com/u/0/events/<?php //echo $mklas['onair'];?>" target="_blank" title="Вы можете войти в комнату и задать вопросы лично!"><i class="fa fa-external-link-square"></i>Войти в комнату мастер-класса</a></p>
                        <h4><i class="fa fa-comments-o"></i>Задавайте Ваши вопросы в комментариях:</h4>
                        <p>Внимание: запрещено писать в комментариях спам и вставлять ссылки на сторонние ресурсы. Уважайте друг друга!</p>
                        <div id="chat"></div>
                        <script>
                            $(document).ready(function() {
                                $('#buy').fadeOut();
                                setTimeout(function() {$('#buy').fadeIn();}, 5000)
                                var playerW = $('.videourok').width();
                                var playerH = Math.floor(playerW*9/16);
                                $('#youtube').css('width',playerW).css('height',playerH);
                                VK.Widgets.Comments('chat', {width: 340, limit: 15, attach: 'photo,audio', autoPublish: 1, mini: 1, height: "1600", pageUrl: 'http://mlm.re/1/<?php echo $user['uid'];?>.html'}, '<?php echo  md5('http://mlm.re/my/hangout?id='.$hangout['id']);?>');
                                $('#send2wall').click(function(e) {
                                    e.preventDefault();
                                    VK.api("wall.post", {
                                        owner_id: <?php echo \Yii::$app->getUser()->getIdentity()->profile['id'];?>,
                                        attachments: "photo-76966334_358098142",
                                        message: "<?//php echo 'Я иду '.$date.' в '.$time.' на мастер-класс по системе 1-й млм Ресурс\n===\n'.$title;?>\n===\nПриглашаю Вас!\nВаша ссылка для участия в мастер-классе: \nhttp://mlm.re/my/hangout?id=<?php //echo $hangout['id'].'&u='.$user['uid'];?>"
                                    }, function (data) {
                                        if (data.response) $('#result').replaceWith('<div class="alert success"><i class="fa fa-thumbs-o-up"></i>Спасибо! Вы успешно опубликовали запись №'+data.response.post_id+' у себя на стене ВКонтакте!</div>');
                                    });
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>