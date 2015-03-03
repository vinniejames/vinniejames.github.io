<?php
	include('header.php');
	include('nav.php');

	
	$fb = "http://facebook.com";
	$tw = "http://twitter.com";
	$in = "http://linkedin.com"; 
	$rss = "http://vungle.com/rss";
?>
<style>


.subscribe {
	background: #2f90ce;
	padding: 40px;
	border-radius: 4px;
	margin-top: 10px;
	color: #ffffff;
}	
	
.popular {
	margin-top: 40px;
	background: #f3f3f3;
	padding: 40px;
	border: 2px solid #e4e4e4;
	border-radius: 4px;
	color: #333;
	
}
.events {
	margin-top: 0px;
	background: #f3f3f3;
	padding: 40px;
	border: 2px solid #e4e4e4;
	border-radius: 4px;
	color: #333;
	
}
aside h1, aside h2, aside h3, aside h4, aside h5, aside h6 {
	font-family: 'Open Sans', 'Helvetica Neue', Helvetica, 'Franklin Gothic', Arial, sans-serif;
	margin-bottom: 40px;

}
aside .h1, aside .h2, aside .h3, aside .h4, aside .h5, aside .h6 {
	font-family: 'Open Sans', 'Helvetica Neue', Helvetica, 'Franklin Gothic', Arial, sans-serif;
}
.popular h4 {
	text-transform: uppercase;
}
aside button {
	margin: 10px auto;
}
aside .fa {
	margin: 0 10px;
}

article {
	margin-top: 10px;
	margin-bottom: 40px;
}
.article {
	position: relative;
}



.the-article blockquote {
border-left: none;
position: absolute;
top: 0;
color: #fff;
background: rgba(47,144,206,0.5);
height: 100%;
opacity: 0;
transition: opacity 1s;

padding: 30px 20px;
text-align: center;

}
.the-article blockquote:hover {
	opacity: 1;
	transition: opacity 1s;
}

.the-article blockquote footer {
	color: #fff;
}


.article-title {
	position: absolute;
	bottom: 0;
	width: 100%;
	background: rgba(0,0,0,0.6);
	padding:  0 20px 10px;
}
.article-title h1, .article-title a, .article-title a:visited, .article-title a:active, .article-title a:hover {
	color: #fff;

}
article .article {
	height: 400px;
	overflow: hidden;
}
.article.feature {
	height: 500px;
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
			
			<div class="col-sm-4">
				<img class="img-responsive full" src="img/customer-nimblebit.jpg">
			</div>
			<div class="col-sm-8">
				<h1><a href="#" title="event name">5 Stats That Will Change Your Perception of Mobile Gamers</a></h1>
				<p>Hosted by: Vungle</p>
				<p>Saturday, March 1, 2015 from 1:30 to 8:00pm (PST)</p>
				<p>San Francisco, CA</p>
			</div>
			<hr />
			
			<div class="col-sm-4">
				<img class="img-responsive full" src="img/customer-nimblebit.jpg">
			</div>
			<div class="col-sm-8">
				<h1><a href="#" title="event name">5 Stats That Will Change Your Perception of Mobile Gamers</a></h1>
				<p>Hosted by: Vungle</p>
				<p>Saturday, March 1, 2015 from 1:30 to 8:00pm (PST)</p>
				<p>San Francisco, CA</p>
			</div>
			<hr />
			
			<div class="col-sm-4">
				<img class="img-responsive full" src="img/customer-nimblebit.jpg">
			</div>
			<div class="col-sm-8">
				<h1><a href="#" title="event name">5 Stats That Will Change Your Perception of Mobile Gamers</a></h1>
				<p>Hosted by: Vungle</p>
				<p>Saturday, March 1, 2015 from 1:30 to 8:00pm (PST)</p>
				<p>San Francisco, CA</p>
			</div>
			<hr />
		
		</div><!--- excerpt -->
		
		
		
		<div class="col-sm-4 col-sm-pull-8">
			
			<aside>
				
				<div class="events">
					<h4 class="h4 text-center">Upcoming Events</h4>
					
					<h3 class="h3 text-center">San Francisco</h4>
					
					<h1 class="h3 text-center"><a href="#" title="article">Join Us at AppsWorld</a></h1>
					<p class="text-center">February 20, 2015</p>
					<hr>
					
					<h1 class="h3 text-center"><a href="#" title="article">Join Us at AppsWorld</a></h1>
					<p class="text-center">February 20, 2015</p>
					<hr>

					<h3 class="h3 text-center">Berlin</h4>
					
					<h1 class="h3 text-center"><a href="#" title="article">Join Us at AppsWorld</a></h1>
					<p class="text-center">February 20, 2015</p>
					<hr>
					
				</div>
				
			</aside>
			
		</div>
		
	</div>
</div><!--container-->
<?php include('footer.php'); ?>