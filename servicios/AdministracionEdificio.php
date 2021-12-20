<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SIAI</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../scss/main.css">
    <link rel="stylesheet" href="../scss/skin.css">
    <link rel="icon" href="img/inicio/icono.png" type="image/png"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="../script/index.js"></script>
</head>
<style>
    body{
        background-image: url(../img/inicio/07.jpg); 
        background-size: cover; 
        background-attachment: fixed;
        width: 100%;
        height: 100vh;
    }
    p{
        color: white;
        font-size: 20px;
        text-align: center;
    }
    h1{
        text-align: center;
        color: black;
    }
    h6{
        text-align: center;
        color: blue;
        font-family: cursive 120%;
    }
    h5{
        text-align: center;
        color: black;
        font-style: italic;
    }
    .brin img:hover{
        border-radius: 20px;
        box-shadow: 0 0 20px rgba(22, 244, 246,.9);
    }
    .lista{
        color: white;
        list-style-type: disc;
    }
    .lista2{
        color: white;
        list-style-type: decimal;
        margin-left: 20px;
    }
</style>
<body id="wrapper" >
    <nav class="navbar navbar-default" role="navigation">
        <!-- El logotipo y el icono que despliega el menú se agrupan
            para mostrarlos mejor en los dispositivos móviles -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Desplegar navegación</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Logotipo</a>
        </div>
        <!-- Agrupar los enlaces de navegación, los formularios y cualquier
            otro elemento que se pueda ocultar al minimizar la barra -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
            <li class="active"><a href="#">Enlace #1</a></li>
            <li><a href="#">Enlace #2</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                Menú #1 <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                <li><a href="#">Acción #1</a></li>
                <li><a href="#">Acción #2</a></li>
                <li><a href="#">Acción #3</a></li>
                <li class="divider"></li>
                <li><a href="#">Acción #4</a></li>
                <li class="divider"></li>
                <li><a href="#">Acción #5</a></li>
                </ul>
            </li>
            </ul>

            <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Buscar">
            </div>
            <button type="submit" class="btn btn-default">Enviar</button>
            </form>

            <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Enlace #3</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                Menú #2 <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                <li><a href="#">Acción #1</a></li>
                <li><a href="#">Acción #2</a></li>
                <li><a href="#">Acción #3</a></li>
                <li class="divider"></li>
                <li><a href="#">Acción #4</a></li>
                </ul>
            </li>
            </ul>
        </div>
    </nav>
    <!-- mensaje introductivo -->
    <div class="container">
        <p>
            Somos una empresa boliviana con experiencia individual de nuestros colaboradores, que se dedica a la gestión, 
            administración y mantenimiento de edificios de departamentos y condominios. Esto asegura la tranquilidad y
            comodidad de los propietarios y sus familias en un ambiente seguro, ordenado y agradable de respeto mutuo.
            donde puedes vivir como quieras.
        </p>
        <!-- fin del mensaje introductivo -->
        <div class="row">
            <div class="col-md-6">
                <img src="../img/servicios/imagenPrueba.jpg" width="100%" alt="">
            </div>
            <div class="col-md-6">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                        <li data-target="#myCarousel" data-slide-to="4"></li>
                        <li data-target="#myCarousel" data-slide-to="5"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="../img/servicios/Slides-01.jpg" width="100%" alt="Los Angeles">
                        </div>
                        <div class="item">
                            <img src="../img/servicios/Slides-02.jpg" width="100%" alt="Chicago">
                        </div>
                        <div class="item">
                            <img src="../img/servicios/Slides-03.jpg" width="100%" alt="New York">
                        </div>
                        <div class="item">
                            <img src="../img/servicios/Slides-04.jpg" width="100%" alt="Los Angeles">
                        </div>
                        <div class="item">
                            <img src="../img/servicios/Slides-05.jpg" width="100%" alt="Chicago">
                        </div>
                        <div class="item">
                            <img src="../img/servicios/Slides-06.jpg" width="100%" alt="New York">
                        </div>
                    </div>
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <h1>POR QUE ELEJIRNOS?</h1>
        <h6>
            Somos innovadores, y estamos a la vanguardia de la tecnología en cuanto a operación y servicios, <br>
            brindando atención integral y servicios garantizados para mejorar la calidad de vida de los propietarios.
        </h6>
        <div class="row">
            <center>
                <div class="col-md-3 brin">
                    <img src="../img/servicios/ahorro.jpg" alt="">
                    <h5>
                        <b>Ahorro</b><br>
                        Una eficiente gestión de recursos se verá traducida en cuotas de mantenimiento más bajas.
                    </h5>
                </div>
                <div class="col-md-3 brin">
                    <img src="../img/servicios/confort.jpg" alt="">
                    <h5>
                        <b>Confort</b><br>
                        Ambientes limpios y bien conservados para el beneficio de residentes y visitantes.
                    </h5>
                </div>
                <div class="col-md-3 brin">
                    <img src="../img/servicios/seguridad.jpg" alt="">
                    <h5>
                        <b>Seguridad</b><br>
                        Tu familia y tú vivirán con total tranquilidad en un ambiente seguro y ordenado.
                    </h5>
                </div>
                <div class="col-md-3 brin">
                    <img src="../img/servicios/valor.jpg" alt="">
                    <h5>
                        <b>Valor Agregado</b><br>
                        Porque no nos conformamos, te ofrecemos una serie de beneficios para tu comodidad.
                    </h5>
                </div>
            </center>
        </div>
        <br>
        <center>
            <a href="#" class="btn btn-primary">Mas información</a>
        </center>
        <h1>Nuestros Servicios</h1>
        <p>
            SIAI Srl soluciona la necesidad de contar con un sistema de información que asista en forma <br>
            permanente a la toma de decisiones del personal que realiza la administración del condominio <br>
            o edificio.
        </p>
        <h1>Control Financiero</h1>
        <p>
            <ol class="lista">
                <li>Establecemos políticas de cobranzas a los propietarios o inquilinos que se encuentren morosos.Gestionamos y supervisamos el cumplimiento del pago mensual de la cuota de <br>              mantenimiento de los propietarios y/o inquilinos.</li>
                <li>Establecemos políticas de cobranzas a los propietarios o inquilinos que se encuentren morosos.</li>
                <li>Presentamos mensualmente un informe económico financiero el cual especificará:
                    <ul class="lista2">
                        <li>realizadas de cuota de mantenimiento del mes en curso.</li>
                        <li>Cobranzas realizadas de cuota de mantenimiento atrasadas.</li>
                        <li>Egresos por pago de servicios.</li>
                        <li>Egresos por pago de remuneraciones de personal.</li>
                        <li>Relación mensual de deudores.</li>
                    </ul>
                </li>
                <li>Pagamos a los proveedores, Luz del Sur, ascensores, etc.</li>
            </ol>
        </p>
        <center>
            <a href="#" class="btn btn-primary">Mas información</a>
        </center>
        <h1>Control Operativo</h1>
        <p>
            <ol class="lista">
                <li>Gestionamos la adquisición de materiales de limpieza y mantenimiento de las áreas comunes.</li>
                <li>Supervisamos que el personal cumpla sus horarios, turnos y roles de trabajo.</li>
                <li>Controlamos directamente las obras menores, tales como cambio de veredas, pisos, arreglos eléctricos, cerrajería, etc., designados por la junta de propietarios.</li>
                <li>Controlamos que la empresa encargada del mantenimiento de ascensores cumpla con el rol de visitas preventivas para tener el ascensor en óptimas condiciones operativas</li>
                <li>Coordinamos el mantenimiento, limpieza, fumigación y desinfección de tanques y cisternas.</li>
                <li>Velamos por el cuidado y limpieza de las áreas comunes y jardines del edificio.</li>
                <li>Coordinamos y supervisamos la limpieza y/o pintado de la fachada, puertas de madera, rejas y áreas comunes.</li>
            </ol>
        </p>
    </div>
    <!-- <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3" style="background-color: white; opacity: 0.8; border-radius: 25px; margin: 20px;">
                <a href="../">
                    <span class="float-left">
                        <img class="haber" src="../img/inicio/logo.png"  width="100%" alt="" >
                    </span>
                </a>
            </div>
            <div class="col-md-7"></div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-8">
                <img src="../img/inicio/construccion.png" style="border-radius: 20px; opacity: 0.7;" width="100%"  alt="">
            </div>
            <div class="col-md-4" style="background-color:#473DCE; border-radius: 40px; opacity: 0.8;">
                <div class="footer-block" style="color: white;">
                    <h4>Contactanos</h4>
                    <hr/>
                    <ul class="footer-links">
                        <li>
                            <p class="post-date"><i class="fa fa-whatsapp"></i> <a href="#" class="post" style="color:white;">+591 69770000</a></p>
                        </li>
                        <li>
                            <p class="post-date"><i class="fa fa-map-marker"></i> <a href="#" class="post" style="color: white;"> Edificio O-22 Piso 8-A Calle 22 de Calacoto entre la Av. Ballivian y Av. Inofuentes</a></p>
                        </li>
                        <li>
                            <p class="post-date"><i class="fa fa-envelope"></i> <a href="#" style="color: white;"> informaciones@siai.com.bo</a></p>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div> -->

    <!--/.nav-ends -->

    <!-- <div id="myCarousel" class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('img/banner-slide-1.jpg');"></div>
                <div class="carousel-caption slide-up">
                    <h1 class="banner_heading">Providing The <span>Highest </span>Lorem</h1>
                    <p class="banner_txt">Lorem ipsum dolor sit amet sit legimus copiosae instructior eiut vix denique fierentis ea saperet inimicu utqui dolor oratio mnesarchum.</p>
                    <div class="slider_btn">
                        <button type="button" class="btn btn-default slide">Learn More <i class="fa fa-caret-right"></i></button>
                        <button type="button" class="btn btn-primary slide">Learn More <i class="fa fa-caret-right"></i></button>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="fill" style="background-image:url('img/banner-slide-2.jpg');"></div>
                <div class="carousel-caption slide-up">
                    <h1 class="banner_heading">Providing The <span>Highest </span>Lorem</h1>
                    <p class="banner_txt">Lorem ipsum dolor sit amet sit legimus copiosae instructior eiut vix denique fierentis ea saperet inimicu utqui dolor oratio mnesarchum.</p>
                    <div class="slider_btn">
                        <button type="button" class="btn btn-default slide">Learn More <i class="fa fa-caret-right"></i></button>
                        <button type="button" class="btn btn-primary slide">Learn More <i class="fa fa-caret-right"></i></button>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="fill" style="background-image:url('img/banner-slide-3.jpg');"></div>
                <div class="carousel-caption slide-up">
                    <h1 class="banner_heading">Providing The <span>Highest </span>Lorem</h1>
                    <p class="banner_txt">Lorem ipsum dolor sit amet sit legimus copiosae instructior eiut vix denique fierentis ea saperet inimicu utqui dolor oratio mnesarchum.</p>
                    <div class="slider_btn">
                        <button type="button" class="btn btn-default slide">Learn More <i class="fa fa-caret-right"></i></button>
                        <button type="button" class="btn btn-primary slide">Learn More <i class="fa fa-caret-right"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
        </a>

    </div> -->

    <!-- <section id="features">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-12 block">
                    <div class="col-md-2 col-xs-2"><i class="fa fa-laptop feature_icon"></i></div>
                    <div class="col-md-10 col-xs-10">
                        <h4>100% Responsive</h4>
                        <p>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum.</p>
                        <a href="#" class="readmore">Read More <i class="fa fa-caret-right"></i></a>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 block">
                    <div class="col-md-2 col-xs-2"><i class="fa fa-bullhorn feature_icon"></i></div>
                    <div class="col-md-10 col-xs-10">
                        <h4>Powerful Features</h4>
                        <p>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum.</p>
                        <a href="#" class="readmore">Read More <i class="fa fa-caret-right"></i></a>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 block">
                    <div class="col-md-2 col-xs-2"><i class="fa fa-support feature_icon"></i></div>
                    <div class="col-md-10 col-xs-10">
                        <h4>Customer Support</h4>
                        <p>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum.</p>
                        <a href="#" class="readmore">Read More <i class="fa fa-caret-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <!-- <section id="about">
        <div class="image-holder col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-left">
            <div class="background-imgholder">
                <img src="img/1.jpg" alt="about" class="img-responsive" style="display:none;" />
            </div>
        </div>

        <div class="container-fluid">

            <div class="col-md-7 col-md-offset-5 col-sm-8 col-sm-offset-2 col-xs-12 text-inner ">
                <div class="text-block">
                    <div class="section-heading">
                        <h1>ABOUT <span>US</span></h1>
                        <p class="subheading">Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut.</p>
                    </div>

                    <ul class="aboutul">
                        <li> <i class="fa fa-check"></i>Vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum.</li>
                        <li> <i class="fa fa-check"></i>legimus copiosae instructior ei ut vix denique fierentis atqui mucius consequat ad pro.</li>
                        <li> <i class="fa fa-check"></i>Ea saperet inimicu ut qui dolor oratio maiestatis ubique mnesarchum.</li>
                        <li> <i class="fa fa-check"></i>Sanctus voluptatibus et per illum noluisse facilisis quo atqui mucius ad pro.</li>
                        <li> <i class="fa fa-check"></i>At illum noluisse facilisis quo te dictas epicurei suavitate qui his ad.</li>
                        <li> <i class="fa fa-check"></i>Tantas propriae mediocritatem id vix qui everti efficiantur an ocurreret consetetur.</li>
                    </ul>

                    <button type="button" class="btn btn-primary slide">Learn More  <i class="fa fa-caret-right"></i> </button>


                </div>
            </div>
        </div>
    </section> -->


    <!-- <section id="process">
        <div class="container">
            <div class="section-heading text-center">
                <div class="col-md-12 col-xs-12">
                    <h1>What <span>We Do</span></h1>
                    <p class="subheading">Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum ea utamur impetus fuisset nam nostrud euismod volumus ne mei.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 col-sm-6 block process-block">
                    <div class="process-icon-holder">
                        <div class="process-border">
                            <span class="process-icon"><a href="#"><i class="fa fa-lightbulb-o feature_icon"></i></a></span></div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="process-text-block">
                        <h4><a href="#">Idea</a></h4>
                        <p>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 block process-block">
                    <div class="process-icon-holder">
                        <div class="process-border">
                            <span class="process-icon"><a href="#"><i class="fa fa-cloud-download feature_icon"></i></a></span></div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="process-text-block">
                        <h4><a href="#">Concept</a></h4>
                        <p>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 block process-block">
                    <div class="process-icon-holder">
                        <div class="process-border">
                            <span class="process-icon"><a href="#"><i class="fa fa-magic feature_icon"></i></a></span></div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="process-text-block">
                        <h4><a href="#">Design</a></h4>
                        <p>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 block process-block lastchild">
                    <div class="process-icon-holder">
                        <div class="process-border">
                            <span class="process-icon"><a href="#"><i class="fa fa-cog feature_icon"></i></a></span></div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="process-text-block">
                        <h4><a href="#">Develop</a></h4>
                        <p>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum</p>
                    </div>
                </div>
            </div>

        </div>
    </section> -->


    <!-- <section id="testimonial">
        <div class="container">
            <div class="section-heading text-center">
                <div class="col-md-12 col-xs-12">
                    <h1>What Our <span>Client Says</span></h1>
                    <p class="subheading">Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum ea utamur impetus fuisset nam nostrud euismod volumus ne mei.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-12 block ">
                    <div class="testimonial_box">
                        <p>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum ea utamur impetus fuisset. </p>
                    </div>
                    <div class="arrow-down"></div>
                    <div class="testimonial_user">
                        <div class="user-image"><img src="img/user1.png" alt="user" class="img-responsive" /></div>
                        <div class="user-info">
                            <h5>Lorem Ipsum</h5>
                            <p>Manager</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 col-sm-12 block">
                    <div class="testimonial_box">
                        <p>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum ea utamur impetus fuisset. </p>
                    </div>
                    <div class="arrow-down"></div>
                    <div class="testimonial_user">
                        <div class="user-image"><img src="img/user1.png" alt="user" class="img-responsive" /></div>
                        <div class="user-info">
                            <h5>Lorem Ipsum</h5>
                            <p>Manager</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12 block">
                    <div class="testimonial_box">
                        <p>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum ea utamur impetus fuisset. </p>
                    </div>
                    <div class="arrow-down"></div>
                    <div class="testimonial_user">
                        <div class="user-image"><img src="img/user1.png" alt="user" class="img-responsive" /></div>
                        <div class="user-info">
                            <h5>Lorem Ipsum</h5>
                            <p>Manager</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </section> -->





    <!-- <section id="footer">
        <div class="container">
            <div class="row">

                <div class="col-md-3 col-sm-3 col-xs-12 <block></block>">
                    <div class="footer-block">
                        <h4>Contactos</h4>
                        <hr/>
                        <ul class="footer-links">
                            <li>
                                <a href="#" class="post">Celular</a>
                                <p class="post-date">+591 76263884</p>
                            </li>
                            <li>
                                <a href="#" class="post">Direccion</a>
                                <p class="post-date">Edificio O-22 Piso 8-A Calle 22 de Calacoto entre la Av. Ballivian y Av. Inofuentes</p>
                            </li>
                            <li>
                                <a href="#" class="post">Correo</a>
                                <p class="post-date">informaciones@siai.com.bo</p>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>


    </section> -->

    <!-- <section id="bottom-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 btm-footer-links">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Use</a>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 copyright">
                    Developed by <a href="#">Aspire Software Solutions</a> designed by <a href="#">Designing Team</a>
                </div>
            </div>
        </div>
    </section> -->

    <div id="panel">
        <div id="panel-admin">
            <div class="panel-admin-box">
                <div id="tootlbar_colors">
                    <button class="color" style="background-color:#1abac8;" onclick="mytheme(0)"></button>
                    <button class="color" style="background-color:#ff8a00;" onclick="mytheme(1)"> </button>
                    <button class="color" style="background-color:#b4de50;" onclick="mytheme(2)"> </button>
                    <button class="color" style="background-color:#e54e53;" onclick="mytheme(3)"> </button>
                    <button class="color" style="background-color:#1abc9c;" onclick="mytheme(4)"> </button>
                    <button class="color" style="background-color:#159eee;" onclick="mytheme(5)"> </button>
                </div>
            </div>

        </div>
    </div>

</html>