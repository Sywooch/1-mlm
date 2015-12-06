<?php
foreach($data as $lt) {
    echo $this->render('_main_message', [
        'user' => $lt,
        'user_id' => $user
    ]);
}