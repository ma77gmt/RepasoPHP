<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Datos Administrador</h1>
    <?php
    include_once "Acceso.php";
    session_start();
      if(isset($_SESSION["accesoActual"])){//Para imprimir primero comprobamos que hayan accedido
        var_dump($_SESSION["accesoActual"]);
    }else{
        echo "no hay nada guardado";
    }
    //COOCKIE
    if(!isset($_COOKIE["navegacion"])){
    setcookie("navegacion","datosAdministrador.php",0);
    }else{
    $valorCookie = $_COOKIE["navegacion"];
    $valorCookie =  $valorCookie."<br>"."datosAdministrador.php";
    setcookie("navegacion",$valorCookie,0);
}
    ?>
    <a href="datos.php">DATOS</a>
    <a href="Index.html">Index</a>
</body>
</html>