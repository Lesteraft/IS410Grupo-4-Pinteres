<?php
session_start();
if (isset($_FILES["perfil"]))
{
    $resultado=array();
    $file = $_FILES["perfil"];
    $nombre = $file["name"];
    $tipo = $file["type"];
    $ruta_provisional = $file['tmp_name'];
    $size = $file["size"];
    $dimensiones = getimagesize($ruta_provisional);
    $width = $dimensiones[0];
    $height = $dimensiones[1];
    $carpeta = "data/porfile-photos/";

    if ($tipo != 'image/jpg' && $tipo != 'image/jpeg' && $tipo != 'image/png' && $tipo != 'image/gif')
    {
    $resultado['codigo']=0;
    $resultado["mensaje"]="<div class='bg-danger'><center>Error, el archivo no es una imagen</center></div>"; 
    echo json_encode($resultado);
    }
    else if ($size > 1024*1024)
    {
      $resultado['codigo']=0;  
      $resultado["mensaje"]="<div class='bg-danger'><center>Error, el tamaño máximo permitido es un 1MB</center></div>";
      echo json_encode($resultado);
    }
    else if ($width > 500 || $height > 500)
    {
       $resultado['codigo']=0; 
        $resultado["mensaje"]="<div class='bg-danger'><center>Error la anchura y la altura maxima permitida es 500px</center></div>";
        echo json_encode($resultado);
    }
    else if($width < 60 || $height < 60)
    {
       $resultado['codigo']=0; 
        $resultado["mensaje"]="<div class='bg-danger'><center>Error la anchura y la altura mínima permitida es 60px</center></div>";
        echo json_encode($resultado);
    }
    else
    {
    $resultado['codigo']=0;
        $src = $carpeta.$nombre;
    move_uploaded_file($ruta_provisional, "E:/wamp64/www/proyecto/Proyecto-Twitter/data/porfile-photos/$nombre");
    $resultado['codigo']=1;
    $resultado["mensaje"]="<div class='bg-success'><center>Exito, Fotografia de Perfil Actualizada</center></div>";
    $resultado["actualizar"]=$src;
    $archivo = fopen("../data/porfile-photos/porfile-photos.json", "a+");
    fwrite($archivo, '{"usuario":"'.$_SESSION["usuario"].'", "urlFotoPerfil":"'.$src.'"}'."\n");
    fclose($archivo);
    echo json_encode($resultado);
    }
}else{
      $resultado["codigo"]=0;
       $resultado["mensaje"]="No hay archivo";
     echo json_encode($resultado);
}
?>