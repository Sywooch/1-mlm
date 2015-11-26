<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "msgs".
 *
 * @property integer $id
 * @property integer $uid4
 * @property integer $uid2
 * @property string $msg
 */
class Msgs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'msgs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'uid4', 'uid2'], 'integer'],
            [['msg'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'uid4' => 'Uid4',
            'uid2' => 'Uid2',
            'msg' => 'Msg',
        ];
    }
}
