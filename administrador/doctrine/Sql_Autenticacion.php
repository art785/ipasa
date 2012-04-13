<?php
include "lib/entidad/Autenticacion.php";
include_once 'conexion.php';

class Sql_Autenticacion{
	
	public function Autentica($alias,$contraseña)
	{
	   $mysql= new MySQL();
	
	   $consulta = "SELECT Autenticacion.password FROM Autenticacion
	   WHERE Autenticacion.alias= ".$alias;
	
	   $resultado=$mysql->consulta($consulta);
	   
	   $objeto =$mysql->fetch_object($resultado);
	   
	   $Autenticacion=new Autenticacion();
	   $Autenticacion->setPassword($objeto->password);
	   
	   
	   
	   
	   
	
	}
}