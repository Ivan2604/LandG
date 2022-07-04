<?php
use yii\helpers\Url;
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Создание использование и удаление Cookie.</title>
    <link rel="stylesheet" href="/education/css/template/style.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.5.1/build/styles/default.min.css">
    <script src="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.5.1/build/highlight.min.js"></script>
    <style>

    </style>
</head>
<body>
<a href="<?= Url::to(['/education/task/view', 'id' => 3])?>">
    <button>Назад к списоку примеров</button>
</a><br>
<!-- *** Описательный текст к заданию *** -->
<div class="main">
    <p>
        Синтаксически JSON очень похож на объекты в JavaScript. Данные в нем представляются в виде пар ключ-значение в фигурных скобках.
    </p>
<pre>
    <code class="hljs language-javascript">
{
    "firstName" : "Andrey",
    "lastName" : "Ivanov"
}
    </code>
</pre>
    <p>
        Пары ключ-значение разделены двоеточием. Ключи всегда должны быть заключены в двойные кавычки, а одинарные или обратные кавычки приводят к ошибке.
        <br>
        Значения могут быть:
        <ul>
            <li>Строкой, обязательно в двойных скобках;</li>
            <li>Числом;</li>
            <li>Логическим значением;</li>
            <li>Объектом, заключенным в { };</li>
            <li>Массивом ,заключенным в [ ];</li>
            <li>null.</li>
        </ul>

    </p>
    <p>
        Здесь мы описываем студента, у которого есть имя, фамилия, возраст и является ли он студентом сейчас.
    </p>
<pre>
    <code class="hljs language-javascript">
{
    "firstName" : "Andrey",
    "lastName" : "Ivanov",
    "age" : 20,
    "isStudent" : true,
    "disciplines" : [
        "Programming", "Machine engineering", "English"
    ]
}
    </code>
</pre>
    <p>
        А вот как выглядят вложенные объекты. С ними все немного интереснее:
    </p>
<pre>
    <code class="hljs language-javascript">
{
    "firstName" : "Andrey",
    "lastName" : "Ivanov",
    "age" : 20,
    "isStudent" : true,
    "сontactInfo" : {
        "phone" : "098-556-33-41",
        "email" : "AndreyIvanov@gmail.com"
    }
}
    </code>
</pre>
    <p>
        Так как JSON является универсальным форматом для передачи данных, то некоторые специфические значения в JavaScript не поддерживаются, а именно:
        <ul>
            <li>Методы объекта;</li>
            <li>Свойства объекта, которые являются символьным типом (Symbol);</li>
            <li>Свойства объекта, которые являются undefined.</li>
        </ul>
    </p>
    <p>
        Для работы с <b>JSON</b> форматом в <b>JavaScript</b> есть объект <b>JSON</b>. Он предоставляет методы для конвертации JSON-строки в объект и наоборот. Кроме того, можно преобразовывать не только объекты, но и примитивные значения и массивы.
    </p>
    <p>
        Объект JSON предоставляет две функции:
        <ul>
            <li><b>stringify()</b> — преобразует объекты в JSON;</li>
            <li><b>parse()</b> — преобразует JSON в объект.</li>
        </ul>
    </p>
    <hr>
    <!-- *** Область примера *** -->

    <script>

    </script>
    <script>hljs.highlightAll();</script>
</div>
</body>
</html>
