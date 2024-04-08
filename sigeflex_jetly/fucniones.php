<?php
function conexion($consulta){ //creamos la funcion y le ponemos los parametros
$conexion = mysqli_connect('localhost','root','','basededatos'); //llamamos a la base d datos
$result = mysqli_query($conexion,$consulta); //declaramos una variable
//return $result;
$cant_filas = mysqli_num_rows($result); //designamos una variable
if($cant_filas >0){
    //echo "Existe 1 al menos 1 usuario que coincide usuario y contraseña en la base d datos";
    //echo  $cant_filas;
}
//session_start(); //se inicia una sesion
$_SESSION['res']=$result; //creamos una variable de sesion para guardarla en metadatos.php
$_SESSION['cf']=$cant_filas;
}
function datos_encabezado($consulta){
    $conexion = mysqli_connect('localhost','root','','basededatos'); //llamamos a la base d datos
$result = mysqli_query($conexion,$consulta); //declaramos una variable
   //$resp= conexion($consulta);
   while($row = mysqli_fetch_array($result)){
     
    $nombre = $row['nombre']; 
    $dni = $row['id_user'];
    $apellido = $row['apellido']; //guarda la variable
    echo "<p> <div class='prueba'> Bienvenido, $nombre $apellido </div> </p>";
    mostrar_foto($dni);
    
    
    
    }
    //$apenomb= $nombre. " ". $apellido;
    $_SESSION['nomb']= $nombre;
    $_SESSION['ape']= $apellido; 
    $_SESSION['dni']=$dni;
    //$_SESSION=['apenomb']=$apenomb;
}
function conexion_ejectutar_consulta($consulta){
    $con = mysqli_connect('localhost','root','','basededatos'); //conecta base d datos anachei
    $resp= mysqli_query($con,$consulta); //ejecuta la consulta
    return $resp;

}
//$nomb=$_SESSION['nomb'];
//$ape=$_SESSION['ape'];
function encabezado($nomb , $ape){
    $nomb=$_SESSION['nomb'];
    $ape=$_SESSION['ape'];
    echo "Bienvenido ".$nomb. " ".$ape;

}

function mostrar_tabla($consulta){ 
$resp=conexion_ejectutar_consulta($consulta);
?>

<table > 

<tr>
    <td id="trr"><b>Apellido</b></td><td id="trr"><b> Nombre</b></td><td id="trr"><b>DNI</b></td><td id="trr"><b> Edad</b></td>
</tr>
    <?php
while($fila=mysqli_fetch_array($resp)){ ?>
<tr id="trr">

   <?php  $Apellido=$fila['apellido'];  ?>
   <?php echo "<td id='trr'>".$fila['apellido']."</td>";

         $Nombre=$fila['nombre'];
         echo "<td id='trr'>".$fila['nombre'].'</td>';
         
         $id_user=$fila['id_user'];
         echo "<td id='trr'>".$fila['id_user'].'</td>';
         
         $edad=$fila['edad'];
         echo "<td id='trr'>".$fila['edad'].'</td>';} ?>
   </tr>
</table>
<?php
}

function mostrar_foto($dni){
    ?>
    <style>
		img {
            border-radius: 90%;
			border: 5px solid black;
			margin: 10px;
			padding: 5px;
			width: 100px;
			height: 100px;
		}
	</style>
    <img class="prueba" src="img/<?php echo $dni; ?>.jpg">
</div>
    <?php
    }
    ?>