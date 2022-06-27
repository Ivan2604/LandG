<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

//$this->title = Html::encode($listTask['title']) ;
$this->title = 'Переменные' ;
$this->params['breadcrumbs'][] = 'урок #1';
?>

<div class="p-2 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold"><?= $this->title; ?></h1>
        <p class="col-md-12 fs-4">
            JavaScript-приложению обычно нужно работать с информацией. Например:

            Интернет-магазин – информация может включать продаваемые товары и корзину покупок.
            Чат – информация может включать пользователей, сообщения и многое другое.
            Переменные используются для хранения этой информации.
        </p>
        <button class="btn btn-outline-info" type="button">Предыдущий урок</button>
        <button href="#" class="btn btn-outline-success">Действия</button>
        <button href="#" class="btn btn-outline-success">Редактировать урок</button>
    </div>
</div>

<hr class="col-3 col-md-2 mb-5">

<?= $this->render('task')?>
