<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order_blog".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $skype
 * @property string $date
 */
class OrderBlog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order_blog';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'skype'], 'string', 'max' => 30],
            [['date'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'skype' => 'Skype',
            'date' => 'Date',
        ];
    }
}
