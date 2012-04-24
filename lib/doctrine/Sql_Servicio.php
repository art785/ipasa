<?php
include "lib/entidad/Servicios.php";
include_once 'conexion.php';
class Sql_Servicio{
	public function nombre_servico($id_propiedad)
	{
		 
		$mysql= new MySQL();
		$consulta = "SELECT Servicios.nombre , Servicios.descripcion
		FROM Servicios,Propiedad,Propiedad_Servicios
		WHERE Propiedad.id_propiedad=Propiedad_Servicios.id_propiedad
		AND Servicios.id_servicio = Propiedad_Servicios.id_servicio
		AND Propiedad.id_propiedad = ".$id_propiedad;
		 
		$resultado=$mysql->consulta($consulta);
		$ArrServicio= array();
		$i=0;
		 
		while($objeto =$mysql->fetch_object($resultado))
		{

			$ArrServicio[$i]=new Servicios();
			$ArrServicio[$i]->setNombre($objeto->nombre);
			$ArrServicio[$i]->setDescripcion($objeto->descripcion);
			$i++;
		}

		return $ArrServicio;
	}
}