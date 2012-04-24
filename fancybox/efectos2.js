
$(document).ready(function() {
$("a.gmap").fancybox({
'padding': 0, // optional
'width': 640, //or whatever you like
'height': 380,
'type': 'iframe'
});

$("a.youtube").fancybox({
	'transitionIn' : 'elastic',
	'padding' : 0,
	'autoScale' : false,
	'transitionOut' : 'fade',
	'width' : 680,
	'height' : 495,
	'type' : 'swf'
	});

}); // ready
 
