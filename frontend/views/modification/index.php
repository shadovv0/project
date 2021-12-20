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
                'enableSorting' => true,
                'value' => 'generation.name',
                'filter' => Html::dropDownList(
                    'ModificationSearch[generation_id]',
                    $searchModel->generation_id,
                    $dropdownGenerations,
                    [
                        'class' => 'form-control',
                        'prompt' => 'Choose generation',
                    ]
                ),
            ],
            'name',
            'code',
            'engine_type',
            'engine_volume',
            'power',
            'price',
            'transmission',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>