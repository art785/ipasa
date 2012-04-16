jQuery(document).ready(function(){
  //variables globales
  var formBoxes= jQuery(".text");
  var inputUsername = jQuery("#inputNombre");
  var reqUsername = jQuery("#req-username");
  var inputEmail = jQuery("#inputCorreo");
  var reqEmail = jQuery("#req-email");
  var inputWebsite = jQuery("#inputWeb");
  var textareaMessage = jQuery("#inputComentario");
  var reqMessage = jQuery("#req-message");
  
  var defaultUsername = "Escribe tu nombre...";
  var defaultEmail = "Escribe tu email...";
  var defaultWebsite = "Url de tu web si tienes...";
  
  //funciones de validacion
  function validateMessage(){
    //Si el mensaje esta vacio
    if(textareaMessage.val().length == 0){
      reqMessage.fadeIn('fast');
      reqMessage.removeClass("requisites");
      return false;
    }

    else{
      reqMessage.fadeOut('fast');
      reqMessage.addClass("requisites")//oculta el mensaje de nuevo
      return true;
    }  
  }
  
  function validateUsername(){
    //NO cumple longitud minima
    if(inputUsername.val().length < 4 || inputUsername.val == defaultUsername){
      reqUsername.fadeIn('fast');
      reqUsername.removeClass("requisites");
      return false;
    }
    //SI longitud pero NO solo caracteres A-z
    else if(!inputUsername.val().match(/^[a-zA-Z]+$/)){
      reqUsername.fadeIn('fast');
      reqUsername.removeClass("requisites");
      return false;
    }
    // SI longitud, SI caracteres A-z
    else{
      reqUsername.fadeOut('fast');
      reqUsername.addClass("requisites")//oculta el mensaje de nuevo
      return true;
    }
  }
  function validateEmail(){
    //NO hay nada escrito
    if(inputEmail.val().length == 0){
      reqEmail.fadeIn('fast');
      reqEmail.removeClass("requisites");
      return false;
    }
    // SI escrito, NO VALIDO email
    else if(!inputEmail.val().match(/^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i)){
      reqEmail.fadeIn('fast');
      reqEmail.removeClass("requisites");
      return false;
    }
    // SI rellenado, SI email valido
    else{
      reqEmail.fadeOut('fast');
      reqEmail.addClass("requisites");//oculta el mensaje de nuevo
      return true;
    }
  }
  
  //controlamos la validacion en los distintos eventos
  // Perdida de foco
  inputUsername.blur(validateUsername);
  inputEmail.blur(validateEmail);
  textareaMessage.blur(validateMessage);
  
  // En cuanto el usuario esta pulsando teclas (escribiendo)
  inputUsername.keyup(validateUsername);
  inputEmail.keyup(validateEmail);
  textareaMessage.keyup(validateMessage);
  
  // Envio de formulario
  jQuery("#form1").submit(function(){
    if(validateUsername() == true && validateEmail() == true && validateMessage() == true)
    {
      jQuery("#loading").animate({height:'show',width:'show',opacity:'show'},{duration:'slow'});
      return true;
    }
    else
    {
      return false;
    }
  });
  
  //controlamos el foco / perdida de foco para los input text
  formBoxes.focus(function(){
    jQuery(this).addClass("active");
  });
  formBoxes.blur(function(){
    jQuery(this).removeClass("active");  
  });

  //Para que los inputs tengan un texto descriptivo de la informacion requerida
  //se ve bonito :)
  inputUsername.focus(function(){
    if(jQuery(this).attr("value") == defaultUsername) jQuery(this).attr("value", "");
  });
  inputUsername.blur(function(){
    if(jQuery(this).attr("value") == "") jQuery(this).attr("value", defaultUsername);
  });
  
  inputEmail.focus(function(){
    if(jQuery(this).attr("value") == defaultEmail) jQuery(this).attr("value", "");
  });
  inputEmail.blur(function(){
    if(jQuery(this).attr("value") == "") jQuery(this).attr("value", defaultEmail);
  });
  
  inputWebsite.focus(function(){
    if(jQuery(this).attr("value") == defaultWebsite) jQuery(this).attr("value", "");
  });
  
  inputWebsite.blur(function(){
    if(jQuery(this).attr("value") == "") jQuery(this).attr("value", defaultWebsite);
  });
  
});

