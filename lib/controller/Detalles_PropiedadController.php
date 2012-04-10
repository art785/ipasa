<?php
include("lib/doctrine/Sql_Estructura.php");
include("lib/doctrine/Sql_Propiedad.php");
include("lib/doctrine/Sql_Propiedad_Estructura.php");
include("lib/doctrine/Sql_Fotos.php");
class Detalles_PropiedadController {
    /****En este metodo se sacan los detalles de la propiedad instanciando los objetos necesarios ****/
    public function detalles_propiedad($id_propiedad){
        
       $Estructura= new Sql_Estructura();
       $Propieddad=new Sql_Propiedad();
       $Propiedad_Estructura= new Sql_Propiedad_Estructura();
       $Fotos= new Sql_Fotos();
       $propiedad_res=$Propieddad->propiedad_detallada($id_propiedad);
       $estructura_res=$Estructura->nombre_estructura($id_propiedad);
       $propiedad_estructura_res=$Propiedad_Estructura->cantidad_estructura($id_propiedad);
       $fotos_res=$Fotos->fotos_propiedad($propiedad_res->getId_Propiedad());
       echo "<div>";
           echo $propiedad_res->getNombre();
           echo $propiedad_res->getComentario();
           echo $propiedad_res->getDireccion();
           echo $propiedad_res->getNombre();
           echo $propiedad_res->getPrecio();
          echo  "</div>";
          $i=0;
          
          foreach ($estructura_res as $estructura)
          echo "<div>";
          echo $estructura->getNombre();
          echo $propiedad_estructura_res[$i]->getCantidad();
          $i++;
          echo "</div>";
          foreach ($fotos_res as $foto)
          {
              echo "<div>";
              print  ' <a rel="example_group"'.'href="'.$foto->getRuta().'" title="'.$foto->getDescripcion().' " ><img style="width:75px; height:75px" alt ="" src="'.$foto->getRuta().'" /></a>';
              echo "</div>";
          }
    }
}
?>
