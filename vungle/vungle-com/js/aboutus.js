	    
	    function Exec(name, title, img, bio) {
			this.name = name;
			this.title = title;
			this.img = img;
			this.bio = bio;
			}
		var imgpath = "img/about/";
			
		var zain = new Exec(
			"Zain Jaffer",
			"CEO & Founder",
			imgpath+"zain-jaffer.jpg",
			"Zain Jaffer is the CEO and Founder of Vungle, the leading in-app video ad platform. Vungle was highlighted as one of the top 15 hottest pre-IPO ad tech companies in Business Insider. The company has received $25.5MM in funding from Crosslink Capital, Google Ventures, AOL Ventures, and others, and recently announced the launch of the world's first mobile video ad exchange. A serial entrepreneur in the video space, Zain previously founded an online video learning platform and built a network of entertainment websites that became one of Google's top 150 AdSense publishers. His network was the first to trial AdSense for Video. He is also a founding member of two of the top entrepreneurial societies in Europe and was recently featured in Forbes' 30 under 30. Zain is a graduate of King's College, London (BSc in Business Management), University College of London (MSc in Technology Entrepreneurship) and Singularity University. He currently lives in San Francisco."
		);
		var colin = new Exec(
			"Colin Behr",
			"VP of Business & International Relations",
			imgpath+"colin-behr.jpg",
			"Colin Behr is Vungle's VP of Business and International Relations. Colin built Vungle's publishing business from the beginning, and now leads strategy, partnerships and international expansion. He has been leading Vungle's efforts entering the Chinese market including opening up a new Vungle office in Beijing"
		);
		var andrea = new Exec(
			"Andrea Sharfin",
			"VP of Marketing",
			imgpath+"andrea-sharfin.jpg",
			"Andrea Friedenson is the VP of Marketing at Vungle. She specializes in the intersection between media and technology. Andrea has held marketing roles at Disney, Facebook, Microsoft and Time Warner, and a product management role at Flixster. She holds an A.B. from Cornell University and an M.B.A from MIT Sloan."
		);
		var wayne = new Exec(
			"Wayne Chan",
			"VP of Engineering",
			imgpath+"wayne-chan.jpg",
			"Wayne Chan has a decade of experience across both Product Management and Engineering leadership roles. Prior to joining Vungle, Wayne co-founded Kabam and worked at AOL. He has a M.S. in Electrical & Computer Engineering, a B.S. in Electrical & Computer Engineering, and a B.S. in Biomedical Engineering from Carnegie Mellon University."
		);
		var ben = new Exec(
			"Ben Bear",
			"VP of Sales",
			imgpath+"ben-bear.jpg",
			"Ben Bear is the Vice President of Sales at Vungle. Ben and his team have advised top charting publishers such as Imangi, Kiloo and Supercell on their monetization and advertising strategies."
		);
		var erik = new Exec(
			"Erik Juhl",
			"VP of Talent Operations",
			imgpath+"erik-juhl.jpg",
			"Erik Juhl is the VP of Talent Operation at Vungle. He has always been driven by a strong motivation to build world class teams. Through his experience building and founding green-tech companies, Erik has learned how companies thrive or fail based on their talent pool. Prior to Vungle he worked at Google and LinkedIn, where he learned the tactics required to scale startups into organizations.  At Vungle, he is currently focused on innovating the field of talent and operations and working to redefine what a world class team can do. "
		)
		var mike = new Exec(
			"Michal Pilawski",
			"VP of Product",
			imgpath+"michal-pilawski.jpg",
			"Michal Pilawski is Vice President of Product at Vungle, the leading mobile video advertising platform. Prior to joining Vungle, Michal led development of multiple mobile entertainment, location and advertising platforms at Nokia and at NativeX. He has extensive experience in monetization of music, video and games. Michal has an MBA from University of Pennsylvania's Wharton School of Business."
		);
			
	var execs = {
		'zain': zain,
		'colin': colin,
		'andrea': andrea,
		'wayne': wayne,
		'ben': ben,
		'erik': erik,
		'mike': mike,
		
	}
	
	//console.log(execs.typeof);

	
	$('#bioModal').on('show.bs.modal', function (event) {
		
		var button = $(event.relatedTarget);
		var vp = execs[button.data('bio')]; 
		
		//console.log(vp);
		//console.log(vp.name);
		
		//console.log(vp.title);
		

		//console.log( $(this).attr("id") );
		
		
		var modal = $(this);
		modal.find('#bio-name').text(vp.name);
		modal.find('#bio-title').text(vp.title);
		modal.find('#bio-bio').text(vp.bio);
		modal.find('img').attr('src', vp.img);
			
	});
	 