<?php
include "lib/entidad/Propiedad.php";
include_once 'conexion.php';
class Sql_Propiedad {
    
     public function propiedades_en_oferta()
        {
         $mysql= new MySQL();
          $consulta = "SELECT id_propiedad,direccion,nombre 
                                    FROM Propiedad
                                    WHERE Propiedad.ofertada = 1"; 
           
 		$resultado=$mysql->consulta($consulta);
                                        $ArrPropiedades= array();
                                        $i=0;
                         
                                        while($objeto =$mysql->fetch_object($resultado))
                                        {
                                            
                                        $ArrPropiedades[$i]=new Propiedad();
                                        $ArrPropiedades[$i]->setId_Propiedad($objeto->id_propiedad);
                                        $ArrPropiedades[$i]->setDireccion($objeto->direccion);
                                        $ArrPropiedades[$i]->setNombre($objeto->nombre);
                                        $i++;
		} 
                      
                                       return $ArrPropiedades;
        }
 }

