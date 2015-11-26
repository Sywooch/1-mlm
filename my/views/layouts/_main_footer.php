<div class="page-footer">
    <div class="page-footer-inner"> <?= date('Y') ?> &copy;
        <a href="http://1-mlm.com/" title="1 mlm" target="_blank">1 mlm</a>
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
            <!--«десь будет выводитьс€ список пользователей-->
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