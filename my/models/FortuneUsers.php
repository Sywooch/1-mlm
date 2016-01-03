<?php
namespace app\models;
use Yii;
class FortuneUsers extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'fortune_users';
    }

    public function rules()
    {
        return [
            [['uid', 'fortune_id', 'winner', 'prisents_type_id'], 'integer']
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'uid' => 'Uid',
            'fortune_id' => 'Fortune ID',
            'winner' => 'Winner',
            'prisents_type_id' => 'Prisents Type ID',
        ];
    }
}
