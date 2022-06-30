<?php
use yii\helpers\Url;
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Поиск элементов.</title>
    <style>
        body{
            position: relative;
        }
        div, p {
            border: 1px solid navy;
            display: inline-block;
            height: 60px;
            margin: 10px;
            padding-top: 40px;
            text-align: center;
            width:
                    100px;
        }
        div.descr, p.descr {
            width: 700px;
            border: none;
            text-align: left;
            padding-top: 10px;
         }
        .c1 {
            background: #eee;
        }
        button {
            margin-left: 25px;
            margin-top: 30px;
            width: 90px;
        }
    </style>
</head>
<body>
<a href="<?= Url::to(['/education/task/view', 'id' => 0])?>">
    <button>Назад к списоку примеров</button>
</a><br>
<!--Описательный текст к заданию-->
<div class="descr">
    <p class="descr">
        Поиск позволяет выделить из дерева DOM некоторую группу элементов, которые отвечают определенным условиям отбора.
    </p>
    <p class="descr">
        Один из таких методов нам уже известен: «<b>document.getElementById("val")</b>». Он позволяет найти элемент по его идентификатору, то есть по значению HTML-атрибута «id="val"».
    </p>
    <p class="descr">
        Похожим образом работают такие методы поиска элементов как: «<b>getElementsByName</b>», «<b>getElementsByClassName</b>» и «<b>getElementsByTagName</b>»:
    </p>
    <p class="descr">
        Результатом работы любого из методов группового поиска будет коллекция типа «<b>HTMLCollection</b>».
    </p>
</div>
<hr>
<ul id="list1">
    <li>Item1</li>
    <li>Item2</li>
    <li>Item3</li>
    <li>Item4</li>
</ul>
<div id="d1" class="c1" name="n1">d1, c1, n1</div>
<div id="d2" class="c2" name="n1">d2, c2, n1</div>
<div id="d3" class="c1 c2">d3, c1 c2</div>
<p id="p1" class="c1">p1, c1</p>
<p id="p2" class="c2" name="n1">p2, c2, n1</p>
<br>
<button onclick="selD1()">id = d1</button>
<button onclick="selC1()">class = c1</button>
<button onclick="selP()">tag = P</button>
<button onclick="selN1()">name = n1</button>
<button onclick="clr()">Clear</button>
<script>
    console.log(document.getElementsByClassName('c1'));
    // return HTMLCollection
    // console.log(document.getElementsByTagName('li'));
    // return collection array NodeList
    // console.log(document.querySelectorAll('LI'));

    function selD1() {
        let elem = document.getElementById("d1");
        elem.style.backgroundColor = "#cfc";
        // elem.style['background-color'] = "#cfc";
    }
    function selC1() {
        let elems = document.getElementsByClassName("c1");
        for(elem of elems)
            elem.style.backgroundColor = "#fcc";
    }
    function selP() {
        let elems = document.getElementsByTagName("p");
        for(elem of elems)
            elem.style.backgroundColor = "#ccf";
    }
    function selN1() {
        let elems = document.getElementsByName("n1");
        for(elem of elems)
            elem.style.backgroundColor = "#bef";
    }
    function clr() {
        let elems = document.querySelectorAll("[name='n1']");
        for(elem of elems)
            elem.style.backgroundColor = "#eee";
    }
</script>

</body>
</html>
