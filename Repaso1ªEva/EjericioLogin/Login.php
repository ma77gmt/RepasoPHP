<?php
include_once 'ServicioAutenticacion.php';

    if(isset($_POST['usuario'])){
        $user = $_POST['usuario'];
        $password = $_POST['contrasena'];

        //llamar autenticar
        $servicio = new ServicioAutenticacion();
        $datosAlumno = $servicio -> autenticar($user,$password);

        if($datosAlumno == true){
            header('Location:DatosAlumno.php');
        } else {
            header('Location:error_login.php');
        }
    }
    

?>