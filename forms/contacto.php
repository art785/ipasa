<html>
    <head>
        <title>Contacto</title>
        <link rel='stylesheet' href='../css/contacto.css'>
    </head>
        <body>
		<form class='contacto' method='POST' action=''>
			<div><label>Tu Nombre:</label><input type='text' class='nombre' name='nombre' title="Se necesita un nombre" required/></div>
			<div><label>Tu Email:</label><input type='text' class='email' name='email'  pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required/></div>
			<div><label>Asunto:</label><input type='text' class='asunto' name='asunto' title="Ingese su asunto" required/></div>
			<div><label>Mensaje:</label><textarea rows='6' class='mensaje' name='mensaje' title="Ingese su mensaje" ></textarea></div>
			<div><input type='submit' value='Envia Mensaje' class='boton' name='boton'></div>
		</form>
	</body>
 </html>

