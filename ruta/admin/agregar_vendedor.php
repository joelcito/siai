<?php
    include("../coneccion.php");
    $nombre = $_POST['nombre'];
    $ap_paterno = $_POST['ap_paterno'];
    $ap_materno = $_POST['ap_materno'];
    $cedula = $_POST['cedula'];
    $celular = $_POST['celular'];
    $usuario = $_POST['usuario'];
    $contrasenia = $_POST['contrasenia'];
    $nivel = $_POST['nivel'];

    // echo "<br>Nombre: ".$nombre;
    // echo "<br>ap_paterno: ".$ap_paterno;
    // echo "<br>ap_materno: ".$ap_materno;
    // echo "<br>cedula: ".$cedula;
    // echo "<br>celular: ".$celular;
    // echo "<br>usuario: ".$usuario;
    // echo "<br>contrasenia: ".$contrasenia;
    // echo "<br>nivel: ".$nivel;
    $consulta = "INSERT INTO administrador VALUES (NULL,'$nombre','$ap_paterno','$ap_materno','$celular','$cedula','$usuario','$contrasenia','$nivel')";
    if(mysqli_query($conexion,$consulta)){
        $error = 1;
    }else{
        $error = 2;
    }
    header("location:registrar_vendedor.php?error=$error");

?>