<?php
    session_start();
    $archivo = fopen("../data/inicio.json","r");
    $linea="";
    $imagenes=array();
    
    while(($linea = fgets($archivo))){
        $registro = json_decode($linea,true);
        $imagenes[] = $registro;
    }

    $_SESSION["PantallaAnterior"] = "Inicio";
    echo json_encode($imagenes);

    fclose($archivo);


?>