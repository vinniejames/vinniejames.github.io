<?php include('header.php'); //include('nav.php'); include('nav-sub.php'); ?><style>.icons { 
	padding: 0 50px 15px;
}	

 
/* LIST #2 */
#list2 { position: relative; }
#list2 ol { font-size:24px; color:#000;  }
#list2 ol li { color: #ffffff; }
#list2 ol li p { padding:8px;  /*border-left: 1px solid #999;*/ color: #333;	 }
#list2 ol li p em { display:block; }

#list2 ol li span.disc { 
	  display: block;
	  background: #3591cc;
	  border-radius: 50%;
	  height: 35px;
	  width: 35px;
	  position: relative;
	  top: 44px;
	  left: -45px;
	  z-index: -100;
   }
#list2 ol li span.left-border {border-left: 1px solid #999; display: block}	

#list2 ol {
  list-style-type: none;
  margin-left: 0;
}

#list2 ol > li {
  counter-increment: customlistcounter;
}

#list2 ol > li:before {
  content: counter(customlistcounter) " ";
  font-weight: 300;
  float: left;
  width: 3em;
  
  position: relative;
	  top: 44px;
	  left: -35px;
}

#list2 ol:first-child {
  counter-reset: customlistcounter;
}</style><style>.bluemenu {background-color: #2f90ce; }</style><script>var d = document.getElementById("navigator");
	d.className = d.className + " bluemenu";</script><div class="homepage-hero-module padded"><div class="video-container"><div id="video-controls" style=""><p class="text-center"><button class="btn btn-secondary btn-lg" type="button" id="play-pause"><i class="fa fa-play"></i></button></p></div><div class="filter"></div><video id="video" class="video-controls fillWidth" poster="img/about/team.jpg"><source src="vid/vungle-talent.mp4" type="video/mp4"><source src="vid/vungle-talent.ogg" type="video/ogg"><source src="vid/vungle-talent.webm" type="video/webm"><img src="vid/vungle.gif" title="Your browser does not support the <video> tag"></video></div></div><div class="container people"><div class="row"><div class="col-sm-12"><h2 class="subline">Work alongside wonderful, brilliant people to revolutionize mobile advertising. Get 401k, health and dental, as well as reimbursement for lunches at the restaurants of your choice, cellphone plans, and gym memberships.</h2></div></div><div class="page-header"><h1>Vungle is About...</h1></div><div class="row"><div class="col-md-3 col-sm-6 wow fadeInLeft" data-wow-delay="250ms"><figure><div class="icons"><img class="img-responsive" src="img/careers/hustle.svg" onerror="this.src='/img/png/careers/hustle.png';this.onerror=null" alt=""></div><figcaption><h3 class="text-center">Hustle</h3><ul><li>Be the best</li><li>Transcend barriers</li></ul></figcaption></figure></div><div class="col-md-3 col-sm-6 wow fadeInLeft"><figure><div class="icons"><img class="img-responsive" src="img/careers/own.svg" onerror="this.src='/img/png/careers/own.png';this.onerror=null" alt=""></div><figcaption><h3 class="text-center">Owning It</h3><ul><li>Demand excellence</li><li>Take initiative</li><li>Enable new ideas to grow</li></ul></figcaption></figure></div><div class="col-md-3 col-sm-6 wow fadeInRight"><figure><div class="icons"><img class="img-responsive" src="img/careers/transparency.svg" onerror="this.src='/img/png/careers/transparency.png';this.onerror=null" alt=""></div><figcaption><h3 class="text-center">Transparency</h3><ul><li>Share the right information with the right people in a timely manner</li><li>Be honest</li><li>Be open</li></ul></figcaption></figure></div><div class="col-md-3 col-sm-6 wow fadeInRight" data-wow-delay="250ms"><figure><div class="icons"><img class="img-responsive" src="img/careers/users.svg" onerror="this.src='/img/png/careers/users.png';this.onerror=null" alt=""></div><figcaption><h3 class="text-center">Users First</h3><ul><li>Team over self</li><li>Focus on our partner's goals</li><li>Optimize for the end user</li></ul></figcaption></figure></div></div><div class="page-header"><h1>Perks</h1></div><div class="row"><div class="col-md-3 col-sm-6 wow fadeInLeft" data-wow-delay="250ms"><figure><div class="icons"><img class="img-responsive" src="img/careers/health.svg" onerror="this.src='/img/png/careers/health.png';this.onerror=null" alt=""></div><figcaption class="text-center">Great healthcare and 401k plan</figcaption></figure></div><div class="col-md-3 col-sm-6 wow fadeInLeft"><figure><div class="icons"><img class="img-responsive" src="img/careers/gym.svg" onerror="this.src='/img/png/careers/gym.png';this.onerror=null" alt=""></div><figcaption class="text-center">Reimbursable gym membership</figcaption></figure></div><div class="col-md-3 col-sm-6 wow fadeInRight"><figure><div class="icons"><img class="img-responsive" src="img/careers/meals.svg" onerror="this.src='/img/png/careers/meals.png';this.onerror=null" alt=""></div><figcaption class="text-center">Covered food costs</figcaption></figure></div><div class="col-md-3 col-sm-6 wow fadeInRight" data-wow-delay="250ms"><figure><div class="icons"><img class="img-responsive" src="img/careers/dog.svg" onerror="this.src='/img/png/careers/dog.png';this.onerror=null" alt=""></div><figcaption class="text-center">Bring your dog to work</figcaption></figure></div></div><br><div class="row"><div class="col-sm-12 col-md-10 col-md-push-1"><div class="col-md-4 col-sm-6 wow fadeInLeft" data-wow-delay="250ms"><figure><div class="icons"><img class="img-responsive" src="img/careers/stock-options.svg" onerror="this.src='/img/png/careers/stock-options.png';this.onerror=null" alt=""></div><figcaption class="text-center">Meaningful &amp; transparent equity</figcaption></figure></div><div class="col-md-4 col-sm-6 wow fadeInLeft"><figure><div class="icons"><img class="img-responsive" src="img/careers/transport.svg" onerror="this.src='/img/png/careers/transport.png';this.onerror=null" alt=""></div><figcaption class="text-center">Covered transportation costs</figcaption></figure></div><div class="col-md-4 col-sm-6 wow fadeInRight"><figure><div class="icons"><img class="img-responsive" src="img/careers/vungle-exchange-program.svg" onerror="this.src='/img/png/careers/vungle-exchange-program.png';this.onerror=null" alt=""></div><figcaption class="text-center">Work around the globe with our Exchange program</figcaption></figure></div></div></div><div class="page-header"><h1>Joining Vungle</h1></div><div class="row"><div class="col-sm-12"><p class="lead">The Vungle hustle is no more apparent than in the way we’re hiring and growing Vungle. We set high standards and we go after the very best, and we’re quick and transparent about it.</p><p class="lead">If you’re not an exact fit for one of our roles, but we like your hustle, we’ll work with you to find a home for you at Vungle. Check out our available positions <a href="<?=$departments?>">here.</a></p><div class="col-sm-10 col-sm-push-1"><div id="list2"><ol><li><span class="left-border"></span><span class="disc"></span><p>Submit your application - our talent team and your future teammates will review your application to see if there’s a potential opportunity for you at Vungle.</p></li><li><span class="left-border"></span><span class="disc"></span><p>Phone call - have a short 15-30 min chat with a few members of the team, and potentially answer some technical questions.</p></li><li><span class="left-border"></span><span class="disc"></span><p>Initial on-site interview - 1-2 hours on-site to meet your immediate team members and get to know us.</p></li><li><span class="left-border"></span><span class="disc"></span><p>Full on-site interview - we’ll invite you to meet the rest of the team in person, and chat with our CEO, Zain Jaffer.</p></li><li><span class="left-border"></span><span class="disc"></span><p>Official Offer - If the team thinks you’re a great fit for the company, we’ll send out an offer within 3-5 days.</p></li></ol></div></div></div><p>&nbsp;</p><p class="text-center"><a href="<?=$departments?>" class="btn btn-lg btn-secondary">Apply Now</a></p><br></div></div><?php include('footer.php'); ?>