<?php

/** @var yii\web\View $this */

$this->title = 'Дочерние узлы';
?>
<h1><?= $this->title; ?></h1>

<ul id="list">
    <li>first element</li>
    <li> second element
        <span>child Node 0</span>
        <a>child node 1</a>
        <p> child node 2 </p>
    </li>
    <li>third element</li>
</ul>
<script>
    let ul = window.list;
    console.log(ul.childNodes[0]);
    console.log(ul.childNodes[3].firstChild);

</script>