<?php
include "lib/entidad/Slide_Show.php";
include_once 'conexion.php';
 class Sql_Slide_Show 
 {

        public function rutas_slide()
        {
            $mysql = new MySQL();
            $consulta = "SELECT ruta , descripcion FROM Slide_Show WHERE activo = 1";
            $resultado=$mysql->consulta($consulta);
            $ArrSlide = array();
            $i=0;
                         
                                        while($objeto = $mysql->fetch_object($resultado))
                                        {
                                            
                                        $ArrSlide[$i]=new Slide_Show();
                                        $ArrSlide[$i]->setRuta($objeto->ruta);
                                        $ArrSlide[$i]->setDescripcion($objeto->descripcion);
                                        $i++;
		} 
                                       return $ArrSlide;
        }
 }
?>
