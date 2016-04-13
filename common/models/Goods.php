<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "goods".
 *
 * @property integer $id_goods
 * @property string $region
 * @property string $town
 * @property integer $sale
 * @property integer $bye
 * @property string $main_img
 * @property string $mini_img
 * @property string $prise
 * @property string $categories
 * @property string $tovar
 * @property string $properties
 * @property string $discription
 * @property string $pay
 * @property string $delivery
 * @property string $phone
 * @property string $contacts
 * @property string $visible
 * @property string $hot
 */
class Goods extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'goods';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['region', 'town', 'sale', 'bye', 'main_img', 'mini_img', 'prise', 'categories', 'tovar', 'properties', 'discription', 'pay', 'delivery', 'phone', 'contacts', 'visible', 'hot'], 'required'],
            [['sale', 'bye'], 'integer'],
            [['discription', 'visible', 'hot'], 'string'],
            [['region', 'main_img', 'mini_img', 'prise', 'categories', 'tovar', 'properties', 'pay', 'delivery', 'phone', 'contacts'], 'string', 'max' => 255],
            [['town'], 'string', 'max' => 25]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_goods' => 'Id Goods',
            'region' => 'Region',
            'town' => 'Town',
            'sale' => 'Sale',
            'bye' => 'Bye',
            'main_img' => 'Main Img',
            'mini_img' => 'Mini Img',
            'prise' => 'Prise',
            'categories' => 'Categories',
            'tovar' => 'Tovar',
            'properties' => 'Properties',
            'discription' => 'Discription',
            'pay' => 'Pay',
            'delivery' => 'Delivery',
            'phone' => 'Phone',
            'contacts' => 'Contacts',
            'visible' => 'Visible',
            'hot' => 'Hot',
        ];
    }

    /**
     * @inheritdoc
     * @return GoodsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new GoodsQuery(get_called_class());
    }
}
