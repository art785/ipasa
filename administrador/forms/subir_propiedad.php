<html>
<head>
<title>Ingresar Propiedad</title>
</head>
<body>
<h1>Ingresar Propiedad</h1>
<form action=”subir_propiedad.php” method=”post”>
<label for=”nombre”>Nombre:</label>
<input id=”nombre” type=”text” name=”nombre” value=''><br /><br />
<label for=”numero_int”>Numero interior:</label>
<input id=”numero_int” name=”numero_int”></input><br /><br />
<label for="numero_ext">Numero exterior</label>
<input id="numero_ext" name="numero_ext"></input><br /><br />
<label for="direccion">Direccion</label>
<input id="direccion" name="direccion"></input><br /><br />
<label for="coordenadas">Coordenadas</label>
<input id="coordenadas" name="coordenadas"><br /><br />
<label for=”rentada”>Rentada</label>
<select id=”rentada” name=”rentada”>
<option value=”1”>si</option>
<option value=”0”>no</option>
</select><br /><br />
<label for=”ofertada”>En oferta</label>
<select id=”ofertada” name=”ofertada”>
<option value=”1”>si</option>
<option value=”0”>no</option>
</select><br /><br />
<label for="comentario">Comentario</label><br /><br />
<textarea id="comentario" name="comentario"rows=”8″ cols=”50″></textarea><br /><br />
<label for=”id_localidad”>Localidad</label>
<select id="id_localidad" name="id_localidad">
<option value=”cancun”>Cancun</option>
<option value=”playa_del_carmen”>Playa del Carmen</option>
</select><br /><br />
<label for=”id_tipo”>Tipo de porpiedad</label>
<select id="id_tipo" name="id_tipo">
<option value=”casa”>Casa</option>
<option value=”departamento”>departamento</option>
</select><br /><br />
<label for=”precio”>Precio:</label>
<input id=”precio” type=”precio” name=”precio” value=''><br /><br />
</form>
</body>
</html>
