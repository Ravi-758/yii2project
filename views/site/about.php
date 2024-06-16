<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\bootstrap5\Breadcrumbs;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;

$listArray =[
    [
        'label' =>  'Info',
        'url' =>'info'
    ],
    [
        'label' =>  'About',
        'url' =>'about'
    ]

];
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <?= Breadcrumbs::widget(['links' => $listArray]) ?>
    <p>
        This is the About page. You may modify the following file to customize its content:
    </p>

    <code><?= __FILE__ ?></code>
</div>
