<?php 
include "lib/controller/Detalles_PropiedadController.php" ;

           
if(isset($_GET["id"]))
{
	
	$id_propiedad=$_GET["id"];
	                
	$resultado_propiedad= new Detalles_PropiedadController();
	$resultado_propiedad->detalles_propiedad($id_propiedad);

}
echo "<h1>hola</h1";
?>
