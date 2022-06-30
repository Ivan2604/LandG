<?php
use yii\helpers\Url;
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Drag-and-Drop</title>
    <style>
        body{
            position: relative;
        }
        #div1 {
            background-color: tomato;
            border: 1px solid red;
            border-radius: 50%;
            height: 100px;
            width: 100px;
            position: absolute;
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
<div>
    <p>
        Для закрепления материала по модели событий создадим страницу, реализующую технологию
        «<b>Drag-and-Drop</b>» — перемещения элементов при помощи мыши.
    </p>
    <p>Главной особенностью реализации данной технологии является то, что события нажатия и отпускания кнопок
        мыши, а также события ее движения обрабатываются в трех разных функциях-обработчиках. Необходимо
        определенным образом синхронизировать их работу.
    </p>
</div>

<div id="div1">

</div>
<script>
    let isDrag = false;
    let coordX = 0;
    let coordY = 0;

    div1.addEventListener("mousedown", function(e){
        isDrag = true;
        console.log(e);
        coordX = e.layerX;
        coordY = e.layerY;
    });
    document.addEventListener("mouseup", function(){
        isDrag = false;
    });

    document.addEventListener("mousemove", function(e){
        // первый вариант
        // дерганное перетаскивание отресовка объекта от места отпускания клавиши мыши
        // if(isDrag){
        //     div1.style.left = e.pageX - 8 + "px";
        //     div1.style.top = e.pageY - 8 + "px";
        // }
        // второй вариант
        // перетаскивание относительно центра
        // if(isDrag){
        //     div1.style.left = e.pageX-50 + "px";
        //     div1.style.top = e.pageY-50 + "px";
        // }
        // третий ваирант точное перетаскивание с учетом координат нажатия мыши внутри объекта и padding body 8 px
        if(isDrag){
            div1.style.left = e.pageX - coordX - 8 + "px";
            div1.style.top = e.pageY - coordY - 8+ "px";
        }
    });
</script>
</body>
</html>
