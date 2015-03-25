<?php include('header.php'); //include('nav.php'); include('nav-sub.php'); ?><style>.bluemenu {background-color: #2f90ce; }</style><script>var d = document.getElementById("navigator");
	d.className = d.className + " bluemenu";</script><style>/*	.icon {
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
		}</style><div class="container padded"><div class="page-header"><h1>Where Do You Want to Be?</h1></div><ul id="offices" class="row list-inline text-center"></ul></div><script>var greenuri = 'https://api.greenhouse.io/v1/boards/vungle/embed/';
		
		var jobs = greenuri+'jobs';
		var offices = greenuri+'offices';
		var departments = greenuri+'departments';
		
		$.ajax({ // get offices object
		    url: offices,
		    type: "GET",
		    dataType: 'jsonp',
		    cache: true,
		    data: {content: true}, //loads job content into new object
		    context: document.body,
		    success: function (data, status, error) {
		      console.log('success', data);

				
				var theOffices = data.offices;
				
				var byID = theOffices.slice(0);
				byID.sort(function(a,b){
					return a.id - b.id;
				});
				

				for (i = 0; i < byID.length; i++) {
					//console.log(byID[i].name);
					var id = byID[i].id;
					
					if (id != 0){
						var location = byID[i].name;
						var locationurl = location.toLowerCase().replace(/\s+/g, ''); //office name url for href
						var locationquery = 'office.php?office='+locationurl;
						
						$('#offices').append('<a href="'+locationquery+'"><li class="col-sm-4 col-xs-6 location"><div class="bldg"><img class="img-responsive" src="img/office-locations/'+locationurl+'.svg" onerror="this.src="/img/png/office-locations/'+locationurl+'.png";this.onerror=null;"><br />'+location+'</div></li></a>')
						
					};
					
				};
			
					
		

	
		    },
		    error: function (data, status, error) {
		      console.log('error', data, status, error);
		    }
		});</script><?php include('footer.php'); ?>