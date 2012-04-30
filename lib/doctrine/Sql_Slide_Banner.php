<?php
include "lib/entidad/Banner.php";
include_once 'conexion.php';
 class Sql_Slide_Banner 
 {

        public function rutas_slide()
        {
            $mysql = new MySQL();
            $consulta = "SELECT ruta FROM Banner WHERE activo = 1";
            $resultado=$mysql->consulta($consulta);
            $ArrSlide = array();
            $i=0;
                     
            while($objeto = $mysql->fetch_object($resultado))
                 {     
                   $ArrSlide[$i]=new Banner();
                   $ArrSlide[$i]->setRuta($objeto->ruta);          
                   $i++;
	              } 
           return $ArrSlide;
        }
 }
?>
