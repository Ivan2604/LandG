<?php

/** @var yii\web\View $this */

$this->title = 'Практическое задание 1';

?>
<!--*** History object ***-->
<h1><?= $this->title; ?></h1>
<style>
    table {
        width: 300px;
        marign: 0 auto;
    }
    td{
        border: 1px solid grey;
        width: 100px;
        height: 100px;
    }
</style>
<table id="tableObject">
    <tr>
        <th>FirstName</th>
        <th>LastName</th>
        <th>Company</th>
    </tr>
    <tr>
        <td>Bill</td>
        <td>Bill</td>
        <td>Bill</td>
    </tr>
    <tr>
        <td>Bill</td>
        <td>Bill</td>
        <td>Bill</td>
    </tr>
    <tr>
        <td>Bill</td>
        <td>Bill</td>
        <td>Bill</td>
    </tr>
</table>

<script>
   console.log(tableObject.getElementsByTagName('td'));

   document.td.onmouseenter = function () {
       console.log('td mouseenter');
   }

</script>