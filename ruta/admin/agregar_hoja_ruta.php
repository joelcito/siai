<?php
    include("../coneccion.php");
    $id_admin = $_POST['id_administrador'];
    $nom_edifi = $_POST['edificio'];
    $can_cop = $_POST['cant_copropietarios'];
    $zona = $_POST['zona'];
    $contacto = $_POST['contacto'];
    $celular = $_POST['celular'];
    $obs = $_POST['observacion'];
    $consulta = "INSERT INTO hoja_ruta VALUES (NULL,'$nom_edifi','$zona','$can_cop','$contacto','$celular','$obs',now(),NULL,'$id_admin',";

    // echo "<br><br>******** Servicios *******<br>";
    $consulta.=(isset($_POST['informe_economico'])) ? "'1', " : "'0', ";
    $consulta.=(isset($_POST['mantenimiento_general'])) ? "'1', " : "'0', ";
    $consulta.=(isset($_POST['personeria'])) ? "'1', " : "'0', ";
    $consulta.=(isset($_POST['auditoria'])) ? "'1', " : "'0', ";
    $consulta.=(isset($_POST['Limpieza_vidrio'])) ? "'1', " : "'0', ";
    $consulta.=(isset($_POST['administracion'])) ? "'1', " : "'0', ";
    $consulta.=(isset($_POST['porteria'])) ? "'1', " : "'0', ";
    $consulta.=(isset($_POST['jardineria'])) ? "'1', " : "'0', ";
    $consulta.=(isset($_POST['limpieza'])) ? "'1', " : "'0', ";
    $consulta.=(isset($_POST['bomba'])) ? "'1') " : "'0') ";
    if(mysqli_query($conexion,$consulta)){
        $error = 1;
    }else{
        $error = 2;
    }
    header("location: index.php?error=$error");
?>