$(document).ready(function () {
    var emailreg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
    $(".boton").click(function (){
        $(".error").remove();
        if( $(".nombre").val() == "" ){
            $(".nombre").focus().after("<span class='error'>Ingrese su nombre</span>");
            return false;
        }else if( $(".apellidos").val() == ""){
            $(".apellidos").focus().after("<span class='error'>Ingrese sus apellidos</span>");
            return false;
        }else if( $(".email").val() == ""|| !emailreg.test($(".email").val())){
            $(".email").focus().after("<span class='error'>Ingrese un e-mail correcto</span>");
            return false;
        }else if( $(".telefono").val() == "" ){
            $(".telefono").focus().after("<span class='error'>Ingrese un telefono</span>");
            return false;
        }
    });
    $(".nombre, .telefono, .apellido").keyup(function(){
        if( $(this).val() != "" ){
            $(".error").fadeOut();
            return false;
        }
    });
    $(".email").keyup(function(){
        if( $(this).val() != "" && emailreg.test($(this).val())){
            $(".error").fadeOut();
            return false;
        }
    });
});
