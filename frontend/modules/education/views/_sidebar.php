<?php

use yii\helpers\Url;
?>
<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
<!--    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">-->
<!--        <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>-->
<!--        <span class="fs-4">Навигация</span>-->
<!--    </a>-->
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li>
            <a href="<?= Url::to(['/education/course/index']) ?>" class="nav-link text-white">
<!--                <svg class="bi pe-none me-2 text-white" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>-->
                Курсы
            </a>
        </li>
        <li>
            <a href="<?= Url::to(['/education/module/index']) ?>" class="nav-link text-white">
<!--                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>-->
                Модули
            </a>
        </li>
        <li>
            <a href="<?= Url::to(['/education/lesson/index']) ?>" class="nav-link text-white">
<!--                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>-->
                Лекции
            </a>
        </li>
        <li class="nav-item">
            <a href="<?= Url::to(['/education/task/index']) ?>" class="nav-link text-white" aria-current="page">
<!--                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>-->
                Уроки
            </a>
        </li>
        <li class="nav-item">
            <a href="<?= Url::to(['/education/task/list']) ?>" class="nav-link text-white" aria-current="page">
<!--                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>-->
                Задачи
            </a>
        </li>
    </ul>
    <hr>
</div>