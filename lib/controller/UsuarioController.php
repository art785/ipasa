<?php
include("lib/doctrine/Sql_Usuario.php");
class UsuarioController  {

	public function Registro()
	{
		if(isset($_POST["click"]))
		{	
			include_once "lib/entidad/Usuario.php";
			$nombre=$_POST["name"];	 
			$apellidos=$_POST["lastname"];
			$telefono=$_POST["telefono"];
			$correo=$_POST["e-mail"];
			$sexo=$_POST["sexo"];
			$usuario= new Usuario();
			$usuario->setNombre($nombre);
			$usuario->setApellidos($apellidos);
			$usuario->setTelefono($telefono);
			$usuario->setCorreo($correo);
			$usuario->setSexo($sexo);
			$usuario->setSesion(0);
			$usuario->setActivo(0);
			$sql_usuario = new Sql_Usuaurio();
			$sql_usuario->Nuevo_Usuario($usuario);
			return true;
		
		}
		else 
		{
			return false;
		}
	
	}
	
}
