<?php

class Libro {
    private $titulo;
    private $genero;
    private $anhoPublicacion;

    

    /**
     * Get the value of titulo
     */ 
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */ 
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of genero
     */ 
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     *
     * @return  self
     */ 
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get the value of anhoPublicacion
     */ 
    public function getAnhoPublicacion()
    {
        return $this->anhoPublicacion;
    }

    /**
     * Set the value of anhoPublicacion
     *
     * @return  self
     */ 
    public function setAnhoPublicacion($anhoPublicacion)
    {
        $this->anhoPublicacion = $anhoPublicacion;

        return $this;
    }
    function __construct($titulo,$genero,$anhoPublicacion){
        $this->titulo = $titulo;
        $this->genero = $genero;
        $this->anhoPublicacion = $anhoPublicacion;
        }

        function __toString()//representacion de texto de este objeto, libro
        {
            $anhoPublicacionFormat=$this->anhoPublicacion;
            if($this->anhoPublicacion == 0){
                $anhoPublicacionFormat="No indicado";
            }

            return "Titulo= ".$this->titulo ."<br>"."Año= ".$anhoPublicacionFormat."<br>"."Genero= ".$this->genero;
            //return devuelve funciones a otras paginas
        }
}
?>