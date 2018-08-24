var ImgArchivo ;
var all;

function handleFileSelect(evt) {

	evt.stopPropagation();
	evt.preventDefault();

	files = evt.dataTransfer.files; //FileList object.
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

		ImgArchivo = f.name;
		all = f;

		//files=f.join('');
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

$("#btn-AgregarPin").click(function () {
	
	var parametros= "id="+$("#txt-id").val()+"&"+
					"nombreImagen="+ImgArchivo+"&"+
					"urlImagen=img"+ImgArchivo+"&"+
					"description="+$("#txt-descripcion").val();

	console.log("Informacion enviada al servidor: "+parametros);
	console.log(all);
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
		}
	});

}); 

function subirACarpeta() {

	console.log(all);
	
	$.ajax({
		url: "subImagenCarpImg.php",
    	type: "POST", // Queremos hacer una post para subir datos
    	enctype: 'multipart/form-data', // Subimos el fichero por partes
    	data:{file: all },
		success:function(respuesta){
			console.log(respuesta);
		},
		error:function(error){
			console.log(error);
		}
	});

}