<?php 
    session_start();
   /* $Archivo = fopen("data/usuarios/registro-usuarios-personal/usuarios.json", "r+");
    $Data = $Archivo;
    fwrite($Archivo, "");
    
    $Linea1 = "";
    $Linea2 = "";
    
    while(($Linea1=fgets($Data))){
        $Registro = json_decode($Linea1, true);
        if($Registro["Email"] == $_SESSION["Email"] && $Registro["Password"] == $_SESSION["Password"] ){
            $ModUsuario["Email"] = $_SESSION["Email"];
            $ModUsuario["Password"] = $_SESSION["Password"];
            $ModUsuario["TipoUsuaio"] = $_SESSION["TipoUsuadio"];
            $ModUsuario["urlImage"] = $_SESSION["urlImage"];
            fwrite($Archivo, json_encode($ModUsuario)."\n");    
        }else{
            fwrite($Archivo, json_encode($Registro)."\n");
        }
    }
*/
    session_destroy();
    header("Location: index.php"); 
?>