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
		<input id="fila" class="nombre" type="text" required="" autocomplete="off" placeholder="Nombre" value="Nombre" maxlength="60" title="Nombre" name="nombre" style="color: rgb(180, 177, 175);">
		<input id="fila" class="asunto" type="text" autocomplete="off" placeholder="Asunto" value="asunto" maxlength="20" title="Asunto" name="asunto" style="color: rgb(180, 177, 175);">
		<input id="fila" class="email" type="email" required="" autocomplete="off" placeholder="Correo electronico" value="Correo Electronico" maxlength="40" title="Correo electronico" name="email">
		<textarea id="fila" class="mensaje" required="" placeholder="Escriba su Mensaje" maxlength="1000" rows="10" cols="49" title="Mensaje" name="mensaje" style="color: rgb(180, 177, 175);"></textarea>
		
			<div><input type='submit' value='Envia Mensaje' id='boton' name='boton'></div>
		</form>
		<div id="respuesta"></div>
	</body>
 </html>

