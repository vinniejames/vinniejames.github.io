<?php include('header.php'); ?>
 
<div class="homepage-hero-module">
    <div class="video-container">
        
        <div class="title-container wow zoomIn">
            
            <div class="description">
	            <div class="headline">
	                <h1>The way developers put video ads in their apps</h1>
	            </div>
                <p class="text-center"><a href="<?=$signup?>" class="btn btn-primary btn-lg">Get Started With Our SDK</a></p>
            </div>
        </div><!--title-container-->
        
        <div class="button-container"><!--  container-fluid -->
	        <div class="row jumbo-row">
		         	<a class="jumbo-btn" href="<?=$monetize?>">
			        <div class="col-sm-4 jumbo-col jumbo-col-edge">
			          <h2 class="text-center">Monetize</h2>
			        </div>
			        </a>
			        <a class="jumbo-btn" href="<?=$advertise?>">
			        <div class="col-sm-4 jumbo-col jumbo-col-middle">
			          <h2 class="text-center">Advertise</h2>
			        </div>
			        </a>
			        <a class="jumbo-btn" href="<?=$programmatic?>">
			        <div class="col-sm-4 jumbo-col jumbo-col-edge">
			          <h2 class="text-center">Programmatic</h2>
			        </div>
			        </a>
	        </div>
        </div>
        
        <div class="filter"></div>
        <video autoplay loop class="fillWidth" poster="vid/vungle.png">
             <source src="vid/vungle.webm" type="video/webm" />
             <source src="vid/vungle.mp4" type="video/mp4" />
			 <source src="vid/vungle.ogg" type="video/ogg" />
			 <object>
		       <embed src="vid/vungle.mp4" type= "application/x-shockwave-flash" allowfullscreen="false" allowscriptaccess="always" />
		     </object>
			 <img src="vid/vungle.gif" title="Your browser does not support the <video> tag">
        </video>
        <div class="poster hide">
            <img src="vid/vungle.gif" alt="The way devs put video ads in their apps">
        </div>
    </div><!--video-container-->
</div><!--homepage-hero-module-->




<div class="container">
	<div class="row">
		
		<div class="col-sm-12">
			<h2 class="text-center subline">Vungle products provide necessary infrastructure for app monetization through video ads. More than 100 million people worldwide see a Vungle ad each month.</h2>
		</div>
		
	</div>
</div><!--container-->


<!-- full viewheight background section-->      
<div class="container-fluid">
	<div class="row background-section product">
		<div class="col-sm-5 col-sm-push-6 col-xs-6 col-xs-push-5">
			<h1>Our Products</h1>
			<p class="lead">Our technology delivers engaging ads and a seamless user experience to generate higher ad revenues.</p>
			<a href="<?=$product?>" class="btn btn-secondary">Learn More</a>
		</div>
	</div>
</div>
<!-- full viewheight background section--> 




   
     
     <div class="container page-header">
        <h1>What's New With Vungle</h1>
     </div>
         
         
     <div class="container-fluid">
	     
	     <div class="row-fluid">
		     
		     <div class="col-sm-4">
			     <h3>Blog</h3>
			     <h4>AppsWorld, April 22-23, 2015, Berlin</h4>
		     </div>
		     <div class="col-sm-4">
			     <h3>Events</h3>
			     <h4>AppsWorld, April 22-23, 2015, Berlin</h4>
		     </div>
		     <div class="col-sm-4">
			     <h3>News</h3>
			     <h4>AppsWorld, April 22-23, 2015, Berlin</h4>
		     </div>
		     
	     </div>
	     
	     
	     
     </div>


<div class="container page-header">
	<a href="<?=$blog?>" class="btn btn-secondary">View Blog</a>
</div>



      
      
<div class="container">
     
      <div class="page-header">
        <h1>We Are Hiring</h1>
      </div>
      
      <div class="row">
	      <div class="col-sm-6 col-sm-push-6">
			  	<div class="embed-responsive embed-responsive-16by9">
		        	<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/g82pjvGuc40" frameborder="0" allowfullscreen></iframe>
		        	<br>
		        </div>
		  </div>
	      <div class="col-sm-6 col-sm-pull-6">
		      <p>Work alongside wonderful, brilliant people to revolutionize mobile advertising. Get 401k, health and dental as well as reimbursement for lunches at the restaurants of your choice, and gym memberships.</p>
		      <p>&nbsp;</p>
		      <a href="<?=$careers?>" class="btn btn-secondary">Apply Now</a>
	      </div>
		  
      </div>
      
</div>



<br>
<?php include('footer.php'); ?>