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
       echo "<div id='detalles_1'>";
        
           print '<p>Propiedad:'.$propiedad_res->getNombre().'</p>';   
           print '<p>Comentarios:'.$propiedad_res->getComentario().'</p>';
           print '<p>Direccion:'.$propiedad_res->getDireccion().'</p>';
           print '<p>Precio de renta:'.$propiedad_res->getPrecio().'</p>';
       echo  "</div>";
          for($i=0; $i<count($propiedad_estructura_res);$i++)
          {
             echo "<div id='detalles_2'>";    
               print '<p>'.$estructura_res[$i]->getNombre().': '.$propiedad_estructura_res[$i]->getCantidad().'</p>';  
             echo "</div>";
          }
          
          
          
          
    }
}
?>
