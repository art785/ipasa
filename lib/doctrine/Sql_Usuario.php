<?php
include "../entidad/Usuario.php";
include'../../conexion.php';

class Sql_Usuaurio{
	
	/**Metodo para autenticar el login de usuario******/
	
	
	public function Autentica($alias,$pass)
	{
	   $mysql= new MySQL();
	
	   $pass=md5($pass);
	   $consulta = 'SELECT Usuario.* , Rol.nombre AS rol FROM Autenticacion , Usuario , Rol , Rol_Usuario
	   WHERE Autenticacion.alias='.'"'.$alias.'" 
	   AND Autenticacion.password = "'.$pass.'" 
	   AND Usuario.id_usuario=Autenticacion.id_usuario 
	   AND Usuario.id_usuario = Rol_Usuario.id_usuario 
	   AND Rol_Usuario.id_rol= Rol.id_rol' ;
	
	   $resultado=$mysql->consulta($consulta);
	   $objeto =$mysql->fetch_object($resultado);
	   if(empty($objeto))
	   {
	   	
	   	return NULL;
	   } 
	   else 
	   {
	   $Usuario = new Usuario();
	   $Usuario->setActivo($objeto->activo);
	   $Usuario->setApellidos($objeto->apellidos);
	   $Usuario->setCelular($objeto->celular);
	   $Usuario->setCorreo($objeto->correo);
	   $Usuario->setId_Usuario($objeto->id_usuario);
	   $Usuario->setNombre($objeto->nombre);
	   $Usuario->setSesion($objeto->session);
	   $Usuario->setSexo($objeto->sexo);
	   $Usuario->setTelefono($objeto->telefono);
	   $Usuario->setRol($objeto->rol);
	   $mysql->cerrarConexion();
	   return $Usuario;
	   }
	   
	}
	
	/***Actualiza la session del Usuario indicando que esta en sesion ahora*/
	public function Entra_Session($usuario)
	{
		$mysql= new MySQL();
	
		$consulta = 'UPDATE Usuario SET Usuario.session = 1
		WHERE Usuario.id_usuario = '.$usuario->getId_Usuario();
	
		$mysql->consulta($consulta);
	
		$mysql->cerrarConexion();
	
	}
	
	public function Cierra_Session($usuario)
	{
		$mysql= new MySQL();
	
		$consulta = 'UPDATE Usuario SET Usuario.session = 0
		WHERE Usuario.id_usuario = '.$usuario->getId_Usuario();
	
		$mysql->consulta($consulta);
	
		$mysql->cerrarConexion();
	
	}

	public function Nuevo_Usuario($usuario)
	{
	   $mysql= new MySQL();
	   $insert = 'INSERT INTO Usuario (nombre,apellidos,telefono,sexo,activo,session) VALUES 
	   ('."'".$usuario->getNombre()."' ,"."'".$usuario->getApellidos()."' ,"."'".$usario->getTelefono()."',"
	   ."'".$usuario->getSexo()."' ,"."'".$usuario->getActivo()."' ,"."'".$usuario->getsession();
	
	   $resultado=$mysql->insercion($insert);
	}
	   
	


	
}
