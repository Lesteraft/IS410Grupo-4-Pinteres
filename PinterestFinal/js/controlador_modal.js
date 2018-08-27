$("#drop_zone").click(function(){
	var el = document.getElementById("fileElem");
	if (el) {
	el.click();
	}
});

var srcImagen = ""; 

$(document).on('change','#fileElem',function(){
	if(this.files && this.files[0]){
    // Creamos la Imagen
		var img = $('<img style="width: 232px;">');
	// Asignamos el atributo source , haciendo uso del método createObjectURL
		srcImagen = URL.createObjectURL(this.files[0]);
		img.attr('src', URL.createObjectURL(this.files[0]));
    // Añadimos al Div
	  $('#preview').html(img);
	}
});


var nombreImgenUltima = ""; 
var Imagen = "";

$("#cerrarModalFiltros").click(function(){
	$("#agregarFiltroModal").modal("hide");
});

$("#btn-AgregarPin").click(function(){
	if($("#fileElem").val() == 0){
		alert("Es necesario que adjuntes una foto");
		return false;
	}else{
		if($("#txt-NombreImagenPin").val() == ""){
			alert("Debes darle un nombre a tu Pin");
			return false;
		}else{
			if($('.chekiar:checked').length == 0){
				alert("Es necesario que selecciones al menos un tema relacionado a tu PIN");
				return false;
			}else{
				$("#frm-subirImagenPin").bind("submit", function(){
					var frmData = new FormData;
					frmData.append("fileElem", $("input[name=fileElem]")[0].files[0]);
					$.ajax({
						url: "ajax/GuardarImagenPin.php",
						data: frmData,
						dataType: "json",
						method: "POST",
						contentType: false,
						processData: false,
						success: function(respuesta){
							console.log(respuesta);
							//alert("se ejecuta el success de IMG");
							nombreImgenUltima = respuesta.NombreImagenSubida;
							$.ajax({
								url: "ajax/subImagenArchivoJson.php",
								data: "Nombre="+$("#txt-NombreImagenPin").val()+"&Descripcion="+$("#txt-descripcionPin").val()+"&urlImagen=img/PinImg/"+nombreImgenUltima+"&"+$('input[name="chk-tema[]"]:checked').serialize(),
								dataType: "json",
								method: "POST",
								success: function(respuesta){
									console.log(respuesta);
									//alert("Se esjecuta success del json");
									Imagen = respuesta;
									$("#modal-Pin").modal("hide");
									$("#CuerpoImgInicio").append(`<a class="card" style="padding:8px; margin:3px; display: inline-block; position:relative;" id="${Imagen.Nombre}">
											<img class="card-img-top" src="${Imagen.urlImagen}">
											<div class="card-body row">
												<h4 class="card-text letraNav">${Imagen.Nombre}</h4>
												<button type="button" class="btn btn-light letraNav rounded-circle btn-pin" style=" padding:6px; position: relative;left:90px; width: 24px;height: 24px;" >
													<i class="fas fa-ellipsis-h" style="align-content: center"></i> 
												</button>
											</div> 
										</a>
										<button type="button" style="float: right; position:relative; display:none;" class="btn btn-danger evento"  id="">Danger</button>`);
									window.location = "Inicio.php";
								},
								error: function(error){
									console.log(error);
									alert("Se ejecuta error del json");
								}
							});
						},
						error: function(error){
							console.log(error);
							//alert("se ejecuta el error del Img");
						}
					});
					return false;
				});
			}
			
		}
		
	}
	
});

$("#btn-agregarFiltros").click(function(){
	if($("#fileElem").val() == 0){
		alert("Es necesario que adjuntes una foto");
	}else{
		$("#modalAgregarFiltros").html(
			`<button type="button" style="margin-left: 20%;" class="imagenSub" id="drop_zone2">
			<output id="preview2">
				<img style="width: 232px;" id="imgenOriginal" src="${srcImagen}">
			</output>
		</button>`
		);
		//cargarSegundaImagen();
		$('#agregarFiltroModal').modal('show');

		var imageLoader = document.getElementById('fileElem');
            var originalImage = document.getElementById("imgenOriginal");
            var filteredImageCanvas = document.getElementById("filtradoImagen");
            var filterChanger = document.getElementById("filter-changer");
            var imageUploaded = false;

            // Handle image upload into img tag
            imageLoader.addEventListener('change', function(e){
                    var reader = new FileReader();
                
                reader.onload = function(event){
                    originalImage.onload = function(){
                        console.log("Image Succesfully Loaded");
                        imageUploaded = true;
                    };
                    originalImage.src = event.target.result;
                };
                
                reader.readAsDataURL(e.target.files[0]);   
            }, false);

            filterChanger.addEventListener("change", function(e){
                var filter = filterChanger.value;
                
            if(imageUploaded && filter != "none"){
            
                // Apply filter
                LenaJS.filterImage(filteredImageCanvas, LenaJS[filter], originalImage);
            }
            }, false);
	}
});
