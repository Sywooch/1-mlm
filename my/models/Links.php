<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "links".
 *
 * @property string $id
 * @property string $uid
 * @property string $slug
 * @property string $url
 * @property integer $clicks
 * @property string $title
 */
class Links extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'links';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid', 'slug', 'url', 'clicks'], 'required'],
            [['clicks'], 'integer'],
            [['uid'], 'string', 'max' => 15],
            [['slug'], 'string', 'max' => 7],
            [['url'], 'string', 'max' => 100],
            [['title'], 'string', 'max' => 50]
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
            'slug' => 'Slug',
            'url' => 'Url',
            'clicks' => 'Clicks',
            'title' => 'Title',
        ];
    }
}
