<?php
use yii\helpers\Url;
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>ActiveXObject.</title>
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
        Для использования <b>Ajax</b> в <b>JavaSctript</b> есть специальный объект. <br>
        В старых версиях Internet Explorer (IE5 и IE6) по историческим причинам используется объект <b>ActiveXObject</b>.
    </p>
<pre>
    <code class="hljs language-javascript">
let request = ActiveXObject(“Microsoft.XMLHTTP”);
    </code>
</pre>
    <p>
        Все современные браузеры имеет встроенный объект <b>XMLHttpRequest</b>:
    </p>
<pre>
    <code class="hljs language-javascript">
let request = new XMLHttpRequest();
    </code>
</pre>
    <p>
        Ниже можно увидеть, как правильно создавать объект для запросов. Для начала стоит проверить, поддерживает ли браузер <b>XMLHttpRequest</b>, если да, тогда создать <b>XMLHttpRequest</b>, если нет — <b>ActiveXObject</b>.
    </p>
<pre>
    <code class="hljs language-javascript">
let request;
if(window.XMLHttpRequest){
    request = new XMLHttpRequest();
}
else{
    request = new ActiveXObject("Microsoft.XMLHTTP");
}
    </code>
</pre>
    <p>
        Для того чтобы послать запрос, нужно использовать методы <b>open()</b> и <b>send()</b>.
    </p>
    <p>
        Метод <b>open()</b> инициализирует запрос для дальнейшей отправки. Синтаксис:
    </p>
<pre>
    <code class="hljs language-javascript">
open(method, URL, [async, user, password])
    </code>
</pre>
    <p>
        <ul>
            <li>
                <b>method</b> — метод HTTP запроса. Обычно это <b>«GET»</b> или <b>«POST»</b> которые будут описаны далее, также может быть <b>«PUT»</b>, <b>«DELETE»</b>, и т.д.
            </li>
            <li>
                <b>URL</b> — адрес сервера, куда будет отправлен запрос.
                <p>
                    Когда в <b>URL</b> указывается просто путь к файлу, например: <b>“\data\file.txt”</b>, что равносильно записи <b>“http://127.0.0.1:5500\data\file.txt”</b>, а это значит что файл располагается локально, и запрос отправляется на локальный сервер.
                    <br>
                    Когда посылается запрос на удаленный сервер, в URL-адресе указывается тип протокола <b>http</b> или <b>https</b>, домен сайта и адрес самого сервера. Например, <b>https://www.google.com</b>.
                </p>
            </li>
        </ul>
        <p>Далее идут необязательные параметры:</p>
        <ul>
            <li><b>async</b> — указывает, будет ли запрос асинхронным или нет. По умолчанию значение этого параметра <b>true</b>, это значит, что запрос будет асинхронным.</li>
            <li><b>user</b> и <b>password</b> — имя пользователя и пароль, если для запроса нужна аутентификация.</li>
        </ul>
    </p>
<pre>
    <code class="hljs language-javascript">

    </code>
</pre>
    <hr>
    <!-- *** Область примера *** -->

    <script>
        let request;
        if(window.XMLHttpRequest){
            request = new XMLHttpRequest();
        }
        else{
            request = new ActiveXObject("Microsoft.XMLHTTP");
        }

        // 1. Response format json
        // request.open("GET", "/education/task/ajax");
        //
        // request.responseType = "json";
        // // request.responseType = "document";
        // // request.responseType = "text";
        //
        // request.onreadystatechange = function(){
        //     console.log("readyState = " + request.readyState, "requestStatus = " + request.status);
        //     if(request.readyState === 4 && request.status == 200){
        //         let person = request.response;
        //         console.log(person);
        //         console.log(person.firstName);
        //         console.log(request.responseText);
        //     }
        // }

        // 2. Response format text
        // request.open("GET", "/education/task/ajax");
        // // Значением responseType должно быть либо значением по умолчанию, либо “text”, иначе будет ошибка.
        // // request.responseType = "text";
        // request.onreadystatechange = function(){
        //     console.log("readyState = " + request.readyState, "requestStatus = " + request.status);
        //     if(request.readyState === 4 && request.status == 200){
        //         let persone = JSON.parse(request.responseText);
        //         console.log(persone);
        //     }
        // }

        // 3. Response format xml
        request.open("GET", "/education/task/ajax");
        request.responseType = "document";
        // при обращении к свойству responseXML произойдет ошибка, так как формат неподходящего типа.
        // request.responseType = "text";
        request.onreadystatechange = function(){
            console.log("readyState = " + request.readyState, "requestStatus = " + request.status);
            if(request.readyState === 4 && request.status == 200){
                console.log(request.responseXML);
            }
        }

        request.send();
    </script>
    <script>hljs.highlightAll();</script>
</div>
</body>
</html>
