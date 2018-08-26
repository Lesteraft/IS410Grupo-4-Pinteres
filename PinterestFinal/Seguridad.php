<?php
    session_start();
    if(!isset($_SESSION["Email"])){
        header("location: desde-login/iniciar-sesion.html");
    }
?>