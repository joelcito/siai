<?php
    include("header.php");
    if(!empty($_GET['id'])){
        $id_administrador = $_GET['id'];
        include("../coneccion.php");
        $consulta = "SELECT * FROM administrador WHERE idadministrador = $id_administrador";
        $resultado = mysqli_query($conexion,$consulta);
        $datos = mysqli_fetch_array($resultado);

    }else{
        $id_administrador = $_SESSION['id_administrador'];
    }
?>
    <div class="container">
        <!-- Page Heading -->
        <!-- <h1 class="h3 mb-2 text-blue-800">Tables</h1> -->
        <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank"
                href="https://datatables.net">official DataTables documentation</a>.</p> -->

        <?php
        if(!empty($_GET['id'])){
        ?>
        <div class="row" style="border: 2px solid blue; border-radius: 25px; padding: 10px;">
            <div class="col-md-12">
                <form action="">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">Nombre:</label>
                            <input type="button" class="form-control" value="<?=$datos['nombre']?>">
                        </div>
                        <div class="col-md-4">
                            <label for="">Apellido Paterno:</label>
                            <input type="button" class="form-control" value="<?=$datos['ap_paterno']?>">
                        </div>
                        <div class="col-md-4">
                            <label for="">Apellido Materno:</label>
                            <input type="button" class="form-control" value="<?=$datos['ap_materno']?>">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php   
        }
        ?>
        <!-- DataTales Example -->
        
        <div class="card shadow mb-4">
            <div class="card-header py-3 bg-blue">
                <div class="row">
                    <div class="col-md-3">
                        <a href="regitrar_nuevo.php" class="btn btn-success">Nuevo Edificio <i class="fas fa-plus-circle"></i></a>
                    </div>
                    <div class="col-md-3">
                    <?php
                        if($_SESSION['nivel']==1){
                        ?>
                        <a href="reporte_edificio_1.php?id=<?=$id_administrador?>" target="_target" class="btn btn-warning">Reporte <i class="fas fa-download"></i></a>
                        <?php
                        }
                    ?>
                    </div>
                    <div class="col-md-6">
                        <h6 class="m-0 font-weight-bold text-primary">Edificios Registrados</h6>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive text-center">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Edificio</th>
                                <th>Zona</th>
                                <th>Cantidad de <br> Copropietarios</th>
                                <th>Nombre del Contacto</th>
                                <th>Celular<br> del Contacto</th>
                                <th>Observacion</th>
                                <th>Fecha de Visita</th>
                                <th>Servicios</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Edificio</th>
                                <th>Zona</th>
                                <th>Cantidad de <br> Copropietarios</th>
                                <th>Nombre del Contacto</th>
                                <th>Celular<br> del Contacto</th>
                                <th>Observacion</th>
                                <th>Fecha de Visita</th>
                                <th>Servicios</th>
                                <th>Acciones</th>
                            </tr>
                        </tfoot>
                        <tbody>
                        <?php
                            // include("../seguridad.php");
                            $consulta = "SELECT *
                                         FROM hoja_ruta hr INNER JOIN administrador a
                                            ON  hr.administrador_idadministrador = a.idadministrador
                                         WHERE a.idadministrador = $id_administrador";
                            $resultado = mysqli_query($conexion,$consulta);
                            if($resultado){
                                while($dato = mysqli_fetch_array($resultado)){
                        ?>
                            <tr>
                                <td><?php echo $dato['edificio'];?></td>
                                <td><?php echo $dato['zona'];?></td>
                                <td><?php echo $dato['nro_copropietario'];?></td>
                                <td><?php echo $dato['nom_contacto'];?></td>
                                <td><?php echo $dato['5'];?></td>
                                <td><?php echo $dato['observaciones'];?></td>
                                <td><?php echo date_format(date_create($dato['ini_fecha']),"y/m/d");?></td>
                                <td>
                                    <form action="" style="font-size: 6px;">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <?php
                                                    if($dato['inf_economico'] == 1){
                                                    ?>
                                                        Informe Economico<br>
                                                        <input type="checkbox" disabled <?php $haber = ($dato['inf_economico'] == 1)? 'checked' : ''; echo $haber?> name="" id=""><br>
                                                    <?php
                                                    }
                                                ?>
                                                <?php
                                                if($dato['man_general']==1){
                                                    ?>
                                                    Mantenimiento en General<br>
                                                    <input type="checkbox" disabled <?php $haber = ($dato['man_general']==1)? 'checked' : ''; echo $haber?> name="" id=""><br>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                    if($dato['per_juridica']==1){
                                                    ?>
                                                    Personeria Jurídica<br>
                                                    <input type="checkbox" disabled <?php $haber = ($dato['per_juridica']==1)? 'checked' : ''; echo $haber?> name="" id=""><br>
                                                    <?php
                                                    }
                                                ?>
                                                <?php
                                                    if($dato['audi']==1){
                                                    ?>
                                                    Auditoria<br>
                                                    <input type="checkbox" disabled <?php $haber = ($dato['audi']==1)? 'checked' : ''; echo $haber?> name="" id=""><br>
                                                    <?php
                                                    }
                                                ?>
                                                <?php
                                                    if($dato['lim_vidrio']==1){
                                                    ?>
                                                    Limpieza de Vidrio<br>
                                                    <input type="checkbox" disabled <?php $haber = ($dato['lim_vidrio']==1)? 'checked' : ''; echo $haber?> name="" id=""><br>
                                                    <?php
                                                    }
                                                ?>
                                            </div>
                                            <div class="col-md-6">
                                                <?php
                                                    if($dato['administracion']==1){
                                                        ?>
                                                        Administración <br>
                                                        <input type="checkbox" disabled <?php $haber = ($dato['administracion']==1)? 'checked' : ''; echo $haber?> name="" id=""><br>
                                                        <?php
                                                    }
                                                ?>
                                                <?php
                                                    if($dato['porteria']==1){
                                                        ?>
                                                        Porteria<br>
                                                        <input type="checkbox" disabled <?php $haber = ($dato['porteria']==1)? 'checked' : ''; echo $haber?> name="" id=""><br>
                                                        <?php
                                                    }
                                                ?>
                                                <?php
                                                    if($dato['jardineria']==1){
                                                        ?>
                                                        Jardineria<br>
                                                        <input type="checkbox" disabled <?php $haber = ($dato['jardineria']==1)? 'checked' : ''; echo $haber?> name="" id=""><br>
                                                        <?php
                                                    }
                                                ?>
                                                <?php
                                                    if($dato['limpieza']==1){
                                                        ?>
                                                        Limpieza<br>
                                                        <input type="checkbox" disabled <?php $haber = ($dato['limpieza']==1)? 'checked' : ''; echo $haber?> name="" id=""><br>
                                                        <?php
                                                    }
                                                ?>
                                                <?php
                                                    if($dato['mas_bombas']==1){
                                                        ?>
                                                        Bomba de agua <br>
                                                        <input type="checkbox" disabled <?php $haber = ($dato['mas_bombas']==1)? 'checked' : ''; echo $haber?> name="" id=""><br>
                                                        <?php
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                        
                                        
                                    </form>
                                    <!-- <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input type="checkbox" name="informe_economico" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1" >Informe Economico</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" name="mantenimiento_general" class="form-check-input" id="exampleCheck2">
                                                <label class="form-check-label" for="exampleCheck2">Mantenimiento en General</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" name="personeria" class="form-check-input" id="exampleCheck3">
                                                <label class="form-check-label" for="exampleCheck3">Personeria Jurídica</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" name="auditoria" class="form-check-input" id="exampleCheck4">
                                                <label class="form-check-label" for="exampleCheck4">Auditorías</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" name="limpieza" class="form-check-input" id="exampleCheck5">
                                                <label class="form-check-label" for="exampleCheck5">Limpieza de Vidrios</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 borde">
                                            <div class="form-check">
                                                <input type="checkbox" name="administracion" class="form-check-input" id="exampleCheck6">
                                                <label class="form-check-label" for="exampleCheck6">Administración</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" name="porteria" class="form-check-input" id="exampleCheck7">
                                                <label class="form-check-label" for="exampleCheck7">Portería</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" name="jardineria" class="form-check-input" id="exampleCheck8">
                                                <label class="form-check-label" for="exampleCheck8">Jardinería</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" name="limpieza" class="form-check-input" id="exampleCheck9">
                                                <label class="form-check-label" for="exampleCheck9">Limpieza</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" name="bomba" class="form-check-input" id="exampleCheck10">
                                                <label class="form-check-label" for="exampleCheck10">Mantenimiento de Bombas de agua</label>
                                            </div>
                                        </div>
                                    </div> -->
                                </td>
                                <td>
                                    <a href="editar_edificio.php?id=<?php echo $dato['idhoja_ruta'];?>" class="btn  text-warning"><i class="fas fa-edit"></i></a>
                                    <?php
                                    if($dato['nivel'] == 1){
                                        ?>
                                        <a href="#" class="btn  text-danger"><i class="fas fa-trash-alt"></i></a>
                                        <?php
                                    }
                                    ?>
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