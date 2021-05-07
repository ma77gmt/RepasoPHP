<?php
include_once 'ServicioAutenticacion.php';
include_once 'Usuario.php';

$serv= new ServicioAutenticacion();
$alumno = $serv->autenticar("mat01","12345");
var_dump($alumno);
?>