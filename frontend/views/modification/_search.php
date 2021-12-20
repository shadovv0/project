<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ModificationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="modification-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'generation_id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'code') ?>

    <?= $form->field($model, 'engine_type') ?>

    <?php // echo $form->field($model, 'engine_volume') ?>

    <?php // echo $form->field($model, 'power') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'transmission') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>