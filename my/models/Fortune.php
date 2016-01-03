<?php
namespace app\models;
use Yii;
class Fortune extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'fortune';
    }

    public function rules()
    {
        return [
            [['uid', 'visited'], 'integer'],
            [['date'], 'safe'],
            [['title'], 'string', 'max' => 30]
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'uid' => 'Uid',
            'date' => 'Date',
            'title' => 'Title',
            'visited' => 'Visited',
        ];
    }
}
