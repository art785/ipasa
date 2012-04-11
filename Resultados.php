<?php 
include "lib/controller/Detalles_PropiedadController.php" ;
include "lib/controller/FotosController.php";
           
if(isset($_GET["id"]))
{
	
	$id_propiedad=$_GET["id"];
	                
	$resultado_propiedad= new Detalles_PropiedadController();
	$resultado_propiedad->detalles_propiedad($id_propiedad);
	$resultado_imagenes = new FotosController();
	$resultado_imagenes->imagenes_fancybox($id_propiedad);
}
echo "<h1>hola</h1>";
?>
