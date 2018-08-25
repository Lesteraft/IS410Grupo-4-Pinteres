<?php
    
        $target_dir = "img/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            $respuesta["mensajeRespuestaSubir"]="El Archivo ". basename( $_FILES["fileToUpload"]["name"]). " ha sido cargado";
        } else {
            $respuesta["mensajeRespuestaSubir"]="Lo sentimos, hubo un error al cargar su archivo.";
        }
?>