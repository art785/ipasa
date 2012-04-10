<?php


$hola="$('document').ready(function()

{

$('#form_propiedades'+i).ajaxForm( {

target: '#resultado_propiedades',

success: function() {

$('#propiedades').slideUp('fast');

}
});
document.writeln('#form_propiedades'+i); 

});";
?>
