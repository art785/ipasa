<?php

class Renta {
    private $id_renta;
    private $fecha_inicio;
    private $fecha_final;
    private $id_propiedad_usuario;
    private $descuento;

    public function setId_Renta($id_renta)
    {
        $this->id_renta=$id_renta;
        return $this;
    }
    public function getId_Renta()
    {
        return $this->id_renta;
    }
    public function setFecha_Inicio($fecha_inicio)
    {
        $this->fecha_inicio=$fecha_inicio;
        return $this;
    }
    public function getFecha_Inicio()
    {
        return $this->fecha_inicio;
    }
        public function setFecha_Final($fecha_final)
    {
        $this->fecha_final=$fecha_final;
        return $this;
    }
    public function getFecha_final()
    {
        return $this->fecha_final;
    }
        public function setId_propiedad_Usuario($id_propiedad_usuario)
    {
        $this->id_propiedad_usuario=$id_propiedad_usuario;
        return $this;
    }
    public function getId_propiedad_usuario()
    {
        return $this->id_propiedad_usuario;
    }
        public function setDescuento($descuento)
    {
        $this->descuento=$descuento;
        return $this;
    }
    public function getFecha_Inicio()
    {
        return $this->descuento;
    }
}
?>
