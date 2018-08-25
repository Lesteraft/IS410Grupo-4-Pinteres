
/**************indexedDB***********/



function validar(){
    if (document.getElementById("txt-email").value == "") {
        document.getElementById("txt-email").classList.remove("is-valid");
        document.getElementById("txt-email").classList.add("is-invalid");
        return false;
    }else{
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (re.test(document.getElementById("txt-email").value)){
            document.getElementById("txt-email").classList.remove("is-invalid");
            document.getElementById("txt-email").classList.add("is-valid");
            if (document.getElementById("txt-password").value == "") {
                document.getElementById("txt-password").classList.remove("is-valid");
                document.getElementById("txt-password").classList.add("is-invalid");
                

            }else{
                document.getElementById("txt-password").classList.remove("is-invalid");
                document.getElementById("txt-password").classList.add("is-valid");
                
                var parametros = "Email="+$("#txt-email").val()+"&Password="+$("#txt-password").val()+"&TipoUsuario=personal&urlImage=data/usuarios/perfiles/imagenes/vacio.png$chk-tema=";
                console.log(parametros);

                $.ajax({
                    url:"ajax/sign-up.php",
                    data: parametros,
                    dataType: "json",
                    method: "POST",
                    success: function(respuesta){
                        console.log(respuesta);
                        window.location = "Inicio.php"
                    },
                    error: function(error){
                        console.log(error);
                    }
                });
                
               
            }
        }
        else{
            document.getElementById("txt-email").classList.remove("is-valid");
            document.getElementById("txt-email").classList.add("is-invalid");
            return false;
        }
    }

    
}

function changeForm(id) {
    if (id == 'btn-personal') {
        document.getElementById("form-empresa").style.display = "none";
        document.getElementById("form-personal").style.display = "block";
        
    }else{
        if (id == 'btn-empresa'){    
            document.getElementById("form-personal").style.display = "none";
            document.getElementById("form-empresa").style.display = "block";
        }
    }
}

function validar2(){
    if (document.getElementById("txt-email2").value == "") {
        document.getElementById("txt-email2").classList.remove("is-valid");
        document.getElementById("txt-email2").classList.add("is-invalid");
    }else{
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (re.test(document.getElementById("txt-email2").value)){
            document.getElementById("txt-email2").classList.remove("is-invalid");
            document.getElementById("txt-email2").classList.add("is-valid");
            if (document.getElementById("txt-password2").value == "") {
                document.getElementById("txt-password2").classList.remove("is-valid");
                document.getElementById("txt-password2").classList.add("is-invalid");
            }else{
                document.getElementById("txt-password2").classList.remove("is-invalid");
                document.getElementById("txt-password2").classList.add("is-valid");
                if (document.getElementById("txt-nombre-empresa").value == "") {
                    document.getElementById("txt-nombre-empresa").classList.remove("is-valid");
                    document.getElementById("txt-nombre-empresa").classList.add("is-invalid");
                }else{
                    document.getElementById("txt-nombre-empresa").classList.remove("is-invalid");
                    document.getElementById("txt-nombre-empresa").classList.add("is-valid");

                    var parametros = "Email="+$("#txt-email2").val()+"&Password="+
                                    $("#txt-password2").val()+"&NombreEmpresa="+
                                    $("#txt-nombre-empresa").val()+"&TipoUsuario=empresarial"+
                                    "&Usuario="+$("#lista-desplegable-empresa").val();
                    console.log(parametros);
                    
                    $.ajax({
                        url:"ajax/sign-up.php",
                        data: parametros,
                        dataType: "json",
                        method: "POST",
                        success: function(respuesta){
                            console.log(respuesta);
                        },
                        error: function(error){
                            console.log(error);
                        }
                    });
                }
            }
        }
        else{
            document.getElementById("txt-email2").classList.remove("is-valid");
            document.getElementById("txt-email2").classList.add("is-invalid");
        }
    }  
}

function cerrar(){
    document.getElementById("mas-informacion-emergente").style.display = "none";
}

function abrir(){
    document.getElementById("mas-informacion-emergente").style.display = "block";
}


