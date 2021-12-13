<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Modification */
/* @var $dropdownGenerations array */

$this->title = 'Create Modification';
$this->params['breadcrumbs'][] = ['label' => 'Modifications', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modification-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'dropdownGenerations' => $dropdownGenerations,
    ]) ?>

</div>