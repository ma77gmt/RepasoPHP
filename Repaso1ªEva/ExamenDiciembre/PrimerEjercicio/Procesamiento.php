<?php
include_once 'Libro.php';

if(isset($_POST['Titulo'])){

$titulo = $_POST['Titulo'];
$genero = $_POST['Genero'];
$anho = $_POST['Anho'];

//if(strcmp($titulo, "") === 0)

if($genero === ""){
    $genero = "Sin indicar";
}
if($anho === ""){
    $anho = 0;
}
//objeto de la clase
$datos = new Libro($titulo,$genero,$anho);

//usar to string
echo $datos;
}


?>