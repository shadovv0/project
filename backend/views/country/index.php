<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\db\ActiveRecord;
use common\models\Country;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $countries \common\models\Model[] */


$this->title = 'Countries';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="country-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php foreach ($countries as $country): ?>
            <?= Html::a($country->name, Url::to(['country/view', 'code' => $country->code]), ['class' => 'btn btn-outline-secondary']) ?>
        <?php endforeach; ?>
    </p>

</div>