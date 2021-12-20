<?php
    $id_administrador = $_GET['id'];    
    
    // aqui traemos a pdf 
    require_once('../../vendor/autoload.php');
    
    // esta linea de codigo trae a la plantilla 
    require_once('modelo/modelo.php');
    
    // aqui traeremos los estilos de esa plantilla
    $css = file_get_contents('modelo/style.css');    
    $mpdf = new \Mpdf\Mpdf([
        
    ]);
    $plantilla = plantilla($id_administrador);

    $mpdf->WriteHTML($css,\Mpdf\HTMLParserMode::HEADER_CSS);
    $mpdf->WriteHTML($plantilla,\Mpdf\HTMLParserMode::HTML_BODY);

    $mpdf->Output();
?>