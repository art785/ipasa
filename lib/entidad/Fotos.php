<?php

class Fotos {
	
	//******** Atributos **********//
	private $id_foto;
	private $ruta;
	private $id_propiedad;
    private $descripcion;
    
    
//********************** inician set y get de Fotos ***************************//

//************************ set y get de Id_Foto *******************************//    
     public function setId_Foto($id_foto)
    {
        $this->id_foto=$id_foto;
        return $this;
    }
    
    public function getId_Foto()
    {
        return  $this->id_foto;
    }
    
//************************ set y get de Ruta *********************************//
    public function setRuta($ruta)
    {
        $this->ruta=$ruta;
        return $this;
    }
    public function getRuta()
    {
        return $this->ruta;
    }
    
//************************ set y get de Id_Propiedad **************************//
    public function setId_Propiedad($id_propiedad)
    {
       $this->id_propiedad = $id_propiedad;
       return $this;
    }
    public function getId_Propiedad()
    {
       return $this->id_propiedad; 
    }
    
//************************ set y get de Descripcion ***************************//
    public function setDescripcion($descripcion)
    {
        $this->descripcion=$descripcion;
        return $this;
    }
    
    public function getDescripcion()
    {
        return $this->descripcion;
    }
    

}
?>
