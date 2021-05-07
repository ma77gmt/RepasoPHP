<?php
include_once 'Alumno.php';
include_once 'AlumnoDAO.php';
include_once 'Usuario.php';
include_once 'UsuarioDAO.php';

class ServicioAutenticacion {
    function autenticar($user,$password){
       $usuDAO = new UsuarioDAO();
       $resultadoUsuario = $usuDAO -> obtenerUsuario($user,$password);

       if($resultadoUsuario == false){
           return false;
       } else {
           $DAOAlumno = new AlumnoDAO();
           $resultadoAlumno = $DAOAlumno ->obtenerAlumno($resultadoUsuario->getId());
            if($resultadoAlumno==false){
                return false;
            }
            else{
                //guardamos el alumno en sesion
                session_start();
                $_SESSION['alumnoAutenticado'] = $resultadoAlumno;
                return true; 
            }
       }
    }
}


?>