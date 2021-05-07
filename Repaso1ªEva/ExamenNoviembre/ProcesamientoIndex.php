<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="datos.php">DATOS</a>
    <a href="Index.html">Index</a>
</body>
</html>
<?php
include_once "Acceso.php";

//recibir datos de formulario
session_start();
$fechaAcceso = date(DATE_RFC2822);

if(isset($_GET["tipoUsuario"])){//Viene del index
    $tipoUsuario=$_GET["tipoUsuario"];//guardamos en esta variable el tipo con el que accedio, admin o usuario
    $acceso = new Acceso($tipoUsuario, $fechaAcceso);//creo un objeto donde guardo el tipo y la fecha
    $_SESSION["accesoActual"]=$acceso;//creo la sesion y guardo el objeto acceso
    

}else{//No viene del index
    if(isset($_SESSION["accesoActual"])){//Ya hay registrado un acceso
        $accesoGuardado = $_SESSION["accesoActual"];//Miro si hay un objeto y lo obtengo para guardarlo en accesoGuardado
        $accesoGuardado->setFecha ($fechaAcceso);
    }else{
        //No hago nada
    }
}

if(isset($_SESSION["accesoActual"])){//Para imprimir primero comprobamos que hayan accedido
    var_dump($_SESSION["accesoActual"]);
}else{
    echo "no hay nada guardado";
}

//COOCKIE
if(!isset($_COOKIE["navegacion"])){
    setcookie("navegacion","ProcesamientoIndex.php",0);
}else{
    $valorCookie = $_COOKIE["navegacion"];
    $valorCookie =  $valorCookie."<br>"."ProcesamientoIndex.php";
    setcookie("navegacion",$valorCookie,0);
}


