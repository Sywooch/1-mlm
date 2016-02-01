<?php
namespace app\controllers;
use app\models\Users;
class MailController extends \yii\web\Controller
{
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
                $e=35001;
                break;
        }

        $usr=Users::find()
            ->distinct()
            ->select(["id","fn","ln","email"])

//           ->where(["id"=>1])

            ->where(['>','id',$b])
            ->andWhere(['<','id',$e])
            ->andWhere(['stmail'=>0])
            //->limit(1)

            ->andWhere(['not', ['email' => '']])
            ->andWhere(['not', ['email' => null]])
            ->all();

/***
        print_r($usr);
        echo "<hr />";
                foreach($usr as $val)
                {
                    echo $val["fn"]," ",$val["ln"]," ",$val["email"],"<br />";
                }
die;
***/

        if (\Yii::$app->user->isGuest) return $this->goHome();

        $HTML = \Yii::$app->view->render('@app/mail/layouts/blog');
        $i=0;$j=0;

        foreach($usr as $val)
        {
            $MEMBER=$val["fn"]." ".$val["ln"];
            $HTML=str_replace('%USERNAME%', $MEMBER, $HTML);

            $mailer=\Yii::$app->mailer->compose()
                ->setFrom('support@1-mlm.com')
                ->setTo([
                    trim($val["email"])
                ])
                //->setSubject('Обновление Вашего Бизнеса Готово!')
				->setSubject($val["fn"].', Отпишитесь от рассылки!')
                ->setHtmlBody( $HTML );
            //->send();

            if(!$mailer->send())
            {
                //echo 'Не могу отослать письмо на: <b>' . $val["email"] . '</b><br />';
                $badMail[]=$val["email"];
                ++$j;
            }
            else
            {
                $u=Users::findOne(["id"=>$val["id"]]);
                $u->stmail=1;
                $u->save(false);
                //echo 'Письмо отослано на: <b>' . $val["email"] . '</b><br />';
                ++$i;
            }
        }

        $sum=$i+$j;

        if( !empty($badMail) )
        {
            echo 'Не могу отослать письмо на: ';
            echo '<pre>';
            print_r($badMail);
            echo '</pre><br />';
            echo 'Не отправлено: ' . $j .' из ' . $sum . '<br />';
        }

        echo 'Отправлено: ' . $i .' из ' . $sum;
        $etime=time();
        $rtime=$etime-$stime;
        echo '<br>' . $rtime;
    }
}