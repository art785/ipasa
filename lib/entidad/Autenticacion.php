<?php

class Autenticacion {
    private $id_autenticacion;
    private $alias;
    private $password;
    private $id_usuario;

    public function setId_Autenticacion($id_autenticacion)
    {
        $this->id_autenticacion=$id_autenticacion;
        return $this;
    }
    public function getId_Autenticacion()
    {
        return $this->id_autenticacion;
    }
    
     public function setAlias($alias)
    {
        $this->alias=$alias;
        return $this;
    }
    public function getAlias()
    {
        return $this->alias;
    }

    public function setPassword($password)
    {
        $this->password=$password;
        return $this;
    }
    public function getPassword()
    {
        return $this->password;
    }

    public function setId_Usuario($id_usuario)
    {
        $this->id_usuario=$id_usuario;
        return $this;
    }
    public function getId_Usuario()
    {
        return $this->id_usuario;
    }
}
?>
