<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GenerationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $dropdownModels array */

$this->title = 'Generations';
$this->params['breadcrumbs'][] = array(
    'label' => 'Country',
    'url' => Url::to(['country/index']),
);
$this->params['breadcrumbs'][] = array(
    'label' => 'Brand',
    'url' => Url::to(['brand/index']),
);
$this->params['breadcrumbs'][] = array(
    'label' => 'Model',
    'url' => Url::to(['model/index']),
);
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="generation-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= Html::a('GT-R', '/modification/index', ['class' => 'btn btn-outline-secondary']) ?>
    <?= Html::a('avant', '/modification/index', ['class' => 'btn btn-outline-secondary']) ?>
    <?= Html::a('8', '/modification/index', ['class' => 'btn btn-outline-secondary']) ?>
    <?= Html::a('avant', '/modification/index', ['class' => 'btn btn-outline-secondary']) ?>
    <?= Html::a('govno', '/modification/index', ['class' => 'btn btn-outline-secondary']) ?>


</div>