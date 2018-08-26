<?php
session_start();
$target_dir = "../img/Usuario/";
$nombreArchivo = "IMG_".uniqid().".".pathinfo($_FILES["Imagen"]["name"], PATHINFO_EXTENSION);  
$target_file = $target_dir . $nombreArchivo;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Compruebe si el archivo de imagen es una imagen real o una imagen falsa
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["Imagen"]["tmp_name"]);
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
    if (move_uploaded_file($_FILES["Imagen"]["tmp_name"], $target_file)) {
        //crear otro archivo con los datos modificados
        $ArchivoNuevo = fopen("../data/usuarios/perfiles/DatosTemporales.json", "a+");
        $ArchivoModificar = fopen("../data/usuarios/registro-usuarios-personal/usuarios.json", "r+");
        $inea = "";
        while(($linea = fgets($ArchivoModificar))){
            $registro = json_decode($linea, true);
            if ($registro["Email"] == $_SESSION["Email"] && $registro["Password"] == $_SESSION["Password"]){
                $registro["urlImage"] = "img/Usuario/".$nombreArchivo;
            }
            fwrite($ArchivoNuevo, json_encode($registro)."\n");
        }
        fclose($ArchivoModificar);
        fclose($ArchivoNuevo);
        //vaciar el archivo que se quiere modificar
        $ArchivoModificar = fopen("../data/usuarios/registro-usuarios-personal/usuarios.json", "w");
        fwrite($ArchivoModificar, "");
        fclose($ArchivoModificar);
        //llenar de nuevo el archivo con los datos ya cambiados
        $ArchivoNuevo = fopen("../data/usuarios/perfiles/DatosTemporales.json", "r");
        $ArchivoModificar = fopen("../data/usuarios/registro-usuarios-personal/usuarios.json", "a+");
        $inea = "";
        while(($linea = fgets($ArchivoNuevo))){
            $registro = json_decode($linea, true);
            fwrite($ArchivoModificar, json_encode($registro)."\n");
        }
        fclose($ArchivoModificar);
        fclose($ArchivoNuevo);
        //vaciar el archivo temoporal
        $ArchivoNuevo = fopen("../data/usuarios/perfiles/DatosTemporales.json", "w");
        fwrite($ArchivoModificar, "");
        fclose($ArchivoModificar);

        $_SESSION["urlImage"] = "img/Usuario/".$nombreArchivo;
        $_SESSION["PantallaAnterior"] = "Usuario";
        echo json_encode($respuesta);
        header("Location: ../Inicio.php");

    } else {
        echo json_encode($respuesta);
        header("Location: ../Inicio.php?opcion=Usuario");
    }
}
?>
