<?php

namespace app\controllers;

class MailController extends \yii\web\Controller
{
    public function actionIndex()
    {
        if (\Yii::$app->user->isGuest) return $this->goHome();

        $HTML = \Yii::$app->view->render('@app/mail/layouts/aws');

        $mailer=\Yii::$app->mailer->compose()
            ->setFrom('support@1-mlm.com')
            ->setTo([
                'j1337032@trbvm.com',
                'support@1-mlm.com'
            ])
            ->setSubject('$300 ждут тебя!')
            ->setHtmlBody( $HTML );
            //->send();

        if(!$mailer->send())
        {
            echo 'Не могу отослать письмо!<br />';
        }
        else
        {
            echo 'Письмо отослано!<br />';
        }

    }

}
