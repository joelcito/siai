<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <hr>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form method="POST" action="control.php">
                    <h3 class="text-center">Inicio de Sesión</h3>
                    <div class="logo_sesion">
                        <img src="../img/inicio/logo.png" alt="">
                    </div>
                    <?php
                    if(!empty($_GET['error'])){
                        ?>
                        <br>
                        <div>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Error!</strong> <?php echo $_GET['error']?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Usuario:</label>
                        <input type="email" name="usuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su Usuario" required>
                        <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie más.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Contraseña:</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Ingrese su Contraseña" required>
                    </div>
                    <!-- <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div> -->
                    <center>
                        <button type="submit" class="btn btn-primary">Acceder</button>
                        <a href="../" aling="center">Volver</a>
                    </center>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
        <hr>
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Todos los derechos reservados de<br> SIAI Srl.</span>
            </div>
        </div>
        <br>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>