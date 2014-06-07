$(document).ready(function (){
	var s = skrollr.init({
		render: function(data) {
			//Debugging - Log the current scroll position.
			//console.log(data.curTop);
		}
	});

	$('.frame_Nexus5').fadeIn(1200, function(){
		$('.frame_iPhone').fadeIn(1200);
	});
});
