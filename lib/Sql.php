<?php
include "conexion.php";
include "Slide_Show.php";
 class Sql  extends Conexion
 {
var $con;	
	
 	function Sql (){
           $this->con= $this->Conectar();
        }
        public function rutas_slide()
        {
            $this->Sql();
            $consulta = "SELECT ruta , descripcion FROM Slide_Show WHERE activo = 1";
            
 		$resultado=mysql_query($consulta , $this->con) or die(mysql_error());
                                        $ArrSlide = array();
                                        $i=0;
                         
                                        while($objeto = mysql_fetch_object($resultado))
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
