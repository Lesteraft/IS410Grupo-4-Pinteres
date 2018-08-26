<?php
    session_start();
    $target_dir = "../img/PinImg/";
    $nombreArchivo = "IMG_".uniqid().".".pathinfo($_FILES["fileElem"]["name"], PATHINFO_EXTENSION);   
    $target_file = $target_dir . $nombreArchivo;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $_SESSION["NombreImagenSubida"] = $nombreArchivo;
    $respuesta["NombreImagenSubida"] = $nombreArchivo;
    // Compruebe si el archivo de imagen es una imagen real o una imagen falsa
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileElem"]["tmp_name"]);
        if($check !== false) {
            //$respuesta["Mensaje"] = "cargado";
            $uploadOk = 1;
        } else {
           // $respuesta["-1"] = "no pudo ser cargado";
            $uploadOk = 0;
        }
    }
    // Compruebe si $uploadOk está configurado en 0 por un error
    if ($uploadOk == 0) {
        header("Location: ../Inicio.php?opcion=Usuario");
    // si todo está bien, intenta subir el archivo
    } else {
        if (move_uploaded_file($_FILES["fileElem"]["tmp_name"], $target_file)) {
            
            $respuesta["PantallaAnterior"] = "Inicio";
            
            //echo json_encode($respuesta);
            //header("Location: ../Inicio.php");
        } else {
            //header("Location: ../Inicio.php");
        }
    }
    echo json_encode($respuesta);
?>