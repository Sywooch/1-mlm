<?php
namespace app\models;
use Yii;
use yii\web\UploadedFile;

class Users extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'users';
    }

    public function rules()
    {
        return [
            [['level', 'c', 'days', 'team',
                'rating', 'clicks', 'metrika', 'friends', 'class'], 'integer'],
            [['regdate', 'paydate', 'active', 'done', 'sent', 'added'], 'safe'],
            [['money', 'paid', 'earned', 'bonus', 'profit'], 'number'],
            [['ref2', 'ref3', 'ref4', 'ref5', 'ip'], 'string', 'max' => 15],

            [['socid'], 'string', 'max' => 50],

			[['facebook', 'mailru', 'vkontakte', 'linkedin', 'yandex'], 'string', 'max' => 30],
			
            [['service', 'fn'], 'string', 'max' => 20],
            [['refdt', 'star'], 'string', 'max' => 6],
            [['ln', 'skype'], 'string', 'max' => 25],
            [['api'], 'string', 'max' => 2],
        //    [['ref'], 'string', 'max' => 20],/*10*/
            [['purse', 'site'], 'string', 'max' => 30],

            [['city', 'country'], 'string', 'max' => 30],

            [['reglink'], 'string', 'max' => 75],
            [['ytch'], 'string', 'max' => 24],
            [['playlist'], 'string', 'max' => 34],
            [['pwd'], 'string', 'max' => 32],
            [
                ['userpic'], 'file',
                'skipOnEmpty' => false,
                'extensions'  =>  ['png', 'jpg', 'gif'],
                'maxSize'     => 1024*1024
            ],
            [['mobile'], 'string', 'max' => 16],
  /*          [['mobile'], 'match',
                'pattern' => "/^[\+]\d{2}[\(]\d{2}[\)]\d{4}[\-]\d{4}$/i",
                'message'=>"Неправильный номер телефона"], */
            [['email'], 'email',  'message'=>"Неправильный адрес электронной почты"],
            [['email'], 'unique', 'message'=>"Адрес электронной почты уже существует"],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'socid' => 'Socid',
            'service' => 'Service',
            'refdt' => 'Refdt',
            'level' => 'Level',
            'userpic' => 'Userpic',
            'fn' => 'Fn',
            'ref2' => 'Ref2',
            'ref3' => 'Ref3',
            'ref4' => 'Ref4',
            'ref5' => 'Ref5',
            'c' => 'C',
            'city' => 'City',
            'ln' => 'Ln',
            'api' => 'Api',
            'ref' => 'Ref',
            'country' => 'Country',
            'ip' => 'Ip',
            'mobile' => 'Mobile',
            'skype' => 'Skype',
            'email' => 'Email',
            'purse' => 'Purse',
            'regdate' => 'Regdate',
            'paydate' => 'Paydate',
            'active' => 'Active',
            'days' => 'Days',
            'money' => 'Money',
            'team' => 'Team',
            'paid' => 'Paid',
            'earned' => 'Earned',
            'done' => 'Done',
            'bonus' => 'Bonus',
            'rating' => 'Rating',
            'clicks' => 'Clicks',
            'reglink' => 'Reglink',
            'site' => 'Site',
            'ytch' => 'Ytch',
            'playlist' => 'Playlist',
            'sent' => 'Sent',
            'pwd' => 'Pwd',
            'metrika' => 'Metrika',
            'added' => 'Added',
            'friends' => 'Friends',
            'star' => 'Star',
            'class' => 'Class',
            'profit' => 'Profit',
        ];
    }
    static public function saveChange($p){
        $identity = \Yii::$app->getUser()->getIdentity()->profile;
        switch($identity["service"])
        {
            case "facebook":
                $a = $users = Users::findOne(['facebook'=>$identity["id"]]);
            break;
            case "vkontakte":
                $a = $users = Users::findOne(['vkontakte'=>$identity["id"]]);
            break;
            case "linkedin_oauth2":
                $a = $users = Users::findOne(['linkedin'=>$identity["id"]]);
            break;
            case "google":
                $a = $users = Users::findOne(['googleplus'=>$identity["id"]]);
            break;
            case "yandex":
                $a = $users = Users::findOne(['yandex'=>$identity["id"]]);
            break;
            case "mailru":
                $a = $users = Users::findOne(['mailru'=>$identity["id"]]);
            break;
        }
        if($a) {
            $users->active=date("Y-m-d");

            if( !empty($p["Users-companyid"]) ){
                $users->companyid = (int)$p["Users-companyid"];
            }
            else {
                $users->fn     =  ( !empty($p["Users-fn"]) )?$p["Users-fn"]:null;
                $users->ln     =  ( !empty($p["Users-ln"]) )?$p["Users-ln"]:null;
                $users->email  =  ( !empty($p["Users-email"]) )?$p["Users-email"]:null;
                $users->mobile =  ( !empty($p["Users-mobile"]) )?$p["Users-mobile"]:null;
                $users->skype  =  ( !empty($p["Users-skype"]) )?$p["Users-skype"]:null;
                $users->city   =  ( !empty($p["Users-city"]) )?$p["Users-city"]:null;

                $users->country =  ( !empty($p["Users-country"]) )?$p["Users-country"]:null;
                //$users->purse =  ( !empty($p["Users-purse"]) )?$p["Users-purse"]:null;

                $users->facebook   =  ( !empty($p["Users-facebook"]) )?$p["Users-facebook"]:null;
                $users->vkontakte  =  ( !empty($p["Users-vkontakte"]) )?$p["Users-vkontakte"]:null;
                $users->linkedin   =  ( !empty($p["Users-linkedin"]) )?$p["Users-linkedin"]:null;
                $users->googleplus =  ( !empty($p["Users-googleplus"]) )?$p["Users-googleplus"]:null;
                $users->yandex     =  ( !empty($p["Users-yandex"]) )?$p["Users-yandex"]:null;
                $users->mailru     =  ( !empty($p["Users-mailru"]) )?$p["Users-mailru"]:null;
                $users->status=1;
            }
            $users->update(false);
            return 1;
        }
        return 0;
    }
    public function getLevels()
    {
        return $this->hasOne(Levels::className(), ['id' => 'level']);
    }
}
