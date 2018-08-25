<?php
    session_start();
    $target_dir = "../img/PinImg/";
    $nombreArchivo = "IMG_".date(YmWdHis).".".pathinfo($_FILES["fileElem"]["name"], PATHINFO_EXTENSION);   
    $target_file = $target_dir . $nombreArchivo;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $respuesta;
    
    // Compruebe si el archivo de imagen es una imagen real o una imagen falsa
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileElem"]["tmp_name"]);
        if($check !== false) {
            $respuesta["1"] =  "El archivo es una imagen - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            $respuesta["-1"] = "no pudo ser cargado";
            $uploadOk = 0;
        }
    }
    // Compruebe si $uploadOk está configurado en 0 por un error
    if ($uploadOk == 0) {
        echo json_encode($respuesta);
        header("Location: ../Inicio.php?opcion=Usuario");
    // si todo está bien, intenta subir el archivo
    } else {
        if (move_uploaded_file($_FILES["fileElem"]["tmp_name"], $target_file)) {
            $_SESSION["PantallaAnterior"] = "Inicio";
            echo json_encode($respuesta);
            header("Location: ../Inicio.php");
    
        } else {
            echo json_encode($respuesta);
            header("Location: ../Inicio.php?opcion=Usuario");
        }
    }
?>