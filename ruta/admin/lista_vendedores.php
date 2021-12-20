<?php
    include("header.php");
    $id_administrador = $_SESSION['id_administrador'];
?>
    <div class="container">
        <!-- Page Heading -->
        <!-- <h1 class="h3 mb-2 text-blue-800">Tables</h1> -->
        <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank"
                href="https://datatables.net">official DataTables documentation</a>.</p> -->

        <!-- DataTales Example -->
        <?php
            if(!empty($_GET['error'])){
                if($_GET['error']==1){
                ?>
                    <br>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Exito!</strong> Se modifico el Vendedor.
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
        <div class="card shadow mb-4">
            <div class="card-header py-3 bg-blue">
                <div class="row">
                    <div class="col-md-3">
                        <a href="registrar_vendedor.php" class="btn btn-success">Nuevo Vendedor <i class="fas fa-plus-circle"></i></a>
                    </div>
                    <div class="col-md-3">
                        <!-- <a href="reporte_edificio.php" class="btn btn-warning">Reporte <i class="fas fa-download"></i></a> -->
                        
                    </div>
                    <div class="col-md-6">
                        <h6 class="m-0 font-weight-bold text-primary">Vendedores Registrados</h6>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive text-center">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>AP Paterno</th>
                                <th>AP Materno</th>
                                <th>Celular</th>
                                <th>Nro Carnet</th>
                                <th>Nivel</th>
                                <th>Usiario</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nombre</th>
                                <th>AP Paterno</th>
                                <th>AP Materno</th>
                                <th>Celular</th>
                                <th>Nro Carnet</th>
                                <th>Nivel</th>
                                <th>Usiario</th>
                                <th>Acciones</th>
                            </tr>
                        </tfoot>
                        <tbody>
                        <?php
                            include("../coneccion.php");
                            // include("../seguridad.php");
                            $consulta = "SELECT * FROM administrador";
                            $resultado = mysqli_query($conexion,$consulta);
                            if($resultado){
                                while($dato = mysqli_fetch_array($resultado)){
                        ?>
                            <tr>
                                <td><?php echo $dato['nombre'];?></td>
                                <td><?php echo $dato['ap_paterno'];?></td>
                                <td><?php echo $dato['ap_materno'];?></td>
                                <td><?php echo $dato['celular'];?></td>
                                <td><?php echo $dato['cedula'];?></td>
                                <td><?php $nivel = ($dato['nivel'] == 1)? "Administrador":"Vendedor"; echo $nivel;?></td>
                                <td><?php echo $dato['usuario'];?></td>
                                
                                <td>
                                    <a href="editar_vendedor.php?id=<?=$dato['idadministrador']?>" title="Editar" class="btn  text-warning"><i class="fas fa-edit"></i></a>
                                    <a href="mostrar_edificio.php?id=<?php echo $dato['idadministrador'];?>" class="btn text-success" title="Ver"><i class="fas fa-eye"></i></a>
                                    <!-- <a href="#" class="btn  text-danger" title="Eliminar"><i class="fas fa-trash-alt"></i></a> -->
                                </td>
                            </tr>
                        <?php
                                }
                            }
                        ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php
    include("footer.php")
?>