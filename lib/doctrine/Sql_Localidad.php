<?php
include "lib/entidad/Localidad.php";
include_once 'conexion.php';
class Sql_Localidad {

    /********Esta es una consulta de toda la tabla localidad**********/
    public function seleccionLocalidad()
            {
            $mysql = new MySQL();
            $query = "SELECT *
                      FROM
                      Localidad"
                      ;
            $resultado=$mysql->consulta($query);
                $ArrLocalidad= array();
                $i=0;
                
                while ($objeto=$mysq->fetch_object($resultado))
                    {
                     $ArrLocalidad[$i]=new Localidad();
                     $ArrLocalidad[$i]->setId_Localidad($objeto->id_localidad);
                                        $ArrLocalidad[$i]->setNombre($objeto->nombre);
                                        $i++;
                                        
                                        return $ArrLocalidad;
                }
}
}
?>
