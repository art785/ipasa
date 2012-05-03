<?php


class Autenticacion {

//*************** Atributos **************//
	private $id_autenticacion;
    private $alias;
    private $password;
    private $id_usuario;
    
//********************inician set y get de Autenticacion**********************//

//**********************set y get de Id_Autenticacion*************************//

    public function setId_Autenticacion($id_autenticacion)
    {
        $this->id_autenticacion=$id_autenticacion;
        return $this;
    }
    public function getId_Autenticacion()
    {
        return $this->id_autenticacion;
    }
    
//**************************set y get de Alias********************************//    
     public function setAlias($alias)
    {
        $this->alias=$alias;
        return $this;
    }
    public function getAlias()
    {
        return $this->alias;
    }

//***************************set y get de Password****************************//
    public function setPassword($password)
    {
        $this->password=$password;
        return $this;
    }
    public function getPassword()
    {
        return $this->password;
    }
    
//************************set y get de Id_Usuario*****************************//

    public function setId_Usuario($id_usuario)
    {
        $this->id_usuario=$id_usuario;
        return $this;
    }
    public function getId_Usuario()
    {
        return $this->id_usuario;
    }
}
?>
