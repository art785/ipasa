$(document).ready(function()

{

$('#contact').ajaxForm( {

target: '#res_contact',

success: function() {

$('#contact_div').slideUp('fast');

}

});

});
