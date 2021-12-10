<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GenerationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Generations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="generation-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Generation', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
             'attribute' => 'model_id',
              'value' => 'model.name',
            ],
            'name',
            'code',
            'dt_start',
            //'dt_end',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>