<?php
header('Content-Type: application/xls');
header('Content-Disposition: inline; filename="InmueblesAlquiler.xls"');
?>
<table>
    <tr>
        <th>Tipo de Inmueble</th>
        <th>ZONA</th>
        <th>PRECIO</th>
        <th>PRECIO EN</th>
        <th>DORMITORIOS</th>
        <th>BAÑO</th>
        <th>BAULERA</th>
        <th>METRAJE</th>
        <th>GARAJE</th>
        <th>TIPO</th>
        <th>MAS INFORMACION</th>
        <th>COCINA</th>
        <th>LAVANDERIA</th>
    </tr>
    <?php
        include("../coneccion.php");

        $consulta = "SELECT * FROM inmueble_alquiler";

        $resultado =  mysqli_query($conexion,$consulta);

        while($datos =  mysqli_fetch_array($resultado)){
            ?>
            <tr>
                <td><?=$datos['inmueble']?></td>
                <td><?=$datos['zona']?></td>
                <td><?=$datos['precio']?></td>
                <td><?=$datos['cambio']?></td>
                <td><?=$datos['dormitorio']?></td>
                <td><?=$datos['banio']?></td>
                <td><?=$datos['baulera']?></td>
                <td><?=$datos['metraje']?></td>
                <td><?=$datos['garaje']?></td>
                <td><?=$datos['tipo']?></td>
                <td><?=$datos['garantia']?></td>
                <td><?=$datos['cocina']?></td>
                <td><?=$datos['lavanderia']?></td>
            </tr>
            <?php
        }
    ?>
    
</table>