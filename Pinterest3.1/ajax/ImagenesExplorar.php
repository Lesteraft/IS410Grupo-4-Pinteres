<?php

    $archivo = fopen("../data/explorar.json","r");
    $linea="";
    $imagenes=array();
    
    while(($linea = fgets($archivo))){
        $registro = json_decode($linea,true);
        $imagenes[] = $registro;
    }

    echo json_encode($imagenes);

    fclose($archivo);


?>