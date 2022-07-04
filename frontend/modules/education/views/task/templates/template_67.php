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
<a href="<?= Url::to(['/education/task/view', 'id' => 2])?>">
    <button>Назад к списоку примеров</button>
</a><br>
<!-- *** Описательный текст к заданию *** -->
<div class="main">
    <p>
        1. Перехватить событие загрузки страницы <b>«onload»</b>, установив для него собственный обработчик. Это позволит нам по-разному отображать страницу для зарегистрированных и незарегистрированных пользователей.
    </p>
    <p>
        2. В обработчике события нужно проверить установлено ли значение для Cookie с именем <b>«register»</b> (имя может быть произвольным, мы его сами выбираем. Не используйте использованное ранее в примерах имя «registered», т.к. его значение уже установлено в предыдущих упражнениях).
    </p>
    <p>
        3. Если указанное значение присутствует, то выдаем приветствие пользователю. Его имя хранится как значение Cookie.
    </p>
    <p>
        4. Если значения нет, выводим предложение авторизоваться.
    </p>
    <p>
        Отдельных команд удаления <b>Cookie</b> нет, а если удалить их все же необходимо, то нужно установить им <b>«просроченный»</b> период действия. По сути, можно выполнить те же действия, что и в функции <b>regClick()</b>, только вместо добавления 1 минуты, отнять ее. Такая <b>«установка»</b> Cookie на самом деле приведет к удалению.
    </p>
<pre>
    <code class="hljs language-javascript">
    </code>
</pre>
    <hr>
    <!-- *** Область примера *** -->
    <div id="regDiv"></div>
    <script>

        document.body.onload = checkReg;

        function checkReg(){
            let x = document.cookie;
            let rd = document.getElementById("regDiv");
            let s = x.split('; ');
            let cookieObject = {};
            let c;
            for(let i=0; i < s.length; i++){
                c = s[i].split('=');
                cookieObject[c[0]] = c[1];
            }
            if('register' in cookieObject){
                rd.innerHTML = "Hello, " + cookieObject['register'];
            }
            else
            {
                rd.innerHTML = "Name: <input type='text' id='name' />" +
                    "<input type='button' value='Register' onclick='regClick()' />";
            }
        }

        function regClick(){
            let inputName = document.getElementById("name");
            let name = inputName.value;
            let expDate = new Date;
            console.log(expDate);
            expDate.setTime((new Date).getTime() + 60*1000);
            console.log(expDate);
            document.cookie = "register="+name+"; expires="+expDate.toGMTString()+"; path=/";
            // если работаем в онлайн HTML редакторе
            // checkReg();
            location.reload();
        }

    </script>
    <script>hljs.highlightAll();</script>
</div>
</body>
</html>
