<?php

    if (isset($_POST)){
        
        $archivo = fopen("../data/inicio.json","r");
        $linea="";
        
        while(($linea = fgets($archivo))){
           
            $registro = json_decode($linea,true);
            
            if ($registro ["id"] == $_POST["id"] ){

                echo json_encode($registro);
                exit();
            }
            
        }
    }
?>