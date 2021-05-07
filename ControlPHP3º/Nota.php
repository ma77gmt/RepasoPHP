<?php

class Nota {

    private $NombreAlumno;
    private $ApellidoAlumno;
    private $NotaMedia;

    public function getNombreAlumno(){
        return $this->NombreAlumno;
    }
    public function setNombreAlumno($NombreAlumno){
        $this->NombreAlumno = $NombreAlumno;
        return $this;
    }
    public function getApellidoAlumno(){
        return $this->ApellidoAlumno;
    }
    public function setApellidpAlumno($ApellidoAlumno){
        $this->ApellidoAlumno = $ApellidoAlumno;
        return $this;
    }
    public function getNotaMedia(){
        return $this->NotaMedia;
    }
    public function setNotaMedia($NotaMedia){
        $this->NotaMedia = $NotaMedia;
        return $this;
    }

    function __construct($NombreAlumno, $ApellidoAlumno,$NotaMedia)
    {
        $this->NombreAlumno = $NombreAlumno;
        $this->ApellidoAlumno = $ApellidoAlumno;
        $this->NotaMedia = $NotaMedia;   
    }
    function __toString()
    {
        return "<br>"."Nombre= ".$this->NombreAlumno."<br>"."Apellido= ".$this->ApellidoAlumno."<br>"."Nota= ".$this->NotaMedia;
    }
}

?>