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
        Функция <b>stringify()</b> сериализует объекты в строку. <br>
        <b>Сериализация</b> — процесс преобразования объектов в определенный формат для сохранения данных или их пе-
        редачи по сети с возможной последующей десериализацией. <br>
        <b>Десериализация</b> — процесс восстановления объекта из строки JSON. <br>
        Синтаксис функции <b>stringify()</b>:
    </p>
    <p>
        Важно знать, что в сериализованном объекте не долно быть циклических ссылок. <br>
        <b>Циклическая ссылка</b> — это ссылка, которая ссылается на другой объект, который в свою очередь ссылается на первый.
    </p>
    <p>
        Функция <b>stringify()</b> может передать еще два необязательных параметра: <b>replacer</b> и <b>space</b>.
    </p>
    <p>
        <b>Replacer</b> — параметр, который позволяет влиять на сериализацию объекта. Значением параметра может быть функция, массив или null, если параметр не нужен.
    </p>
    <p>
        И третий параметр в функции JSON.stringify(value, replacer, space) — это <b>space</b>, который принимает строку или число и позволяет придать более читаемый вид строке <b>JSON</b>, добавляя отступы.
    </p>
<pre>
    <code class="hljs language-javascript">
JSON.stringify(value [, replacer[, space]])
    </code>
</pre>
    <hr>
    <!-- *** Область примера *** -->

    <script>
        // 1. Пример сериализации
        let person = {
            "firstName": "Andrey",
            "lastName": "Ivanov",
            "age": 20,
            "isStudent": true,
            "сontactInfo": {
                "phone": "098-556-33-41",
                "email": "AndreyIvanov@gmail.com"
            },
            "disciplines": [
                "Programming", "Machine engineering", "English"
            ]
        }

        let jsonPerson = JSON.stringify(person);
        console.log('example1');
        console.log(jsonPerson);

        // 2. Функции, значения Symbol или undefined не сериализуются, а будут просто пропущены.
        let badExample = {
            [Symbol("id")]: 1,
            property: undefined,
            Foo() {
                console.log("Hi!");
            }
        }
        let emptyStr = JSON.stringify(badExample);
        console.log('example2');
        console.log(emptyStr);

        // 3. Пример с циклическими ссылками, который выдает ошибку при сериализации
        // Здесь есть ссылка Kate.parent на объект Dev, а в Dev.child ссылка на Kate.
        let Kate = {
            name : "Kate"
        }
        let Dev = {
            name: "Dev"
        }
        Kate.parent = Dev;
        Dev.child = Kate;

        // let falily = JSON.stringify(Dev);
        // console.log('example3');
        // console.log(falily);

        // 4. Функция в параметре replace используется, если нам необходимо определить значения, которые не будут включаться в сериализацию по определенному условию. Функция вызывается для каждого значения и может при нимать два параметра: ключ и значение, которые и будут проверены, и, если они проходят проверку, то возвраща ется проверяемое значение, если нет, то undefined.
        let person2 = {
            "firstName": "Andrey",
            "lastName": "Ivanov",
            "age": 18,
            "isStudent": true,
            "сontactInfo": {
                "phone": "098-556-33-41",
                "email": "AndreyIvanov@gmail.com"
            },
            "disciplines": [
                "Programming", "Machine engineering", "English"
            ]
        }
        function checkAge(key, value) {
            if (key === "age" && value >= 18) {
                return undefined;
            }
            return value;
        }

        let jsonPerson2 = JSON.stringify(person2, checkAge, 2);
        console.log('example4');
        console.log(jsonPerson2);

        // 5. Передаем в качестве replacer массив значений
        let jsonPerson3 = JSON.stringify(person2, ["firstName", "lastName"]);
        console.log('example5');
        console.log(jsonPerson3);

        // 6. Ниже показано как будет выглядеть JSON, если не передавать в функцию stringify(person, null) третьим параметром строку или число:
        let jsonPerson4 = JSON.stringify(person2, null);
        console.log('example6');
        console.log(jsonPerson4);

        // 7. В этом примере все точно так же, за исключением параметра space — stringify(person, null, 2).
        let jsonPerson5 = JSON.stringify(person2, null, 2);
        console.log('example7');
        console.log(jsonPerson5);
    </script>
    <script>hljs.highlightAll();</script>
</div>
</body>
</html>
