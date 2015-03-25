<?php
	include('header.php');
	//include('nav.php');
	include('nav-sub-blog.php');
?>

<style>.bluemenu {background-color: #2f90ce; } </style>    
<script>
	var d = document.getElementById("navigator");
	d.className = d.className + " bluemenu";
</script>   


<div class="container padded">

	<div class="row">
		
		<div class="col-sm-8"><!--- excerpt -->
			
			<!-- wp-posts loop-->
			<article>
			  <header>
				 <div class="article">
					<img class="img-article" src="img/customer-nimblebit.jpg">
					<div class="article-title"><h1><a href="<?=$single?>" title="article">5 Stats That Will Change Your Perception of Mobile Gamers</a></h1></div>
				</div>
			  </header>
			  <span class="pull-left"><small><time pubdate="pubdate">03/12/2015</time> by <a href="#" rel="author">Kira Sparks</a>, Content Marketing Manager</small></span>
			  <span class="pull-right">
			  	<i class="fa fa-twitter"></i>
			  	<i class="fa fa-facebook"></i>
			  </span>
			  <br class="clear">
			  <br>
			  <p>The global mobile gaming market is expected to generate $23.9 billion by 2016, yet misconceptions about mobile gamers abound. People tend to envision gamers as young males, armed with bags of chips, playing first-person shooters in their parent’s basements. But, the data tells a different story. These five stats will show you the changing face... <a href="<?=$single?>">Read More</a></p>
			</article>
			<article>
			  <header>
				 <div class="article">
					<img class="img-article" src="img/customer-nimblebit.jpg">
					<div class="article-title"><h1><a href="<?=$single?>" title="article">5 Stats That Will Change Your Perception of Mobile Gamers</a></h1></div>
				</div>
			  </header>
			  <span class="pull-left"><small><time pubdate="pubdate">03/12/2015</time> by <a href="#" rel="author">Kira Sparks</a>, Content Marketing Manager</small></span>
			  <span class="pull-right">
			  	<i class="fa fa-twitter"></i>
			  	<i class="fa fa-facebook"></i>
			  </span>
			  <br class="clear">
			  <br>
			  <p>The global mobile gaming market is expected to generate $23.9 billion by 2016, yet misconceptions about mobile gamers abound. People tend to envision gamers as young males, armed with bags of chips, playing first-person shooters in their parent’s basements. But, the data tells a different story. These five stats will show you the changing face... <a href="<?=$single?>">Read More</a></p>
			</article>
			<article>
			  <header>
				 <div class="article">
					<img class="img-article" src="img/customer-nimblebit.jpg">
					<div class="article-title"><h1><a href="<?=$single?>" title="article">5 Stats That Will Change Your Perception of Mobile Gamers</a></h1></div>
				</div>
			  </header>
			  <span class="pull-left"><small><time pubdate="pubdate">03/12/2015</time> by <a href="#" rel="author">Kira Sparks</a>, Content Marketing Manager</small></span>
			  <span class="pull-right">
			  	<i class="fa fa-twitter"></i>
			  	<i class="fa fa-facebook"></i>
			  </span>
			  <br class="clear">
			  <br>
			  <p>The global mobile gaming market is expected to generate $23.9 billion by 2016, yet misconceptions about mobile gamers abound. People tend to envision gamers as young males, armed with bags of chips, playing first-person shooters in their parent’s basements. But, the data tells a different story. These five stats will show you the changing face... <a href="<?=$single?>">Read More</a></p>
			</article>

			<!-- wp-posts loop-->
		
		</div><!--- excerpt -->
		
		<div class="col-sm-4">
			
			<aside>
				<div class="subscribe">
					<h4 class="text-center">Get regular mobile news &amp; insights delivered straight to your inbox!</h4>
					
					
					
					<form action="#">
				 		<div class="form-group text-center">
					 		<input  class="form-control input-lg" type="text" name="FirstName" placeholder="First Name">
				 		</div>
				 		<div class="form-group text-center">
				 			<input  class="form-control input-lg" type="email" name="Email" placeholder="Email Address *MARKETO*">
				 		</div>
				 		<div class="form-group text-center">
				 			<button class="btn btn-secondary">Subscribe</button>
				 		</div>
					 </form>
					 <br>
					<p class="text-center">
					  	<a href="<?=$rss?>"><i class="fa fa-rss"></i></a>
					  	<a href="<?=$fb?>"><i class="fa fa-facebook"></i></a>
					  	<a href="<?=$tw?>"><i class="fa fa-twitter"></i></a>
					</p>
				</div>
				
				<div class="popular">
					<h4 class="text-center">Trending Articles</h4>
					
					<h1 class="h5 text-center"><a href="<?=$single?>" title="article">5 Stats That Will Change Your Perception of Mobile Gamers</a></h1>
					<hr>

					<h1 class="h5 text-center"><a href="<?=$single?>" title="article">5 Stats That Will Change Your Perception of Mobile Gamers</a></h1>
					<hr>

					<h1 class="h5 text-center"><a href="<?=$single?>" title="article">5 Stats That Will Change Your Perception of Mobile Gamers</a></h1>
					
				</div>
				
			</aside>
			
		</div>
		
	</div>
</div><!--container-->
<br>
<?php include('footer.php'); ?>