<?php
include("lib/doctrine/Sql_Propiedad.php");
include_once ("lib/doctrine/Sql_Fotos.php");
class Propiedad_FotoController{
    
      public function propiedades_ofertadas(){
      	
       $foto_consulta= new Sql_Fotos();
       $propiedades= new Sql_Propiedad();
       $ArrPropiedades= $propiedades->propiedades_en_oferta();
       $i=0;
       foreach ($ArrPropiedades as $propiedad)
       {
           

          $foto=$foto_consulta->fotos_propiedad($propiedad->getId_Propiedad());
          echo "<div id='info_prev'>";
          echo $propiedad->getDireccion();
          
          
          
          
          echo "</div>";
          echo "<div id = 'nombre_propiedad'>";
          echo $propiedad->getNombre();
          echo "</div>";
          
          $script="$('document').ready(function()
           
          {
           
          $('#form_propiedades".$i."').ajaxForm( {
           
          target: '#resultado_propiedades',
           
          success: function() {
           
          $('#propiedades').slideUp('fast');
           
          }
          });
           
          });";
           echo "<script>$script</script>";
          foreach ($foto as $fotop){
          	echo "<div id = 'foto'>";
          	print  ' <a rel="example_group"'.'href="'.$fotop->getRuta().'" title="'.$fotop->getDescripcion().' " ><img style="width:75px; height:75px" alt ="" src="'.$fotop->getRuta().'" /></a>';
          	echo "</div>";
          }
          
          echo '<form  id="form_propiedades'.$i.'"  method = "post" action=Resultados.php>
                    <input type= "hidden" value="'.$propiedad->getId_Propiedad().'" name = "id_Propiedad" id="id_Propiedad">
                    <input  type="image" src="images/boton_mapa.png" alt="Submit Form">     
                    </form>';
 
          $i++;
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