<?php
include_once("conexion.php");
include_once("lib/entidad/Tipo_propiedad.php");
include_once("lib/entidad/Localidad.php");
class Sql_Combobox{
	
	public function Tipo_Propiedades()
	{
		    $mysql= new MySQL();
			$consulta = "SELECT * FROM Tipo_propiedad";
			$resultado=$mysql->consulta($consulta);
			$ArrTipo_Propiedad= array();
			$i=0; 
			while($objeto =$mysql->fetch_object($resultado))
			{
		
				$ArrTipo_Propiedad[$i]= new Tipo_propiedad();
				$ArrTipo_Propiedad[$i]->setId_Tipo_Propiedad($objeto->id_tipo_propiedad);
				$ArrTipo_Propiedad[$i]->setNombre($objeto->nombre);
				$i++;
			}
		
			return $ArrTipo_Propiedad;
		
		
		
	}
	
	
	
	public function Localidades()
	{
		$mysql= new MySQL();
		$consulta = "SELECT * FROM Localidad";
		$resultado=$mysql->consulta($consulta);
		$ArrLocalidades= array();
		$i=0;
		while($objeto =$mysql->fetch_object($resultado))
		{
	
			$ArrLocalidades[$i]=new Localidad();
			$ArrLocalidades[$i]->setId_Localidad($objeto->id_localidad);
			$ArrLocalidades[$i]->setNombre($objeto->nombre);
			$i++;
		}
	
		return $ArrLocalidades;
	}
}
?>
