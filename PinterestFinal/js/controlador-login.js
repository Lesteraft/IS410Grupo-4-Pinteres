

$("#btn-cont").click(function(){
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
                
                var parametros = "Email="+$("#txt-email").val()+"&Password="+$("#txt-password").val();
                console.log(parametros);

                $.ajax({
                    url:"../ajax/login.php",
                    data: parametros,
                    dataType: "json",
                    method: "POST",
                    success: function(respuesta){
                        console.log(respuesta);
                        window.location = "../Inicio.php?opcion=Inicio"
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
});