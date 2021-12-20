<?php
include("../header.php");
include("../coneccion.php");
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <div class="container" style="background-image: url(../../img/inicio/siai.jpg);width: 100%;">       -->
<style>
    .boton {
        /* Editar */
        background: #2CFF00;
        border-color: #000000;
        border-bottom: 5px solid black;
        border-radius: 50px;
        box-shadow: 3px 3px 3px #999;
        color: #fff;
        cursor: pointer;
        font-family: 'Raleway', Arial, Helvetica;
        font-size: 20px;
        height: 30px;
        transition: all 0.2s ease 0s;
        width: 100px;
        float: left;
    }

    .boton1 {
        /* Eliminar */
        background: #FF0000;
        border-color: #000000;
        border-bottom: 5px solid black;
        border-radius: 50px;
        box-shadow: 3px 3px 3px #999;
        color: #fff;
        /* cursor: pointer; */
        /* display: block;   */
        font-family: 'Raleway', Arial, Helvetica;
        font-size: 20px;
        height: 30px;
        margin-left: 120px;
        padding: 0;
        transition: all 0.2s ease 0s;
        width: 130px;
        float: right;

    }

    .boton2 {
        /* compartir link */
        background: #66EDF5;
        border-color: #000000;
        border-bottom: 5px solid black;
        border-radius: 50px;
        box-shadow: 3px 3px 3px #999;
        color: #fff;
        cursor: pointer;
        display: block;
        font-family: 'Raleway', Arial, Helvetica;
        font-size: 20px;
        height: 33px;
        transition: all 0.2s ease 0s;
        width: 250px;
    }

    #cajaFoto {
        height: 373px;
        max-height: 100%;
    }

    @media only screen and (min-width: 768px) and (max-width: 940px) {
        #cajaFoto {
            height: 300px;
        }
    }

    @media only screen and (min-width: 320px) and (max-width: 767px) {
        #cajaFoto {
            height: 200px;
        }

        .filtro_busqueda {
            width: 100%;
            height: 400px;
            overflow-y: scroll;
        }
    }
