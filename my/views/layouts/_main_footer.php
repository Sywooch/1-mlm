<div class="page-footer">
    <div class="page-footer-inner"> <?= date('Y') ?> &copy;
        <a href="https://1-mlm.com/" title="1 mlm ресурс" target="_blank">1 mlm</a>

        <!-- Yandex.Metrika informer --><a href="https://metrika.yandex.ru/stat/?id=33980350&amp;from=informer"target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/33980350/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" onclick="try{Ya.Metrika.informer({i:this,id:33980350,lang:'ru'});return false}catch(e){}" /></a><!-- /Yandex.Metrika informer --> <!-- Yandex.Metrika counter --><script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter33980350 = new Ya.Metrika({ id:33980350, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, ecommerce:"dataLayer" }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="https://mc.yandex.ru/watch/33980350" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->
    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <marquee
            onmouseover="this.stop();"
            onmouseout="this.start();"

            scrollamount="1"
            scrolldelay="20"
            align="middle"
            direction="left"

            height="50">
            <!--    ????   -->
            <?php
            $lastTwentyRegUsers=\app\models\Users::find()->orderBy(['id' => SORT_DESC])->limit(20)->all();

            //print_r($lastTwentyRegUsers);
            foreach($lastTwentyRegUsers as $lt) {
                echo $this->render('_main_list_users', [
                    'user' => $lt
                ]);
            }

            ?>

        </marquee>
    </div>
</div>