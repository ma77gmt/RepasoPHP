<?php
class UtilConexion{
    function ObtenerConexion(){
        //Usamos MYSQLI
        $servidorBD = 'localhost';
        $usuarioBD = 'root';
        $passwordBD = '';
        $bd = 'ejercicio_jbdc';
        $con = new mysqli($servidorBD,$usuarioBD,$passwordBD,$bd);
        if($con->connect_error){ 
            return false;
        }
            return $con;
    } 
}
?>