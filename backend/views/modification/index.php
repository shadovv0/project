<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\db\ActiveRecord;
use yii\helpers\Url;
use common\models\Modification;

/* @var $this yii\web\View */
/* @var $modifications \common\models\Modification[] */

$this->title = 'Modifications';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modification-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php foreach ($modifications as $modification): ?>
        <?= Html::a($modification->name, Url::to(['modification/view', 'code' => $modification->code]), ['class' => 'btn btn-outline-secondary']) ?>
    <?php endforeach; ?>

</div>