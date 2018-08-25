mostrarImagenes();

function mostrarImagenes(){
	$("#contenidoTotal").html('<div class="columna" style="margin:3px;padding-top:24px;" id="CuerpoImgInicio"></div>');
	$.ajax({
        url:"ajax/ImagenesInicio.php",
        dataType:"json",
        success: function(respuesta){
			 console.log(respuesta);
            for (var i=0;i<respuesta.length;i++){
                 $("#CuerpoImgInicio").append(
                    `<a class="card" style="padding:0px; margin:0px; display: inline-block; position:relative;" id="${respuesta[i].id}">
                        <img class="card-img-top" src="${respuesta[i].urlImagen}">
                        <div class="card-body row">
                            <h4 class="card-text letraNav">${respuesta[i].Nombre}</h4>
                            <button type="button" class="btn btn-light letraNav rounded-circle btn-pin" style=" padding:6px; position: relative;left:90px; width: 24px;height: 24px;" >
                                <i class="fas fa-ellipsis-h" style="align-content: center"></i> 
                            </button>
                        </div> 
                    </a>
                    <button type="button" style="float: right; position:relative; display:none;" class="btn btn-danger evento"  id="btn-${respuesta[i].id}">Danger</button>`
                 );
            }  
        },
        error:function(error){
            console.log(error);
        }
	});
}

function EntradaMouse(cantidaCard) {
    console.log(cantidaCard);

    for (let i = 1; i <= cantidaCard; i++) {
        
        $("#"+i).mouseenter(function(){
            $("#"+i).css("background-color","#F2F2F2",); 
            $("#"+i+" img").css("-webkit-filter","brightness(50%)","webkit-filter",
            "brightness(50%)");
            $("#btn-"+i).css({"display": 'block'});//
            /*document.getElementById("#"+i).innerHTML += "<a type='button' class='btn btn-danger'>Danger</a>";*/

        });

        $("#"+i).mouseleave(function(){
            $("#"+i).css("background-color","transparent");
            $("#"+i+" img").css("-webkit-filter","brightness(100%)","webkit-filter",
            "brightness(100%)");
        });    
    }
    
}

$("#btn-cerrar-sesion").click(function(){
    console.log("se cerrará la sesion");
    window.location = "logOut.php";
});

$(document).ready(function(){     
    // otra manera de los eventos en las imagenes 

   switch($("#OpcionActual").val()){   
       case "Siguiendo":{
           mostrarPantallaSiguiendo();
           break;
       }
       case "Inicio": {
            mostrarImagenes();
            break;
       }
       case "Explorar": {
            mostrarImagenesExplorar();
            break;
       }
       case "Usuario": {
            mostrarPantallaUsuario();
            break;
       }
       default:{
            mostrarImagenes();
            break;
       }
   }

    $(".card").mouseenter(function(){
        //console.log($(this).attr("id"));
        $("#"+$(this).attr("id")).css("background-color","#F2F2F2"); 
        $("#"+$(this).attr("id")+" img").css("-webkit-filter","brightness(50%)","webkit-filter",
            "brightness(50%)");
    });
    $(".card").mouseleave(function(){
        $("#"+$(this).attr("id")).css("background-color","transparent");
        $("#"+$(this).attr("id")+" img").css("-webkit-filter","brightness(100%)","webkit-filter",
        "brightness(100%)");
    });

    $("#frm-subirImagen").bind("submit", function(){
        var frmData = new FormData;
        frmData.append("Imagen", $("input[name=Imagen]")[0].files[0]);
        $.ajax({
            url: "ajax/subirImagen.php",
            type: "POST",
            data: frmData,
            success: function(respuesta){
                console.log(respuesta);

            },
            error: function(error){
                console.log(error)
            }

        });

        return false;
    });

    
});

$("#btn-siguiendo").click(function(){
    $("#OpcionActual").val("Siguendo");
    mostrarPantallaSiguiendo();
});

$("#btn-inicio").click(function(){
    // mostrarImagenes();
    PeticionTemasInteres();
});

