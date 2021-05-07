<?php

class Coche{

    private $marca;
    private $color;

    public function getMarca(){
        return $this->marca;
    }
    public function SetMarca($marca){
        $this-> marca = $marca;
    }
    public function getColor(){
        return $this->color;
    }
    public function SetColor($color){
        $this-> color = $color;
    }

    function __construct($marca,$color){
        $this->marca = $marca;
        $this->color = $color;
    }

    public function __toString(){
        return "Marca: ".$this->getMarca()." Color:" .$this->getColor();//modelizar un objeto a string para poder imprimirlo por pantalla
    }

}

?>
