<?php

class Propiedad_Servicios {
	//*********** Atributos *********//
    private $id_propiedad;
	private $id_servicio;
	private $id_propiedad_servicio;
    private $cantidad;

    
//********************** inician set y get de Fotos ***************************//

//************************ set y get de Id_Foto *******************************//
     public function setId_Propiedad($id_propiedad)
    {
        $this->id_propiedad=$id_propiedad;
        return $this;
    }
	public function getId_Propiedad()
    {
        return  $this->id_propiedad;
    }
       
//************************ set y get de Id_Servicio *******************************//
    public function setId_Servicio($id_servicio)
    {
        $this->id_servicio=$id_servicio;
        return $this;
    }
	public function getId_Servicio()
    {
        return $this->id_servicio;
    }
    
//********************* set y get de Id_Propiedad_Servicio *************************//
    public function setId_Propiedad_Servicio($id_propiedad_servicio)
    {
       $this->id_propiedad_servicio = $id_propiedad_servicio;
       return $this;
    }
    public function getId_Propiedad_Servicio()
    {
       return $this->id_propiedad_servicio;
    }
    
//************************** set y get de Cantidad **********************************//
    public function setCantidad($cantidad)
    {
        $this->cantidad=$cantidad;
        return $this;
    }

    public function getCantidad()
    {
        return $this->cantidad;
    }
}
?>
