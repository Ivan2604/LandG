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
<a href="<?= Url::to(['/education/task/view', 'id' => 2])?>">
    <button>Назад к списоку примеров</button>
</a><br>
<!-- *** Описательный текст к заданию *** -->
<div class="main">
    <p>
        В строке добавления указывается имя Cookie (в приведенном примере это <b>«registered»</b>), затем знак <b>«=»</b> и ее значение (<b>«User»</b>), дополнительные кавычки для значения не нужны. Через разделитель <b>«;»</b> указывается ключевое слово <b>«expires=»</b> и записывается срок действия Cookie по стандарту RFC 2822, например, <b>«Thu, 14 Feb 2019 08:12:40 GMT»</b>. Затем снова разделитель <b>«;»</b>, ключевое слово <b>«path=»</b> и область действия Cookie. В данном примере — глобальная область <b>«/»</b>.
    </p>
<pre>
    <code class="hljs language-javascript">
document.cookie = "registered=User; expires=Thu, 14 Feb 2019 08:12:40 GMT; path=/"
    </code>
</pre>
    <p>
        Значение Cookie (<b>«User»</b>) может быть выбрано произвольным образом. Имя (<b>«registered»</b>) ограничено правилами именования (см. урок 1), но тоже предусматривает возможность изменения. Ключевые слова <b>«expires=»</b> и <b>«path=»</b> должны быть набраны именно в таком виде, вариации не разрешаются. Формат даты-времени также должен соответствовать указанному формату, другие форматы, даже стандартные, не допускаются. Например, записи <b>«2019-02-14 08:12:40»</b> или <b>«02/14/2019 08:12:40»</b>, являющимися правильными по другим стандартам, в данном случае будут приводить к ошибкам.
    </p>
    <p>
        Дополнительно в атрибутах Cookie может быть указан домен, для которого устанавливается данное значение <b>«domain=mystep.org»</b>. По умолчанию значение домена устанавливается в имя сайта (сервера), отправившего данную страницу, и в переназначении не нуждается.
    </p>
    <p>
        Атрибут <b>«secure»</b> используется без значения и указывает, что данные Cookie могут передаваться только через защищенный протокол HTTPS. При использовании обычного протокола НТТР передача происходить не будет.
    </p>
    <p>
        Атрибуты <b>«domain»</b> и <b>«secure»</b> не являются обязательными, можно создавать Cookie без них, применяя инструкцию, приведенную выше.
    </p>
    <pre>
    <code class="hljs language-javascript">
document.cookie = "registered=User; expires=Thu, 14 Feb 2019 08:12:40 GMT; path=/; domain=mystep.org; secure"
    </code>
</pre>
    <p>Если нам нужно получить полный перечень установленных Cookie, мы обращаемся к переменной <b>«document.cookie»</b> для чтения. В ответ мы получим строку, в которой действующие Cookie представлены парами <b>«имя=значение»</b>, разделенными символами <b>«; »</b> (точка с запятой и пробел). Данные о сроке и области видимости не возвращаются.
    </p>
    <p>
        Еще <b>одной особенностью Cookie</b> является то, что они устанавливаются для сайтов (доменов) и, в большинстве случаев, не могут быть установлены для локальных файлов, с которыми мы раньше выполняли все практические работы.
    </p>
    <hr>
    <!-- *** Область примера *** -->
    <div id="out"></div>
    <script>

        document.cookie = "registered=User; expires=Tue, 5 Juli 2022 08:12:40 GMT; path=/";
        document.cookie = "registered=User2; expires=Tue, 6 Juli 2022 08:12:40 GMT; path=/";
        document.cookie = "organization=Step; expires=Tue, 5 Juli 2022 08:12:40 GMT; path=/";

        // window.out.innerHTML = document.cookie;
        console.log(document.cookie);

        // Обрабатывать такую строку достаточно неудобно, поэтому напишем команды, которые преобразуют ее в объект:
        let x = document.cookie;
        let s = x.split('; ');
        let cookieObject = {};
        let c;
        for(let i=0; i < s.length; i++){
            c = s[i].split('=');
            cookieObject[c[0]] = c[1];
        }
        console.log(cookieObject);

        for(let co in cookieObject)
            window.out.innerHTML += "<br />" + co + " = " + cookieObject[co] + "<br/>";
    </script>
    <script>hljs.highlightAll();</script>
</div>
</body>
</html>
