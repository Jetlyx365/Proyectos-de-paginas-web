<?php
include("conexion.php");

if(isset($_POST['User']) && isset($_POST['Pass'])) {

// Recibir datos del formulario
$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$User = $_POST['User'];
$Pass = $_POST['Pass'];
$Rol = $_POST['Rol'];

// Verificar si ya existe un usuario con el mismo Nombre de usuario
$sql = "SELECT * FROM usuarios WHERE User='$User'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    ?><div class="error"><?php
    echo "El usuario ya existe. Por favor, elige otro Nombre de usuario.";
    ?></div><br><br><br><?php
} else {
    // Insertar usuario en la base de datos
    $sql_insert = "INSERT INTO usuarios (Nombre, Apellido, User, Pass, Rol)
                   VALUES ('$Nombre', '$Apellido', '$User', '$Pass', '$Rol')";
    if ($conn->query($sql_insert) === TRUE) {
        ?><div class="exito"><?php
        echo "Registro exitoso. ¡Bienvenido, $Nombre!";
        ?></div><br><br><br><?php
    } else {
        ?><div class="error"><?php
        echo "Error al registrar el usuario: " . $conn->error;
        ?></div><br><br><br><?php
    }
}
}
$conn->close();
?>