<?php
    // recibiendo los datos de la lista de inmuebles 
    $id_inmueble = $_GET['id_inmueble'];
    $inmueble = $_GET['inmueble'];
    $tipo_inmueble = $_GET['tipo'];

    // haciendo la coneccion a la base de datos
    include("../coneccion.php");

    // primera consulta
    $primera_consulta = "SELECT * FROM inmueble_" . $tipo_inmueble . " ia INNER JOIN foto_" . $tipo_inmueble . " fa ON ia.id_" . $tipo_inmueble . " = fa." . $tipo_inmueble . "_id_" . $tipo_inmueble . " WHERE id_" . $tipo_inmueble . " = $id_inmueble";
    $primer_resultado = mysqli_query($conexion, $primera_consulta);
    $numero_fotos = $primer_resultado->num_rows;
    if ($numero_fotos != 0) {
        $sw = true;
        echo $primera_consulta . "<br>" . $numero_fotos;
        while ($primer_dato = mysqli_fetch_array($primer_resultado)) {
            echo "<br>../" . $tipo_inmueble . "/" . $primer_dato['foto'];
            unlink("../" . $tipo_inmueble . "/" . $primer_dato['foto']);
            if (file_exists("../" . $tipo_inmueble . "/" . $primer_dato['pdf']) && $sw) {
                // echo "<br>SIIIIIIIIIIII";
                unlink("../" . $tipo_inmueble . "/" . $primer_dato['pdf']);
                $sw = false;
            }
        }
        rmdir("../" . $tipo_inmueble . "/img/" . $inmueble . $id_inmueble);
        // iniciando la consulta que eliminara los datos
        $consulta = "DELETE FROM inmueble_" . $tipo_inmueble . " WHERE id_" . $tipo_inmueble . " = $id_inmueble";
        mysqli_query($conexion, $consulta);
        header("location: lista.php?dato=1");
    } else {
        header("location: lista.php?dato=0");
    }
?>
