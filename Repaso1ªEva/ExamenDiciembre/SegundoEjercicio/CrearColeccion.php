<?php
include_once 'Jugador.php';

$messi = new Jugador('messi','delantero','10');
$pike = new Jugador('pike','defensa','4');
$eto = new Jugador('eto','centro','6');


$ListaJugadores[] = $messi; 
$ListaJugadores[] =$pike;
$ListaJugadores[] = $eto;

session_start();

$_SESSION['listaJugadores'] = $ListaJugadores;

header('Location:MostrarColeccion.php');

?>