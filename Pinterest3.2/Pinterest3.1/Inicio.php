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
    <link rel="stylesheet" href="fuentes/css/all.css">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/estilo_subirPin.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos-usuario.css">
    <link rel="stylesheet" href="css/estilos-usuario2.css">
    
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
                        <input type="text" class="form-control" placeholder="" id="txt-buscar" aria-label="Username" aria-describedby="basic-addon1">
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

                    <div class="cir-tras-hov aa a13" id="btn-usuario" style="padding: 1px 5px;" >
                        <div class="ocultar">
                            <img class="rounded-circle img-thumbnail" src="<?php echo $_SESSION["urlImage"];?>" style="width: 50px; height: 50px"> <?php echo $_SESSION["Nombre"];?>
                        </div>
                        <div class="mostrar">
                            <img class="rounded-circle img-thumbnail" src="<?php echo $_SESSION["urlImage"];?>" style="width: 50px;">
                        </div>
                    </div>

                    <div>
                        <div class="dropleftdown cir-tras-hov aa a13" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="" id="dropdownMenuMensajes"  >     
                                <i class="fas fa-comment-dots faz"></i>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuMensajes">
                                    <div class="tcdd" style="right: 33%;"><svg width="24" height="24"><path d="M0 24 L12 12 L24 24"></path></svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="dropleftdown cir-tras-hov aa a13" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                            <div class="" id="dropdownMenuNotificaciones" >
                                    <i class="fas fa-bell faz"></i>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuNotificaciones">
                                    <div class="tcdd" style="right: 18%;"><svg width="24" height="24"><path d="M0 24 L12 12 L24 24"></path></svg>
                                    </div>
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

<button data-toggle="modal" data-target="#modal-Pin" type="button" class="btn btn-agregar rounded-circle" id="btn-pinFoto">
    <i class="fas fa-plus"></i>
</button>


<section role="main" id="contenidoTotal"></section>
  

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
            <table>
            <tr>
                <td>
                    <form id="frm-subirImagenPin" action="ajax/GuardarImagenPin.php" method="post" enctype="multipart/form-data">
                        <div>    
                            <div class="modal-body">  
                                <button type="button" class="imagenSub" id="drop_zone">
                                    <output id="preview">
                                        <i class="fas fa-camera"></i><br>
                                        <div>Arrastra y suelta, o haz clic para cargar</div>
                                    </output>
                                </button>
                                <input type="file" id="fileElem" name="fileElem" style="display:none" >
                            </div>
                        </div>  
                        <div class="btn-group" role="group" style="margin-left: auto; margin-right: auto;" >
                            <button type="submit" class="btn btn-danger" id="btn-AgregarPin">Subir Imagen</button>  
                            <button type="button" class="btn btn-secundary" data-dismiss="modal">Cancelar y Cerrar</button>
                        </div>
                    </form> 
                </td>
                <td>
                    <div style="margin-right: 0px;">
                        <label for="native-content-link" >Nombre de la Imagen:</label><br>
                        <input id="txt-NombreImagenPin" class="Inputmodal form-control" type="url" placeholder="Nombre a la Imagen"><br>
                        <label for="native-content-description">Descripcion:</label><br>
                        <textarea id="txt-descripcionPin" class="Inputmodal form-control" placeholder="Di algo más sobre este Pin" rows="3"></textarea>
                        <br>Temas que aborda tu Pin:<br>
                        <table class="table-striped">
                            <tr>
                                <td><label><input type="checkbox" value="Comics" name="chk-tema[]">Comics</label></td>
                                <td><label><input type="checkbox" value="Gatos" name="chk-tema[]">Gatos</label></td>
                            </tr>
                            <tr>
                                <td><label><input type="checkbox" value="Arte" name="chk-tema[]">Arte</label></td>
                                <td><label><input type="checkbox" value="Fotografía" name="chk-tema[]">Fotografía</label></td>
                            </tr>
                            <tr>
                                <td><label><input type="checkbox" value="Deportes" name="chk-tema[]">Deportes</label></td>
                                <td><label><input type="checkbox" value="Citas" name="chk-tema[]">Citas</label></td>
                            </tr>
                            <tr>
                                <td><label><input type="checkbox" value="Perros" name="chk-tema[]">Perros</label></td>
                                <td><label><input type="checkbox" value="Memes" name="chk-tema[]">Memes</label></td>
                            </tr>
                            <tr>
                                <td><label><input type="checkbox" value="Animales" name="chk-tema[]">Animales</label></td>
                                <td><label><input type="checkbox" value="Anime y Manga" name="chk-tema[]">Anime y Manga</label></td>
                            </tr>
                            <tr>
                                <td><label><input type="checkbox" value="Naturaleza" name="chk-tema[]">Naturaleza</label></td>
                                <td><label><input type="checkbox" value="Arquitectura" name="chk-tema[]">Arquitectura</label></td>
                            </tr>
                            <tr>
                                <td><label><input type="checkbox" value="Autos" name="chk-tema[]">Autos</label></td>
                                <td><label><input type="checkbox" value="Motos" name="chk-tema[]">Motos</label></td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
            </table>
        </div>
    </div>
</div>

<div style="display: none" >
    <input style="display: none !important;" type="text" value="<?php echo $_SESSION["PantallaAnterior"] ?>"id="OpcionActual">
</div>

<script src="jquery/jquery.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/controlador_inicio.js"></script>
<script src="js/controlador_modal.js"></script>
<script src="jquery/jquery.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>



</body>
</html>