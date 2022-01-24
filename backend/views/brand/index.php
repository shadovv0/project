<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BrandSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $dropdownCountries array */

$this->title = 'Brands';
$this->params['breadcrumbs'][] = [
        'label' => 'Country',
        'url' => Url::to(['country/index']),
];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="brand-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Audi', '/model/index', ['class' => 'btn btn-outline-secondary']) ?>
        <?= Html::a('Dodge', '/model/index', ['class' => 'btn btn-outline-secondary']) ?>
        <?= Html::a('Nissan', '/model/index', ['class' => 'btn btn-outline-secondary']) ?>
        <?= Html::a('Peugeot', '/model/index', ['class' => 'btn btn-outline-secondary']) ?>
        <?= Html::a('lada', '/model/index', ['class' => 'btn btn-outline-secondary']) ?>
        <?= Html::a('porsche', '/model/index', ['class' => 'btn btn-outline-secondary']) ?>
    </p>



</div>