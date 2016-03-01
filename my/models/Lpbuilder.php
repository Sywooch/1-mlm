<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lpbuilder".
 *
 * @property integer $id
 * @property integer $uid
 * @property string $dt
 * @property string $url
 */
class Lpbuilder extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lpbuilder';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid'], 'required'],
            [['id', 'uid'], 'integer'],
            [['dt'], 'string'],
            [['url'], 'string', 'max' => 50]
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
            'dt' => 'Dt',
            'url' => 'Url',
        ];
    }
}
