<?php
    include("../seguridad.php");
    if (isset($_POST['registrar'])) {
        $id_agente_venta = $_POST['id_agente_venta'];
        $tipo = $_POST['tipo'];
        $inmueble = $_POST['inmueble'];
        $zona = $_POST['zona'];
        $num_baños = $_POST['num_baños'];
        $num_bauleras = $_POST['num_bauleras'];
        $precio = $_POST['precio'];
        $tipo_pago = $_POST['tipo_pago'];
        $matraje = $_POST['matraje'];
        $num_parqueos = $_POST['num_parqueos'];
        $num_cocina = $_POST['num_cocina'];
        $garantia = $_POST['garantia'];
        $lavanderia = $_POST['num_lavanderia'];
        $num_dormitorio = $_POST['num_dormitorio'];
        $link_youtube = $_POST['link_youtube'];
        include("../coneccion.php");
        $consulta = "INSERT INTO inmueble_pre_venta VALUES(NULL,'$id_agente_venta','$inmueble','$zona','$precio','$tipo_pago','$num_dormitorio','$num_baños','$num_bauleras','$matraje','$num_parqueos','$tipo','$garantia','$num_cocina','$lavanderia','$link_youtube')";
        // preguntamos y vemos si hay algun error en la consulta
        if($consulta){
            // echo  "verdad..?<br>".$consulta;
            // si es true entonces la consulta esta bien, entonces seguimos con la aregacion a la base de datos
            mysqli_query($conexion,$consulta);
            // comenzamos a trabajar con las imagenes
            // aqui sacamos el ultimo registro que agregamos 
            $consulta = "";
            $consulta = "SELECT MAX(id_inmueble_pre_venta) as id
                        FROM inmueble_pre_venta";
            if($consulta){
                $resultado = mysqli_query($conexion,$consulta);
                $id_inmueble = mysqli_fetch_array($resultado)['id'];
                // de aqui se agregan las fotos 

                $fotos_recividas = $_FILES['fotos'];
                $arreglo_fotos = array();
                $numero_fotos = count($fotos_recividas['name']);
                // echo "<br>Numeor de fotos: ".$numero_fotos;
                $fotos_keys = array_keys($fotos_recividas);
                for($i=0 ; $i < $numero_fotos ; $i++){
                    foreach ($fotos_keys as $key) {
                        $arreglo_fotos[$i][$key] = $fotos_recividas[$key][$i];
                    }
                } 
                $consulta="";
                mkdir("img/".$inmueble.$id_inmueble);
                $q = 1;
                foreach ($arreglo_fotos as $fotosID => $foto) {
                    $foto_contenido = file_get_contents($foto['tmp_name']);
                    file_put_contents("img/".$inmueble.$id_inmueble."/".$foto['name'],$foto_contenido);
                    $ruta = "img/".$inmueble.$id_inmueble."/".$inmueble.$q.".jpg";
                    $consulta = "INSERT INTO foto_pre_venta VALUES (NULL,'$id_inmueble','$ruta')";
                    mysqli_query($conexion,$consulta);
                    $foto_contenido = null; 
                    $ruta = "";
                    rename("img/".$inmueble.$id_inmueble."/".$foto['name'],"img/".$inmueble.$id_inmueble."/".$inmueble.$q.".jpg");
                    $q++;
                }
                header("location: registrarEdificio.php?haber=Se registro con Exito!");
            }
        }
        else{
            echo "pero";
        }
    }
?>