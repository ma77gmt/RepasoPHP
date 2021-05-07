<?php
include_once 'Nota.php';
session_start();
if(isset($_SESSION['ArrayAlumnos'])){
    $totalAlumnos = $_SESSION['ArrayAlumnos'];
    foreach($totalAlumnos as $alumno){
        echo $alumno;
    }
}

?>