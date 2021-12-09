<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Brand;
use app\models\Model;

/* @var $this yii\web\View */
/* @var $model app\models\Model */
/* @var $form yii\widgets\ActiveForm */
?>

    <div class="model-form">

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'brand_id')->dropDownList(
        ArrayHelper::map(\app\models\BrandSearch::find()->asArray()->all(), 'id', 'name'),
    [
            'prompt'=>'Select Brand',
             '$.post( "index.php?r=brands/lists&id=', '"+$(this.val(), function(data) {
                $("select#models-contact").html(data);
            });'
    ]); ?>

<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>


<?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'class')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'sort')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

<?php ActiveForm::end(); ?>