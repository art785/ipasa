<!DOCTYPE HTML>
<html>
    <head>
        <title>Contacto</title>
        <link rel='stylesheet' href='../css/contacto.css'>
        <script type="text/javascript" src="../validador/js_validador/v_contacto.js"></script>
        <script type="text/javascript" src="../js/jquery-1.7.2.js"></script>
 <script src="http://html5form.googlecode.com/svn/trunk/jquery.html5form-1.5-min.js"></script>
    </head>
        <body>
		<form  id="contacto" method='POST' action=''>
		 <div id="fila"><label>Nombre:</label> <span class="input_area"><input id="nombre" class="nombre" type="text" required="" autocomplete="off" placeholder="Nombre" value="Nombre" maxlength="60" title="Nombre" name="nombre" style="color: rgb(180, 177, 175);"></span></div>
		 <div id="fila"><label>Asunto:</label> <span class="input_area"><input id="asunto" class="asunto" type="text" autocomplete="off" placeholder="Asunto" value="asunto" maxlength="20" title="Asunto" name="asunto" style="color: rgb(180, 177, 175);"></span></div>
		 <div id="fila"><label>Email:</label> <span class="input_area"><input id="email" class="email" type="email" required="" autocomplete="off" placeholder="Correo electronico" value="Correo Electronico" maxlength="40" title="Correo electronico" name="email" style="color: rgb(180, 177, 175);"></span></div>
		<br><label>Nombre:</label><br><textarea id="mensaje" class="mensaje" required="" placeholder="Escriba su Mensaje" maxlength="1000" rows="8" cols="49" title="Mensaje" name="mensaje" style="color: rgb(180, 177, 175);"></textarea>
		
			 <div id="fila2"> <span class="sub"><input type="image" src="../fondos_pagina/boton-enviar-comentario.png" value='' class='boton'> </span></div>
		</form>
		<div id="respuesta"></div>
	</body>
 </html>

