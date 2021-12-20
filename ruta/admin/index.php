<?php
    include("header.php");
?>
                <!-- Begin Page Content -->
            <div class="container-fluid">
                <?php
                if(!empty($_GET['error'])){
                    if($_GET['error'] == 1){
                    ?>  
                        <!-- ALERT DE REGISTRO -->
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Correcto!</strong> Se agrego correctamente el edificio.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!--END ALERT DE REGISTRO -->
                    <?php
                    }else{
                    ?>
                        <!-- ALERT DE REGISTRO -->
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Huy se encontro un erro!</strong> Vuleva a intentar por favor.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!--END ALERT DE REGISTRO -->
                    <?php
                    }
                }
                ?>
                <div class="row" style="padding: 25px;">
                    <div class="col-md-6">
                        <a href="regitrar_nuevo.php" class="btn btn-block btn-success"><i class="fas fa-fw fa-building"></i> Registro de Nuevo Edificio</a>
                    </div>
                    <div class="col-md-6">
                        <a href="mostrar_edificio.php" class="btn btn-block btn-info">Mostrar Edificios</a>
                    </div>
                </div>
            </div>
                <!-- /.container-fluid -->
            <!-- DE AQUI TERMINA TODO DEL INDEX -->

<?php
    include("footer.php");
?>

