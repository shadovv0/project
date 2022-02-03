<?php

/* @var $generation app\models\Generation */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = $generation->name;
$this->params['breadcrumbs'][] = ['label' => 'Generations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="generation-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php foreach($generation->modifications as $modification): ?>
            <?= Html::a($modification->name, Url::to(['modification/view', 'code' => $modification->code])) ?>
        <?php endforeach; ?>
    </p>

</div>
