<?php
    //echo json_encode($_POST);

    session_start();

    if($_POST["TipoUsuario"] == "personal"){
        $Archivo = fopen("../data/usuarios/usuarios-personal/usuarios.json", "a+");
        fwrite($Archivo, json_encode($_POST)."\n");
        fclose($Archivo);
        $Respuesta["codigo"] = 1;
        $Respuesta["mensaje"] = "Se logró registrar con éxito el usuario personal";
        $_SESSION["Email"] = $_POST["Email"];
        $_SESSION["Password"] = $_POST["Password"];
        echo json_encode($Respuesta);
    }else{
        $Archivo = fopen("../data/usuarios/usuarios-empresarial/usuarios.json", "a+");
        fwrite($Archivo, json_encode($_POST)."\n");
        fclose($Archivo); 
        $Respuesta["codigo"] = 1;
        $Respuesta["mensaje"] = "Se logró registrar con éxito el usuario empresarial";
        $_SESSION["Email"] = $_POST["Email"];
        $_SESSION["Password"] = $_POST["Password"];
        echo json_encode($Respuesta);
    }

    


?>