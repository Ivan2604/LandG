<?php
use yii\helpers\Url;
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Events propagation</title>
    <style>
        #div1 {
            background-color:tomato;
            border:1px solid red;
            height:100px;
            width:100px;
        }
        #div2 {
            background-color:lime;
            height:60px;
            width:60px;
            margin:20px;
        }
        p {
            width: 500px;
        }
    </style>
</head>
<body>
<a href="<?= Url::to(['/education/task/list'])?>">
    <button>Назад к списоку примеров</button>
</a><br>
<!--Описательный текст к заданию-->
<p>
    Появление нескольких сообщений связано со <b>всплытием событий</b> — процессом последовательной передачи
    их всем объектам, которые находятся под курсором мыши — сначала внутреннему блоку, затем внешнему
    блоку, затем документу.
</p>
<p>Для управления процессом всплытия у событий предназначен метод «<b>stopPropagation</b>». При его вызове прекращается
    всплытие и событие далее не передается.
</p>

<div id="div1">
    <div id="div2"></div>
</div>

<script>
    // 1-й вариант
    // div1.addEventListener("click",function(){
    //     console.log('Click on div1')
    // });
    // 2-й вариант
    document.addEventListener("click",function(){
        console.log('Click on document')
    });

    div1.addEventListener("click",function(e){
        console.log('Click on div1');
        // останавливаем дальнейшее всплытие данного
        // события добавляя инструкцию «e.stopPropagation()».
        e.stopPropagation();
    });

    // div2.addEventListener("click",function(e){
    //     console.log('Click on div2');
    //     // останавливаем дальнейшее всплытие данного
    //     // события добавляя инструкцию «e.stopPropagation()».
    //     e.stopPropagation();
    // });

</script>
</body>
</html>
