<?php

namespace app\controllers;

use delagics\liqpay\LiqPay;
use app\models\Users;

class PayController extends \yii\web\Controller
{
    private $_public_key="i70959445638";
    private $_private_key="LMwx5Wzmd7Zi1LTmuQvSmzhLgIOqL3gZF0VXjHiY";

    public function actionIndex()
    {
        if(!\Yii::$app->user->isGuest)
        {
            $this->layout="empty";
            $liqpay = new LiqPay($this->_public_key, $this->_private_key);
            //$html = $liqpay->cnb_signature([
            $html = $liqpay->cnb_form([
                'version' => '3',
                'amount' => '1',
                'currency' => 'USD',
                'description' => 'userID:' . $this->usrId(),
                'order_id' => $this->odredId()
            ]);

            return $this->render('index', [
                'html'=>$html
            ]);
        }
        return $this->goHome();
    }

    private function usrId()
    {
        $identity = \Yii::$app->getUser()->getIdentity()->profile;
        $id=0;
        switch($identity["service"])
        {
            case "facebook":
                $id = Users::find()->where(['facebook'=>$identity["id"]])->one()["id"];
            break;
            case "vkontakte":
                $id = Users::find()->where(['vkontakte'=>$identity["id"]])->one()["id"];
            break;
            case "linkedin_oauth2":
                $id = Users::find()->where(['linkedin'=>$identity["id"]])->one()["id"];
            break;
            case "google":
                $id = Users::find()->where(['googleplus'=>$identity["id"]])->one()["id"];
            break;
            case "yandex":
                $id = Users::find()->where(['yandex'=>$identity["id"]])->one()["id"];
            break;
            case "mailru":
                $id = Users::find()->where(['mailru'=>$identity["id"]])->one()["id"];
            break;
        }
        return $id;
    }

    private function odredId()
    {
        $micro = sprintf("%06d",(microtime(true) - floor(microtime(true))) * 1000000);
        $number = date("YmdHis");
        return $number.$micro;
    }

    public function actionStatus()
    {
        $liqpay = new LiqPay($this->_public_key, $this->_private_key);
        $res = $liqpay->api("payment/status", [
            'version' => '3',
            'order_id'       => '101-101-101'
        ]);
        echo "<pre>";
        print_r($res);
        echo "</pre>";
    }
}
