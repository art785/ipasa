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
<!--------------------------------------------BODY-WRAP CONTIENE TODO---------------------------------------------->
			<div id="body-wrap">
			 
<!--------------------------------------------MENU ESTATICO DE LA DERECHA---------------------------------------------->
       <nav id="menu">
			<ul>
				<li><a href="#head"><div id="boton_inicio"></div></a></li>
				<li><a href="#disponible_head"><div id="boton_registro"></div></a></li>
				<li><a href="#registro_head"><div id="boton_login"></div></a></li>
				<li><a href="#registro_head"><div id="boton_map"></div></a></li>
				<li><a href="#busqueda"><div id="boton_busqueda"></div></a></li>
				<li><a href="#videos"><div id="boton_videos"></div></a></li>
				<li><a href="#contacto"><div id="boton_contacto"></div></a></li>
			
			</ul>
		</nav>
<!--------------------------------------------HEADER INICIO---------------------------------------------->
			    <div id="head">
						<div id="logo" > </div>
						<div id="banner"></div>
				</div>
<!--------------------------------------------SECCION INICIO---------------------------------------------->
				<div id="body">
					<div id="contenido">
						<section id="inicio">
						    <div id="slideshow_top"></div>
							<div id="slideshow">
							<?php include ("Slide-principal.php");?>
							</div>
						</section >
					</div>
				</div>
<!--------------------------------------------HEADER DISPONIBLE------------------------------------------------>
			    <div id="disponible_head">
						<div id="disponible_logo" > </div>
						<div id="disponible_banner"></div>
				</div>
<!--------------------------------------------SECCION DISPONIBLES---------------------------------------------->
					
				<div id="body2">
					<div id="contenido2">
						<section id="disponibles">
						   	<div id="propiedad">
							   <?php include("Propiedad_Oferta.php");?>
							   <?php include("Resultados.php")?>
							</div>
						</section >
					</div>
				</div>		
				
<!--------------------------------------------HEADER REGISTRO---------------------------------------------->
			    <div id="registro_head">
						<div id="registro_logo" > </div>
						<div id="registro_banner"></div>
				</div>
<!--------------------------------------------SECCION REGISTRO---------------------------------------------->
				<div id="body3">
				    <div id="contenido3">
						<section id="registro">
						   <div id="registro_contenido">
						      <div id="registro_head"></div>
						      <iframe id="iframe_registro" src="forms/registro.php"></iframe>	   
						   </div>
						</section>
					</div>
				</div>
<!---------------------------------------------HEADER BUSQUEDA---------------------------------------------->

<!--------------------------------------------SECCION BUSQUEDA---------------------------------------------->
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