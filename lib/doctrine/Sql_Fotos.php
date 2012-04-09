<?php
include "lib/entidad/Fotos.php";
include_once 'conexion.php';
class Sql_Fotos {
    
     public function fotos_propiedad($id_propiedad)
        {
         $mysql= new MySQL();
          $consulta = "SELECT Propiedad.id_propiedad , Fotos.ruta , Fotos.descripcion 
                                    FROM Propiedad, Fotos
                                    WHERE Propiedad.ofertada = 1 
                                    AND Propiedad.id_propiedad = Fotos.id_propiedad 
                                    AND Propiedad.id_propiedad =".$id_propiedad;
           
         
 
 		$resultado=$mysql->consulta($consulta);
                                        $ArrFotos= array();
                                        $i=0;
                         
                                        while($objeto =$mysql->fetch_object($resultado))
                                        {
                                            
                                        $ArrFotos[$i]=new Fotos();
                                        $ArrFotos[$i]->setRuta($objeto->ruta);
                                        $ArrFotos[$i]->setDescripcion($objeto->descripcion);
                                        $i++;
		} 
                      
                                       return $ArrFotos;
        }
        
        public function foto_propiedad($id_propiedad)
        {
         $mysql= new MySQL();
          $consulta = "SELECT Propiedad.id_propiedad , Fotos.ruta , Fotos.descripcion 
                                    FROM Propiedad, Fotos
                                    WHERE Propiedad.ofertada = 1 
                                    AND Propiedad.id_propiedad = Fotos.id_propiedad 
                                    AND Propiedad.id_propiedad =".$id_propiedad;
           
         
 
 		$resultado=$mysql->consulta($consulta);
                                       $objeto =$mysql->fetch_object($resultado);
                                       
                                            
                                        $Foto=new Fotos();
                                        $Foto->setRuta($objeto->ruta);
                                        $Foto->setDescripcion($objeto->descripcion);
                                                             
                                       return $Foto;
        }
 }

?>
