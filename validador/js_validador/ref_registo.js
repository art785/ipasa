$(document).ready(function()

{

$('#register').ajaxForm( {

target: '#resultado',

success: function() {

$('#registrado').slideUp('fast');

}

});

});
