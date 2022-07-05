<?php
use yii\helpers\Url;
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Методы GET и POST.</title>
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
        Метод <b>POST</b> используется для отправки данных на сервер. В отличие от GET-запросов, данные POST-запросов передаются не в адресной строке браузера, а в теле самого запроса. Такие запросы позволяют передавать большое количество данных.
    </p>
    <p>
        Для начала находим кнопку по id <b>submit-btm</b>, при нажатии на которую введенные данные должны отправиться на сервер. Подписываемся на событие <b>onclick</b>, назначая ей обработчик. В этом обработчике формируем данные.
    </p>
    <p>
        Здесь есть особенности: данные в строке представляются в виде пары ключ-значение, то есть сначала должно
        быть название параметра после это знак ‘=’ и далее значение этого параметра.
    </p>
    <p>
        Также каждое значение, введенное пользователем, должно быть преобразовано в строку в формате <b>UTF-8</b>.
        Это нужно дабы избежать проблем, связанных с зарезервированными символами. Для кодирования данных в JavaScript есть функция <b>encodeURIComponent()</b>.
    </p>
    <p>
        И последнее, что нужно знать о формировании строки данных, это то, что каждую пару параметр-значение нужно разделять знаком <b>‘&’</b>.
    </p>
    <p>
        Далее подписываемся на <b>onreadystatechange</b>.
    </p>
    <p>
        Обязательной частью <b>POST</b> запроса является установка заголовка <b>Content-Type</b>. Он необходим для того, чтобы указать, с помощью какой кодировки зашифрованы данные, чтобы сервер знал, как расшифровать пришедший запрос. Для этого используется метод <b>setRequestHeader()</b>. В нем нужно указать название заголовка, а именно <b>Content-Type</b>, и его значение <b>«application/x-www-form-urlencoded»</b>.
    </p>
    <p>
        Есть два стандарта кодирования данных: <b>multipart/form-data</b>и <b>text-plain</b>. В них данные передаются через строку-разделитель.
    </p>
    <p>
        Отправляется запрос методом <b>send()</b> с параметром <b>data</b>, который является данными для отправки.
    </p>
<pre>
    <code class="hljs language-javascript">

    </code>
</pre>
    <hr>

    <!-- *** Область примера *** -->
    <form id="form" action="">
        <input type="text" name="name" id="name-inp" placeholder="Ваше имя" />
        <input type="text" name="phone" id="phone-inp" placeholder="Ваш номер телефон" />
        <input type="submit" id="submit-btn">
    </form>
    <script>
        let subbliBtn = document.getElementById("submit-btn");


        subbliBtn.onclick = function () {
            let nameValue = document.getElementById("name-inp").value;
            let phonValue = document.getElementById("phone-inp").value;
            let data = "name=" + encodeURIComponent(nameValue) + "&phone=" + encodeURIComponent(phonValue);
            let request;

            if (window.XMLHttpRequest) {
                request = new XMLHttpRequest();
            }
            else {
                request = new ActiveXObject("Microsoft.XMLHTTP");
            }

            request.open("POST", "/education/task/ajax");

            request.onreadystatechange = function() {
                if (request.readyState == 4 && request.status == 200) {
                    if(request.response){
                        alert("Здравствуйте " + nameValue + "! Мы перезвоним вам через 1 минуту");
                    }else{
                        alert("Технические проблемы на сервере. Свяжитесь с администрацией ресурса");
                    }

                }
            }

            request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            request.send(data);
        }


    </script>
    <script>hljs.highlightAll();</script>
</div>
</body>
</html>
