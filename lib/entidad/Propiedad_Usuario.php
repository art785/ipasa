<?php

class Propiedad_Usuarios {
    private $id_propiedad;
    private $id_usuario;
    private $id_propiedad_usuario;

    public function setId_Propiedad($id_propiedad)
    {
        $this->id_propiedad=$id_propiedad;
        return $this;
    }
    public function getId_Propiedad()
    {
        return $this->id_propiedad;
    }
    public function setId_Usuario($id_usuario)
    {
        $this->id_usuario=$id_usuario;
        return $this;
    }
    public function getId_Usuario()
    {
        return $this->id_usuario;
    }
    public function setId_Propiedad_Usuario($id_propiedad_usuario)
    {
        $this->id_propiedad_usuario=$id_propiedad_usuario;
        return $this;
    }
    public function getId_Propiedad_Usuario()
    {
        return $this->id_propiedad_usuario;
    }
}
?>
