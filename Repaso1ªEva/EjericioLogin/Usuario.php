<?php

class Usuario{
    private $id;
    private $login;
    private $pass;
     
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

    function __construct($id,$login,$pass)
    {
        $this->id=$id;
        $this->login=$login;
        $this->pass=$pass;
    }
}
?>