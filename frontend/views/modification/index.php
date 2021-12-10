<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ModificationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Modifications';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modification-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Modification', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
             'attribute' => 'generation_id',
              'value' => 'country.name',
            ],
            'name',
            'code',
            'engine_type',
            //'engine_volume',
            //'power',
            //'price',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>