<?php
   // sleep(3);
    if(isset($_POST["nombre"])){
        mkdir("../data/".$_POST["carpetaActual"]."/".$_POST["nombre"]);

        $documento = fopen("../data/".$_POST["carpetaActual"]."/".$_POST["nombre"].".json", "w");
        fclose($documento);

        $documento = fopen("../data/".$_POST["carpetaActual"].".json", "a+");
        fwrite($documento, 
                            '{"nombre":"'.$_POST["nombre"].'","tipo":"'.$_POST["tipo"].'","fechaCreacion":"'.$_POST["fechaCreacion"].
                            '","fechaModificacion":"'.$_POST["fechaModificacion"].'","usuario":"'.$_POST["usuario"].'","tamanio":"'.$_POST["tamanio"].
                            '"}'."\n"
                        );

        $respuesta["codigoRespuesta"] = 1; 
        $respuesta["mensajeRespuesta"] = "se ha logrado el objetivp";
        
        echo json_encode($respuesta);
    }
?>