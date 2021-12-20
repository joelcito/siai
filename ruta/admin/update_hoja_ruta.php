<?php
    $id_edificio = $_POST['id_edificio'];
    $edificio = $_POST['edificio'];
    $cant_cop = $_POST['cant_copropietarios'];
    $zona = $_POST['zona'];
    $contacto = $_POST['contacto'];
    $celular = $_POST['celular'];
    $obs = $_POST['observacion'];
    // echo "<br>".$informe_economico."<br>".$mantenimiento_general."<br>".$personeria."<br>".$auditoria."<br>".$Limpieza_vidrio."<br>".$administracion."<br>".$porteria."<br>".$jardineria."<br>".$limpieza."<br>".$bomba;
    // echo $edificio."<br>".$cant_cop."<br>".$zona."<br>".$contacto."<br>".$celular."<br>".$obs;
    include("../coneccion.php");
    $consulta = "UPDATE hoja_ruta SET
                 edificio = '$edificio',
                 zona = '$zona',
                 nro_copropietario = '$cant_cop',
                 nom_contacto = '$contacto',
                 celular = '$celular',
                 observaciones = '$obs',
                 ";
                $consulta.=(isset($_POST['informe_economico']))? " inf_economico = '1', ":" inf_economico = '0', ";
                $consulta.=(isset($_POST['mantenimiento_general']))? " man_general = '1', ":" man_general = '0', ";
                $consulta.=(isset($_POST['personeria']))? " per_juridica = '1', ":" per_juridica = '0', ";
                $consulta.=(isset($_POST['auditoria']))? " audi = '1', ":" audi = '0', ";
                $consulta.=(isset($_POST['Limpieza_vidrio']))? " lim_vidrio = '1', ":" lim_vidrio = '0', ";
                $consulta.=(isset($_POST['administracion']))? " administracion = '1', ":" administracion = '0', ";
                $consulta.=(isset($_POST['porteria']))? " porteria = '1', ":" porteria = '0', ";
                $consulta.=(isset($_POST['jardineria']))? " jardineria = '1', ":" jardineria = '0', ";
                $consulta.=(isset($_POST['limpieza']))? " limpieza = '1', ":" limpieza = '0', ";
                $consulta.=(isset($_POST['bomba']))? " mas_bombas = '1'":" mas_bombas = '0'";
                $consulta.=" WHERE idhoja_ruta = '$id_edificio'    
                ";
    // echo "<br>".$consulta;
    // exit;
    if(mysqli_query($conexion,$consulta)){
        $error = 1;
    }
    else{
        $error = 2;
    }
    header("location: index.php?error=$error");
// ?>