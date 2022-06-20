<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<!--*** History object ***-->

<!--<p class="text-danger">-->
<!--    <span class="visually-hidden">Danger: </span>-->
<!--    This action is not reversible-->
<!--</p>-->
<!--<button onclick="history.back()">Back</button>-->
<!--<button onclick="history.forward()">Forward</button>-->
<!--<script>-->
<!--    window.history.replaceState({'record':'0'}, "page 0", "?record=0");-->
<!--    window.history.pushState({'record':'1'}, "page 1", "?record=1");-->
<!--    window.history.pushState({'record':'2'}, "page 2", "?record=2");-->
<!--    window.history.pushState({'record':'3'}, "page 3", "?record=3");-->
<!--    window.history.back();-->
<!--</script>-->

<!--*** IFRAMES ***-->

<!--<style>-->
<!--    iframe{-->
<!--        border:1px solid navy;-->
<!--        height:300px;-->
<!--        margin:30px;-->
<!--        width:300px;-->
<!--    }-->
<!--    button{-->
<!--        margin:10px 150px;-->
<!--    }-->
<!--</style>-->
<!--<iframe src="about:blank"></iframe>-->
<!--<iframe src="about:blank"></iframe>-->
<!--<iframe src="about:blank" name="frame3"></iframe>-->
<!--<button onclick="window.frames[0].location='https://itstep.org'">IT Step</button>-->
<!--<button onclick="window.frames[1].location='https://mystat.itstep.org'">Mystat</button>-->
<!--<button onclick="window.frames.frame3.location='https://quiz.itstep.org'">Quizes</button>-->

<!--*** DOM ***-->

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
        /*float: right;*/
        /*height: 140px;*/
        /*overflow: auto;*/
        /*padding: 5px;*/
        /*width: 200px;*/
    }
</style>

<div id="d1">

    <h1>Header</h1>
    <p>paragraph<br><span>Span</span></p>
    <button onclick="getStructure()">Get structure</button>
</div>
<div id="d2"></div>
<script>
    function getStructure(){
        var c=document.documentElement.childNodes;
        var msg="";
        for(let i=0; i<c.length; ++i) {
            let d = c[i];
            msg += (+i + 1) + ". " + d.tagName + " (" +
                d.nodeName + ")<br>";
            if (d.hasChildNodes()) {
                let e = d.childNodes;
                for (let j = 0; j < e.length; ++j) {
                    let f = e[j];
                    msg += " &nbsp; " + (+j + 1) + ". " + f.tagName + " (" + f.nodeName + ")<br>";
                }
                window.d2.innerHTML = msg;
            }
        }
    }
</script>
