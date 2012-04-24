<html>
   <head>
   <title>Ingresar Propiedad</title>

        <link rel='stylesheet' href='css/subir_propiedad.css'>
        <script type="text/javascript" src="validador/js_validador/v_propiedad.js"></script>
   </head>
   <body>
        
         <form id="subir_propiedad" action=”subir_propiedad.php” method="post">
             <div id="form_top"></div>
            <div id="fila"><h1>Ingresar Propiedad</h1></div>
            <div id="fila"><label>Nombre:</label><span class="input_a"><input id='nombre' class='nombre' type='text' name='nombre' value=''placeholder="escriba nombre de la propiedad"></span></div>
            <div id="fila"><label>Numero interior:</label><span class="input_a"><input id='numero_int'class='numero_int' name='numero_int' value='' placeholder='escriba num interior'></span></div>
            <div id="fila"><label>Numero exterior</label><span class="input_a"><input id='numero_ext'class='numero_ext' name='numero_ext'value='' placeholder='escriba num exterior'></span></div>
            <div id="fila"><label>Direccion:</label><span class="input_a"><input id='direccion' class='direccion' name='direccion'value='' placeholder='escriba la direccion'></span></div>
            <div id="fila"><label>Mapa:</label><span class="input_a"><input id="coordenadas" class='coordenadas' name="coordenadas" value='' placeholder='inserta url de mapa'></span></div>
            <div id="fila"><label for=”rentada”>Rentada</label>
               <select id=”rentada” name=”rentada” class="rentada">
                  <option value=”1”>si</option>
                  <option value=”0”>no</option>
               </select>
           </div>
           <div id='fila'><label for=”ofertada”>Publicar en la pagina</label>
               <select id=”ofertada” name=”ofertada” class="ofertada">
                  <option value=”1”>si</option>
                  <option value=”0”>no</option>
               </select>
           </div>
           <div id='fila'><label for="comentario">Comentario</label><br/>
                  <textarea id="comentario" class='comentario' name="comentario"rows=”8″ cols=”50″ placeholder='escriba su comentario'></textarea>
           </div>
           <div id='fila'><label for=”id_localidad”>Localidad</label>
               <select id="id_localidad" name="id_localidad" class="id_localidad">
                   <option value=”cancun”>Cancun</option>
                   <option value=”playa_del_carmen”>Playa del Carmen</option>
               </select>
           </div>
           <div id='fila'><label for=”id_tipo”>Tipo de porpiedad</label>
               <select id="id_tipo" name="id_tipo" class="id_tipo">
                   <option value=”casa”>Casa</option>
                   <option value=”departamento”>departamento</option>
               </select>
           </div>
           <div id='fila'><label for="precio">Precio:</label><span class="input_a"><input id=”precio” class='precio' type="text" name=”precio” value='' placeholder='escriba el precio'></span></div>
          <div id="fila2"><input type="image" src="../fondos_pagina/boton-enviar-comentario.png" value='' class='boton'name='boton'></div>
       </form>
   </body>
</html>