
      <footer>
         <div class="footer">
			 <div class="container-fluid">
			    
			    <div class="container">
			 	<div class="row">
				 	<div class="col-sm-4">
					 	<h3>Subscribe to Our Newsletter</h3>
					 	<!-- <label for="Email">Email address:</label> -->
					 	<form id="vungle-newsletter" method="POST" action="http://app-ab04.marketo.com/index.php/leadCapture/save" class="">
					 		<div class="form-group">
					 			<input id="email"  class="form-control input-lg" type="text" type="email" name="Email" placeholder="Email Address" required>
					 			
					 			<input type="hidden" name="formid" class="" value="1102">
					 			<input type="hidden" name="munchkinId" class="" value="184-FKZ-935">
					 			
					 		</div>
					 		<input value="Get Updates" type="submit" class="btn btn-primary btn-lg">
					 	</form>
					 	<div id="form-messages"><p>Thanks for subscribing, check your inbox for awesome content!</p></div>
				 	</div>
				 	
				 	
				 	
				 	
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
										 	<li><a href="<?=$programmatic?>">Programmatic</a></li>
										 	<li><a href="<?=$product?>">Product</a></li>	
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