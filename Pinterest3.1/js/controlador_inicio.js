mostrarImagenes();

function mostrarImagenes(){

	$("#CuerpoImg").html("");

	$.ajax({

        url:"ajax/ImagenesInicio.php",
        dataType:"json",
        success: function(respuesta){
			 console.log(respuesta)

            for (var i=0;i<respuesta.length;i++){

                 $("#CuerpoImg").append(
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