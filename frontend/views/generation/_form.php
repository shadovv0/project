<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Model;
use app\models\Generation;
use kartik\date\DatePicker;


/* @var $this yii\web\View */
/* @var $model app\models\Generation */
/* @var $form yii\widgets\ActiveForm */
/* @var $dropdownModels array */
?>

<div class="generation-form">

    <?php $form = ActiveForm::begin([
//        'enableAjaxValidation' => true,
    ])?>

    <?= $form->field($model, 'model_id')->dropDownList(
            Model::getDropdownArray('id', 'name'),
        [
           'prompt'=>'Select Model',
            'header'=>'Model',
        ]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dt_start')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dt_end')->textInput() ?>

    <?= $form->field($model, 'avatar')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>