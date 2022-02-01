<?php
    // recibiendo los datos de la lista de inmuebles 
    $id_inmueble = $_GET['id_inmueble'];
    $inmueble = $_GET['inmueble'];
    $tipo_inmueble = $_GET['tipo'];

    // haciendo la coneccion a la base de datos
    include("../coneccion.php");

    // echo $id_inmueble."<br>";
    // echo $inmueble."<br>";
    // echo $tipo_inmueble."<br>";
    $hoy =  date("Y-m-d H:i:s");

    $consulta =  "UPDATE inmueble_$tipo_inmueble SET eliminado = '$hoy' WHERE id_$tipo_inmueble = $id_inmueble";

    mysqli_query($conexion, $consulta);
?>