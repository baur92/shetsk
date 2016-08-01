<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property string $header
 * @property string $description
 * @property string $create_date_
 * @property string $video
 * @property string $image
 * @property string $audio
 * @property integer $id_
 * @property string $description_kk_
 * @property string $header_kk_
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['header', 'description', 'video', 'image', 'audio', 'description_kk_', 'header_kk_'], 'string'],
            [['create_date_'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'header' => 'Header',
            'description' => 'Description',
            'create_date_' => 'Create Date',
            'video' => 'Video',
            'image' => 'Image',
            'audio' => 'Audio',
            'id_' => 'Id',
            'description_kk_' => 'Description Kk',
            'header_kk_' => 'Header Kk',
        ];
    }
}
