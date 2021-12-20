<?php
    include("header.php");
    include("../coneccion.php");
    $id_administrador = $_GET['id'];
    $consulta = "SELECT * FROM administrador WHERE idadministrador = $id_administrador";
    if($resl = mysqli_query($conexion,$consulta)){
        $datos = mysqli_fetch_array($resl);
?>
    <div class="container">
        <h3 class="text-center">Edición de Vendedor</h3>
        <form action="update_vendedor.php" method="POST">
            <div class="row">
                <input type="hidden" name="id" value="<?=$id_administrador?>">
                <div class="col-md-3">
                    <label for="">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" value="<?=$datos['nombre']?>" required>
                </div>
                <div class="col-md-3">
                    <label for="">Apellido Paterno:</label>
                    <input type="text" class="form-control" name="ap_paterno" value="<?=$datos['ap_paterno']?>">
                </div>
                <div class="col-md-3">
                    <label for="">Apellido Materno:</label>
                    <input type="text" class="form-control" name="ap_materno" value="<?=$datos['ap_materno']?>">
                </div>
                <div class="col-md-3">
                    <label for="">Cedula:</label>
                    <input type="number" class="form-control" name="cedula" value="<?=$datos['cedula']?>" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label for="">Celular:</label>
                    <input type="number" class="form-control" name="celular" value="<?=$datos['celular']?>" required>
                </div>
                <div class="col-md-3">
                    <label for="">Usuario:</label>
                    <input type="text" class="form-control" name="usuario" value="<?=$datos['usuario']?>" required>
                </div>
                <div class="col-md-3">
                    <label for="">Contraseña:</label>
                    <input type="text" class="form-control" name="contrasenia" value="<?=$datos['contrasenia']?>" required>
                </div>
                <div class="col-md-3">
                    <label for="">Cargo:</label>
                    <select  id="" class="form-control" name="nivel" required>
                        <option value="<?=$datos['nivel']?>"><?php $nivel = ($datos['nivel'] == 1)? "Administrador":"Vendedor";echo $nivel;?></option>
                        <option value="2">Vendedor</option>
                        <option value="1">Administrador</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success btn-block"><i class="fas fa-edit"></i> Editar</button>
                </div>
                <div class="col-md-6">
                    <a href="lista_vendedores.php" class="btn btn-danger btn-block"><i class="fas fa-window-close"></i> Cancelar</a>
                </div>
            </div>
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
                }else if($_GET['error'] == 2){
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
    }
    include("footer.php");
?>