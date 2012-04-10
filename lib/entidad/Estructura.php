<?php

class Estructura {
    private $id_estructura;
    private $nombre;

    public function setId_Estructura($id_estructura)
    {
        $this->id_estructura=$id_estructura;
        return $this;
    }
    public function getId_Estructura()
    {
        return $this->id_estructura;
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
