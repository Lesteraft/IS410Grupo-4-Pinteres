mostrarImagenes();

function mostrarImagenes(){

	$("#CuerpoImg").html("");

	$.ajax({

        url:"ajax/Imagenes.php",
        dataType:"json",
        success: function(respuesta){
			 console.log(respuesta)

            for (var i=0;i<respuesta.length;i++){

                 $("#CuerpoImg").append(
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



$("#btn-AgregarPin").click(function(){

});

