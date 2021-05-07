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
//COOCKIE
if(!isset($_COOKIE["navegacion"])){
    setcookie("navegacion","navegacion.php",0);
}else{
    $valorCookie = $_COOKIE["navegacion"];
    $valorCookie =  $valorCookie."<br>"."navegacion.php";
    setcookie("navegacion",$valorCookie,0);
}

echo $_COOKIE["navegacion"];
