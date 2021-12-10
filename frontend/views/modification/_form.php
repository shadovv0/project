<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Generation;
use app\models\Modification;

/* @var $this yii\web\View */
/* @var $model app\models\Modification */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="modification-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'generation_id')->dropDownList(
            ArrayHelper::map(\app\models\GenerationSearch::find()->asArray()->all(), 'id', 'name'),
        [
            'prompt'=>'Select Generation',
        ]);
    ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'engine_type')->textInput() ?>

    <?= $form->field($model, 'engine_volume')->textInput() ?>

    <?= $form->field($model, 'power')->textInput() ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>