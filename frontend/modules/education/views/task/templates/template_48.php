<?php
use yii\helpers\Url;
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>HTML DOM structure</title>
</head>
<body>
<a href="<?= Url::to(['/education/task/list'])?>">
    <button>Назад к списоку примеров</button>
</a>
<br>
<br>
<br>
<div>
    X: <span id="coordX"></span><br>
    Y: <span id="coordY"></span>
</div>

<script>
    // срабатывает событие на движение мыши
    document.onmousemove = function(e){
        coordX.innerHTML = e.pageX;
        coordY.innerHTML = e.pageY;
    }

    // срабатывает событие на нажатие клавиши мыши
    document.onmousedown = function(e){
        // Условный оператор «if(e.which==1)» ограничит
        // выполнение инструкций только для левой клавиши.
        if(e.which==1){
            coordX.style.fontSize = coordY.style.fontSize = "x-large";
        }
    }

    // срабатывет событие на отпускание клавиши мыши
    document.onmouseup = function(){
        coordX.style.fontSize = coordY.style.fontSize = "medium";
    }

    // вмешиваемся в работу контекстного меню
    document.oncontextmenu = function(e){
        // команда «e.preventDefault()», останавливает обработку
        // события, установленную по умолчанию.
        e.preventDefault();
    }
</script>
</body>
</html>
