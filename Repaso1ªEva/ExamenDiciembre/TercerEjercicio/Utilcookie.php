<?php
include_once 'Tarea.php';

class UtilCookie{
    //proporciona metodo
    //para llamar a metodos de clase
    public function asignarValorCookie(Tarea $tarea,$tiempo=60){
        $nombre = $tarea->getNombre();
        $severidad = $tarea->getSeveridad();//lo usamos para asignar la cookie
        if(isset($_COOKIE[$nombre])){//Existe una cookie con el mismo nombre
            $severidadGuardada = $_COOKIE[$nombre];
            if($severidadGuardada<$severidad){//La cookie guardada tiene menor severidad
                setcookie($nombre,$severidad,time()+$tiempo);//Machaco la anterior cookie con la nueva
            }
        }else{
                setcookie($nombre,$severidad,time()+$tiempo);//NO habia cookie entonces la creo
            }
   
    }


}

?>