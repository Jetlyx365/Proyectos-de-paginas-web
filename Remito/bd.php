<?php
$conexion = mysqli_connect ("localhost","id20735397_root","Litadelazari.1","id20735397_formulario");

$fecha = $_POST['fecha'];
$fecha_entrega = $_POST['fecha_entrega'];
$nom_clie = $_POST['nom_clie'];
$tel = $_POST['tel'];
$equipo_tec = $_POST['equipo_tec'];
$tipo_compu = $_POST['tipo_compu'];
$pc_x = $_POST['pc_x'];
$portatil = $_POST['portatil'];
$serie = $_POST['serie'];
$motherboard = $_POST['motherboard'];
$marca_mother = $_POST['marca_mother'];
$puerto_pci = $_POST['puerto_pci'];
$puerto_usb = $_POST['puerto_usb'];
$disco_duro = $_POST['disco_duro'];
$marca_disco_duro = $_POST['marca_disco_duro'];
$capacidad_disco_duro = $_POST['capacidad_disco_duro'];
$procesador = $_POST['procesador'];
$marca_procesador = $_POST['marca_procesador'];
$modelo_procesador = $_POST['modelo_procesador'];
$ram_mod_1 = $_POST['ram_mod_1'];
$tamano_ram_mod_1 = $_POST['tamano_ram_mod_1'];
$tipo_ram_mod_1 = $_POST['tipo_ram_mod_1'];
$ram_mod_2 = $_POST['ram_mod_2'];
$tamano_ram_mod_2 = $_POST['tamano_ram_mod_2'];
$tipo_ram_mod_2 = $_POST['tipo_ram_mod_2'];
$tarjeta_video = $_POST['tarjeta_video'];
$marca_tarjeta_video = $_POST['marca_tarjeta_video'];
$modelo_tarjeta_video = $_POST['modelo_tarjeta_video'];
$tarjeta_sonido = $_POST['tarjeta_sonido'];
$marca_tarjeta_sonido = $_POST['marca_tarjeta_sonido'];
$modelo_tarjeta_sonido = $_POST['modelo_tarjeta_sonido'];
$disipadores = $_POST['disipadores'];
$marca_unidad_DVD = $_POST['marca_unidad_DVD'];
$unidad_CD = $_POST['unidad_CD'];
$marca_unidad_CD = $_POST['marca_unidad_CD'];
$monitor = $_POST['monitor'];
$marca_monitor = $_POST['marca_monitor'];
$tipo_monitor = $_POST['tipo_monitor'];
$teclado = $_POST['teclado'];
$marca_teclado = $_POST['marca_teclado'];
$tipo_teclado = $_POST['tipo_teclado'];
$mouse = $_POST['mouse'];
$marca_mouse = $_POST['marca_mouse'];
$tipo_mouse = $_POST['tipo_mouse'];
$sist_op = $_POST['sist_op'];
$version_sist_op = $_POST['version_sist_op'];
$sist_ofimat = $_POST['sist_ofimat'];
$version_sist_ofimat = $_POST['version_sist_ofimat'];
$compresor = $_POST['compresor'];
$version_compresor = $_POST['version_compresor'];
$lector_PDF = $_POST['lector_PDF'];
$version_lector_PDF = $_POST['version_lector_PDF'];
$rar_zip = $_POST['rar_zip'];
$version_rar_zip = $_POST['version_rar_zip'];
$prog_diseno_1 = $_POST['prog_diseno_1'];
$version_prog_diseno_1 = $_POST['version_prog_diseno_1'];
$prog_diseno_2 = $_POST['prog_diseno_2'];
$version_prog_diseno_2 = $_POST['version_prog_diseno_2'];
$P2P = $_POST['P2P'];
$version_P2P = $_POST['version_P2P'];
$insertar = "INSERT INTO info (fecha, fecha_entrega, nom_clie, tel, equipo_tec, tipo_compu, pc_x, portatil, serie, motherboard, 
                               marca_mother, puerto_pci, puerto_usb, disco_duro, marca_disco_duro, capacidad_disco_duro, procesador,
                               marca_procesador, modelo_procesador, ram_mod_1, tamano_ram_mod_1, tipo_ram_mod_1, ram_mod_2, tamano_ram_mod_2,
                               tipo_ram_mod_2, tarjeta_video, marca_tarjeta_video, modelo_tarjeta_video, tarjeta_sonido, marca_tarjeta_sonido,
                               modelo_tarjeta_sonido, disipadores, marca_unidad_DVD, unidad_CD, marca_unidad_CD, monitor, marca_monitor,
                               tipo_monitor, teclado, marca_teclado, tipo_teclado, mouse, marca_mouse, tipo_mouse, sist_op, version_sist_op,
                               sist_ofimat, version_sist_ofimat, compresor, version_compresor, lector_PDF, version_lector_PDF, rar_zip,
                               version_rar_zip, prog_diseno_1, version_prog_diseno_1, prog_diseno_2, version_prog_diseno_2, P2P, version_P2P) VALUES(
    '$fecha', 
    '$fecha_entrega', 
    '$nom_clie',
    '$tel',
    '$equipo_tec',
    '$tipo_compu',
    '$pc_x',
    '$portatil',
    '$serie',
    '$motherboard',
    '$marca_mother',
    '$puerto_pci',
    '$puerto_usb',
    '$disco_duro',
    '$marca_disco_duro',
    '$capacidad_disco_duro',
    '$procesador',
    '$marca_procesador',
    '$modelo_procesador',
    '$ram_mod_1',
    '$tamano_ram_mod_1',
    '$tipo_ram_mod_1',
    '$ram_mod_2',
    '$tamano_ram_mod_2',
    '$tipo_ram_mod_2',
    '$tarjeta_video',
    '$marca_tarjeta_video',
    '$modelo_tarjeta_video',
    '$tarjeta_sonido',
    '$marca_tarjeta_sonido',
    '$modelo_tarjeta_sonido',
    '$disipadores',
    '$marca_unidad_DVD',
    '$unidad_CD',
    '$marca_unidad_CD',
    '$monitor',
    '$marca_monitor',
    '$tipo_monitor',
    '$teclado',
    '$marca_teclado',
    '$tipo_teclado',
    '$mouse',
    '$marca_mouse',
    '$tipo_mouse',
    '$sist_op',
    '$version_sist_op',
    '$sist_ofimat',
    '$version_sist_ofimat',
    '$compresor',
    '$version_compresor',
    '$lector_PDF',
    '$version_lector_PDF',
    '$rar_zip',
    '$version_rar_zip',
    '$prog_diseno_1',
    '$version_prog_diseno_1',
    '$prog_diseno_2',
    '$version_prog_diseno_2',
    '$P2P',
    '$version_P2P'
    )";

$query = mysqli_query($conexion, $insertar);


if ($query) {
    header('location: index.php'); 
    }
    
    else {
        header('location: index.php');
    }

    $nom_clie = $_POST['nom_clie'];
$conexion = mysqli_connect ("localhost","root","","id20735397_formulario");
$ingresar = "INSERT INTO inc (nom_clie) VALUES ('$nom_clie')";
$query = mysqli_query($conexion, $ingresar);


if ($query) {
    header('location: index.php'); 
    }
    
    else {
        header('location: index.php');
    }

?>