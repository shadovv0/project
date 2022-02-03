<?php
/* @var $brand app\models\Brand */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = $brand->name;
$this->params['breadcrumbs'][] = ['label' => 'Brands', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this-> title;
\yii\web\YiiAsset::register($this);
?>
<div class="brand-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php foreach($brand->models as $model): ?>
              <?= Html::a($model->name, Url::to(['model/view', 'code' => $model->code])) ?>
        <?php endforeach; ?>
    </p>

</div>
