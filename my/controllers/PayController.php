<?php

namespace app\controllers;

use delagics\liqpay\LiqPay;
use app\models\Users;

class PayController extends \yii\web\Controller
{
    const PUBLICKEY = "i70959445638";
    const PRIVATEKEY = "LMwx5Wzmd7Zi1LTmuQvSmzhLgIOqL3gZF0VXjHiY";

    private $_public_key=PUBLICKEY;
    private $_private_key=PRIVATEKEY;

    public function beforeAction($action)
    {
        if("check"==$action->id)
        {
            $this->enableCsrfValidation = false;
        }
        return parent::beforeAction($action);
    }

    public function PriceList()
    {
        if(!\Yii::$app->user->isGuest)
        {
            return $this->render('//pay/index', [
                'btn2'=>\app\controllers\PayController::lippayDt("2"),
                'btn10'=>\app\controllers\PayController::lippayDt("10"),
                'btn25'=>\app\controllers\PayController::lippayDt("25"),
            ]);
        }
        return $this->goHome();
    }

    protected function lippayDt($cost)
    {
        $liqpay = new LiqPay
        (
            \app\controllers\PayController::PUBLICKEY,
            \app\controllers\PayController::PRIVATEKEY
        );

        return $liqpay->cnb_form_my([
            'version' => '3',
            'amount' => $cost,
            'currency' => 'USD',//UAH
            'description' => $cost.':' . \app\controllers\PayController::usrId(),
            'language'=>'ru',
            'subscribe' => '1',
            'subscribe_date_start'=>date("Y-m-d H:i:s"),
            'subscribe_periodicity' => 'month',
            'server_url'=>'https://1-mlm.com/index.php?r=pay%2Fcheck',
            'result_url'=>'https://1-mlm.com/index.php?r=pay%2Fcheck',
            'order_id' => \app\controllers\PayController::odredId()
        ]);
    }






















    public function actionIndex()
    {
        if(!\Yii::$app->user->isGuest)
        {
            $this->layout="empty";
            $liqpay = new LiqPay($this->_public_key, $this->_private_key);
            //$html = $liqpay->cnb_signature([
            $html = $liqpay->cnb_form([
                'version' => '3',
                'amount' => '0.01',
                'currency' => 'UAH',//USD
                'description' => 'userID:' . $this->usrId(),
                'sandbox'=>'1',
                'language'=>'ru',
                'subscribe' => '1',
                'subscribe_periodicity' => 'month',
				'subscribe_date_start'=>date("Y-m-d H:i:s"),
		
                'server_url'=>'https://1-mlm.com/index.php?r=pay%2Fcheck',
                'result_url'=>'https://1-mlm.com/index.php?r=pay%2Fcheck',

                'order_id' => $this->odredId()
            ]);

            return $this->render('index', [
                'html'=>$html
            ]);
        }
        return $this->goHome();
    }

    protected function usrId()
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

    protected function odredId()
    {
        $micro = sprintf("%06d",(microtime(true) - floor(microtime(true))) * 1000000);
        $number = date("YmdHis");
        return $number.$micro;
    }

    private function payStatus($ord)
    {
        $liqpay = new LiqPay($this->_public_key, $this->_private_key);
        return $res = $liqpay->api("payment/status", [
            'version'  => '3',
            'order_id' => $ord
        ]);
    }

    public function actionCheck()
    {
       /*
         $dtArr=array (
            'signature' => 'MKGJEsFEuWuaQVHxdFjFUPtUBhU=',
            'data' => 'eyJhY3Rpb24iOiJwYXkiLCJwYXltZW50X2lkIjoxMDE3NDk4NjgsInN0YXR1cyI6IndhaXRfYWNjZXB0IiwidmVyc2lvbiI6MywidHlwZSI6ImJ1eSIsInB1YmxpY19rZXkiOiJpNzA5NTk0NDU2MzgiLCJhY3FfaWQiOjQxNDk2Mywib3JkZXJfaWQiOiIxMDEtMTAxLTEwMSIsImxpcXBheV9vcmRlcl9pZCI6IjEwMDkyOHUxNDQ5NjYzNzk5OTk1OTQ4IiwiZGVzY3JpcHRpb24iOiJ1c2VySUQ6Mjg0MCIsInNlbmRlcl9waG9uZSI6IjM4MDY3MjMzNjc1NSIsInNlbmRlcl9jYXJkX21hc2syIjoiNDE0OTQ5Kjg1Iiwic2VuZGVyX2NhcmRfYmFuayI6InBiIiwic2VuZGVyX2NhcmRfY291bnRyeSI6ODA0LCJpcCI6IjkyLjYwLjE4Ny41IiwiYW1vdW50IjowLjAxLCJjdXJyZW5jeSI6IlVBSCIsInNlbmRlcl9jb21taXNzaW9uIjowLjAsInJlY2VpdmVyX2NvbW1pc3Npb24iOjAuMCwiYWdlbnRfY29tbWlzc2lvbiI6MC4wLCJhbW91bnRfZGViaXQiOjAuMDEsImFtb3VudF9jcmVkaXQiOjAuMDEsImNvbW1pc3Npb25fZGViaXQiOjAuMCwiY29tbWlzc2lvbl9jcmVkaXQiOjAuMCwiY3VycmVuY3lfZGViaXQiOiJVQUgiLCJjdXJyZW5jeV9jcmVkaXQiOiJVQUgiLCJzZW5kZXJfYm9udXMiOjAuMCwiYW1vdW50X2JvbnVzIjowLjAsImF1dGhjb2RlX2RlYml0IjoiNzEzNDAzIiwicnJuX2RlYml0IjoiMDAwMjg0ODQ5MTE0IiwibXBpX2VjaSI6IjciLCJ0cmFuc2FjdGlvbl9pZCI6MTAxNzQ5ODY4fQ==', );
     */
        $dt=base64_decode( @$_POST['data'] );
        $dt=json_decode($dt);

        $answer=$this->payStatus($dt->order_id);

        echo "<pre>";
        print_r($answer);

    }
}
/*
order_id
description

level


paydata  - 	дата оплаты
days  -  	сколько дней доступно

earned		ref money sum/2
money		liqpay



https://www.youtube.com/watch?v=TcD-d4XkwQ4
*/