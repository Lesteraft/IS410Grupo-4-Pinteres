<?php

    session_start();

    $archivo = fopen("../data/usuarios/usuarios-personal/usuarios.json", "r");
    $Linea = "";
    while(($Linea = fgets($archivo))){
        $Registro = json_decode($Linea, true);
        if($Registro["Email"] == $_POST["Email"] && $Registro["Password"] == $_POST["Password"]){
            $_SESSION["Email"] = $_POST["Email"];
            $_SESSION["Password"] = $_POST["Password"];
            echo '{"codigo":0,"mensaje":"Usuario logueado con exito"}';
            exit();
        }
    }
    fclose($archivo);

    $Archivo = fopen("../data/usuarios/usuarios-empresarial/usuarios.json", "r");
    $linea = "";
    while(($linea = fgets($Archivo))){
        $registro = json_decode($linea, true);
        if($registro["Email"] == $_POST["Email"] && $registro["Password"] == $_POST["Password"]){
            $_SESSION["Email"] = $_POST["Email"];
            $_SESSION["Password"] = $_POST["Password"];
            echo '{"codigo":0,"mensaje":"Usuario logueado con exito"}';
            exit();
        }
    }

    fclose($Archivo);
    $Respuesta["codigo"] = 1;
    $Respuesta["mensaje"] = "No se encontró usuario!";
    echo json_encode($Respuesta);

?>