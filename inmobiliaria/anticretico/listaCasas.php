<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SIAI</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../../scss/main.css">
        <!-- <link rel="stylesheet" href="../../scss/skin.css"> -->
        <link rel="icon" href="../../img/inicio/icono.png" type="image/png"/>
        <!-- <link rel="stylesheet" href="../../css/estilos.css"> -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://netdna.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="../../script/index.js"></script>
    </head>
    <style>
        body{
            width: 100%;
            height: 100vh;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-image: url(../../img/inicio/07.jpg);
        }
        #des {
        width: 150px;
        border-radius: 25px;
        float: right;
        }
        #des a {
        background-color:ivory;
        color: black;
        display: block;
        padding: 12px;
        text-decoration: none;
        }

        #des a:hover {
        background-color:lightblue;
        }

        #des1 {
        width: 150px;
        border-radius: 25px;
        float: right;
        }
        #des1 a {
        background-color:ivory;
        color: black;
        display: block;
        padding: 12px;
        text-decoration: none;
        }

        #des1 a:hover {
        background-color:lightblue;
        }
        
        .logo img{
            box-shadow: 0 0 30px white; 
            width: 130px;
            border-radius: 18px;
            padding: 5px;
            background-color: white;
            opacity: 0.8;
            float: right;
        }
        .menu{
            float: left;
        }
        hr{
            border: 0;
            background-color: blue;
            height: 1px;
        }
        h4{
            color: black;
            text-shadow: 0 0 30px #fff;
        }
        i{
            color: black;
        }
        .boton{
            /* whatsApp */
            background: #2CFF00 ;
            border-color: #000000 ;
            border-bottom: 5px solid black ;
            border-radius: 50px;
            box-shadow: 3px 3px 3px #999 ;
            color: #fff;
            /* cursor: pointer; */
            /* display: block;   */
            font-family: 'Raleway', Arial, Helvetica;
            font-size: 20px;
            position: absolute;
            height: 30px;
            margin-top: 10px;
            margin-left: -50px;
            /* margin: 10px auto; */
            /* margin-left: 160px ; */
            /* margin-top: 35px; */
            /* padding: 0em; */
            padding: 0;
            transition: all 0.2s ease 0s;
            width: 130px;
        }
        .boton1{
            /* you tube */
            background: #FF0000 ;
            border-color: #000000 ;
            border-bottom: 5px solid black ;
            border-radius: 50px;
            box-shadow: 3px 3px 3px #999 ;
            color: #fff;
            cursor: pointer;
            display: block;  
            font-family: 'Raleway', Arial, Helvetica;
            font-size: 20px;
            height: 30px;
            margin: 10px auto;
            margin-left: 160px ;
            padding: 0;
            margin-top: 10px;
            text-align: center;
            transition: all 0.2s ease 0s;
            width: 130px;
        }
        .boton2{
            /* compartir link */
            background:  #66EDF5 ;
            border-color: #000000 ;
            border-bottom: 5px solid black ;
            border-radius: 50px;
            box-shadow: 3px 3px 3px #999 ;
            color: #fff;
            cursor: pointer;
            display: block;  
            font-family: 'Raleway', Arial, Helvetica;
            font-size: 20px;
            position: absolute;
            height: 30px;
            margin: 10px auto;
            padding: 0em;
            transition: all 0.2s ease 0s;
            width: 130px;
        }
        .boton3{
            /* descargar */
            background: #CA5AF1 ;
            border-color: #000000 ;
            border-bottom: 5px solid black ;
            border-radius: 50px;
            box-shadow: 3px 3px 3px #999 ;
            color: #fff;
            cursor: pointer;
            display: block;  
            font-family: 'Raleway', Arial, Helvetica;
            font-size: 20px;
            height: 30px;
            /* margin: 10px auto; */
            margin-left: 160px ;
            padding: 0;
            margin-top: 10px;
            /* text-align: center; */
            transition: all 0.2s ease 0s;
            width: 130px;
            text-align: center;
        }
        .copi {
            display: block;
            width: 120px;
            margin: 0 auto;
            padding: 10px;
            color: #ffffff;
            background: #990000;
            text-align: center;
        }
        .open{
            background-color: #00FFEA;
            color: black;
            box-shadow: yellow;
        }
        body #panel #panel-admin {
            top: -150px;
            float: left;
            width: 100%;
            background: #f9f9f9;
            color: #777777;
            z-index: 9999;
            position: relative;
            padding: 15px;
            border: none;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            max-height: 100%;
            -moz-box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            -webkit-box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        }
        body #panel .open1 {
            display: block;
            width: 42px;
            border-radius: 0 3px 3px 0;
            height: 42px;
            float: right;
            font-size: 22px;
            top: -40px;
            right: -22px;
            z-index: 1000;
            background: #f9f9f9;
            position: absolute;

        }        
        body #panel .open {
            display: block;
            width: 42px;
            border-radius: 0 3px 3px 0;
            height: 42px;
            float: right;
            font-size: 22px;
            top: -80px;
            right: -22px;
            z-index: 1000;
            position: absolute;
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
            .boton{
                /* whatsApp */
                background: #2CFF00 ;
                border-color: #000000 ;
                border-bottom: 5px solid black ;
                border-radius: 50px;
                box-shadow: 3px 3px 3px #999 ;
                color: #fff;
                cursor: pointer;
                display: block;  
                font-family: 'Raleway', Arial, Helvetica;
                font-size: 20px;
                position: absolute;
                height: 30px;
                margin: 10px auto;
                /* margin-left: 160px ; */
                /* margin-top: 35px; */
                padding: 0em;
                /* padding: 0; */
                transition: all 0.2s ease 0s;
                width: 130px;
            }
            .boton1{
                /* you tube */
                background: #FF0000 ;
                border-color: #000000 ;
                border-bottom: 5px solid black ;
                border-radius: 50px;
                box-shadow: 3px 3px 3px #999 ;
                color: #fff;
                cursor: pointer;
                display: block;  
                font-family: 'Raleway', Arial, Helvetica;
                font-size: 20px;
                height: 30px;
                /* margin: 10px auto; */
                margin-left: 160px ;
                padding: 0;
                margin-top: 10px;
                /* text-align: center; */
                transition: all 0.2s ease 0s;
                width: 130px;
            }
        }
    </style>
      <div id="panel">
            <div id="panel-admin">
                <form action="" method="GET" id="formulario" >
                    <div class="panel-admin-box filtro_busqueda">
                        <h6 class="text-center">Filtro de busqueda</h6>
                        <!-- filtro de busqueda -->
                            <div class="row" >
                                <div class="col-md-12">
                                    <h4>Zona</h4>
                                    <?php
                                        include("../coneccion.php");
                                        $consulta = "SELECT DISTINCT zona 
                                                    FROM inmueble_anticretico
                                                    WHERE inmueble = 'Casa'";
                                        $resultado = mysqli_query($conexion,$consulta);
                                        $x = 1;
                                        while($mostrar = mysqli_fetch_array($resultado)){
                                    ?>
                                        <label for="<?=$x?>" class="form-control"><?=$mostrar['zona']?>  
                                            <input type="checkbox" name="zona[]" value="<?=$mostrar['zona']?>" id="<?=$x?>">
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
                            <button type="submit" name="buton" id="buton" class="btn btn-info btn-block" style="float: none;"> Buscar <i class="fa fa-search" aria-hidden="true"></i></button>
                        </center>
                    </div>
                </form> 
            </div>
            <div class="row">
                <div class="col-md-6" style="margin-right:0px;">
                    <button class="open"><i class="fa fa-filter" aria-hidden="true"></i></button>
                </div>
                <div class="col-md-6">
                    <button class="open1"><a href="index.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a></button>
                </div>
            </div>
        </div>
    <body id="">
        <div class="container">
            <div class="row" style="text-align: center;">
                    <div class="col-md-6 logo">
                        <br>
                        <span class="float-left">
                            <a href="../"><img class="" src="../../img/inicio/logo.png" width="350px" alt="" ></a>
                        </span>
                    </div>
                    <div class="col-md-6">
                        <br>
                        <div id="navegacion" class="menu">
                            <a href="#" class="btn bg-info">Menu <i class="fa fa-align-justify"></i></a>
                        </div>
                        <div id="des">
                            <ul>
                                <li><a href="../../">Inicio</a></li>
                                <li><a href="#">Nosotros</a></li>
                                <li><a href="#" data-toggle="modal" data-target="#exampleModal">Ingresar</a></li>
                            </ul>
                        </div>
                        <br>
                        <br>
                        <!-- <div id="" class="menu">
                            <a href="filtroOficinas.php" class="btn bg-info">Filtro <i class="fa fa-filter" aria-hidden="true"></i></a>
                        </div> -->
                    </div>
                        <!-- End Button trigger modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <form method="POST" action="../control.php">
                                <div class="form-group">
                                    <label for="" class="col-form-label">Usuario:</label>
                                    <input type="text" class="form-control" id="" name="usuario" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-form-label">Contraseña:</label>
                                    <input type="password" class="form-control" id="" name="password" required>
                                </div>
                                <?php
                                if (!empty($_GET['haber'])) {
                                ?>
                                <div class="text-center form-group" style="border-radius: 10px;background-color: #F0342B; color: white;">
                                    <?php echo $_GET["haber"];?>
                                </div>
                                <?php
                                    }
                                ?>
                                <button type="submit" class="btn btn-success">Login</button>
                            </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            </div>
                            </div>
                        </div>
                    </div>
                        <!-- end modal -->
                </div>
            <hr>
            <!-- carusel -->
            <?php
            if(isset($_GET['buton'])){
                if(!empty($_GET['zona']) || !(empty($_GET['desde']) && empty($_GET['hasta'])) || !(empty($_GET['minimo']) && empty($_GET['maximo']))){
                    $query2 = "SELECT *
                    FROM inmueble_anticretico iv INNER JOIN foto_anticretico ft
                        ON (iv.id_anticretico = ft.anticretico_id_anticretico) INNER JOIN agente_venta av
                            ON iv.agente_venta_id_agente_venta = av.id_agente_venta
                                WHERE "; 
                    $query = "SELECT * 
                            FROM inmueble_anticretico
                            WHERE ";
                    if(isset($_GET['zona'])){
                        $zona = implode("','",$_GET['zona']);
                        $query .=" zona IN('".$zona."') ";
                        $query2 .=" zona IN('".$zona."') ";
                    }
                    // if(isset($_GET['zona'])){
                    //     $zona = implode("','",$_GET['zona']);
                    //     $query .=" zona IN('".$zona."') ";
                    //     $query2 .=" zona IN('".$zona."') ";
                    //     if(!empty($_GET['desde']) && !empty($_GET['hasta'])){
                    //         $query .=" AND metraje BETWEEN '".$_GET['desde']."' AND '".$_GET['hasta']."'";
                    //         $query2 .=" AND metraje BETWEEN '".$_GET['desde']."' AND '".$_GET['hasta']."'";
                    //         if(!empty($_GET['minimo']) && !empty($_GET['maximo'])){
                    //             echo "entre a la precio por V<br>";
                    //             $query .=" AND precio BETWEEN '".$_GET['minimo']."' AND '".$_GET['maximo']."'";
                    //             $query2 .=" AND precio BETWEEN '".$_GET['minimo']."' AND '".$_GET['maximo']."'";
                    //         }
                    //     }
                    //     else if(!empty($_GET['minimo']) && !empty($_GET['maximo'])){
                    //         $query .=" AND precio BETWEEN '".$_GET['minimo']."' AND '".$_GET['maximo']."'";
                    //         $query2 .=" AND precio BETWEEN '".$_GET['minimo']."' AND '".$_GET['maximo']."'";
                    //     }
                    // }
                    // else if(!empty($_GET['desde']) && !empty($_GET['hasta'])){
                    //     $query .="  metraje BETWEEN '".$_GET['desde']."' AND '".$_GET['hasta']."'";
                    //     $query2 .="  metraje BETWEEN '".$_GET['desde']."' AND '".$_GET['hasta']."'";
                    //     if(!empty($_GET['minimo']) && !empty($_GET['maximo'])){
                    //         $query .=" AND precio BETWEEN '".$_GET['minimo']."' AND '".$_GET['maximo']."'";
                    //         $query2 .=" AND precio BETWEEN '".$_GET['minimo']."' AND '".$_GET['maximo']."'";
                    //     }
                    // }
                    // else if(!empty($_GET['minimo']) && !empty($_GET['maximo'])){
                    //     $query .=" precio BETWEEN '".$_GET['minimo']."' AND '".$_GET['maximo']."'";
                    //     $query2 .=" precio BETWEEN '".$_GET['minimo']."' AND '".$_GET['maximo']."'";
                    // }
                    $query.="AND inmueble = 'Casa'";
                    $query2.="AND inmueble = 'Casa'";
                    $resulBusqueda = mysqli_query($conexion,$query);
                    $numeroBusqueda = $resulBusqueda->num_rows;
                    if($numeroBusqueda != 0){
                        $i = 1;
                        $contador = 1;
                        while($i <= $numeroBusqueda){
                            $paso1 = $query2;
                            $query2 .= " AND ft.anticretico_id_anticretico = $contador";
                            $resultadoFotos = mysqli_query($conexion,$query2);
                            $numeroFotos = $resultadoFotos->num_rows;
                            $query2 = $paso1;
                            if($numeroFotos != 0){
                            ?>
                            <!-- principio -->
                            <div class="row">
                                <input type="hidden" name="valor-para-ocultar" id="valor-para-ocultar" value="1">
                                <div class="col-md-12" style="background-position: center;" id="iner<?=$i?>">
                                <br><br>
                                    <div class="row tiempo"  style="border-style: inset; border-color: burlywood; margin-left: 0;margin-right: 0;">
                                        <div class="col-md-8" style="margin-right: 0; margin-top: 0;margin-left: 0; padding: 0px;">
                                            <div id="carousel-example-generic<?php echo $i?>" class="carousel slide" data-ride="carousel" > 
                                                <div class="carousel-inner" role="listbox">
                                                    <?php
                                                    for($j=1;$j<=$numeroFotos;$j++){
                                                        $mostrar = mysqli_fetch_array($resultadoFotos);
                                                    ?>
                                                        <div class="item <?php if($j==1){echo 'active';}?>">
                                                        <div style="background-color: white;" align="center" id="cajaFoto">
                                                            <!-- <img src="data:image/jpg;base64,<?//php echo base64_encode($mostrar['foto']);?>" height="100%" class="kol"/> -->
                                                            <img src="<?php echo $mostrar['foto'];?>" height="100%" alt="">
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
                                                <a class="left carousel-control" href="#carousel-example-generic<?php echo $i?>" role="button" data-slide="prev">
                                                    <i class="fa fa-chevron-circle-left" aria-hidden="true" style="margin-top: 120px; color: #2CFF00 ;"></i>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="right carousel-control" href="#carousel-example-generic<?php echo $i?>" role="button" data-slide="next">
                                                    <i class="fa fa-chevron-circle-right" aria-hidden="true" style="margin-top: 120px; color: #2CFF00 "></i>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4" style=" background-color: white; opacity: 0.7; color: black; margin-top: 0;">
                                            <h2 style="color: black;"> <?php echo $mostrar['inmueble'];?> en Anticretico</h2>
                                            <p>
                                                <h4>
                                                <i class="fa fa-map-marker" aria-hidden="true" style="color: #FF0000 ;"></i> En la Zona <?php echo $mostrar['zona']?><br>
                                                <i class="fa fa-eraser" aria-hidden="true" style="color: ;"></i> <?php echo $mostrar['metraje']?>m<sup>2</sup> <br>
                                                <!-- <i class="fa fa-home" aria-hidden="true" style="color: #00FFE2;"></i> <?php //echo $mostrar['dormitorio']?> dormitorios<br> -->
                                                <i class="fa fa-bath" aria-hidden="true" style="color: ;"></i> <?php echo $mostrar['7']?> baños<br>
                                                <?php
                                                    if($mostrar['baulera'] != 0){
                                                ?>
                                                    <i class="fa fa-archive" aria-hidden="true" style="color:#FF9200;"></i> <?php echo $mostrar['baulera']?> bauleras<br>
                                                <?php
                                                    }
                                                ?>
                                                <?php
                                                    if($mostrar['garaje'] != 0){
                                                ?>
                                                    <i class="fa fa-car" aria-hidden="true" style="color: blue;"></i> <?php echo $mostrar['garaje']?> parqueo <br>
                                                <?php
                                                    }
                                                ?>
                                                <?php
                                                if($mostrar['cocina'] != 0){
                                                ?>
                                                <i class="fa fa-cutlery" aria-hidden="true"></i> <?php echo $mostrar['cocina']?> Cocina <br>
                                                <?php
                                                }
                                                ?>
                                                <i class="fa fa-bookmark" aria-hidden="true"></i> <?php echo $mostrar['garantia']?>
                                                </h4>
                                            </p>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h3><i class="fa fa-money" aria-hidden="true" style="color: #3FFF00 ;"></i><b> <?php echo $mostrar['precio']." ".$mostrar['cambio'];?> </b></h3>
                                                </div>
                                                <div class="col-md-3" style="float: none;">
                                                    <div class="row">
                                                        <div class="col-md-6" style="float: left;">
                                                            <a href="#" class="btn btn-success btl-lg boton1"><i class="fa fa-youtube-play" aria-hidden="true"></i> You Tube</a>                                            
                                                        </div>
                                                        <div class="col-md-6">
                                                            <a class="boton" style="position: absolute;" href="https://api.whatsapp.com/send?phone=591<?=$mostrar['celular'];?>&text=hola,%20me%20podria%20dar%20má%20informacion?">
                                                                <i class="fa fa-whatsapp" aria-hidden="true"></i> WhatsApp
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <!-- <center><a class="copi" href='javascript:getlink();'>Copiar</a></center> -->
                                            <div id="to-copy<?php echo $i?>" class="hidden">
                                                https://www.siai.com.bo/inmobiliaria/anticretico/mostrar.php<?php echo "?id=".$mostrar['id_anticretico']."&"."inmueble=".$mostrar['inmueble'];?>
                                            </div>
                                            <button onClick='CopyToClipboard("to-copy<?php echo $i?>")' class="boton2">Copiar Link del Inmueble</button>
                                            <a class="boton3" href="<?php if($mostrar['pdf'] != null){echo $mostrar['pdf'];}else{echo "#";}?>" <?php if($mostrar['pdf'] != null){echo "download=''";}?> ><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Descargar</a>
                                            <div class="col-md-3" style="float: right;">
                                                <a href="#iner<?=($i-1)?>"><i class="fa fa-arrow-up fa-2x" aria-hidden="true"></i></a>
                                                <a href="#iner<?=($i+1)?>"><i class="fa fa-arrow-down fa-2x" aria-hidden="true"></i></a>
                                            </div>
                                            <br>
                                            <div style="padding: 3px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- fin -->
                            <?php
                                $i++;
                            }
                            $contador++;
                        }

                    }else{
                ?>
                    <div style="background-color: white; border-radius: 25px; opacity: 0.8;">
                        <img src="../../img/inicio/sinAnticretico.png" width="100%" alt="">
                    </div>
                <?php
                    }
                }
                else{
                    ?>
                        <div class="alert alert-warning alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <a href="index.php" class="btn btn-warning"  >Volver</a>
                            <br>
                            <strong><i class="fa fa-frown-o fa-2x" aria-hidden="true"></i>Seleccione!</strong> un campo al menos del formulario de FILTRO.
                        </div>
                    <?php
                }
            }
            else{   
            // $conexion = new mysqli("localhost","siaicom_siaicom","Siai_Base_Datos","siaicom_registro");
            // $conexion = new mysqli("localhost","root","","mydb");
                $consulta = "SELECT * FROM inmueble_anticretico
                            WHERE inmueble = 'Casa'";
                $resultado = mysqli_query($conexion,$consulta);
                $numero = $resultado->num_rows;
                if($numero != 0){
                $i = 1 ;
                $contador =1;
                while($i <= $numero){
                    $consultaInterna = "SELECT * 
                                        FROM inmueble_anticretico iv INNER JOIN foto_anticretico ft
                                            ON (iv.id_anticretico = ft.anticretico_id_anticretico) INNER JOIN agente_venta av
                                                ON iv.agente_venta_id_agente_venta = av.id_agente_venta
                                        WHERE inmueble = 'Casa' AND anticretico_id_anticretico = $contador";
                    $resultadoInterno = mysqli_query($conexion,$consultaInterna);
                    $numeroInterno = $resultadoInterno->num_rows;
                    if($numeroInterno != 0){
            ?>  
            <div class="row">

            <input type="hidden" name="valor-para-ocultar" id="valor-para-ocultar" value="0">

                <div class="col-md-12" style="background-position: center;" id="iner<?=$i?>">
                <br><br>
                    <div class="row tiempo"  style="border-style: inset; border-color: burlywood; margin-left: 0;margin-right: 0;">
                        <div class="col-md-8" style="margin-right: 0; margin-top: 0;margin-left: 0; padding: 0px;">
                            <div id="carousel-example-generic<?php echo $i?>" class="carousel slide" data-ride="carousel" > 
                                <div class="carousel-inner" role="listbox">
                                    <?php
                                    
                                    for($j=1;$j<=$numeroInterno;$j++){
                                    $mostrar = mysqli_fetch_array($resultadoInterno);
                                    ?>
                                        <div class="item <?php if($j==1){echo 'active';}?>">
                                        <div style="background-color: white;" align="center" id="cajaFoto">
                                            <!-- <img src="data:image/jpg;base64,<?//php echo base64_encode($mostrar['foto']);?>" height="100%" class="kol"/> -->
                                            <img src="<?php echo $mostrar['foto'];?>" height="100%" alt="">
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
                                <a class="left carousel-control" href="#carousel-example-generic<?php echo $i?>" role="button" data-slide="prev">
                                    <i class="fa fa-chevron-circle-left" aria-hidden="true" style="margin-top: 120px; color: #2CFF00 ;"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic<?php echo $i?>" role="button" data-slide="next">
                                    <i class="fa fa-chevron-circle-right" aria-hidden="true" style="margin-top: 120px; color: #2CFF00 "></i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4" style=" background-color: white; opacity: 0.7; color: black; margin-top: 0;">
                            <h2 style="color: black;"> <?php echo $mostrar['inmueble'];?> en Anticretico</h2>
                            <p>
                                <h4>
                                    <i class="fa fa-map-marker" aria-hidden="true" style="color: #FF0000 ;"></i> En la Zona <?php echo $mostrar['zona']?><br>
                                    <i class="fa fa-eraser" aria-hidden="true" style="color: ;"></i> <?php echo $mostrar['metraje']?>m<sup>2</sup> <br>
                                    <?php
                                    if($mostrar['dormitorio'] > 0){
                                        if($mostrar['dormitorio'] == 1){
                                    ?>
                                        <i class="fa fa-home" aria-hidden="true" style="color: #00FFE2;"></i> <?php echo $mostrar['dormitorio']?> dormitorio<br>
                                    <?php
                                        }else{
                                    ?>
                                        <i class="fa fa-home" aria-hidden="true" style="color: #00FFE2;"></i> <?php echo $mostrar['dormitorio']?> dormitorios<br>
                                    <?php
                                        }
                                    }
                                    ?>
                                    <?php
                                    if($mostrar['cocina'] > 0){
                                        if($mostrar['cocina'] == 1){
                                    ?>
                                        <i class="fa fa-cutlery" aria-hidden="true"></i> <?php echo $mostrar['cocina']?> cocina <br>
                                    <?php
                                        }else{
                                    ?>
                                        <i class="fa fa-cutlery" aria-hidden="true"></i> <?php echo $mostrar['cocina']?> cocinas <br>
                                    <?php
                                        }
                                    }
                                    ?>
                                    <?php
                                    if($mostrar['7'] > 0){
                                        if($mostrar['7'] == 1){
                                    ?>
                                            <i class="fa fa-bath" aria-hidden="true" style="color: ;"></i> <?php echo $mostrar['7']?> baño<br>
                                    <?php
                                        }else{
                                    ?>
                                            <i class="fa fa-bath" aria-hidden="true" style="color: ;"></i> <?php echo $mostrar['7']?> baños<br>
                                    <?php
                                        }
                                    }
                                    ?>
                                    <?php
                                    if($mostrar['baulera'] > 0){
                                        if($mostrar['baulera'] == 1){
                                    ?> 
                                            <i class="fa fa-archive" aria-hidden="true" style="color:#FF9200;"></i> <?php echo $mostrar['baulera']?> baulera<br>
                                    <?php
                                        }else{
                                    ?>
                                            <i class="fa fa-archive" aria-hidden="true" style="color:#FF9200;"></i> <?php echo $mostrar['baulera']?> bauleras<br>
                                    <?php
                                        }
                                    }
                                    ?>
                                    <?php
                                    if($mostrar['lavanderia'] > 0){
                                        if($mostrar['lavanderia'] == 1){
                                    ?>
                                            <i class="fa fa-shopping-basket" aria-hidden="true"></i> <?php echo $mostrar['lavanderia']?> Lavanderia <br>
                                    <?php
                                        }else{
                                    ?> 
                                        <i class="fa fa-shopping-basket" aria-hidden="true"></i> <?php echo $mostrar['lavanderia']?> Lavanderias <br>
                                    <?php
                                        }
                                    }
                                    ?>
                                    <?php
                                        if($mostrar['garaje'] > 0){
                                            if($mostrar['garaje'] == 1){
                                    ?>
                                                <i class="fa fa-car" aria-hidden="true" style="color: blue;"></i> <?php echo $mostrar['garaje']?> parqueo <br>
                                    <?php
                                            }else{
                                    ?>
                                                <i class="fa fa-car" aria-hidden="true" style="color: blue;"></i> <?php echo $mostrar['garaje']?> parqueos <br>
                                    <?php
                                            }
                                        }
                                    ?>
                                    <i class="fa fa-bookmark" aria-hidden="true"></i> <?php echo $mostrar['garantia']?>
                                </h4>
                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <h3><i class="fa fa-money" aria-hidden="true" style="color: #3FFF00 ;"></i><b> <?php echo number_format($mostrar['precio'])." ".$mostrar['cambio'];?> </b></h3>
                                </div>
                                <div class="col-md-3" style="float: none;">
                                    <div class="row">
                                        <div class="col-md-6" style="float: left;">
                                            <a href="#" class="btn btn-success btl-lg boton1"><i class="fa fa-youtube-play" aria-hidden="true"></i> You Tube</a>                                            
                                        </div>
                                        <div class="col-md-6">
                                            <a class="boton" style="position: absolute;" href="https://api.whatsapp.com/send?phone=591<?=$mostrar['celular'];?>&text=hola,%20me%20podria%20dar%20má%20informacion?">
                                                <i class="fa fa-whatsapp" aria-hidden="true"></i> WhatsApp
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- <center><a class="copi" href='javascript:getlink();'>Copiar</a></center> -->
                            <div id="to-copy<?php echo $i?>" class="hidden">
                                https://www.siai.com.bo/inmobiliaria/anticretico/mostrar.php<?php echo "?id=".$mostrar['id_anticretico']."&"."inmueble=".$mostrar['inmueble'];?>
                            </div>
                            <button onClick='CopyToClipboard("to-copy<?php echo $i?>")' class="boton2">Copiar Link del Inmueble</button>
                            <a class="boton3" href="<?php if($mostrar['pdf'] != null){echo $mostrar['pdf'];}else{echo "#";}?>" <?php if($mostrar['pdf'] != null){echo "download=''";}?> ><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Descargar</a>
                            <div class="col-md-3" style="float: right;">
                                <a href="#iner<?=($i-1)?>"><i class="fa fa-arrow-up fa-2x" aria-hidden="true"></i></a>
                                <a href="#iner<?=($i+1)?>"><i class="fa fa-arrow-down fa-2x" aria-hidden="true"></i></a>
                            </div>
                            <br>
                            <div style="padding: 3px;"></div>
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
            }else{
            ?>
            <div style="background-color: white; border-radius: 25px; opacity: 0.8;">
                <img src="../../img/inicio/sinAnticretico.png" width="100%" alt="">
            </div>
            <?php
            }
        }
            ?>
            <!-- end carusel -->
        </div>
    </body>
</html>
<script>
    $(document).ready(function(){
        $("#des").hide();	
        $("#navegacion").click(function(){
            $("#des").slideToggle("slow");
        });
        $("#des1").hide();	
        $("#navegacion1").click(function(){
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
    if( $('#valor-para-ocultar').val() == 1){
        $("#panel-admin").animate({ width: 'toggle' }, 200);
    }
</script>
