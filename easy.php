<?php  
$direccion="Cancun, Quintana Roo, Mexico"; 
require'EasyGoogleMap.class.php';   
$key ="ABQIAAAAzr2EBOXUKnm_jVnk0OJI7xSosDVG8KKPE1-m51RBrvYughuyMxQ-i1QfUnH94QxWIa6N4U6MouMmBA";   
$gm = & new EasyGoogleMap($key);   
$gm->SetMapZoom(15);   
$gm->SetAddress($direccion);  
$gm->SetInfoWindowText("aqui es cancun");   
 
?>  
<html>  
<head>  
<title>EasyGoogleMap</title>  
<?php echo $gm->GmapsKey(); ?>  
</head>  
<body>  
<?php echo $gm->MapHolder(); ?>  
<?php echo $gm->InitJs(); ?>  
<?php echo $gm->UnloadMap(); ?>  
</body>  
</html> 