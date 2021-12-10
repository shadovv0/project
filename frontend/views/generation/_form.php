<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Brand;
use app\models\Model;
use app\models\Generation;


/* @var $this yii\web\View */
/* @var $model app\models\Generation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="generation-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'model_id')->dropDownList(
            ArrayHelper::map(\app\models\ModelSearch::find()->asArray()->all(), 'id', 'name'),
        [
           'prompt'=>'Select Model',
        ]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dt_start')->textInput() ?>

    <?= $form->field($model, 'dt_end')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>