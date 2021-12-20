<?php
    include("../coneccion.php");
    echo $_POST['id'];
    echo $_POST['inmueble'];
    $inmueble = $_POST['inmueble'];
    $id_alquiler = $_POST['id'];

    $consulta = "SELECT *  FROM foto_".$inmueble." WHERE alquiler_id_alquiler = ".$id_alquiler;

    // if(mysqli_query($conexion,$consulta)){
    //     echo 'si';
    // }else{
    //     echo 'no';
    // }
    $datos = mysqli_query($conexion,$consulta);
    

    // while ($f = mysqli_fetch_array($datos)){
        $f = mysqli_fetch_array($datos);
        $ruta = "../".$inmueble.'/'.'img/Oficina1/';

        $image = explode('/',$f[2]);

        $imagen = end($image);

        $archivo = $imagen;

        $rutaArchivo = $ruta;

        $path = $rutaArchivo.$archivo;
        $type = '';
        echo "<br>".$path;

        if (is_file($path)) {
            $size = filesize($path);
            if (function_exists('mime_content_type')) {
            $type = mime_content_type($path);
            } else if (function_exists('finfo_file')) {
            $info = finfo_open(FILEINFO_MIME);
            $type = finfo_file($info, $path);
            finfo_close($info);
            }
            if ($type == '') {
                $type = "application/force-download";
            }
            // Definir headers
            // header("Content-Type: $type");
            // header("Expires: 0");
            // header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
            // header("Content-Disposition: attachment; filename=".$archivo."");
            // header("Content-Transfer-Encoding: binary");
            // header("Content-Length: " . $size);
            // // Descargar archivo
            // readfile($path);
            // echo 'mmmm';
           } else {
            die("El archivo no existe.");
           }


    // }
// $archivo = $_REQUEST['file'];

// $rutaArchivo = "archivos/";
// $path = $rutaArchivo.$archivo;
// $type = '';

// if (is_file($path)) {
//  $size = filesize($path);
//  if (function_exists('mime_content_type')) {
//  $type = mime_content_type($path);
//  } else if (function_exists('finfo_file')) {
//  $info = finfo_open(FILEINFO_MIME);
//  $type = finfo_file($info, $path);
//  finfo_close($info);
//  }
//  if ($type == '') {
//  $type = "application/force-download";
//  }
//  // Definir headers
//  header("Content-Type: $type");
//  header("Expires: 0");
//  header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
//  header("Content-Disposition: attachment; filename=".$archivo."");
//  header("Content-Transfer-Encoding: binary");
//  header("Content-Length: " . $size);
//  // Descargar archivo
//  readfile($path);
// } else {
//  die("El archivo no existe.");
// }








    // echo $_POST['id'];
    // echo $_POST['inmueble'];
    // $inmueble = $_POST['inmueble'];
    // $id_alquiler = $_POST['id'];

    // $consulta = "SELECT *  FROM foto_".$inmueble." WHERE alquiler_id_alquiler = ".$id_alquiler;

    // $datos = mysqli_query($conexion,$consulta);
    
    // while ($f = mysqli_fetch_array($datos)){
    //     echo '<br><b>'.$f[2].'</b>';
    //     $ruta = "../".$inmueble.'/'.$f[2];
    //     echo $ruta;
    //     // readfile($ruta);
        
    //     $imagen_url = $ruta;

    //     $image = explode('/',$f[2]);

    //     $imagen = end($image);


    //     // var_dump($image);

    //     $result=file_get_contents($imagen_url);

    //     file_put_contents($imagen, $result);

    //     echo "holas";
    // }




    // echo "<br><br><br><br>";
    // var_dump($datos);

    // echo "<br><br><br><br>";

    // echo "<br>".$consulta;
?>