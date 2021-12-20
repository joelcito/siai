<?php
    // $id = $_GET['id'];
    // echo $id;
?><!DOCTYPE html>
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
        .boton2{
            /* compartir link */
            background: #66EDF5  ;
            border-color: #000000 ;
            border-bottom: 5px solid black ;
            border-radius: 50px;
            box-shadow: 3px 3px 3px #999 ;
            color: #fff;
            cursor: pointer;
            display: block;  
            font-family: 'Raleway', Arial, Helvetica;
            font-size: 20px;
            height: 33px;
            /* margin: 10px auto; */
            /* margin-left: 0px ;
            padding: 0;
            margin-top: -20px; */
            /* text-align: center; */
            transition: all 0.2s ease 0s;
            width: 250px;
        }
        /* .kol{
            height: 373px;
        } */
        /* @media(min-width: 600px){
            .kol{
                height: 300px;
            }
        } */
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
        }
    </style>
      <div id="panel">
            <!-- <div id="panel-admin">
                <div class="panel-admin-box">
                    <h6 class="text-center">Filtro de busqueda</h6>
                    <form action="" method="GET" id="formulario" >
                        <div class="row" >
                            <div class="col-md-4">
                                <h4>Zona</h4>
                                <?php
                                    $idimueble = $_GET['id'];
                                    $inmueble = $_GET['inmueble'];
                                    echo "<h1>".$idimueble."<br>".$inmueble."</h1>";
                                    include("../coneccion.php");
                                    $consulta = "SELECT DISTINCT zona 
                                                FROM inmueble_alquiler
                                                WHERE inmueble = '$inmueble'";
                                    $resultado = mysqli_query($conexion,$consulta);
                                    while($mostrar = mysqli_fetch_array($resultado)){
                                ?>
                                    <label for="z" class="form-control"><?=$mostrar['zona']?>  <input type="checkbox" name="zona[]" value="<?=$mostrar['zona']?>" id=""></label>
                                <?php
                                    }
                                ?>
                            </div>
                            <div class="col-md-4">
                                <h4>Metraje</h4>
                                <label for="">Desde</label>
                                <input type="number" class="form-control" name="desde" required>                   
                                <label for="">Hasta</label>
                                <input type="number" class="form-control" name="hasta" required>
                            </div> 
                            <div class="col-md-4">
                                <h4>Precio</h4>
                                <label for="">Minimo</label>
                                <input type="number" class="form-control" name="minimo">
                                <label for="">Maximo</label>
                                <input type="number" class="form-control" name="maximo">
                            </div>
                        </div>
                        <br>
                        <center>
                            <button type="submit" name="buton" id="buton" class="btn btn-info" style="float: none;"> Buscar <i class="fa fa-search" aria-hidden="true"></i></button>
                        </center>
                    </form> 
                </div>
            </div> -->
            <div class="row">
                <div class="col-md-6" style="margin-right:0px;">
                    <!-- <button class="open"><i class="fa fa-filter" aria-hidden="true"></i></button> -->
                </div>
                <div class="col-md-6">
                    <button class="open1"><a href="<?php if($inmueble == 'Oficina'){echo "listaOficinas.php";}else if($inmueble == 'Departamento'){echo "listaDepartamentos.php";}else if($inmueble == 'Casa'){echo "listaCasas.php";}else if($inmueble == 'Terreno'){echo "listaTerrenos.php";}else{echo "listaLocalComerciales.php";}?>"><i class="fa fa-arrow-left" aria-hidden="true"></i></a></button>
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
                $consulta = "SELECT * FROM inmueble_venta
                            WHERE inmueble = '$inmueble'";
                $resultado = mysqli_query($conexion,$consulta);
                $numero = $resultado->num_rows;
                if($numero != 0){
                $i = 1 ;
                $contador =1;
                // while($i <= $numero){
                    $consultaInterna = "SELECT * 
                                        FROM inmueble_venta iv INNER JOIN foto_venta ft
                                            ON (iv.id_venta = ft.venta_id_venta) INNER JOIN agente_venta av
                                                ON iv.agente_venta_id_agente_venta = av.id_agente_venta
                                        WHERE inmueble = '$inmueble' AND venta_id_venta = $idimueble";
                    $resultadoInterno = mysqli_query($conexion,$consultaInterna);
                    $numeroInterno = $resultadoInterno->num_rows;
                    if($numeroInterno != 0){
            ?>  
            <div class="row">
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
                                            <!-- <img src="data:image/jpg;base64,<?php //echo base64_encode($mostrar['foto']);?>" height="100%" class="kol"/> -->
                                            <img src="<?php echo $mostrar['foto']?>" alt="Aqui va la imagen" height="100%" class="kol">
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
                        <div class="col-md-4 kol" style=" background-color: white; opacity: 0.7; color: black; margin-top: 0;">
                            <h2 style="color: black;"> <?php echo $mostrar['inmueble'];?> en Venta</h2>
                            <p>
                                <h4>
                                    <i class="fa fa-map-marker" aria-hidden="true" style="color: #FF0000 ;"></i> En la Zona <?php echo $mostrar['zona']?><br>
                                    <i class="fa fa-eraser" aria-hidden="true" style="color: ;"></i> <?php echo $mostrar['metraje']?>m<sup>2</sup> <br>
                                    <!-- <i class="fa fa-home" aria-hidden="true" style="color: #00FFE2;"></i> <?php //echo $mostrar['dormitorio']?> dormitorios<br> -->
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
                                            <a class="boton" style="position: absolute;" href="https://api.whatsapp.com/send?phone=591<?=$mostrar['celular'];?>&text=Estoy%20interesado%20en%20el%20inmueble,%20por%20favor%20podría%20ampliar%20algo%20mas%20de%20de%20informacion?">
                                                <i class="fa fa-whatsapp" aria-hidden="true"></i> WhatsApp
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3" style="float: right;">
                                    <!-- <a href="#iner<?=($i-1)?>"><i class="fa fa-arrow-up fa-2x" aria-hidden="true"></i></a>
                                    <a href="#iner<?=($i+1)?>"><i class="fa fa-arrow-down fa-2x" aria-hidden="true"></i></a> -->
                                    <!-- <a href="compartir.php?id=<?php echo $mostrar['id_alquiler'];?>"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                    <center><a class="copi" href='javascript:getlink();'>Copiar, avisar y desaparecer</a></center> -->
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <?php
                    $i++;
                    }
                $contador++;
                // }
            }else{
            ?>
            <div>
                <img src="../../img/inicio/sinAlquiler.png" width="100%" alt="">
            </div>
            <?php
            }
            ?>
            <!-- end carusel -->
        </div>
    </body>
</html>
<script>
//<![CDATA[
// function getlink() {
// var aux = document.createElement("input");
// aux.setAttribute("value",window.location.href);
// document.body.appendChild(aux);
// aux.select();
// document.execCommand("copy");
// document.body.removeChild(aux);
// }
//]]>
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
</script>
