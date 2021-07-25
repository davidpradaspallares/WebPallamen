<?php


session_start();

$verSesion = $_SESSION['usuario'];

function CerrarSesion(){
    session_destroy();
    header("Location:iniciarSesion.php");
}

?>