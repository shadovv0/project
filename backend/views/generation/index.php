<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\db\ActiveRecord;
use yii\helpers\Url;
use common\models\Generation;

/* @var $this yii\web\View */
/* @var $generations \common\models\Model[] */

$this->title = 'Generations';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="generation-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php foreach ($generations as $generation): ?>
            <?= Html::a($generation->name, Url::to(['generation/view', 'code' => $generation->code]), ['class' => 'btn btn-outline-secondary']) ?>
        <?php endforeach; ?>
    </p>

</div>