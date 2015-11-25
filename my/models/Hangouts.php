<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hangouts".
 *
 * @property integer $id
 * @property string $uid
 * @property string $date
 * @property string $time
 * @property string $yt
 * @property integer $class
 * @property string $title
 * @property string $description
 * @property string $url
 * @property string $download
 * @property string $speaker
 * @property string $button
 * @property string $link
 */
class Hangouts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hangouts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date', 'time', 'yt', 'title', 'description', 'url', 'download', 'speaker', 'button', 'link'], 'required'],
            [['date'], 'safe'],
            [['class'], 'integer'],
            [['description'], 'string'],
            [['uid'], 'string', 'max' => 15],
            [['time'], 'string', 'max' => 5],
            [['yt'], 'string', 'max' => 11],
            [['title', 'download'], 'string', 'max' => 150],
            [['url'], 'string', 'max' => 27],
            [['speaker'], 'string', 'max' => 100],
            [['button'], 'string', 'max' => 50],
            [['link'], 'string', 'max' => 125]
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
            'date' => 'Date',
            'time' => 'Time',
            'yt' => 'Yt',
            'class' => 'Class',
            'title' => 'Title',
            'description' => 'Description',
            'url' => 'Url',
            'download' => 'Download',
            'speaker' => 'Speaker',
            'button' => 'Button',
            'link' => 'Link',
        ];
    }
}
