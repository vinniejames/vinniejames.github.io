    <style>
	    ul.main-menu {

	    }
	    .main-menu li {
		     font-family: 'Open Sans', 'Helvetica Neue', Helvetica, 'Franklin Gothic', Arial, sans-serif;
		    font-weight: 300 !important;
	    }
	    </style>
    <nav>
        <ul class="list-unstyled main-menu">
          
          <!--Include navigation here-->
          <li><a href="<?=$monetize?>">Monetize</a></li>
          <li><a href="<?=$advertise?>">Advertise</a></li>
          <li><a href="<?=$programmatic?>">Programmatic</a></li>
          
          <li><a href="<?=$product?>">Product</a></li>
          <li><a href="#">About Us</a>
            <ul class="list-unstyled">
                <li class="sub-nav"><a href="<?=$aboutus?>">Who We Are <span class="icon"></span></a></li>
                <li class="sub-nav"><a href="<?=$careers?>">Careers <span class="icon"></span></a></li>
                <li class="sub-nav"><a href="<?=$blog?>">Blog <span class="icon"></span></a></li>
                <li class="sub-nav"><a href="<?=$newsroom?>">Newsroom <span class="icon"></span></a></li>
                <li class="sub-nav"><a href="<?=$events?>">Events <span class="icon"></span></a></li>
            </ul>
          </li>
          <li><a href="#">Contact Us</a>
            <ul class="list-unstyled">
                <li class="sub-nav"><a href="<?=$contactus?>">Sales &amp; Product Inquiries <span class="icon"></span></a></li>
                <li class="sub-nav"><a href="<?=$resources?>">Help Center <span class="icon"></span></a></li>
            </ul>
          </li>

<!-- sign up and login -->
          <li><a href="<?=$login?>">Login <span class="icon login"></span></a></li>
          <li><a href="<?=$signup?>">Sign Up <span class="icon sign-up"></span></a></li>
          
          
         </ul>
          
      </nav>
          
    <div id="navigator" class="navbar navbar-inverse navbar-fixed-top fade-transparent">      
        
        <!--Include brand here-->
        <div class="pull-right">
	        <a href="<?=$home?>"><img class="vungle-logo" src="img/vungle-logo.svg" alt="Vungle, the way developers put video ads in their apps" /></a>
        </div>
        
        <div class="navbar-header"><!-- pull-right -->
          <a id="nav-expander" class="nav-expander fixed">
            <i class="fa fa-bars white"></i></a>
          <!--</a>-->
        </div>
        
    </div>