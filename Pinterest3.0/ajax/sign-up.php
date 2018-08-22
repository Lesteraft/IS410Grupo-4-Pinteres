<?php
    //echo json_encode($_POST);
    if($_POST["TipoUsuario"] == "personal"){
        $Archivo = fopen("../data/usuarios/usuarios-personal/usuarios.json", "a+");
        fwrite($Archivo, json_encode($_POST)."\n");
        fclose($Archivo);
        $Respuesta["codigo"] = 1;
        $Respuesta["mensaje"] = "Se logró registrar con éxito el usuario personal";
        echo json_encode($Respuesta);
    }else{
        $Archivo = fopen("../data/usuarios/usuarios-empresarial/usuarios.json", "a+");
        fwrite($Archivo, json_encode($_POST)."\n");
        fclose($Archivo); 
        $Respuesta["codigo"] = 1;
        $Respuesta["mensaje"] = "Se logró registrar con éxito el usuario empresarial";
        echo json_encode($Respuesta);
    }

?>