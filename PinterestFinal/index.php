<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pinterest</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos-signup.css" />
    <link rel="shortcut icon" href="img/login/favicon.png">
</head>
<body>
    
    <main>
        <div>
            <div id="fondo-raro">   
                <div id="fondo-transparente">
                    
                    <main role="main" class="container">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div>
                                    <div id="formulario-login1">
                                        <div>
                                            <img id="imagen01" src="img/login/favicon.png">
                                        </div>
                                        <div id="titulo-form">
                                            <label>Te damos la bienvenida a Pinterest</label>
                                        </div>
                                        <div id="subtitulo01">
                                            <label>Encuentra nuevas ideas nuevas que probar</label>
                                        </div>
                                        <div id="text-login">
                                            <form >
                                                <div class="btn-group btn-group-toggle" data-toggle="buttons" id="btn-personal-empresa">
                                                    <button      name="option-btn" type="button" id="btn-personal" class="btn btn-ligth" onclick="changeForm('btn-personal')" >Personal</button>
                                                    <button name="option-btn" type="button" id="btn-empresa" class="btn btn-ligth" onclick="changeForm('btn-empresa')">Empresa</button>
                                                </div>
                                                <div id="form-personal" >
                                                    <div>
                                                        <div>
                                                            <input class="form-control" id="txt-email" type="email"  placeholder="Correo Electrónico">
                                                            <div class="invalid-feedback" style="margin-top: -10px;">
                                                                ups! tenemos un problema, recuerda llenar este campo y recuerde poner su correo electrónico correspondiente.
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <input class="form-control" id="txt-password" type="password" placeholder="Crea una contraseña">
                                                            <div class="invalid-feedback" style="margin-top: -10px;">
                                                                La contraseña es demasiado corta. Debe tener 6 caracteres o más.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="botones" >
                                                            <div>
                                                                <button id="btn-cont"type="button" data-toggle="modal" data-target="#exampleModal">Continuar</button>
                                                            </div>
                                                            <div style="text-align: center; font-size: 15px; font-weight: bold; color: rgb(100,100,100); overflow: hidden;">
                                                                <p style="margin-top: 5px; margin-bottom: 10px">o</p> 
                                                            </div>
                                                            <div>
                                                                <button id="botones-inicio-sesión-fb" type="button"> <img src="img/login/facebook-logo-112.png" style="float: left;"> <span>Continuar con Facebook</span></button>
                                                            </div>
                                                            <div>
                                                                <button id="btn-inicio-sesion-google" type="button"> <img src="img/login/google.png" style="float: left;"> Continuar con Google</button>
                                                            </div>
                                                    </div>
                                                </div>
                                                <div id="form-empresa">
                                                    <div>
                                                        <input type="email" placeholder="Correo electrónico" class="form-control" id="txt-email2">
                                                        <div class="invalid-feedback" style="margin-top: -10px;">
                                                            ¡Te has saltado algo! No te olvides de añadir tu dirección de correo electrónico.
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <input type="password" class="form-control" placeholder="Contraseña" id="txt-password2">
                                                        <div class="invalid-feedback" style="margin-top: -10px;">
                                                            La contraseña es demasiado corta. Debe tener 6 caracteres o más.
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <input type="text" class="form-control" placeholder="Nombre de la empresa" id="txt-nombre-empresa">
                                                        <div class="invalid-feedback" style="margin-top: -10px;">
                                                            Es necesario que llenes este campo.
                                                        </div>
                                                    </div>
                                                    <select class="form-control" id="lista-desplegable-empresa">
                                                        <option>Profesional</option>
                                                        <option>Personaje público</option>
                                                        <option>Medios de comunicación</option>
                                                        <option>Marca</option>
                                                        <option>Minorista</option>
                                                        <option>Tienda online</option>
                                                        <option>Negocio local</option>
                                                        <option>Inctitución/Organización benéfica</option>
                                                        <option>Otros</option>
                                                    </select>
                                                    <div>
                                                        <button type="button" id="btn-empresa-cuenta" onclick="validar2()">Crear cuenta</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div id="condiciones-y-politicas">
                                            <p>
                                                    Al continuar, aceptas las<a href="#">Condiciones del servicio</a>y la<a href="#">Política de privacidad</a>de Pinterest.
                                            </p>
                                        </div>
                                        <div>
                                            <div id="div-informacion" >
                                                <div id="txt-informacion">
                                                    Pinterest te ayuda a encontrar ideas que probar.
                                                </div>
                                                <button id="btn-inform" class="btn btn-primary" onclick="abrir()">Más información</button>
                                            </div> 
                                        </div>
                                    </div>
                                    <div >
                                        <button id="btn-iniciar-sesion-p" onclick="location.href='desde-login/iniciar-sesion.html';">Iniciar sesión</button>
                                    </div>
                
                                </div>
                            </div>
                        </div>
                    </main>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <footer>
                                <div>
                                        <a href="../pinterest01/desde-login/acerca-de-pinterest.html">Acerca de Pinterest</a>
                                        <a href="#">Blog</a>
                                        <a href="#">Empresas</a>
                                        <a href="#">Condiciones de servicio</a>
                                        <a href="#">Póliticas de privacidad</a>
                                        <a href="#">Ayuda</a>
                                        <a href="#">App para iPhone</a>
                                        <a href="#">App para Android</a>
                                        <a href="#">Usuarios</a>
                                        <a href="#">Colecciones</a>
                                        <a href="#">Explorar</a>
                                        <a href="#">Internacional</a>
                                </div>
                        </footer>
                    </div>
                   
                </div>
            </div>
            
        </div>
    </main>

    <div id="mas-informacion-emergente">
        <div id="boton-cerrar" onclick="cerrar()" class="rounded-circle">
                <button type="button" ><img src="img/más-información/x2.png" class="rounded-circle"></button>
        </div>
        <div id="primero-emergente">
            <div >
                <h1>Busca y planea tu próximo proyecto.</h1>
            </div>
        </div>
        <div id="boton-abajo">
            <a href="#tercer-emergente"><img src="img/más-información/abajo.png" alt=""></a>
        </div>
        <div id="segundo-emergente" >
            <table>
                <tr>        
                    <td>    
                        <div id="segundo-emergente-ro">
                            <h2>Este es tu sitio</h2>
                            <P>Explora tus intereses para encontrar las mejores ideas. A medida que descubras nuevas cosas para probar, recibirás recomendaciones personalizadas seleccionadas entre los miles de millones de ideas que ya hay en Pinterest.</P>
                        </div>
                    </td>
                    <td>
                        <div id="segundo-emergente-do">
                            <H2>Guarda, planea y prueba</H2>
                            <P>Guarda y organiza tus ideas con facilidad de la manera que prefieras. Puedes planificar cenas familiares, reformas del hogar, escapadas de fin de semana y cualquier otra cosa que quieras probar.</P>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div id="tercer-emergente">
            <table>
                <tr>
                    <td>
                        <div id="tercer-emergente-texto">
                            <h1>Regístrate para encontrar más ideas</h1>
                        </div>
                    </td>
                    <td>
                        <div id="formulario-login2">
                            <form>
                                <div id="form-personal2">
                                    <div>
                                        <div>
                                            <input class="form-control" id="txt-email3" type="email"  placeholder="Correo Electrónico">
                                            <div class="invalid-feedback" style="margin-top: -10px;">
                                                ¡Te has saltado algo! No te olvides de añadir tu dirección de correo electrónico.
                                            </div>
                                        </div>
                                        <div>
                                            <input class="form-control" id="txt-password3" type="password" placeholder="Crea una contraseña">
                                            <div class="invalid-feedback" style="margin-top: -10px;">
                                                La contraseña es demasiado corta. Debe tener 6 caracteres o más.
                                            </div>
                                        </div>
                                    </div>
                                    <div id="botones2" >
                                        <div>
                                            <button id="btn-cont2" type="button" onclick =>Continuar</button>
                                        </div>
                                        <div style="text-align: center; font-size: 15px; font-weight: bold; color: rgb(100,100,100); overflow: hidden;">
                                            <p style="margin-top: 5px; margin-bottom: 10px">o</p> 
                                        </div>
                                        <div>
                                            <button id="botones-inicio-sesión-fb2" type="button"> <img src="img/login/facebook-logo-112.png" style="float: left;"> <span>Continuar con Facebook</span></button>
                                        </div>
                                        <div>
                                            <button id="btn-inicio-sesion-google2" type="button"> <img src="img/login/google.png" style="float: left;"> Continuar con Google</button>
                                        </div>
                                    </div>
                                    <div id="condiciones-y-politicas2">
                                        <p>
                                            Al continuar, aceptas las<a href="#">Condiciones del servicio</a>y la<a href="#">Política de privacidad</a>de Pinterest.
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </td>
                </tr>
            </table>
            <div style="text-align: center;  bottom: 100%; margin-top: 5%;">
                    <a href="../pinterest01/desde-login/acerca-de-pinterest.html">Acerca de Pinterest</a>
                    <a href="#">Blog</a>
                    <a href="#">Empresas</a>
                    <a href="#">Condiciones de servicio</a>
                    <a href="#">Póliticas de privacidad</a>
                    <a href="#">Ayuda</a>
                    <a href="#">App para iPhone</a>
                    <a href="#">App para Android</a>
                    <a href="#">Usuarios</a>
                    <a href="#">Colecciones</a>
                    <a href="#">Explorar</a>
                    <a href="#">Internacional</a>
            </div>
        </div> 
    </div> 

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Una Última cosa! Dinos tus temas de interés</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <div class="table-responsive">  
                    <table class="table" >
                        <tr class="table-danger">
                            <td><label><input type="checkbox" class="chequeo" value="Comics" name="chk-tema[]">Comics</label></td>
                            <td><label><input type="checkbox" class="chequeo" value="Gatos" name="chk-tema[]">Gatos</label></td>
                            <td><label><input type="checkbox" class="chequeo" value="Perros" name="chk-tema[]">Perros</label></td>
                            <td><label><input type="checkbox" class="chequeo" value="Memes" name="chk-tema[]">Memes</label></td>
                            <td><label><input type="checkbox" class="chequeo" value="Autos" name="chk-tema[]">Autos</label></td>
                        </tr>
                        <tr >
                            <td><label><input type="checkbox" class="chequeo" value="Arte" name="chk-tema[]">Arte</label></td>
                            <td><label><input type="checkbox" class="chequeo" value="Fotografía" name="chk-tema[]">Fotografía</label></td>
                            <td><label><input type="checkbox" class="chequeo" value="Animales" name="chk-tema[]">Animales</label></td>
                            <td><label><input type="checkbox" class="chequeo" value="Anime y Manga" name="chk-tema[]">Anime y Manga</label></td>
                            <td><label><input type="checkbox" class="chequeo" value="Motos" name="chk-tema[]">Motos</label></td>
                        </tr>
                        <tr class="table-danger">
                            <td><label><input type="checkbox" class="chequeo" value="Deportes" name="chk-tema[]">Deportes</label></td>
                            <td><label><input type="checkbox" class="chequeo" value="Citas" name="chk-tema[]">Citas</label></td>
                            <td><label><input type="checkbox" class="chequeo" value="Naturaleza" name="chk-tema[]">Naturaleza</label></td>
                            <td><label><input type="checkbox" class="chequeo" value="Arquitectura" name="chk-tema[]">Arquitectura</label></td>
                            <td><label><input type="checkbox" class="chequeo" value="Famosos" name="chk-tema[]">Famosos</label></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger"  onclick = "validar()">Save changes</button>
            </div>
            </div>
        </div>
    </div>

    <script src="jquery/jquery.min.js"></script>
    <script src="js/controlador-signup.js"></script>  
    <script src="js/bootstrap.min.js"></script>
</body>
</html>