$("#drop_zone").click(function(){
	var el = document.getElementById("fileElem");
	if (el) {
	el.click();
	}
});

$(document).ready(function(){
	$("#frm-subirImagenPin").bind("submit", function(){
        var frmData = new FormData;
        frmData.append("fileElem", $("input[name=fileElem]")[0].files[0]);
        $.ajax({
            url: "ajax/GuardarImagenPin.php",
            data: frmData,
            type: "POST",
            success: function(respuesta){
				console.log(respuesta);
				$.ajax({
				//	var parametros = 
				});
            },
            error: function(error){
                console.log(error);
            }

        });
        return false;
    });
});

$(document).on('change','#fileElem',function(){
	if(this.files && this.files[0]){
    // Creamos la Imagen
		var img = $('<img style="width: 234px;">');
    // Asignamos el atributo source , haciendo uso del método createObjectURL
		img.attr('src', URL.createObjectURL(this.files[0]));
    // Añadimos al Div
	  $('#preview').html(img);
	}
});
/*
$("#btn-AgregarPin").click(function () {

	var cadena= $("#fileElem").val();
	var arrayDeCadenas = cadena.split(/\\/);

	var parametros= "id="+$("#txt-id").val()+"&"+
					"nombreImagen="+arrayDeCadenas[2]+"&"+
					"urlImagen=img/\\/"+arrayDeCadenas[2]+"&"+
					"description="+$("#txt-descripcion").val();
	
	console.log("Informacion enviada al servidor: "+parametros);

	$("#btn-AgregarPin").attr("disabled",true);
	$.ajax({
		url:"ajax/subImagenArchivoJson.php",
		data:parametros,
		dataType:"json",
		method:"POST",
		success:function(respuesta){
			console.log(respuesta);
			subirACarpeta();
		
		},
		error:function(error){
			console.log(error);
		},
	});
}); 

function subirACarpeta() {
	
	$.ajax({
		url: "ajax/subImagenCarpImg.php",
		type: "POST", // Queremos hacer una post para subir datos
		enctype: 'multipart/form-data', // Subimos el fichero por partes
		data:"file="+$("#fileElem").val(),
		dataType:"json",
		success:function(respuesta){
			console.log(respuesta);
		},
		error:function(error){
			console.log(error);
		},
	})

}
*/