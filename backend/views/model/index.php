<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ModelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $dropdownBrands array */

$this->title = 'Models';
$this->params['breadcrumbs'][] = array(
    'label' => 'Country',
    'url' => Url::to(['country/index']),
);
$this->params['breadcrumbs'][] = array(
        'label' => 'Brand',
        'url' => Url::to(['brand/index']),
);
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="model-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= Html::a('GT-R', '/generation/index', ['class' => 'btn btn-outline-secondary']) ?>
    <?= Html::a('RS', '/generation/index', ['class' => 'btn btn-outline-secondary']) ?>
    <?= Html::a('Challenger', '/generation/index', ['class' => 'btn btn-outline-secondary']) ?>
    <?= Html::a('406', '/generation/index', ['class' => 'btn btn-outline-secondary']) ?>

</div>