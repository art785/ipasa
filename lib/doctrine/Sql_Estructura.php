<?php
include "lib/entidad/Estructura.php";
include_once 'conexion.php';
class Sql_Estructura{
    public function nombre_estructura($id_propiedad)
        {
       
         $mysql= new MySQL();
           $consulta = "SELECT Estructura.nombre 
              FROM Estructura,Propiedad,Propiedad_Estructura
              WHERE Propiedad.id_propiedad=Propiedad_Estructura.id__propiedad 
              AND Estructura.id_Estructura = Propiedad_Estructura.id_Estructura
              AND Propiedad.id_propiedad = ".$id_propiedad; 
           
 		$resultado=$mysql->consulta($consulta);
                                        $ArrEstructura= array();
                                        $i=0;
                         
                                        while($objeto =$mysql->fetch_object($resultado))
                                        {
                                            
                                        $ArrEstructura[$i]=new Estructura();
                                        $ArrEstructura[$i]->setNombre($objeto->nombre);
                                        $i++;
		} 
                      
                                       return $ArrEstructura;
        }
}

?>
