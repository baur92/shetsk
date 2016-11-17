<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comments".
 *
 * @property integer $id_
 * @property string $fullname_
 * @property string $text_
 * @property string $date_
 * @property boolean $posted_
 */
class Comments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fullname_', 'text_'], 'string'],
            [['date_'], 'safe'],
            [['posted_'], 'boolean'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_' => 'Id',
            'fullname_' => 'Fullname',
            'text_' => 'Text',
            'date_' => 'Date',
            'posted_' => 'Posted',
        ];
    }
}
