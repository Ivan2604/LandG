<?php
use yii\helpers\Url;
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>HTML DOM structure</title>
    <style>
        div {
            background-color:tomato;
            color:azure;
            height:23px;
            padding-top:3px;
            text-align:center;
            width:75px;
        }
    </style>
</head>
<body>
<a href="<?= Url::to(['/education/task/list'])?>">
    <button>Назад к списоку примеров</button>
</a>
<p>
    Подытоживая, можем отметить, что <b>первый способ</b>
    лучше соответствует принципу модульности, то есть
    позволяет создавать относительно универсальные блоки
    (модули), которые можно скопировать в другие проекты,
    так как все необходимые определения заключены внутри
    этих блоков. Этот способ подходит для небольших проектов или их частей,
    предназначенных для копирования в другие проекты.
</p>
<p>
    <b>Второй</b> способ является предпочтительным для больших
    проектов, над которыми работают группы разработчиков.
    Также этот способ упрощает оптимизацию сайта
    в контексте отделения файлов, которые крайне редко
    изменяются и могут кешироваться браузерами.
</p>
<!--Первый способ-->
<div onclick="myFunction()">
    Press me
</div>
<script>
    function myFunction(){
        // реализация
    }
</script>

<!--Второй способ-->
<div id="btn">Press me</div>
<script>
    btn.addEventListener("click",function(){
        alert('Click event handled') })
</script>
</body>
</html>
