<?php include('header.php'); ?>

<div class="container-fluid hero-image contactus">
	
	<span class="blue-overlay"></span>
	
	
	<div class="row-fluid">
		
		<div class="col-xs-12 col-sm-10 col-sm-push-1 col-md-8 col-md-push-2">
			
			<h2 class="h1">Write Us</h2>
			<p class="lead">Want to learn more? Don't be shy!</p>
			
			<form method="POST" action="https://app-ab04.marketo.com/index.php/leadCapture/save" class="">
			
			<div class="col-sm-6">
			  <div class="form-group">
			    <label class="sr-only" for="firstName">First Name*</label>
			    <input type="text" class="form-control" id="FirstName" name="FirstName" placeholder="First Name" required>
			  </div>
			</div>
			<div class="col-sm-6">
			  <div class="form-group">
			    <label class="sr-only" for="lastName">Last Name*</label>
			    <input type="text" class="form-control" id="LastName" name="LastName" placeholder="Last Name" required>
			  </div>
			</div>
			
			
			<div class="col-sm-6">
			  <div class="form-group">
			    <label class="sr-only" for="email">Email Address*</label>
			    <input type="email" class="form-control" id="Email" name="Email" placeholder="Email" required>
			  </div>
			</div>
			<div class="col-sm-6">
			  <div class="form-group">
			    <label class="sr-only" for="company">Company</label>
			    <input type="text" class="form-control" id="Company" name="Company" placeholder="Company">
			  </div>
			</div>
			<div class="col-sm-6">
			  <div class="form-group">
			    <label class="sr-only" for="partnerType">Partner Type</label>
			    <select id="partnerType" name="Type__c" class="" style="">
				    <option value="">I am a...</option><option value="Advertising">Advertiser</option>
				    <option value="Publishing">Publisher</option><option value="Tech Partner">Programmatic Advertiser </option>
				    <option value="Publishing">Developer</option>
				</select>
			  </div>
			</div>
			<div class="col-sm-6">
			  <div class="form-group">
			    <label class="sr-only" for="message">Your message&hellip;</label>
			    <textarea class="form-control" rows="5" id="message" placeholder="Your message&hellip;"></textarea>
			  </div>
			</div>
			
			  <input type="hidden" name="formid" class="" value="1101">
			  <input type="hidden" name="munchkinId" class="" value="184-FKZ-935">
			  
			  <p class="text-center"><button id="marketoSubmit" type="submit" class="btn btn-primary btn-lg">Submit</button></p>
			</form>
			
		</div>
	</div>
	<!--<i class="bounce fa fa-chevron-circle-down fa-2x fa-inverse"></i>-->
</div>


