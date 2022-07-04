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
        <b>Домашнее задание</b>
        <ol>
            <li>1. Дополните созданную форму телефонного справоч-
                ника возможностью:
                <ul>
                    <li>ввода даты рождения (input type="date");</li>
                    <li>выбора файла с фотографией (input type="file");</li>
                    <li>ввода электронной почты (input type="email");</li>
                    <li>указания сайта (input type="url");</li>
                    <li>ввода «секретного слова» (input type="password");</li>
                    <li>выбора любимого цвета (input type="color");</li>
                    <li>отметки Напоминать о дне рождения (input type="checkbox");</li>
                    <li>сброса введенных данных (input type="reset").</li>
                </ul>
            </li>
            <li>Обратите внимание, в каком формате передаются данные от каждого из элементов формы (в адресной строке браузера).</li>
            <li>Примените стилевые определения для элементов формы на свой вкус.</li>
        </ol>
    </p>
    <p>
        <b>Вопросы к домашнему заданию</b>
        <ol>
            <li>Что такое HTML-формы? Для каких целей они нужны?</li>
            <li>Как получить программный доступ к форме? Ко всем формам?</li>
            <li>Что такое элементы формы? Каким образом можно получить к ним доступ?</li>
            <li>Какими способами можно указать, что элемент относится к форме?</li>
            <li>При каких условиях данные из элемента передаются с отправкой формы?</li>
        </ol>
    </p>

    <?php if($task): ?>
        <p>
            Ссылка на предыдушую работу.
            <a href="<?= Url::to(['/education/task/template', 'id' => $task]) ?>">Перейти</a>
        </p>
    <?php endif; ?>
</div>
<hr>
