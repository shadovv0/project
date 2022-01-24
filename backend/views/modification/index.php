<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ModificationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $dropdownGenerations array */

$this->title = 'Modifications';
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
$this->params['breadcrumbs'][] = array(
    'label' => 'Generation',
    'url' => Url::to(['generation/index']),
);
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modification-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= Html::a('ubasdf', '/modification/index', ['class' => 'btn btn-outline-secondary']) ?>
    <?= Html::a('asdfsdfwe', '/modification/index', ['class' => 'btn btn-outline-secondary']) ?>
    <?= Html::a('24gesegdg', '/modification/index', ['class' => 'btn btn-outline-secondary']) ?>

</div>