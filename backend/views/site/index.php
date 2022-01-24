<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'Cars from Nick';
?>
<div class="site-index">
    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Welcome</h1>
        <p class="lead">If you would like to select a vehicle, please click below.</p>
        <p><a class="btn btn-lg btn-success" href="<?= Url::to(['country/index']) ?>">Let's go!</a></p>
    </div>
    <div class="body-content">
        <div class="row">
            <div class="col-lg-4">
             <a>News</a>
            </div>
            <div class="col-lg-4">
                <a>Blog</a>
            </div>
            <div class="col-lg-4">
                <a>Discussions</a>
            </div>
        </div>

    </div>
</div>