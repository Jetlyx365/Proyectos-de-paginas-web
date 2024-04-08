<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nuevos admins</title>
    <link rel="stylesheet" href="nuevo_admin.css">
    <link rel="shortcut icon" href="../../logo.ico">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<div id="volver">
        <a href="../index.php"><button class="retro">Cancelar</button></a>
    </div>

<div class="view-container">
    <img class="avatar" src="../../logo.png" alt="Logo">
    <h1>Crear nuevos admins</h1>
    <div class="content">
        <div>Ingrese Datos:</div><br>

        <form action="" method="post" autocomplete="off">
            <input type="text" name="Nombre" placeholder="Nombre" required="required">
            <input type="text" name="Apellido" placeholder="Apellido" required="required">
            <input type="text" name="User" placeholder="Nombre de Usuario" required="required">
            <input type="password" name="Pass" placeholder="Contraseña" required="required">
            <div>
            <font id="Rol">Asignar Rol:</font>
            <font id="opciones">
            <select name="Rol" required="required">
                <option></option>
                <option>Admin</option>
                <option>Creador</option>
                <option>Usuario</option>
            </select>
            </font>
            </div>
            <div class="button-actions wide">
                <button type="submit">INGRESAR</button>
            </div>
        </form>
        <div class="texto">
            <small>&copy; Sistema Jetlyx365</small>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    setTimeout(function() {
        $(".alert").fadeOut(1500);
    },5000);
});

if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>
</html>
<?php
include("metadatos.php");