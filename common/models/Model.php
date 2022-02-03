<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;

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
    public function getGenerations()
    {
        return $this->hasMany(Generation::class, ['model_id' => 'id']);
    }

}