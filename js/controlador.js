/**************indexedDB***********/

var db;

function abrirBD(){
    if (!("indexedDB" in window)) {
        console.error("Este navegador no soporta indexedDB")
    }else{
        console.log("este navegador soporta indexedDB");

        var solicitud = window.indexedDB.open("pinterest", 1);

        solicitud.onerror = function (evento){
            console.log("ocurrió un error");
        }

        solicitud.onsuccess = function (evento){
            console.log("se abrió la base de datos");
            db = solicitud.result;
        }

        solicitud.onupgradeneeded = function(evento){
            console.log("No existía base de datos, se creará");
            db = evento.target.result;
            db.createObjectStore("usuarios", {KetPath: "código", autoIncrement: true});

        }
    }
}

abrirBD();

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
                return false;
            }else{
                document.getElementById("txt-password").classList.remove("is-invalid");
                document.getElementById("txt-password").classList.add("is-valid");
                

                var usuario = {};
                usuario.correo = document.getElementById("txt-email").value;
                usuario.password = document.getElementById("txt-password").value;
                console.log(usuario);

                var transaccion = db.transaction(["usuarios"], "readwrite");
                var objectStoreUsuarios = transaccion.objectStore("usuarios");
                var solicitud = objectStoreUsuarios.add(usuario);

                solicitud.onerror = function (evento){
                    console.log("no se pudo insertar el registro");
                }

                solicitud.onsuccess = function (evento){
                    console.log("se logro insertar el registro");
                }

                return true;
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
        }
        else{
            document.getElementById("txt-email2").classList.remove("is-valid");
            document.getElementById("txt-email2").classList.add("is-invalid");
        }
    }

    if (document.getElementById("txt-password2").value == "") {
        document.getElementById("txt-password2").classList.remove("is-valid");
        document.getElementById("txt-password2").classList.add("is-invalid");
    }else{
        document.getElementById("txt-password2").classList.remove("is-invalid");
        document.getElementById("txt-password2").classList.add("is-valid");
    }

    if (document.getElementById("txt-nombre-empresa").value == "") {
        document.getElementById("txt-nombre-empresa").classList.remove("is-valid");
        document.getElementById("txt-nombre-empresa").classList.add("is-invalid");
    }else{
        document.getElementById("txt-nombre-empresa").classList.remove("is-invalid");
        document.getElementById("txt-nombre-empresa").classList.add("is-valid");
    }
}

function cerrar(){
    document.getElementById("mas-informacion-emergente").style.display = "none";
}

function abrir(){
    document.getElementById("mas-informacion-emergente").style.display = "block";
}


