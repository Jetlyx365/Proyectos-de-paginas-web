<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="shortcut icon" href="logo.ico" type="image/x-icon">
</head>
<body>
    <h1>Aspirantes</h1>
    
    <!-- Formulario de búsqueda -->
    <form id="busque">
        <input type="text" name="search" id="filtro" placeholder="Buscar..." autocomplete="off">
    </form>

    <div id="conteiner">
        <div id="botones">
            <a href="metadatos/crear.php"><button class="crear_boton">Crear</button></a>
            <a href="metadatos/cerrar_sesion.php"><button class="cerrar_boton">Cerrar sesión</button></a>
        </div>
        <table id="tabla">
            <!-- Mostrar resultados de la búsqueda -->
            <?php include("fetch_results.php"); ?>
        </table>
        <!-- Paginación -->
        <div id="pagination">
            <?php
            // Mostrar botones de paginación
            if ($search == '') {
                $sql_total = "SELECT COUNT(id) AS total FROM aspirantes";
            } else {
                $sql_total = "SELECT COUNT(id) AS total FROM aspirantes WHERE Nombre LIKE '%$search%' OR Apellido LIKE '%$search%'";
            }

            // Obtener el número total de registros y calcular el número total de páginas
            $result_total = $conn->query($sql_total); // Ejecutar la consulta para contar el total de registros
            $row_total = $result_total->fetch_assoc(); // Obtener el resultado como una fila
            $total_records = $row_total["total"]; // Obtener el total de registros
            $total_pages = ceil($total_records / $records_per_page); // Calcular el número total de páginas

            // Crear el enlace con el número de página y el término de búsqueda
            for ($i = 1; $i <= $total_pages; $i++) {
                echo "<a href='?page=".$i."&search=".$search."' class='".($page == $i ? "active" : "")."'>".$i."</a> ";
            }
            ?>
        </div>
    </div>

    <script>
        // Función para obtener resultados de búsqueda
        function fetchResults(searchTerm) {
            // Crear una nueva solicitud HTTP
            var xhttp = new XMLHttpRequest();
            // Definir la función de devolución de llamada cuando  se escribe algo
            xhttp.onreadystatechange = function() {
                // Verificar si la solicitud se ha completado con éxito 
                if (this.readyState == 4 && this.status == 200) {
                    // Actualizar el contenido de la tabla con los resultados de la búsqueda
                    document.getElementById("tabla").innerHTML = this.responseText;
                }
            };
            // Abrir una solicitud GET para obtener los resultados de búsqueda del archivo fetch_results.php
            xhttp.open("GET", "fetch_results.php?search=" + encodeURIComponent(searchTerm), true);
            // Enviar la solicitud
            xhttp.send();
        }

        // Responder automáticamente cuando se escriba algo
        document.getElementById('filtro').addEventListener('input', function(event) {
            // Obtener el texto de búsqueda ingresado
            var searchTerm = event.target.value.trim();
            // Verificar si la búsqueda no está vacía
            if (searchTerm !== '') {
                // Ejecutar la función fetchResults con el término de búsqueda
                fetchResults(searchTerm);
            } else {
                // Si el término de búsqueda está vacío, ejecutar fetchResults con una cadena vacía para mostrar todos los resultados
                fetchResults('');
            }
        });

        // Ejecutar una búsqueda automáticamente al cargar la página si hay un término de búsqueda en la URL
        var searchParam = new URLSearchParams(window.location.search).get('search');
        if (searchParam !== null && searchParam !== '') {
            fetchResults(searchParam);
        }
    </script>
</body>
</html>
