<?php
    include("../header.php");
?>
<style>
    label{
        color: white;
    }
</style>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 style="color: white;" class="text-center">Lista de Agentes</h4>
                <table class="table">
                    <tr style="background-color: black; color: white;">
                        <th>Nombres</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Celular</th>
                        <th>Cargo</th>
                        <th>Accion</th>
                    </tr>
                    <?php
                    include("../coneccion.php");
                    $consulta = "SELECT * FROM agente_venta";
                    if($consulta){
                        $datos = mysqli_query($conexion,$consulta);
                        while($mostrar = mysqli_fetch_array($datos)){
                        ?>
                            <tr style="background-color: white; color: black;">
                                <td><?php echo $mostrar['nombres'];?></td>
                                <td><?php echo $mostrar['paterno'];?></td>
                                <td><?php echo $mostrar['materno'];?></td>
                                <td><?php echo $mostrar['celular'];?></td>
                                <td>
                                    <?php 
                                        $haber = ($mostrar['nivel'] == 1) ? 'Administrador' : 'Agente de Venta';
                                        echo $haber;
                                    ?>
                                </td>
                                <td>
                                    <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    <!-- <?php //echo $mostrar['id_agente_venta'];?> -->
                                </td>
                            </tr>
                        <?php
                        }
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
<?php
    include("../footer.php");
?>