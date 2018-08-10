<?php
  //Esta linea verifica que si no hay un parametro en GET con la carpeta actual lo redireccione a inicio:
  if(!isset($_GET['carpeta']))
    header("location: explorar.php?carpeta=explorar"); //Redireccionar a otra pagina*/
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pinterest</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/login.jpg">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>
<body style="display:block">
    <nav class="navbar navbar-expand-lg navbar-expand-md navbar-light bg-light fixed-top" style="height: 64px;">

        <div>
            <button type="button" class="btn btn-light letraNav rounded-circle">
                <img src="img/login.jpg" width="29" height="29">
            </button>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    
            <div class="input-group mb-3" height="40" id="input-navbar">
                <div style="padding: 8px 0px; margin-right:-50px;" class="input-group-prepend ">
                    <i class="fas fa-search faz"></i>
                </div>
                <input type="text" class="form-control" placeholder="Buscar" id="txt-buscar" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            
            <div>
                <button type="button" class="btn btn-light letraNav " style="border-radius: 25px; height: 43px;"
                >Inicio</button>
            </div>

            <div>
                <button type="button" class="btn btn-light letraNav" style="border-radius: 25px; height: 43px;">
                    Explorar</button>
            </div>

            <div>
                <button type="button" class="btn btn-light letraNav" style="border-radius: 50px">
                        <img src="img/perfil.jpg" width="30" height="30" style="border-radius: 100px;">
                        aczayozabeth
                </button>
            </div>

            <div>
                <button type="button" class="btn btn-light letraNav rounded-circle">
                    <i class="fas fa-comment-dots"></i>
                </button>
            </div>

            <div>
                <button type="button" class="btn btn-light letraNav rounded-circle">
                    <i class="fas fa-bell"></i>
                </button>
            </div>

            <div>
                <button type="button" class="btn btn-light letraNav rounded-circle">
                    <i class="fas fa-ellipsis-h"></i>
                </button>
            </div> 
        </div> 
    </nav>

    <main class="container " style=" margin: 5px; padding: 65px 0px 0px 0px; max-width: 100%;">
        <hr>
        <div >

            <div style="padding-left: 300px;">
                <h3 style="color: #333; font-size: 48px; margin-top: 50px; " class="letraNav">Explorar</h3>
            </div>

            <div class="btn-group btn-group-lg" role="group" aria-label="" style="padding-left: 250px; margin-top: 40px;">
                    <a type="button " class="btn  btn-light letraNav " id="btn-Explorador">Tendencias</a>
                    <a type="button " class="btn  btn-light letraNav " id="btn-Explorador">Citas célebres</a>
                    <a type="button " class="btn  btn-light letraNav " id="btn-Explorador">Arte</a>
                    <a type="button " class="btn  btn-light letraNav " id="btn-Explorador">Viajes<a>
                    <a type="button " class="btn  btn-light letraNav " id="btn-Explorador">Humor</a>
                    <a type="button " class="btn  btn-light letraNav " id="btn-Explorador">Comida<a>
                    <a type="button " class="btn  btn-light letraNav " id="btn-Explorador">Hogar</a>
                    <a type="button " class="btn  btn-light letraNav " id="btn-Explorador">Bellezatton</a>
                    <a type="button " class="btn  btn-light letraNav " id="btn-Explorador">Mas</a>
            </div>

        </div>

        <div class="row" style=" margin: 0px; padding: 20px 0px 0px 0px; max-width: 100%;">

            <?php
              //Forma facil
              $archivo = fopen("data/".$_GET["carpeta"].".csv", "r");
              $linea="";
              while(($linea = fgets($archivo))){
                $partes = explode(",",$linea);

                echo'<div class="card columna " style="max-width: 260px; padding:8px;" id="'.$partes[0].'">
                        <img class="card-img-top" src="img/'.$partes[1].'" id="idImagen" >
                        <div class="card-body row">
                            <h4 class="card-text letraNav">'.$partes[2].'</h4>
                            <button type="button" class="btn btn-light letraNav rounded-circle" style=" padding:6px; position: relative;left:90px; width: 24px;height: 24px;" >
                                <i class="fas fa-ellipsis-h" style="align-content: center"></i> </button>
                            </button>
                        </div>
                    </div>';
                }
              fclose($archivo);
            ?>
        </div>
    </main>
    <script src="js/jquery.min.js"></script>
    <script src="js/controlador.js"></script>
    <script>

        var contador=0;
           
        $( ".card" ).each(function( ) {
            contador+=1;
        });
        
        console.log(contador);

        for (let i = 1; i <= contador; i++) {
            
            $("#"+i).mouseenter(function(){
                $("#"+i).css("background-color","#F2F2F2",); 
                $("#"+i+" img").css("-webkit-filter","brightness(50%)","webkit-filter",
                "brightness(50%)");
            });

            $("#"+i).mouseleave(function(){
                $("#"+i).css("background-color","transparent");
                $("#"+i+" img").css("-webkit-filter","brightness(100%)","webkit-filter",
                "brightness(100%)");
            });
                
        }

    </script>

</body>
</html>