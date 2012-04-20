<?php
include 'lib/controller/UsuarioController.php';
$inserta_usuario= new UsuarioController();
$des=$inserta_usuario->Registro();
if($des==true)
{
	echo "<div>gracias por registrarte</div>";
}

?>