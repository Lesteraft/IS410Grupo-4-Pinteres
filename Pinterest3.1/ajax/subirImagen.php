<?php

$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


echo '<script>console.log("'.$target_file.'")</script>';
// Compruebe si el archivo de imagen es una imagen real o una imagen falsa
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "El archivo es una imagen - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "El archivo no es una imagen.";
        $uploadOk = 0;
    }
}
// Verifique si el archivo ya existe
if (file_exists($target_file)) {
    echo "Lo sentimos, el archivo ya existe.";
    $uploadOk = 0;
}
// Verificar el tamaño del archivo
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Lo siento, tu archivo es demasiado grande.";
    $uploadOk = 0;
}
// Permitir ciertos formatos de archivo
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Lo sentimos, solo se permiten archivos JPG, JPEG, PNG y GIF. Es demasiado largo.";
    $uploadOk = 0;
}
// Compruebe si $uploadOk está configurado en 0 por un error
if ($uploadOk == 0) {
    echo "Lo sentimos, su archivo no fue cargado.";
// si todo está bien, intenta subir el archivo
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "El Archivo ". basename( $_FILES["fileToUpload"]["name"]). " ha sido cargado";
    } else {
        echo "Lo sentimos, hubo un error al cargar su archivo.";
    }
}
?>
