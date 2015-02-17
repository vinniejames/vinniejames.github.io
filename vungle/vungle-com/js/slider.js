$(document).ready(function() {  

	// large slider
	$('#carousel-vungle-0').carousel({
		wrap:true,
		interval: 5000,
		pause: "hover",
		});
	
	
	//xs small slider
	$('#carousel-vungle-2').carousel({
		wrap:true,
		interval: 3000
		});
		
	$("#carousel-vungle-2").swiperight(function() {  
	  $(this).carousel('prev');  
		});  
	$("#carousel-vungle-2").swipeleft(function() {  
	   $(this).carousel('next');  
		});  



});