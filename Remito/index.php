<html>
<link rel="stylesheet" href="index.css">
<meta charset="UTF-8">

<body>
    <form class="form"  action="bd.php"method="post">
        <h1>Ficha Técnica</h1>
        <div id="ini">
            <font id="fec"> Fecha <input type="date" name="fecha" id="col"></font> Fecha de entrega <input type="date" name="fecha_entrega" id="col"> <br><br>
            <input type="text" placeholder="Nombre del cliente" autocomplete= "off" name="nom_clie"> <input type="tel" placeholder="Telefono" autocomplete= "off" name="tel"> <br><br>
            <font id="espa">Nombre del equpo tecnico</font> <textarea name="equipo_tec" cols="20" rows="4"></textarea> <br><br>
            <input  type="text" placeholder="Tipo de computadora" autocomplete= "off" name="tipo_compu"> <input id="pc" type="text" placeholder="PC X" autocomplete= "off" name="pc_x">
            Portatil <select name="portatil">
                <option>Si</option>
                <option>No</option>
                <option selected></option>
            </select> 
            <?php     
                $conex = mysqli_connect ("localhost","root","","id20735397_formulario");
            $consulta = "SELECT num_remito FROM inc WHERE num_remito = (SELECT MAX(num_remito) FROM inc)";
            $resultado = mysqli_query($conex,$consulta);
            if ($resultado) {
                while ($row = $resultado->fetch_array()) {
                $num_remito = $row['num_remito'];
           
                ?>  N°Remito  <?php echo $num_remito; 
            }
                }
                ?>
 <input id="serie" type="text"
                placeholder="Serie" autocomplete= "off" name="serie">
        </div>
        <h2>Hardware</h2>
        <table class="content-table">
            <tr>
                <th>
                    Motherboard
                    <select name="motherboard">
                        <option>Si</option>
                        <option>No</option>
                        <option selected></option>
                    </select>
                </th>
                <th><input type="text" placeholder="Marca" autocomplete= "off" name="marca_mother"></th>
            </tr>
            <tr>
                <th>
                    Puerto PCI
                    <select name="puerto_pci">
                        <option>Si</option>
                        <option>No</option>
                        <option selected></option>
                    </select>
                </th>
            <tr>
                <th>
                    Puerto USB
                    <select name="puerto_usb">
                        <option>Si</option>
                        <option>No</option>
                        <option selected></option>
                    </select>
                </th>
            </tr>
            </tr>
            <tr>
                <th>Disco duro 1
                    <select name="disco_duro">
                        <option>Si</option>
                        <option>No</option>
                        <option selected></option>
                    </select>
                </th>
                <th><input type="text" placeholder="Marca" autocomplete= "off" name="marca_disco_duro"></th>
                <th><input type="text" placeholder="Capacidad" autocomplete= "off" name="capacidad_disco_duro"></th>

            </tr>
            <tr>
                <th>
                    Procesador
                    <select name="procesador">
                        <option>Si</option>
                        <option>No</option>
                        <option selected></option>
                    </select>
                </th>
                <th><input type="text" placeholder="Marca" autocomplete= "off" name="marca_procesador"></th>
                <th><input type="text" placeholder="Modelo" autocomplete= "off" name="modelo_procesador"></th>
            </tr>
            <tr>
                <th> Ram Mod 1
                    <select name="ram_mod_1">
                        <option>Si</option>
                        <option>No</option>
                        <option selected></option>
                    </select>
                </th>
                <th> <input type="text" placeholder="Tamaño" autocomplete= "off" name="tamano_ram_mod_1"></th>
                <th><input type="text" placeholder="Tipo" autocomplete= "off" name="tipo_ram_mod_1"></th>
            </tr>
            <tr>
                <th> Ram Mod 2
                    <select name="ram_mod_2">
                        <option>Si</option>
                        <option>No</option>
                        <option selected></option>
                    </select>
                </th>
                <th><input type="text" placeholder="Tamaño" autocomplete= "off" name="tamano_ram_mod_2"></th>
                <th><input type="text" placeholder="Tipo" autocomplete= "off" name="tipo_ram_mod_2"></th>
            </tr>
            <tr>
                <th> Tarjeta de video
                    <select name="tarjeta_video">
                        <option>Si</option>
                        <option>No</option>
                        <option selected></option>
                    </select>
                </th>
                <th><input type="text" placeholder="Marca" autocomplete= "off" name="marca_tarjeta_video"></th>
                <th><input type="text" placeholder="Modelo" autocomplete= "off" name="modelo_tarjeta_video"></th>
            </tr>
            <tr>
                <th> Tarjeta de sonido
                    <select name="tarjeta_sonido">
                        <option>Si</option>
                        <option>No</option>
                        <option selected></option>
                    </select>
                </th>
                <th><input type="text" placeholder="Marca" autocomplete= "off" name="marca_tarjeta_sonido"></th>
                <th><input type="text" placeholder="Modelo" autocomplete= "off" name="modelo_tarjeta_sonido"></th>
            </tr>
            <tr>
                <th>
                    Disipadores
                    <select name="disipadores">
                        <option>Si</option>
                        <option>No</option>
                        <option selected></option>
                    </select>
                </th>
            </tr>
            <tr>
                <th> Unidad DVD
                    <select name="unidad_DVD">
                        <option>Si</option>
                        <option>No</option>
                        <option selected></option>
                    </select>
                </th>
                <th><input type="text" placeholder="Marca" autocomplete= "off" name="marca_unidad_DVD"></th>
            </tr>
            <tr>
                <th> Unidad CD
                    <select name="unidad_CD">
                        <option>Si</option>
                        <option>No</option>
                        <option selected></option>
                    </select>
                </th>
                <th><input type="text" placeholder="Marca" autocomplete= "off" name="marca_unidad_CD"></th>
            </tr>
            <tr>
                <th>
                    Monitor
                    <select name="monitor">
                        <option>Si</option>
                        <option>No</option>
                        <option selected></option>
                    </select>
                </th>
                <th><input type="text" placeholder="Marca" autocomplete= "off" name="marca_monitor"></th>
                <th><input type="text" placeholder="Tipo" autocomplete= "off" name="tipo_monitor"></th>
            </tr>
            <tr>
                <th> Teclado
                    <select name="teclado">
                        <option>Si</option>
                        <option>No</option>
                        <option selected></option>
                    </select>
                </th>
                <th> <input type="text" placeholder="Marca" autocomplete= "off" name="marca_teclado"></th>
                <th><input type="text" placeholder="Tipo" autocomplete= "off" name="tipo_teclado"></th>
            </tr>
            <tr>
                <th> Mouse
                    <select name="mouse">
                        <option>Si</option>
                        <option>No</option>
                        <option selected></option>
                    </select>
                </th>
                <th> <input type="text" placeholder="Marca" autocomplete= "off" name="marca_mouse"></th>
                <th><input type="text" placeholder="Tipo" autocomplete= "off" name="tipo_mouse"></th>
            </tr>
        </table>
        <h2>Software</h2>
        <table class="content-table">
            <tr>
                <th> Sistema Operativo
                    <select name="sist_op">
                        <option>Si</option>
                        <option>No</option>
                        <option selected></option>
                    </select>
                </th>
                <th><input type="text" placeholder="Version" autocomplete= "off" name="version_sist_op"></th>
            </tr>
            <tr>
                <th>Sistema Ofimatico
                    <select name="sist_ofimat">
                        <option>Si</option>
                        <option>No</option>
                        <option selected></option>
                    </select>
                </th>
                <th><input type="text" placeholder="Version" autocomplete= "off" name="version_sist_ofimat"></th>
            </tr>
            <tr>
                <th> Compresor
                    <select name="compresor">
                        <option>Si</option>
                        <option>No</option>
                        <option selected></option>
                    </select>
                </th>
                <th><input type="text" placeholder="Version" autocomplete= "off" name="version_compresor"></th>
            </tr>
            <tr>
                <th> Lector de PDF
                    <select name="lector_PDF">
                        <option>Si</option>
                        <option>No</option>
                        <option selected></option>
                    </select>
                </th>
                <th><input type="text" placeholder="Version" autocomplete= "off" name="version_lector_PDF"></th>
            </tr>
            <tr>
                <th> Rar/Zip
                    <select name="rar_zip">
                        <option>Si</option>
                        <option>No</option>
                        <option selected></option>
                    </select>
                </th>
                <th><input type="text" placeholder="Version" autocomplete= "off" name="version_rar_zip"></th>
            </tr>
            <tr>
                <th> Programa 1 de diseño
                    <select name="prog_diseno_1">
                        <option>Si</option>
                        <option>No</option>
                        <option selected></option>
                    </select>
                </th>
                <th> <input type="text" placeholder="Version" autocomplete= "off" name="version_prog_diseno_1"></th>
            </tr>
            <tr>
                <th> Programa 2 de diseño
                    <select name="prog_diseno_2">
                        <option>Si</option>
                        <option>No</option>
                        <option selected></option>
                    </select>
                </th>
                <th><input type="text" placeholder="Version" autocomplete= "off" name="version_prog_diseno_2"></th>
            </tr>
            <tr>
                <th> Programa P2P
                    <select name="P2P">
                        <option>Si</option>
                        <option>No</option>
                        <option selected></option>
                    </select>
                </th>
                <th><input type="text" placeholder="Version" autocomplete= "off" name="version_P2P"></th>
            </tr>
        </table> 
        <button id="envi" type="submit" class="css-button-gradient--6" >Enviar datos</button>

    </form>
    <button  id="create_pdf" class="css-button-retro--green">Descargar como PDF</button>
    <br><br><br><br><br><br><br>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
    
    <script src="pdf.js"></script>
</body>

</html>