<?php

/** @var yii\web\View $this */

$this->title = 'Шаблон урока';
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="d-flex align-items-center pb-3 mb-5 border-bottom">
    <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        <span class="fs-4">Шаблона для оформления урока</span>
    </a>
</section>

<h1><?= $this->title; ?></h1>
<p class="fs-5 col-md-8">
    Заглушка для материала по уроку.
</p>

<div class="mb-5">
    <a href="#" class="btn btn-info btn-lg px-4">Предыдущий урок</a>
    <a href="#" class="btn btn-success btn-lg px-4">Действия</a>
    <a href="#" class="btn btn-success btn-lg px-4">Редактировать урок</a>
</div>

<hr class="col-3 col-md-2 mb-5">

<div class="row g-5">
    <div class="col-md-6">
        <h2>Примеры работ</h2>
        <p>Можно посмотреть готовые demo проекты</p>
        <ul class="icon-list ps-0">
            <li class="d-flex align-items-start mb-1"><a href="#" rel="noopener" target="_blank">Стартовый пакет Bootstrap npm</a></li>
            <li class="text-muted d-flex align-items-start mb-1">Стартовый пакет Bootstrap Parcel (скоро!)</li>
        </ul>
    </div>

    <div class="col-md-6">
        <h2>Ссылки на материалы</h2>
        <p>Дополнительная информация которая поможет хорошо изучить текущий урок.</p>
        <ul class="icon-list ps-0">
            <li class="d-flex align-items-start mb-1"><a href="#">Краткое руководство по началу работы с Bootstrap</a></li>
            <li class="d-flex align-items-start mb-1"><a href="#">Руководство по Bootstrap Webpack</a></li>
            <li class="d-flex align-items-start mb-1"><a href="#">Руководство по Bootstrap Parcel</a></li>
            <li class="d-flex align-items-start mb-1"><a href="#/">Участие в Bootstrap</a></li>
        </ul>
    </div>
</div>

<div class="accordion" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Задание #1
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong>Это тело аккордеона первого элемента.</strong> Оно отображается по умолчанию, пока плагин свертывания не добавит соответствующие классы, которые мы используем для стилизации каждого элемента. Эти классы управляют общим внешним видом, а также отображением и скрытием с помощью переходов CSS. Вы можете изменить все это с помощью собственного CSS или переопределить наши переменные по умолчанию. Также стоит отметить, что практически любой HTML может быть помещен в <code>.accordion-body</code>, хотя переход ограничивает переполнение.
                <p>
                    <pre>
                        <code class="language-javascript">
let message;

message = 'Hello'; // сохранить строку 'Hello' в переменной с именем message
                        </code>
                    </pre>
                </p>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Задание #2
            </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong>Это тело аккордеона второго элемента.</strong> По умолчанию он скрыт, пока плагин свертывания не добавит соответствующие классы, которые мы используем для стилизации каждого элемента. Эти классы управляют общим внешним видом, а также отображением и скрытием с помощью переходов CSS. Вы можете изменить все это с помощью собственного CSS или переопределить наши переменные по умолчанию. Также стоит отметить, что практически любой HTML может быть помещен в <code>.accordion-body</code>, хотя переход ограничивает переполнение.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Задание #3
            </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong>Это тело аккордеона третьего элемента.</strong> По умолчанию оно скрыто, пока плагин свертывания не добавит соответствующие классы, которые мы используем для стилизации каждого элемента. Эти классы управляют общим внешним видом, а также отображением и скрытием с помощью переходов CSS. Вы можете изменить все это с помощью собственного CSS или переопределить наши переменные по умолчанию. Также стоит отметить, что практически любой HTML может быть помещен в <code>.accordion-body</code>, хотя переход ограничивает переполнение.
            </div>
        </div>
    </div>
</div>
