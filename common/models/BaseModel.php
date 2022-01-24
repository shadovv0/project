<?php

namespace common\models;

use yii\helpers\ArrayHelper;

class BaseModel extends \yii\db\ActiveRecord
{
    public static function getDropdownArray($id = 'id', $name = 'name') {
        $res = ArrayHelper::map(static::find()->asArray()->all(), 'id', 'name');

        return $res;
    }
}