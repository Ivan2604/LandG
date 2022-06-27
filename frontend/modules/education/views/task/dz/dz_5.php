<?php

/** @var yii\web\View $this */
/** @var integer $task id task */


use yii\helpers\Html;
use yii\helpers\Url;

$this->title =  'Вставить элемент в центр списка';
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="d-flex align-items-center pb-3 mb-5 border-bottom">
    <h1><?= $this->title; ?></h1>
</section>

<div>
    <p>
        <b>Задание для самостоятельной работы:</b>
        <ul>
            <li>1. Дополните созданную программу кодами удаления содержимого (очистки) невидимого блока после завершения копирования. Это освободит память, занятую копией фрагмента, и скроет от пользователя механизм работы нашей программы.</li>
            <li>2. Обеспечьте проверку на пустоту копируемого фрагмента. Если выделение не содержит текстовой информации, то добавлять заметку об авторстве не нужно.</li>
        </ul>
    </p>

    <?php if($task): ?>
        <p>
            Ссылка на предыдушую работу.
            <a href="<?= Url::to(['/education/task/template', 'id' => $task]) ?>">Перейти</a>
        </p>
    <?php endif; ?>
</div>
<hr>
