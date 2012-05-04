<?php

class Propiedad_Estructura {
	//********** Atributos **********//
    private $id_propiedad;
    private $id_estructura;
    private $cantidad;
    private $id_propiedad_estructura;
    
    
//***************** inician set y get de Propiedad_Estructura *****************//

    
//************************ set y get de Id_Prpiedad **************************//
    public function setId_Propiedad($id_propiedad)
    {
        $this->id_propiedad=$id_propiedad;
        return $this;
    }
    public function getId_Propiedad()
    {
        return $this->id_propiedad;
    }
    
//************************ set y get de Id_Estructura **************************//
    public function setId_Estructura($id_estructura)
    {
        $this->id_estructura=$id_estructura;
        return $this;
    }
    public function getId_Estructura()
    {
        return $this->id_estructura;
    }
    
//************************* set y get de Cantidad *****************************//
    public function setCantidad($cantidad)
    {
        $this->cantidad=$cantidad;
        return $this;
    }
    public function getCantidad()
    {
        return $this->cantidad;
    }
    
//******************* set y get de Id_Propiedad_Estructura ********************//
    public function setId_Propiedad_Estructura($id_propiedad_estructura)
    {
        $this->id_propiedad_estructura=$id_propiedad_estructura;
        return $this;
    }
    public function getId_Propiedad_Estructura()
    {
        return $this->id_propiedad_estructura;
    }
}
?>
