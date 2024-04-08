<?php
include("../metadatos_crear/conexion.php");

// Definimos el número de registros por página
$records_per_page = 5; 

// Búsqueda
$search = isset($_GET['search']) ? $_GET['search'] : '';

// Eliminar la ID especifica
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $elim = "DELETE FROM aspirantes WHERE id = $id;";
    $result = mysqli_query($conn, $elim); 
}

// Obtener el total de registros
if ($search != '') {
    $sql_total = "SELECT COUNT(id) AS total FROM aspirantes WHERE Nombre LIKE '%$search%' /**/ OR Apellido LIKE '%$search%' /**/ OR DNI LIKE '%$search%' /**/ OR Telefono LIKE '%$search%'";
} else {
    $sql_total = "SELECT COUNT(id) AS total FROM aspirantes";
}

$result_total = $conn->query($sql_total);
$row_total = $result_total->fetch_assoc();
$total_records = $row_total["total"];

// Calcular el número total de páginas
$total_pages = ceil($total_records / $records_per_page);

// Determinar qué página se está mostrando actualmente
$page = isset($_GET['page']) ? min(max($_GET['page'], 1), $total_pages) : 1;

// Saber desde que registro empezar a mostrar en la pagina actual
$start_from = ($page - 1) * $records_per_page;

// Generar la consulta SQL con la paginación y la búsqueda
$sql = "SELECT * FROM aspirantes";
if ($search != '') {
    $sql .= " WHERE Nombre LIKE '%$search%' OR Apellido LIKE '%$search%' OR DNI LIKE '%$search%' OR Telefono LIKE '%$search%'";
}
$sql .= " LIMIT $start_from, $records_per_page";
$result = $conn->query($sql);

// Generar la tabla HTML con los resultados de la búsqueda
$table_html = '<tr>
                    <th>Foto</th><th>Apellido</th><th>Nombre</th><th>DNI</th><th>Telefono</th></th>
                </tr>';
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $table_html .= '<tr>
                            <td><img src="../images/' . $row["nombre_img"] . '" alt="Foto"></td>
                            <td>' . $row["Apellido"] . '</td>
                            <td>' . $row["Nombre"] . '</td>
                            <td>' . $row["DNI"] . '</td>
                            <td>' . $row["Telefono"] . '</td>
                        </tr>';
    }
} else {
    $table_html .= '<tr><td colspan="7" style="text-align:center;">No se encontraron resultados</td></tr>';
}

echo $table_html;

?>
