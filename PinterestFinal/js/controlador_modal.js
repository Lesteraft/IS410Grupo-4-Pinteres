$("#drop_zone").click(function(){
	var el = document.getElementById("fileElem");
	if (el) {
	el.click();
	}
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

var nombreImgenUltima = ""; 
var Imagen = "";


$("#btn-AgregarPin").click(function(){
	if($("#fileElem").val() == 0){
		alert("Es necesario que adjuntes una foto");
	}else{
		if($("#txt-NombreImagenPin").val() == ""){
			alert("Debes darle un nombre a tu Pin");
		}else{
			if($('.chekiar:checked').length == 0){
				alert("Es necesario que selecciones al menos un tema relacionado a tu PIN");
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
							alert("se ejecuta el success de IMG");
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
