<html>
<head>
    <meta charset="UTF-8">
    <title>Nuevo aspirante</title>
    <link rel="stylesheet" href="styles/crear_actualizar.css">
    <link rel="shortcut icon" href="logo.ico" type="image/x-icon">
</head>
<body>
    <h1>Nuevo Aspirante</h1>

    <!-- Botón para volver a la página principal -->
    <div id="volver">
        <a href="index.php"><button class="retro">Cancelar</button></a>
    </div>

    <div id="conteiner">
        <!-- Formulario para enviar los datos -->
        <form action="bd_crear.php" enctype="multipart/form-data" method="post">
            <!-- Input para seleccionar una foto -->
            <div class="file-select" id="nom_foto">
                <input type="file" name="Foto" id="Foto"> 
            </div>

            <!-- Inputs para ingresar apellido, nombre, DNI y teléfono -->
            <input type="text" name="Apellido" placeholder="Apellido" required="required" autocomplete="off"> 
            <input type="text" name="Nombre" placeholder="Nombre" required="required" autocomplete="off"><br><br>
            <input type="tel" name="DNI" placeholder="DNI" required="required" autocomplete="off">
            <input type="tel" name="Telefono" placeholder="Telefono" required="required" autocomplete="off"><br><br><br>

            <!-- Botón para enviar el formulario -->
            <input id="envi" type="submit" value="Subir" name="submit">
        </form>
    </div>

    <!-- Script para detectar si se ingreso una imagen -->
    <script>
        document.getElementById('Foto').addEventListener('change', function() {
            var fileInput = document.getElementById('Foto');
            var file = fileInput.files[0];
            
            if (file) {
                document.getElementById('nom_foto').classList.add('file-selected');
            } else {
                document.getElementById('nom_foto').classList.remove('file-selected');
            }
        });
    </script>
</body>
</html>
