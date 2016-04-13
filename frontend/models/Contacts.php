<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contacts".
 *
 * @property integer $id_con
 * @property string $name_con
 * @property string $mail_con
 * @property string $subject
 * @property string $message
 */
class Contacts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contacts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_con', 'mail_con', 'subject', 'message'], 'required'],
            [['message'], 'string'],
            [['name_con', 'mail_con', 'subject'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_con' => 'Id Con',
            'name_con' => 'Name Con',
            'mail_con' => 'Mail Con',
            'subject' => 'Subject',
            'message' => 'Message',
        ];
    }
}
