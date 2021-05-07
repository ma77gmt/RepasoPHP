<?php
 include_once "Coche.php";

 //recibir los datos del formulario

 if(isset($_GET["marca"])){
     $mar = $_GET["marca"];
 }
 if(isset($_GET["color"])){
     $col = $_GET["color"];
 }

//creamos el objeto de tipo coche

$miCoche = new Coche($mar,$col);
var_dump($miCoche);
if($miCoche->getColor()===""){          //comparamos el color del coche que sea vacio 
     $miCoche->setColor("Sin indicar"); //por ente que salte el mensaje
}
//otra manera de comparar strings seria usar strcmp
//if(strcmp($miCoche->getColor(), "" ) === 0 )
 
//Cambiar el color a mayusculas

$ColorMayus = strtoupper($miCoche->getColor());

//----------------COOKIES----------------//

//setcookie($ColorMayus,$miCoche->getMarca($marca));Cookie que machaca los colores cada vez que se introduce uno nuevo  

$valorGuardado = "";

if(isset($_COOKIE[$ColorMayus])){
    $valorGuardado = $_COOKIE[$ColorMayus];
}

setcookie($ColorMayus,$valorGuardado."<br>".$mar);

//----------------SESION-----------------//

//Objeto Sesion Por Color guardando la coleccion de coches de ese color y tambien uno general con todos

session_start();
$listaColor = array(); //lo definimos como un array vacio
if(isset($_SESSION[$ColorMayus])){//compruebo si existe un elemento en sesion para ese color
    
    $listaColor=$_SESSION[$ColorMayus];//Lista color es un array, donde meto mediante sesion los colores de los coches
    
}
$listaColor[]=$miCoche; //metemos los coches en la lista de color

$_SESSION[$ColorMayus] = $listaColor;//Dentro de la variable sesion, que consta de clave valor, la clave es el color y el valor que le asignamos es el array de los coches

//Sesion generica donde guardamos en una lista todos los colores y coches
$listadoTodosLosCoches = array();
if(isset($_SESSION["Todos"])){//Este isset lo que hace es que va a lavarible de sesion y ve si hay un registro para todos
    $listadoTodosLosCoches=$_SESSION["Todos"];
}
$listadoTodosLosCoches[]=$miCoche;
$_SESSION["Todos"]=$listadoTodosLosCoches;


echo("<br>");
 
//si haces un echo, siempre que hagas un tostring

//redireccionar con header, usando location
 header("Location:Inicio.html");