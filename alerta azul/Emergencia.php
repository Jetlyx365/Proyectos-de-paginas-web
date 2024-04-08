<?php
$conexion = mysqli_connect("Localhost","root","","codigo_azul");
?>
<html>
    <head>
<link rel="stylesheet" href="estilos-admi.css">
<title>Reg Emergencia</title>
<link rel="icon" href="icono.ico" type="image/x-icon">

</head>
<body>
    <div class="enlace">
    <a href="administracion.php"><button class="boton-enlaces"> Volver a administración </button></a>
    </div>
    <div class="form">
    <table>
        <center><h1>Registro emergencia</h1></center>
    <?php
                    $consulta ="SELECT * FROM emergencia";
                    $resultado = mysqli_query($conexion,$consulta);
            
        while ($mostrar = mysqli_fetch_array($resultado)) {
        ?>
            <tr>
            <td class="arr">
            Num Paciente
            </td>
            <td><?php echo $mostrar['Numero_paciente']?></td>
            </tr>
        
            <tr>
            <td class="arr">
            Nombre
            </td>
            <td><?php echo $mostrar['Nombre']?></td>
            </tr>

            <tr>
            <td class="arr">
            Edad
            </td>
            <td><?php echo $mostrar['Edad']?></td>
            </tr>

            <tr>
            <td class="arr">
            Diagnostico
            </td>
            <td><?php echo $mostrar['Diagnostico']?></td>
            </tr>

            <tr>
            <td class="arr">
            Ubicación
            </td>
            <td><?php echo $mostrar['Ubicacion']?></td>
            </tr>

            <tr>
            <td class="arr">
            Lugar enviado
            </td>
            <td><?php echo $mostrar['Lugar_enviar']?></td>
            </tr>

            <tr>
            <td class="arr">
            Doctores
            </td>
            <td><?php echo nl2br( $mostrar['Doctores'])?></td>
            </tr>

            <tr>
                <td class="fon">
                Espacio entre tablas
                </td>
                <td class="fon">
                Espacio entre tablas
                </td>
            </tr>
        <?php
        }
        ?>
    </table></div><br><br><br>

    <center><button class="css-button-gradient--4"  id="create_pdf">Exportar como PDF</button></center><br><br><br>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
    
    <script src="pdf.js"></script>

    </body>

</html>