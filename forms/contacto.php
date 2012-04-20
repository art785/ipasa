<!DOCTYPE HTML>
<html>
    <head>
        <title>Contacto</title>
        <link rel='stylesheet' href='css/contacto.css'>
        <script type="text/javascript" src="validador/js_validador/ref_contacto.js"></script>
        <script type="text/javascript" src="validador/js_validador/v_contacto.js"></script>
    </head>
        <body>
        
       
        <div id="res_contact"></div><div id="contact_div">
		<form class='contacto' id='contact' method='post' action='mail/phpmailer.php'>
             <div id="fila"><label>Tu Nombre:</label><input type='text' class='nombre' value=''name='nombre'></div>
            <div id="fila"><label>Tu Email:</label><input type='text' class='email' value='' name='email'></div>
           <div id="fila"><label>Asunto:</label><input type='text' class='asunto' value=''name='asunto'></div>
            <div id="text"><label>Mensaje:</label><br><textarea  class='mensaje' placeholder="Escriba su Mensaje" title="mensaje" name="mensaje"></textarea></div>
           <div id="fila2"><input type="image" src="fondos_pagina/boton-enviar-comentario.png" value='' class='boton' name='boton'></div>
        </form>
        </div>
      
	</body>
 </html>

