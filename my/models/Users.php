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
           /*
            [['uid', 'id', 'fb', 'api', 'userpic', 'ref', 'ref2', 'ref3',
            'ref4', 'ref5', 'c', 'fn', 'ln', 'city', 'country', 'ip', 'mobile',
            'skype', 'email', 'purse', 'regdate', 'paydate', 'active', 'days',
            'level', 'team', 'money', 'paid', 'earned', 'done', 'bonus', 'rating',
            'clicks', 'reglink', 'site', 'ytch', 'playlist', 'sent', 'pwd',
            'metrika', 'added', 'friends', 'star', 'class', 'profit'], 'required'],
           */
            [['c', 'city', 'country', 'days', 'level', 'team', 'rating',
                'clicks', 'metrika', 'friends', 'class'], 'integer'],
            [['regdate', 'paydate', 'active', 'done', 'sent', 'added'], 'safe'],
            [['money', 'paid', 'earned', 'bonus', 'profit'], 'number'],
            [['uid', 'fb', 'ref2', 'ref3', 'ref4', 'ref5', 'ip'], 'string', 'max' => 15],
            [['id', 'star'], 'string', 'max' => 6],
            [['api'], 'string', 'max' => 2],
            [['socid','service'], 'string'],
            [
                ['userpic'], 'file',
                'skipOnEmpty' => false,
                'extensions'  =>  ['png', 'jpg', 'gif'],
                'maxSize'     => 1024*1024
            ],


            /*[['ref'], 'string', 'max' => 10],*/
            [['fn'], 'string', 'max' => 20],
            [['ln', 'skype'], 'string', 'max' => 25],

    /*!!!*/        [['mobile'], 'string', 'max' => 16],
            [['mobile'], 'match',
                'pattern' => "/^[\+]\d{2}[\(]\d{2}[\)]\d{4}[\-]\d{4}$/i",
                'message'=>"Неправильный номер телефона"],

            [['email'], 'email',  'message'=>"Неправильный адрес электронной почты"],
            [['email'], 'unique', 'message'=>"Адрес электронной почты уже существует"],
            [['purse', 'site'], 'string', 'max' => 30],
            [['reglink'], 'string', 'max' => 75],
            [['ytch'], 'string', 'max' => 24],
            [['playlist'], 'string', 'max' => 34],
            [['pwd'], 'string', 'max' => 32]
        ];
    }

    public function attributeLabels()
    {
        return [
            'uid' => 'Uid',
            'id' => 'ID',
            'fb' => 'Fb',
            'api' => 'Api',
            'userpic' => 'Userpic',
            'ref' => 'Ref',
            'ref2' => 'Ref2',
            'ref3' => 'Ref3',
            'ref4' => 'Ref4',
            'ref5' => 'Ref5',
            'c' => 'C',
            'fn' => 'Fn',
            'ln' => 'Ln',
            'city' => 'City',
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
            'level' => 'Level',
            'team' => 'Team',
            'money' => 'Money',
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
