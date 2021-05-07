<?php
include_once "Acceso.php";
session_start();

if(isset($_SESSION["accesoActual"])){//Ya hay registrado un acceso
    $accesoGuardado = $_SESSION["accesoActual"];
    $tipoAcceso = $accesoGuardado->getTipo();
    if(strcmp($tipoAcceso,"administrador")===0){//decimos que si el tipo de acceso es igual a administrador que nos redirija a datosAdministrador si no a datosUsuario
        header("Location:datosAdministrador.php");//redireccion a datosAdministrador
    }else{
        header("Location:datosUsuario.php");//redireccion a datosUsuario
    }
}else{
   //no pasa nada
}  
//COOCKIE
if(!isset($_COOKIE["navegacion"])){
    setcookie("navegacion","datos.php",0);
}else{
    $valorCookie = $_COOKIE["navegacion"];
    $valorCookie =  $valorCookie."<br>"."datos.php";
    setcookie("navegacion",$valorCookie,0);
}
