<?php
include("lib/doctrine/Sql_Estructura.php");
include_once ("lib/doctrine/Sql_Propiedad.php");
include("lib/doctrine/Sql_Propiedad_Estructura.php");
class Detalles_PropiedadController {
    /****En este metodo se sacan los detalles de la propiedad instanciando los objetos necesarios ****/
    public function detalles_propiedad($id_propiedad){
        
       $Estructura= new Sql_Estructura();
       $Propieddad=new Sql_Propiedad();
       $Propiedad_Estructura= new Sql_Propiedad_Estructura();
       $propiedad_res=$Propieddad->propiedad_detallada($id_propiedad);
       $estructura_res=$Estructura->nombre_estructura($id_propiedad);
       $propiedad_estructura_res=$Propiedad_Estructura->cantidad_estructura($id_propiedad);
       echo "<div>";
           echo $propiedad_res->getNombre();
           echo $propiedad_res->getComentario();
           echo $propiedad_res->getDireccion();
           echo $propiedad_res->getNombre();
           echo $propiedad_res->getPrecio();
          echo  "</div>";
          for($i=0; $i<count($propiedad_estructura_res);$i++)
          {
          echo "<div>";
          echo $estructura_res[$i]->getNombre();
          echo $propiedad_estructura_res[$i]->getCantidad();
          echo "</div>";
          }
          
          
          
          
    }
}
?>
