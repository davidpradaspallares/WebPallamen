<?php
include "validarSesion.php";

if($verSesion == null || $verSesion == ""){
    header("Location:Registrarse.php");
}else{
    header("Location:miCuenta.php");
}