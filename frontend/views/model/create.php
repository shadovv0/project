<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Model */
/* @var $dropdownBrands array */

$this->title = 'Create Model';
$this->params['breadcrumbs'][] = ['label' => 'Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'dropdownBrands' => $dropdownBrands,
    ]) ?>

</div>