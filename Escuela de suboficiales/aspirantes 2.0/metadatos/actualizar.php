<html>
    <head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="../styles/crear_actualizar.css">
    <title>Actualizar datos</title>
    </head>
</html>
<?php
include("conexion.php");

// Verificar si se ha recibido un parámetro GET (ID)
if ($_GET) {
    $consul = "SELECT * FROM aspirantes WHERE id = " . $_GET['id'] . ";";
    $resp = mysqli_query($conn, $consul);
    $rowID = mysqli_fetch_array($resp);
    ?>
    <!-- Formulario para actualizar los datos -->
    <h1>Actualizar datos</h1>
    <div id="volver">
        <a href="../index.php"><button class="retro">Cancelar</button></a>
    </div>
    <div id="conteiner">
        <form action="" enctype="multipart/form-data" method="post">
            <input type="hidden" value="<?= $rowID['id']; ?>" name="id">
            <!-- Input para seleccionar una nueva foto -->
            <div class="file-select" id="nom_foto">
                <input type="file" name="Foto" id="Foto">
            </div>
            <!-- Inputs para modificar los datos personales -->
            <input type="text" name="Apellido" autocomplete="off" placeholder="Apellido" value="<?= $rowID['Apellido']; ?>">
            <input type="text" name="Nombre" autocomplete="off" placeholder="Nombre" value="<?= $rowID['Nombre']; ?>">
            <input type="tel" name="DNI" autocomplete="off" placeholder="DNI" value="<?= $rowID['DNI']; ?>">
            <input type="tel" name="Telefono" autocomplete="off" placeholder="Telefono" value="<?= $rowID['Telefono']; ?>"><br><br><br>
            <!-- Botón para guardar los cambios -->
            <input id="envi" type="submit" value="Guardar">
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
    <?php
}

if ($_POST) {
    // Actualizar datos personales en la base de datos
    $actuali = "UPDATE aspirantes SET Apellido='" . $_POST['Apellido'] . "', Nombre='" . $_POST['Nombre'] . "', 
    DNI='" . $_POST['DNI'] . "', Telefono='" . $_POST['Telefono'] . "' WHERE id = " . $_POST['id'] . ";";

    $result_actuali = mysqli_query($conn, $actuali);

    // Verificar si se ha seleccionado una nueva foto para actualizarla
    if (isset($_FILES['Foto']) && $_FILES['Foto']['size'] > 0) {
        $nombre_imagen = $_FILES['Foto']['name'];
        $tipo_imagen = $_FILES['Foto']['type'];
        $datos_imagen = file_get_contents($_FILES['Foto']['tmp_name']);

        // Actualizar la foto en la base de datos
        $stmt = $conn->prepare("UPDATE aspirantes SET nombre_img = ?, tipo = ?, datos = ? WHERE id = ?");
        $stmt->bind_param("sssi", $nombre_imagen, $tipo_imagen, $datos_imagen, $_POST['id']);
        $stmt->execute();
    }
    // Guardar la foto en una carpeta del servidor
    $path = "../images/". basename($_FILES['Foto']['name']); 
    if(move_uploaded_file($_FILES['Foto']['tmp_name'], $path)) {
        header('location: ../index.php'); 
    }
    
    // Redireccionar a la página principal después de actualizar
    if ($result_actuali) {
        header("location: ../index.php");
    } else {
        echo "No se pudo actualizar el registro. <br>";
    }
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);
?>
