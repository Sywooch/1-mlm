<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "commands".
 *
 * @property integer $id
 * @property integer $refusr_id
 * @property integer $users_id
 */
class Commands extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'commands';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['refusr_id', 'users_id'], 'required'],
            [['refusr_id', 'users_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'refusr_id' => 'Refusr ID',
            'users_id' => 'Users ID',
        ];
    }
}
