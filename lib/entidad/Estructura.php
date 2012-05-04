<?php

class Estructura {
	//*********** Atributos ***********//
    private $id_estructura;
    private $nombre;
    
//******************** inician set y get de Estructura ***********************//

//************************ set y get de Estructura ***************************//

    public function setId_Estructura($id_estructura)
    {
        $this->id_estructura=$id_estructura;
        return $this;
    }
    public function getId_Estructura()
    {
        return $this->id_estructura;
    }
    
//************************ set y get de Nombre *******************************//

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
