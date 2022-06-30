<?php
use yii\helpers\Url;
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Добавление новой записи (контакта) в телефонную книгу.</title>
    <link rel="stylesheet" href="/education/css/template/style.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.5.1/build/styles/default.min.css">
    <script src="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.5.1/build/highlight.min.js"></script>
    <style>
        #regForm b{
            display:inline-block;
            padding-top:5px;
            width:100px;
        }
        #regForm input[type="submit"]{
            margin: 15px 150px;
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
<pre>
    <code class="hljs language-html">

    </code>
</pre>

<hr>
    <!-- *** Область примера *** -->
    <form method="GET" id="regForm" onsubmit="return checkForm()">
        <b>First name:</b>
        <input type="text" id="name1" name="name1" required/><br/>
        <b>Last name:</b>
        <input type="text" id="name2" name="name2" required/><br/>
        <b>Login:</b>
        <input type="text" id="login" name="login" required/><br/>
        <b>Password:</b>
        <input type="password" id="pas1" name="pass" required/><br/>
        <b>Confirm password:</b>
        <input type="password" id="pas2" required/><br/>
        <b>Email:</b>
        <input type="email" id="email" name="email" required/><br/>
        <b>Phone number:</b>
        <input type="phone" id="phone" name="phone" required/><br/>
        <b>Code:</b>
        <input type="number" id="code" name="code" required/><br/>
        <b></b>
        <label>
            <input type="checkbox" name="accept" required/>
            I accept the rules
        </label><br/>
        <input type="submit" value="Register"/>
    </form>
    <script>
        function checkForm() {
            // alert("Analyzing...");
            // return false;
            //проверка пароля
            let n1 = document.getElementById("name1").value;
            // let t1 = /[^a-z]/i;
            // let t1 = /^[A-Z][a-z]*$/;
            // let t1 = /^[A-Z][a-z]*(-[A-Z][a-z]*)*$/
            // let t1 = /^[A-Za-z]'?[A-Za-z][a-z]*$/
            let t1 = /^[A-Za-z]'?[A-Za-z][a-z]*(-[A-Za-z]'?[A-Za-z][a-z]*)*$/ // Jon-o'Konel
            if(!t1.test(n1))
                alert("First name is incorrect");

            let n2 = document.getElementById("name2").value;
            if(!t1.test(n2)){
                alert("Last name is incorrect");
                return false;
            }

            // проверка пароля
            let p1 = document.getElementById("pas1").value;
            if(! /\d/.test(p1))
                alert("Password has no digit");
            if(! /[A-Z]/.test(p1))
                alert("Password has no big letters");
            if(! /[a-z]/.test(p1))
                alert("Password has no small letters");

            let p2 = document.getElementById("pas2").value;
            if(p1 != p2){
                alert("Passwords mismatch");
                return false;
            }

            //проверка email
            let eMail = document.getElementById("email").value;
            let te = /^\w+([-+.’]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/ ;
            if(! te.test(eMail) )
                alert("e-Mail is incorrect");

            let phone = document.getElementById("phone").value;
            if(! /^\+?\d{6,12}$/.test(phone) ){
                alert("Phone is incorrect");
                return false;
            }
            let cod = document.getElementById("code").value;
            if(/\D/.test(cod) ){
                alert("Code is incorrect");
                return false;
            }
            let agree = document.getElementById("accept").value;
            if(agree!="on"){
                alert("You should accept rules");
                return false;
            }
            return true;
        }
    </script>
<script>hljs.highlightAll();</script>
</body>
</html>