$("#btn-explorar").click(function(){
 
    mostrarImagenesExplorar();
    $("#contenidoTotal").html('<main class="container " style=" margin: 5px; padding: 0px 0px 0px 0px; max-width: 100%;"><div><div style="padding-left: 300px;"><h3 style="color: #333; font-size: 48px; margin-top: 50px; " class="letraNav">Explorar</h3></div><div class="btn-group btn-group-lg" role="group" aria-label="" style="padding-left: 250px; margin-top: 40px;"><a type="button " class="btn  btn-light letraNav " id="btn-Explorador">Tendencias</a><a type="button " class="btn  btn-light letraNav " id="btn-Explorador">Citas célebres</a><a type="button " class="btn  btn-light letraNav " id="btn-Explorador">Arte</a><a type="button " class="btn  btn-light letraNav " id="btn-Explorador">Viajes<a><a type="button " class="btn  btn-light letraNav " id="btn-Explorador">Humor</a><a type="button " class="btn  btn-light letraNav " id="btn-Explorador">Comida<a><a type="button " class="btn  btn-light letraNav " id="btn-Explorador">Hogar</a><a type="button " class="btn  btn-light letraNav " id="btn-Explorador">Bellezatton</a><a type="button " class="btn  btn-light letraNav " id="btn-Explorador">Mas</a></div></div><div class="columna" style="margin:3px;padding-top:24px;" id="CuerpoImgEplorar"></div>');
});

function mostrarImagenesExplorar(){

	$("#CuerpoImgEplorar").html("");

    $.ajax({
        url:"ajax/ImagenesInicio.php",
        dataType:"json",
        success: function(respuesta){
			 console.log(respuesta);
            for (var i=0;i<respuesta.length;i++){
                $("#CuerpoImgEplorar").append(
                    `<a class="card" style="padding:8px; margin:3px; display: inline-block;" id="${respuesta[i].id}">
                        <img class="card-img-top" src="${respuesta[i].urlImagen}"  >
                        <div class="card-body row">
                            <h4 class="card-text letraNav">${respuesta[i].nombreImagen}</h4>
                            <button type="button" class="btn btn-light letraNav rounded-circle btn-pin" style=" padding:6px; position: relative;left:90px; width: 24px;height: 24px;" >
                                <i class="fas fa-ellipsis-h" style="align-content: center"></i> </button>
                            </button>
                        </div>
                        <button type="button" class="btn btn-danger" style="display:none">Danger</button>
                    </a>`
                 );
            }  
        },
        error:function(error){
            console.log(error);
        }
	});
}


$("#btn-usuario").click(function(){
    mostrarPantallaUsuario();
});

function mostrarPantallaUsuario(){
    $("#contenidoTotal").html("");
    $.ajax({
        url: "ajax/InformacionUsuario.php",
        dataType: "json",

        success: function(respuesta){
            console.log(respuesta);

            $("#contenidoTotal").html(` <div id="cuerpoUsuario">
            <main class="container">
                <div class="row">
                    <div  class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div id="encabezadoInformacion">
                            <div>
                                <h4 id="nombreUsuario">${respuesta.Nombre}</h4>
                                <div class="navbar" id="InformacionUsuario">
                                    <button  type="button" class="btn btn-light rounded-circle"><i class="fas fa-upload"></i></button>
                                    <a href="#">5 followers</a>
                                    <a href="#">12 followers</a>
                                </div>
                            </div>
                            <div class="navbar">
                                <button type="button" class="btn rounded-circle btn-light" >Tablero</button>
                                <button type="button" class="btn rounded-circle btn-light" >Pines</button>
                                <button type="button" class="btn rounded-circle btn-light" >Pines probados</button>
                                <button type="button" class="btn rounded-circle btn-light" >Temas</button>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-6">
                            <a class="card" id="crearTablero">
                                <div class="card-body row">
                                    <button type="button" style="float: right; position:relative;" class="btn btn-danger rounded-circle"> <i class="fas fa-plus"></i></button>
                                </div>
                            </a>
                            <div id="txt-crearTablero">
                                CREAR TABLERO
                            </div>
                        </div>
                    </div>
                    <div  class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <button data-toggle="modal" data-target="#modalImagen" id="encabezadoFoto" class="rounded-circle" style=""><img style="width: 250px; height: 250px;" class="rounded-circle" src="${respuesta.urlImage}" alt="15px"></button>

                    </div>
                </div>
            </main>
        </div>
        <!-- Modal -->
            <div class="modal fade" id="modalImagen" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Cambiar imagen de perfil</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <img style="width: 250px; height: 250px" class="rounded-circle" src="${respuesta.urlImage}" alt="15px">
                </div>
                <form id="frm-subirImagen" action="ajax/subirImagenPerfil.php" method="post" enctype="multipart/form-data">
                    <input type="file" value="Cargar Imagen" name="Imagen" id="fileToUpload">
                    <div class="modal-footer">
                    <div>
                        <input type="submit"  value="Subir Imagen" name="submit" id="btn-subirImage" class="btn btn-danger">
                        <button data-dismiss="modal" class="btn btn-secondary">Cerrar</button>
                    </div>
                </form>
                </div>
              </div>
            </div>
          </div>`);
        },
        error: function(error){
            console.log(error);
        }

    });
}

