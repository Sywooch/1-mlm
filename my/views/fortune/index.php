<?php
$this->title = 'С новым годом!';

use kartik\social\VKPlugin;
$usr = app\models\Users::find()->where(['id'=>$data['uid']])->one();
?>
<div style="background: transparent url('<?=Yii::getAlias('@web') ?>/img/5.jpg') no-repeat scroll center top; text-align: center; margin-bottom: 45px;">
    <div class="container">
        <h1>Fortune</h1>
        <h2>Fortune</h2>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe src="//www.youtube.com/embed/W55b4BcCPM4" allowfullscreen=""
                    frameborder="0" height="480" width="853"></iframe>
        </div>
        <h4 style="color: rgb(255, 180, 0);" >Внимание! задержка видео с чатом 15 секунд!</h4>
    </div>
</div>
<div>
    <div class="container">
        <div class="row" style="margin-bottom: 45px;">

           <div class="col-md-4">
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

            <div class="col-md-4">
                <?php
                echo \kartik\social\FacebookPlugin::widget([
                    'type'=>\kartik\social\FacebookPlugin::COMMENT,
                    'settings' => ['data-width'=>1000, 'data-numposts'=>5
                    ]]);
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
    </div>
</div>