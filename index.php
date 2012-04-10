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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<!--<script type="text/javascript" src="slide-principal/scripts/jquery-1.7.1.min.js"></script>-->
<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>

<script>
		!window.jQuery && document.write('<script src="jquery-1.4.3.min.js"><\/script>');
</script>
<script type="text/javascript" src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="fancybox/efectos.js"></script>
<link rel="stylesheet" href="fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
<script type="text/javascript" src="js/main.js"></script>
<script src="http://malsup.github.com/jquery.form.js"></script>  

<title>I P A S A</title>
</head>
        <body>
            <?php 
            session_start();
           
                $_SESSION["id_propiedad"]=$_REQUEST["id_Propiedad"];
                
           
            
            ?>
         
            <nav>
                   <ul id="nav">
                    
		    <li><a href="#midiv1"><span>div1</span></a></li>
                    <li><a href="#midiv2"><span>div2</span></a></li>
                    <li><a href="#midiv3"><span>div3</span></a></li>
                    <li><a href="#midiv4"><span>div4</span></a></li>
	           </ul>
             </nav>
        <center>
         <div id="body-wrap">
        <div id="body">

		<div id="head">
			<div id="logo" > </div>
				
			<div id="banner"></div>	
		</div>
            			
		<div id="contenido">
                                                              
               
				
                        <div id="slideshow">
                            <?php include ("Slide-principal.php");?>				
			</div>
			
                        
			<div id="propiedades">
			<?php include("Propiedad_Oferta.php");
                                                              ?>
			</div>
                        <div id="resultado_propiedades">
                            <?
                               echo $_SESSION["id_propiedad"]; 
                            ?>
                                                                
                       </div>
                                                        
                                                         

             </div>
       </div>   
       </div>      
       </center>

     </body>
</html>
