<?php
    include("seguridad.php");
    if ($_SESSION['ingreso'] == 'si') {
        // echo "pase el ingreso<br>".$_SESSION['nombre']."<br>".$_SESSION['ingreso']."<br>".$_SESSION['nivel']."<br>".$_SESSION['id_copropietario'];
        // exit;
        if ($_SESSION['nivel'] == 1) {
            header("location:admin/lista.php");
        } else{ 
            if($_SESSION['nivel'] == 2){
                header("location:admin/lista.php");
            }
        }
    } else {
       header("location:venta/listaOficinas.php?haber=INICIE SECION!");
    }
?>