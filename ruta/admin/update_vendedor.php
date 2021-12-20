<?php
    include("../coneccion.php");
    $id_administrador = $_POST['id'];
    $nombre = $_POST['nombre'];
    $ap_paterno = $_POST['ap_paterno'];
    $ap_materno = $_POST['ap_materno'];
    $cedula = $_POST['cedula'];
    $celular = $_POST['celular'];
    $usuario = $_POST['usuario'];
    $contrasenia = $_POST['contrasenia'];
    $nivel = $_POST['nivel'];
    $consulta = "UPDATE administrador
                 SET nombre = '$nombre',
                     ap_paterno = '$ap_paterno',
                     ap_materno = '$ap_materno',
                     celular = '$celular',
                     cedula = '$cedula',
                     usuario = '$usuario',
                     contrasenia = '$contrasenia',
                     nivel = '$nivel'
                WHERE idadministrador = '$id_administrador' 
    ";
    if(mysqli_query($conexion,$consulta)){
        $error = 1;
    }else{
        $error = 2;
    }
    header("location: lista_vendedores.php?error=$error");
?>