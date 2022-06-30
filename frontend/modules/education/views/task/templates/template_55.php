<?php
use yii\helpers\Url;
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Управление выделением и текстовым диапазоном: объекты Range, Selection и TextRange</title>
    <style>
        body{
            position: relative;
        }
        p {
            width: 700px;
        }
    </style>
</head>
<body onkeypress="keyHandler(event)">
<a href="<?= Url::to(['/education/task/view', 'id' => 0])?>">
    <button>Назад к списоку примеров</button>
</a><br>
<!--Описательный текст к заданию-->
<div>
    <p>
        В скриптовой части документа этот обработчик описан в виде одноименной функции. Тело обработчика заключено в условный оператор, проверяющий необходимую комбинацию: нажата клавиша «ctrl» (e.ctrlKey будет иметь значение «true»), а сама клавиша идентифицирована как «Enter». Поскольку разные браузеры хранят название клавиши в разных полях, проверка проводится как по свойству «e.key», так и по «e.code».
    </p>
    <p>
        Из неуказанного ранее отметим, что сам текст выделения можно получить при помощи вызова метода «<b>toString()</b>». В текст не будут входить HTML теги, находящиеся между маркерами начала
        и конца.
    </p>
</div>
<hr>
<!--Область примера-->
<h1>Text selection demo</h1>
<p>If you find some mistakes on pagge<br>
    <i>selectt them and press ctrl-Enter</i></p>
<p id="out"></p>
<script>
    function keyHandler(e) {
        if(e.ctrlKey && (e.key=="Enter" ||
            e.code=="Enter")){
            let sel = document.getSelection();
            console.log(sel);
            let msg = "";
            msg += "Selection starts at " + sel.anchorOffset + " symbol of node <br>";
            msg += "<b>" + sel.anchorNode.data + "</b><br>";
            msg += "Selection ends at " + sel.focusOffset + " symbol of node <br>";
            msg += "<b>" + sel.focusNode.data + "</b><br>";
            msg += "selected string is: <b>" + sel.toString() + "</b>";
            out.innerHTML = msg;
        }
    }
</script>
</body>
</html>
