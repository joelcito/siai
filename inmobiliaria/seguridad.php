<?php
    session_start();
    if ($_SESSION['ingreso']!='si') {
       header("location:../../index.php?haber=inicie sesion PRIMERAMENTE!");
    } 
?>