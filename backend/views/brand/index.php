<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use common\models\Brand;
use yii\db\ActiveRecord;

/* @var $this yii\web\View */
/* @var $brands \common\models\Model[] */

$this->title = 'Brands';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="brand-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php foreach ($brands as $brand): ?>
            <?= Html::a($brand->name, Url::to(['brand/view', 'code' => $brand->code]), ['class' => 'btn btn-outline-secondary']) ?>
        <?php endforeach; ?>
    </p>



</div>