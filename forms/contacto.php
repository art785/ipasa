<head>
<link rel="stylesheet" href="css/contacto.css" type="text/css" charset="utf-8"/>
</head>
<body>
<div class="box" id="info">
            <div class="description contacto"></div>
            <h2>Formulario de Contacto</h2>
            <form id="formulario" name="formulario"><input type="hidden" name="phpMyAdmin" value="3068b5491f703bc27d2a43326f772556" />
              <label for="username">Nombre:</label>
              <input class="inputNormal text" type="text" id="inputNombre" value="Escribe tu nombre...">
              <span id="req-username" class="requisites error">A-z, mínimo 4 caracteres</span>
              
              <label for="mail">Mail:</label>
              <input class="inputNormal text" type="text" id="inputCorreo" value="Escribe tu email...">
              <span id="req-email" class="requisites error">Un e-mail válido por favor</span>
              
              <label for="telefono">Sitio web:</label>
              <input class="inputNormal text" type="text" id="inputWeb" value="Url de tu web si tienes...">
              
              <label for="comentarios">Comentarios: <span id="req-message" class="requisites error messageerror <?php echo $message ?>">Escribe un mensaje(A-z)</span></label>
              <textarea class="inputNormal text" id="inputComentario"></textarea>
              <br/><br/>
              <div>
                <button class="button fit" id="botonEnviar" onClick="validaForm()" type="button">Enviar Formulario</button>
                <button class="button fit" type="reset">Limpiar Formulario</button>
              </div>
            </form>
              <div id="transparencia">
                    <div id="transparenciaMensaje"></div>
              </div>
        </div>
</body>
