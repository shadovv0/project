<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "modification".
 *
 * @property int $id
 * @property int|null $generation_id
 * @property string|null $name
 * @property string|null $code
 * @property int|null $engine_type
 * @property float|null $engine_volume
 * @property float|null $power
 * @property float|null $price
 */
class Modification extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'modification';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['generation_id', 'engine_type'], 'integer'],
            [['engine_volume', 'power', 'price'], 'number'],
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
            'generation_id' => 'Generation',
            'name' => 'Name',
            'code' => 'Code',
            'engine_type' => 'Engine Type',
            'engine_volume' => 'Engine Volume',
            'power' => 'Power',
            'price' => 'Price',
        ];
    }
    public function getGeneration()
    {
        return $this->hasOne(Generation::className(), ['id' => 'generation_id']);
    }

    public static function getDropdownArray($id = 'id', $name = 'name')
    {
        $res = parent::getDropdownArray($id,$name);

        return $res;
    }
}