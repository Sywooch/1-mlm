<?php

namespace app\controllers;

use app\models\Levels;
use delagics\liqpay\LiqPay;
use app\models\Users;

class PayController extends \yii\web\Controller
{
    const PUBLICKEY = "i70959445638";
    const PRIVATEKEY = "LMwx5Wzmd7Zi1LTmuQvSmzhLgIOqL3gZF0VXjHiY";

    private $_public_key=\app\controllers\PayController::PUBLICKEY;
    private $_private_key=\app\controllers\PayController::PRIVATEKEY;

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
            $usrDt=(new \yii\db\Query())->select('u.fn AS fn, u.ln AS ln, u.refdt AS refdt,
                u.active AS active, l.title AS level, u.userpic AS userpic, u.money AS money')
                ->from([Users::tableName().' u'])
                ->innerJoin(Levels::tableName().' l','l.id = u.level');
            $usrDt=$usrDt->where(['u.id'=>\app\controllers\PayController::usrId()]);
            $usrDt=$usrDt->one();

        return $this->render('//pay/index', [
                'level'=>$usrDt["level"],
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
        $signature=base64_encode( sha1(
            $this->_private_key.
            @$_POST['data'] .
            $this->_private_key, 1 ) );

        if(@$_POST['signature']==$signature)
        {
            $dt=json_decode( base64_decode( @$_POST['data'] ) );
            $answer=$this->payStatus($dt->order_id);

            echo "<pre>";
            print_r($answer);

            echo "<hr />";
            print_r($answer->result);
        }
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

pri vhode snizit` tarif elsli false


https://www.youtube.com/watch?v=TcD-d4XkwQ4

links 10 max into slider
*/

