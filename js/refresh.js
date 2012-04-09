$('document').ready(function()

{

$('#form_propiedades').ajaxForm( {

target: '#resultado_propiedades',

success: function() {

$('#propiedades').slideUp('fast');

}

});

});
