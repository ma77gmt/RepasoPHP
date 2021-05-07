<?php
include_once 'UtilConexion.php';

class UsuarioDAO{
    function obtenerUsuario($login,$password){
        $objetoUtilConexion = new UtilConexion();
        $nuevaConexion = $objetoUtilConexion -> ObtenerConexion();

        $sentenciaPreparada = $nuevaConexion->prepare("SELECT id, login, password from Usuario WHERE login=? and password=?");
        $sentenciaPreparada->bind_param("ss",$login,$password);
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
            $usuarioRecuperado = new Usuario($id,$filas["login"],$filas["password"]);
            return $usuarioRecuperado;
        }
    }
}
?>