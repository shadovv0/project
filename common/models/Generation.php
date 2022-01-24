<?php

namespace common\models;
use Yii;



/**
 * This is the model class for a table "generation".
 *
 *@property int $id
 * @property int|null $model_id
 * @property string|null $name
 * @property string|null $code
 * @property string|null $dt_start
 * @property string|null $dt_end
 * @property string|null $avatar
 */
class Generation extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'generation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['model_id',], 'integer'],
            [['model_id', 'name'], 'required'],
            [['dt_start', 'dt_end'], 'safe'],
            [['name', 'code',], 'string', 'max' => 255],
            [['avatar',], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'model_id' => 'Model',
            'name' => 'Name',
            'code' => 'Code',
            'dt_start' => 'Dt Start',
            'dt_end' => 'Dt End',
            'avatar' => 'Avatar',
        ];
    }
    public function getModel()
    {
        return $this->hasOne(Model::className(), ['id' => 'model_id']);
    }

    public static function getDropdownArray($id = 'id', $name = 'name')
    {
        $res = parent::getDropdownArray($id, $name);

        return $res;
    }


}
