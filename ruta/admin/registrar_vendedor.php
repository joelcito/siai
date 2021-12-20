<?php
    include("header.php");
?>
    <div class="container">
        <h3 class="text-center">Registro de Nuevo Vendedor</h3>
        <form action="agregar_vendedor.php" method="POST">
            <div class="row">
                <div class="col-md-3">
                    <label for="">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" required>
                </div>
                <div class="col-md-3">
                    <label for="">Apellido Paterno:</label>
                    <input type="text" class="form-control" name="ap_paterno">
                </div>
                <div class="col-md-3">
                    <label for="">Apellido Materno:</label>
                    <input type="text" class="form-control" name="ap_materno">
                </div>
                <div class="col-md-3">
                    <label for="">Cedula:</label>
                    <input type="number" class="form-control" name="cedula" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label for="">Celular:</label>
                    <input type="number" class="form-control" name="celular" required>
                </div>
                <div class="col-md-3">
                    <label for="">Usuario:</label>
                    <input type="text" class="form-control" name="usuario" required>
                </div>
                <div class="col-md-3">
                    <label for="">Contraseña:</label>
                    <input type="password" class="form-control" name="contrasenia" required>
                </div>
                <div class="col-md-3">
                    <label for="">Cargo:</label>
                    <select  id="" class="form-control" name="nivel" required>
                        <option value="">Seleccione un Cargo</option>
                        <option value="2">Vendedor</option>
                        <option value="1">Administrador</option>
                    </select>
                </div>
            </div>
            <br>
            <button class="btn btn-success btn-block">Registrar</button>
        </form>
        <?php
            if(!empty($_GET['error'])){
                if($_GET['error'] == 1){
                ?>  
                    <br>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Exito!</strong> Se registro un Nuevo Vendedor.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php
                }else{
                ?>
                    <br>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error!</strong> Ocurrio un error Vuelva a intentar.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php
                }
            }
        ?>
    </div>
<?php
    include("footer.php");
?>