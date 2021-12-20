<?php
    $id = $_POST['id'];
    include("../coneccion.php");
    $consulta = "DELETE FROM hoja_ruta WHERE (idhoja_ruta = '$id')";
    mysqli_query($conexion,$consulta);
?>