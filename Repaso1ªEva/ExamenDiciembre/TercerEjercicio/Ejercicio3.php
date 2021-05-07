<?php
include_once 'Tarea.php';
include_once 'Utilcookie.php';

$pescar = new Tarea('pescar',8);
$comer = new Tarea('comer',10);

$util = new UtilCookie();
$util -> asignarValorCookie($pescar);
$util -> asignarValorCookie($comer);

?>