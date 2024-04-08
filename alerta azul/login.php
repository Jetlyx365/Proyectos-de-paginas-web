<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Sistema Hospitalario</title>
    <link rel="stylesheet" type="text/css" href="estilos-login.css">
    <link rel="icon" href="icono.ico" type="image/x-icon">

</head>
<body>
    <div class="enlace">
    <a href="index.php"><button class="boton-enlaces"> Volver al Inicio </button></a>
    </div>
    <center>
    <header>
         <h1>Iniciar Sesión</h1>
    </header>

    <div class="login">
 
    
    <main>
        <h2>Acceso de Administrador</h2>
        <form action="veri.php" method="post" >
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username" required><br><br>
            
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="pass" required><br><br>
            
            <input class="inicio-sesion" type="submit" value="Iniciar Sesión">
        </form>
    </main>
</div>
    
    <footer>
        <p>&copy; 2023 Sistema de Emergencia</p>
    </footer>
</center>
</body>
</html>
