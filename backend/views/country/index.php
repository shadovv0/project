<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CountrySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Countries';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="country-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Germany', '/brand/index', ['class' => 'btn btn-outline-secondary']) ?>
        <?= Html::a('USA', '/brand/index', ['class' => 'btn btn-outline-secondary']) ?>
        <?= Html::a('Japan', '/brand/index', ['class' => 'btn btn-outline-secondary']) ?>
        <?= Html::a('France', '/brand/index', ['class' => 'btn btn-outline-secondary']) ?>
        <?= Html::a('Russia', '/brand/index', ['class' => 'btn btn-outline-secondary']) ?>
    </p>



</div>