<?php 
date_default_timezone_set('America/Argentina/Buenos_Aires');
$hora_llegada= date("H:i");


?>
<html>
    <head>
<style>
.horaa{
    border: 0px;
    color: white;
}</style>
<div >
<input class="horaa" type="datatime" name="hora_llegada" value="<?= $hora_llegada?>">
</div>
</head>
</html>