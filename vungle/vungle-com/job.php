<?php
	//http://stackoverflow.com/questions/17032990/can-anyone-give-me-an-example-for-phps-curlfile-class
	//http://www.php-guru.in/2013/upload-files-using-php-curl/
	//http://www.58bits.com/blog/2014/06/14/how-upload-file-using-php-curl
	if(!empty($_POST)) {
	 	$ch = curl_init(); 
		$url = ""; //SET API URL
		$i = 0;
		$postfields = $_POST;
		foreach($_FILES as $name => $file_info) {
		if($file_info['name']){
		  $postfields[$name] = new CurlFile($file_info['tmp_name'], $file_info['type'], $file_info['name']);
		  $i++;
		  }
		}
		
		if ($i != 0) {
			//prevent the rest from happening if there are no file attachments
			$options = array(
		            CURLOPT_URL => $url,
		            CURLOPT_POST => 1,
		            CURLOPT_POSTFIELDS => $postfields,
		            CURLOPT_RETURNTRANSFER => true
		        ); // cURL options
		   
		   
		    curl_setopt_array($ch, $options);
		    $result = json_decode(curl_exec($ch), true);
		   
			if(!curl_errno($ch))
		    {
		        $info = curl_getinfo($ch);
		        if ($info['http_code'] == 200 && !empty($result['success']))
		            $msg = $result['success'];
		    } else {
		        $msg = curl_error($ch);
		    }
		    
		    curl_close($ch);
		}else {
			$msg = "Please complete the required form fields";
		}
		
	}
?>
<?php
	include('header.php');
	include('nav.php');
	include('nav-sub.php'); 
?>

<style>.bluemenu {background-color: #2f90ce; } 

.padded{ padding-top:116px;}
</style>    
<script>
	var d = document.getElementById("navigator");
	d.className = d.className + " bluemenu";
</script> 
 

<div class="container padded">
	<h1 id="jobtitle"></h1>
	<hr />
	<div class="row">
		
		<div class="col-sm-8">
			<div  id="job"></div>
		</div>
		<div class="col-sm-4">
			<div id="apply"></div>
		</div>
		
	</div>
</div><!--container-->

<?php include('footer.php'); ?>

	<script>
		
		// pulls id from query string parameter using regEx
		/*
		function getParameterByName(name){
			name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
			var regex = new RegExp("[\\?&]"+name+"=([^&#]*)"),
				results = regex.exec(location.search);
			return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));	
		};
		
		var jobid = getParameterByName('id');
		
		console.log(jobid);
		*/
		
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
		var jobid = getQueryVariable('id');
		
		
		console.log(jobid);
		
		
		
		
		var greenuri = 'https://api.greenhouse.io/v1/boards/vungle/embed/'
		
		var jobs = greenuri+'jobs';
		var offices = greenuri+'offices';
		var departments = greenuri+'departments';
		var singlejob = greenuri+'job'+'?id='+jobid;
		
		$.ajax({
		    url: singlejob,
		    type: "GET",
		    dataType: 'jsonp',
		    cache: true,
		    data: {content: true, questions: true}, //loads job content & questions into new objectS
		    context: document.body, 
		    success: function (data, status, error) {
		      console.log('success', data);
			  
			
			//add job title h1
			$('#jobtitle').append(data.title);
			 
			 // Job Application
			// console.log(data.questions[0].fields[0]);
			$('#apply').append('<input type="hidden" name="id" value="'+jobid+'" />');
			
			
			 
			 for (i = 0; i < data.questions.length; i++){
				 
				//console.log(data.questions[i].label);
				 var label = data.questions[i].label;
				 
				 $('#apply').append('<h2>'+label+'</h2>');
				 
				 for (j = 0; j < data.questions[i].fields.length; j++) {
					 //console.log(data.questions[i].fields[j].name);
					 var name = data.questions[i].fields[j].name;
					 //console.log(data.questions[i].fields[j].type);
					 var type = data.questions[i].fields[j].type;
					 
					 var required = data.questions[i].required;
					 console.log(required);
					 
					
					if (type === 'input_file') {
						var type = "file";
					}
					
					 
					 $('#apply').append(
					 '<div class="form-group">'+
					    '<label for="'+name+'">'+label+'</label>'+
					    '<input id="'+name+'" type="'+type+'" class="form-control '+type+'" name="'+name+'" placeholder="'+label+'" data-required="'+required+'">'+
					  '</div>'
					 );
					 
					 
				 };
				  
				 
				 
			 };
			 
			$("#apply").append(
			'<div class="form-group">'+
				'<button type="submit" class="btn btn-lg btn-primary">Apply</button>'+
			'</div>'
			 );
			 
			 
			 
			 
			 
			 
			 
			 //SINGLE JOB DETAILS
			  var el = document.createElement('div');
			  el.innerHTML = data.content;
			  var childEl = el.childNodes[0].nodeValue;
			 
			 //console.log(childEl);
			  
			 $('#job').append(childEl);
			 
			 //kills inline styles from greenhouse
			 $('*').removeAttr('style');
			 
			 
			 
		      
		    },
		    error: function (data, status, error) {
		      console.log('error', data, status, error);
		    }
		});
		
		
		
		

		
	</script>
