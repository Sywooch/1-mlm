<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usr_companies_link".
 *
 * @property integer $id
 * @property integer $uid
 * @property integer $lp_id
 * @property string $link
 */
class UsrCompaniesLink extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usr_companies_link';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid', 'lp_id'], 'integer'],
            [['link'], 'string', 'max' => 100]
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
            'lp_id' => 'Lp ID',
            'link' => 'Link',
        ];
    }
}
