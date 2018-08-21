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
    <link rel="shortcut icon" href="img/login/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/estilos-usuario.css">
    <link rel="stylesheet" href="fuentes/css/all.css">
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>
<body style="display:block">
<header id="header-pint">
            <div class="navbar">

                <div class="ocultar">
                    <img src="img/login/favicon.png">
                </div>
    
                <div style="flex: 1 1 auto;" class="a12 ocultar">
                    <div class="input-group mb-3 ocultar" id="input-navbar">
                        <div style="padding: 5px 0px; margin-right: -26px;">
                            <i class="fas fa-search faz"></i>
                        </div>
                        <input type="text" class="form-control" placeholder="Buscar" id="txt-buscar" aria-label="Username" aria-describedby="basic-addon1">
                    </div>            
                </div>
                
                <div class="navbar" id="botones-navbar">

                    <div class="mostrar">
                        <img src="img/login/favicon.png">
                    </div>

                    <div class="mostrar cir-tras-hov" style="text-align: center; flex: none; margin-left: 10px;">
                        <i class="fas fa-search faz"></i>
                    </div> 

                    <a href="Inicio.php">
                    <div class="cir-tras-hov ocultar">
                        <div>
                            Inicio
                        </div>
                    </div>
                    </a>                                    

                    <a href="Siguiendo.html">
                    <div class="cir-tras-hov">
                            <div class="ocultar">
                                Siguiendo
                            </div>
                            <div class="mostrar">
                                <i class="fas fa-user-friends faz"></i>
                            </div>
                    </div>
                    </a>

                    <a href="Explorar.php">
                    <div class="cir-tras-hov">
                        <div class="ocultar">
                            Explorar
                        </div>
                        <div class="mostrar">
                            <i class="fas fa-compass faz"></i>
                        </div>
                    </div>
                    </a>

                    <div class="cir-tras-hov aa a13" >
                        <div class="ocultar">
                            <img class="rounded-circle img-thumbnail" src="img/Usuario/2.jpg" style="width: 30px;"> Lester
                        </div>
                        <div class="mostrar">
                            <img class="rounded-circle img-thumbnail" src="img/Usuario/2.jpg" style="width: 30px;">
                        </div>
                    </div>

                    <div>
                        <div class="dropleftdown cir-tras-hov aa a13" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="" id="dropdownMenuMensajes"  >     
                                <i class="fas fa-comment-dots faz"></i>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuMensajes">
                                    <div class="tcdd" style="right: 33%;"><svg width="24" height="24"><path d="M0 24 L12 12 L24 24"></path></svg></div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="dropleftdown cir-tras-hov aa a13" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                            <div class="" id="dropdownMenuNotificaciones" >
                                    <i class="fas fa-bell faz"></i>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuNotificaciones">
                                    <div class="tcdd" style="right: 18%;"><svg width="24" height="24"><path d="M0 24 L12 12 L24 24"></path></svg></div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="dropleftdown cir-tras-hov aa a13" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="" id="dropdownMenuOpciones"  >
                                <i class="fas fa-ellipsis-h faz"></i>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuOpciones">
                                    <div class="tcdd"><svg width="24" height="24"><path d="M0 24 L12 12 L24 24"></path></svg></div>
                                    <div class="dropdown-item-text bdbxsi"><h4>Consigue una cuenta para empresas gratuita</h4></div>
                                    <div class="dropdown-item-text bdbxsi">Desbloquea herramientas profesionales como analytics y anuncios</div>
                                    <div class="bdbxsi"><button type="button" id="btn-actualizar-ahora" >Actualizar ahora</button></div>
                                    <div class="dropdown-item bdbxsi"></div>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Editar Ajustes</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Obtener ayuda</a>
                                    <a class="dropdown-item" href="#">Ver términos y privacidad</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Cerrar sesión</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <hr>
    </header>
    <main class="container " style=" margin: 5px; padding: 0px 0px 0px 0px; max-width: 100%;">
        <div>

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

        <div class="row columna" style=" margin: 0px; padding: 20px 0px 0px 0px; max-width: 100%;  display:block">

            <?php
              //Forma facil
              $archivo = fopen("data/".$_GET["carpeta"].".csv", "r");
              $linea="";
              while(($linea = fgets($archivo))){
                $partes = explode(",",$linea);

                echo'<div class="card " style="max-width: 260px; padding:8px;" id="'.$partes[0].'">
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
    <script src="jquery/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
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