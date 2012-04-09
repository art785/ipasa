<?php

class Banner {
    private $id_banner;
    private $ruta;
    private $activo;

    public function setBanner($id_banner)
    {
        $this->id_banner=$id_banner;
        return $this;
    }

    public function getBanner()
    {
        return $this->id_banner;
    }

    public function setRuta($ruta)
    {
        $this->ruta=$ruta;
    }

    public function getRuta()
    {
        return$this->ruta;
    }

    public function setActivo($activo)
    {
        $this->activo=$activo;
        return $this;
    }

    public function getActivo()
    {
        return $this->activo;
    }
}
?>
