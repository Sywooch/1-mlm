<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property string $uid
 * @property string $id
 * @property string $fb
 * @property string $api
 * @property string $userpic
 * @property string $ref
 * @property string $ref2
 * @property string $ref3
 * @property string $ref4
 * @property string $ref5
 * @property integer $c
 * @property string $fn
 * @property string $ln
 * @property integer $city
 * @property integer $country
 * @property string $ip
 * @property string $mobile
 * @property string $skype
 * @property string $email
 * @property string $purse
 * @property string $regdate
 * @property string $paydate
 * @property string $active
 * @property integer $days
 * @property integer $level
 * @property integer $team
 * @property string $money
 * @property string $paid
 * @property string $earned
 * @property string $done
 * @property string $bonus
 * @property integer $rating
 * @property integer $clicks
 * @property string $reglink
 * @property string $site
 * @property string $ytch
 * @property string $playlist
 * @property string $sent
 * @property string $pwd
 * @property string $metrika
 * @property string $added
 * @property string $friends
 * @property string $star
 * @property integer $class
 * @property string $profit
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid', 'id', 'fb', 'api', 'userpic', 'ref', 'ref2', 'ref3', 'ref4', 'ref5', 'c', 'fn', 'ln', 'city', 'country', 'ip', 'mobile', 'skype', 'email', 'purse', 'regdate', 'paydate', 'active', 'days', 'level', 'team', 'money', 'paid', 'earned', 'done', 'bonus', 'rating', 'clicks', 'reglink', 'site', 'ytch', 'playlist', 'sent', 'pwd', 'metrika', 'added', 'friends', 'star', 'class', 'profit'], 'required'],
            [['c', 'city', 'country', 'days', 'level', 'team', 'rating', 'clicks', 'metrika', 'friends', 'class'], 'integer'],
            [['regdate', 'paydate', 'active', 'done', 'sent', 'added'], 'safe'],
            [['money', 'paid', 'earned', 'bonus', 'profit'], 'number'],
            [['uid', 'fb', 'ref2', 'ref3', 'ref4', 'ref5', 'ip'], 'string', 'max' => 15],
            [['id', 'star'], 'string', 'max' => 6],
            [['api'], 'string', 'max' => 2],
            [['userpic'], 'string', 'max' => 125],
            [['ref'], 'string', 'max' => 10],
            [['fn'], 'string', 'max' => 20],
            [['ln', 'skype'], 'string', 'max' => 25],
            [['mobile'], 'string', 'max' => 14],
            [['email'], 'email', 'message'=>"Неправильный адрес электронной почты"],
            [['purse', 'site'], 'string', 'max' => 30],
            [['reglink'], 'string', 'max' => 75],
            [['ytch'], 'string', 'max' => 24],
            [['playlist'], 'string', 'max' => 34],
            [['pwd'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
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
