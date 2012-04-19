<?php include 'lib/controller/UsuarioController.php';?>
<html>
    <head>
 	<script type="text/javascript" src="validador/js_validador/v_registo.js"></script>
	<link rel="stylesheet" href="css/registro.css" type="text/css"/>
    </head>
        <body>
	 <form class='registro' method='post' action='#registro_head'>
            <div><label>Tu Nombre:</label><input type='text' class='name' name='name' value=''></div>
            <div><label>Tus Apellidos:</label><input type='text' class='lastname' name='lastname' value=''></div>
            <div><label>Tu Email:</label><input type='text' class='e-mail' name='e-mail' value=''></div>
            <div><label>Telefono:</label><input type='text' class='telefono' name='telefono' value=''></div>
            <div><label>Sexo: <select name = "sexo">
            					<option value = 1>Masculino</option>
            					<option value = 0>Femenino</option>
            					</select></label></div>
            <div><input type='submit' value='Registrate' class='click' name='click' ></div>
     </form>
     <?php
     if(isset($_POST["click"]))
     {
		$usuario = new UsuarioController();
		$usuario->Registro();
     }
		
    ?>