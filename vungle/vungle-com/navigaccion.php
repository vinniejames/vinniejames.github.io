<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<style>
	
	
.navbar-sub {
	position: relative;
	overflow: hidden; /* hides extra becuase weird bottom margin ~8px */
	top: 0;
	margin-bottom: 0;
	border: none;
	z-index: 500;
	background-color: #cccccc;
	border-radius: 0;
	width: 100%;
	display: block;
	height: 51px;
	/*box-shadow: 0 0 8px rgba(0,0,0,0.5);*/
}
.navbar-sub ul {
	margin-bottom: 0;
	list-style: none;
}	

.navbar-sub li {
	/*display: inline-block;*/
	float: left;
	padding: 0 20px;
	text-transform: uppercase;
	font-size: 14px;
	/*padding: 20px;*/
	
}
.navbar-sub li:hover {
	background-color: #2f90ce;
	color: #fff;
	
}
.subnav-item {
	display: block;
	color: #666;
	height: 51px;
	padding: 16px 0;
}
.navbar-sub li:hover a {
	color: #fff;
	text-decoration: none;
}

.subnav-item[aria-selected="true"] {
	border-bottom: 4px solid #2f90ce;
	color: #2f90ce;
	pointer-events: none;
}	

.subnav-item i {
	display: none;
}
	
	
	
@media only screen and (max-width : 768px){
		
		.subnav-item {
		  display: none;
		  float: none;
		}
		
		.subnav-open {
			display: block;
			width: 100%;
			z-index: 1000000;
		}
		
		.subnav-item[aria-selected="true"] {
		  display: block;
		  position: absolute; /* USE to POSITION ACTIVE ELEMENT AT TOP
			top: -40px;   
		  */
		  width: 100%;
		  pointer-events: all;
		  border-bottom: none;
		  }
		
		 .contactus {
		  padding: 10vh 0 0;
	  }
		.navbar-sub li {
			width: 100%;
			/*
			display:none;
			padding: 0 20px;
			text-transform: uppercase;
			font-size: 14px;
			*/
		}
		
		.subnav-item i {
			display: inline;
			margin: 0 20px 0px -38px;
		}
		
		.navbar-sub li:hover {
			background-color: #cccccc;
			color: #2f90ce;
			
		}				

		
	}
	
</style>
</head>
<body>
<!-- sub-nav -->
<div class="navbar-sub">
        
        
         
         <ul>
	         <li><a href="#" class="active">Our Culture</a></li>
	         <li><a href="<?=$locations?>">Locations</a></li>
	         <li><a href="<?=$departments?>">Departments</a></</li>
	         <li><a href="<?=$engineering?>">Engineering</a></</li>
         </ul>
         
        
</div>
<!-- sub-nav -->
</body>
</html>