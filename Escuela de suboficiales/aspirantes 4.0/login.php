<!DOCTYPE html>
<html lang="es" class="main-app">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="logo.ico">
    <link rel="stylesheet" href="styles/login.css">
    <title> Login</title>
</head>
<body>
<div class="view-container">
    <img class="avatar" src="logo.png" alt="Logo">
    <h1>Portal Ejercito</h1>
    <div class="content">
        <div>Ingrese sus credenciales:</div><br>
        
        <form action="" method="post" autocomplete="off">
                    <input type="text" name="User" placeholder="Nombre de Usuario" required="required">
                    <input type="password" name="Pass" placeholder="Contraseña" required="required">
                <div class="button-actions wide">
                    <button type="submit">INGRESAR</button>
                </div>
        </form>
    </div>
</div>
<div class="texto">
            <small>&copy; Sistema Jetlyx365</small>
        </div>
</body>
</html>
<?php
include("verifica.php");
?>