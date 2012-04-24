<?php
include 'lib/controller/ComboboxController.php';
$combobox= new ComboboxController();
?>
<!DOCTYPE HTML>
<html>
    <head>
        
        <link rel='stylesheet' href='css/contacto.css'>
        <script type="text/javascript" src="validador/js_validador/ref_contacto.js"></script>
        <script type="text/javascript" src="validador/js_validador/v_contacto.js"></script>
    </head>
        <body>
<div id="res_busqueda"></div><div id="busqueda_div">
		<form class='contacto' id='contact' method='post' action='mail/phpmailer.php'>
          <div id="form_top"></div>
          <div id="fila"><label>Ubicacion:</label><?php echo'<div>'. $combobox->Combobox_Localidad().'</div>'?></div>
          <div id="fila"><label>Tipo de Inmueble:</label><?php echo '<div>'. $combobox->Combobox_tipo_Propiedad().'</div>';?></div>
          <div id="fila"><label>Numero de Cuartos:</label><?php echo '<div>'. $combobox->Combobox_Cuartos().'</div>';?></div>
          <div id="fila"><label>Numero de Baños:</label><?php echo '<div>'.$combobox->Combobox_Banos().'</div>';?></div>
          <h1>Precios</h1> 
           <div id="fila"><label>Precio Minimo:</label><input type="text" name="precio_min"/></div>
           <div id="fila"><label>Precio Maximo:</label><input type="text" name="precio_max"/></div> 
           <div id="fila2"><input type="image" src="fondos_pagina/boton-enviar-comentario.png" value='' class='buscar'name='buscar'></div>
        </form>        
        </div>
      
	</body>
 </html>