<?php
include_once 'UtilConexion.php';
include_once 'Alumno.php';

class AlumnoDAO{
    function obtenerAlumno($usuarioId){
        $objetoUtilConexion = new UtilConexion();
        $nuevaConexion = $objetoUtilConexion -> ObtenerConexion();

        $sentenciaPreparada = $nuevaConexion->prepare("SELECT id, nombre, apellidos, usuarioId from Alumno WHERE usuarioId=?");
        $sentenciaPreparada->bind_param("i",$usuarioId);
        $result=$sentenciaPreparada->execute();
       
           //vemos el resultado de la ejecucion
           $resultado = $sentenciaPreparada->get_result();
           $filas=$resultado->fetch_array();//el resultado lo convierte en array
           $sentenciaPreparada->close();
   
           //en caso de que devuelva un array vacio
           if($filas == NULL){
               return false;//devuelve un usuario o false
           } else{
               //var_dump($filas);
               $id=$filas["id"];
               $AlumnoRecuperado = new Alumno($id,$filas["nombre"],$filas["apellidos"],$filas["usuarioId"]);
               return $AlumnoRecuperado;
           }
    }
}
?>