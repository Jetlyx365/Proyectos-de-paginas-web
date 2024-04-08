<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Nuevo aspirante</title>
    <link rel="stylesheet" href="../styles/crear_actualizar.css">
    <link rel="shortcut icon" href="../logo.ico" type="image/x-icon">
</head>
<body>
    <h1>Nuevo Aspirante</h1>

    <!-- Botón para volver a la página principal -->
    <div id="volver">
        <a href="../admin/index.php"><button class="retro">Cancelar</button></a>
    </div>

    <div id="conteiner">
        <!-- Formulario para enviar los datos -->
        <form id="imageForm" action="bd_crear.php" enctype="multipart/form-data" method="post" onsubmit="return validateImage()">
            <!-- Input para seleccionar una foto -->
            <div class="file-select" id="nom_foto">
                <input type="file" name="Foto" id="Foto" accept=".jpg, .jpeg, .png"> 
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

    <!-- Script para validar la carga de imágenes -->
    <script>
        // Este bloque de código se ejecuta cada vez que el usuario selecciona una imagen
        document.getElementById('Foto').addEventListener('change', function() {
            var fileInput = document.getElementById('Foto');
            // Obtenemos el archivo seleccionado
            var file = fileInput.files[0];
            
            // Verificamos si se seleccionó un archivo
            if (file) {
                // Si se seleccionó un archivo, obtenemos su tamaño y tipo
                var fileSize = file.size;
                var fileType = file.type;

                // Verificamos si el tamaño del archivo excede el límite de 500 KB o si el tipo de archivo no es JPG/PNG
                if (fileSize > 500 * 1024 || (fileType !== 'image/jpeg' && fileType !== 'image/png')) {
                    // Si no cumple con las condiciones, mostramos una alerta y se quita la clase 'file-selected' del contenedor de la imagen
                    alert("El tamaño máximo permitido es de 500 KB y solo se permiten archivos JPG/PNG.");
                    document.getElementById('nom_foto').classList.remove('file-selected');
                } else {
                    // Si cumple con las condiciones, añadimos la clase 'file-selected'
                    document.getElementById('nom_foto').classList.add('file-selected');
                }
            } else {
                // Si no se seleccionó ningún archivo, quitamos la clase 'file-selected'
                document.getElementById('nom_foto').classList.remove('file-selected');
            }
        });

        // Esta función se utiliza para validar la imagen antes de enviar el formulario
        function validateImage() {
            var fileInput = document.getElementById('Foto');
            // Obtenemos el archivo seleccionado
            var file = fileInput.files[0];
            
            // Verificamos si no se seleccionó ningún archivo
            if (!file) {
                // Mostramos una alerta indicando que se debe seleccionar una imagen
                alert("Por favor, selecciona una imagen.");
                // Devolvemos 'false' para evitar que se envíe el formulario
                return false;
            }

            // Obtenemos el tamaño del archivo
            var fileSize = file.size;
            // Verificamos si el tamaño del archivo excede el límite de 500 KB
            if (fileSize > 500 * 1024) {
                // Mostramos una alerta indicando que el tamaño de la imagen es demasiado grande
                alert("La imagen es demasiado grande. El tamaño máximo permitido es de 500 KB.");
                // Devolvemos 'false' para evitar que se envíe el formulario
                return false;
            }

            // Obtenemos el tipo de archivo
            var fileType = file.type;
            // Verificamos si el tipo de archivo no es JPG/PNG
            if (fileType !== 'image/jpeg' && fileType !== 'image/png') {
                // Mostramos una alerta indicando que el formato del archivo no es compatible
                alert("El formato de archivo no es compatible. Solo se permiten archivos JPG/PNG.");
                // Devolvemos 'false' para evitar que se envíe el formulario
                return false;
            }

            // Si la imagen cumple con todas las condiciones, devolvemos 'true' para permitir el envío del formulario
            return true;
        }
    </script>
</body>
</html>