<div class="container">
	
	<!--
	<div class="row">
		<h1>Marketo</h1>
		<div class="col-sm-12">
			<form id="mktoForm_1082"></form>
			
			
			<script>
				
				
				//MktoForms2.loadForm("//app-ab04.marketo.com", "184-FKZ-935", 1082);
						
				
				MktoForms2.loadForm("//app-ab04.marketo.com", "184-FKZ-935", 1082, function(form){
	
						console.log(form);
						console.log(form.getFormElem());
						console.log(form.getId());
						console.log(form.getValues());
						
						
						form.getFormElem().show();
						
											
					});
				/*
					var btn = document.getElementById("marketoSubmit");
						btn.onclick = function(){
						  //When the button is clicked, get the form object and submit it.
						  MktoForms2.whenReady(function (form){
						    form.submit();
						    
						  });
						};	
	
				*/
			</script>
			
			
			
		</div>		
	</div>
	-->
	
	
	<div class="page-header">
        <h1>Visit Our Offices</h1>
    </div>
    
	
	
	<div class="row maps">
	
		<div class="col-xs-8 col-xs-push-2 col-sm-6 col-sm-push-0">
			
			
			<a href=" https://maps.google.com/maps?q=185+Clara+Street%2C+San+Francisco%2C+CA+94107" target="blank">
			<img class="img-responsive img-full" src="http://maps.googleapis.com/maps/api/staticmap?center=185+Clara+Street%2C+San+Francisco%2C+CA+94107&amp;zoom=15&amp;size=400x250&amp;maptype=roadmap
			  &amp;markers=color:blue%7Clabel:V%7C185+Clara+Street%2C+San+Francisco%2C+CA+94107&amp;sensor=false">
			</a>
			
			<h2 class="text-center map">San Francisco</h2>
			<p class="text-center">185 Clara Street, <br>San Francisco, CA 94107</p>
		</div>
		<div class="col-xs-8 col-xs-push-2 col-sm-6 col-sm-push-0">
			
			<a href=" https://maps.google.com/maps?q=235+St+John+Street%2C+London%2C+EC1V+4NG" target="blank">
			<img class="img-responsive img-full" src="http://maps.googleapis.com/maps/api/staticmap?center=235+St+John+Street%2C+London%2C+EC1V+4NG&amp;zoom=15&amp;size=400x250&amp;maptype=roadmap
			  &amp;markers=color:red%7Clabel:V%7C235+St+John+Street%2C+London%2C+EC1V+4NG&amp;sensor=false">
			</a>
			
			<h2 class="text-center map">London</h2>
			<p class="text-center">235 St John Street <br>London, EC1V 4NG</p>
		</div>
		<div class="col-xs-8 col-xs-push-2 col-sm-6 col-sm-push-0">
			
			<a href=" https://maps.google.com/maps?q=Greifswalder+Strasse+212%2C+10404+Berlin" target="blank">
			<img class="img-responsive img-full" src="http://maps.googleapis.com/maps/api/staticmap?center=Greifswalder+Strasse+212%2C+10404+Berlin&amp;zoom=15&amp;size=400x250&amp;maptype=roadmap
			  &amp;markers=color:green%7Clabel:V%7CGreifswalder+Strasse+212%2C+10404+Berlin&amp;sensor=false">
			</a>
			
			<h2 class="text-center map">Berlin</h2>
			<p class="text-center">Greifswalder Strasse 212 <br>10404 Berlin</p>
		</div>
		<div class="col-xs-8 col-xs-push-2 col-sm-6 col-sm-push-0">
			
			<a href=" https://maps.google.com/maps?q=Galaxy+SOHO+%EF%BC%88Block+B%EF%BC%89+Chaoyangmen%2C+Dongcheng%2C+Beijing+China+100020" target="blank">
			<img class="img-responsive img-full" src="http://maps.googleapis.com/maps/api/staticmap?center=Galaxy+SOHO+%EF%BC%88Block+B%EF%BC%89+Chaoyangmen%2C+Dongcheng%2C+Beijing+China+100020&amp;zoom=15&amp;size=400x250&amp;maptype=roadmap
			  &amp;markers=color:blue%7Clabel:V%7CGalaxy+SOHO+%EF%BC%88Block+B%EF%BC%89+Chaoyangmen%2C+Dongcheng%2C+Beijing+China+100020&amp;sensor=false">
			</a>
			
			<h2 class="text-center map">Beijing</h2>
			<p class="text-center">Galaxy SOHO (Block B）Chaoyangmen, Dongcheng, Beijing China 100020</p>
		</div>
		
	</div>
	<br>
	
	<div class="row">
		<div class="col-xs-8 col-xs-push-2 col-sm-6 col-sm-push-0 col-map">
			<img class="img-responsive img-full" src="img/contact/vungle-seoul.jpg">
			<div class="soon">
				<h2 class="text-center">Seoul</h2>
				<p class="text-center">Coming Soon!</p>
			</div>
		</div>
		<div class="col-xs-8 col-xs-push-2 col-sm-6 col-sm-push-0 col-map">
			<img class="img-responsive img-full" src="img/contact/vungle-tokyo.jpg">
			<div class="soon">
				<h2 class="text-center">Tokyo</h2>
				<p class="text-center">Coming Soon!</p>
			</div>
		</div>

	</div><!-- /row -->
	
		
	
	
	
	
	
	
</div><!-- container -->

    

<?php include('footer.php'); ?>

 