$(function() {
    $('.error').hide();
    $(".button").click(function() {
      // validate and process form here
 
      $('.error').hide();
  	  var name = $("input#name").val();
  		if (name == "") {
        $("label#name_error").show();
        $("input#name").focus();
        return false;
      }
  		var email = $("input#email").val();
  		if (email == "") {
        $("label#email_error").show();
        $("input#email").focus();
        return false;
      }
  		var phone = $("input#phone").val();
  		if (phone == "") {
        $("label#phone_error").show();
        $("input#phone").focus();
        return false;
      }
 
    });
  });
