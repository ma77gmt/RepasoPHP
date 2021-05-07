<?php

class Alumno{
    private $id;
    private $login;
    private $pass;
    private $usuarioId;
    
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    public function getPass()
    {
        return $this->pass;
    }
 
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

    public function getUsuarioId()
    {
        return $this->usuarioId;
    }

    public function setUsuarioId($usuarioId)
    {
        $this->usuarioId = $usuarioId;

        return $this;
    }

    function __construct($id,$login,$pass,$usuarioId)
    {
        $this->id=$id;
        $this->login=$login;
        $this->pass=$pass;
        $this->usuarioId = $usuarioId;
    }

    function __toString()
    {
        return "<br>"."Id= ".$this->id."<br>"."Login= ".$this->login."<br>"."Password= ".$this->pass."<br>"."Id del Usuario".$this->usuarioId;
    }
}

?>