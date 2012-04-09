<?php

class Tipo_propiedad {
    private $id_tipo_propiedad;
    private $nombre;

    public function setId_Tipo_Propiedad($id_tipo_porpiedad)
    {
        $this->id_tipo_propiedad=$id_tipo_porpiedad;
        return $this;
    }
    public function getId_Tipo_Propiedad()
    {
        return $this->id_tipo_propiedad;
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
