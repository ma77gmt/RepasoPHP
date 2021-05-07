<?php
include_once "Coche.php";

session_start();
$coloresImpresos=array();
if(isset($_SESSION["Todos"])){
   foreach($_SESSION["Todos"] as $coche){
       $miColor = $coche -> getcolor();
       $miColor = strtoupper($miColor);
       if(!isset($coloresImpresos[$miColor])){
            $valorCookie=$_COOKIE[$miColor];
            echo "<br>------VALORES DE $miColor ------<br><br>";
            echo "En la Cookie:<br>";
            echo $valorCookie;
            $arrayCoches = $_SESSION[$miColor];
            echo "<br>En la Sesion:<br>";
            foreach($arrayCoches as $cocheColor){
                echo"<br>";
                echo $cocheColor;
            }
       
        }
        $coloresImpresos[$miColor]=1;
    }
}