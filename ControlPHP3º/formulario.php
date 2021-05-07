<?php
include_once 'Nota.php';

$nombre = $_POST['nombre'];
$apellido= $_POST['apellido'];
$nota = $_POST['nota'];

$miAlumno = new Nota($nombre,$apellido,$nota);

session_start();
if(isset($_SESSION['ArrayAlumnos'])){
    $ListaAlumnos = $_SESSION['ArrayAlumnos'];
} else {
    //si no existe lo creo vacio
    $ListaAlumnos = array();//Bandeja vacia   
}
//metenemos un alumno en la bandeja
$ListaAlumnos[] = $miAlumno;

$_SESSION['ArrayAlumnos'] = $ListaAlumnos;
///// Guardar en sesion

///// Dependiendo nota hacer una cookie para aprobados y otra para suspensos


if($nota >= 5){
    if(isset($_COOKIE['ContadorAprobado'])){
        $aprobados = $_COOKIE['ContadorAprobado'] + 1;
        setcookie('ContadorAprobado', $aprobados,0);
    }   else{
        setcookie('ContadorAprobado', '1',0) ;
    }
} else {
    if(isset($_COOKIE['ContadorSuspenso'])){
        $suspensos = $_COOKIE['ContadorSuspenso'] +1;
        setcookie('ContadorSuspenso',$suspensos,0);
    } else {
        setcookie('ContadorSuspenso','1',0);
    }
}
