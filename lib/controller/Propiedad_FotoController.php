<?php
include("lib/doctrine/Sql_Propiedad.php");
include_once ("lib/doctrine/Sql_Fotos.php");
class Propiedad_FotoController{
    
      public function propiedades_ofertadas(){
      	
       $foto_consulta= new Sql_Fotos();
       $propiedades= new Sql_Propiedad();
       $ArrPropiedades= $propiedades->propiedades_en_oferta();
       $i=0;
       echo "<div id='itemconteiner'>";
       foreach ($ArrPropiedades as $propiedad)
       {
        echo "<li>";   
         echo "<div id='box'>";
       	    echo "<div id = 'nombre_propiedad'>";
         	print '<p>'.$propiedad->getNombre().'</p>';
         	echo "</div>";
       	
         	echo "<div id='info_prev'>";
         	print '<p>'.$propiedad->getDireccion().'</p>';
         	
         	
         	echo "</div>";
         	$foto=$foto_consulta->fotos_propiedad($propiedad->getId_Propiedad());
     
          foreach ($foto as $fotop)
          {
          	echo "<div id = 'foto'>";
          	print  ' <a rel="example_group"'.'href="'.$fotop->getRuta().'" title="'.$fotop->getDescripcion().' " ><img style="width:75px; height:75px" alt ="" src="'.$fotop->getRuta().'" /></a>';
          	echo "</div>";
          }


          echo "<div id = 'boton_detalle'>";
          echo '<a class="various fancybox.ajax" href="Resultados.php?id='.$propiedad->getId_Propiedad().'"><img src="fondos_pagina/ver_detalles.png"/></a>';
          echo "</div>";
          
          
          echo "<div id = 'boton_mapa'>";
          echo '<a class="gmap" href="'.$propiedad->getCoordenadas().'"><img src="fondos_pagina/ver_mapa.png"/></a>';
          echo "</div>";
         echo "</div>";
        echo "</li>";
          $i++;
       }
      echo "</div>";
      
    }
    
    public  function subir_imagen_propiedad(){
          if(isset($_POST["imagen_enviada"]))
              {
             $nombre_imagen = $_FILES['imagen_propiedad']['name'];
             $temporal_imagen = $_FILES['imagen_propiedad']['tmp_name'];
             $matriz_imagen = pathinfo($nombre_imagen);
             $ext = array("bmp","gif","jpg","png");
             $urlnueva = "Fotos_Propiedades/".$nombre_imagen ;
             
             
                 if(is_uploaded_file($temporal_imagen))
                     {
                 
                     if(array_search($matriz_imagen['extension'],$ext))
                         {
                     
                         copy($temporal_imagen, $urlnueva);
                         echo '<img src="'.$urlnueva.'" /><br>';
                         echo "Tu imagen (URL): <a href='$urlnueva'>$urlnueva</a>";
                        }
                     
               else {
                         echo "Solo se permiten imágenes con formato bmp, jpg, gif o png<br>"; 
                        }
                     
                    }
                 
        else {
                     echo "Selecciona una imagen.";    
                 }
         
         }
        
        
    }
}