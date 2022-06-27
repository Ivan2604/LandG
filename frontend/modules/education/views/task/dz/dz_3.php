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
        <b>Задание для самостоятельной работы.</b> Дополните приведенную страницу еще несколькими блоками с различными комбинациями тегов, имен, классов, атрибутов и идентификаторов. Примените для выбора различных групп блоков расширенные возможности метода «<b>querySelectorAll</b>». Создайте кнопки, демонстрирующие выбор следующих групп:
        <ul>
            <li>блоки с тегом <p> и классом «с2»;</li>
            <li>блоки с тегом <p> и классом «с2» + блоки с тегом div и классом «с1»;</li>
            <li>блоки, имеющие имя (произвольное значение атрибута «name»).</li>
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
