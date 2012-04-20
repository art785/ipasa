<?php include 'lib/controller/UsuarioController.php';?>
<html>
    <head>
    <script type="text/javascript" src="validador/js_validador/v_registo.js"></script>
 	<script type="text/javascript" src="validador/js_validador/ref_registo.js"></script>
	<link rel="stylesheet" href="css/registro.css" type="text/css"/>
    </head>
        <body>
		<div id="resultado"></div><div id="registrado">
		<form class='registro' id='register' method='post' action='registrado.php'>
            <div id="filas"><label>Tu Nombre:</label><input type='text' class='name' name='name' value=''></div>
            <div id="filas"><label>Tus Apellidos:</label><input type='text' class='lastname' name='lastname' value=''></div>
            <div id="filas"><label>Tu Email:</label><input type='text' class='e-mail' name='e-mail' value=''></div>
            <div id="filas"><label>Telefono:</label><input type='text' class='telefono' name='telefono' value=''></div>
            <div><label>Sexo: <select name = "sexo">
            					<option value = 1>Masculino</option>
            					<option value = 0>Femenino</option>
            					</select></label></div>
           <div id="filar"><input type="image" src="fondos_pagina/boton-registrar.png" value='' class='click' name='click' ></div>
            

        </form>
     </div>
	
   
	    	</body>
     
         </html>
