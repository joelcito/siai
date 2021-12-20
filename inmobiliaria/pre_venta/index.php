<!DOCTYPE html>
<html>

    <head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SIAI</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../../scss/main.css">
        <link rel="stylesheet" href="../../scss/skin.css">
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
            background-image: url(../../img/inicio/08.jpg);
            background-attachment: fixed;
            background-size: cover;
            background-repeat: no-repeat;
        }
        .boton{
            background: #00b7f8;
            border-color: #0045a6;
            border-bottom: 5px solid #0045a6;
            border-radius: 50px;
            box-shadow: 3px 3px 3px #999;
            color: #fff;
            cursor: pointer;
            display: block;  
            font-family: 'Raleway', Arial, Helvetica;
            font-size: 25px;
            height: 70px;
            margin: 10px auto;
            padding: 25px 5px;
            text-align: center;
            transition: all 0.2s ease 0s;
            width: 190px;
        }
        .boton:hover{
            /* background: #0096f7; */
            color: #ff8a00;
        }
        .boton:active {
            box-shadow: 2px 2px 2px 2px #777, 0px 0px 35px 0px #00b7f8;
            border-bottom:1px solid #0045A6;
            text-shadow:  0px 0px 5px #fff, 0px 0px 5px #fff;
            transform: translateY(1px);
            transition: all 0.1s ease 0s;
            margin: 20px auto 76px auto;
        }
        a.boton{
            background: linear-gradient(180deg, #306485 30%, #65bce8  100%);
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
        #des {
        width: 100px;
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
        .menu{
            float: left;
        }
        hr{
            border: 0;
            background-color: blue;
            height: 1px;
        }
    </style>
    <!-- <body id="wrapper" style="background-image: url(../../img/inicio/07.jpg); background-size: cover; width: 100%; height: 100vh;" > -->
    <body>
        <div class="container">
            <br>
            <div class="row" style="text-align: center;">            
                <div class="col-md-6 logo">
                    <span class="float-left">
                        <a href="../"><img class="haber" src="../../img/inicio/logo.png" width="350px" alt="" ></a>
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
                            <li><a href="../../nosotros.html">Nosotros</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#exampleModal">Ingresar</a></li>
                            <!-- <li><a href="listaOficinas.php">Oficina</a></li>
                            <li><a href="#">Departamento</a></li>
                            <li><a href="#">Casa</a></li>
                            <li><a href="#">Local Comercial</a></li> -->
                        </ul>
                    </div>
                </div>
                <!-- modal -->
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
                                <label for="recipient-name" class="col-form-label">Usuario:</label>
                                <input type="text" class="form-control" id="" name="usuario" required>
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Contraseña:</label>
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
            <h2 style="color: black; text-align: center;">
                <b>PRE VENTA</b> 
            </h2>
            <hr>
            
            <!-- <h1 style="color: white;">Ventas de:</h1> -->
            <div class="row">
                    <div class="col-md-3"><a href="lista_bethesda.php" class="boton">BETHESDA</a></div>
                    <div class="col-md-3"><a href="lista_kyrios.php" class="boton">KYRIOS</a></div>
                    <div class="col-md-3"><a href="lista_torre_lu.php" class="boton">TORRE LU</a></div>
                    <div class="col-md-3"><a href="lista_orabela.php" class="boton">ORABELA</a></div>
                    <!-- <div class="col-md-3"><a href="#" class="boton">Casa</a></div>
                    <div class="col-md-3"><a href="#" class="boton">Local Comercial</a></div> -->
            </div>
            <!-- <footer>
                <div class="row">
                    <div class="footer-block col-md-12" style="color: white; background: #2d44b2; border-radius: 25px;">
                        <h4>Contactanos</h4>
                        <ul class="footer-links">
                            <li>
                                <p class="post-date"><i class="fa fa-whatsapp"></i> <a href="tel:+591 76263884  " class="post" style="color:white;">+591 76263884</a></p>
                            </li>
                            <li>
                                <p class="post-date"><i class="fa fa-map-marker"></i> <a href="https://goo.gl/maps/Rucj2QmaEpKc1k1n7" class="post" style="color: white;"> Edificio O-22 Piso 8-A Calle 22 de Calacoto entre la Av. Ballivian y Av. Inofuentes</a></p>
                            </li>
                            <li>
                                <p class="post-date"><i class="fa fa-envelope"></i> <a href="mailto:informaciones@siai.com.bo" style="color: white;"> informaciones@siai.com.bo</a></p>
                            </li>

                        </ul>
                    </div>
                </div>
            </footer> -->
        </div>
    </body>
</html>
<script>
    $(document).ready(function(){
        $("#des").hide();	
        $("#navegacion").click(function(){
            $("#des").slideToggle("slow");
        });
    });
</script>
