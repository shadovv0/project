<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use common\models\Model;

/* @var $this yii\web\View */
/* @var $models \common\models\Model[] $*/


$this->title = 'Models';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="model-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php foreach($models as $model): ?>
            <?= Html::a($model->name, url::to(['model/view', 'code' => $model->code]), ['class' => 'btn btn-outline-secondary'])?>
        <?php endforeach; ?>
    </p>

</div>