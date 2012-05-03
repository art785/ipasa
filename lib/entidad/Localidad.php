<?php

class Localidad {
	//******* Atributos *********//
    private $id_localidad;
    private $nombre;

    
//********************** inician set y get de Localidad ****************************//

//************************ set y get de Id_Localidad *******************************//
    public function setId_Localidad($id_localidad)
    {
        $this->id_localidad=$id_localidad;
        return $this;
    }
    public function getId_Localidad()
    {
        return $this->id_localidad;
    }
    
//************************ set y get de Nombre *************************************//
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
