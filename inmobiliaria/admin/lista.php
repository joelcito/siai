
<?php
include("../seguridad.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Joel Jonathan Flores Quispe">

  <title>Administracion</title>
  <!-- Custom fonts for this template-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../../css/sb-admin-2.min.css" rel="stylesheet">

</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
        .joel {
        background-image: url(../../img/inicio/03.jpg);
        width: 100%;
        background-size: 400%;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        animation: movimiento 20s infinite linear alternate;
    }

    @keyframes movimiento {
        from {
        background-position: bottom left;
        }

        to {
        background-position: top right;
        }
    }
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
    body { padding-top: 70px; }  /* En el caso de .fixed-top */
</style>
<body class="joel">
    <div class="container">

        <!-- inico del modal  -->

        <div class="modal fade" id="modal-busca-inmueble" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Filtro de busqueda de Zonas</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="GET" id="formulario-busca-zona" >
                            <div class="panel-admin-box filtro_busqueda">
                                <!-- <h6 class="text-center">Filtro de busqueda</h6> -->
                                <!-- filtro de busqueda -->
                                    <div class="row" >
                                        <div class="col-md-12">
                                            <!-- <h4>Zona</h4> -->
                                            <?php
                                                include("../coneccion.php");
                                                
                                                $consulta = "SELECT DISTINCT zona 
                                                            FROM inmueble_anticretico
                                                            -- WHERE inmueble = 'Casa'u
                                                            ";
                                                $resultado = mysqli_query($conexion,$consulta);

                                                $zonas = array();

                                                while($mostrar = mysqli_fetch_array($resultado)){
                                                    if (!in_array($mostrar['zona'], $zonas)) {
                                                        array_push($zonas, $mostrar['zona']);
                                                    }
                                                }


                                                $consulta = "SELECT DISTINCT zona 
                                                            FROM inmueble_alquiler
                                                            -- WHERE inmueble = 'Casa'u
                                                            ";
                                                $resultado = mysqli_query($conexion,$consulta);


                                                while($mostrar = mysqli_fetch_array($resultado)){
                                                    if (!in_array($mostrar['zona'], $zonas)) {
                                                        array_push($zonas, $mostrar['zona']);
                                                    }
                                                }

                                                
                                                $consulta = "SELECT DISTINCT zona 
                                                            FROM inmueble_venta
                                                            -- WHERE inmueble = 'Casa'u
                                                            ";
                                                $resultado = mysqli_query($conexion,$consulta);


                                                while($mostrar = mysqli_fetch_array($resultado)){
                                                    if (!in_array($mostrar['zona'], $zonas)) {
                                                        array_push($zonas, $mostrar['zona']);
                                                    }
                                                }


                                                // var_dump($zonas);
                                                // exit;x

                                                $x = 1;
                                                // while($mostrar = mysqli_fetch_array($resultado)){
                                                foreach ($zonas as $key => $value) {
                                                ?>
                                                    <!-- <label for="<?=$x?>" class="form-control"><?=$mostrar['zona']?>  <input type="checkbox" name="zona[]" value="<?=$mostrar['zona']?>" id="<?=$x?>"></label> -->
                                                    <label for="<?=$x?>" class="form-control"><?=$value?> 
                                                        <input class="zonas" type="checkbox" name="zona[]" value="<?=$value?>" id="<?=$x?>">
                                                    </label>
                                               <?php
                                                $x++;
                                                }
                                            ?>
                                        </div>
                                        <!-- <div class="col-md-4">
                                            <h4>Metraje</h4>
                                            <label for="">Desde</label>
                                            <input type="number" class="form-control" name="desde">                   
                                            <label for="">Hasta</label>
                                            <input type="number" class="form-control" name="hasta">
                                        </div> 
                                        <div class="col-md-4">
                                            <h4>Precio</h4>
                                            <label for="">Minimo</label>
                                            <input type="number" class="form-control" name="minimo">
                                            <label for="">Maximo</label>
                                            <input type="number" class="form-control" name="maximo">
                                        </div> -->
                                    </div>
                                    <!-- <a href="#iner1"> -->
                                    
                                    <!-- </a> -->
                                <!-- end filtro de busqueda -->
                            </div>
                            <div>
                                <center>
                                    <button  onclick="buscar()" type="submit" name="buton" id="buton" class="btn btn-info btn-block" style="float: none;" > Buscar <i class="fa fa-search" aria-hidden="true"></i></button>
                                    <!-- <button  onclick="buscar()" type="button" name="buton" id="buton" class="btn btn-info btn-block" style="float: none;" > Buscar <i class="fa fa-search" aria-hidden="true"></i></button> -->
                                </center>
                            </div>
                        </form> 
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- end del modal -->

        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand" href="#"><img src="../../img/inicio/siai.jpg" width="50px" alt="Aqui el logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" 
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#" onclick="buscarInmuble()">Buscar Inmueble <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="excelAlquiler.php">Exportar Excel Alquiler <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="excelAnticretico.php">Exportar Excel Anticretico <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="excelVenta.php">Exportar Excel Venta <span class="sr-only">(current)</span></a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li> -->
                </ul>
                <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form> -->
            </div>
        </nav>

        <div id="haber" style="display: none;">

        </div>

        <div id="bloque-inmuebles-alquiler">
            <?php
            // if(isset($_GET['buton'])){
                $queryNewAlquiler = "SELECT * FROM inmueble_alquiler";

                if(isset($_GET['zona'])){
                    $zona = implode("','",$_GET['zona']);
                    $queryNewAlquiler.=" WHERE zona IN('".$zona."')";
                }

                $resultadoNewAlquiler = mysqli_query($conexion, $queryNewAlquiler);

                $cantidadBusquedaNewALquiler = $resultadoNewAlquiler->num_rows;
                if($cantidadBusquedaNewALquiler > 0 ){
                ?>
                <center>
                    <h3 style="color: white;">Inmuebles en Alquiler</h3>
                </center>
                <?php
                }

                $i = 1 ;

                while($datosAlquiler = mysqli_fetch_array($resultadoNewAlquiler)){
                ?>
                    <div class="row">
                        <div class="col-md-12" style="background-position: center;" id="iner<?= $i ?>">
                            <br>
                            <!-- <h3>
                                    <?//php echo "Este es el i ".$i."<br>este es el contador ".$contador;?>
                                </h3> -->
                            <div class="row tiempo" style="border-style: inset; border-color: burlywood; margin-left: 0;margin-right: 0;">
                                <div class="col-md-8" style="margin-right: 0; margin-top: 0;margin-left: 0; padding: 0px;">
                                    <div id="carouselExampleIndicatorsAlquiler<?php echo $i ?>" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <?php
                                            $id = $datosAlquiler['id_alquiler'];

                                            $queryFotosAlquiler = "SELECT *  FROM foto_alquiler WHERE alquiler_id_alquiler = $id";

                                            $ressultadoFotosAlquiler = mysqli_query($conexion, $queryFotosAlquiler);

                                            $j = 1 ;

                                            while($datosFotosAlquiler = mysqli_fetch_array($ressultadoFotosAlquiler)){
                                                ?>
                                                <div class="carousel-item <?php if ($j == 1) {
                                                                                echo 'active';
                                                                            } ?>">
                                                    <div style="background-color: white;" align="center" id="cajaFoto">
                                                        <!-- <img src="data:image/jpg;base64,<?php //echo base64_encode($mostrar['foto']);
                                                                                                ?>" height="100%" class="kol"/> -->
                                                        <img src="<?php echo "../alquiler/" . $datosFotosAlquiler['foto'] ?>" alt="Aqui va la imagen" height="100%" class="d-block">
                                                    </div>
                                                    <div class="carousel-caption" style="margin-top: 0;">
                                                        <!-- <a href="#" class="btn btn-danger"><i class="fa fa-cut"></i> mas info</a> -->...
                                                    </div>
                                                </div>
                                                <?php
                                                $j++;
                                            }
                                            ?>
                                        </div>
                                        <!-- Controls -->
                                        <a class="carousel-control-prev" href="#carouselExampleIndicatorsAlquiler<?php echo $i ?>" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleIndicatorsAlquiler<?php echo $i ?>" role="button" data-slide="next">
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
                                    <h2 style="color: black;"> <?php echo $datosAlquiler['inmueble'] . " en " . $datosAlquiler['tipo']; ?></h2>
                                    <p>
                                    <h4>
                                        <i class="fa fa-map-marker" aria-hidden="true" style="color: #FF0000 ;"></i> En la Zona <?php echo $datosAlquiler['zona'] ?><br>
                                        <i class="fa fa-eraser" aria-hidden="true" style="color: ;"></i> <?php echo $datosAlquiler['metraje'] ?>m<sup>2</sup> <br>
                                        <!-- <i class="fa fa-home" aria-hidden="true" style="color: #00FFE2;"></i> <?php //echo $datosAlquiler['dormitorio']
                                                                                                                    ?> dormitorios<br> -->
                                        <?php
                                        if ($datosAlquiler['dormitorio'] > 0) {
                                            if ($datosAlquiler['dormitorio'] == 1) {
                                        ?>
                                                <i class="fa fa-home" aria-hidden="true" style="color: #00FFE2;"></i> <?php echo $datosAlquiler['dormitorio'] ?> dormitorio<br>
                                            <?php
                                            } else {
                                            ?>
                                                <i class="fa fa-home" aria-hidden="true" style="color: #00FFE2;"></i> <?php echo $datosAlquiler['dormitorio'] ?> dormitorios<br>
                                        <?php
                                            }
                                        }
                                        ?>
                                        <?php
                                        if ($datosAlquiler['cocina'] > 0) {
                                            if ($datosAlquiler['cocina'] == 1) {
                                        ?>
                                                <i class="fa fa-cutlery" aria-hidden="true"></i> <?php echo $datosAlquiler['cocina'] ?> cocina <br>
                                            <?php
                                            } else {
                                            ?>
                                                <i class="fa fa-cutlery" aria-hidden="true"></i> <?php echo $datosAlquiler['cocina'] ?> cocinas <br>
                                        <?php
                                            }
                                        }
                                        ?>
                                        <?php
                                        if ($datosAlquiler['7'] > 0) {
                                            if ($datosAlquiler['7'] == 1) {
                                        ?>
                                                <i class="fa fa-bath" aria-hidden="true" style="color: ;"></i> <?php echo $datosAlquiler['7'] ?> baño<br>
                                            <?php
                                            } else {
                                            ?>
                                                <i class="fa fa-bath" aria-hidden="true" style="color: ;"></i> <?php echo $datosAlquiler['7'] ?> baños<br>
                                        <?php
                                            }
                                        }
                                        ?>
                                        <?php
                                        if ($datosAlquiler['baulera'] > 0) {
                                            if ($datosAlquiler['baulera'] == 1) {
                                        ?>
                                                <i class="fa fa-archive" aria-hidden="true" style="color:#FF9200;"></i> <?php echo $datosAlquiler['baulera'] ?> baulera<br>
                                            <?php
                                            } else {
                                            ?>
                                                <i class="fa fa-archive" aria-hidden="true" style="color:#FF9200;"></i> <?php echo $datosAlquiler['baulera'] ?> bauleras<br>
                                        <?php
                                            }
                                        }
                                        ?>
                                        <?php
                                        if ($datosAlquiler['lavanderia'] > 0) {
                                            if ($datosAlquiler['lavanderia'] == 1) {
                                        ?>
                                                <i class="fa fa-shopping-basket" aria-hidden="true"></i> <?php echo $datosAlquiler['lavanderia'] ?> Lavanderia <br>
                                            <?php
                                            } else {
                                            ?>
                                                <i class="fa fa-shopping-basket" aria-hidden="true"></i> <?php echo $datosAlquiler['lavanderia'] ?> Lavanderias <br>
                                        <?php
                                            }
                                        }
                                        ?>
                                        <?php
                                        if ($datosAlquiler['garaje'] > 0) {
                                            if ($datosAlquiler['garaje'] == 1) {
                                        ?>
                                                <i class="fa fa-car" aria-hidden="true" style="color: blue;"></i> <?php echo $datosAlquiler['garaje'] ?> parqueo <br>
                                            <?php
                                            } else {
                                            ?>
                                                <i class="fa fa-car" aria-hidden="true" style="color: blue;"></i> <?php echo $datosAlquiler['garaje'] ?> parqueo <br>
                                        <?php
                                            }
                                        }
                                        ?>
                                        <i class="fa fa-bookmark" aria-hidden="true"></i> <?php echo $datosAlquiler['garantia'] ?>
                                    </h4>
                                    <h3><i class="fa fa-money" aria-hidden="true" style="color: #3FFF00 ;"></i><b> <?php echo number_format($datosAlquiler['precio']) . " " . $datosAlquiler['cambio']; ?> </b></h3>
                                    </p>
                                    <?php
                                    if($_SESSION['nivel'] == 1 ){
                                    ?>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <a href="eliminarInmueble.php?id_inmueble=<?= $datosAlquiler['id_venta'] ?>&inmueble=<?= $datosAlquiler['inmueble'] ?>&tipo=<?= $datosAlquiler['tipo'] ?>" class="btn btn-danger btn-block"><i class="fa fa-trash" aria-hidden="true"></i> Eliminar</a>
                                            </div>
                                            <div class="col-md-6">
                                                <a class="btn btn-warning btn-block" href="editarInmueble.php?id_inmueble=<?= $datosAlquiler['id_venta'] ?>&inmueble=<?= $datosAlquiler['inmueble'] ?>&tipo=<?= $datosAlquiler['tipo'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</a>
                                            </div>
                                            <!-- <div class="col-md-3" style="float: none;">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <a href="eliminarInmueble.php?id_inmueble=<?= $datosAlquiler['id_venta'] ?>&inmueble=<?= $datosAlquiler['inmueble'] ?>&tipo=<?= $datosAlquiler['tipo'] ?>" class="btn btn-danger btn-block"><i class="fa fa-trash" aria-hidden="true"></i> Eliminar</a>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <a class="btn btn-warning btn-block" href="editarInmueble.php?id_inmueble=<?= $datosAlquiler['id_venta'] ?>&inmueble=<?= $datosAlquiler['inmueble'] ?>&tipo=<?= $datosAlquiler['tipo'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</a>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <a href="#" class="btn btn-success btl-lg boton1"><i class="fa fa-youtube-play" aria-hidden="true"></i>Eliminar</a>                                            
                                                    </div>
                                                    <div class="col-md-6">
                                                        <a class="boton" href="https://api.whatsapp.com/send?phone=591<?= $datosAlquiler['celular']; ?>&text=Estoy%20interesado%20en%20el%20inmueble,%20por%20favor%20podría%20ampliar%20algo%20mas%20de%20de%20informacion?">
                                                            <i class="fa fa-whatsapp" aria-hidden="true"></i> Editar
                                                        </a>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <div class="col-md-3" style="float: right;">
                                                <!-- <a href="#iner<?//=($i-1)?>"><i class="fa fa-arrow-up fa-2x" aria-hidden="true"></i></a>
                                                        <a href="#iner<?//=($i+1)?>"><i class="fa fa-arrow-down fa-2x" aria-hidden="true"></i></a> -->
                                                <!-- <a href="compartir.php?id=<?//php echo $datosAlquiler['id_alquiler'];?>"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                                        <center><a class="copi" href='javascript:getlink();'>Copiar, avisar y desaparecer</a></center> -->
                                            </div>
                                        </div>
                                        <div id="to-copy<?php echo $i ?>" class="d-none">
                                            https://www.siai.com.bo/inmobiliaria/venta/mostrar.php<?php echo "?id=" . $datosAlquiler['id_venta'] . "&" . "inmueble=" . $datosAlquiler['inmueble']; ?>
                                        </div>
                                        <center>
                                            <br>
                                            <button onClick='CopyToClipboard("to-copy<?php echo $i ?>")' class="boton2">Copiar Link del Inmueble</button>
                                            <a href="<?php echo "../" . $datosAlquiler['tipo'] . "/" . $datosAlquiler['pdf'] ?>" download="<?php echo "browsour" . $datosAlquiler['inmueble'] . $datosAlquiler['id_venta'] . ".pdf"; ?>" target="_blank">Descargar browsour</a>
                                            <?php
                                            if ($datosAlquiler['pdf'] != NULL) {
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
                                            <!-- <button class="btn btn-primary btn-block" type="button" onClick="downloadImage('<?=$datosAlquiler['id_alquiler']?>','<?=$datosAlquiler['tipo']?>')"><i class="fa fa-download"></i> Descargar Imagenes <?=$datosAlquiler['foto']?></button> -->
                                            <button class="btn btn-primary btn-block" type="button" onClick="downloadImage('<?=$datosAlquiler['id_alquiler']?>','<?=$datosAlquiler['tipo']?>')"><i class="fa fa-download"></i> Descargar Imagenes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                    $i++;
                }
            // }else{

            // }
            ?>

            <!-- <button  class="btn btn-success btn-block" onclick="model_busca()">Buscar Inmueble</button> -->
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
            <!-- END INMUEBLES EN ALQUILER -->
        </div>

        <hr>

        <div id="bloque-inmuebles-venta">

            <!-- INMUEBLES EN VENTA -->
            <?php

            $queryNewVenta = "SELECT *  FROM inmueble_venta";

            if(isset($_GET['zona'])){
                $zona = implode("','",$_GET['zona']);
                $queryNewVenta.=" WHERE zona IN('".$zona."')";
            }

            $resultadoNewVenta = mysqli_query($conexion, $queryNewVenta);

            $cantidadBusquedaNewVenta = $resultadoNewVenta->num_rows;

            if($cantidadBusquedaNewVenta > 0 ){
            ?>
            <center>
                <h3 style="color: white;">Inmuebles en Venta</h3>
            </center>
            <?php
            }

            $i = 1 ;

            while($datosVenta = mysqli_fetch_array($resultadoNewVenta)){
            ?>            
                <div class="row">
                    <div class="col-md-12" style="background-position: center;" id="iner<?= $i ?>">
                        <br>
                        <!-- <h3>
                                <?//php echo "Este es el i ".$i."<br>este es el contador ".$contador;?>
                            </h3> -->
                        <div class="row tiempo" style="border-style: inset; border-color: burlywood; margin-left: 0;margin-right: 0;">
                            <div class="col-md-8" style="margin-right: 0; margin-top: 0;margin-left: 0; padding: 0px;">
                                <div id="carouselExampleIndicatorsVenta<?php echo $i ?>" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">

                                    <?php
                                        $id = $datosVenta['id_venta'];

                                        $queryFotosVenta = "SELECT *  FROM foto_venta WHERE venta_id_venta = $id";

                                        $ressultadoFotosVenta = mysqli_query($conexion, $queryFotosVenta);

                                        $j = 1 ;

                                        while($datosFotosVenta = mysqli_fetch_array($ressultadoFotosVenta)){
                                        ?>
                                            <div class="carousel-item <?php if ($j == 1) {echo 'active';} ?>">
                                                <div style="background-color: white;" align="center" id="cajaFoto">
                                                    <!-- <img src="data:image/jpg;base64,<?php //echo base64_encode($mostrar['foto']);
                                                                                            ?>" height="100%" class="kol"/> -->
                                                    <img src="<?php echo "../venta/" . $datosFotosVenta['foto'] ?>" alt="Aqui va la imagen" height="100%" class="d-block">
                                                </div>
                                                <div class="carousel-caption" style="margin-top: 0;">
                                                    <!-- <a href="#" class="btn btn-danger"><i class="fa fa-cut"></i> mas info</a> -->...
                                                </div>
                                            </div>
                                        <?php
                                        $j++;
                                        }
                                    ?>
                                    </div>
                                    <!-- Controls -->
                                    <a class="carousel-control-prev" href="#carouselExampleIndicatorsVenta<?php echo $i ?>" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicatorsVenta<?php echo $i ?>" role="button" data-slide="next">
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
                                <h2 style="color: black;"> <?php echo $datosVenta['inmueble'] . " en " . $datosVenta['tipo']; ?></h2>
                                <p>
                                <h4>
                                    <i class="fa fa-map-marker" aria-hidden="true" style="color: #FF0000 ;"></i> En la Zona <?php echo $datosVenta['zona'] ?><br>
                                    <i class="fa fa-eraser" aria-hidden="true" style="color: ;"></i> <?php echo $datosVenta['metraje'] ?>m<sup>2</sup> <br>
                                    <!-- <i class="fa fa-home" aria-hidden="true" style="color: #00FFE2;"></i> <?php //echo $datosVenta['dormitorio']
                                                                                                                ?> dormitorios<br> -->
                                    <?php
                                    if ($datosVenta['dormitorio'] > 0) {
                                        if ($datosVenta['dormitorio'] == 1) {
                                    ?>
                                            <i class="fa fa-home" aria-hidden="true" style="color: #00FFE2;"></i> <?php echo $datosVenta['dormitorio'] ?> dormitorio<br>
                                        <?php
                                        } else {
                                        ?>
                                            <i class="fa fa-home" aria-hidden="true" style="color: #00FFE2;"></i> <?php echo $datosVenta['dormitorio'] ?> dormitorios<br>
                                    <?php
                                        }
                                    }
                                    ?>
                                    <?php
                                    if ($datosVenta['cocina'] > 0) {
                                        if ($datosVenta['cocina'] == 1) {
                                    ?>
                                            <i class="fa fa-cutlery" aria-hidden="true"></i> <?php echo $datosVenta['cocina'] ?> cocina <br>
                                        <?php
                                        } else {
                                        ?>
                                            <i class="fa fa-cutlery" aria-hidden="true"></i> <?php echo $datosVenta['cocina'] ?> cocinas <br>
                                    <?php
                                        }
                                    }
                                    ?>
                                    <?php
                                    if ($datosVenta['7'] > 0) {
                                        if ($datosVenta['7'] == 1) {
                                    ?>
                                            <i class="fa fa-bath" aria-hidden="true" style="color: ;"></i> <?php echo $datosVenta['7'] ?> baño<br>
                                        <?php
                                        } else {
                                        ?>
                                            <i class="fa fa-bath" aria-hidden="true" style="color: ;"></i> <?php echo $datosVenta['7'] ?> baños<br>
                                    <?php
                                        }
                                    }
                                    ?>
                                    <?php
                                    if ($datosVenta['baulera'] > 0) {
                                        if ($datosVenta['baulera'] == 1) {
                                    ?>
                                            <i class="fa fa-archive" aria-hidden="true" style="color:#FF9200;"></i> <?php echo $datosVenta['baulera'] ?> baulera<br>
                                        <?php
                                        } else {
                                        ?>
                                            <i class="fa fa-archive" aria-hidden="true" style="color:#FF9200;"></i> <?php echo $datosVenta['baulera'] ?> bauleras<br>
                                    <?php
                                        }
                                    }
                                    ?>
                                    <?php
                                    if ($datosVenta['lavanderia'] > 0) {
                                        if ($datosVenta['lavanderia'] == 1) {
                                    ?>
                                            <i class="fa fa-shopping-basket" aria-hidden="true"></i> <?php echo $datosVenta['lavanderia'] ?> Lavanderia <br>
                                        <?php
                                        } else {
                                        ?>
                                            <i class="fa fa-shopping-basket" aria-hidden="true"></i> <?php echo $datosVenta['lavanderia'] ?> Lavanderias <br>
                                    <?php
                                        }
                                    }
                                    ?>
                                    <?php
                                    if ($datosVenta['garaje'] > 0) {
                                        if ($datosVenta['garaje'] == 1) {
                                    ?>
                                            <i class="fa fa-car" aria-hidden="true" style="color: blue;"></i> <?php echo $datosVenta['garaje'] ?> parqueo <br>
                                        <?php
                                        } else {
                                        ?>
                                            <i class="fa fa-car" aria-hidden="true" style="color: blue;"></i> <?php echo $datosVenta['garaje'] ?> parqueo <br>
                                    <?php
                                        }
                                    }
                                    ?>
                                    <i class="fa fa-bookmark" aria-hidden="true"></i> <?php echo $datosVenta['garantia'] ?>
                                </h4>
                                <h3><i class="fa fa-money" aria-hidden="true" style="color: #3FFF00 ;"></i><b> <?php echo number_format($datosVenta['precio']) . " " . $datosVenta['cambio']; ?> </b></h3>
                                </p>
                                <?php
                                if($_SESSION['nivel'] == 1 ){
                                ?>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href="eliminarInmueble.php?id_inmueble=<?= $datosVenta['id_venta'] ?>&inmueble=<?= $datosVenta['inmueble'] ?>&tipo=<?= $datosVenta['tipo'] ?>" class="btn btn-danger btn-block"><i class="fa fa-trash" aria-hidden="true"></i> Eliminar</a>
                                        </div>
                                        <div class="col-md-6">
                                            <a class="btn btn-warning btn-block" href="editarInmueble.php?id_inmueble=<?= $datosVenta['id_venta'] ?>&inmueble=<?= $datosVenta['inmueble'] ?>&tipo=<?= $datosVenta['tipo'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</a>
                                        </div>
                                        <!-- <div class="col-md-3" style="float: none;">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <a href="eliminarInmueble.php?id_inmueble=<?= $datosVenta['id_venta'] ?>&inmueble=<?= $datosVenta['inmueble'] ?>&tipo=<?= $datosVenta['tipo'] ?>" class="btn btn-danger btn-block"><i class="fa fa-trash" aria-hidden="true"></i> Eliminar</a>
                                                </div>
                                                <div class="col-md-6">
                                                    <a class="btn btn-warning btn-block" href="editarInmueble.php?id_inmueble=<?= $datosVenta['id_venta'] ?>&inmueble=<?= $datosVenta['inmueble'] ?>&tipo=<?= $datosVenta['tipo'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</a>
                                                </div>
                                                <div class="col-md-6">
                                                    <a href="#" class="btn btn-success btl-lg boton1"><i class="fa fa-youtube-play" aria-hidden="true"></i>Eliminar</a>                                            
                                                </div>
                                                <div class="col-md-6">
                                                    <a class="boton" href="https://api.whatsapp.com/send?phone=591<?= $datosVenta['celular']; ?>&text=Estoy%20interesado%20en%20el%20inmueble,%20por%20favor%20podría%20ampliar%20algo%20mas%20de%20de%20informacion?">
                                                        <i class="fa fa-whatsapp" aria-hidden="true"></i> Editar
                                                    </a>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="col-md-3" style="float: right;">
                                            <!-- <a href="#iner<?//=($i-1)?>"><i class="fa fa-arrow-up fa-2x" aria-hidden="true"></i></a>
                                                    <a href="#iner<?//=($i+1)?>"><i class="fa fa-arrow-down fa-2x" aria-hidden="true"></i></a> -->
                                            <!-- <a href="compartir.php?id=<?//php echo $datosVenta['id_alquiler'];?>"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                                    <center><a class="copi" href='javascript:getlink();'>Copiar, avisar y desaparecer</a></center> -->
                                        </div>
                                    </div>
                                    <div id="to-copy<?php echo $i ?>" class="d-none">
                                        https://www.siai.com.bo/inmobiliaria/venta/mostrar.php<?php echo "?id=" . $datosVenta['id_venta'] . "&" . "inmueble=" . $datosVenta['inmueble']; ?>
                                    </div>
                                    <center>
                                        <br>
                                        <button onClick='CopyToClipboard("to-copy<?php echo $i ?>")' class="boton2">Copiar Link del Inmueble</button>
                                        <a href="<?php echo "../" . $datosVenta['tipo'] . "/" . $datosVenta['pdf'] ?>" download="<?php echo "browsour" . $datosVenta['inmueble'] . $datosVenta['id_venta'] . ".pdf"; ?>" target="_blank">Descargar browsour</a>
                                        <?php
                                        if ($datosVenta['pdf'] != NULL) {
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
                                        <button class="btn btn-primary btn-block" type="button" onClick="downloadImage('<?=$datosVenta['id_venta']?>','<?=$datosVenta['tipo']?>')"><i class="fa fa-download"></i> Descargar Imagenes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                $i++;
            }
            ?>
            <!-- END INMUEBLES EN VENTA -->

        </div>

        <!-- INMUEBLES EN ANTICRETICO -->

        <div id="bloque-inmuebles-anticretico">
            <?php

            $queryNewAnticretico = "SELECT *  FROM inmueble_anticretico";

            if(isset($_GET['zona'])){
                $zona = implode("','",$_GET['zona']);
                $queryNewAnticretico.=" WHERE zona IN('".$zona."')";
            }

            $resultadoNewAnticretico = mysqli_query($conexion, $queryNewAnticretico);

            $cantidadBusquedaNewAnticretico = $resultadoNewAnticretico->num_rows;

            if($cantidadBusquedaNewAnticretico > 0 ){
            ?>
            <center>
                <h3 style="color: white;">Inmuebles en Anticretico</h3>
            </center>
            <?php
            }

            $i = 1 ;

            while($datosAnticretico = mysqli_fetch_array($resultadoNewAnticretico)){
            ?> 
            <div class="row">
                <div class="col-md-12" style="background-position: center;" id="iner<?= $i ?>">
                    <br>
                    <!-- <h3>
                            <?//php echo "Este es el i ".$i."<br>este es el contador ".$contador;?>
                        </h3> -->
                    <div class="row tiempo" style="border-style: inset; border-color: burlywood; margin-left: 0;margin-right: 0;">
                        <div class="col-md-8" style="margin-right: 0; margin-top: 0;margin-left: 0; padding: 0px;">
                            <div id="carouselExampleIndicatorsAnticretico<?php echo $i ?>" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">

                                    <?php
                                        $id = $datosAnticretico['id_anticretico'];

                                        $queryFotosAnticretico = "SELECT *  FROM foto_anticretico WHERE anticretico_id_anticretico = $id";

                                        $ressultadoFotosAnticretico = mysqli_query($conexion, $queryFotosAnticretico);

                                        $j = 1 ;

                                        while($datosFotosAnticretico = mysqli_fetch_array($ressultadoFotosAnticretico)){
                                        ?>
                                            <div class="carousel-item <?php if ($j == 1) {echo 'active';} ?>">
                                                <div style="background-color: white;" align="center" id="cajaFoto">
                                                    <!-- <img src="data:image/jpg;base64,<?php //echo base64_encode($mostrar['foto']);
                                                                                            ?>" height="100%" class="kol"/> -->
                                                    <img src="<?php echo "../anticretico/" . $datosFotosAnticretico['foto'] ?>" alt="Aqui va la imagen" height="100%" class="d-block">
                                                </div>
                                                <div class="carousel-caption" style="margin-top: 0;">
                                                    <!-- <a href="#" class="btn btn-danger"><i class="fa fa-cut"></i> mas info</a> -->...
                                                </div>
                                            </div>
                                        <?php
                                        $j++;
                                        }
                                    ?>
                                </div>
                                <!-- Controls -->
                                <a class="carousel-control-prev" href="#carouselExampleIndicatorsAnticretico<?php echo $i ?>" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicatorsAnticretico<?php echo $i ?>" role="button" data-slide="next">
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
                            <h2 style="color: black;"> <?php echo $datosAnticretico['inmueble'] . " en " . $datosAnticretico['tipo']; ?></h2>
                            <p>
                            <h4>
                                <i class="fa fa-map-marker" aria-hidden="true" style="color: #FF0000 ;"></i> En la Zona <?php echo $datosAnticretico['zona'] ?><br>
                                <i class="fa fa-eraser" aria-hidden="true" style="color: ;"></i> <?php echo $datosAnticretico['metraje'] ?>m<sup>2</sup> <br>
                                <!-- <i class="fa fa-home" aria-hidden="true" style="color: #00FFE2;"></i> <?php //echo $datosAnticretico['dormitorio']
                                                                                                            ?> dormitorios<br> -->
                                <?php
                                if ($datosAnticretico['dormitorio'] > 0) {
                                    if ($datosAnticretico['dormitorio'] == 1) {
                                ?>
                                        <i class="fa fa-home" aria-hidden="true" style="color: #00FFE2;"></i> <?php echo $datosAnticretico['dormitorio'] ?> dormitorio<br>
                                    <?php
                                    } else {
                                    ?>
                                        <i class="fa fa-home" aria-hidden="true" style="color: #00FFE2;"></i> <?php echo $datosAnticretico['dormitorio'] ?> dormitorios<br>
                                <?php
                                    }
                                }
                                ?>
                                <?php
                                if ($datosAnticretico['cocina'] > 0) {
                                    if ($datosAnticretico['cocina'] == 1) {
                                ?>
                                        <i class="fa fa-cutlery" aria-hidden="true"></i> <?php echo $datosAnticretico['cocina'] ?> cocina <br>
                                    <?php
                                    } else {
                                    ?>
                                        <i class="fa fa-cutlery" aria-hidden="true"></i> <?php echo $datosAnticretico['cocina'] ?> cocinas <br>
                                <?php
                                    }
                                }
                                ?>
                                <?php
                                if ($datosAnticretico['7'] > 0) {
                                    if ($datosAnticretico['7'] == 1) {
                                ?>
                                        <i class="fa fa-bath" aria-hidden="true" style="color: ;"></i> <?php echo $datosAnticretico['7'] ?> baño<br>
                                    <?php
                                    } else {
                                    ?>
                                        <i class="fa fa-bath" aria-hidden="true" style="color: ;"></i> <?php echo $datosAnticretico['7'] ?> baños<br>
                                <?php
                                    }
                                }
                                ?>
                                <?php
                                if ($datosAnticretico['baulera'] > 0) {
                                    if ($datosAnticretico['baulera'] == 1) {
                                ?>
                                        <i class="fa fa-archive" aria-hidden="true" style="color:#FF9200;"></i> <?php echo $datosAnticretico['baulera'] ?> baulera<br>
                                    <?php
                                    } else {
                                    ?>
                                        <i class="fa fa-archive" aria-hidden="true" style="color:#FF9200;"></i> <?php echo $datosAnticretico['baulera'] ?> bauleras<br>
                                <?php
                                    }
                                }
                                ?>
                                <?php
                                if ($datosAnticretico['lavanderia'] > 0) {
                                    if ($datosAnticretico['lavanderia'] == 1) {
                                ?>
                                        <i class="fa fa-shopping-basket" aria-hidden="true"></i> <?php echo $datosAnticretico['lavanderia'] ?> Lavanderia <br>
                                    <?php
                                    } else {
                                    ?>
                                        <i class="fa fa-shopping-basket" aria-hidden="true"></i> <?php echo $datosAnticretico['lavanderia'] ?> Lavanderias <br>
                                <?php
                                    }
                                }
                                ?>
                                <?php
                                if ($datosAnticretico['garaje'] > 0) {
                                    if ($datosAnticretico['garaje'] == 1) {
                                ?>
                                        <i class="fa fa-car" aria-hidden="true" style="color: blue;"></i> <?php echo $datosAnticretico['garaje'] ?> parqueo <br>
                                    <?php
                                    } else {
                                    ?>
                                        <i class="fa fa-car" aria-hidden="true" style="color: blue;"></i> <?php echo $datosAnticretico['garaje'] ?> parqueo <br>
                                <?php
                                    }
                                }
                                ?>
                                <i class="fa fa-bookmark" aria-hidden="true"></i> <?php echo $datosAnticretico['garantia'] ?>
                            </h4>
                            <h3><i class="fa fa-money" aria-hidden="true" style="color: #3FFF00 ;"></i><b> <?php echo number_format($datosAnticretico['precio']) . " " . $datosAnticretico['cambio']; ?> </b></h3>
                            </p>
                            <?php
                            if($_SESSION['nivel'] == 1){
                            ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="eliminarInmueble.php?id_inmueble=<?= $datosAnticretico['id_anticretico'] ?>&inmueble=<?= $datosAnticretico['inmueble'] ?>&tipo=<?= $datosAnticretico['tipo'] ?>" class="btn btn-danger btn-block"><i class="fa fa-trash" aria-hidden="true"></i> Eliminar</a>
                                </div>
                                <div class="col-md-6">
                                    <a class="btn btn-warning btn-block" href="editarInmueble.php?id_inmueble=<?= $datosAnticretico['id_anticretico'] ?>&inmueble=<?= $datosAnticretico['inmueble'] ?>&tipo=<?= $datosAnticretico['tipo'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</a>
                                </div>
                            </div>
                            <div id="to-copy<?php echo $i ?>" class="d-none">
                                https://www.siai.com.bo/inmobiliaria/anticretico/mostrar.php<?php echo "?id=" . $datosAnticretico['id_anticretico'] . "&" . "inmueble=" . $datosAnticretico['inmueble']; ?>
                            </div>
                            <center>
                            <br>
                            <button onClick='CopyToClipboard("to-copy<?php echo $i ?>")' class="boton2">Copiar Link del Inmueble</button>
                            <a href="<?php echo "../" . $datosAnticretico['tipo'] . "/" . $datosAnticretico['pdf'] ?>" download="<?php echo "browsour" . $datosAnticretico['inmueble'] . $datosAnticretico['id_anticretico'] . ".pdf"; ?>" target="_blank">Descargar browsour</a>
                            <?php
                            if ($datosAnticretico['pdf'] != NULL) {
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
                                    <button class="btn btn-primary btn-block" type="button" onClick="downloadImage('<?=$datosAnticretico['id_anticretico']?>','<?=$datosAnticretico['tipo']?>')"><i class="fa fa-download"></i> Descargar Imagenes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                $i++;
            }
            ?>
        </div>
        
        <!-- END INMUEBLES EN ANTICRETICO -->
    </div>

</body>
<!-- Bootstrap core JavaScript-->
<script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../js/demo/chart-area-demo.js"></script>
  <script src="../js/demo/chart-pie-demo.js"></script>
<?php
// include("../footer.php");
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

    function buscarInmuble(){
        $('#modal-busca-inmueble').modal('show');
    }

    // function buscar(){
    //     let valoresCheck = [];

    //     $("input[type=checkbox]:checked").each(function(){
    //         valoresCheck.push(this.value);
    //     });

    //     console.log(JSON.parse(JSON.stringify(valoresCheck)));
    //     console.log($('#formulario-busca-zona').serialize());
    //     // $("input[type=checkbox]:checked").each(function(){
    //     //     //cada elemento seleccionado
    //     //     alert($(this).val());
    //     // });
    //     // var zonas = $('.zonas').val();
    //     // var checkboxes = document.getElementsByClassName("zonas").checkbox;

    //     // console.log(checkboxes);

    //     // var cont = 0; 

    //     // for (var x=0; x < checkboxes.length; x++) {
    //     //     if (checkboxes[x].checked) {
    //     //         cont = cont + 1;
    //     //         console.log(checkboxes[x]);
    //     //     }
    //     // }

    //     // console.log(zonas);
    // }
</script>