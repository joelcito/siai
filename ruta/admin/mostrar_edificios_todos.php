<?php
    include("header.php");
    $id_administrador = $_SESSION['id_administrador'];
?>
    <!-- <div class="container"> -->
        <!-- Page Heading -->
        <!-- <h1 class="h3 mb-2 text-blue-800">Tables</h1> -->
        <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank"
                href="https://datatables.net">official DataTables documentation</a>.</p> -->

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 bg-blue">
                <div class="row">
                    <div class="col-md-3">
                        <a href="regitrar_nuevo.php" class="btn btn-success">Nuevo Edificio <i class="fas fa-plus-circle"></i></a>
                    </div>
                    <div class="col-md-3">
                        <!-- <a href="reporte_edificio.php" class="btn btn-warning">Reporte <i class="fas fa-download"></i></a> -->
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
                                <th>vendedor</th>
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
                                <th>vendedor</th>
                                <th>Acciones</th>
                            </tr>
                        </tfoot>
                        <tbody>
                        <?php
                            include("../coneccion.php");
                            // include("../seguridad.php");
                            $consulta = "SELECT * 
                                        FROM hoja_ruta hr INNER JOIN administrador a
                                            ON hr.administrador_idadministrador = idadministrador
                                        -- SELECT *
                                        --  FROM hoja_ruta hr INNER JOIN administrador a
                                        -- ON  hr.administrador_idadministrador = a.idadministrador
                                        --  WHERE a.idadministrador = $id_administrador
                                         ";
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
                                <td><?php echo date_format(date_create($dato['ini_fecha']),"d/m/y");?></td>
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
                                </td>
                                <td><?php echo $dato['nombre']." ".$dato['ap_paterno'];?></td>
                                <td>
                                    <a href="editar_edificio.php?id=<?php echo $dato['idhoja_ruta'];?>" title="Editar" class="btn  text-warning"><i class="fas fa-edit"></i></a>
                                    <!-- <a href="#" class="btn text-success" title="Ver"><i class="fas fa-eye"></i></a> -->
                                    <a href="#" class="btn  text-danger" onclick="eliminar_edificio_ya('<?=$dato['edificio']?>',<?=$dato['idhoja_ruta']?>)" title="Eliminar"><i class="fas fa-trash-alt"></i></a>
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
    <!-- </div> -->
<?php
    include("footer.php")
?>
<script>
    function elimina_edificio(id_paciente){
        parametros = { "id":id_paciente }
        $.ajax({
            data:parametros,
            url:'delete_edificio.php',
            type:'POST',
            beforeSend:function(){},
            success:function(){
                // table.ajax.reload();
                location.reload();
                Swal.fire(
                '¡Eliminado!',
                'Su archivo ha sido eliminado.',
                'success'
                )
            }
        });
    }
    function eliminar_edificio_ya(nombre,id_paciente){
        Swal.fire({
        title: 'Estas seguro de eliminar a '+nombre+' ?',
        text: "¡No podrás revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#7FC869',
        cancelButtonColor: '#FF0000',
        confirmButtonText: '¡Sí, bórralo!'
        }).then((result) => {
        if (result.isConfirmed) {
            elimina_edificio(id_paciente);
        }
        })
    }
</script>