<?php

class Servicios {
	private $id_servicio;
	private $nombre;
        private $descripcion;
        private $costo;
     public function setId_Servicio($id_servicio)
    {
        $this->id_servicio=$id_servicio;
        return $this;
    }

    public function getId_Servicio()
    {
        return  $this->id_servicio;
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
    public function setDescripcion($descripcion)
    {
       $this->descripcion=$descripcion;
       return $this;
    }
    public function getDescripcion()
    {
       return $this->descripcion;
    }
    public function setCosto($costo)
    {
        $this->costo=$costo;
        return $this;
    }

    public function getCosto()
    {
        return $this->costo;
    }
}
?>
