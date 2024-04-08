<?php
include("hora.php");
if(isset($_POST['emergencia'])){
    $Nombre = $_POST ['Nombre'];
    $Edad = $_POST ['Edad'];
    $Diagnostico = $_POST ['Diagnostico'];
    $Ubicacion = $_POST ['Ubicacion'];
    $Lugar_enviar = $_POST ['Lugar_enviar'];
    $Doctores = $_POST ['Doctores'];
    $hora_llegada = $_POST['hora_llegada'];
    $conexion = mysqli_connect("Localhost","root","","codigo_azul");
    $insertar = "INSERT INTO emergencia (Nombre, Edad, Diagnostico, Ubicacion, Lugar_Enviar, Doctores, hora_llegada) VALUES( 
        '$Nombre',
        '$Edad',
        '$Diagnostico',
        '$Ubicacion',
        '$Lugar_enviar',
        '$Doctores',
        '$hora_llegada')"; 
        
    $query = mysqli_query($conexion, $insertar);
    
    if ($query) {
        ?>
        <div  class="content">
        <h3 class="normal">Espere a ser llamado</h3>
        </div>
        <?php
    }      
}
?>