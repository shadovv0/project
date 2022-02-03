<?php

/* @var $model app\models\Model */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php foreach ($model->generations as $generation): ?>
            <?= Html::a($model->name, Url::to(['generation/view', 'code' => $generation->code])) ?>
        <?php endforeach; ?>
    </p>
</div>
