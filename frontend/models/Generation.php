<?php
namespace app\models;
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
 */
class Generation extends \yii\db\ActiveRecord
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
            [['model_id'], 'integer'],
            [['dt_start', 'dt_end'], 'safe'],
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
            'model_id' => 'Model ID',
            'name' => 'Name',
            'code' => 'Code',
            'dt_start' => 'Dt Start',
            'dt_end' => 'Dt End',
        ];
    }
    public function getModel()
    {
        return $this->hasOne(Model::className(), ['id' => 'model_id']);
    }
}