</style>
<div class="container">
    <div id="haber">

    </div>
    <button  class="btn btn-success btn-block" onclick="model_busca()">Buscar Inmueble</button>
    <!-- INMUEBLES EN ALQUILER -->
    <?php
    if (!empty($_GET['dato'])) {
        if ($_GET['dato'] == 1) {
    ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>ATENCION!</strong> El inmueble se Elimino Correctamente!.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php
        } else {
        ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>ATENCION!</strong> NO se pudo eliminar el inmueble!.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
    <?php
        }
    }
    ?>
    <hr>
    <?php
    $id_agente = $_SESSION['id_agente_venta'];
    // echo $id_agente;
    // $consulta  = "SELECT * FROM inmueble_alquiler WHERE agente_venta_id_agente_venta = $id_agente";
    $consulta  = "SELECT * FROM inmueble_alquiler";
    $resultado = mysqli_query($conexion, $consulta);
    $numero = $resultado->num_rows;
    if ($numero > 0) {
    ?>
        <center>
            <h3 style="color: white;">Inmuebles en Alquiler</h3>
        </center>
        <?php
        $i = 1;
        $contador = 1;
        $ghu = 1;
        while ($i <= $numero) {
            $consultaInterna = "SELECT * 
                                    FROM inmueble_alquiler iv INNER JOIN foto_alquiler ft
                                        ON (iv.id_alquiler = ft.alquiler_id_alquiler) INNER JOIN agente_venta av
                                            ON iv.agente_venta_id_agente_venta = av.id_agente_venta
                                    WHERE  alquiler_id_alquiler = $contador";
                                    #WHERE  alquiler_id_alquiler = $contador AND agente_venta_id_agente_venta = $id_agente";
                                    // echo $consultaInterna;
                                    // exit;
            $resultadoInterno = mysqli_query($conexion, $consultaInterna);
            $numeroInterno = $resultadoInterno->num_rows;
            if ($numeroInterno != 0) {
        ?>
                <div class="row">
                    <div class="col-md-12" style="background-position: center;" id="iner<?="IAQ" ?>">
                        <br>
                        <!-- <h3>
                                <?//php echo "Este es el i ".$i."<br>este es el contador ".$contador;?>
                            </h3> -->
                        <div class="row tiempo" style="border-style: inset; border-color: burlywood; margin-left: 0;margin-right: 0;">
                            <div class="col-md-8" style="margin-right: 0; margin-top: 0;margin-left: 0; padding: 0px;">
                                <div id="carouselExampleIndicators<?php echo $i ?>" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <?php
                                        for ($j = 1; $j <= $numeroInterno; $j++) {
                                            $mostrar = mysqli_fetch_array($resultadoInterno);
                                        ?>
                                            <div class="carousel-item <?php if ($j == 1) {
                                                                            echo 'active';
                                                                        } ?>">
                                                <div style="background-color: white;" align="center" id="cajaFoto">
                                                    <!-- <img src="data:image/jpg;base64,<?php //echo base64_encode($mostrar['foto']);
                                                                                            ?>" height="100%" class="kol"/> -->
                                                    <img src="<?php echo "../alquiler/" . $mostrar['foto'] ?>" alt="Aqui va la imagen" height="100%" class="d-block">
                                                </div>
                                                <div class="carousel-caption" style="margin-top: 0;">
                                                    <!-- <a href="#" class="btn btn-danger"><i class="fa fa-cut"></i> mas info</a> -->...
                                                    <a class="btn btn-success btn-sm" href="../alquiler/<?=$mostrar['foto']?>" download><i class="fa fa-download"></i></a>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <!-- Controls -->
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators<?php echo $i ?>" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators<?php echo $i ?>" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                    <!-- <a class="left carousel-control" href="#carousel-example-generic<?php echo $i ?>" role="button" data-slide="prev">
                                                <i class="fa fa-chevron-circle-left" aria-hidden="true" style="margin-top: 120px; color: #2CFF00 ;"></i>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="right carousel-control" href="#carousel-example-generic<?php echo $i ?>" role="button" data-slide="next">
                                                <i class="fa fa-chevron-circle-right" aria-hidden="true" style="margin-top: 120px; color: #2CFF00 "></i>
                                                <span class="sr-only">Next</span>
                                            </a> -->
                                </div>
                            </div>
                            <div class="col-md-4 kol" style=" background-color: white; opacity: 0.7; color: black; margin-top: 0;">
                                <h2 style="color: black;"> <?php echo $mostrar['inmueble']; ?> en Alquiler</h2>
                                <p>
                                <h4>
                                    <i class="fa fa-map-marker" aria-hidden="true" style="color: #FF0000 ;"></i> En la Zona <?php echo $mostrar['zona'] ?><br>
                                    <i class="fa fa-eraser" aria-hidden="true" style="color: ;"></i> <?php echo $mostrar['metraje'] ?>m<sup>2</sup> <br>
                                    <!-- <i class="fa fa-home" aria-hidden="true" style="color: #00FFE2;"></i> <?php //echo $mostrar['dormitorio']
                                                                                                                ?> dormitorios<br> -->
                                    <?php
                                    if ($mostrar['dormitorio'] > 0) {
                                        if ($mostrar['dormitorio'] == 1) {
                                    ?>
                                            <i class="fa fa-home" aria-hidden="true" style="color: #00FFE2;"></i> <?php echo $mostrar['dormitorio'] ?> dormitorio<br>
                                        <?php
                                        } else {
                                        ?>
                                            <i class="fa fa-home" aria-hidden="true" style="color: #00FFE2;"></i> <?php echo $mostrar['dormitorio'] ?> dormitorios<br>
                                    <?php
                                        }
                                    }
                                    ?>
                                    <?php
                                    if ($mostrar['cocina'] > 0) {
                                        if ($mostrar['cocina'] == 1) {
                                    ?>
                                            <i class="fa fa-cutlery" aria-hidden="true"></i> <?php echo $mostrar['cocina'] ?> cocina <br>
                                        <?php
                                        } else {
                                        ?>
                                            <i class="fa fa-cutlery" aria-hidden="true"></i> <?php echo $mostrar['cocina'] ?> cocinas <br>
                                    <?php
                                        }
                                    }
                                    ?>
                                    <?php
                                    if ($mostrar['7'] > 0) {
                                        if ($mostrar['7'] == 1) {
                                    ?>
                                            <i class="fa fa-bath" aria-hidden="true" style="color: ;"></i> <?php echo $mostrar['7'] ?> baño<br>
                                        <?php
                                        } else {
                                        ?>
                                            <i class="fa fa-bath" aria-hidden="true" style="color: ;"></i> <?php echo $mostrar['7'] ?> baños<br>
                                    <?php
                                        }
                                    }
                                    ?>
                                    <?php
                                    if ($mostrar['baulera'] > 0) {
                                        if ($mostrar['baulera'] == 1) {
                                    ?>
                                            <i class="fa fa-archive" aria-hidden="true" style="color:#FF9200;"></i> <?php echo $mostrar['baulera'] ?> baulera<br>
                                        <?php
                                        } else {
                                        ?>
                                            <i class="fa fa-archive" aria-hidden="true" style="color:#FF9200;"></i> <?php echo $mostrar['baulera'] ?> bauleras<br>
                                    <?php
                                        }
                                    }
                                    ?>
                                    <?php
                                    if ($mostrar['lavanderia'] > 0) {
                                        if ($mostrar['lavanderia'] == 1) {
                                    ?>
                                            <i class="fa fa-shopping-basket" aria-hidden="true"></i> <?php echo $mostrar['lavanderia'] ?> Lavanderia <br>
                                        <?php
                                        } else {
                                        ?>
                                            <i class="fa fa-shopping-basket" aria-hidden="true"></i> <?php echo $mostrar['lavanderia'] ?> Lavanderias <br>
                                    <?php
                                        }
                                    }
                                    ?>
                                    <?php
                                    if ($mostrar['garaje'] > 0) {
                                        if ($mostrar['garaje'] == 1) {
                                    ?>
                                            <i class="fa fa-car" aria-hidden="true" style="color: blue;"></i> <?php echo $mostrar['garaje'] ?> parqueo <br>
                                        <?php
                                        } else {
                                        ?>
                                            <i class="fa fa-car" aria-hidden="true" style="color: blue;"></i> <?php echo $mostrar['garaje'] ?> parqueo <br>
                                    <?php
                                        }
                                    }
                                    ?>
                                    <i class="fa fa-bookmark" aria-hidden="true"></i> <?php echo $mostrar['garantia'] ?>
                                </h4>
                                <h3><i class="fa fa-money" aria-hidden="true" style="color: #3FFF00 ;"></i><b> <?php echo number_format($mostrar['precio']) . " " . $mostrar['cambio']; ?> </b></h3>
                                </p>
                                <?php
                                if($_SESSION['nivel'] == 1){
                                ?>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href="eliminarInmueble.php?id_inmueble=<?= $mostrar['id_alquiler'] ?>&inmueble=<?= $mostrar['inmueble'] ?>&tipo=<?= $mostrar['tipo'] ?>" class="btn btn-danger btn-block"><i class="fa fa-trash" aria-hidden="true"></i> Eliminar</a>
                                        </div>
                                        <div class="col-md-6">
                                            <a class="btn btn-warning btn-block" href="editarInmueble.php?id_inmueble=<?= $mostrar['id_alquiler'] ?>&inmueble=<?= $mostrar['inmueble'] ?>&tipo=<?= $mostrar['tipo'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</a>
                                        </div>
                                        <!-- <div class="col-md-6">
                                            <h3><i class="fa fa-money" aria-hidden="true" style="color: #3FFF00 ;"></i><b> <?php echo number_format($mostrar['precio']) . " " . $mostrar['cambio']; ?> </b></h3>
                                        </div> -->
                                            <!-- <div class="col-md-3" style="float: none; background-color: yellow;">
                                                <br>
                                                
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <a href="eliminarInmueble.php?id_inmueble=<?= $mostrar['id_alquiler'] ?>&inmueble=<?= $mostrar['inmueble'] ?>&tipo=<?= $mostrar['tipo'] ?>" class="btn btn-success btl-lg boton1"><i class="fa fa-trash" aria-hidden="true"></i> Eliminar</a>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <a class="boton" href="editarInmueble.php?id_inmueble=<?= $mostrar['id_alquiler'] ?>&inmueble=<?= $mostrar['inmueble'] ?>&tipo=<?= $mostrar['tipo'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</a>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <!-- <div class="col-md-3" style="float: right;">
                                                <a href="#iner<?//=($i-1)?>"><i class="fa fa-arrow-up fa-2x" aria-hidden="true"></i></a>
                                                        <a href="#iner<?//=($i+1)?>"><i class="fa fa-arrow-down fa-2x" aria-hidden="true"></i></a>
                                                <a href="compartir.php?id=<?//php echo $mostrar['id_alquiler'];?>"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                                        <center><a class="copi" href='javascript:getlink();'>Copiar, avisar y desaparecer</a></center>
                                            </div> -->
                                    </div>
                                    <div id="to-copy<?php echo $i ?>" class="d-none">
                                        https://www.siai.com.bo/inmobiliaria/alquiler/mostrar.php<?php echo "?id=" . $mostrar['id_alquiler'] . "&" . "inmueble=" . $mostrar['inmueble']; ?>
                                    </div>
                                    <center>
                                        <br>
                                        <button onClick='CopyToClipboard("to-copy<?php echo $i ?>")' class="boton2">Copiar Link del Inmueble</button>
                                        <a href="<?php echo "../" . $mostrar['tipo'] . "/" . $mostrar['pdf'] ?>" download="<?php echo "browsour" . $mostrar['inmueble'] . $mostrar['id_alquiler'] . ".pdf"; ?>" target="_blank">Descargar browsour</a>
                                        <?php
                                        if ($mostrar['pdf'] != NULL) {
                                        ?>
                                            <h1><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></h1>
                                        <?php
                                        } else {
                                        ?>
                                            <h1><i class="fa fa-window-close" aria-hidden="true"></i></h1>
                                        <?php
                                        }
                                        ?>
                                    </center>
                                    <br>
                                <?php
                                } 
                                ?>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn btn-primary btn-block" type="button" onClick="downloadImage('<?=$mostrar['id_alquiler']?>','<?=$mostrar['tipo']?>')"><i class="fa fa-download"></i> Descargar Imagenes <?=$mostrar['foto']?></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
    <?php
                $i++;
            }
            $contador++;
        }
    }
    ?>
    <!-- END INMUEBLES EN ALQUILER -->
    <hr>
    <!-- INMUEBLES EN VENTA -->
    <?php
    // echo $id_agente;
    // $consulta  = "SELECT * FROM inmueble_venta WHERE agente_venta_id_agente_venta = $id_agente";
    $consulta  = "SELECT * FROM inmueble_venta";
    $resultado = mysqli_query($conexion, $consulta);
    $numero = $resultado->num_rows;
    if ($numero > 0) {
    ?>
        <center>
            <h3 style="color: white;">Inmuebles en Venta</h3>
        </center>
        <?php
        $i = 1;
        $contador = 1;
        $ghu = 1;
        while ($i <= $numero) {
            $consultaInterna = "SELECT * 
                                    FROM inmueble_venta iv INNER JOIN foto_venta ft
                                        ON (iv.id_venta = ft.venta_id_venta) INNER JOIN agente_venta av
                                            ON iv.agente_venta_id_agente_venta = av.id_agente_venta
                                    WHERE  venta_id_venta = $contador";
                                    #WHERE  venta_id_venta = $contador AND agente_venta_id_agente_venta = $id_agente";
            $resultadoInterno = mysqli_query($conexion, $consultaInterna);
            $numeroInterno = $resultadoInterno->num_rows;
            if ($numeroInterno != 0) {
        ?>
                <div class="row">
                    <div class="col-md-12" style="background-position: center;" id="iner<?= $i ?>">
                        <br>
                        <!-- <h3>
                                <?//php echo "Este es el i ".$i."<br>este es el contador ".$contador;?>
                            </h3> -->
                        <div class="row tiempo" style="border-style: inset; border-color: burlywood; margin-left: 0;margin-right: 0;">
                            <div class="col-md-8" style="margin-right: 0; margin-top: 0;margin-left: 0; padding: 0px;">
                                <div id="carouselExampleIndicators<?php echo $i ?>" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <?php
                                        for ($j = 1; $j <= $numeroInterno; $j++) {
                                            $mostrar = mysqli_fetch_array($resultadoInterno);
                                        ?>
                                            <div class="carousel-item <?php if ($j == 1) {
                                                                            echo 'active';
                                                                        } ?>">
                                                <div style="background-color: white;" align="center" id="cajaFoto">
                                                    <!-- <img src="data:image/jpg;base64,<?php //echo base64_encode($mostrar['foto']);
                                                                                            ?>" height="100%" class="kol"/> -->
                                                    <img src="<?php echo "../venta/" . $mostrar['foto'] ?>" alt="Aqui va la imagen" height="100%" class="d-block">
                                                </div>
                                                <div class="carousel-caption" style="margin-top: 0;">
                                                    <!-- <a href="#" class="btn btn-danger"><i class="fa fa-cut"></i> mas info</a> -->...
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <!-- Controls -->
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators<?php echo $i ?>" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators<?php echo $i ?>" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                    <!-- <a class="left carousel-control" href="#carousel-example-generic<?php echo $i ?>" role="button" data-slide="prev">
                                                <i class="fa fa-chevron-circle-left" aria-hidden="true" style="margin-top: 120px; color: #2CFF00 ;"></i>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="right carousel-control" href="#carousel-example-generic<?php echo $i ?>" role="button" data-slide="next">
                                                <i class="fa fa-chevron-circle-right" aria-hidden="true" style="margin-top: 120px; color: #2CFF00 "></i>
                                                <span class="sr-only">Next</span>
                                            </a> -->
                                </div>
                            </div>
                            <div class="col-md-4 kol" style=" background-color: white; opacity: 0.7; color: black; margin-top: 0;">
                                <h2 style="color: black;"> <?php echo $mostrar['inmueble'] . " en " . $mostrar['tipo']; ?></h2>
                                <p>
                                <h4>
                                    <i class="fa fa-map-marker" aria-hidden="true" style="color: #FF0000 ;"></i> En la Zona <?php echo $mostrar['zona'] ?><br>
                                    <i class="fa fa-eraser" aria-hidden="true" style="color: ;"></i> <?php echo $mostrar['metraje'] ?>m<sup>2</sup> <br>
                                    <!-- <i class="fa fa-home" aria-hidden="true" style="color: #00FFE2;"></i> <?php //echo $mostrar['dormitorio']
                                                                                                                ?> dormitorios<br> -->
                                    <?php
                                    if ($mostrar['dormitorio'] > 0) {
                                        if ($mostrar['dormitorio'] == 1) {
                                    ?>
                                            <i class="fa fa-home" aria-hidden="true" style="color: #00FFE2;"></i> <?php echo $mostrar['dormitorio'] ?> dormitorio<br>
                                        <?php
                                        } else {
                                        ?>
                                            <i class="fa fa-home" aria-hidden="true" style="color: #00FFE2;"></i> <?php echo $mostrar['dormitorio'] ?> dormitorios<br>
                                    <?php
                                        }
                                    }
                                    ?>
                                    <?php
                                    if ($mostrar['cocina'] > 0) {
                                        if ($mostrar['cocina'] == 1) {
                                    ?>
                                            <i class="fa fa-cutlery" aria-hidden="true"></i> <?php echo $mostrar['cocina'] ?> cocina <br>
                                        <?php
                                        } else {
                                        ?>
                                            <i class="fa fa-cutlery" aria-hidden="true"></i> <?php echo $mostrar['cocina'] ?> cocinas <br>
                                    <?php
                                        }
                                    }
                                    ?>
                                    <?php
                                    if ($mostrar['7'] > 0) {
                                        if ($mostrar['7'] == 1) {
                                    ?>
                                            <i class="fa fa-bath" aria-hidden="true" style="color: ;"></i> <?php echo $mostrar['7'] ?> baño<br>
                                        <?php
                                        } else {
                                        ?>
                                            <i class="fa fa-bath" aria-hidden="true" style="color: ;"></i> <?php echo $mostrar['7'] ?> baños<br>
                                    <?php
                                        }
                                    }
                                    ?>
                                    <?php
                                    if ($mostrar['baulera'] > 0) {
                                        if ($mostrar['baulera'] == 1) {
                                    ?>
                                            <i class="fa fa-archive" aria-hidden="true" style="color:#FF9200;"></i> <?php echo $mostrar['baulera'] ?> baulera<br>
                                        <?php
                                        } else {
                                        ?>
                                            <i class="fa fa-archive" aria-hidden="true" style="color:#FF9200;"></i> <?php echo $mostrar['baulera'] ?> bauleras<br>
                                    <?php
                                        }
                                    }
                                    ?>
                                    <?php
                                    if ($mostrar['lavanderia'] > 0) {
                                        if ($mostrar['lavanderia'] == 1) {
                                    ?>
                                            <i class="fa fa-shopping-basket" aria-hidden="true"></i> <?php echo $mostrar['lavanderia'] ?> Lavanderia <br>
                                        <?php
                                        } else {
                                        ?>
                                            <i class="fa fa-shopping-basket" aria-hidden="true"></i> <?php echo $mostrar['lavanderia'] ?> Lavanderias <br>
                                    <?php
                                        }
                                    }
                                    ?>
                                    <?php
                                    if ($mostrar['garaje'] > 0) {
                                        if ($mostrar['garaje'] == 1) {
                                    ?>
                                            <i class="fa fa-car" aria-hidden="true" style="color: blue;"></i> <?php echo $mostrar['garaje'] ?> parqueo <br>
                                        <?php
                                        } else {
                                        ?>
                                            <i class="fa fa-car" aria-hidden="true" style="color: blue;"></i> <?php echo $mostrar['garaje'] ?> parqueo <br>
                                    <?php
                                        }
                                    }
                                    ?>
                                    <i class="fa fa-bookmark" aria-hidden="true"></i> <?php echo $mostrar['garantia'] ?>
                                </h4>
                                <h3><i class="fa fa-money" aria-hidden="true" style="color: #3FFF00 ;"></i><b> <?php echo number_format($mostrar['precio']) . " " . $mostrar['cambio']; ?> </b></h3>
                                </p>
                                <?php
                                if($_SESSION['nivel'] == 1 ){
                                ?>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href="eliminarInmueble.php?id_inmueble=<?= $mostrar['id_venta'] ?>&inmueble=<?= $mostrar['inmueble'] ?>&tipo=<?= $mostrar['tipo'] ?>" class="btn btn-danger btn-block"><i class="fa fa-trash" aria-hidden="true"></i> Eliminar</a>
                                        </div>
                                        <div class="col-md-6">
                                            <a class="btn btn-warning btn-block" href="editarInmueble.php?id_inmueble=<?= $mostrar['id_venta'] ?>&inmueble=<?= $mostrar['inmueble'] ?>&tipo=<?= $mostrar['tipo'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</a>
                                        </div>
                                        <!-- <div class="col-md-3" style="float: none;">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <a href="eliminarInmueble.php?id_inmueble=<?= $mostrar['id_venta'] ?>&inmueble=<?= $mostrar['inmueble'] ?>&tipo=<?= $mostrar['tipo'] ?>" class="btn btn-danger btn-block"><i class="fa fa-trash" aria-hidden="true"></i> Eliminar</a>
                                                </div>
                                                <div class="col-md-6">
                                                    <a class="btn btn-warning btn-block" href="editarInmueble.php?id_inmueble=<?= $mostrar['id_venta'] ?>&inmueble=<?= $mostrar['inmueble'] ?>&tipo=<?= $mostrar['tipo'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</a>
                                                </div>
                                                <div class="col-md-6">
                                                    <a href="#" class="btn btn-success btl-lg boton1"><i class="fa fa-youtube-play" aria-hidden="true"></i>Eliminar</a>                                            
                                                </div>
                                                <div class="col-md-6">
                                                    <a class="boton" href="https://api.whatsapp.com/send?phone=591<?= $mostrar['celular']; ?>&text=Estoy%20interesado%20en%20el%20inmueble,%20por%20favor%20podría%20ampliar%20algo%20mas%20de%20de%20informacion?">
                                                        <i class="fa fa-whatsapp" aria-hidden="true"></i> Editar
                                                    </a>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="col-md-3" style="float: right;">
                                            <!-- <a href="#iner<?//=($i-1)?>"><i class="fa fa-arrow-up fa-2x" aria-hidden="true"></i></a>
                                                    <a href="#iner<?//=($i+1)?>"><i class="fa fa-arrow-down fa-2x" aria-hidden="true"></i></a> -->
                                            <!-- <a href="compartir.php?id=<?//php echo $mostrar['id_alquiler'];?>"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                                    <center><a class="copi" href='javascript:getlink();'>Copiar, avisar y desaparecer</a></center> -->
                                        </div>
                                    </div>
                                    <div id="to-copy<?php echo $i ?>" class="d-none">
                                        https://www.siai.com.bo/inmobiliaria/venta/mostrar.php<?php echo "?id=" . $mostrar['id_venta'] . "&" . "inmueble=" . $mostrar['inmueble']; ?>
                                    </div>
                                    <center>
                                        <br>
                                        <button onClick='CopyToClipboard("to-copy<?php echo $i ?>")' class="boton2">Copiar Link del Inmueble</button>
                                        <a href="<?php echo "../" . $mostrar['tipo'] . "/" . $mostrar['pdf'] ?>" download="<?php echo "browsour" . $mostrar['inmueble'] . $mostrar['id_venta'] . ".pdf"; ?>" target="_blank">Descargar browsour</a>
                                        <?php
                                        if ($mostrar['pdf'] != NULL) {
                                        ?>
                                            <h1><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></h1>
                                        <?php
                                        } else {
                                        ?>
                                            <h1><i class="fa fa-window-close" aria-hidden="true"></i></h1>
                                        <?php
                                        }
                                        ?>
                                    </center>
                                    <br>
                                <?php
                                }
                                ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
    <?php
                $i++;
            }
            $contador++;
        }
    }
    ?>
    <!-- END INMUEBLES EN VENTA -->
    <!-- INMUEBLES EN ANTICRETICO -->
    <?php
    // echo $id_agente;
    // $consulta  = "SELECT * FROM inmueble_anticretico WHERE agente_venta_id_agente_venta = $id_agente";
    $consulta  = "SELECT * FROM inmueble_anticretico";
    $resultado = mysqli_query($conexion, $consulta);
    $numero = $resultado->num_rows;
    if ($numero > 0) {
    ?>
        <center>
            <h3 style="color: white;">Inmuebles en Anticretico</h3>
        </center>
        <?php
        $i = 1;
        $contador = 1;
        $ghu = 1;
        while ($i <= $numero) {
            $consultaInterna = "SELECT * 
                                    FROM inmueble_anticretico iv INNER JOIN foto_anticretico ft
                                        ON (iv.id_anticretico = ft.anticretico_id_anticretico) INNER JOIN agente_venta av
                                            ON iv.agente_venta_id_agente_venta = av.id_agente_venta
                                    WHERE  anticretico_id_anticretico = $contador";
                                    #WHERE  anticretico_id_anticretico = $contador AND agente_venta_id_agente_venta = $id_agente";
            $resultadoInterno = mysqli_query($conexion, $consultaInterna);
            $numeroInterno = $resultadoInterno->num_rows;
            if ($numeroInterno != 0) {
        ?>
                <div class="row">
                    <div class="col-md-12" style="background-position: center;" id="iner<?= $i ?>">
                        <br>
                        <!-- <h3>
                                <?//php echo "Este es el i ".$i."<br>este es el contador ".$contador;?>
                            </h3> -->
                        <div class="row tiempo" style="border-style: inset; border-color: burlywood; margin-left: 0;margin-right: 0;">
                            <div class="col-md-8" style="margin-right: 0; margin-top: 0;margin-left: 0; padding: 0px;">
                                <div id="carouselExampleIndicators<?php echo $i ?>" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <?php
                                        for ($j = 1; $j <= $numeroInterno; $j++) {
                                            $mostrar = mysqli_fetch_array($resultadoInterno);
                                        ?>
                                            <div class="carousel-item <?php if ($j == 1) {
                                                                            echo 'active';
                                                                        } ?>">
                                                <div style="background-color: white;" align="center" id="cajaFoto">
                                                    <!-- <img src="data:image/jpg;base64,<?php //echo base64_encode($mostrar['foto']);
                                                                                            ?>" height="100%" class="kol"/> -->
                                                    <img src="<?php echo "../anticretico/" . $mostrar['foto'] ?>" alt="Aqui va la imagen" height="100%" class="d-block">
                                                </div>
                                                <div class="carousel-caption" style="margin-top: 0;">
                                                    <!-- <a href="#" class="btn btn-danger"><i class="fa fa-cut"></i> mas info</a> -->...
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <!-- Controls -->
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators<?php echo $i ?>" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators<?php echo $i ?>" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                    <!-- <a class="left carousel-control" href="#carousel-example-generic<?php echo $i ?>" role="button" data-slide="prev">
                                                <i class="fa fa-chevron-circle-left" aria-hidden="true" style="margin-top: 120px; color: #2CFF00 ;"></i>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="right carousel-control" href="#carousel-example-generic<?php echo $i ?>" role="button" data-slide="next">
                                                <i class="fa fa-chevron-circle-right" aria-hidden="true" style="margin-top: 120px; color: #2CFF00 "></i>
                                                <span class="sr-only">Next</span>
                                            </a> -->
                                </div>
                            </div>
                            <div class="col-md-4 kol" style=" background-color: white; opacity: 0.7; color: black; margin-top: 0;">
                                <h2 style="color: black;"> <?php echo $mostrar['inmueble'] . " en " . $mostrar['tipo']; ?></h2>
                                <p>
                                <h4>
                                    <i class="fa fa-map-marker" aria-hidden="true" style="color: #FF0000 ;"></i> En la Zona <?php echo $mostrar['zona'] ?><br>
                                    <i class="fa fa-eraser" aria-hidden="true" style="color: ;"></i> <?php echo $mostrar['metraje'] ?>m<sup>2</sup> <br>
                                    <!-- <i class="fa fa-home" aria-hidden="true" style="color: #00FFE2;"></i> <?php //echo $mostrar['dormitorio']
                                                                                                                ?> dormitorios<br> -->
                                    <?php
                                    if ($mostrar['dormitorio'] > 0) {
                                        if ($mostrar['dormitorio'] == 1) {
                                    ?>
                                            <i class="fa fa-home" aria-hidden="true" style="color: #00FFE2;"></i> <?php echo $mostrar['dormitorio'] ?> dormitorio<br>
                                        <?php
                                        } else {
                                        ?>
                                            <i class="fa fa-home" aria-hidden="true" style="color: #00FFE2;"></i> <?php echo $mostrar['dormitorio'] ?> dormitorios<br>
                                    <?php
                                        }
                                    }
                                    ?>
                                    <?php
                                    if ($mostrar['cocina'] > 0) {
                                        if ($mostrar['cocina'] == 1) {
                                    ?>
                                            <i class="fa fa-cutlery" aria-hidden="true"></i> <?php echo $mostrar['cocina'] ?> cocina <br>
                                        <?php
                                        } else {
                                        ?>
                                            <i class="fa fa-cutlery" aria-hidden="true"></i> <?php echo $mostrar['cocina'] ?> cocinas <br>
                                    <?php
                                        }
                                    }
                                    ?>
                                    <?php
                                    if ($mostrar['7'] > 0) {
                                        if ($mostrar['7'] == 1) {
                                    ?>
                                            <i class="fa fa-bath" aria-hidden="true" style="color: ;"></i> <?php echo $mostrar['7'] ?> baño<br>
                                        <?php
                                        } else {
                                        ?>
                                            <i class="fa fa-bath" aria-hidden="true" style="color: ;"></i> <?php echo $mostrar['7'] ?> baños<br>
                                    <?php
                                        }
                                    }
                                    ?>
                                    <?php
                                    if ($mostrar['baulera'] > 0) {
                                        if ($mostrar['baulera'] == 1) {
                                    ?>
                                            <i class="fa fa-archive" aria-hidden="true" style="color:#FF9200;"></i> <?php echo $mostrar['baulera'] ?> baulera<br>
                                        <?php
                                        } else {
                                        ?>
                                            <i class="fa fa-archive" aria-hidden="true" style="color:#FF9200;"></i> <?php echo $mostrar['baulera'] ?> bauleras<br>
                                    <?php
                                        }
                                    }
                                    ?>
                                    <?php
                                    if ($mostrar['lavanderia'] > 0) {
                                        if ($mostrar['lavanderia'] == 1) {
                                    ?>
                                            <i class="fa fa-shopping-basket" aria-hidden="true"></i> <?php echo $mostrar['lavanderia'] ?> Lavanderia <br>
                                        <?php
                                        } else {
                                        ?>
                                            <i class="fa fa-shopping-basket" aria-hidden="true"></i> <?php echo $mostrar['lavanderia'] ?> Lavanderias <br>
                                    <?php
                                        }
                                    }
                                    ?>
                                    <?php
                                    if ($mostrar['garaje'] > 0) {
                                        if ($mostrar['garaje'] == 1) {
                                    ?>
                                            <i class="fa fa-car" aria-hidden="true" style="color: blue;"></i> <?php echo $mostrar['garaje'] ?> parqueo <br>
                                        <?php
                                        } else {
                                        ?>
                                            <i class="fa fa-car" aria-hidden="true" style="color: blue;"></i> <?php echo $mostrar['garaje'] ?> parqueo <br>
                                    <?php
                                        }
                                    }
                                    ?>
                                    <i class="fa fa-bookmark" aria-hidden="true"></i> <?php echo $mostrar['garantia'] ?>
                                </h4>
                                <h3><i class="fa fa-money" aria-hidden="true" style="color: #3FFF00 ;"></i><b> <?php echo number_format($mostrar['precio']) . " " . $mostrar['cambio']; ?> </b></h3>
                                </p>
                                <?php
                                if($_SESSION['nivel'] == 1){
                                ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="eliminarInmueble.php?id_inmueble=<?= $mostrar['id_anticretico'] ?>&inmueble=<?= $mostrar['inmueble'] ?>&tipo=<?= $mostrar['tipo'] ?>" class="btn btn-danger btn-block"><i class="fa fa-trash" aria-hidden="true"></i> Eliminar</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a class="btn btn-warning btn-block" href="editarInmueble.php?id_inmueble=<?= $mostrar['id_anticretico'] ?>&inmueble=<?= $mostrar['inmueble'] ?>&tipo=<?= $mostrar['tipo'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</a>
                                    </div>
                                </div>
                                <div id="to-copy<?php echo $i ?>" class="d-none">
                                    https://www.siai.com.bo/inmobiliaria/anticretico/mostrar.php<?php echo "?id=" . $mostrar['id_anticretico'] . "&" . "inmueble=" . $mostrar['inmueble']; ?>
                                </div>
                                <center>
                                <br>
                                <button onClick='CopyToClipboard("to-copy<?php echo $i ?>")' class="boton2">Copiar Link del Inmueble</button>
                                <a href="<?php echo "../" . $mostrar['tipo'] . "/" . $mostrar['pdf'] ?>" download="<?php echo "browsour" . $mostrar['inmueble'] . $mostrar['id_anticretico'] . ".pdf"; ?>" target="_blank">Descargar browsour</a>
                                <?php
                                if ($mostrar['pdf'] != NULL) {
                                ?>
                                    <h1><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></h1>
                                <?php
                                } else {
                                ?>
                                    <h1><i class="fa fa-window-close" aria-hidden="true"></i></h1>
                                <?php
                                }
                                ?>
                                </center>
                                <br>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
    <?php
                $i++;
            }
            $contador++;
        }
    }
    ?>
    <!-- END INMUEBLES EN ANTICRETICO -->
</div>
<?php
include("../footer.php");
?>
<script>
    $(document).ready(function() {
        $("#des").hide();
        $("#navegacion").click(function() {
            $("#des").slideToggle("slow");
        });
        $("#des1").hide();
        $("#navegacion1").click(function() {
            $("#des1").slideToggle("slow");
        });
    });

    function copiarAlPortapapeles(id_elemento) {
        // Crea un campo de texto "oculto"
        var aux = document.createElement("input");

        // Asigna el contenido del elemento especificado al valor del campo
        aux.setAttribute("value", document.getElementById(id_elemento).innerHTML);

        // Añade el campo a la página
        document.body.appendChild(aux);

        // Selecciona el contenido del campo
        aux.select();

        // Copia el texto seleccionado
        document.execCommand("copy");

        // Elimina el campo de la página
        document.body.removeChild(aux);
    }

    function CopyToClipboard(containerid) {
        // Create a new textarea element and give it id='t'
        let textarea = document.createElement('textarea')
        textarea.id = 't'
        // Optional step to make less noise on the page, if any!
        textarea.style.height = 0
        // Now append it to your page somewhere, I chose <body>
        document.body.appendChild(textarea)
        // Give our textarea a value of whatever inside the div of id=containerid
        textarea.value = document.getElementById(containerid).innerText
        // Now copy whatever inside the textarea to clipboard
        let selector = document.querySelector('#t')
        selector.select()
        document.execCommand('copy')
        // Remove the textarea
        document.body.removeChild(textarea)
    }

    function model_busca(){
        alert("en desarrollo :v");
    }

    function downloadImage(id_inmueble, inmueble){
        // alert(id_inmueble+" <---> "+inmueble);
        var  id = id_inmueble;
        var inmueble = inmueble;

        $.ajax({
        url: 'downloadImage.php',
        data: {
                id: id, 
                inmueble: inmueble
            },
        type:'POST',
        success:function (data){
            $('#haber').html(data);
            clickeo();
            // alert('Bien');
        },
        error:function (){
            alert("mal");
        }
     });

    }

    function clickeo(){
        var all = document.getElementsByClassName("foto");
        var allLeng = all.length;
        console.log(all);
        console.log(allLeng);
        for( var  i=0; i<allLeng; i++){
            var enlace = all[i];
            enlace.click();
            // console.log(enlace);
        }
        // setInterval(function(){$(".foto").click();}, 1000);
        // while (all){
        //     console
        // }

    }
</script>