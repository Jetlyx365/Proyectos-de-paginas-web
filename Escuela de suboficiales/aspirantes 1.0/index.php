<?php

//Inicio eliminar datos
include("conexion.php");
if ($_GET) {
    $elim = "DELETE FROM aspirantes WHERE id = ".$_GET['id'].";";
    $result = mysqli_query($conn, $elim); 
}
//Fin eliminar datos

//Inicio mostrar datos en tabla
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "esesc";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM aspirantes";
$result = $conn->query($sql);
//Fin mostrar datos en tabla
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="shortcut icon" href="logo.ico" type="image/x-icon">
    <style>
    td{
       border: 2px solid black;
       border-collapse: collapse;
       text-align: center;
       background-color: rgb(161 155 155 / 26%);
    }
    img{
       max-width: 100px; 
       max-height: 100px;
       border-radius: 30%;
    }
    </style>
</head>
<body>
    <h1>Aspirantes</h1>
    
    <?php
    //Veridica si hay datos en la BD
    if ($result->num_rows > 0) {
    ?>
    <div id="conteiner">
    <div id="crear">
        <a href="crear.php"><button class="crear_boton">Crear</button></a>
    </div>
        <table>
            <tr>
                <th>Foto</th><th>Apellido</th><th>Nombre</th><th>DNI</th><th>Telefono</th><th id="edit">Actualizar</th><th id="elim">Eliminar</th>
            </tr>
            <?php
            // Mostrar cada registro en la tabla
            while($row = $result->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo "<img src='images/" . $row["nombre_img"] . "' alt='Foto'>";?></td>
                    <td><?php echo $row["Apellido"];?></td>
                    <td><?php echo $row["Nombre"];?></td>
                    <td><?php echo $row["DNI"];?></td>
                    <td><?php echo $row["Telefono"];?></td>
                    <td><?php echo "<a href=\"actualizar.php?id=".$row["id"]."\"><button id='edit_but'>Actualizar</button></a>";?></td>
                    <td><?php echo "<a href=\"?id=".$row["id"]."\" onclick=\"return confirm('¿Estás seguro que deseas eliminar el registro?');\"><button id='elim_but'>Eliminar</button></a>";?></td>
                </tr>
            <?php
            }
            ?>
        </table>
        </div>
    <?php
    } else {
        ?><div id="no_datos"><?php
        echo "No se encontró información de personas en la base de datos.";
        ?></div><?php
    }

    $conn->close();
    ?>
</body>
</html>



