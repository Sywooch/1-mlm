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
            [['socid', 'ref2', 'ref3', 'ref4', 'ref5', 'ip'], 'string', 'max' => 15],
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
}
