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
        <b>Задание для самостоятельной работы:</b> дополните созданную программу кнопкой, по нажатию на которой
        новый элемент будет добавляться в центр списка (или перед центральным элементом, если их количество нечетное).
    </p>

    <?php if($task): ?>
        <p>
            Ссылка на предыдушую работу.
            <a href="<?= Url::to(['/education/task/template', 'id' => $task]) ?>">Перейти</a>
        </p>
    <?php endif; ?>
</div>
<hr>
