<?php
session_start();
include('fucniones.php');
$usuario = $_SESSION['user'];
$contra = $_SESSION['pass'];
$consulta = $_SESSION['consulta']; //guardo las variables sesion en variables q puedo utilizar en este momento
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Principal</title>
    <meta charset="UTF-8">
     <link rel="stylesheet" href="estilitos.css"> <!-- Enlace al archivo de estilos externo -->
     <link rel="shortcut icon" href="logo.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div id="header" > <!-- Coloco un div para darle los estilos -->
    <div class="prueba">
    <?php 
    $consulta1="SELECT * FROM usuario";
    datos_encabezado($consulta);
    $nomb=$_SESSION['nomb'];
    $ape=$_SESSION['ape'];
    ?>
    </div>
    <br><br><br>
    <?php
    ; 
    
    mostrar_tabla($consulta1);
    
    ?>
    </div>
    
</body>
</html>