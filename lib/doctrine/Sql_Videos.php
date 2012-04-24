<?php
include "lib/entidad/Videos.php";
include_once 'conexion.php';
class Sql_Videos {
	
	public function rutas_videos() {
		
		{
			$mysql = new MySQL();
			$consulta = "SELECT url , ruta FROM Videos , Propiedad WHERE Videos.id_propiedad=Propiedad.id_propiedad AND Propiedad.ofertada=1";
			$resultado=$mysql->consulta($consulta);
			$ArrVideos = array();
			$i=0;
			 
			while($objeto = $mysql->fetch_object($resultado))
			{
		
				$ArrVideos[$i]=new Videos();
				$ArrVideos[$i]->setUrl($objeto->url);
				$ArrVideos[$i]->setRuta($objeto->ruta);
				$i++;
			}
			return $ArrVideos;
		}
	}
}