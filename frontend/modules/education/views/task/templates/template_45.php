<?php
use yii\helpers\Url;
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>HTML DOM structure</title>
    <style>
        #d1 {
            border: 2px solid navy;
            height: 150px;
            margin: 20px;
            padding: 15px;
            width: 400px;
        }
        #d2 {
            border: 1px dashed navy;
            padding: 5px;
        }
    </style>
</head>
<body>
<a href="<?= Url::to(['/education/task/list'])?>">
    <button>Назад к списоку примеров</button>
</a>

<div id="d1">

    <h1>Header</h1>
    <p>paragraph<br><span>Span</span></p>
    <button onclick="getStructure()">Get structure
    </button>
</div>
<div id="d2"></div>
<script>
    function getStructure() {
        var c=document.documentElement.childNodes;
        var msg="";
        for(let i=0; i<c.length; ++i) {
            let d = c[i];
            msg += (+i+1) + ". "+d.tagName+" ("+ d.nodeName+")<br>";


            if(d.hasChildNodes()) {
                let e = d.childNodes;
                for (let j = 0; j < e.length; ++j) {
                    let f = e[j];
                    msg += " &nbsp; " + (+j + 1) + ". " + f.tagName + " (" + f.nodeName + ")<br>";
                }
            }
        }
        window.d2.innerHTML = msg;
    }
</script>
</body>
</html>
