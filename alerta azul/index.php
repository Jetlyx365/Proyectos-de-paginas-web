<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Hospitalario</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <link rel="icon" href="icono.ico" type="image/x-icon">

</head>
<body>
    <?php 
     include("hora.php"); 
    ?>
    <center> 
    <header>
        <h1>Bienvenido al Sistema de Emergencias</h1>
    </header>
    <a href="login.php"><button class="boton-enlaces">Iniciar Sesión</button></a>

    <div class="codigo-azul">
        <main>
            <section id="codigo-azul">
                <h2>Código Azul - Ingresar Paciente</h2>
                <p>Seleccione el tipo de paciente y complete el formulario correspondiente.</p>
                
                <!-- Botones para seleccionar el tipo de paciente -->
                <button class="boton" id="boton-emergencia">Emergencia</button>
                <button class="boton" id="boton-normal">Urgencia</button>
                
                <!-- Formulario de ingreso de emergencia (oculto inicialmente) -->
                <form id="formulario-emergencia" method="post" style="display: none;">
                <h3>Emergencia</h3>
                Nombre: <input type="text" name="Nombre"> <br><br>
                Edad: <input type="text" name="Edad"><br><br>

                    <label for="ubicacion">Ubicación:</label>
                    <select id="ubicacion" name="Ubicacion" required>
                        <option value="Piso 1">Sector de espera 1</option>
                        <option value="Piso 2">Sector de espera 2</option>
                        <option value="Piso 3">Sector de espera 3</option>
                        <!-- Agrega más opciones de ubicación según sea necesario -->
                    </select><br><br>

                    <label for="diagnostico-normal">Diagnóstico:</label>
                    <textarea id="diagnostico-normal" name="Diagnostico" rows="4" required></textarea><br><br>
            
                    <label for="lugar_enviar">Lugar a Enviar:</label>
                    <select id="lugar_enviar" name="Lugar_enviar" required>
                        <option value="Sala de Emergencias">Emfermería</option>
                        <option value="UCI">Neurología </option>
                        <option value="Quirófano">Sala de radiología </option>
                        <!-- Agrega más opciones de lugares a enviar según sea necesario -->
                    </select><br><br>
                    <label >Doctor:</label>
                    <select id="lugar_enviar" name="Doctores" required>
                        <option>Cintia Cardona</option>
                        <option>Adrian Saldaña</option>
                        <option>Margarita Olivares </option>
                        <option>Maria Pino</option>
                        <option>Ricardo Fonseca</option>
                        <!-- Agrega más opciones de lugares a enviar según sea necesario -->
                    </select><br><br>
                    Hora de llegada:
                    <input id="hora" type="datatime" name="hora_llegada" value="<?= $hora_llegada?>"><br><br>
                    <input class="boton_emer" type="submit" name="emergencia" value="Ingresar Paciente">
                    
                    <!-- ... -->
                </form>

                <!-- Formulario de ingreso normal (oculto inicialmente) -->
                <form id="formulario-normal" method="post" style="display: none;">
                    <!-- Campos para ingreso normal -->
                    <h3>Urgencia</h3>
                    Nombre: <input type="text" name="Nombre"> <br><br>
                Edad: <input type="text" name="Edad"><br><br>

                    <label for="ubicacion">Ubicación:</label>
                    <select id="ubicacion" name="Ubicacion" required>
                        <option value="Piso 1">Ambulancia</option>
                        <option value="Piso 2">Camilla</option>
                        <option value="Piso 3">Dentro del hospital</option>
                        <!-- Agrega más opciones de ubicación según sea necesario -->
                    </select><br><br>

                    <label for="diagnostico-normal">Diagnóstico:</label>
                    <textarea id="diagnostico-normal" name="Diagnostico" rows="4" required></textarea><br><br>
            
                    <label for="lugar_enviar">Lugar a Enviar:</label>
                    <select id="lugar_enviar" name="Lugar_enviar" required>
                        <option value="Sala de Emergencias">Sala de Emergencias</option>
                        <option value="UCI">UCI</option>
                        <option value="Quirófano">Quirófano</option>
                        <!-- Agrega más opciones de lugares a enviar según sea necesario -->
                    </select><br><br>
                    <label >Doctor:</label>
                    <select id="lugar_enviar" name="Doctores" required>
                        <option>Luis Carlos</option>
                        <option>Catalina Melgar</option>
                        <option>Alicia Olmedo </option>
                        <option>David Pérez</option>
                        <option>Laura Maria</option>
                        <!-- Agrega más opciones de lugares a enviar según sea necesario -->
                    </select><br><br>
                    Hora de llegada:
                    <input id="hora" type="datatime" name="hora_llegada" value="<?= $hora_llegada?>"><br><br>
                    <input class="boton_urg" type="submit" name="urgencia" value="Ingresar Paciente">

                </form>
            </section>
        </main>
    </div>
    <div id="mensaje" class="mensaje-oculto">
        <span id="tiempo-espera-texto"></span>
    </div>
    

    <!-- Referencia al archivo JavaScript -->
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    setTimeout(function() {
        $(".content").fadeOut(1500);
    },5000);
});
</script>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
    <footer>
        <p>&copy; 2023 Sistema de Emergencia</p>
    </footer>
</center>
</body>
</html>
<?php include("urg.php"); ?>
<?php include("emerg.php"); ?>