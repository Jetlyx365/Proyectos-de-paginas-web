<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Carga de Imágenes</title>
</head>
<body>

<form id="imageForm" enctype="multipart/form-data">
    <input type="file" id="imageInput" accept=".jpg, .jpeg, .png" onchange="validateImage(this)">
    <input type="submit" value="Subir Imagen">
</form>

<script>
function validateImage(input) {
    const file = input.files[0];
    const fileSize = file.size; // Tamaño del archivo en bytes

    if (fileSize > 500 * 1024) { // 500 KB en bytes
        alert("La imagen es demasiado grande. El tamaño máximo permitido es de 500 KB.");
        input.value = ''; // Limpiar el campo de entrada
        return;
    }

    const fileType = file.type;
    if (fileType !== 'image/jpeg' && fileType !== 'image/png') {
        alert("El formato de archivo no es compatible. Solo se permiten archivos JPG/PNG.");
        input.value = ''; // Limpiar el campo de entrada
        return;
    }

    // Si pasa la validación, puedes enviar el formulario
    // document.getElementById("imageForm").submit();
}
</script>

</body>
</html>
