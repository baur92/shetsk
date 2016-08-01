<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property string $firstname_
 * @property string $lastname_
 * @property string $patronymic_
 * @property string $photo_
 * @property string $position_
 * @property integer $id_
 */
class Users extends \yii\db\ActiveRecord
{

    public $file;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['file'], 'file'],
            [['firstname_', 'lastname_', 'patronymic_', 'photo_', 'position_', 'position_kk_', 'description_'], 'string'],
            [['id_'], 'required'],
            [['id_'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'firstname_' => 'Firstname',
            'lastname_' => 'Lastname',
            'patronymic_' => 'Patronymic',
            'photo_' => 'Photo',
            'position_' => 'Position',
            'position_kk_' => 'PositionKk',
            'description_' => 'Description',
            'id_' => 'Id',
            'file' => 'Photo'
        ];
    }
}
