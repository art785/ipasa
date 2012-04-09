SELECT Propiedad.id_propiedad , Fotos.ruta , Fotos.descripcion FROM Propiedad, Fotos WHERE Propiedad.ofertada = 1 AND Propiedad.id_propiedad = Fotos.id_propiedad AND Propiedad.id_propiedad = 
