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

    public function PriceList($congratulation=null)
    {
        if(!\Yii::$app->user->isGuest)
        {
            if(!empty($congratulation))
            {
                \Yii::$app->session->setFlash(
                    'success',
                    'Поздравляем оплата прийнята'
                );
            }

            $usrDt=(new \yii\db\Query())->select('u.fn AS fn, u.ln AS ln, u.refdt AS refdt,
                u.active AS active, l.title AS level, u.userpic AS userpic, u.money AS money')
                ->from([Users::tableName().' u'])
                ->innerJoin(Levels::tableName().' l','l.id = u.level');
            $usrDt=$usrDt->where(['u.id'=>\app\controllers\PayController::usrId()]);
            $usrDt=$usrDt->one();

        return $this->render('//pay/index', [
                'level'=>$usrDt["level"],
                'btn2'=>(($usrDt["level"]<2)?\app\controllers\PayController::lippayDt("2","2"):null),
                'btn10'=>(($usrDt["level"]<3)?\app\controllers\PayController::lippayDt("3","10"):null),
                'btn25'=>(($usrDt["level"]<4)?\app\controllers\PayController::lippayDt("4","25"):null),

                'btn20'=>(($usrDt["level"]<2)?\app\controllers\PayController::lippayDt("2","20","year"):null),
                'btn100'=>(($usrDt["level"]<3)?\app\controllers\PayController::lippayDt("3","100","year"):null),
                'btn250'=>(($usrDt["level"]<4)?\app\controllers\PayController::lippayDt("4","250","year"):null)
            ]);
        }
        return $this->goHome();
    }

    protected function lippayDt($level,$cost,$moyr='month')
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
            'description' => $level.':'.\app\controllers\PayController::usrId().':'.$moyr.':'.date("Y-m-d"),
            'language'=>'ru',
            'subscribe' => '1',
            'subscribe_date_start'=>date("Y-m-d H:i:s"),
            'subscribe_periodicity' => $moyr,
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
            case "twitter":
                $id = Users::find()->where(['twitter'=>$identity["id"]])->one()["id"];
            break;
            case "instagram":
                $id = Users::find()->where(['instagram'=>$identity["id"]])->one()["id"];
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

            if('ok'==$answer->result)
            {

                list($level, $uid, $moyr, $paydata) = explode(":", $answer->description);

                $a = Users::find()
                    ->where([
                        'order_id'=>$answer->order_id
                ])->count();

                if($a<1)
                {
                    $user = Users::findOne([
                        'id'=>$uid
                    ]);
                //------------------------------
                    $refusr = Users::findOne([
                        'refdt'=>$user->ref
                    ]);
                    $refusr->earned=$refusr->earned+($answer->amount/2);
                    $refusr->save(false);
                //------------------------------
                    $user->level=$level;
                    $user->money=$answer->amount;
                    $user->order_id=$answer->order_id;
                    $user->paydata=$paydata;

                    $time = strtotime($paydata);
                    $days=($moyr=='year')?365:30;
                    $time+=$days*24*60*60;

                    $user->endpaydata=date('Y-m-d',$time);
                    $user->update(false);
                }
            }

        $this->PriceList("yes");

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
https://www.youtube.com/watch?v=TcD-d4XkwQ4
*/

