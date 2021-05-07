<?php

class Jugador{
    private $nombre;
    private $demarcacion;
    private $dorsal;

   
    public function getNombre()
    {
        return $this->nombre;
    }
 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }
 
    public function getDemarcacion()
    {
        return $this->demarcacion;
    }
 
    public function setDemarcacion($demarcacion)
    {
        $this->demarcacion = $demarcacion;

        return $this;
    }

    public function getDorsal()
    {
        return $this->dorsal;
    }
 
    public function setDorsal($dorsal)
    {
        $this->dorsal = $dorsal;

        return $this;
    }

    function __construct($nombre,$demarcacion,$dorsal){
        $this->nombre = $nombre;
        $this->demarcacion = $demarcacion;
        $this->dorsal = $dorsal; 
    }
    
    function __toString()
    {
        return "<br>"."Nombre= ".$this->nombre."<br>"."Demarcacion= ".$this->demarcacion."<br>"."Dorsal= ".$this->dorsal;
    }
        
}



?>