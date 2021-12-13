<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

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
                'enableSorting' => true,
                'value' => 'model.name',
                'filter' => Html::dropDownList(
                    'GenerationSearch[model_id]',
                    $searchModel->model_id,
                    $dropdownModels,
                    [
                        'class' => 'form-control',
                        'prompt' => 'Choose Model',
                    ]
                )
            ],
            'name',
            'code',
            'dt_start',
            'dt_end',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>