<?php
use yii\helpers\Url;
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Добавление новой записи (контакта) в телефонную книгу.</title>
    <link rel="stylesheet" href="/education/css/template/style.css">
</head>
<body>
<a href="<?= Url::to(['/education/task/view', 'id' => 2])?>">
    <button>Назад к списоку примеров</button>
</a><br>
<!-- *** Описательный текст к заданию *** -->
<div>
    <p>
        Добавление новых номеров будет реализовано как реакция на нажатие кнопки с вызовом функции <b>add_click()</b> в следующей главе.
    </p>
    <p>
        Запросим первую (нулевую в массиве) форму из коллекции документа и сохраним ее в переменной f , введя в консоль строку: <b>f= document.forms[0]</b>
    </p>
    <p>
        Функция document.createElement создает элемент по имени тега, например, разрыв строки можно создать вызовом <b>document.createElement('br')</b>,а элемент ввода – <b>document.createElement('input')</b> .
    </p>
    <p>
        Другая функция <b>document.createTextNode</b> служит для создания узлов типа <b>#text</b> , для которых имя тега не задано. В качестве аргумента функция принимает текст, который будет отображаться. Например, document. <b>createTextNode('Phone number')</b> .
    </p>
</div>
<hr>
<!-- *** Область примера *** -->
<h2>Add new contact</h2>
<form action='' method='GET'>
<!--<form action='' method='POST'>-->
    <b>Name</b><input type="text" name="name" placeholder="Enter name"/><br>
<!--    Phone number <input type="text" name="phone1" id="ph" placeholder="Enter phone number" />-->
<!--    Phone type <select name="type1">-->
<!--        <option value="1" selected>Cellular</option>-->
<!--        <option value="2">Home</option>-->
<!--        <option value="3">Work</option>-->
<!--    </select>-->
<!--    Priority <input type="radio" name="main" value="1" checked />-->

    <div style="margin:10px 0;">
        Phone number <input type="text" name="phone" id="ph" placeholder="Enter phone number" />
        Phone type <select name="type">
            <option value="1" selected>Cellular</option>
            <option value="2">Home</option>
            <option value="3">Work</option>
        </select>
        Priority <input type="radio" name="main" value="1" checked />
    </div>
    <input type="submit" value="Save" style="margin-left:50px" />
    <input type="button" value="One more phone" onclick="add_click()" style="margin-left:50px" />
</form>
<br class="item itemprimary">
<br>
<br>
<button onclick="showElements()">Elements</button>
<button onclick="showChildren()">Children</button>
<button onclick="showNodes()">Nodes</button>
<p id="out"></p>

<script>
    function showElements(){
        let e = document.forms[0].elements, p=document.getElementById("out");
        p.innerHTML = "";
        for ( let i=0; i<e.length; i++){
            p.innerHTML += e[i].tagName + " – " + e[i].name + " – " + e[i].value + "<br>";
        }
    }
    function showChildren(){
        let c = document.forms[0].children, p = document.getElementById("out");
        p.innerHTML = "";
        for ( let i=0; i<c.length; i++){
            p.innerHTML += (i+1) + ". " + c[i].tagName + "<br>";
        }
    }
    function showNodes(){
        let n = document.forms[0].childNodes, p = document.getElementById("out");
        p.innerHTML = "";
        for ( let i=0; i<n.length; i++){
            p.innerHTML += (i+1) + ". " + n[i].nodeName + "<br>";
        }
    }
    function add_click() {
        if (typeof phoneCounter == 'undefined')
            phoneCounter = 1;
        phoneCounter++;

        let f = document.forms[0];

        // let b = document.createElement('br');
        // f.appendChild(b);
        //
        // let t = document.createTextNode('Phone number ');
        // f.appendChild(t);
        //
        // let phoneInput = document.createElement('input');
        // phoneInput.type = 'text';
        // phoneInput.name = 'phone' + phoneCounter;
        // phoneInput.placeholder = 'Enter phone number';
        // f.appendChild(phoneInput);
        //
        // t = document.createTextNode(' Phone type ');
        // f.appendChild(t);
        //
        // let selector = f.elements['type1'];
        // let newSelector = selector.cloneNode(true);
        // console.log(newSelector);
        // newSelector.name = 'type' + phoneCounter;
        // f.appendChild(newSelector);
        //
        // t = document.createTextNode(' Priority ');
        // f.appendChild(t);
        //
        // let mainRadio = document.createElement('input');
        // mainRadio.type = 'radio';
        // mainRadio.name = 'main';
        // mainRadio.value = phoneCounter;
        // f.appendChild(mainRadio);

        var line = f.children[3];
        var newLine = line.cloneNode(true);
        // console.log(newLine);
        newLine.children[0].name = 'phone' + phoneCounter;
        newLine.children[0].id = 'ph' + phoneCounter;
        newLine.children[0].value = '';
        newLine.children[1].name = 'type' + phoneCounter;
        newLine.children[2].value = phoneCounter;
        newLine.children[2].checked = false;

        var removeButton = document.createElement('input');
        removeButton.type = 'button';
        removeButton.value = 'Remove';
        // removeButton.onclick = 'rem_click()';
        removeButton.addEventListener('click', rem_click);

        newLine.appendChild(removeButton);

        f.insertBefore(newLine, f.children[phoneCounter + 2]);
    }


    function rem_click(e){
        console.log(e.target);
        let line = event.target.closest('div');
        let f = document.forms[0];
        f.removeChild(line);
        phoneCounter--;
    }
</script>
</body>
</html>
