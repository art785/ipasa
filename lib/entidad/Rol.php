<?php

class Rol {
    private $id_rol;
    private $nombre;

    public function setId_Rol($id_rol)
    {
        $this->id_rol=$id_rol;
        return $this;
    }
    public function getId_Rol()
    {
        return $this->id_rol;
    }
    public function setNombre($nombre)
    {
        $this->nombre=$nombre;
        return $this;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
}
?>