function mostrarPantallaSiguiendo(){
    $.ajax({
        url: "ajax/gustos.php",
        dataType: "json",
        success: function(respuesta){
            console.log(respuesta.Temas);
            if(respuesta.codigo == 1){
                var parametros = "";
                for(var i=0;i<(respuesta.Temas.length+1) ; i++){
                    if(i==0){
                        parametros ="Tamaño="+(respuesta.Temas.length+1)+"&";
                    }else{
                        parametros = parametros + "Tema"+(i-1)+"="+respuesta.Temas[i-1]+"&";
                    }
                }
                console.log(parametros);
                $.ajax({
                    url: "ajax/BuscarImgTemas.php",
                    data: parametros,
                    method: "POST",
                    dataType: "json",
                    success: function(respuesta){
                        console.log(respuesta);
                        $("#contenidoTotal").html(
                            `<main class="" style=" margin: 5px; padding: 0px 0px 0px 0px; max-width: 100%;">
                                <div style=" margin: 0px 430px; position:center; text-align:left">
                                    <h4 style="color: #333; font-size: 36px; margin-top: 50px; line-height: 1.2; letter-spacing: -.4px; " class="letraNav">Sigue a personas con gustos como los tuyos para ver qué ideas nuevas y originales descubren</h4>
                                    <div class="row" style="margin: 0px 0px; position:absolute;" id="ImagenesSiguiendo">
                                    </div>
                                    <button type="button" class="btn btn-danger" style="max-width: 100%; margin-top: 65px" id="SeguirAMas">Ver a quién seguir</button>
                                </div>
                            </main>`
                        );
                        for (var j=0 ; j<respuesta.length ; j++) {
                            $("#ImagenesSiguiendo").append(
                                `<img class="rounded-circle" style="width: 56px; height: 56px; " src="${respuesta[i].urlImagen}" alt="Card image cap" id="" >`
                            );
                        }
                        
                    },
                    error: function(error){
                        console.log(error);
                    }
                });
                
            }
        },
        error: function(error){
            console.log(error);
        }
    });
}


function PeticionTemasInteres(){
    $.ajax({
        url: "ajax/gustos.php",
        dataType: "json",
        success: function(respuesta){
            console.log(respuesta.Temas);
            if(respuesta.codigo == 1){
                var parametros = "";
                for(var i=0;i<(respuesta.Temas.length+1) ; i++){
                    if(i==0){
                        parametros ="Tamaño="+(respuesta.Temas.length+1)+"&";
                    }else{
                        parametros = parametros + "Tema"+(i-1)+"="+respuesta.Temas[i-1]+"&";
                    }
                }
                console.log(parametros);
                $.ajax({
                    url: "ajax/BuscarImgTemas.php",
                    data: parametros,
                    method: "POST",
                    dataType: "json",
                    success: function(respuesta){
                        console.log(respuesta);
                        $("#contenidoTotal").html('<div class="columna" style="margin:3px;padding-top:24px;" id="CuerpoImgInicio"></div>');
                        for (var i=1;i<respuesta.length;i++){
                            $("#CuerpoImgInicio").append(
                               `<a class="card" style="padding:0px; margin:0px; display: inline-block; position:relative;" id="${respuesta[i].id}">
                                   <img class="card-img-top" src="${respuesta[i].urlImagen}">
                                   <div class="card-body row">
                                       <h4 class="card-text letraNav">${respuesta[i].Nombre}</h4>
                                       <button type="button" class="btn btn-light letraNav rounded-circle btn-pin" style=" padding:6px; position: relative;left:90px; width: 24px;height: 24px;" >
                                           <i class="fas fa-ellipsis-h" style="align-content: center"></i> 
                                       </button>
                                   </div> 
                               </a>
                               <button type="button" style="float: right; position:relative; display:none;" class="btn btn-danger evento"  id="btn-${respuesta[i].id}">Danger</button>`
                            );
                       } 
                        
                    },
                    error: function(error){
                        console.log(error);
                    }
                });
                
            }
        },
        error: function(error){
            console.log(error);
        }
    });
}