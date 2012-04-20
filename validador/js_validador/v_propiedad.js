$(document).ready(function () {
    var emailreg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
    $(".boton").click(function (){
        $(".error").remove();
        if( $(".nombre").val() == "" ){
            $(".nombre").focus().after("<span class='error'>Ingrese el nombre</span>");
            return false;
        }else if( $(".numero_int").val() == ""){
            $(".numero_int").focus().after("<span class='error'>Ingrese el numero interior</span>");
            return false;
        }else if( $(".numero_ext").val() == "" ){
            $(".numero_ext").focus().after("<span class='error'>Ingrese el numero de exterior</span>");
            return false;
        }else if( $(".direccion").val() == "" ){
            $(".direccion").focus().after("<span class='error'>Ingrese la direccion</span>");
            return false;
        }else if( $(".coordenadas").val() == "" ){
            $(".coordenadas").focus().after("<span class='error'>Ingrese las coordenadas</span>");
            return false;
        }else if( $(".comentario").val() == "" ){
            $(".comentario").focus().after("<span class='error'>Ingrese un comentario</span>");
            return false;
        }else if( $(".precio").val() == "" ){
            $(".precio").focus().after("<span class='error'>Ingrese el precio</span>");
            return false;
        }
        
    });
    $(".nombre, .numero_int, .numero_ext, .direccion, .coordenadas, .comentario, .precio").keyup(function(){
        if( $(this).val() != "" ){
            $(".error").fadeOut();
            return false;
        }
    });
  
});
