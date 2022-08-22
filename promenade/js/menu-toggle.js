$(document).ready(function(){
	
	$( ".menu-toggle" ).click(function() {
		$(".menu").toggleClass('toggled-on');
		$(".area-restrita-wrapper").toggleClass('toggled-on');
		$(".site-header").toggleClass('toggled-on');
	});
});