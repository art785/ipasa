<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>                        
<link rel="stylesheet" href="css/estilo.css" type="text/css"/>

<link rel="stylesheet" href="slide-principal/themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="slide-principal/themes/pascal/pascal.css" type="text/css" media="screen" />
<link rel="stylesheet" href="slide-principal/themes/orman/orman.css" type="text/css" media="screen" />
<link rel="stylesheet" href="slide-principal/nivo-slider.css" type="text/css" media="screen" />
<!-- Esta es la parte del fancybox y del jquery -->
<script type="text/javascript" src="js/jquery-1.7.2.js"></script>
<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
 

<script type="text/javascript" src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="fancybox/efectos.js"></script>
<script type="text/javascript" src="fancybox/efectos2.js"></script>
<link rel="stylesheet" href="fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
<!-- Fin de fancybox  y del jquery -->

<!-- javascript del movimiento de divs -->
<script type="text/javascript" src="js/mover_divs.js"></script>
<!-- fin del javasscript -->

<!-- Validacion de formularios -->
 <script type="text/javascript" src="validador/js_validador/jquery.form.js"></script>
 <!-- Paginacion de resultados -->
 
 <script type="text/javascript" src="js/jPages.js"></script>
 <script type="text/javascript" src="js/pagination.js"></script>
<link rel="stylesheet" href="css/jpages.css" type="text/css"/>
<link rel="stylesheet" href="css/animation.css" type="text/css"/>

<!-- Fuentes -->
    <STYLE TYPE="text/css" MEDIA="screen, print">
      @font-face {
      font-family: "mifuente";
      src: url("css/AGD_CE.TTF");
    }
    </STYLE>

   

</head>
	<body>
<!--------------------------------------------BODY-WRAP CONTIENE TODO---------------------------------------------->
			<div id="body-wrap">
			 
<!--------------------------------------------MENU ESTATICO DE LA DERECHA---------------------------------------------->
       <nav id="menu">
			<ul>
				<li><a href="#head"><div id="boton_inicio"></div></a></li>
				<li><a href="#quienes_somos_head"><div id="boton_quienes"></div></a></li>
				<li><a href="#disponible_head"><div id="boton_disponible"></div></a></li>
				<li><a href="#mapa_head"><div id="boton_map"></div></a></li>
				<li><a href="#busqueda_head"><div id="boton_busqueda"></div></a></li>
				<li><a href="#videos_head"><div id="boton_videos"></div></a></li>
				<li><a href="#registro_head"><div id="boton_registro"></div></a></li>
				<li><a href="#registro_head"><div id="boton_login"></div></a></li>
				<li><a href="#contacto_head"><div id="boton_contacto"></div></a></li>
			
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
<!--------------------------------------------HEADER QUIENES SOMOS---------------------------------------------->
			    <div id="quienes_somos_head">
						<div id="quienes_somos_logo" > </div>
						<div id="quienes_somos_banner"></div>
				</div>
<!--------------------------------------------SECCION QUIENES SOMOS---------------------------------------------->
				<div id="body2">
					<div id="contenido2">
						<section id="quienes_somos">
						 <div id="quienes_somos_contenido">
						   <br>
						   <div id="info">
						   <h1> Quienes somos</h1>
						   <p>Somos un canal en constante expansión, con más de 31 años por el sistema de Cablemás;
						      nuestras producciones se realizan y se transmiten desde Quintana Roo y Yucatán, siendo
						      los principales centros turísticos del país. Hoy en día llegamos más allá de la península
						      de Yucatán, hemos rebasando las fronteras del país gracias al sistema satelital y el internet,
						      lo cual le brinda la posibilidad de que su marca o producto sea conocido en todo el mundo.
						      Gracias a nuestra transmisión en vivo a través de la página web, la señal ahora llega a
					          los teléfonos móviles, como Iphone, Ipad, Blackberry y otros dispositivos con capacidad 
				              de reproducir video, ampliando así las posibilidades de impacto en la audiencia. Somos
			    	          una televisora 100% Mexicana, que cuenta con un 90% de producciones propias y regionales,
		     	              transmitiendo las 24hrs del día, para satisfacer las necesidades de la audiencia.</p>
						   </div>
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
					
				<div id="body3">
					<div id="contenido3">
						<section id="disponibles">
						
						   	<div id="propiedad">
							   <?php include("Propiedad_Oferta.php");?>
							   <?php include("Resultados.php")?>
							   
							</div>
							<div class="pagination"></div>
						</section >
					</div>
				</div>
