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
<link rel="stylesheet" href="fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />

<!-- javascript del movimiento de divs -->
<script type="text/javascript" src="js/mover_divs.js"></script>


<!-- fin del javasscript -->
</head>
	<body>
		<nav id="menu">
			<ul>
				<li><a href="#inicio"><div id="boton_inicio"></div></a></li>
				<li><a href="#registro"><div id="boton_registro"></div></a></li>
				<li><a href="#registro"><div id="boton_login"></div></a></li>
				<li><a href="#busqueda"><div id="boton_busqueda"></div></a></li>
				<li><a href="#mapa"><div id="boton_mapa"></div></a></li>
				<li><a href="#videos"><div id="boton_videos"></div></a></li>
				<li><a href="#contacto"><div id="boton_contacto"></div></a></li>
			</ul>
<!--<div id="contacto"><a href="#form-contact"></a></div>-->
		</nav><!--Fin #menu-->
			<div id="body-wrap">
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
						<section id="registro"><p>registro</p></section>
						
						<section id="busqueda"><p>busqueda</p></section>
					
						<section id="videos"><p>videos</p></section>
						
						<section id="contacto"><p>contacto</p></section>

					</div>
				</div>
			</div>

	</body>

</html>