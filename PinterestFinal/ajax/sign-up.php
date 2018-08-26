<?php
    //echo json_encode($_POST);

    session_start();

    if($_POST["TipoUsuario"] == "personal"){
        $Archivo = fopen("../data/usuarios/registro-usuarios-personal/usuarios.json", "a+");
        fwrite($Archivo, json_encode($_POST)."\n");
        fclose($Archivo);
        $Respuesta["codigo"] = 1;
        $Respuesta["mensaje"] = "Se logró registrar con éxito el usuario personal";
        $Nombre = explode("@", $_POST["Email"]);
        $_SESSION["Nombre"] = ucfirst($Nombre[0]);
        $_SESSION["Email"] = $_POST["Email"];
        $_SESSION["Password"] = $_POST["Password"];
        $_SESSION["urlImage"] = $_POST["urlImage"];
        echo json_encode($Respuesta);
    }else{
        $Archivo = fopen("../data/usuarios/registro-usuarios-empresarial/usuarios.json", "a+");
        fwrite($Archivo, json_encode($_POST)."\n");
        fclose($Archivo); 
        $Respuesta["codigo"] = 1;
        $Respuesta["mensaje"] = "Se logró registrar con éxito el usuario empresarial";
        $_SESSION["Email"] = $_POST["Email"];
        $_SESSION["Password"] = $_POST["Password"];
        echo json_encode($Respuesta);
    }

    


?>