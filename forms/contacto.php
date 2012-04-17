<html>
    <head>
        <title>Contacto</title>
        <link rel='stylesheet' href='css/contacto.css'>
        <script src="js/jquery.html5form-1.5-min.js"></script>
        <script type="text/javascript" src="validador/js_validador/v_contacto.js"></script>
        
    </head>
        <body>
		<form class='contacto' id="contacto" method='POST' action=''>
		<input id="nombre" class="nombre" type="text" required="" autocomplete="off" placeholder="Nombre" value="Nombre" maxlength="60" title="Nombre" name="nombre" style="color: rgb(180, 177, 175);">
		<input id="asunto" class="asunto" type="text" autocomplete="off" placeholder="Asunto" value="asunto" maxlength="20" title="Asunto" name="asunto" style="color: rgb(180, 177, 175);">
		<input id="email" class="email" type="email" required="" autocomplete="off" placeholder="Correo electronico" value="Correo Electronico" maxlength="40" title="Correo electronico" name="email">
		<textarea id="mensaje" class="mensaje" required="" placeholder="Escriba su Mensaje" maxlength="1000" rows="10" cols="49" title="Mensaje" name="mensaje" style="color: rgb(180, 177, 175);"></textarea>
		
			<div><input type='submit' value='Envia Mensaje' class='boton' name='boton'></div>
		</form>
		<div id="respuesta"></div>
	</body>
 </html>

