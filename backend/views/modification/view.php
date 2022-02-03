<?php

/* @var $modification app\models\Modification */

use yii\helpers\Html;
use yii\helpers\Url;
use common\models\Modification;

/* @var $modifications \common\models\Modification[] */

$this->title = $modification->name;
$this->params['breadcrumbs'][] = ['label' => 'Modifications', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="modification-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <p>
            <?= Html::a($modification->name, Url::to(['modification/view', 'code' => $modification->code]), ['class' => 'btn btn-outline-secondary']) ?>
    </p>
</div>
