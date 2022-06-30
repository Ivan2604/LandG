<?php
use yii\helpers\Url;
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Изменять порядок элементов при помощи технологии Drag-and-Drop</title>
    <style>
        body{
            position: relative;
        }
        .item, .phantom {
            height: 30px;
            width: 300px;
        }
        .phantom{
            position: absolute;
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
        С целью отделения кода JavaScript и разметки HTML обработчик события нажатия кнопки мыши реализован
        у объекта «document». Ранее мы приводили аргументы в пользу того, что данный обработчик логично
        реализовывать у перетягиваемого объекта. Однако в нашей новой задаче перетягиваемых объектов несколько. Более
        того, их количество может меняться, если в список будут добавляться или удаляться элементы. Вместо того чтобы
        перебирать все эти элементы и устанавливать для них отдельные обработчики создадим универсальный метод,
        подходящий для всех элементов.
    </p>
</div>
<hr>
<ol id='list'>
    <li class='item wrap' style='background-color:gold'></li>
    <li class='item' style='background-color:red'></li>
    <li class='item' style='background-color:green'></li>
    <li class='item' style='background-color:blue'></li>
</ol>

<script>
    // «draggedElement» будет отвечать за реальный элемент списка
    let draggedElement = false;

    // «phantomElement» будет ссылаться на дополнительный элемент — копию активного элемента
    // списка, который будет следовать за укзателем мыши.
    let phantomElement = false;

    document.onmousedown = function(e){

        e.preventDefault();
        // Определяем элемент под курсором мыши и сохраняем его в переменной «clickedElement».
        let clickedElement = document.elementFromPoint(e.clientX, e.clientY);

        // Проверяем, является ли данный объект элементом
        // списка, т.к. документ будет получать события и от совершенно других элементов.
        if(clickedElement.className.indexOf('item') > -1){

            clickedElement.style.opacity = '0.5';
            //записываем элемент в глобалньную переменную, для того чтобы объект был доступен в других функциях
            draggedElement = clickedElement;

            // Далее рассмотрим основную функцию — обработчик движения мыши. Поскольку все действия
            // должны выполняться только в том случае, если происходит процесс перетягивания, все тело
            // функции заключено в соответствующее условие
            document.onmousemove = function(e){
                if(draggedElement){

                    if(!phantomElement){
                        // console.log(e);
                        phantomElement = document.createElement('div');
                        phantomElement.style.backgroundColor = draggedElement.style.backgroundColor;
                        phantomElement.style.left = e.pageX-draggedElement.offsetWidth/2 + 'px';
                        phantomElement.style.top = e.pageY-draggedElement.offsetHeight/2 + 'px';
                        phantomElement.className = "phantom";
                        document.body.appendChild(phantomElement);
                    }
                    else
                    {
                        phantomElement.style.left = e.pageX-phantomElement.offsetWidth/2 + 'px';
                        phantomElement.style.top = e.pageY-phantomElement.offsetHeight/2 + 'px';
                        phantomElement.style.zIndex = '-1';
                        var lowerElement = document.elementFromPoint(e.clientX, e.clientY);
                        phantomElement.style.zIndex = '1';
                        if(lowerElement != null && lowerElement != draggedElement
                            && lowerElement.className.indexOf('item')>-1){

                            if(lowerElement == window.list.lastChild &&
                                e.pageY > (lowerElement.offsetTop + lowerElement.offsetHeight/2)){
                                window.list.removeChild(draggedElement);
                                window.list.appendChild(draggedElement);
                            }
                            else
                            {
                                if(e.pageY > (lowerElement.offsetTop + lowerElement.offsetHeight/2)){
                                    if(lowerElement.previousSibling == draggedElement){
                                        window.list.removeChild(draggedElement);
                                        window.list.insertBefore(draggedElement, lowerElement.nextSibling);
                                    }
                                }
                                else
                                {
                                    window.list.removeChild(draggedElement);
                                    window.list.insertBefore(draggedElement, lowerElement);
                                }
                            }
                        }
                    }
                }
            }
        }
    }

    document.onmouseup = function(e){
        if(draggedElement){
            draggedElement.style.opacity = '1';
            draggedElement = false;
        }
        if(phantomElement){
            document.body.removeChild(phantomElement);
            phantomElement = false;
        }
    }
</script>

</body>
</html>
