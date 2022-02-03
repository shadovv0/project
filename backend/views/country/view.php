<?php

/* @var $country app\models\Country */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = $country->name;
$this->params['breadcrumbs'][] = ['label' => 'Countries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="country-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php foreach($country->brands as $brand): ?>
            <?= Html::a($brand->name, Url::to(['brand/view', 'code' => $brand->code])) ?>
        <?php endforeach; ?>
    </p>

</div>
