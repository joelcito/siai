<?php
    $nombre = $_POST['nombre'];
    $paterno = $_POST['paterno'];
    $materno = $_POST['materno'];
    $ci = $_POST['carnet'];
    $celular = $_POST['celular'];
    $cargo = $_POST['cargo'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    include("../coneccion.php");
    $consulta = "INSERT INTO agente_venta VALUES(NULL,'$nombre','$paterno','$materno','$ci','$celular','$cargo','$usuario','$password')";
    // echo $consulta;
    mysqli_query($conexion,$consulta);
    header("location: registroAgente.php");
?>