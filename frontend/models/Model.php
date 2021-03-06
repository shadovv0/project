<?php

namespace app\models;
use Yii;

/**
 * This is the model class for table "model".
 *
 * @property int $id
 * @property int|null $brand_id
 * @property string|null $name
 * @property string|null $code
 * @property string|null $class
 * @property int|null $sort
 */
class Model extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'model';
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['brand_id', 'sort'], 'integer'],
            [['brand_id', 'name'], 'required'],
            [['name', 'code', 'class'], 'string', 'max' => 255],
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'brand_id' => 'Brand',
            'name' => 'Name',
            'code' => 'Code',
            'class' => 'Class',
            'sort' => 'Sort',
        ];
    }
    public function getBrand()
    {
        return $this->hasOne(Brand::className(), ['id' => 'brand_id']);
    }


    public static function getDropdownArray($id = 'id', $name = 'name') {
        $res = parent::getDropdownArray($id,$name);

        return $res;
    }


}