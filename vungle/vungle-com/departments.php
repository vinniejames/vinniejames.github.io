<?php
	include('header.php');
	include('nav.php');
	include('nav-sub.php'); 
?>

<style>.bluemenu {background-color: #2f90ce; } </style>    
<script>
	var d = document.getElementById("navigator");
	d.className = d.className + " bluemenu";
</script> 

<style>
		.icon-dep {
			
			display: block;
			margin: 10px;
			padding: 20px;
			min-height: 220px;
			overflow: hidden;
			position: relative;
		}
		.location .heads {
			z-index: 100;
			position: absolute;
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
			
			
		}
		.location h2{
			text-shadow: 0 0 5px #2f90ce;
			margin-top: 20%;
			color: #ffffff;
			text-transform: uppercase;
			font-family: 'Open Sans', 'Helvetica Neue', Helvetica, 'Franklin Gothic', Arial, sans-serif;
			text-align: center;

		}
		.location img{
			z-index; -10009;
			position: absolute;
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
			width: 100%;
			height: 100%;
		}
		.bldg {
			text-transform: uppercase;
			color: #666666;
			
		}
		.bldg img {
			margin: 50px 50px 0 50px;
		}
</style>





<div class="container"  style="padding-top: 116px;">
	
	<div class="page-header">
        <h1>What Do You Want to Do?</h1>
    </div>


	<ul id="departments" class="row list-inline text-center">
		<!-- from greenhuse api -->
	</ul><!-- /row -->
	
	<!--
	<div class="row">
		
		<ul class="row list-inline">
			<li class="col-xs-4 list-item" style="overflow: hidden; height: 220px">
				<h2 style="position: absolute;" class="heading2">NEAT JOB</h2>
				<img style="position: absolute;" class="back-img" src="img/dept/engineering.jpg">
			</li>
			<li class="col-xs-4 list-item">
				<h2 class="heading2">NEAT JOB</h2>
				<img class="back-img" src="img/dept/engineering.jpg">
			</li>
			<li class="col-xs-4 list-item">
				<h2 class="heading2">NEAT JOB</h2>
				<img class="back-img" src="img/dept/engineering.jpg">
			</li>
			<li class="col-xs-4 list-item">
				<h2 class="heading2">NEAT JOB</h2>
				<img class="back-img" src="img/dept/engineering.jpg">
			</li>
			<li class="col-xs-4 list-item">
				<h2 class="heading2">NEAT JOB</h2>
				<img class="back-img" src="img/dept/engineering.jpg">
			</li>
			<li class="col-xs-4 list-item">
				<h2 class="heading2">NEAT JOB</h2>
				<img class="back-img" src="img/dept/engineering.jpg">
			</li>
		</ul>
		
		
	</div>
	-->
	
</div><!-- container -->


    
    
    
<?php include('footer.php'); ?>


	
	<script>

		var greenuri = 'https://api.greenhouse.io/v1/boards/vungle/embed/'
		
		var jobs = greenuri+'jobs';
		var offices = greenuri+'offices';
		var departments = greenuri+'departments';
		
		
		$.ajax({ // get dept object
		    url: departments,
		    type: "GET",
		    dataType: 'jsonp',
		    cache: true,
		    data: {content: true}, //loads job content into new object
		    context: document.body,
		    success: function (data, status, error) {
		      console.log('success', data);
		      
		     
		      
		      for (i = 0; i < data.departments.length; i++){
			  	
			  	 var id = data.departments[i].id; // gabs id of department to filter out "no department" jobs id 0
			      
			      var numjobs = data.departments[i].jobs.length; //number of jobs in department
			      
			      if ((id != 0) && (numjobs > 0) ) { // if department has a job
			      	var dept = data.departments[i].name;
			      	//var depturl = dept.toLowerCase().replace(/\s+/g, ''); //office name url for href
			      	//console.log(locationurl);
			      	//console.log(location);
			      	
			      	
			      	
			      	$('#departments').append(
			      		'<a href="dept?id='+id+'">'+
			      			'<li class="col-xs-6 col-md-4 location">'+
			      				'<div class="icon-dep">'+
			      					'<img src="img/dept/engineering.jpg" alt="" >'+
			      					'<div class="heads"><h2>'+dept+'</h2></div>'+
			      				'</div></li></a>');
			      	
			      	//console.log(location);
			      }
		      }
		      
		      

			
			
			
				
			
		    },
		    error: function (data, status, error) {
		      console.log('error', data, status, error);
		    }
		    // ajax	
		});
	</script> 