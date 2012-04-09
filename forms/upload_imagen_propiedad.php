
<form name="subir_imagen_propiedad" method="post" enctype="multipart/form-data">          
     <input type="file" name="imagen_propiedad"  /><br />
     <input type="submit" name="imagen_enviada" value="Subir Imagen" />   
</form>
<?php $foto_popiedad = new Propiedad_FotoController();
            $foto_popiedad->subir_imagen_propiedad();
                    
?>