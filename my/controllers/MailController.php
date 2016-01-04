<?php
namespace app\controllers;
use app\models\Users;
class MailController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $usr=Users::find()
            ->distinct()
            ->select(["fn","ln","email"])
/***/
            ->where(['ln'=>"Sidorov"])
            ->limit(1)
/***/
            ->andWhere(['not', ['email' => '']])
            ->andWhere(['not', ['email' => null]])
            ->all();

/***/
        print_r($usr);
        echo "<hr />";
                foreach($usr as $val)
                {
                    echo $val["fn"]," ",$val["ln"]," ",$val["email"],"<br />";
                }
/***/
die;

        if (\Yii::$app->user->isGuest) return $this->goHome();

        $HTML = \Yii::$app->view->render('@app/mail/layouts/aws');
        $i=0;
        $j=0;

        foreach($usr as $val)
        {
            $MEMBER=$val["fn"]." ".$val["ln"];
            $HTML=str_replace('%USERNAME%', $MEMBER, $HTML);

            $mailer=\Yii::$app->mailer->compose()
                ->setFrom('support@1-mlm.com')
                ->setTo([
                    $val["email"]
                ])
                ->setSubject('$300 ждут тебя!')
                ->setHtmlBody( $HTML );
            //->send();

            if(!$mailer->send())
            {
                echo 'Не могу отослать письмо на: <b>' . $val["email"] . '</b><br />';
                ++$j;
            }
            else
            {
                echo 'Письмо отослано на: <b>' . $val["email"] . '</b><br />';
                ++$i;
            }
        }

        $sum=$i+$j;

        echo '<br />Отправлено: ' . $i .' из ' . $sum . '<br />';
        echo 'Не отправлено: ' . $j .' из ' . $sum;
    }
}