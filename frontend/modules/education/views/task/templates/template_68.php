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
        <b>JSON</b> (JavaScript Object Notation) — текстовый формат для хранения и передачи данных по сети. JSON — это по сути представление объектов JavaScript в текстовом формате.
    </p>
    <p>
        JSON был основан на JavaScript и введен в стандарте ECMA-262 в 1999 году. Его начали активно использовать вместе с технологией AJAX, вытеснив ранее использован ный XML формат.
    </p>
    <p>
        Далее показано как выглядит объект JavaScript и представление этого объекта в JSON.
    </p>
    <p>Объект человека в JavaScript:</p>
<pre>
    <code class="hljs language-javascript">
let person = {
    firstName: "Andrey",
    lastName: "Ivanov",
    birthDate : "04.05.2000"
}
    </code>
</pre>
    <p>А это представление объекта в JSON формате:</p>
<pre>
    <code class="hljs language-json">
"{
    "firstName" : "Andrey",
    "lastName" : "Ivanov",
    "birthDate" : "04.05.2000"
}"
    </code>
</pre>
    <p>
        Для передачи файла JSON используются AJAX-запросы. Если говорить вкратце, AJAX это технология, которая позволяет отправлять и принимать данные с сервера для дальнейшей работы с ними. Далее AJAX будет рассмотрен подробнее в этом уроке.
    </p>
    <hr>
    <!-- *** Область примера *** -->

    <script>

    </script>
    <script>hljs.highlightAll();</script>
</div>
</body>
</html>
