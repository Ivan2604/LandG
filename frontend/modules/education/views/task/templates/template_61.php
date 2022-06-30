<?php
use yii\helpers\Url;
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Добавление новой записи (контакта) в телефонную книгу.</title>
    <link rel="stylesheet" href="/education/css/template/style.css">
    <style>
        #logForm{
            background-color:#5599EE;
            display:block;
            height:160px;
            padding:20px;
            width:400px;
        }
        #formText{
            color:white;
            float:left;
            font-size:40px;
            font-weight:bold;
            height:200px;
            width:200px;
        }
        .rounded {
            border-radius: 15px;
            border-width: 0;
            display: block;
            height: 30px;
            margin: 10px 0;
            /*padding: 0 0 0 10px;*/
            padding: 0;
            width: 160px;
        }
        #enter{
            background-color:green;
            color:white;
            text-align: center;
        }
    </style>
</head>
<body>
<a href="<?= Url::to(['/education/task/view', 'id' => 2])?>">
    <button>Назад к списоку примеров</button>
</a><br>
<!-- *** Описательный текст к заданию *** -->
<div>
    <p>

    </p>
</div>
<hr>
<!-- *** Область примера *** -->

<form method="GET" action="" id="logForm">
    <div id="formText">LogForm</div>
    <select class="rounded" name="city">
        <option value="Moskov">Moskov</option>
        <option value="Irkutsk">Irkutsk</option>
        <option value="Odessa">Odessa</option>
        <option value="" disabled selected hidden>City</option>
    </select>
    <input type="text" name="login" class="rounded" placeholder="login"/>
    <input type="password" name="password" class="rounded" placeholder="password"/>
    <input type="submit" id="enter" class="rounded" value="ENTER"/>
</form>

</body>
</html>
