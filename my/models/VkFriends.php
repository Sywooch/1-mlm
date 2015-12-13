<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vk_friends".
 *
 * @property integer $id
 * @property integer $uid
 * @property string $uarrid
 * @property string $date
 */
class VkFriends extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vk_friends';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid'], 'integer'],
            [['uarrid'], 'string'],
            [['date'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'uid' => 'Uid',
            'uarrid' => 'Uarrid',
            'date' => 'Date',
        ];
    }
}
