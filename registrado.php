<?php
include 'lib/controller/UsuarioController.php';
$inserta_usuario= new UsuarioController();
$des=$inserta_usuario->Registro();
if($des==true)
{
	echo "<div id='mensajito_registro'><p>gracias por registrarte</p></div>";
}

?>