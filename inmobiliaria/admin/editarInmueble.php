<?php
    include("../header.php");
    $id_inmueble = $_GET['id_inmueble'];
    $inmueble = $_GET['inmueble'];
    $tipo = $_GET['tipo'];
    include("../coneccion.php");
?>
<style>
    h1,h3{
        color: white;
    }
    label{
        color: white;
    }
    #cajaFoto{
        height: 373px;
        max-height: 100%;
    }
    @media only screen and (min-width: 768px) and (max-width: 940px){
        #cajaFoto{
            height: 300px;
        }
    }
    @media only screen and (min-width: 320px) and (max-width: 767px){
        #cajaFoto{
            height: 200px;
        }
        .filtro_busqueda{
            width: 100%;
            height: 400px;
            overflow-y: scroll;
        }
    }
</style>
<div class="container">
    <?php
        $consulta = "SELECT * 
                     FROM ";
        if($tipo == "alquiler"){
            $consulta .=" inmueble_alquiler iv INNER JOIN foto_alquiler ft
                        ON (iv.id_alquiler = ft.alquiler_id_alquiler) INNER JOIN agente_venta av
                            ON iv.agente_venta_id_agente_venta = av.id_agente_venta
                        WHERE  id_alquiler = $id_inmueble AND inmueble = '$inmueble' AND tipo = '$tipo'
                        ";
        } 
        elseif($tipo == "anticretico"){
            $consulta .=" inmueble_anticretico iv INNER JOIN foto_anticretico ft
                        ON (iv.id_anticretico = ft.anticretico_id_anticretico) INNER JOIN agente_venta av
                            ON iv.agente_venta_id_agente_venta = av.id_agente_venta
                        WHERE  id_anticretico = $id_inmueble AND inmueble = '$inmueble' AND tipo = '$tipo'
                        ";
        }
        elseif($tipo == "venta"){
            $consulta .=" inmueble_venta iv INNER JOIN foto_venta ft
                        ON (iv.id_venta = ft.venta_id_venta) INNER JOIN agente_venta av
                            ON iv.agente_venta_id_agente_venta = av.id_agente_venta
                        WHERE  id_venta = $id_inmueble AND inmueble = '$inmueble' AND tipo = '$tipo'
                        ";
        } 
        // echo $consulta;
        // exit;
        // $consulta = " SELECT * 
        //                 FROM inmueble_alquiler iv INNER JOIN foto_alquiler ft
        //                     ON (iv.id_alquiler = ft.alquiler_id_alquiler) INNER JOIN agente_venta av
        //                         ON iv.agente_venta_id_agente_venta = av.id_agente_venta
        //                 WHERE  id_alquiler = $id_inmueble AND inmueble = '$inmueble' AND tipo = '$tipo'";
        $mostrar = mysqli_query($conexion,$consulta);
        $numero_de_fotos = $mostrar->num_rows;
        // $dato = mysqli_fetch_array($mostrar);
    ?>
    <center>
        <h1><b>Edicion de datos</b></h1>
        <h3>Inmueble en <?=$tipo?></h3>
    </center>
    <div class="row">
        <div class="col-md-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                     <?php
                        for($j = 1; $j <= $numero_de_fotos ; $j++){
                        ?>
                            <li data-target="#carouselExampleIndicators" data-slide-to="<?=($j-1)?>" <?php if($j == 1){echo "class='active'";}?>></li>
                        <?php
                        }
                    ?> 
                    <!-- <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
                </ol>
                <div class="carousel-inner">
                    <?php
                            // $i = 1;
                            // while($dato_fotos = mysqli_fetch_array($mostrar)){
                            for($ir = 1 ; $ir <= $numero_de_fotos ; $ir++){
                                // $dato_fotos = mysqli_fetch_array($mostrar)
                                $dato = mysqli_fetch_array($mostrar);
                            ?>  
                                <div class="carousel-item <?php if($ir == 1){echo "active";}?>">
                                    <div style="background-color: white;" align="center" id="cajaFoto">
                                        <img class="d-block" src="../<?=$tipo?>/<?=$dato['foto']?>" alt="First slide" height="100%">
                                    </div>
                                </div>
                            <!-- <h1><?//=$i?></h1> -->
                            <?php
                            // $i++;
                            }
                    ?>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <br>
    
    <form action="updateAlquiler.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_inmueble" value="<?=$id_inmueble?>">
        <input type="hidden" name="urlPdf" value="<?=$dato['pdf']?>">
        <input type="hidden" name="tipo" value="<?=$tipo?>">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
            <strong>Alerta!</strong> Seleccione nuevas fotos si desea cambiar las existentes. Si NO! desea cambiar las fotos existentes no seleccione ninguna foto.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <label for="">Fotos</label>
        <input type="file" min="2" class="form-control" name="fotos[]" multiple placeholder="Escoja nuevas fotos si desea cambiar las existentes">
        <br>
        <label for="">Inmueble:</label>
        <select name="inmueble" id="" class="form-control">
            <option value="<?=$dato['inmueble']?>"><?=$dato['inmueble']?></option>
            <option value="Oficina">Oficina</option>
            <option value="Departamento">Departamento</option>
            <option value="Casa">Casa</option>
            <option value="Local Comercial">Local Comercial</option>
        </select>
        <br>
        <label for="" >Zona: </label>
        <select name="zona" id="" class="form-control">
            <option value="<?=$dato['zona']?>"><?=$dato['zona']?></option>
            <?php
            $sonsultaZona = "SELECT * FROM zona";
            $mostrarZona = mysqli_query($conexion,$sonsultaZona);
            while($datoZona = mysqli_fetch_array($mostrarZona)){
            ?>
                <option value="<?=$datoZona['nombre']?>"><?=$datoZona['nombre']?></option>
            <?php
            }
            ?>
        </select>
        <br>
        <label for="">Cocinas:</label>
        <select name="cocina" id="" class="form-control">
            <option value="<?=$dato['cocina']?>"><?=$dato['cocina']?></option>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
        <br>
        <label for="">Baños:</label>
        <select name="banio" id="" class="form-control">
            <option value="<?=$dato['7']?>"><?=$dato['7']?></option>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
        <br>
        <label for="">Dormitorio:</label>
        <select name="dormitorio" id="" class="form-control">
            <option value="<?=$dato['dormitorio']?>"><?=$dato['dormitorio']?></option>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
        <br>
        <label for="">Lavanderia:</label>
        <select name="lavanderia" id="" class="form-control">
            <option value="<?=$dato['lavanderia']?>"><?=$dato['lavanderia']?></option>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
        <br>
        <label for="">Baulera:</label>
        <select name="baulera" id="" class="form-control">
            <option value="<?=$dato['baulera']?>"><?=$dato['baulera']?></option>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
        <br>
        <label for="">Precio:</label>
        <input class="form-control" type="number" name="precio" value="<?=$dato['precio']?>">
        <br>
        <label for="">Precio en:</label>
        <select name="cambio" id="" class="form-control">
            <option value="<?=$dato['cambio']?>"><?=$dato['cambio']?></option>
            <option value="$us">$us</option>
            <option value="Bs">Bs</option>
        </select>
        <br>
        <label for="" class="disabledTextInput">Superficie(m<sup>2</sup>)</label>
        <input type="number" class="form-control" name="metraje" value="<?=$dato['metraje']?>">
        <br>
        <label for="">Parqueo:</label>
        <select name="garaje" id="" class="form-control">
            <option value="<?=$dato['garaje']?>"><?=$dato['garaje']?></option>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
        <br>
        <label for="">Mas Informacion:</label>
        <textarea name="garantia" id=""class="form-control">
            <?=$dato['garantia']?>
        </textarea>
        <br>
        <label for="">Link de You Tube:</label>
        <input type="text" name="link_youtube" class="form-control" value="<?=$dato['youtube']?>">
        <br>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
            <strong>Alerta!</strong> Seleccione un nuevo documento PDF si desea cambiar el existente. Si NO! desea cambiar no seleccione un nuevo documento.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <label for=""><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Archivo PDF:</label>
        <input type="file" class="form-control" name="pdf" accept="application/pdf">
        <br>
        <embed src="<?php echo "../".$tipo."/".$dato['pdf'];?>#toolbar=1&navpanes=1&scrollbar=1" type="application/pdf" width="100%" height="200px">
        <!-- <br>
        <object data="<?//php echo "../alquiler/".$dato['pdf'];?>" type="application/pdf"></object>
        <iframe src="<?//php echo "../alquiler/".$dato['pdf'];?>"></iframe> -->
        <center>
            
            <!-- <input type="submit" value="Editar" class="btn btn-info"> -->
            <button type="submit" class="btn btn-info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button>
            <a href="lista.php" class="btn btn-danger"><i class="fa fa-ban" aria-hidden="true"></i> Cancelar</a>
        </center>
    </form>
</div>
<?php
    include("../footer.php");
?>