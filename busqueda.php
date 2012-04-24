<?php
include 'lib/controller/ComboboxController.php';
$combobox= new ComboboxController();
?>
<!DOCTYPE HTML>
<html>
    <head>
        
        <link rel='stylesheet' href='css/busqueda.css'>
        <script type="text/javascript" src="validador/js_validador/ref_contacto.js"></script>
        <script type="text/javascript" src="validador/js_validador/v_contacto.js"></script>
    </head>
        <body>
        <div id="form_top"></div>
		<form class='busqueda' id='contact' method='post' action='mail/phpmailer.php'>
          <div id="form_top"></div>
          
          <div id="row"><label>Ubicacion:</label><span class="input_a"><?php echo'<div>'. $combobox->Combobox_Localidad().'</div>'?></span></div>
          <div id="row"><label>Tipo de Inmueble:</label><span class="input_a"><?php echo '<div>'. $combobox->Combobox_tipo_Propiedad().'</div>';?></span></div>
          <div id="row"><label>Numero de Cuartos:</label><span class="input_a"><?php echo '<div>'. $combobox->Combobox_Cuartos().'</div>';?></span></div>
          <!--  <div id="fila"><label>Numero de Baños:</label><span class="input_a"><?php echo '<div>'.$combobox->Combobox_Banos().'</div>';?></div>-->
           <div id="row"><label>Precio Minimo:</label><span class="input_a"><input type="text" name="precio_min" class="precio_min"/></span></div>
           <div id="row"><label>Precio Maximo:</label><span class="input_a"><input type="text" name="precio_max" class="precio_max"/></span></div> 
            <div id="row"><label>Palabra clave:</label><span class="input_a"><input type="text" name="palabra_clave" class="palabra_clave"/></span></div> 
           <div id="row2"><input type="image" src="fondos_pagina/boton-buscar.png" value='' class='buscar'name='buscar'></div>
        </form>        
      
      
	</body>
 </html>