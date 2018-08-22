<?php
    //sleep(2);
    $documento = fopen("../data/".$_POST["carpetaActual"].".json", "a+");
    
    fwrite($documento, json_encode($_POST)."\n");
    
    fclose($documento);

    $respuesta["codigoRespuesta"] = 1; 
    $respuesta["mensajeRespuesta"] = "se ha logrado el objetivp";
     
    echo json_encode($respuesta);
?>