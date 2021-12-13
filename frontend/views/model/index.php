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

    <p>
        <?= Html::a('Create Model', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'brand_id',
                'enableSorting' => true,
                'value' => 'brand.name',
                'filter' => Html::dropDownList(
                    'ModelSearch[brand_id]',
                    $searchModel->brand_id,
                    $dropdownBrands,
                    [
                        'class' => 'form-control',
                        'prompt' => 'Choose brand',
                    ]
                ),
            ],
            'name',
            'code',
            'class',
            'sort',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>