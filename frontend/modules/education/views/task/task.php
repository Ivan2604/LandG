<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<div class="row g-5">
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

    <div class="col-md-6">
        <h2>Домашние задание</h2>
        <p>Реализовать самостоятельно.</p>
        <ul class="icon-list ps-0">
            <li class="d-flex align-items-start mb-1">
                <a href="<?= Url::to(['/education/task/dz', 'id' => 51]) ?>">
                    DЗ Вставить элемент в центр списка
                </a>
            </li>
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

<pre class="bg-secondary text-white">
    <code>
    /**
     * The cache warmer for my awesome website.
     *
     * @Warmer(
     *   id = "example",
     *   label = @Translation("Example"),
     *   description = @Translation("This is an example.")
     * )
     */
    </code>
</pre>
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