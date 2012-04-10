<?php

class Propiedad {
    private $id_propiedad;
    private $nombre;
    private $numero_int;
    private $numero_ext;
    private $direccion;
    private $coordenadas;
    private $rentada;
    private $ofertada;
    private $comentario;
    private $id_localidad;
    private $id_tipo;
    private $precio;

    public function setId_Propiedad($id_propiedad)
    {
        $this->id_propiedad=$id_propiedad;
        return $this;
    }
    public function getId_Propiedad()
    {
        return $this->id_propiedad;
    }

    public function setNombre($nombre)
    {
        $this->nombre=$nombre;
        return $this;
    }
    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNumero_Int($numero_int)
    {
        $this->numero_int=$numero_int;
        return $this;
    }
    public function getNumer_Int()
    {
        return $this->numero_int;
    }

        public function setNumero_Ext($numero_ext)
    {
        $this->numero_ext=$numero_ext;
        return $this;
    }
    public function getNumer_Ext()
    {
        return $this->numero_ext;
    }

        public function setDireccion($direccion)
    {
        $this->direccion=$direccion;
        return $this;
    }
    public function getDireccion()
    {
        return $this->direccion;
    }

        public function setCoordenadas($coordenadas)
    {
        $this->coordenadas=$coordenadas;
        return $this;
    }
    public function getCoordenadas()
    {
        return $this->coordenadas;
    }

        public function setRentada($rentada)
    {
        $this->rentada=$rentada;
        return $this;
    }
    public function getRentada()
    {
        return $this->rentada;
    }
    public function setOfertada($ofertada)
    {
        $this->ofertada=$ofertada;
        return $this;
    }
    public function getOfertada()
    {
        return $this->ofertada;
    }
     public function setComentario($comentario)
    {
        $this->comentario=$comentario;
        return $this;
    }
    public function getComentario()
    {
        return $this->comentario;
    }
    public function setId_Localidad($id_localidad)
    {
        $this->id_localidad=$id_localidad;
    }
    public function getId_Localidad()
    {
        return $this->id_localidad;
    }
    public function setId_Tipo($id_tipo)
    {
        $this->id_tipo=$id_tipo;
        return $this;
    }
    public function getId_Tipo($id_tipo)
    {
        return $this->id_tipo;
    }
    public function setPrecio($precio)
    {
        $this->precio=$precio;
        return $this;
    }
    public function getPrecio()
    {
        return $this->precio;
    }
}
?>
