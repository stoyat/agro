<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "main_menu".
 *
 * @property integer $id_menu
 * @property string $name_menu
 * @property string $img_menu
 * @property string $show_menu
 * @property string $url
 */
class MainMenu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'main_menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_menu', 'img_menu', 'show_menu', 'url'], 'required'],
            [['show_menu'], 'string'],
            [['name_menu', 'img_menu', 'url'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_menu' => 'Id Menu',
            'name_menu' => 'Name Menu',
            'img_menu' => 'Img Menu',
            'show_menu' => 'Show Menu',
            'url' => 'Url',
        ];
    }
}
