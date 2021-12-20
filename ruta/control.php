<?php
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    include("coneccion.php");
    // $conexion = new mysqli("localhost","siaicom_siaicom","Siai_Base_Datos","siaicom_registro");
    // $conexion = new mysqli("localhost","root","","mydb");
    //$contraseña = md5($contraseña);
    $consulta = "SELECT *
                 FROM administrador
                 WHERE (usuario='$usuario' AND contrasenia='$password')";
    $resultado = mysqli_query($conexion,$consulta);
    if (mysqli_num_rows($resultado) != 0) {
            session_start();
            $_SESSION['ingreso'] = 'si';
            if ($dato = mysqli_fetch_array($resultado)) {
                $_SESSION['nivel'] = $dato['nivel'];
                $_SESSION['nombre'] = $dato['nombre'];
                $_SESSION['id_administrador'] = $dato['idadministrador'];
                $_SESSION['paterno'] = $dato['ap_paterno'];
                // echo $_SESSION['nivel']."<br>".$_SESSION['nombre']."<br>".$_SESSION['id_copropietario'];
                // exit;
            }
        header("location:admin");       
    } else {
        // header("location:../?haber=El usuario no se a registrado"); 
        header("location:index.php?error= de verificaion de datos!");
    }
             
?>