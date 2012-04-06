<div id="map" style="width: 600px; height: 400px" style="border: 6px ridge #D8D8D8" align="center">
<?php  
$sql= "SELECT propiedad.*, estructura.*, servicios.*, plusvalia.*, direccion.* 
FROM  propiedad
INNER JOIN estructura ON propiedad_estructura_id=estructura_id
INNER JOIN direccion ON propiedad_direccion_id=direccion_id	
INNER JOIN plusvalia ON propiedad_plusvalia_id=plusvalia_id
INNER JOIN servicios ON propiedad_servicios_id=servicios_id
WHERE propiedad.propiedad_tipo='Casa' or propiedad.propiedad_tipo='Departamento' ";
$result=mysql_query($sql);
 if(!$result)				 
  {
    exit('<p> Error al consultar el producto: '.mysql_error().'</p>');
   }
$consulta=mysql_fetch_array($result);
$foto=$consulta['propiedad_foto'];
 $direccion=$consulta['coordenadas'];
$anuncio=$consulta['propiedad_nombre'];
require'EasyGoogleMap.class.php';   
$key ="ABQIAAAAuhnGfcoT3FXNIgn-OuPC-RTr7Ar14wCxDeVtMaGCQs49vrGibRSc4IjHxaXFYM8LORnaEoGXo43wCw";   
$gm = & new EasyGoogleMap($key);   
$gm->SetMapZoom(15);   
$gm->SetAddress($direccion);  
$gm->SetInfoWindowText("<img src=".$foto." border='0' width='80' height='60'/>"." ".$anuncio);   
?>  
<?php echo $gm->GmapsKey(); ?>  					  
<?php echo $gm->MapHolder(); ?>  					
<?php echo $gm->InitJs(); ?>  
<?php echo $gm->UnloadMap(); ?>			  
</div>		
		
