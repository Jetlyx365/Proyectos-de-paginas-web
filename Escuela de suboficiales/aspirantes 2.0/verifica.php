<?php
session_start();

include("metadatos/conexion.php");

// Verificar si se enviaron los datos del formulario
if(isset($_POST['User']) && isset($_POST['Pass'])) {
    // Obtener los datos del formulario
    $User = $_POST['User'];
    $Pass = $_POST['Pass'];

    // Prevenir inyección SQL utilizando consultas preparadas
    $consulta = mysqli_prepare($conn, "SELECT * FROM usuarios WHERE User = ? AND Pass = ?");
    mysqli_stmt_bind_param($consulta, "ss", $User, $Pass);
    mysqli_stmt_execute($consulta);

    // Obtener el resultado de la consulta
    $result = mysqli_stmt_get_result($consulta);

    // Verificar si se encontró un usuario con los datos proporcionados
    if($Row = mysqli_fetch_assoc($result)) {
        header("Location: index.php");
    } else {
        echo "<script>alert('El usuario o la contraseña son incorrectos');</script>";
    }

    // Liberar los recursos
    mysqli_stmt_close($consulta);
}
// Cerrar la conexión
mysqli_close($conn);
?>
