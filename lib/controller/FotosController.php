<?php
include("lib/doctrine/Sql_Fotos.php");
class FotosController extends Sql_Fotos{
    
    public function imagenes_fancybox(){
       $fotos =$this->fotos_propiedad(1);
       foreach ($fotos as $foto)
        {
            print  ' <a rel="example_group"'.'href="'.$foto->getRuta().'" title="'.$foto->getDescripcion().' " ><img style="width:75px; height:75px" alt ="" src="'.$foto->getRuta().'" /></a>';
       
  
            
        }    
    }
    
    
}
?>
