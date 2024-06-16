<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;

// echo $name;
// echo "<pre>"; print_r($list); die;

?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is test View
    </p>

    <!-- <code><?= __FILE__ ?></code> -->
</div>
