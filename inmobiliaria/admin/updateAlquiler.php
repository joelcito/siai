<?php
include("../seguridad.php");
// recibiendo los datos
$id_inmueble = $_POST['id_inmueble'];
$inmueble = $_POST['inmueble'];
$zona = $_POST['zona'];
$cocina = $_POST['cocina'];
$banio = $_POST['banio'];
$dormitorio = $_POST['dormitorio'];
$lavanderia = $_POST['lavanderia'];
$baulera = $_POST['baulera'];
$precio = $_POST['precio'];
$cambio = $_POST['cambio'];
$superficie = $_POST['metraje'];
$garaje = $_POST['garaje'];
$garantia = $_POST['garantia'];
$link_youtube = $_POST['link_youtube'];
$urlPdf = $_POST['urlPdf'];
$tipo = $_POST['tipo'];
// end recibiendo los datos
// haciendo la coneccion
include("../coneccion.php");
// en coneccion
// echo "id del inmueble: " . $id_inmueble;
// echo "<br>inmueble: " . $inmueble;
// echo "<br>zona:  " . $zona;
// echo "<br>cocina: " . $cocina;
// echo "<br>baño: " . $banio;
// echo "<br>dormitorio: " . $dormitorio;
// echo "<br>lavanderia: " . $lavanderia;
// echo "<br>baulera: " . $baulera;
// echo "<br>precio: " . $precio;
// echo "<br>cambio: " . $cambio;
// echo "<br>superficie: " . $superficie;
// echo "<br>garaje: " . $garaje;
// echo "<br>garantia: " . $garantia;
// echo "<br>link you tube: " . $link_youtube;
// echo "<br>Url Pdf: " . $urlPdf;
// echo "<br> tipo: " . $tipo;

// desde aqui hay que enpezar a modificar las fotos
if ($_FILES["fotos"]['tmp_name']['0'] != null) {
    // echo "<h1>Estoy entrando a los cambio de fotos :(</h1>";
    // de aqui vamos comenzando la eliminacion de las antigua imagenes los archivos 
    $consulta_foto = "SELECT * FROM inmueble_" . $tipo . " ia INNER JOIN foto_" . $tipo . " ON id_" . $tipo . " = " . $tipo . "_id_" . $tipo . " WHERE id_" . $tipo . " = " . $id_inmueble;
    $resultado_fotos = mysqli_query($conexion, $consulta_foto);
    $numero_fotos = $resultado_fotos->num_rows;
    while ($dato_fotos = mysqli_fetch_array($resultado_fotos)) {
        // echo "<br>../".$tipo."/".$dato_fotos['foto'];
        // la linea de abajo elimina cado foto que exits en la carpeta
        unlink("../" . $tipo . "/" . $dato_fotos['foto']);
    }
    // echo "<br>si<br>".$consulta_foto."<br>numero de fotos ".$numero_fotos;
    // de aqui comenzaremos la eliminacion de las fotos de las urls de la base de datos
    $consulta_eliminacion = "DELETE FROM foto_" . $tipo . " WHERE " . $tipo . "_id_" . $tipo . " = " . $id_inmueble;
    // echo "<br>".$consulta_eliminacion;
    if (mysqli_query($conexion, $consulta_eliminacion)) {
        // echo "<h1>Ya hize la eliminacion de las fotos ahora vamos a subir mas fotos :)</h1>";
        // sacamos todas las fotos enviadas del formulario
        $fotos_recividas = $_FILES['fotos'];
        $arreglo_fotos = array();
        // numero de fotos que mandamos del formulario
        $numero_fotos = count($fotos_recividas['name']);
        $fotos_keys = array_keys($fotos_recividas);
        for ($i = 0; $i < $numero_fotos; $i++) {
            foreach ($fotos_keys as $key) {
                $arreglo_fotos[$i][$key] = $fotos_recividas[$key][$i];
            }
        }
        // echo "<br>";
        // var_dump($arreglo_fotos);
        // echo "<br>";
        $q = 1;
        $consulta_foto = "";
        foreach ($arreglo_fotos as $fotosID => $foto) {
            $foto_contenido = file_get_contents($foto['tmp_name']);
            file_put_contents("../" . $tipo . "/img/" . $inmueble . $id_inmueble . "/" . $foto['name'], $foto_contenido);
            $urlFoto = "img/" . $inmueble . $id_inmueble . "/" . $inmueble . $q . ".jpg";
            $consulta_foto = "INSERT INTO foto_" . $tipo . " VALUES (NULL, '$id_inmueble','$urlFoto')";
            mysqli_query($conexion, $consulta_foto);
            $foto_contenido = null;
            $urlFoto = "";
            rename("../" . $tipo . "/img/" . $inmueble . $id_inmueble . "/" . $foto['name'], "../" . $tipo . "/img/" . $inmueble . $id_inmueble . "/" . $inmueble . $q . ".jpg");
            // $urlFoto = "../".$tipo."/img/".$inmueble.$id_inmueble."/".$foto['name'];
            // echo "<br>Estas es la URL de la foto".$urlFoto;
            $q++;
        }
        // echo "<h1>Exito al subir las fotos :)</h1>";
        // echo "<br>".$numero_fotos."<br>";
        // var_dump($fotos_recividas);
        // echo "<br><br><br>";
        // var_dump($fotos_keys);
    } else {
        // echo "<h1>no se elimino las fotos</h1>";
    }
    // echo "<br>id del inmueble: ".$id_inmueble."<br>consulta: ".$consulta_eliminacion;
}
// end modificacion de fotos mmmmmm



if (!empty($_FILES['pdf']['name'])) {
    if (empty($urlPdf)) {
        $urlPdf = "";
        $urlPdf = "img/" . $inmueble . $id_inmueble . "/browser" . $inmueble . $id_inmueble . ".pdf";
    }
    move_uploaded_file($_FILES['pdf']['tmp_name'], '../' . $tipo . '/' . $urlPdf);
    // echo "<h1>Subi un nuevo PDF :)</h1>";
}

$m = "";
$consulta = "UPDATE";
if ($tipo == "venta") {
    $consulta .= " inmueble_venta";
    $m = "id_venta";
} elseif ($tipo == "alquiler") {
    $consulta .= " inmueble_alquiler";
    $m = "id_alquiler";
} elseif ($tipo == "anticretico") {
    $consulta .= " inmueble_anticretico";
    $m = "id_anticretico";
} elseif ($tipo == "pre_venta") {
    $consulta .= " inmueble_pre_venta";
    $m = "id_inmueble_pre_venta";
}
$consulta .= " SET inmueble = '$inmueble',
                                zona = '$zona',
                                precio = $precio,
                                cambio = '$cambio',
                                dormitorio = '$dormitorio',
                                banio = '$banio',
                                baulera = '$baulera',
                                metraje = '$superficie',
                                garaje = '$garaje',
                                tipo = '$tipo',
                                garantia = '$garantia',
                                cocina = '$cocina',
                                lavanderia = '$lavanderia',
                                youtube = '$link_youtube',
                                pdf = '$urlPdf'
                            WHERE $m = '$id_inmueble'";
mysqli_query($conexion, $consulta);
header("location:lista.php");
