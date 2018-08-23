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
                    `<a class="card" style="padding:8px; margin:3px; display: inline-block; position:relative;" id="${respuesta[i].id}">
                        <img class="card-img-top" src="img/${respuesta[i].imagen}">
                        <div class="card-body row">
                            <h4 class="card-text letraNav">${respuesta[i].NombreImagen}</h4>
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



$("#btn-AgregarPin").click(function(){

});

$("#btn-cerrar-sesion").click(function(){
    console.log("se cerrará la sesion");
    window.location = "logOut.php";
});

$(document).ready(function(){     
    // otra manera de los eventos en las imagenes 
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
});

$("#btn-siguiendo").click(function(){
    $("#contenidoTotal").html('<main class="" style=" margin: 5px; padding: 0px 0px 0px 0px; max-width: 100%;"><div style=" margin: 0px 430px; position:center; text-align:left"><h4 style="color: #333; font-size: 36px; margin-top: 50px; line-height: 1.2; letter-spacing: -.4px; " class="letraNav">Sigue a personas con gustos como los tuyos para ver qué ideas nuevas y originales descubren</h4><div class="row" style="margin: 0px 0px; position:absolute;"><img class="rounded-circle" style="width: 56px; height: 56px; " src="img/FB_IMG_1487907127539.jpg" alt="Card image cap" id="" ><img class="rounded-circle" style="width: 56px; height: 56px; " src="img/FB_IMG_1487907127539.jpg" alt="Card image cap" id="" > <img class="rounded-circle" style="width: 56px; height: 56px; " src="img/FB_IMG_1487907127539.jpg" alt="Card image cap" id="" ><img class="rounded-circle" style="width: 56px; height: 56px; " src="img/FB_IMG_1487907127539.jpg" alt="Card image cap" id="" ><img class="rounded-circle" style="width: 56px; height: 56px; " src="img/FB_IMG_1487907127539.jpg" alt="Card image cap" id="" ><img class="rounded-circle" style="width: 56px; height: 56px; " src="img/FB_IMG_1487907127539.jpg" alt="Card image cap" id="" ><img class="rounded-circle" style="width: 56px; height: 56px; " src="img/FB_IMG_1487907127539.jpg" alt="Card image cap" id="" ><img class="rounded-circle" style="width: 56px; height: 56px; " src="img/FB_IMG_1487907127539.jpg" alt="Card image cap" id="" ><img class="rounded-circle" style="width: 56px; height: 56px; " src="img/FB_IMG_1487907127539.jpg" alt="Card image cap" id="" ><img class="rounded-circle" style="width: 56px; height: 56px; " src="img/FB_IMG_1487907127539.jpg" alt="Card image cap" id="" ></div><button type="button" class="btn btn-danger" style="max-width: 100%; margin-top: 65px">Ver a quién seguir</button></div></main>');
});

$("#btn-inicio").click(function(){
    mostrarImagenes();
});

$("#btn-explorar").click(function(){
    mostrarImagenesExplorar();
    $("#contenidoTotal").html('<main class="container " style=" margin: 5px; padding: 0px 0px 0px 0px; max-width: 100%;"><div><div style="padding-left: 300px;"><h3 style="color: #333; font-size: 48px; margin-top: 50px; " class="letraNav">Explorar</h3></div><div class="btn-group btn-group-lg" role="group" aria-label="" style="padding-left: 250px; margin-top: 40px;"><a type="button " class="btn  btn-light letraNav " id="btn-Explorador">Tendencias</a><a type="button " class="btn  btn-light letraNav " id="btn-Explorador">Citas célebres</a><a type="button " class="btn  btn-light letraNav " id="btn-Explorador">Arte</a><a type="button " class="btn  btn-light letraNav " id="btn-Explorador">Viajes<a><a type="button " class="btn  btn-light letraNav " id="btn-Explorador">Humor</a><a type="button " class="btn  btn-light letraNav " id="btn-Explorador">Comida<a><a type="button " class="btn  btn-light letraNav " id="btn-Explorador">Hogar</a><a type="button " class="btn  btn-light letraNav " id="btn-Explorador">Bellezatton</a><a type="button " class="btn  btn-light letraNav " id="btn-Explorador">Mas</a></div></div><div class="columna" style="margin:3px;padding-top:24px;" id="CuerpoImgEplorar"></div>');
});

function mostrarImagenesExplorar(){

	$("#CuerpoImgEplorar").html("");

	$.ajax({

        url:"ajax/ImagenesExplorar.php",
        dataType:"json",
        success: function(respuesta){
			 console.log(respuesta)

            for (var i=0;i<respuesta.length;i++){

                 $("#CuerpoImgEplorar").append(
                    `<a class="card" style="padding:8px; margin:3px; display: inline-block;" id="${respuesta[i].id}">
                        <img class="card-img-top" src="img/${respuesta[i].imagen}"  >
                        <div class="card-body row">
                            <h4 class="card-text letraNav">${respuesta[i].NombreImagen}</h4>
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