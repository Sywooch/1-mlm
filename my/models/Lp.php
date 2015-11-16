<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lp".
 *
 * @property integer $id
 * @property string $uid
 * @property string $name
 * @property string $desc
 * @property string $keywords
 * @property string $h1
 * @property string $h2
 * @property string $h3
 * @property string $h1c
 * @property string $h2c
 * @property string $h3c
 * @property string $yt1
 * @property string $yt2
 * @property string $bg
 * @property string $autoplay
 * @property string $url
 * @property string $button
 * @property string $group
 * @property integer $clicks
 */
class Lp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lp';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid', 'name', 'desc', 'keywords', 'h1', 'h2', 'h3', 'h1c', 'h2c', 'h3c', 'yt1', 'yt2', 'bg', 'autoplay', 'url', 'button', 'group', 'clicks'], 'required'],
            [['clicks'], 'integer'],
            [['uid'], 'string', 'max' => 15],
            [['name'], 'string', 'max' => 25],
            [['desc'], 'string', 'max' => 250],
            [['keywords'], 'string', 'max' => 140],
            [['h1', 'h2', 'h3'], 'string', 'max' => 100],
            [['h1c', 'h2c', 'h3c'], 'string', 'max' => 7],
            [['yt1', 'yt2'], 'string', 'max' => 11],
            [['bg'], 'string', 'max' => 125],
            [['autoplay'], 'string', 'max' => 1],
            [['url', 'button'], 'string', 'max' => 50],
            [['group'], 'string', 'max' => 10]
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
            'name' => 'Name',
            'desc' => 'Desc',
            'keywords' => 'Keywords',
            'h1' => 'H1',
            'h2' => 'H2',
            'h3' => 'H3',
            'h1c' => 'H1c',
            'h2c' => 'H2c',
            'h3c' => 'H3c',
            'yt1' => 'Yt1',
            'yt2' => 'Yt2',
            'bg' => 'Bg',
            'autoplay' => 'Autoplay',
            'url' => 'Url',
            'button' => 'Button',
            'group' => 'Group',
            'clicks' => 'Clicks',
        ];
    }
}
