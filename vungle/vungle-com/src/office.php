<?php
	include('header.php');
	//include('nav.php');
	include('nav-sub.php'); 
?>

<style>.bluemenu {background-color: #2f90ce; } </style>    
<script>
	var d = document.getElementById("navigator");
	d.className = d.className + " bluemenu";
</script> 

<style>
		/*	.icon {
			background: #ccc;
			display: block;
			margin: 10px;
			padding: 20px;
		}*/
		.bldg {
			text-transform: uppercase;
			color: #666666;
			
		}
		.bldg img {
			margin: 50px 50px 0 50px;
		}
		
		.hero-small {
			height: 50vh;
			position: relative;
			overflow: hidden;
		}
		
		.hero-small h1 {
			position: relative;
			margin: 0;
			text-align: left;
			top: 40px;
			left: 30px;
					}
					
		/*			
		#bg {
		  position: absolute; 
		  top: 0; 
		  left: 0; 
		  min-width: 100%;
		  min-height: 100%;
		}*/
		
		#bg {
		  position: absolute; 
		 
		 /* top: -50%; 
		  left: -50%; 
		  width: 200%; 
		  height: 200%;*/
		  
		  
		    position: absolute;
			  top: 0;
			  width: 100%;
			  height: 100%;
		}
		#bg img {
		  position: absolute; 
		  top: 0; 
		  left: 0; 
		  right: 0; 
		  bottom: 0; 
		  margin: auto; 
		  min-width: 50%;
		  min-height: 50%;
		}
</style>

<!--
<div class="container-fluid hero-image hero-small" style="margin-top: 116px;">
	
	<h1 id="location" class=""></h1>

</div>
-->
<div class="hero-small padded">
	<div id="bg">
		<img id="" src="" alt="">
	</div>
	
	<h1 id="location" class=""><!-- location --></h1>

</div>





<div class="container"><div class="row"><div class="col-sm-12">

	
	
	<h2 class="h1">Open Positions</h2>

	
		<table class="table table-striped">
	      <thead>
	        <tr>

	          <th>Position</th>
	          <th>Department</th>
	        </tr>
	      </thead>
	      <tbody id="office">
		      <!-- job listings-->
	      </tbody>
	    </table>
	
	
	
</div></div></div>








	
	<script>

		
		// Grabs query string
		function getQueryVariable(variable)
		{
		       var query = window.location.search.substring(1);
		       var vars = query.split("&");
		       for (var i=0;i<vars.length;i++) {
		               var pair = vars[i].split("=");
		               if(pair[0] == variable){return pair[1];}
		       }
		       return(false);
		       
		}
		var queryid = getQueryVariable('office');
		var query = getQueryVariable('id');
		
		
		console.log(queryid);
		console.log(query);
		
		
		
		
		var greenuri = 'https://api.greenhouse.io/v1/boards/vungle/embed/';
		
		var jobs = greenuri+'jobs';
		var offices = greenuri+'offices';
		var departments = greenuri+'departments';
		var jobsByOffice = greenuri+'jobs'+'?id='+queryid;
		
		$.ajax({
		    url: jobs,
		    type: "GET",
		    dataType: 'jsonp',
		    cache: true,
		    data: {content: true, questions: true}, //loads job content & questions into new objectS
		    context: document.body,
		    success: function (data, status, error) {
		  
			  for(i = 0; i < data.jobs.length; i++){
				  var jobLocation = data.jobs[i].offices[0].name; // office location eg SF
				  
				  //console.log(jobLocation);
				  
				  var jobLocationUrl = jobLocation.toLowerCase().replace(/\s+/g, '');
				  //console.log(jobLocation);
				  
				
				  
				  if (queryid == jobLocationUrl) {
	
					  var jobstitle = data.jobs[i].title;
					  var vungleurl = 'dept.php?id=';
					  var joburl = 'apply.php?id=';
					  //url with job id
					  var jobsurl = joburl+data.jobs[i].id;
					  
					  var depturl = vungleurl+data.jobs[i].departments[0].id;
					  
					  var jobslocation = data.jobs[i].location.name;
					  var jobdept = data.jobs[i].departments[0].name;
					  
					  var jobsid = data.jobs[i].id;
					  
					  
					 // $('#office').append('<h2><a href="'+jobsurl+'" alt="'+jobstitle+'">'+jobstitle+'</a></h2><p>'+jobslocation+' '+jobsid+'</p>');
					  
					  $('#office').append(
								'<tr>'+
						          '<td><a href="'+jobsurl+'" alt="">'+jobstitle+'</a></td>'+
						          '<td><a href="'+depturl+'" alt="">'+jobdept+'</a></td>'+
						        '</tr>'
							);
					  
				  }
				 
				  
			  }
			  	
			  	//adds location to header
			   $('#location').append(jobslocation);
			   $('#bg img').attr('src', "img/office-locations/"+queryid+"-pic.jpg").attr('alt', jobslocation);

		      
		    },
		    error: function (data, status, error) {
		      console.log('error', data, status, error);
		    }
		});
		
		
		
		

		
	</script>
	
	<?php include('footer.php'); ?>