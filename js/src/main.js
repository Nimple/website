$(document).ready(function (){

	$('.container').not('.guidance .container').velocity("fadeIn", { duration: 500, delay: 100 });
	$('.phone-frame-nexus').velocity("transition.slideUpIn", {delay: 950, opacity: 1});
	$('.phone-frame-iphone').velocity("transition.slideUpIn", {delay: 1250, opacity: 1});

	$('.navbar').velocity("transition.slideDownIn", {duration: 750, delay: 800});
});
