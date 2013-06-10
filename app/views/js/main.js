(function($){
	$(document).ready(function(){
		
		/* Display login button */
		$('div#landing span.logo').mouseenter(function(){
			$(this).next('.loginControls').fadeIn(400, function(){
				/* Hide login button */
				$('#landing .loginControls:visible').mouseleave(function(){
					$(this).fadeOut();
				});
			});	
		});
				
	});
	
	$(window).load(function(){
		$('div#landing span.hover-here').fadeIn("slow");	
	});
})(jQuery)