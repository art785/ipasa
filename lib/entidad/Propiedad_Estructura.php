<?php

class Propiedad_Estructura {
    private $id_propiedad;
    private $id_estructura;
    private $cantidad;
    private $id_propiedad_estructura;

    public function setId_Estructura($id_estructura)
    {
        $this->id_estructura=$id_estructura;
        return $this;
    }
    public function getId_Estructura()
    {
        return $this->id_estructura;
    }
    public function setId_Propiedad($id_propiedad)
    {
        $this->id_propiedad=$id_propiedad;
        return $this;
    }
    public function getId_Propiedad()
    {
        return $this->id_propiedad;
    }
    public function setCantidad($cantidad)
    {
        $this->cantidad=$cantidad;
        return $this;
    }
    public function getCantidad()
    {
        return $this->cantidad;
    }
        public function setCantidad($id_propiedad_estructura)
    {
        $this->id_propiedad_estructura=$id_propiedad_estructura;
        return $this;
    }
    public function getCantidad()
    {
        return $this->id_propiedad_estructura;
    }
}
?>
