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
        <?= Html::a('Create Brand', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'country_id',
                'enableSorting' => true,
                'value' => 'country.name',
                'filter' => Html::dropDownList(
                            'BrandSearch[country_id]',
                            $searchModel->country_id,
                            $dropdownCountries,
                            [
                                'class' => 'form-control',
                                'prompt' => 'Choose country',
                            ]
                        ),
            ],
            'name',
            'code',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>