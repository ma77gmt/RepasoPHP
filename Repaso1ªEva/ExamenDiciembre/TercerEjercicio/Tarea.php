<?php
class Tarea{
    private $nombre;
    private $severidad;

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of severidad
     */ 
    public function getSeveridad()
    {
        return $this->severidad;
    }

    /**
     * Set the value of severidad
     *
     * @return  self
     */ 
    public function setSeveridad($severidad)
    {
        $this->severidad = $severidad;

        return $this;
    }
    function __construct($nombre,$severidad)
    {   
        $this->nombre = $nombre;
        $this->severidad = $severidad;
    }
}

?>