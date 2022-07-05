<?php
use yii\helpers\Url;
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Запросы на удаленный сервер.</title>
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
        Запросы на удаленный сервер отправляются по такому же принципу, как и на локальный.
    </p>
    <p>
        При инициализации запроса, в методе <b>open()</b> URL-адрес указан на удаленный сервер с погодой : <b>«http://api.openweathermap.org/data/2.5/weather?q=Kiev&APPID=b03a2cfad336d11bd9140ffd92074504»</b>.
    </p>
    <p>
        Из него видно, что обращение происходит на сервер, расположенный не локально, а по определенному адресу.
        Часть <b>«http://api.openweathermap.org/data/2.5/weather?»</b> это URL сервера, за ним идет параметры запроса <b>«?q=Kiev»</b> — это город, погода которого нужна, а <b>«APPID=b03a2cfad336d11bd9140ffd92074504»</b> ключ, необходимый для запроса. Его можно получить, зарегистрировавшись на сайте <b>https://openweathermap.org</b>. После обработки запроса придет такой ответ с погодой для Киева:
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

request.open("GET", "http://api.openweathermap.org/data/2.5/weather?q=Kiev&units=metric&APPID=b03a2cfad336d11bd9140ffd92074504");
request.responseType = 'json';
request.onload = function(){
    if(request.status === 200){
        console.log(JSON.stringify(request.response, null, 2));
    }
}

request.send();
    </code>
</pre>
<pre>
    <code class="hljs language-javascript">

    </code>
</pre>

    <hr>
    <div id="out"></div>
    <!-- *** Область примера *** -->

    <script>
        let request;
        if(window.XMLHttpRequest){
            request = new XMLHttpRequest();
        }
        else{
            request = new ActiveXObject("Microsoft.XMLHTTP");
        }

        request.open("GET", "http://api.openweathermap.org/data/2.5/weather?q=Kiev&units=metric&APPID=b03a2cfad336d11bd9140ffd92074504");
        request.responseType = 'json';
        request.onload = function(){
            if(request.status === 200){
                console.log(JSON.stringify(request.response, null, 2));
            }
        }

        request.send();
    </script>
    <script>hljs.highlightAll();</script>
</div>
</body>
</html>
