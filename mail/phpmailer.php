<?php
date_default_timezone_set('America/Cancun'); //Se define la zona horaria
require_once('phpmailer/class.phpmailer.php'); //Incluimos la clase phpmailer
if(isset($_POST["boton"]))
{	
	$nombre=$_POST["nombre"];
	$email=$_POST["email"];
	$asunto=$_POST["asunto"];
	$mensaje=$_POST["mensaje"];
	$mail = new PHPMailer(true); // Declaramos un nuevo correo, el parametro true significa que mostrara excepciones y errores.
	$mail->IsSMTP(); // Se especifica a la clase que se utilizará SMTP
	try {
//------------------------------------------------------
		  $correo_emisor="ipasarenta@gmail.com";     //Correo a utilizar para autenticarse				     //Gmail o de GoogleApps
		  $nombre_emisor="Ipasa";               //Nombre de quien envía el correo
		  $contrasena="ipasarenta";          //contraseña de tu cuenta en Gmail
		  $correo_destino="contacto@ipasacv.com";      //Correo de quien recibe
		  $nombre_destino="contacto";                //Nombre de quien recibe   	
//--------------------------------------------------------
		  $mail->SMTPDebug  = 2;                     // Habilita información SMTP (opcional para pruebas)
		                                             // 1 = errores y mensajes
		                                             // 2 = solo mensajes
		  $mail->SMTPAuth   = true;                  // Habilita la autenticación SMTP
		  $mail->SMTPSecure = "ssl";                 // Establece el tipo de seguridad SMTP
		  $mail->Host       = "smtp.gmail.com";      // Establece Gmail como el servidor SMTP
		  $mail->Port       = 465;                   // Establece el puerto del servidor SMTP de Gmail
		  $mail->Username   = $correo_emisor;  	     // Usuario Gmail
		  $mail->Password   = $contrasena;           // Contraseña Gmail
		  //A que dirección se puede responder el correo
		  $mail->AddReplyTo($correo_emisor, $nombre_emisor);
		  //La direccion a donde mandamos el correo
		  $mail->AddAddress($correo_destino, $nombre_destino);
		  //De parte de quien es el correo
		  $mail->SetFrom($correo_emisor, $nombre_emisor);
		  //Asunto del correo
		  
		  $mail->Subject = $asunto;
		  //Mensaje alternativo en caso que el destinatario no pueda abrir correos HTML
		  $mail->AltBody = 'correo no compatible con HTML.';
		  //El cuerpo del mensaje, puede ser con etiquetas HTML
		  $mail->MsgHTML("<strong>La siguiente informacion a llegado desde el portal ipasacv.com</strong>
		  					Nombre:".$nombre.
		  					"Email:".$email.
		  					"Mensaje:".$mensaje);
		  //Archivos adjuntos
		  //$mail->AddAttachment('img/logo.jpg');      // Archivos Adjuntos
		  echo "<div style='text-align:center'>Mensaje enviado</div>";
		  //Enviamos el correo
		  echo "<div style='display:none;'>";
		  $mail->Send();
		  echo "</div>";
		 
		  
		} 
		catch (phpmailerException $e) 
		{
  		 $e->errorMessage(); //Errores de PhpMailer
		} 
		catch (Exception $e) 
		{
  		$e->getMessage(); //Errores de cualquier otra cosa.
		}
}
else 
{
	echo "Error babosso";
}	
?>
