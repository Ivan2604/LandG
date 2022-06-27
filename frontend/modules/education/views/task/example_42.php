<?php

/** @var yii\web\View $this */

$this->title = 'IFRAMES';
?>

<!--*** IFRAMES ***-->
<h1><?= $this->title; ?></h1>
<style>
    iframe{
        border:1px solid navy;
        height:200px;
        margin:30px;
        width:200px;
    }
    button{
        margin:10px 150px;
    }
</style>
<iframe src="about:blank"></iframe>
<iframe src="about:blank"></iframe>
<iframe src="about:blank" name="frame3"></iframe>
<button onclick="window.frames[0].location='https://itstep.org'">IT Step</button>
<button onclick="window.frames[1].location='https://mystat.itstep.org'">Mystat</button>
<button onclick="window.frames.frame3.location='https://quiz.itstep.org'">Quizes</button>
<iframe width="560" name="frame" height="315" src="about:blank" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<button onclick="window.frames.frame.location='https://www.youtube.com/embed/hWJ-00GmpPI'">Youtube</button>
