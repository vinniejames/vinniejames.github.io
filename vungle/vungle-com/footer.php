
      <footer>
         <div class="footer">
			 <div class="container-fluid">
			    
			    <div class="container">
			 	<div class="row">
				 	<div class="col-sm-4">
					 	<h3>Subscribe to Our Newsletter</h3>
					 	<!-- <label for="Email">Email address:</label> -->
					 	<form id="vungle-newsletter" method="POST" action="" class="">
					 		<div class="form-group">
					 			<input id="email"  class="form-control input-lg" type="text" type="email" name="Email" placeholder="Email Address" required>
					 			
					 			<input type="hidden" name="formid" class="" value="1102">
					 			<input type="hidden" name="munchkinId" class="" value="184-FKZ-935">
					 			
					 		</div>
					 		<input value="Get Updates" type="submit" class="btn btn-primary btn-lg">
					 	</form>
					 	<div id="form-messages"></div>
				 	</div>
				 	
				 	
				 	<script>
					 	
					 	$(function(){
						 	//form var
						 	var form = $('#vungle-newsletter');
						 	//msg var
						 	var msg = $('#form-messages');
						 	//execute event listener for form object, correct for page with dual forms?
						 	$(form).submit(function(event){
							 	event.preventDefault();
							 	
							 	
							 	//serialize form data then store key/value string in formData
							 	var formData = $(form).serialize();
							 	
							 	//ajx submit
							 	$.ajax({
								 	type: 'POST',
								 	dataType: 'jsonp',
								 	url: 'https://app-ab04.marketo.com/index.php/leadCapture/save',
								 	data: formData
							 	})
							 	
							 	//success functions
							 	.done(function(response){
								 	//check for form success class
								 	$(msg).removeClass('error');
								 	$(msg).addClass('success');
								 	
								 	//set msg txt
								 	$(msg).text(response);
								 	
								 	// clear the form / HIDE FORM SHOW SUCCESS MSG
								 	$('#email').val('');
							 	})
							 	
							 	.fail(function(data){
								 	//check for the error class
								 	$(msg).removeClass('success');
								 	$(msg).addClass('error');
								 	
								 	//set msg text
								 	if(data.responseText !== ''){
										$(msg).text(data.responseText); 	
								 	}else{
									 	$(msg).text('ooops, what happened? please try again!');
								 	}
							 	})
							 	
							 	
						 	});
						 	
 	
					 	});
					 	
					 	/*
					 	$(function() {

							// Get the form.
							var form = $('#vungle-newsletter');
						
							// Get the messages div.
							var msg = $('#form-messages');
						
							// Set up an event listener for the contact form.
							$(form).submit(function(e) {
								// Stop the browser from submitting the form.
								e.preventDefault();
						
								// Serialize the form data.
								var formData = $(form).serialize();
						
								// Submit the form using AJAX.
								$.ajax({
									type: 'POST',
									url: $(form).attr('action'),
									data: formData
								})
								.done(function(response) {
									// Make sure that the formMessages div has the 'success' class.
									$(msg).removeClass('error');
									$(msg).addClass('success');
						
									// Set the message text.
									$(msg).text(response);
						
									// Clear the form.
									//$('#name').val('');
									$('#email').val('');
									//$('#message').val('');
								})
								.fail(function(data) {
									// Make sure that the formMessages div has the 'error' class.
									$(msg).removeClass('success');
									$(msg).addClass('error');
						
									// Set the message text.
									if (data.responseText !== '') {
										$(msg).text(data.responseText);
									} else {
										$(msg).text('Oops! An error occured and your message could not be sent.');
									}
								});
						
							});
						
						});
						*/
					 	
					 </script> 
				 	
				 	
				 	<div class="col-sm-4">
					 	<div class="row">
						 	<div class="col-xs-11"><h3 class="text-center">Quick Links</h3></div>
					 	</div>
					 	<div class="row">
						 	<div class="col-xs-7">
							 	
							 	
								 	
								 		<ul>
										 	<li><a href="<?=$home?>">Home</a></li>
										 	<li><a href="<?=$monetize?>">Monetize</a></li>
										 	<li><a href="<?=$advertise?>">Advertise</a></li>
										 	<li><a href="<?=$programmatic?>">Programmatic</a></li>								 											<li><a href="<?=$product?>">Product</a></li>	
										 	<li><a href="<?=$contact?>">Contact Us</a></li>
									 	</ul>
								
							 	
						 	</div>
						 	
						 	<div class="col-xs-5">
							 	
								 	
								 		<ul>
										 	<li><a href="<?=$aboutus?>">Who We Are</a></li>
										 	<li><a href="<?=$careers?>">Careers</a></li>
										 	<li><a href="<?=$blog?>">Blog</a></li>
										 	<li><a href="<?=$newsroom?>">Newsroom</a></li>
										 	<li><a href="<?=$events?>">Events</a></li>
										 	<li><a href="<?=$resources?>">Help Center</a></li>
									 	</ul>
								
						 	</div>
					 	</div> 	
				 	</div>
				 	
				 	<div class="col-sm-4">
					 	
						 	<h3 class="">Socialize with Us</h3>

						 	<div class="btn-group">
							 	<a href="<?=$fb?>"><i class="fa fa-facebook-square fa-2x"></i></a>
							 	<a href="<?=$tw?>"><i class="fa fa-twitter-square fa-2x"></i></a>
							 	<a href="<?=$in?>"><i class="fa fa-linkedin-square fa-2x"></i></a>
							 	<a href="<?=$git?>"><i class="fa fa-github-square fa-2x"></i></a>
					 		</div>
					 		<h3 class="">Global Sites</h3>

						 	<div class="btn-group flags">
							 	<a href="<?=$us?>"><h1><span class="flag-icon flag-icon-squared flag-icon-us"></span></h1></a>
							 	<a href="<?=$cn?>"><h1><span class="flag-icon flag-icon-squared flag-icon-cn"></span></h1></a>
							 	<!--
							 	<a href="<?=$gb?>"><h1><span class="flag-icon flag-icon-squared flag-icon-gb"></span></h1></a>
							 	<a href="<?=$de?>"><h1><span class="flag-icon flag-icon-squared flag-icon-de"></span></h1></a>
							 	
							 	<a href="<?=$kr?>"><h1><span class="flag-icon flag-icon-squared flag-icon-kr"></span></h1></a>
							 	<a href="<?=$jp?>"><h1><span class="flag-icon flag-icon-squared flag-icon-jp"></span></h1></a>
							 	<a href="<?=$br?>"><h1><span class="flag-icon flag-icon-squared flag-icon-br"></span></h1></a>
							 	-->
							 	
							 	<!--
								<span class="fa-stack fa-lg">
							 		<i class="fa fa-square fa-stack-2x"></i>
							 		<i class="fa fa-globe fa-stack-1x fa-inverse"></i>
							 	</span>
							 	-->
					 		</div>
						 	
						 	
					 	
				 	</div>
				 	
			 	</div><!-- /row -->
			 	
			 	<div class="row">
				 	<?php date_default_timezone_set('America/Los_Angeles'); ?>
				 	<br>
				 	<p class="text-center"><small>&copy; <?php echo(date('Y')); ?> Vungle. All rights reserved. | <a href="<?=$privacy?>">Our Privacy Policy</a></small></p>
			 	</div>
			    </div><!-- container -->
			    
			 </div>
		 </div><!-- /footer --> 
      </footer>
    
    
   


   
    </body>
</html>