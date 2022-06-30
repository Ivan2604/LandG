<?php
use yii\helpers\Url;
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Управление ссылками: объекты Link и Links</title>
    <style>
        body{
            position: relative;
        }
        p {
            width: 700px;
        }
    </style>
    <link rel="stylesheet" href="/education/css/template/style.css" />
</head>
<body>
<a href="<?= Url::to(['/education/task/view', 'id' => 0])?>">
    <button>Назад к списоку примеров</button>
</a><br>
<!--Описательный текст к заданию-->
<div>
    <p>
        Все ссылки-якоря документа автоматически собираются в коллекцию «<b>document.links</b>». Это первая причина возможных ошибок в формальном понимании: элементы, созданные тегом <a>, попадают в коллекцию «<b>links</b>», тогда как элементы, созданные тегом <b>link</b>, в ней отсутствуют. В коллекцию «document.links» также попадают элементы, созданные тегом <b>area</b>.
    </p>
    <p>
        Для элементов <link> не создается специальная отдельная коллекция. Для того чтобы получить доступ к ссылкам типа <link>, необходимо выполнить поиск элементов при помощи рассмотренной в предыдущем разделе функции «<b>getElementsByTagName("LINK")</b>».
    </p>
    <p>
        В коллекции «<b>document.links</b>» дополнительную информацию про ссылки (якоря) можно получить запра шивая атрибуты «<b>href</b>», отвечающий за адрес ссылки, и «<b>innerText</b>», представляющий текстовую надпись для ссылки. Отдельные компоненты полного адреса (href) также доступны в свойствах «<b>protocol</b>», «<b>host</b>» и «<b>hash</b>». Детальное описание составных частей адресов было приведено в первой части урока.
    </p>
</div>
<hr>
<ul>
    <li>
        <a href="js4_12.html">Drag-and-Drop basics</a>
    </li>
    <li>
        <a href="js4_13.html">Adding DOM nodes</a>
    </li>
    <li>
        <a href="js4_14.html">Adding and removing DOM nodes</a>
    </li>
    <li>
        <a href="js4_15.html">Drag-and-Drop
            list ordering</a>
    </li>
</ul>
<input type="button" value="Get links" onclick="getLinks()" />
<br/>
Apply new style:<br/>
<input type="radio" name="styler" onclick="changeStyle(1)" /> style1
<br/>
<input type="radio" name="styler" onclick="changeStyle(2)" /> style2
<br/>

<script>
    // console.log(document.documentElement);
    // console.log(document.body);
    // console.log(document.head);
    function getLinks() {
        let str = "";
        let links = document.links;
        for(link of links)
            str += link.innerText + "(" + link.href + ")\n" ;
        alert(str);
    }
    function changeStyle(num) {
        let styleLink = document.getElementsByTagName("LINK")[0];
        document.head.removeChild(styleLink);
        styleLink = document.createElement("LINK");
        styleLink.href = "/education/css/template/style"+num+".css";
        styleLink.rel = "stylesheet";
        document.head.appendChild(styleLink);
    }
</script>

</body>
</html>
