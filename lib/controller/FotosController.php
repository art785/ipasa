<?php
include_once ("lib/doctrine/Sql_Fotos.php");
class FotosController extends Sql_Fotos{
    
    public function imagenes_fancybox($id_propiedad){
       
       $ArrFotos= $this->fotos_propiedad($id_propiedad);
       foreach ($ArrFotos as $foto)
        {
        	echo "<div>";
        	print  ' <a rel="example_group"'.'href="'.$foto->getRuta().'" title="'.$foto->getDescripcion().' " ><img style="width:75px; height:75px" alt ="" src="'.$foto->getRuta().'" /></a>';
  			echo "</div>";
            
        }    
    }
    
    
}
?>
