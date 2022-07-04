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
        Чтобы строку JSON преобразовать в объект, нужно выполнить над ней метод парсинга. Парсинг, в данном случае, означает процесс десериализации строки в объект.
    </p>
    <p>
        Функция <b>parse()</b> — функция, которая десериализирует JSON строку и возвращает объект JavaScript.
    </p>
    <p>
        Синтаксис, принимает строку с текстом, которая будет парситься, и возвращает готовый объект:
    </p>
<pre>
    <code class="hljs language-javascript">
JSON.parse(str, [reviver])
    </code>
</pre>
    <p>
        Также есть еще необязательный параметр <b>reviver</b>, с ним все практически то же, что и в функции stringify(), за исключением некоторого отличия. Это отличие заключается в том, что вторым параметром может быть только функция, которая будет отвечать за обработку значений. В этой функции можно определять значения, которые не будут присутствовать в новом объекте.
    </p>
    <p>
        <strong>При написании JSON ошибки появятся в таких ситуациях</strong>:
        <ul>
            <li>Когда имя свойства введено без кавычек <b>{property:"value"}</b></li>
            <li>Когда значение у которого должны быть кавычки, написано без них <b>{"property" : value}</b>.</li>
            <li>Когда используются одинарные или обратные кавычки вместо двойных <b>{‘property’ : `value`</b>}.</li>
            <li>Когда используется ключевое слово new <b>{property : new Date(2019,7,15)}</b>.</li>
        </ul>
    </p>
    <hr>
    <!-- *** Область примера *** -->

    <script>
        // 1. Пример десериализации
        let personStr ='{"firstName": "Andrey", "lastName": "Ivanov", "age": 20, "isStudent": true, "сontactInfo": { "phone": "098-556-33-41", "email": "AndreyIvanov@gmail.com" }, "disciplines": [ "Programming", "Machine engineering", "English" ] }';

        let person = JSON.parse(personStr);
        console.log(person.firstName);
        console.log(person.сontactInfo.phone);
        console.log(person);

        // 2. Пример функции parse с параметром reviver

        function CheckIsStudent(key, value) {
            if (key === "isStudent" && value == true) {
                return undefined;
            }
            return value;
        }
        let person2 = JSON.parse(personStr, CheckIsStudent);
        console.log(person2.isStudent);
        console.log(person2);
    </script>
    <script>hljs.highlightAll();</script>
</div>
</body>
</html>
