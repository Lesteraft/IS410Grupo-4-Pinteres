<?php
    //echo json_encode($_POST);
    $archivo = fopen("../data/".$_POST["ubicacion"].".json", "r");
    $linea = "";
    while(($linea = fgets($archivo))){
        $validacion = json_decode($linea, true);
        if($_POST["nombre"] == $validacion["nombre"]){
            $respuesta["codigo"] = 1;
            $respuesta["mensaje"] = "funcionó";
            echo json_encode($validacion);
            break;
        }
    }
    fclose($archivo);
?>