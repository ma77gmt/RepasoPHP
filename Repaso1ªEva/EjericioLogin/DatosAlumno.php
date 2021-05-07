<?php
include_once 'Alumno.php';
//imprimir los datos de los alumnos por pantalla y recibir la session aqui
session_start();
$sessionAlumno = $_SESSION['alumnoAutenticado'];

echo $sessionAlumno;
?>