<?php
    if(isset($_GET['tipos'])){
        $tipos = $_GET['tipos'];
        if($tipos==="Todos")
        {
            header('Location:mostrarTodos.php');
        }elseif($tipos==="aprobados"){
            header('Location:mostrarAprobados.php');
        }else{
            header('Location:mostrarSuspensos.php');
        }
    }


?>