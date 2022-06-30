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
        #copyContainer {
            position:absolute;
            left:-1000px
        }
        textarea {
            height:100px;
            width: 300px;
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

    </p>
</div>
<hr>
<!--Область примера-->
Select any part of this page and copy it.<br>
Paste it in any other program or try to paste here:
<br>
<textarea></textarea>
<div id="copyContainer"></div>
<script>
    document.addEventListener('copy', copyHandler);
    let storedRange = document.createRange();

    function copyHandler() {
        // Получаем текущее состояние выделения
        let sel = document.getSelection();
        console.log(sel.toString());
        // Переносим данные о маркерах начала и конца выделения в переменную «storedRange»
        storedRange.setStart(sel.anchorNode, sel.anchorOffset);
        storedRange.setEnd(sel.focusNode, sel.focusOffset);
        // Затем получаем текстовое представление выделения, добавляем к нему авторскую заметку
        let txt = sel.toString() + " (Copied from LadnG.com)";
        // Помещаем результат в блок «copyContainer»
        copyContainer.innerHTML = txt;
        // Перемещаем выделение на этот блок
        sel.selectAllChildren(copyContainer);
        // Это отдельная функция, она запустится после того, как закончит работу обработчик, и в ней не будет доступа к переменной «sel», описанной в уже завершенной функции-обработчике.

        setTimeout(function(){
            // Заново получаем объект-выделение
            let sel = document.getSelection();
            console.log(sel);
            // Сбрасываем данные о текущих маркерах и устанавливаем их из сохраненного объекта «storedRange»
            sel.removeAllRanges();
            sel.addRange(storedRange)
        }, 100);
    }
</script>
</body>
</html>
