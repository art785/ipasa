$(document).ready(function () {
    var emailreg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
    $(".click").click(function (){
        $(".errores").remove();
        if( $(".name").val() == "" ){
            $(".name").focus().after("<span class='error'>Ingrese su nombre</span>");
            return false;
        }else if( $(".lastname").val() == ""){
            $(".lastname").focus().after("<span class='error'>Ingrese sus apellidos</span>");
            return false;
	}else if( $(".e-mail").val() == "" || !emailreg.test($(".email").val()) ){
            $(".e-mail").focus().after("<span class='error'>Ingrese un email correcto</span>");
            return false;
        }else if( $(".telefono").val() == "" ){
            $(".telefono").focus().after("<span class='error'>Ingrese un telefono</span>");
            return false;
        }
    });
    $(".name, .lastname, .telefono").keyup(function(){
        if( $(this).val() != "" ){
            $(".error").fadeOut();
            return false;
        }
    });
    $(".e-mail").keyup(function(){
        if( $(this).val() != "" && emailreg.test($(this).val())){
            $(".errores").fadeOut();
            return false;
        }
    });
});
