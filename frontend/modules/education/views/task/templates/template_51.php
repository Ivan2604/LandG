<?php
use yii\helpers\Url;
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Изменение дерева DOM</title>
    <style>

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
        <b>removeChild(е)</b> — удаляет дочерний узел «е», переданный как аргумент функции;
    </p>
    <p>
        <b>appendChild(е)</b> — добавляет дочерний узел «е» в конец существующей коллекции дочерних узлов;
    </p>
    <p>
        <b>insertBefore(е1, е2)</b> — вставляет узел «е1» в коллекцию дочерних элементов перед узлом «е2».
    </p>
    <p>
        Для того чтобы добавить в дерево новый элемент, его необходимо сначала создать. Создаются новые узлы
        при помощи метода «<b>createElement</b>», принадлежащего объекту «<b>document</b>»:
    </p>
    <p>

        Эта инструкция действительно удалит вторую строку списка,
        <b>list.removeChild( list.childNodes[1] )</b>
        если
        <ul>
            <li>
                1. Второй элемент у списка вообще существует;
            </li>
            <li>
                2. В списке нет дополнительных элементов, сбивающих нумерацию коллекции.
            </li>
        </ul>
    <p>
        Условие 1 несложно проверить. Из первого урока мы знаем о том, что все неопределенные переменные имеют
        тип «<b>undefined</b>» и проверка наличия второго элемента в коллекции выглядит следующим образом:
        <b>if(typeof list.childNodes[1] !="undefined"){...}</b>
    </p>
    </p>
</div>
<hr>

<ul id='list'>
    <li>Item 1</li>
    <li>Item 2</li>
    <li>Item 3</li>
    <li>Item 4</li>
</ul>
<button onclick="addItem()">Add item</button>
<button onclick="insertItem()">Insert item</button>
<button onclick="removeItem()">Remove second item</button>
<script>
    // создание нового елемента document.createElement(tagName);
    document.createElement("p"); // создаст тег <p>
    document.createElement("div"); // создаст тег <div>

    // добавляем новый созданный елемент в конец
    function addItem(){
        let newItem = document.createElement('li');
        newItem.innerText = "New item " + Math.round(Math.random()*10);
        list.appendChild(newItem);
    }

    // добавляем новый созданный елемент после указанного во втором параметре функции insertBefore(p1, p2)
    function insertItem(){
        let n = 0;
        let firstItem = false;
        for(let element of list.childNodes){
            console.log(element.tagName);
            if(element.tagName == "LI") n++;
            if(n==3) {
                firstItem = element;
                break;
            }
        }
        let newItem = document.createElement('li');
        newItem.innerText = "New item befor " + Math.round(Math.random()*10);
        if(firstItem){
            list.insertBefore(newItem, firstItem);
        }

    }
    // функция удаляет втрой елемент
    function removeItem(){
        let n = 0;
        let element2 = false;
        for(let element of list.childNodes){
            if(element.tagName == "LI") n++;
            if(n==2) {
                element2 = element;
                break;
            }
        }
        if(element2) list.removeChild(element2);
    }
</script>
</body>
</html>
