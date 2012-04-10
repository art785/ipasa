<?php

class Fotos {
	private $id_foto;
	private $ruta;
	private $id_propiedad;
                    private $descripcion;
    
     public function setId_Foto($id_foto)
    {
        $this->id_foto=$id_foto;
        return $this;
    }
    
    public function getId_Foto()
    {
        return  $this->id_foto;
    }
    
    public function setRuta($ruta)
    {
        $this->ruta=$ruta;
        return $this;
    }
    
    public function getRuta()
    {
        return $this->ruta;
    }
    public function setId_Propiedad($id_propiedad)
    {
       $this->id_propiedad = $id_propiedad;
       return $this;
    }
    public function getId_Propiedad()
    {
       return $this->id_propiedad; 
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
    

}
?>
