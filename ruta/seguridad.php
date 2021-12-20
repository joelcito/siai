<?php
    session_start();
    if ($_SESSION['ingreso']!='si') {
    //    header("location:../index.php?error=inicie sesion PRIMERAMENTE!");
        header("location: 404.html");
    } 
?>