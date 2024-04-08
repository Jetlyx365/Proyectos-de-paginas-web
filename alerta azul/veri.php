<?php
session_start();
$username = $_POST['username'];
$pass = $_POST['pass'];

$conexion = mysqli_connect ("localhost","root","","codigo_azul");
$consulta = "SELECT * FROM usuarios WHERE username='$username' AND pass='$pass'";
$result=mysqli_query($conexion, $consulta);
$cant_filas= mysqli_num_rows($result);
if($cant_filas > 0){
   
        header("location: administracion.php");
    
}
?>