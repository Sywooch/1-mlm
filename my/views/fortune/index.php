<?php
$this->title = 'С новым годом!';

use kartik\social\VKPlugin;
$usr = app\models\Users::find()->where(['id'=>$data['uid']])->one();
?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



<div style="background: transparent url('<?=Yii::getAlias('@web') ?>/img/5.jpg') no-repeat scroll center top; text-align: center; margin-bottom: 45px;">
    <div class="container">
        <h1>Новые правила в МЛМ</h1>
        <h2></h2><br>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe src="//www.youtube.com/embed/mBe2K4v_jAs" allowfullscreen=""
                    frameborder="0" height="350" width="700"></iframe>
        </div>
        <h4 style="color: rgb(255, 180, 0);" >Внимание! задержка видео с чатом 15 секунд!</h4>
        <h4>Посмотреть по прямой ссылке можно  <a href="http://www.youtube.com/watch?v=mBe2K4v_jAs"  target="_blank" >ЗДЕСЬ! </a></h4>
    </div>
</div>
<div>
    <div class="container">
        <div class="row" style="margin-bottom: 45px;">

           <div class="col-md-4">
               
                <!-- Put this script tag to the <head> of your page -->
<script type="text/javascript" src="//vk.com/js/api/openapi.js?121"></script>

<script type="text/javascript">
  VK.init({apiId: 5212100, onlyWidgets: true});
</script>

<!-- Put this div tag to the place, where the Comments block will be -->
<div id="vk_comments"></div>
<script type="text/javascript">
VK.Widgets.Comments("vk_comments", {limit: 10, width: "330", attach: "*"});
</script>
            </div>

            <div class="col-md-4">
                <div class="fb-comments" data-href="http://1-mlm.com" data-numposts="15"></div>
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