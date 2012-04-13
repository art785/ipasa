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
<script type="text/javascript" src="slide-principal/scripts/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>

<script>
		!window.jQuery && document.write('<script src="jquery-1.4.3.min.js"><\/script>');
</script>
<script type="text/javascript" src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="fancybox/efectos.js"></script>
<script type="text/javascript" src="fancybox/efectos2.js"></script>
<link rel="stylesheet" href="fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
<!-- Fin de fancybox  y del jquery -->

<!-- javascript del movimiento de divs -->
<script type="text/javascript" src="js/mover_divs.js"></script>
<!-- fin del javasscript -->

<!-- Validacion de formulario de contacto -->



</head>
	<body>

			<div id="body-wrap">
			 
			  		<nav id="menu">
			<ul>
				<li><a href="#inicio"><div id="boton_inicio"></div></a></li>
				<li><a href="#registro"><div id="boton_registro"></div></a></li>
				<li><a href="#registro"><div id="boton_login"></div></a></li>
					<li><a href="#mapa"><div id="boton_map"></div></a></li>
				<li><a href="#busqueda"><div id="boton_busqueda"></div></a></li>
				<li><a href="#videos"><div id="boton_videos"></div></a></li>
				<li><a href="#contacto"><div id="boton_contacto"></div></a></li>
			
			</ul>
		</nav><!--Fin #menu-->
			    <div id="head">
						<div id="logo" > </div>
						<div id="banner"></div>
				</div>
				<div id="body">
					<div id="contenido">
						<section id="inicio">
							<div id="slideshow">
							<?php include ("Slide-principal.php");?>
							</div>
							<div id="propiedad">
							<?php include("Propiedad_Oferta.php");?>
							<?php include("Resultados.php")?>
							</div>

						</section >
						<section id="registro">
	
						   <div id="registro_contenido">
						      <div id="registro_head"></div>
						      <iframe id="iframe_registro" src="forms/registro.php"></iframe>
						   
						   </div>
						
						</section>

						
						  
						
						<section id="busqueda">
				     	   <div id="busqueda_contenido">
						      <div id="busqueda_head"></div>
						   
						   </div>
						</section>
					
						<section id="videos">
				     	   <div id="videos_contenido">
						      <div id="videos_head"></div>
						   
						   </div>
						</section>
						<section id="contacto">
				     	   <div id="contacto_contenido">
						      <div id="contacto_head"></div>
						   
						   </div>
						</section>
					</div>
				</div>
			</div>

	</body>

</html>