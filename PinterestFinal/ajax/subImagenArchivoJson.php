<?php
    session_start();
    if (isset($_POST)){
        
        $archivo=fopen("../data/inicio.json","a+");
        
        fwrite($archivo, json_encode($_POST)."\n");
        
        fclose($archivo);

        echo json_encode($_POST);
    }

    
?>
