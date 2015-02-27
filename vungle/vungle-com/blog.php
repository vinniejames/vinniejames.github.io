<?php
	include('header.php');
	include('nav.php');
	include('nav-sub.php'); 
?>
<style>

.subscribe {
	background: #2f90ce;
	padding: 40px;
	border-radius: 4px;
	margin-top: 10px;
}	
	
.popular {
	margin-top: 40px;
	background: #f3f3f3;
	padding: 40px;
	border: 2px solid #e4e4e4;
	border-radius: 4px;
	color: #333;
	
}
aside h1, aside h2, aside h3, aside h4, aside h5, aside h6 {
	font-family: 'Open Sans', 'Helvetica Neue', Helvetica, 'Franklin Gothic', Arial, sans-serif;

}	

aside button {
	margin: 10px auto;
}
</style>

<style>.bluemenu {background-color: #2f90ce; } </style>    
<script>
	var d = document.getElementById("navigator");
	d.className = d.className + " bluemenu";
</script>   


<div style="margin-top: 116px;" class="container">
	<div class="row">
		
		<div class="col-sm-8 col-sm-push-4"><!--- excerpt -->
			
			<!-- wp-posts loop-->
			<article>
			  <header>
			    <h1>5 Stats That Will Change Your Perception of Mobile Gamers</h1>
			    <p><time pubdate="pubdate">03/12/2015</time></p>
			  </header>
			  <span class="pull-left">by <a href="#" rel="author">Kira Sparks</a>, Content Marekting Manager</span>
			  <span class="pull-right">
			  	<i class="fa fa-twitter"></i>
			  	<i class="fa fa-facebook"></i>
			  </span>
			  <br class="clear">
			  <br>
			  <p>The global mobile gaming market is expected to generate $23.9 billion by 2016, yet misconceptions about mobile gamers abound. People tend to envision gamers as young males, armed with bags of chips, playing first-person shooters in their parent’s basements. But, the data tells a different story. These five stats will show you the changing face... <a href="#">Read More</a></p>
			</article>
			<!-- wp-posts loop-->
		
		</div><!--- excerpt -->
		
		<div class="col-sm-4 col-sm-pull-8">
			
			<aside>
				<div class="subscribe">
					<h4 class="text-center">Get regular mobile news &amp; insights delivered straight to your inbox!</h4>
					<form action="">
				 		<div class="form-group">
					 		<input  class="form-control input-lg" type="text" name="FirstName" placeholder="First Name">
				 			<input  class="form-control input-lg" type="email" name="Email" placeholder="Email Address *MARKETO*">
				 			
				 			<button class="btn btn-secondary">Subscribe</button>
				 		</div>
				 		
					 </form>
				</div>
				
				<div class="popular">
					<h4 class="text-center">Trending Articles</h4>
					
					<h1 class="h5 text-center"><a href="#" title="article">5 Stats That Will Change Your Perception of Mobile Gamers</a></h1>
					<hr>

					<h1 class="h5 text-center"><a href="#" title="article">5 Stats That Will Change Your Perception of Mobile Gamers</a></h1>
					<hr>

					<h1 class="h5 text-center"><a href="#" title="article">5 Stats That Will Change Your Perception of Mobile Gamers</a></h1>
					
				</div>
				
			</aside>
			
		</div>
		
	</div>
</div><!--container-->
<?php include('footer.php'); ?>