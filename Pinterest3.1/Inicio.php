<?php   
include("Seguridad.php");
?>
<!DOCTYPE html>
<html lang="en" >
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
    <link href="css/estilo_subirPin.css" rel="stylesheet">
    
    
</head>
<body >
<header id="header-pint">
            <div class="navbar" style="height: 55px;">

                <div class="ocultar">
                    <img src="img/login/favicon.png">
                </div>
    
                <div style="flex: 1 1 auto;" class="a12 ocultar">
                    <div class="input-group mb-3 ocultar" id="input-navbar">
                        <div style="padding: 5px 0px; margin-right: -32px;">
                            <i class="fas fa-search faz" style="font-size: 17px !important"></i>
                        </div>
                        <input type="text" class="form-control" placeholder="Buscar" id="txt-buscar" aria-label="Username" aria-describedby="basic-addon1">
                    </div>            
                </div>
                
                <div class="navbar" id="botones-navbar" style="height: 55px;">

                    <div class="mostrar">
                        <img src="img/login/favicon.png">
                    </div>

                    <div class="mostrar cir-tras-hov" style="text-align: center; flex: none; margin-left: 10px;">
                        <i class="fas fa-search faz"></i>
                    </div> 

                    <a href="#" id="btn-inicio">
                    <div class="cir-tras-hov ocultar">
                        <div>
                            Inicio
                        </div>
                    </div>
                    </a>                                    

                    <a href="#" id="btn-siguiendo">
                    <div class="cir-tras-hov">
                            <div class="ocultar">
                                Siguiendo
                            </div>
                            <div class="mostrar">
                                <i class="fas fa-user-friends faz"></i>
                            </div>
                    </div>
                    </a>

                    <a href="#" id="btn-explorar">
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
                            <img class="rounded-circle img-thumbnail" src="<?php echo $_SESSION["urlImage"];?>" style="width: 30px;"> <?php echo $_SESSION["Nombre"];?>
                        </div>
                        <div class="mostrar">
                            <img class="rounded-circle img-thumbnail" src="<?php echo $_SESSION["urlImage"];?>" style="width: 30px;">
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
                                    <a class="dropdown-item" href="#" id="btn-cerrar-sesion">Cerrar sesión</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <hr>
    </header>


<section role="main" id="contenidoTotal"></section>
  

<button data-toggle="modal" data-target="#modal-Pin" type="button" class="btn btn-agregar rounded-circle">
    <i class="fas fa-plus"></i>
</button>

<!-- Crear Pin -->
<div class="modal fade" id="modal-Pin" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog" role="document" >
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" style="font-size: 24px; color: #333">Crear Pin</h1>
                <button type="button" class="close btn-light rounded-circle" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <button class="imagenSub" id="drop_zone">
                    <div id="preview">
                        <i class="fas fa-camera"></i><br>
                        <div>Arrastra y suelta, o haz clic para cargar</div>
                    </div>
                </button>
                <div style="margin-right: 24px;">
                    <label for="native-content-link" >Id:</label><br>
                    <input id="txt-id" class="Inputmodal form-control" type="url" placeholder="Añade la Id para este Pin"><br><br>
                    <label for="native-content-description">Descripcion:</label><br>
                    <textarea id="txt-descripcion" class="Inputmodal form-control" placeholder="Di algo más sobre este Pin" rows="6"></textarea>
                </div>
            </div>
            
            <div class="modal-footer">

                <div class="btn-group" role="group" >
                    <button type="button" class="btn btn-light" id="btn-cargarPin">Cargar Pin</button>
                    <button type="button" class="btn btn-light" id="btn-guardardSitio">Guardar desde el sitio</button>
                </div>

                <div style="right: -350px; position:relative;">
                    <button type="submit" class="btn btn-light " id="btn-AgregarPin">Listo</button>
                    
                </div>

            </div>
        </div>
    </div>
</div>


<script src="js/jquery.min.js"></script>
<script src="js/controlador_inicio.js"></script>
<script src="js/controlador_modal.js"></script>
<script src="jquery/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
    
</body>
</html>