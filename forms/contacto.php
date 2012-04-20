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
          <div id="form_top"></div>
             <div id="fil"><label>Tu Nombre:</label> <span class="input_a"><input type='text' class='nombre' name="nombre"value=''></span></div>
            <div id="fil"><label>Tu Email:</label><span class="input_a"><input type='text' class='email' name='email' value=''></span></div>
           <div id="fil"><label>Asunto:</label><span class="input_a"><input type='text' class='asunto' name='asunto' value=''></span></div>
            <div id="text"><label>Mensaje:</label><br> <textarea  class='mensaje' placeholder="Escriba su Mensaje" title="Mensaje" name="mensaje"></textarea></div>
           <div id="fila2"><input type="image" src="../fondos_pagina/boton-enviar-comentario.png" value='' class='boton'name='boton'></div>
        </form>        
        </div>
      
	</body>
 </html>

