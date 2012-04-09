<!DOCTYPE HTML>
<html>
<head>                        
<link rel="stylesheet" href="css/menu.css" type="text/css" charset="utf-8"/>
<link rel="stylesheet" href="css/menu-color.css" type="text/css" charset="utf-8"/>
<link rel="stylesheet" href="css/estilo.css" type="text/css" charset="utf-8"/>

<link rel="stylesheet" href="slide-principal/themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="slide-principal/themes/pascal/pascal.css" type="text/css" media="screen" />
<link rel="stylesheet" href="slide-principal/themes/orman/orman.css" type="text/css" media="screen" />
<link rel="stylesheet" href="slide-principal/nivo-slider.css" type="text/css" media="screen" />
<!-- Esta es la parte del fancybox y del jquery -->
<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>-->
<script type="text/javascript" src="slide-principal/scripts/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="fancybox/jquery.easing-1.4.pack.js"></script>
<script>
		!window.jQuery && document.write('<script src="jquery-1.4.3.min.js"><\/script>');
</script>
<script type="text/javascript" src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="fancybox/efectos.js"></script>
<link rel="stylesheet" href="fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />

<title>I P A S A</title>
</head>
        <body>
        <center>
        <div id="body">

		<div id="head">
			<div id="logo" > </div>
				
			<div id="banner"></div>	
		</div>
            
                <div id="menu">
	              <div align="center">
		         <?php include("Menu.php");?>  				    
                      </div>
                </div>

			
		<div id="contenido">
                     
			
                      	
			<div id="busqueda">
			    <div id="busqueda_top">			   	
                            </div>	
                            	
                            
                            
                        </div>	
				
                        <div id="slideshow">
                            <?php include ("Slide-principal.php");?>				
			</div>
			
                 	<div id="resultados1_top"></div>
                        
			<div id="resultados1">
			<?php include("Propiedad_Oferta.php");?>	
			</div>
				
			<div id="resultados2">
                            /*solo lo propbe aka para ver k funcionara n en realidad aka no va*/
                                                         <?php include("forms/upload_imagen_propiedad.php");?>
			</div>	
                    
			<div id="paginacion">
			</div>
				
			<div id="menu2">
                            
                        </div>
			<div id="foot">
			</div>
             </div>
       </div>      
       </center>
     </body>
</html>
