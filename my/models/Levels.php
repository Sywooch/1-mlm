<?php
namespace app\models;
use Yii;
class Levels extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'levels';
    }

    public function rules()
    {
        return [
            [['webinar', 'days', ' maxLandPage'], 'integer'],
            [['title'], 'string', 'max' => 20]
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'webinar' => 'Webinar',
            'days' => 'Days',
            'maxLandPage' => 'Max Land Page',
        ];
    }
}
