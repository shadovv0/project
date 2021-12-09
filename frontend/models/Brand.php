<?php

namespace app\models;
use Yii;

/**
 * This is the model class for table "brand".
 *
 * @property int $id
 * @property int|null $country_id
 * @property string|null $name
 * @property string|null $code
 */

class Brand extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'brand';
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['country_id'], 'integer'],
            [['name', 'code'], 'string', 'max' => 255],
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'country_id' => 'Country ID',
            'name' => 'Name',
            'code' => 'Code',
        ];
    }
    public function getCountry()
    {
        return $this->hasOne(Country::className(), ['id' => 'country_id']);
    }
}