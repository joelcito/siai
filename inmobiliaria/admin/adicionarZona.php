<?php
    include("../seguridad.php");
    $nombre = $_POST['zona'];
    // echo $nombre;
    include("../coneccion.php");
    $consulta = "INSERT INTO zona VALUES(NULL, '$nombre')";
    if($consulta){
        mysqli_query($conexion,$consulta);
        header("location: registrarZona.php?haber=Se Registro con exito!");
    }
?>