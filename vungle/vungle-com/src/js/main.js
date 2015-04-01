$(function(){  
   //Navigation Menu Slider
    $('#nav-expander').on('click', function(e){
  		e.preventDefault();
  		$('body').toggleClass('nav-expanded');
  	});
  	$('#nav-close').on('click', function(e){
  		e.preventDefault();
  		$('body').removeClass('nav-expanded');
  	});
  	// Initialize navgoco with new options
    $(".main-menu").navgoco({
        caret: '<i class="fa fa-plus pull-right plus-sign"></i>', //<span class="caret"></span>
        accordion: false,
        openClass: 'open',
        save: true,
        cookie: {
            name: 'navgoco',
            expires: false,
            path: '/'
        },
        slide: {
            duration: 300,
            easing: 'swing'
        }
    });
});
// modifications to nav defaults, fade menu and +/- toggle
$(function(){
    // toggle plus minus iconz  
  	$('.main-menu li a').click(function(){
  	$(this).find('i').toggleClass('fa-plus fa-minus');
	});
	/* fades menu background in and out */
	$(function() {
	    //caches a jQuery object containing the header element
	    var header = $(".fade-transparent");
	    $(window).scroll(function() {
	        var scroll = $(window).scrollTop();
	
	        if (scroll >= 200) {
	            header.removeClass('fade-transparent').addClass("fade-background");
	        } else {
	            header.removeClass("fade-background").addClass('fade-transparent');
	        }
	    });
	});
});
// for careers page
$(function(){
	  	// bounce scroll indicator PROBABLY CAN USE WOW for something cooler
	  	$( ".bounce" ).effect( "bounce", { times: 4 }, 2000 );
});
//adds styles to parent element for a.active on li:hover
//note: does not revert when on mouseOut
$("a.active").parents('li').hover(function(){
	$(this).css("background", "#ccc");
	$("a.active").css("color", "#2f90ce");
});
//subnavigation	
									
		$(function(){
			// toggle for sub-nav menu items
			$('.subnav-item').click(function(){
				$('.subnav-item').toggleClass('subnav-open');
				$('.fa-plus').toggleClass('fa-minus');	
			});
			// adds active class to subnav, aria-selected data-attribute would not work??
			// MUST MODIFY THE $CAREERS TO POINT TO THE ABSOLUTE URL, CONFIRMED WORKING IN CHROME AND
			var activeurl = window.location.href;
			console.log(activeurl);
			$('a[href="'+activeurl+'"]').addClass('active work').prepend('<i class="fa fa-plus"></i>').removeAttr('href'); //.attr('href', '#');
		});
									
/// smooth scrolling to anchors	
//http://stackoverflow.com/questions/9068587/accounting-for-a-fixed-header-with-animate-scrolltop-and-target-offset-top
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({scrollTop: target.offset().top - 58}, 1000);
        return false;
      }
    }
  });
});
//subscribe form
$(function(){
	// Get the form.
	var form = $('#vungle-newsletter');
	// Get the messages div.
	var formMessages = $('#form-messages');
	$(formMessages).hide();
	// Set up an event listener for the contact form.
	$(form).submit(function(e) {
		// Stop the browser from submitting the form.
		e.preventDefault();
		// Serialize the form data.
		var formData = $(form).serialize();
		// Submit the form using AJAX.
		$.ajax({
			url: 'https://app-ab04.marketo.com/index.php/leadCapture/save/',
			type: 'POST',
			dataType: 'jsonp',
			//jsonp: false,
			data: formData,
			error: function(error){
				console.log(error);
				console.log('marketo error');
				//$(form).hide(1000);
				$(formMessages).fadeIn(1000);
			},
			success: function(response) {
				console.log(response);
				console.log('great success');
				//$(form).hide(1000);
				$(formMessages).fadeIn(1000);
     		}
		});
	});
});
//contact form
$(function(){
	// Get the form.
	var form = $('#vungle-contact');
	// Get the messages div.
	var formMessages = $('#form-error');
	$(formMessages).hide();
	// Set up an event listener for the contact form.
	$(form).submit(function(e) {
		// Stop the browser from submitting the form.
		e.preventDefault();
		// Serialize the form data.
		var formData = $(form).serialize();
		// Submit the form using AJAX.
		$.ajax({
			url: 'https://app-ab04.marketo.com/index.php/leadCapture/save/',
			type: 'POST',
			dataType: 'jsonp',
			//jsonp: false,
			data: formData,
			error: function(error){
				console.log(error);
				console.log('marketo error');
				//$(form).hide(1000);
				$(formMessages).fadeIn(1000);
			},
			success: function(response) {
				console.log(response);
				console.log('great success');
				//$(form).hide(1000);
				$(formMessages).fadeIn(1000);
     		}
		});
	});
});