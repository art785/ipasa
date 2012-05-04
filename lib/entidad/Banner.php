<?php

class Banner {
	//********* Atributos *********//
    private $id_banner;
    private $ruta;
    private $activo;

//*********************inician set y get de Banner****************************//

//***************************set y get de Banner******************************//
    public function setId_Banner($id_banner)
    {
        $this->id_banner=$id_banner;
        return $this;
    }

    public function getId_Banner()
    {
        return $this->id_banner;
    }

//***************************set y get de Ruta********************************//
    public function setRuta($ruta)
    {
        $this->ruta=$ruta;
    }

    public function getRuta()
    {
        return$this->ruta;
    }

//*****************************set y get de Activo****************************//
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
