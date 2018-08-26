<?php 
    session_start();

   //echo json_encode($_POST);
    $evitarRepeticion[] = array();
    $archivo = fopen("../data/inicio.json", "r");
    $Linea = "";
    $respuesta[] = array();
    while(($Linea = fgets($archivo))){
        $Registro = json_decode($Linea, true);
        for($i=0 ; $i<sizeof($Registro["chk-tema"]) ; $i++){
            for($j = 1 ; $j < $_POST["Tamaño"] ; $j++){
                if ($Registro["chk-tema"][$i] == $_POST["Tema".($j-1)]) {
                    for ($k=0 ; $k<sizeof($evitarRepeticion) ; $k++) {
                        if($evitarRepeticion[$k] == $Registro["urlImagen"] ){
                            break;
                        }
                        else{
                            if($k == (sizeof($evitarRepeticion)-1)){
                                $respuesta[] = $Registro;
                                $evitarRepeticion[] = $Registro["urlImagen"];
                                break;
                            }
                        }
                    }
                }
            }
        }
    }

    echo json_encode($respuesta);

    /*
    //echo json_encode($_SESSION);
    fclose($archivo);*/
 
?>