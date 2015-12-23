<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "paydt".
 *
 * @property integer $id
 * @property string $date
 * @property string $dt
 */
class Paydt extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'paydt';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['dt'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'dt' => 'Dt',
        ];
    }
}
