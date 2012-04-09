<?php
include("lib/doctrine/Sql_Fotos.php");
include("lib/doctrine/Sql_Propiedad.php");
class Propiedad_FotoController extends Sql_Propiedad{
    
      public function propiedades_ofertadas(){
       $foto_consulta= new Sql_Fotos();
       $ArrPropiedades=$this->propiedades_en_oferta();
       
       foreach ($ArrPropiedades as $propiedad)
       {
           
          $foto=$foto_consulta->foto_propiedad($propiedad->getId_Propiedad());
          echo "<div>";
          echo $propiedad->getDireccion();
          echo $propiedad->getNombre();
          print  ' <a rel="example_group"'.'href="'.$foto->getRuta().'" title="'.$foto->getDescripcion().' " ><img style="width:75px; height:75px" alt ="" src="'.$foto->getRuta().'" /></a>';
          echo "<div/>";
       }
      
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