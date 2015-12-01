<?php


?>
<li class="media" onclick="getMessages($(this).children('input').val());">
            <div class="media-status">
                <!--<span class="badge badge-success">8</span>-->
            </div>
            <img class="media-object" src="<?=$user['userpic']; ?>" alt="...">
            <div class="media-body">
                <h4 class="media-heading"><?php echo $user['fn'],' ',$user['ln']; ?></h4>

                <div class="media-heading-sub"> <!--Project Manager-->
                    <?php
                    $level = \app\models\Levels::find()->where(['id' => $user['level']])->one();
                    echo $level['title'];
                    ?>
                </div>
            </div>
    <input class="val_id" type="hidden" value="<?=$user['id']?>">
</li>