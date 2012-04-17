<html>
    <head>
        <title>Contacto</title>
        <link rel='stylesheet' href='../css/contacto.css'>
        <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js'></script>
	 <script src='../validador/js_validador/v_contacto.js'></script>
	 </head>
<?php  
$errors=array();
$errors[1] = '<span class="error">Ingrese su nombre</span>';
$errors[2] = '<span class="error">Ingrese un email correcto</span>';
$errors[3] = '<span class="error">Ingrese un asunto</span>';
$errors[4] = '<span class="error">Ingrese un mensaje</span>';
if(isset($_POST['boton'])){
            if($_POST['nombre'] == ''){
                $errors[1] = '<span class="error">Ingrese su nombre</span>';
            }else if($_POST['email'] == '' or !preg_match("/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/",$_POST['email'])){
                $errors[2] = '<span class="error">Ingrese un email correcto</span>';
            }else if($_POST['asunto'] == ''){
                $errors[3] = '<span class="error">Ingrese un asunto</span>';
            }else if($_POST['mensaje'] == ''){
                $errors[4] = '<span class="error">Ingrese un mensaje</span>';
            }/*else{
                /*$dest = "tu@email.com"; //Email de destino
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
                    $result = '<div class="result_ok">Email enviado correctamente </div>';
                    // si el envio fue exitoso reseteamos lo que el usuario escribio:
                    $_POST['nombre'] = '';
                    $_POST['email'] = '';
                    $_POST['asunto'] = '';
                    $_POST['mensaje'] = '';
                }else{
                    $result = '<div class="result_fail">Hubo un error al enviar el mensaje </div>';
                }
            }*/
        }
        if(isset($_POST['boton'])){
      echo " <form class='contacto' method='POST' action=''>";
      echo" <div><label>Tu Nombre:</label><input type='text' class='nombre' name='nombre' value='".$_POST['nombre']."'>".$errors[1]."</div>";
      echo" <div><label>Tu Email:</label><input type='text' class='email' name='email' value='".$_POST['email']."'>".$errors[2]."</div>";
      echo" <div><label>Asunto:</label><input type='text' class='asunto' name='asunto' value='".$_POST['asunto']."'>".$errors[3]."</div>";
      echo" <div><label>Mensaje:</label><textarea rows='6' class='mensaje' name='mensaje' >".$_POST['mensaje']."'</textarea>".$errors[4]."</div>";
     	echo"<div><input type='submit' value='Envia Mensaje' class='boton' name='boton'></div>";
         echo "hola";//$result;
        echo'</form>';
        }
   