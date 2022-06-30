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
        var d=document.documentElement.childNodes;
        var msg="";
        for(let i=0; i<d.length; ++i) {
            let nCh1 = d[i];
            msg += (+i+1) + ". "+nCh1.tagName+" ("+ nCh1.nodeName+")<br>";
            if(nCh1.hasChildNodes()) {
                let d1 = nCh1.childNodes;
                for (let i1 = 0; i1 < d1.length; ++i1) {
                    let nCh2 = d1[i1];
                    msg += " &nbsp;&nbsp; " + (+i1 + 1) + ". " + nCh2.tagName + " (" + nCh2.nodeName + ")<br>";
                    if(nCh2.hasChildNodes()){
                        let d3 = nCh2.childNodes;
                        for(let i2 =0; i2 < d3.length; ++i2){
                            let nCh3 = d3[i2];
                            msg += " &nbsp;&nbsp;&nbsp;&nbsp; " + (+i2 + 1) + ". " + nCh3.tagName + " (" + nCh3.nodeName + ")<br>";
                            if(nCh3.hasChildNodes()){
                                let d4 = nCh3.childNodes;
                                for(let i3 =0; i3 < d4.length; ++i3){
                                    let nCh4 = d4[i3];
                                    msg += " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; " + (+i3 + 1) + ". " + nCh4.tagName + " (" + nCh4.nodeName + ")<br>";
                                }
                            }
                        }
                    }
                }
            }
        }
        window.d2.innerHTML = msg;
    }
</script>
</body>
</html>
