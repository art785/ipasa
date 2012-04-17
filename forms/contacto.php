<html>
    <head>
        <title>Contacto</title>
        <link rel='stylesheet' href='../css/contacto.css'>
        <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js'></script>
	 <script src='../validador/js_validador/v_contacto.js'></script>
	 </head>
	 <body>	
	<?php
	$error1 = '<span class="error">Ingrese su nombre</span>';
	$error2 = '<span class="error">Ingrese un email correcto</span>';
	$error3 = '<span class="error">Ingrese un asunto</span>';
	$error4 = '<span class="error">Ingrese un mensaje</span>';
		if(isset($_POST['boton'])){
			if($_POST['nombre'] == ''){
				$error1 = '<span class="error">Ingrese su nombre</span>';
			}else if($_POST['email'] == '' or !preg_match("/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/",$_POST['email'])){
				$error2 = '<span class="error">Ingrese un email correcto</span>';
			}else if($_POST['asunto'] == ''){
				$error3 = '<span class="error">Ingrese un asunto</span>';
			}else if($_POST['mensaje'] == ''){
				$error4 = '<span class="error">Ingrese un mensaje</span>';
			}/*else{			
				$dest = "tu@email.com"; //Email de destino
				$nombre = $_POST['nombre'];
				$email = $_POST['email'];
				$asunto = $_POST['asunto']; //Asunto
				$cuerpo = $_POST['mensaje']; //Cuerpo del mensaje
				//Cabeceras del correo
				$headers = "From: $nombre $email\r\n"; //Quien envia?
				$headers .= "X-Mailer: PHP5\n";
				$headers .= 'MIME-Version: 1.0' . "\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; //
				
				if(mail($dest,$asunto,$cuerpo,$headers)){
					$result = '<div class="result_ok">Email enviado correctamente :)</a>';	
					// si el envio fue exitoso reseteamos lo que el usuario escribio:
					$_POST['nombre'] = '';
					$_POST['email'] = '';
					$_POST['asunto'] = '';
					$_POST['mensaje'] = '';
				}else{
					$result = '<div class="result_fail">Hubo un error al enviar el mensaje :(</a>';
				}
			}*/
		}
	?>
		<form class='contacto' method='POST' action=''>
			<div><label>Tu Nombre:</label><input type='text' class='nombre' name='nombre' value='<?php if(isset($_POST['nombre'])) echo $_POST['nombre']?>'><?php echo $error1 ?></div>
			<div><label>Tu Email:</label><input type='text' class='email' name='email' value='<?php if(isset($_POST['email'])) echo $_POST['email'] ?>'><?php echo $error2 ?></div>
			<div><label>Asunto:</label><input type='text' class='asunto' name='asunto' value='<?php if(isset($_POST['asunto'])) echo $_POST['asunto']?>'><?php echo $error3 ?></div>
			<div><label>Mensaje:</label><textarea rows='6' class='mensaje' name='mensaje'><?php if(isset($_POST['mensaje'])) echo $_POST['mensaje']?></textarea><?php echo $error4 ?></div>
			<div><input type='submit' value='Envia Mensaje' class='boton' name='boton'></div>
			<?php echo $result; ?>
		</form>
	</body>
 </html>

