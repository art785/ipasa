<?php

class Usuario {
    private $id_usuario;
    private $nombre;
    private $apellidos;
    private $telefono;
    private $celular;
    private $sexo;
    private $activo;
    private $sesion;
    private $correo;

    public function setId_Usuario($id_usuario)
    {
        $this->id_usuario=$id_usuario;
        return $this;
    }
    public function getId_Usuario()
    {
        return $this->id_usuario;
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
     public function setApellidos($apellidos)
    {
        $this->apellidos=$apellidos;
        return $this;
    }
    public function getApellidos()
    {
        return $this->apellidos;
    }
     public function setTelefono($telefono)
    {
        $this->telefono=$telefono;
        return $this;
    }
    public function getTelefono()
    {
        return $this->telefono;
    }
     public function setCelular($celular)
    {
        $this->celular=$celular;
        return $this;
    }
    public function getCelular()
    {
        return $this->celular;
    }
     public function setSexo($sexo)
    {
        $this->sexo=$sexo;
        return $this;
    }
    public function getSexo()
    {
        return $this->sexo;
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
        public function setSesion($sesion)
    {
        $this->sesion=$sesion;
        return $this;
    }

    public function getSesion()
    {
        return $this->sesion;
    }
        public function setCorreo($Correo)
    {
        $this->correo=$correo;
        return $this;
    }

    public function getCorreo()
    {
        return $this->correo;
    }
}
?>
