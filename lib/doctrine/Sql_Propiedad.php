<?php
include "lib/entidad/Propiedad.php";
include_once 'conexion.php';
class Sql_Propiedad {
    
    /*****Esta es una consulta que arroga todas las propiedades en oferta****/
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
    /*************Esta es una consulta que te arroga los detalles de una determinada propiedad*****************/
        public function propiedad_detallada($id_propiedad)
        {
            
            $mysql= new MySQL();
          $consulta = "SELECT * FROM Propiedad WHERE id_propiedad =".$id_propiedad; 
           
 		$resultado=$mysql->consulta($consulta);
                                       $objeto =$mysql->fetch_object($resultado);
                                        
                                            
                                        $Propiedad=new Propiedad();
                                        $Propiedad->setId_Propiedad($objeto->id_propiedad);
                                        $Propiedad->setDireccion($objeto->direccion);
                                        $Propiedad->setNombre($objeto->nombre);
                                        $Propiedad->setComentario($objeto->comentario);
                                        $Propiedad->setId_Localidad($objeto->id_localidad);
                                        $Propiedad->setCoordenadas($objeto->coordenadas);
                                        $Propiedad->setId_Tipo($objeto->id_tipo);
                                        $Propiedad->setNumero_Ext($objeto->numero_ext);
                                        $Propiedad->setNumero_Int($objeto->numero_int);
                                        $Propiedad->setPrecio($objeto->precio);
                
		 
                      
                                       return $Propiedad;
            
        }
        
 }

