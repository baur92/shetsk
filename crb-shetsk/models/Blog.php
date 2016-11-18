<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blog".
 *
 * @property integer $id_
 * @property string $fullname_
 * @property string $question_
 * @property string $answer_
 * @property string $date_
 * @property boolean $posted_
 */
class Blog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fullname_', 'question_', 'answer_'], 'string'],
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
            'question_' => 'Question',
            'answer_' => 'Answer',
            'date_' => 'Date',
            'posted_' => 'Posted',
        ];
    }
}
