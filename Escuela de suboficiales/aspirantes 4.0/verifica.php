<?php
session_start();

include("metadatos_admin/conexion.php");

// Verificar si se enviaron los datos del formulario
if(isset($_POST['User']) && isset($_POST['Pass'])) {
    $User = $_POST['User'];
    $Pass = $_POST['Pass'];

    $consulta = mysqli_prepare($conn, "SELECT * FROM usuarios WHERE User = ? AND Pass = ?");
    mysqli_stmt_bind_param($consulta, "ss", $User, $Pass);
    mysqli_stmt_execute($consulta);

    // Obtener el resultado de la consulta
    $result = mysqli_stmt_get_result($consulta);

   if($Row = mysqli_fetch_assoc($result)) {
    // Verificar el tipo y redirigir
    switch ($Row['Rol']) {
        case 'Admin':
            header("Location: admin/index.php");
            break;
        case 'Creador':
            header("Location: crear_aspir/index_crear.php");
            break;
        case 'Usuario':
            header("Location: visualizador/visualizar.php");
            break;
    }
} else {
    echo "<script>alert('El usuario o la contraseña son incorrectos');</script>";
}

    mysqli_stmt_close($consulta);
}
// Cerrar la conexión
mysqli_close($conn);
?>
