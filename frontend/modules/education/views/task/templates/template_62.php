<?php
use yii\helpers\Url;
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Добавление новой записи (контакта) в телефонную книгу.</title>
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
<div>
    <p>
        Напомним, что HTML-форма представляет собой механизм автоматизированной отправки введенных пользователем данных на сервер сайта. Обратим внимание на несколько ключевых моментов в этом механизме работе форм.
    </p>
    <p>
        Во-первых, данные в форму вводит пользователь и ответственность за то, что в поле «Имя» будет вписано именно имя, а не номер телефона, полностью лежит на самом пользователе.
    </p>
    <p>
        Во-вторых, пользователь может ничего не вписать в некоторые поля, оставив их пустыми. Это, как мы убедились на прошлом уроке, не повлияет на работоспособность формы, и на сервер будут отправлены «пустые» данные.
    </p>
    <p>
        В-третьих, формы срабатывают автоматически, то есть отправка будет осуществлена после нажатия пользователем на соответствующую кнопку (точнее, элемент «submit»).
    </p>
    <p>
        1. Для элементов форм, заполнение которых требуется в обязательном порядке, надо добавлять атрибут «<b>required</b>».
<pre>
    <code class="hljs language-html">
    &lt;input type = "text" placeholder = "Your first name" name="name" required /&gt;
    </code>
</pre>

    </p>
    <p>
        Атрибут «<b>required</b>» может быть указан для элемен тов различного типа, не только текстовых. Элементы, у которых задан этот атрибут, проверяются на пустоту самим браузером.
    </p>
    <p>
        2. Второй этап реализуется путем контроля содержимого элементов формы непосредственно перед ее отправкой. Организация этого этапа может быть реализована двумя способами.
    </p>
    <p>
        Первый способ — перехват события «<b>onsubmit</b>» формы. Сообщение об этом событии генерируется, когда пользователь нажимает кнопку отправки формы или клавишу «<b>Enter</b>» при заполнении элемента формы.
    </p>
</div>
<hr>
<!-- *** Область примера *** -->
<!--<form action="" onsubmit="return checkForm(event)" method="GET" id="poll">-->
<form action="" method="GET" id="poll">
    <input type="text" placeholder="Your first name" name="name" value="" required /><br>
<!--    <input type="submit" />-->

</form>
<input type="button" onclick="checkButtonClick()" value="Send"/>

<script>
    document.getElementById("poll").addEventListener("submit", checkForm);

    function checkForm(event){
        event.preventDefault();

        let nameText = document.getElementsByName("name")[0].value;
        // alert(nameText);
        // if(nameText.length < 2){
        //     console.log(false); return false;
        // }

        // return true;
        if(nameText.length > 1)
            document.getElementById("poll").submit();
    }
</script>
<script>hljs.highlightAll();</script>
</body>
</html>
