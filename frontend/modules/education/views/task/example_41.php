<?php

/** @var yii\web\View $this */

$this->title = 'History object';

?>
<!--*** History object ***-->
<h1><?= $this->title; ?></h1>
<p class="text-danger">
    <span class="visually-hidden">Danger: </span>
    This action is not reversible
</p>
<button onclick="history.back()">Back</button>
<button onclick="history.forward()">Forward</button>
<script>
    // window.history.replaceState({'record':'0'}, "page 0", "?record=0");
    window.history.pushState({'record':'0'}, "page 0", window.location);
    window.history.pushState({'record':'1'}, "page 1", "?record=1");
    window.history.pushState({'record':'2'}, "page 2", "?record=2");
    window.history.pushState({'record':'3'}, "page 3", "?record=3");
    window.history.back();
</script>
