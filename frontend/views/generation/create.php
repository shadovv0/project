<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Generation */
/* @var $dropdownModels array */

$this->title = 'Create Generation';
$this->params['breadcrumbs'][] = ['label' => 'Generations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="generation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'dropdownModels' => $dropdownModels,
    ]) ?>

</div>