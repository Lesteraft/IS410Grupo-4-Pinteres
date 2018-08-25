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


function handleFileSelect(evt) {

	evt.stopPropagation();
	evt.preventDefault();

	var files = evt.dataTransfer.files; //FileList object.
	console.log(files);

	for (var i = 0, f; f = files[i]; i++) {

		if (!f.type.match('image.*')) {
			continue;
		}
		//lectura de objeto
		var reader = new FileReader();

		reader.onload = (function(theFile) {
			return function(e) {

			$("#preview").html(['<img id="Img-subir"style="width: 234px;" src="', e.target.result,
									'" title="', escape(theFile.name), '"/>'].join(''));
			};
			
		})(f);

		// Lea en el archivo de imagen como una URL de datos.
	   reader.readAsDataURL(f);
	}
}

function handleDragOver(evt) {
	evt.stopPropagation();
	evt.preventDefault();
	evt.dataTransfer.dropEffect = 'copy'; // copia
}

// Configurar los dnd listeners.
var dropZone = document.getElementById('drop_zone');
dropZone.addEventListener('dragover', handleDragOver, false);
dropZone.addEventListener('drop', handleFileSelect, false);

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