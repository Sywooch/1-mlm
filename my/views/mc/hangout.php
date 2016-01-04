<?php
use kartik\social\VKPlugin;
$usr = app\models\Users::find()->where(['id'=>$data['uid']])->one();
?>
    <div style="background: transparent url('<?=Yii::getAlias('@web') ?>/img/5.jpg') no-repeat scroll center top; text-align: center; margin-bottom: 45px;">
        <div class="container">
            <h1><?=$data['title']?></h1>
            <h2><?=$data['description']?></h2>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe src="//www.youtube.com/embed/<?=$data['yt']?>" allowfullscreen="" frameborder="0" height="480" width="853"></iframe>
            </div>
            <h4 style="color: rgb(255, 180, 0);" >Внимание! задержка видео с чатом 15 секунд!</h4>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row" style="margin-bottom: 45px;">
                <div class="col-md-6">
                    <?php
                    //use kartik\social\FacebookPlugin;
                    //echo FacebookPlugin::widget(['appId'=>'FACEBOOK_APP_ID']);
                    ?>
                </div>
                <div class="col-md-6">
                    <?php
                    echo VKPlugin::widget([
                        'type' => VKPlugin::COMMENTS,
                        'apiId' => 5129822,
                        'options' => [
                            'limit' => 10,
                            //'width' => '665',
                            'attach' => '*'
                        ]
                    ]);
                    ?>
                </div>
            </div>
            <div class="container" style="text-align: center; margin-bottom: 45px;">
                <div class="social-likes">
                    <div class="facebook" title="Поделиться ссылкой на Фейсбуке">Facebook</div>
                    <div class="twitter" title="Поделиться ссылкой в Твиттере">Twitter</div>
                    <div class="mailru" title="Поделиться ссылкой в Моём мире">Мой мир</div>
                    <div class="vkontakte" title="Поделиться ссылкой во Вконтакте">Вконтакте</div>
                    <div class="odnoklassniki" title="Поделиться ссылкой в Одноклассниках">Одноклассники</div>
                    <div class="plusone" title="Поделиться ссылкой в Гугл-плюсе">Google+</div>
                </div>
            </div>
            <div class="row" style="margin-bottom: 45px;">
                <!--
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
                -->
            </div>
            <div class="container">
                <div id="photo">
                    <img src="<?= $usr['userpic']; ?>" />
                    <p>Вас приглашает: <?php echo $usr['fn'],' ',$usr['ln']; ?></p>
                </div>
                <p style="float: right; margin-top: 20px;">© <?= date("Y"); ?> 1-МЛМ. Все права защищены.</p>
            </div>
        </div>
    </div>