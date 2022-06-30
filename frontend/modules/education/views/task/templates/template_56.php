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
        Область выделения можно только запросить для чтения, поскольку самим выделением управляет браузер,
        реагируя на действия пользователя. Тем не менее, область «<b>Range</b>», ограниченную двумя маркерами, можно создать самостоятельно. Таким образом можно имитировать процесс выделения текста. Рассмотрим эти возможности на следующем примере.
    </p>
    <p>
        Создадим некоторый текст и расставим между его словами элементы «<b>checkbox</b>» (галочки). Будем считать, что область выделения будет задаваться двумя отмеченными элементами. После завершения выделения текст необходимо будет пометить, задав ему синий фоновый цвет.
    </p>
</div>
<hr>
<!--Область примера-->
<input type="checkbox"/>Mark
<input type="checkbox"/>selection
<input type="checkbox"/>ranges
<input type="checkbox"/>by
<input type="checkbox"/>checking
<input type="checkbox"/>boxes
<input type="checkbox"/>between
<input type="checkbox"/>the
<input type="checkbox"/>words
<input type="checkbox"/><br>
<input type="button" value="Done" onclick="makeSelection()"/>
<p id="out"></p>
<script>
    function makeSelection() {
        let checkedBoxes = document.querySelectorAll("[type='checkbox']:checked");
        console.log(checkedBoxes);
        if(checkedBoxes.length != 2) {
            out.innerHTML = "You should check exactly 2 boxes: start and finish of selection";
            return;
        }

        let range = document.createRange();
        range.setStartAfter(checkedBoxes[0]);
        range.setEndBefore(checkedBoxes[1]);
        // 1. Создали тег span <span></span>
        let span = document.createElement("SPAN");
        // 2. Назначили стили тегу span <span styel="background-color: aqua;"></span>
        span.style.backgroundColor = 'aqua';
        // Для того чтобы поместить выделенный диапазон в новый созданный элемент,
        // существует специальный метод объекта «Range» —«surroundContents».
        // 3. Встраиваем в объект DOM, относительно указанных входных точек
        // <span styel="background-color: aqua;">Mark<input type="checkbox"/>selection</span>
        range.surroundContents(span);
        // метод toString() выводит только - Mark selection
        out.innerHTML = "Selected text:<br>" + range.toString();

    }
</script>
</body>
</html>
