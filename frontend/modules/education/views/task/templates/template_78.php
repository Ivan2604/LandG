<?php
use yii\helpers\Url;
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Объект FormData.</title>
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

    </p>
<pre>
    <code class="hljs language-javascript">

    </code>
</pre>
    <hr>
    <form id="form" action="">
        <input type="text" name="name" id="name-inp" placeholder="Ваше имя" />
        <input type="text" name="phone" id="phone-inp" placeholder="Ваш номер телефон" />
        <input type="submit" id="submit-btn">
    </form>
    <!-- *** Область примера *** -->
    <script>
        let subbliBtn = document.getElementById("submit-btn");

        subbliBtn.onclick = function (e) {
            e.preventDefault();
            let form = document.getElementById("form");
            let formData = new FormData(form);
            formData.set("name", document.getElementById("name-inp").value);
            formData.set("phone", document.getElementById("phone-inp").value);
            formData.append("date", new Date().toLocaleString());
            console.log(form);
            console.log(formData);

            let request;
            if (window.XMLHttpRequest) {
                request = new XMLHttpRequest();
            } else {
                request = new ActiveXObject("Microsoft.XMLHTTP");
            }
            request.open("POST", "/education/task/ajax");
            request.onreadystatechange = function () {
                if (request.readyState == 4 && request.status == 200) {
                    alert("Здравствуйте " + request.response + "! Мы перезвоним вам через 1 минуту");
                }
            }
            request.setRequestHeader('Content-Type', 'multipart/form-data');
            request.send(formData);
        }

        // let person = {
        //     firstName: "Andrey",
        //     lastName: "Ivanov",
        //     age: 20
        // }
        //
        // let request;
        // if (window.XMLHttpRequest) {
        //     request = new XMLHttpRequest();
        // }
        // else {
        //     request = new ActiveXObject("Microsoft.XMLHTTP");
        // }
        //
        // let jsonPerson = JSON.stringify(person);
        //
        // request.open("POST", "/education/task/ajax");
        // request.setRequestHeader('Content-Type', 'application/json');
        // request.send(jsonPerson);

    </script>
    <script>hljs.highlightAll();</script>
</div>
</body>
</html>
