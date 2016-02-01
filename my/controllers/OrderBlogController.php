<?php

namespace app\controllers;

use app\models\OrderBlog;

class OrderBlogController extends \yii\web\Controller
{
    public function beforeAction($action)
    {
        if("accepted"==$action->id)
        {
            $this->enableCsrfValidation = false;
        }
        return parent::beforeAction($action);
    }

    public function actionAccepted()
    {
        $p = \Yii::$app->request->post();
        if($p)
        {

            $ob=new OrderBlog();
            $ob->date=date("Y-m-d H:i:s");
            $ob->name=$p["name"]["val"];
            $ob->email=$p["email"]["val"];
            $ob->skype=$p["skype"]["val"];
            $ob->save(false);

            $HTML=$p["name"]["val"].' <br />email:'.$p["email"]["val"].'<br /> skype:'.$p["skype"]["val"];

            \Yii::$app->mailer->compose()
                ->setFrom('support@1-mlm.com')
                ->setTo('support@1-mlm.com')
                ->setSubject('Заказ блога')
                ->setHtmlBody( $HTML )
                ->send();

            print_r($p);die;
            //return $this->render('accepted');
        }
        return $this->goHome();
    }
}