
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pinterest</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/login/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/estilos-usuario.css">
    <link rel="stylesheet" href="fuentes/css/all.css">
    <link href="custom.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

</head>
<body >
<div>
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
</div>

<div class="columna" style="margin:3px;padding-top:24px;" id="CuerpoImg">
    
</div>

<button data-toggle="modal" data-target="#modal-Pin" type="button" class="btn btn-agregar rounded-circle">
    <i class="fas fa-plus"></i>
</button>

<!-- Crear Pin -->
<div class="modal fade" id="modal-Pin" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Crear Pin</h5>
            <button type="button" class="close btn-light rounded-circle" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            Para crear una Pin, debe de crear un archivo csv 
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="btn-AgregarPin">Crear Pin</button>
        </div>
        </div>
    </div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/controlador_inicio.js"></script>
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
                $("#"+i+" img").css("-webkit-filter","brightness(50%)","webkit-filter","brightness(50%)");
               // $("#"+i).append("<div class='float-left' style='background: transparent'>Float</div><br>");

            });

            $("#"+i).mouseleave(function(){
                $("#"+i).css("background-color","transparent");
                $("#"+i+" img").css("-webkit-filter","brightness(100%)","webkit-filter",
                "brightness(100%)");
                //$("#"+i).html("<button type='button' class='btn btn-danger style='display:none'>Danger</button>");
            });
                
        }

    </script>

</body>
</html>