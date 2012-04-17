 var j = jQuery.noConflict();     
	j(document).ready(function(){
        
        j('#contacto').html5form({
            allBrowsers : true,
            responseDiv : '#respuesta',
            messages: 'es',
            method : 'GET',
            colorOn :'#6b6764',
            colorOff :'#0d85a5'
        });
        
    });

