<?php
class Slide_Show {
	private $id;
	private $ruta;
	private $activo;
                    private $descripcion;
    
     public function setId($id)
    {
        $this->id=$id;
        return $this;
    }
    
    public function getId()
    {
        return  $this->id;
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
    public function setActivo($activo)
    {
       $this->activo = $activo;
       return $this;
    }
    public function getActivo()
    {
       return $this->activo; 
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
