<?php
include "lib/entidad/Propiedad_Estructura.php";
include_once 'conexion.php';
class Sql_Propiedad_Estructura{
    
    public function cantidad_estructura($id_propiedad)
        {
         
         $mysql= new MySQL();
          $consulta = "SELECT  Propiedad_Estructura.cantidad 
              FROM Estructura,Propiedad,Propiedad_Estructura
              WHERE Propiedad.id_propiedad=Propiedad_Estructura.id_propiedad 
              AND Estructura.id_Estructura = Propiedad_Estructura.id_Estructura
              AND Propiedad.id_propiedad = ".$id_propiedad; 
           
 		$resultado=$mysql->consulta($consulta);
                                        $ArrEstructura_Propiedad= array();
                                        $i=0;
                         
                                        while($objeto =$mysql->fetch_object($resultado))
                                        {
                                            
                                        $ArrEstructura_Propiedad[$i]=new Propiedad_Estructura();
                                        $ArrEstructura_Propiedad[$i]->setCantidad($objeto->cantidad);
                                        $i++;
		} 
                      
                                       return $ArrEstructura_Propiedad;
        }
}
?>
