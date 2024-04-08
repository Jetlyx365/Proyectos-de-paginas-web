<?php
include("conexion.php");

    // Verificar si se ha enviado una imagen
    if(isset($_FILES['Foto'])) {
        $Nombre = $_POST['Nombre'];
        $Apellido = $_POST['Apellido'];
        $DNI = $_POST['DNI'];
        $Telefono = $_POST['Telefono'];
        $nombre_imagen = $_FILES['Foto']['name'];
        $tipo_imagen = $_FILES['Foto']['type'];
        $datos_imagen = file_get_contents($_FILES['Foto']['tmp_name']);

        // Guardar la imagen en la Base de Datos
        $stmt = $conn->prepare("INSERT INTO aspirantes (nombre_img, tipo, datos, Nombre, Apellido, DNI, Telefono) VALUES (?, ?, ?, '$Nombre', '$Apellido', '$DNI', '$Telefono')");
        $stmt->bind_param("sss", $nombre_imagen, $tipo_imagen, $datos_imagen);
        $stmt->execute();
    }



/*Guardar en una carpeta*/
$path = "../images/". basename($_FILES['Foto']['name']); 
 
if(move_uploaded_file($_FILES['Foto']['tmp_name'], $path)) {
    header('location: ../index.php'); 
} 
/*Fin guardar en carpeta*/



?>