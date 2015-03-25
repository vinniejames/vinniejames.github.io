$(function(){function a(a,b,c,d){this.name=a,this.title=b,this.img=c,this.bio=d}var b="img/about/",c=new a("Zain Jaffer","CEO & Founder",b+"zain-jaffer.jpg","Zain Jaffer is the CEO and Founder of Vungle, the leading in-app video ad platform. Vungle was highlighted as one of the top 15 hottest pre-IPO ad tech companies in Business Insider. The company has received $25.5MM in funding from Crosslink Capital, Google Ventures, AOL Ventures, and others, and recently announced the launch of the world's first mobile video ad exchange. A serial entrepreneur in the video space, Zain previously founded an online video learning platform and built a network of entertainment websites that became one of Google's top 150 AdSense publishers. His network was the first to trial AdSense for Video. He is also a founding member of two of the top entrepreneurial societies in Europe and was recently featured in Forbes' 30 under 30. Zain is a graduate of King's College, London (BSc in Business Management), University College of London (MSc in Technology Entrepreneurship) and Singularity University. He currently lives in San Francisco."),d=new a("Colin Behr","VP of Business & International Relations",b+"colin-behr.jpg","Colin Behr is Vungle's VP of Business and International Relations. Colin built Vungle's publishing business from the beginning, and now leads strategy, partnerships and international expansion. He has been leading Vungle's efforts entering the Chinese market including opening up a new Vungle office in Beijing"),e=new a("Andrea Friedenson","VP of Marketing",b+"andrea-sharfin.jpg","Andrea Friedenson is the VP of Marketing at Vungle. She specializes in the intersection between media and technology. Andrea has held marketing roles at Disney, Facebook, Microsoft and Time Warner, and a product management role at Flixster. She holds an A.B. from Cornell University and an M.B.A from MIT Sloan."),f=new a("Wayne Chan","VP of Engineering",b+"wayne-chan.jpg","Wayne Chan has a decade of experience across both Product Management and Engineering leadership roles. Prior to joining Vungle, Wayne co-founded Kabam and worked at AOL. He has a M.S. in Electrical & Computer Engineering, a B.S. in Electrical & Computer Engineering, and a B.S. in Biomedical Engineering from Carnegie Mellon University."),g=new a("Ben Bear","VP of Sales",b+"ben-bear.jpg","Ben Bear is the Vice President of Sales at Vungle. Ben and his team have advised top charting publishers such as Imangi, Kiloo and Supercell on their monetization and advertising strategies."),h=new a("Erik Juhl","VP of Talent Operations",b+"erik-juhl.jpg","Erik Juhl is the VP of Talent Operation at Vungle. He has always been driven by a strong motivation to build world class teams. Through his experience building and founding green-tech companies, Erik has learned how companies thrive or fail based on their talent pool. Prior to Vungle he worked at Google and LinkedIn, where he learned the tactics required to scale startups into organizations.  At Vungle, he is currently focused on innovating the field of talent and operations and working to redefine what a world class team can do. "),i=new a("Michal Pilawski","VP of Product",b+"michal-pilawski.jpg","Michal Pilawski is Vice President of Product at Vungle, the leading mobile video advertising platform. Prior to joining Vungle, Michal led development of multiple mobile entertainment, location and advertising platforms at Nokia and at NativeX. He has extensive experience in monetization of music, video and games. Michal has an MBA from University of Pennsylvania's Wharton School of Business."),j={zain:c,colin:d,andrea:e,wayne:f,ben:g,erik:h,mike:i};$("#bioModal").on("show.bs.modal",function(a){var b=$(a.relatedTarget),c=j[b.data("bio")];console.log(c),console.log(c.name),console.log(c.title),console.log($(this).attr("id"));var d=$(this);d.find("#bio-name").text(c.name),d.find("#bio-title").text(c.title),d.find("#bio-bio").text(c.bio),d.find("img").attr("src",c.img)})});