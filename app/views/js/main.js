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
		
		/* Logout */
		$('a[href=logout]').click(function(e){
			e.preventDefault();
			disconnectUser($.cookie('access_token'));
		});
				
	});
	
	$(window).load(function(){
		$('div#landing span.hover-here').fadeIn("slow");	
	});
})(jQuery)