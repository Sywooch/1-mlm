<?php
namespace app\controllers;
use app\models\Users;
class VkpmController extends \yii\web\Controller
{
    public function actionGetvktoken()
    {
        $client_id  = '5214494';
        $scope      = 'offline,messages';

        echo "<a href='https://oauth.vk.com/authorize?client_id="
            . $client_id
            . "&display=page&redirect_uri=https://oauth.vk.com/blank.html&scope="
            . $scope
            . "&response_type=token&v=5.37'>Push the button</a>";
    }
    public function actionIndex()
    {$stime=time();
        $N=(int)\Yii::$app->request->get("n");
        switch ($N)
        {
            case 1:
                $b=1;
                $e=3001;
                break;
            case 2:
                $b=3000;
                $e=6001;
                break;
            case 3:
                $b=6000;
                $e=9001;
                break;
            case 4:
                $b=9000;
                $e=12001;
                break;
            case 5:
                $b=12000;
                $e=15001;
                break;
        }
        $usr=Users::find()
            ->distinct()
            ->select(["id","fn","ln","vkontakte"])

            ->where(['>','id',$b])
            ->andWhere(['<','id',$e])
            ->andWhere(['stvkpm'=>0])

/***
            ->where(['id'=>1])
            ->limit(1)
***/
            ->andWhere(['not', ['vkontakte' => '']])
            ->andWhere(['not', ['vkontakte' => null]])
            ->all();
/***
        print_r($usr);
        echo "<hr />";
        foreach($usr as $val)
        {
            echo $val["fn"]," ",$val["ln"]," ",$val["vkontakte"],"<br />";
        }
        die;
***/
        if (\Yii::$app->user->isGuest) return $this->goHome();
        foreach($usr as $val)
        {
            $MEMBER=$val["fn"];
            $message=
                    $MEMBER . ", Обновление Вашего Бизнеса Готово!\n"
                    . " посетите 1 МЛМ https://1-mlm.com/ и узнайте подробнее!";

            $a=$this->sendVkPm($val["vkontakte"] , $message);
            usleep(100000);
            usleep(20000);
            unset($MEMBER);unset($message);
            if($a>0)
            {
                $u=Users::findOne(["id"=>$val["id"]]);
                $u->stvkpm=1;
                $u->save(false);
            }
        }
        $etime=time();
        $rtime=$etime-$stime;
        echo '<br>' . $rtime;
    }

    private function sendVkPm($id , $message)
    {
        $url = 'https://api.vk.com/method/messages.send';
        $params = array(
            'user_id' => $id,    // Кому отправляем
            'message' => $message,   // Что отправляем
            'access_token' => '89494a0e73f2f93341d8f65636b0b4c43b75ebeb3fe992bbfc3b7b5f6bb61fe35f17438bbe84758a296cd',  // access_token можно вбить хардкодом, если работа будет идти из под одного юзера
            'v' => '5.37',
        );

        // В $result вернется id отправленного сообщения
        $result = file_get_contents($url, false, stream_context_create(array(
            'http' => array(
                'method'  => 'POST',
                'header'  => 'Content-type: application/x-www-form-urlencoded',
                'content' => http_build_query($params)
            )
        )));
    }
}