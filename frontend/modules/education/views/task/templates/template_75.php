<?php
use yii\helpers\Url;
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Событие onload объекта XMLHttpRequest.</title>
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
        Есть событие onload, которое будет вызываться только тогда, когда все данные будут загружены.
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

request.open("GET", "/education/task/ajax");
request.onload = function(){
    if(request.status === 200){
        alert(request.response);
    }
}

request.send();
    </code>
</pre>
    <p>
        Стоит подписаться на событие <b>onload</b>, и оно срабатывает только тогда, когда запрос завершился, таким образом мы избавляемся от проверки свойства <b>readyState</b>.
    </p>
    <p>
        <b>XMLHttpRequest</b> имеет также и другие события:
        <ul>
            <li><b>onerror</b> — вызывается, когда запрос завершился некорректно.</li>
            <li><b>onprogress</b> — периодически вызывается во время загрузки ответа. Можно использовать, чтобы выводить информацию о прогрессе загрузки.</li>
        </ul>
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

request.open("GET", "tex.txt");
request.onloadend = function(event){
    alert('Загужено ${event.loaded}');
}
request.onerror = function(){
    alert("Ошибка");
}

request.onload = function(){
    if(request.status === 404){
        alert(request.response);
    }
}

request.send();
    </code>
</pre>
    <p>
        Однако, также нужно помнить, что не все старые браузеры поддерживают вышеперечисленные события, поэтому для полной надежности стоит использовать событие <b>onreadystatechange</b>, если вы хотите, чтобы AJAX запросы работали во всех браузерах.
    </p>
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

        // 1. Пример событие load
        // request.open("GET", "/education/task/ajax");
        // request.responseType = "document";
        // request.onload = function(){
        //     if(request.status === 200){
        //         console.log(request.responseXML);
        //     }
        // }

        // request.onreadystatechange = function(){
        //     console.log("readyState = " + request.readyState, "requestStatus = " + request.status);
        // }
        // 2. Пример событие loadend
        request.open("GET", "/education/task/ajax");
        request.onloadend = function(event){
            console.log('Загужено ' + event.loaded);
            console.log(event);
        }

        // 3. Пример событие error
        request.onerror = function(){
            console.log("Ошибка");
        }

        // 4. Пример если ответ от сервера ошибка 404
        request.onload = function(){
            if(request.status === 404){
                console.log(request.response);
            }
        }

        request.send();
    </script>
    <script>hljs.highlightAll();</script>
</div>
</body>
</html>
