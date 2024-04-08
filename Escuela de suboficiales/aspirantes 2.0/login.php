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
    <h1> PORTAL EJÉRCITO </h1>
    <div class="content with-header">
        <div class="header">
            <f-icon class="ftnt-fortinet-grid icon-xl"> </f-icon>
            <div id="login-login"> Ingrese sus credenciales: </div>
        </div>
        <form class="prompt" action="" method="post" autocomplete="off" id="loginForm">
        
            <div class="sub-content">
                <div class="wide-inputs">
                    <input type="text" name="User" id="username" placeholder="Nombre de Usuario" required="required">
                    <input type="password" name="Pass" id="credential" placeholder="Contraseña" required="required">
                </div>
                <div class="button-actions wide">
                    <button class="primary" type="submit"> INGRESAR </button>
                </div>
            </div>
        </form>
        <div class="texto">
            <small> &copy; B Com 602 - Ca RR SS </small>
        </div>
    </div>
</div>


</body>
</html>


<?php
include("verifica.php");

?>