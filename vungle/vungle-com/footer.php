    
    
    <footer>
         <div class="footer">
			 <div class="container">
			 
			 	<div class="row">
				 	<div class="col-sm-4">
					 	<h3>Subscribe to Our Newsletter</h3>
					 	<!-- <label for="Email">Email address:</label> -->
					 	<form action="">
					 		<div class="form-group">
					 			<input  class="form-control input-lg" type="text" type="email" name="Email" placeholder="Email Address *MARKETO*">
					 		</div>
					 		<input type="submit" class="btn btn-primary btn-lg">
					 	</form>
				 	</div>
				 	
				 	<div class="col-sm-4">
					 	<div class="row">
						 	<div class="col-xs-6">
							 	
							 	
								 	<h3>Main Nav</h3>
								 		<ul>
										 	<li>Advertise</li>
										 	<li>Monetize</li>
										 	<li>Products</li>								 	
										 	<li>Resource Center</li>
									 	</ul>
								
							 	
						 	</div>
						 	
						 	<div class="col-xs-6">
							 	
								 	<h3>Company</h3>
								 		<ul>
										 	<li>About Us</li>
										 	<li>Contact Us</li>
										 	<li>Careers</li>
										 	<li>Blog</li>
									 	</ul>
								
						 	</div>
					 	</div> 	
				 	</div>
				 	
				 	<div class="col-sm-4">
					 	
						 	<h3 class="">Socialize with Us</h3>
						 	
						 	<div class="text-center">
						 	<div class="btn-group">
							 	<i class="fa fa-facebook-square fa-3x"></i>
							 	<i class="fa fa-twitter-square fa-3x"></i>
							 	<i class="fa fa-linkedin-square fa-3x"></i>
					 		</div>
						 	</div>
						 	
					 	
				 	</div>
				 	
			 	</div>
			 
			 </div>
		 </div><!-- /footer --> 
      </footer>
    
    
    <!-- Javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
    
    <!-- jQuery Mobile for Swipe Touch Events -->
    <script src="js/jquery.mobile.swipe.min.js"></script>
    
    <!--<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    
    <script src="js/jquery.navgoco.js"></script>
    
    <script src="js/video-hero.js"></script>
    
    <script src="js/aboutus.js"></script>
    
    <script src="js/wow.js"></script>
		<script>
		 $(document).ready(function(){
		 
		 	new WOW().init(); //made wow fire twice, BUT now it doesnt...weird
		 
		 });
		 
		</script>
    
    <script src="js/main.js"></script>
    <!--<script src="js/slider.js"></script>-->
    
    
    <script>
    $(document).ready(function(){												
       
       //Navigation Menu Slider
        $('#nav-expander').on('click',function(e){
      		e.preventDefault();
      		$('body').toggleClass('nav-expanded');
      	});
      	$('#nav-close').on('click',function(e){
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
	  $(document).ready(function(){
		  
		    
	    // toggle plus minus iconz  
	  	$('.main-menu li a').click(function(){
	  	$(this).find('i').toggleClass('fa-plus fa-minus')
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
	      
	  </script>

<!-- for careers page -->
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>

  <script>
  	$(function(){
	  	// bounce scroll indicator PROBABLY CAN USE WOW for something cooler
	  	$( ".bounce" ).effect( "bounce", { times: 4 }, 2000 );
  	})
  </script>
  
  
<script>
	//adds styles to parent element for a.active on li:hover
	//note: does not revert when on mouseOut
	$("a.active").parents('li').hover(function(){
		$(this).css("background", "#ccc");
		$("a.active").css("color", "#2f90ce");
	});
</script>

   


   
    </body>
</html>