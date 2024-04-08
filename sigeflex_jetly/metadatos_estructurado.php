<?php
session_start();
include('fucniones.php'); //llama al archivo funciones.php
$usuario = $_POST['user']; //guarda usuario que se escribio en login.php
$contra =  $_POST['pass']; //guarda la contraseña

$consulta="Select * from usuario where user='$usuario' and pass='$contra'"; //se realiza la consulta sql para comparar los datos guardados
$_SESSION['consulta']=$consulta;
//echo $consulta;
$_SESSION['pass']=$contra;
$_SESSION['user']=$usuario;
//conexion($consulta);//llamando a la función
$resp=conexion_ejectutar_consulta($consulta);
$cantfilas=mysqli_fetch_row($resp);
$matriz = mysqli_fetch_array($resp);
//echo $cant_filas;
//$resp = $_SESSION['res']; //guardamos la variable
//while($fila=mysqli_fetch_array($resp)){ //bucle para mostrar datos d la tabla
//echo $apellido =$fila['apellido'];

//}

//echo $cantfilas;

if($cantfilas){
    
    header('location:principal_estructu.php');
    //$_SESSION['nomb']= $matriz['nombre'];
    //$_SESSION['ape']= $matriz['apellido'];
}
else{
    ?>
    <script>
      window.alert('usuario o pass incorrecto papito');  
        window.location="login.php";
        </script>
    <?php
}
//$cf=$_SESSION['cf'];
//if($cf !=0){
  //  header('location:principal_estructu.php'); //el location sirve para dirigir automaticamente hacia otro lugar
//}
//else{
    ?> <script>  //abri el JS
  //  window.alert('usuario o pass incorrecto papito'); //muestra una alerta de error 
    //    window.location="login.php";
    </script>
    <?php //header('location:login.php');

//}
?>