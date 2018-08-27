<?php
    session_start();
    $archivo = fopen("../data/usuarios/registro-usuarios-personal/usuarios.json", "r");
    $linea = "";
    while(($linea = fgets($archivo))){
        $registro = json_decode($linea, true);
        if($registro["Email"] == $_SESSION["Email"] && $registro["Password"] == $_SESSION["Password"] ){
            if(sizeof($registro["chk-tema"]) != 0){
                $respuesta["Temas"] = $registro["chk-tema"];
                $respuesta["codigo"] = 1;
                break;
            }else{
                $respuesta["codigo"] = 0; 
                break;
            }
        }
    }
    echo json_encode($respuesta);

?>