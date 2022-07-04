<?php
use yii\helpers\Url;
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Создание использование и удаление Cookie.</title>
    <link rel="stylesheet" href="/education/css/template/style.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.5.1/build/styles/default.min.css">
    <script src="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.5.1/build/highlight.min.js"></script>
    <style>

    </style>
</head>
<body>
<a href="<?= Url::to(['/education/task/view', 'id' => 3])?>">
    <button>Назад к списоку примеров</button>
</a><br>
<!-- *** Описательный текст к заданию *** -->
<div class="main">
    <p>
        Метод <b>toJSON()</b> может быть методом любого объекта. Он позволяет определить собственное представление объекта в <b>JSON</b>. Таким образом, можно заменить стандартное поведение сериализации на собственное. Функция
        <b>stringify()</b> будет вызывать метод объекта <b>toJSON()</b> и использовать возвращаемое значение, вместо того чтобы сериализовать переданный объект.
    </p>
<pre>
    <code class="hljs language-javascript">

    </code>
</pre>

    <hr>
    <!-- *** Область примера *** -->

    <script>
        // let model = {
        //     name: "BMW",
        //     autopilot : undefined,
        // }



        let model = {
            name: "BMW",
            autopilot : undefined,
            toJSON(){
                let jsonStr = '{"name": "' + this.name + '", "autopilot": ';

                if(this.autopilot === undefined){
                    jsonStr += '"Not"}';
                }
                else{
                    jsonStr += '"' + this.autopilot + '"}';
                }
                return JSON.parse(jsonStr);
            }
        }

        let car = {
            color: "Black",
            date : new Date(2019, 7, 21),
            model
        }

        let jsonModel = JSON.stringify(car);
        console.log(jsonModel);
    </script>
    <script>hljs.highlightAll();</script>
</div>
</body>
</html>
