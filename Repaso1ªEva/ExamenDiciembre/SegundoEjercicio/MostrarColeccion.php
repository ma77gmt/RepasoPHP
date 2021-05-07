<?php 
include_once 'Jugador.php';

session_start();

if(isset($_SESSION['listaJugadores'])){
    $pichichi = $_SESSION['listaJugadores'];
    foreach($pichichi as $a){
        echo $a;
    }
}


?>