<!---------------------------------------------HEADER MAPA---------------------------------------------->
                <div id="mapa_head">
						<div id="mapa_logo" > </div>
						<div id="mapa_banner"></div>
				</div>

<!--------------------------------------------SECCION MAPA---------------------------------------------->
				<div id="body4">
				   <div id="contenido4">
						<section id="mapa">
				     	   <div id="mapa_contenido">
				     	   <div id="div_mapa_top"></div>
				     	    <div id="div_mapa">
						      <iframe id="iframe_mapa" width="800" height="600" src="http://maps.google.com.mx/maps/ms?msa=0&amp;msid=215524932489196424143.0004be5b4742b0c5c85f0&amp;hl=es&amp;ie=UTF8&amp;t=m&amp;ll=20.169411,-88.527832&amp;spn=3.09346,4.389038&amp;z=8&amp;output=embed"></iframe>
						   </div>
						   </div>
						</section>
					</div>
				</div>
<!---------------------------------------------HEADER BUSQUEDA---------------------------------------------->
                <div id="busqueda_head">
						<div id="busqueda_logo" > </div>
						<div id="busqueda_banner"></div>
				</div>

<!--------------------------------------------SECCION BUSQUEDA---------------------------------------------->
				<div id="body5">
				   <div id="contenido5">
						<section id="busqueda">
				     	   <div id="busqueda_contenido">
				     	     <div id="div_top_busqueda"></div>
						      <div id="div_busqueda">
						        <?php include("busqueda.php");?>
						      </div>
						   </div>
						</section>
					</div>
				</div>
<!--------------------------------------------HEADER VIDEOS---------------------------------------------->
			    <div id="videos_head">
						<div id="videos_logo" > </div>
						<div id="videos_banner"></div>
				</div>
<!--------------------------------------------SECCION VIDEOS---------------------------------------------->
						
					<div id = "body6" >
					   <div id="contenido6">
						<section id="videos">
				     	   <div id="videos_contenido">
				     	    <div id="div_top_propiedad"></div>

						    <div id="div_propiedad">
						     <div id="cuadro_top"></div>
						       <?php include("Videos.php");?>
						    </div>
						   </div>
						</section>
                      </div>
                   </div>
                  
<!--------------------------------------------HEADER REGISTRO---------------------------------------------->
			    <div id="registro_head">
						<div id="registro_logo" > </div>
						<div id="registro_banner"></div>
				</div>
<!--------------------------------------------SECCION REGISTRO---------------------------------------------->
				<div id="body7">
				    <div id="contenido7">
						<section id="registro">
						   <div id="registro_contenido">
						    <div id="registro_top"></div>
						    <div id="div_registro">
						      <?php include"forms/registro.php";?>
						    </div>
						    <div id="div_login">
						       <?php include"forms/login.php";?>
						     </div>
						    </div>
						
						</section>
					</div>
				</div>

<!--------------------------------------------HEADER REGISTRO---------------------------------------------->
			    <div id="contacto_head">
						<div id="contacto_logo" > </div>
						<div id="contacto_banner"></div>
				</div>
<!--------------------------------------------SECCION CONTACTO---------------------------------------------->
			    <div id = "body8" >
				   <div id="contenido8">
						<section id="contacto">
				     	   <div id="contacto_contenido">
				     	   <div id="contacto_top"></div>
						    <div id="container_contacto">
						    <div id="iframe_contacto">
				     	    
						       <?php include "forms/contacto.php"?>
						    </div>
						    <div id="imagen_foot"></div>
						    </div>
                           
						   </div>
						</section>
					</div>
				</div>

			</div>

	</body>

</html>
