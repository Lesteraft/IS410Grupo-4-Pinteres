<?php 
    session_start();

   //echo json_encode($_POST);

    $archivo = fopen("../data/inicio.json", "r");
    $Linea = "";
    $respuesta[] = array();
    while(($Linea = fgets($archivo))){
        $Registro = json_decode($Linea, true);
        for($i=0 ; $i<sizeof($Registro["chk-tema"]) ; $i++){
            for($j = 1 ; $j < $_POST["Tamaño"] ; $j++){
                if ($Registro["chk-tema"][$i] == $_POST["Tema".($j-1)]) {
                    $respuesta[] = $Registro;
                    break;
                }
            }
        }
    }

    echo json_encode($respuesta);

    /*
    //echo json_encode($_SESSION);
    fclose($archivo);*/
 
?>