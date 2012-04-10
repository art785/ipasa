<?php

class Rol_Usuario {
    private $id_rol_usuario;
    private $id_rol;
    private $id_usuario;

    public function setId_Rol_Usuario($id_rol_usuario)
    {
        $this->id_rol_usuario=$id_rol_usuario;
        return $this;
    }
    public function getId_Rol_Usuario()
    {
        return $this->id_rol_usuario;
    }
    public function setId_Rol($id_rol)
    {
        $this->id_rol=$id_rol;
        return $this;
    }
    public function getId_Rol()
    {
        return $this->id_rol;
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
