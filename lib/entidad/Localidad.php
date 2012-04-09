<?php

class Localidad {
    private $id_localidad;
    private $nombre;

    public function setId_Localidad($id_localidad)
    {
        $this->id_localidad=$id_localidad;
        return $this;
    }
    public function getId_Localidad()
    {
        return $this->id_localidad;
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
