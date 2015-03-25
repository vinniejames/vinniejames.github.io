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
			.icon {
			background: #ccc;
			display: block;
			margin: 10px;
			padding: 20px;
		}
		.bldg {
			text-transform: uppercase;
			color: #666666;
			
		}
		.bldg img {
			margin: 50px 50px 0 50px;
		}
		
		.hero-small {
			height: 75vh;
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
		
		#bg {
		  position: absolute; 
		  top: -50%; 
		  left: -50%; 
		  width: 200%; 
		  height: 200%;
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
		
	</div>
	
	<h1 id="dept" class=""><!-- location --></h1>

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
	      <tbody id="joblisting">
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
		var query = getQueryVariable('id');
		console.log(query);

		
		
		var greenuri = 'https://api.greenhouse.io/v1/boards/vungle/embed/';
		
		var jobs = greenuri+'jobs';
		var offices = greenuri+'offices';
		var departments = greenuri+'departments';
		
		$.ajax({
		    url: departments,
		    type: "GET",
		    dataType: 'jsonp',
		    cache: true,
		    data: {content: true}, //loads job content into new object
		    context: document.body,
		    success: function (data, status, error) {
		      console.log('success', data);
		      

			  	var depts = data.departments;
				
				for(i = 0; i < depts.length; i++){
					
					
					
					if (depts[i].id == query) {
						
						var deptname = depts[i].name;
						var depturl = deptname.toLowerCase().replace(/[\s+\&+]/g, '');
				
						$('#bg').append('<img id="thedepartment" src="img/dept/'+depturl+'-dept.jpg" onerror="this.src="/img/dept/'+depturl+'-dept.png";this.onerror=null;" alt="'+deptname+'">')
						$('#dept').append(deptname);
						console.log(depts[i].jobs[0].title);
						
						for(j = 0; j < depts[i].jobs.length; j++){
							
							
							//console.log(depts[i].jobs[j].id);
							
							var title = depts[i].jobs[j].title;
							
							var jobsid = depts[i].jobs[j].id;
							
							// creates lowercase string for url href
							var location = depts[i].jobs[j].location.name;
							var locationurl = location.toLowerCase().replace(/\s+/g, ''); //office name url for href
							//console.log(locationurl);
							var locationquery = 'office.php?office='+locationurl;
							
							//console.log(title);
							//console.log(location);
							
							 var vungleurl = 'apply.php?id=';
							 var jobsurl = vungleurl+jobsid;
							
							var jobapp = '#';
							
							
							$('#joblisting').append(
								'<tr>'+
						          '<td><a href="'+jobsurl+'" alt="">'+title+'</a></td>'+
						          '<td><a href="'+locationquery+'" alt="">'+location+'</a></td>'+
						        '</tr>'
							);
							
						};
						
						
					}//if
					
					
					
				}//for	

	
		      
		    },
		    error: function (data, status, error) {
		      console.log('error', data, status, error);
		    }
		});
		
	</script>
	
	<?php include('footer.php'); ?>