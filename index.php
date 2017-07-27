<?php
   include 'validation.php';
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-100065143-1', 'auto');
  ga('send', 'pageview');

</script>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Shayna Kingsbury</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css"> 
   <link rel="stylesheet" href="css/vendor.css"> 
   <link rel="stylesheet" href="css/main.css">    

   <!-- script
   ================================================== -->
	<script src="js/modernizr.js"></script>
	<script src="js/pace.min.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="icon" type="image/png" href="favicon.png">

</head>

<body id="top">
	
	<!-- header 
   ================================================== -->
   <header class="main-header">
   	

	   <a class="menu-toggle" href="#"><span>Menu</span></a>   	

   </header>

   <!-- main navigation 
   ================================================== -->
   <nav id="menu-nav-wrap">

   	<h3>Navigation</h3>   	
		<ul class="nav-list">
			<li><a class="smoothscroll" style='color:#54FF9F;' href="#intro" title="">Home</a></li>
			<li><a class="smoothscroll" style='color:#54FF9F;' href="#about" title="">About</a></li>
			<li><a class="smoothscroll" style='color:#54FF9F;' href="#projects" title="">Projects</a></li>
			<!--<li><a class="smoothscroll" style='color:#54FF9F;' href="#caseStudies" title="">Case Study</a></li>
			<li><a class="smoothscroll" style='color:#54FF9F;' href="#moreInfo" title="">Additional Information</a></li>	-->
			<li><a class="smoothscroll" style='color:#54FF9F;' href="#contact" title="">Contact</a></li>			
		</ul>

	</nav> <!-- /menu-nav-wrap -->


	<!-- main content wrap
   ================================================== -->
   <div id="main-content-wrap">


		<!-- main content wrap
   	================================================== -->
   	<section id="intro">

		   <!-- <div class="shadow-overlay"></div> -->
		   
		   <div class="row intro-content">
		   	<div class="col-twelve">

					<h1 style='color:#54FF9F' class="animate-intro">
						Shayna Kingsbury
					</h1>
					<h3 style='color:white' class="animate-intro">Web Developer</h3>	
					
					<br/>

					<div style='color:#54FF9F;' class="buttons">
						<a style='color:white;font-size:1.3em;' class="button stroke smoothscroll animate-intro" href="#projects" title="">Projects</a>
						<a style='color:white;font-size:1.3em;' class="button stroke smoothscroll animate-intro" href="#contact" title="">Contact</a>
					</div>					


			  	</div> <!-- /twelve --> 		   			
		   </div> <!-- /row -->   

		</section> <!-- /intro -->


		<!-- about
   	================================================== -->
		<section id="about">

			<div class="row section-intro group animate-this">	
	   		<div class="col-twelve with-bottom-line">

	   			<h2 style='color:#4CCC7E;'>About Shayna</h2>

	   			<div style='color:black;font-size:1.3em;'>My name is Shayna and I am a Web Developer. I have worked mostly with PHP, Python, MySQL, and although I have experience in various other programming languages and frameworks.</div>

	   			<br/>

	   			<div style='text-align:center;font-size:1.5em;'><a style='color:#8c8cff;' href="mailto:shayna@shaynak112.com">shayna@shaynak112.com</a>
                </div>

	   		</div>   		
	   	</div>


			
		</section> <!-- /about -->


		<!-- projects
   	================================================== -->
   	<section id="projects">

   		<div class="info-entry">

   			<div class="half-grey"></div>

   			<div class="row info-entry-content">

   				<div class="media-wrap">
   					<div class="media animate-this"  data-animate="fadeInRight">
   						<img style='border:solid 1px #54FF9F;' src="images/voxweb/voxArticle.jpg" alt="one article on VOXWEB">
   					</div>

   					<div class="media animate-this"  data-animate="fadeInRight">
   						<img style='border:solid 1px #54FF9F;' src="images/voxweb/voxSearch.jpg" alt="searching on VOXWEB">
   					</div>  

   					<div class="media animate-this"  data-animate="fadeInRight">
   						<img style='border:solid 1px #54FF9F;' src="images/voxweb/voxChat.jpg" alt="chat feature on VOXWEB">
   					</div>

                  <div class="media animate-this"  data-animate="fadeInRight">
                     <img style='border:solid 1px #54FF9F;' src="images/voxweb/voxImgSearch.jpg" alt="user submitted images search feature on VOXWEB">
                  </div>

   				</div>

   				<div class="col-six text-part">   				
   					
   					<h5 class="animate-this" data-animate="fadeInLeft" style='color:white;'>All the latest tech news</h5>
   					<h2 class="animate-this" data-animate="fadeInLeft">VOXWEB</h2>

   					<p class="animate-this" data-animate="fadeInLeft"><a style='color:#8c8cff;' href='http://nathanmante.com/News/index.php'>Link to VOXWEB</a></p>
   					<p class="animate-this" data-animate="fadeInLeft">Tech News site that allows for user interaction</p>
   					<p class="animate-this" data-animate="fadeInLeft">Technology Used: PHP, AJAX, JavaScript, CSS, HTML, MySQL, Bootstrap</p>
   					<div class="animate-this" data-animate="fadeInLeft"><strong>Articles</strong>
   						<ul>
   							<li>displayed brief informaton about each article based on various queries</li>
   								<ul>
   									<li>article page displays three most recent stories at the top</li>
   									<li>article page displays the remaining articles sorted by date</li>
   								</ul>
   							<li>clicking each title of the article will bring the user to the full article on a separate page</li>
   							<li>admin staff can log in and submit new articles</li>
   						</ul>
   					</div>
   					<div class="animate-this" data-animate="fadeInLeft"><strong>User Images</strong>
   						<ul>
   							<li>home page includes a slideshow of the images submitted within the past week</li>
   							<li>users can view all images submitted within the past month</li>
   							<li>users can search for archived photos based on category, </li>
   							<li>users can log in to submit their own image</li>
   						</ul>
   					</div>

   					<div class="animate-this" data-animate="fadeInLeft"><strong>Search</strong>
   						<ul>
   							<li>used in both articles as well as user images</li>
   							<li>users can search through articles (for example, Google, Android)</li>
   							<li>users can search through images based on category, author, or title</li>
   						</ul>
   					</div>

   					<div class="animate-this" data-animate="fadeInLeft"><strong>Chat</strong>
   						<ul>
   							<li>chat feature built from scrach</li>
   							<li>once a user is logged in, he/she can chat with other online users</li>
   							<li>uses sessions to get the username for the chat</li>
   						</ul>
   					</div>


   					<!--<a href="#caseStudies" class="button animate-this smoothscroll" data-animate="fadeInLeft">VOXWEB Case Study</a>-->
   			 					
   				</div>   				
   				
   			</div> <!-- /info-entry-content -->

   		</div> <!-- /info-entry -->



   		<div class="info-entry">

   			<div class="half-grey"></div>

   			<div class="row info-entry-content">
   			
	            <div class="media-wrap">

               <br/>

	            	<div class="media animate-this" data-animate="fadeInLeft">
	  					<img style='border:solid 1px #54FF9F;' src="images/point/pointFuture.jpg" alt="Future events page for Point">
	            	</div>

	            	<div class="media animate-this" data-animate="fadeInLeft">
	  					<img style='border:solid 1px #54FF9F;' src="images/point/pointDJs.jpg" alt="DJs page for Point">
	            	</div>

                  <div class="media animate-this" data-animate="fadeInLeft">
                  <img style='border:solid 1px #54FF9F;' src="images/point/pointAdminHomepage.jpg" alt="Admin page for one upcoming event for Point">
                  </div>


	   			</div>



	   			<div class="col-six text-part">   				
   					
   					<h5 class="animate-this" data-animate="fadeInRight" style='color:white;'>Techno events within the city</h5>
   					<h2 class="animate-this" data-animate="fadeInRight">Point Entertainment Toronto</h2>

   					<p class="animate-this" data-animate="fadeInRight"><a style='color:#8c8cff;' href="http://www.pointentertainmentto.com/">Link to Point Entertainment Toronto</a></p>
   					<p class="animate-this" data-animate="fadeInRight">Website for group of friends who throw events throughout the city</p>
   					<p class="animate-this" data-animate="fadeInRight">Technology Used: PHP, MySQL, JavaScript, CSS, HTML, APIs, social media</p>

   					<div class="animate-this" data-animate="fadeInRight"><strong>User Side</strong>
	   				<ul>
	   					<li>forms for guestlists (for each individual event) that are sent to specific inboxes for each form</li>
	   					<li>contact us page includes another form sent to a separate inbox</li>
	   					<li>gallery uses JavaScript to make each image interactable</li>
	   					<li>previous events lists a few of the previous event flyers and, when clicked, redirects to the social media page</li>
	   					<li>ability to share future events through social media (Facebook, Twitter, Instagram)</li>
	   					<li>section that includes the DJs uses JavaScript to give more information about each DJ where the user can interact</li>
   					</ul>
   					</div>

                  <div class="animate-this" data-animate="fadeInRight"><strong>Administrative Side</strong>
                  <ul>
                     <li>admin staff can add upcoming events as well as make changes to events already posted</li>
                     <li>guestlists for each event are stored in the database and can be printed out whenever requested</li>
                     <li>financials from previous events are available as well as basic budgeting tools</li>
                     <li>admin staff can keep track of guestlist submitted by promoters and DJs and combine them for each event</li>
                     <li>admin staff can track the social media accounts as well as post to the social media accounts</li>
                  </ul>

                  </div>

   					<!--<a href="#" class="button animate-this" data-animate="fadeInRight">Learn More</a>-->
   			 		<br/>

	
   				</div>



   			</div> <!-- /info-entry-content -->

   		</div> <!-- /info-entry -->




   		<!--TTC Weather-->
		<div class="info-entry">

   			<div class="half-grey"></div>

				<div class="row info-entry-content">

   				<div class="media-wrap">
             <br/>
                  <br/>
                  

                  <div class="media animate-this"  data-animate="fadeInRight">
                     <img style='border:solid 1px #54FF9F;' src="images/RYU/RYUMobileResults.JPG" alt="TTC Weather Predictions from RYU via mobile">
                  </div>

   					<div class="media animate-this"  data-animate="fadeInRight">
   						<img style='border:solid 1px #54FF9F;' src="images/RYU/RYUCompResults.JPG" alt="TTC and Weather Predictions from RYU via computer">
   					</div>


                  <!--<div class="media animate-this"  data-animate="fadeInRight">
                     <img style='border:solid 1px #54FF9F;width:60%;' src="images/RYU/RYUMobileIndex.JPG" alt="Next Bus Arrivals from Remember Your Umbrella">
                  </div>-->                                    

               </div><!--end media wrap div-->



   				

   				<div class="col-six text-part">   				
   					
   					<h5 class="animate-this" data-animate="fadeInLeft" style='color:white;'>TTC Prediction and Weather Forecast</h5>
   					<h2 class="animate-this" data-animate="fadeInLeft">Remember Your Umbrella</h2>

   					<p class="animate-this" data-animate="fadeInLeft"><a style='color:#8c8cff;' href='http://www.shaynak112.com/RYU/index.php'>Link to Remember Your Umbrella</a></p>
   					<p class="animate-this" data-animate="fadeInLeft">Website that allows users to check their bus stop (arrival times) and find the current weather</p>
   					<p class="animate-this" data-animate="fadeInLeft">Technology Used: PHP, APIs from TTC and weather, CSS, JavaScript, XML, Materialize</p>
   					<div class="animate-this" data-animate="fadeInLeft">
   					<ul>
                     <li>mobile friendly; all necessary features available on mobile</li>
	   					<li>user chooses the route and stop where he/she will be boarding the bus</li>
	   					<li>displays next (up to) five vehicle arrivals</li>
	   					<li>displays the weather</li>
	   					<li>use information based on latitude and logitude for TTC as well as weather APIs</li>
	   					<li>shows image based on type of weather</li>
                     <li>desktop version includes animated raindrops through CSS animations</li>
   					</ul>
                  </div><!--end animate this div class-->
                  <br/>
                  <br/>
                  <br/>
                  <br/>
                  <br/>
                  <br/>
                  </div><!--end col-six tex-part-->
   					</div><!--end row entry div-->
            </div><!--end row info-entry-content div-->
			
   				
  

         <div class="info-entry">

            <div class="half-grey"></div>

            <div class="row info-entry-content">
            
               <div class="media-wrap">

               <br/>

                  <div class="media animate-this" data-animate="fadeInLeft">
                  <img style='border:solid 1px #54FF9F;' src="images/catAdopt/homepage.JPG" alt="code for the rescues to view potential adopter's applications">
                  </div>

                  <div class="media animate-this" data-animate="fadeInLeft">
                  <img style='border:solid 1px #54FF9F;' src='images/catAdopt/codePublicHomepage.JPG' alt='Code for Public Homepage'>
                  </div>

                  <div class="media animate-this" data-animate="fadeInLeft">
                  <img style='border:solid 1px #54FF9F;' src="images/catAdopt/allCats.JPG" alt="rescues can view all applications">
                  </div>

                  
                  <div class="media animate-this" data-animate="fadeInLeft">
                  <img style='border:solid 1px #54FF9F;' src="images/catAdopt/codePublicViewAllCats.JPG" alt="page that views all cats">
                  </div>

                  <div class="media animate-this" data-animate="fadeInLeft">
                  <img style='border:solid 1px #54FF9F;' src="images/catAdopt/rescueViewApps.JPG" alt="rescues can view all applications">
                  </div>

                  <div class="media animate-this" data-animate="fadeInLeft">
                  <img style='border:solid 1px #54FF9F;' src="images/catAdopt/codeRescueViewApps.JPG" alt="code for the rescues to view potential applications">
                  </div>
                  


               </div>



               <div class="col-six text-part">              
                  
                  <h5 class="animate-this" data-animate="fadeInRight" style='color:white;'>In Progress</h5>
                  <h2 class="animate-this" data-animate="fadeInRight">Cat Adoption Website</h2>

                  <!--<p class="animate-this" data-animate="fadeInRight"><a style='color:#8c8cff;' href="http://www.pointentertainmentto.com/">Link to Point Entertainment Toronto</a></p>-->
                  <p class="animate-this" data-animate="fadeInRight">Website for cats throughout the city to be adopted; rescues can add any of their cats; rescues and admin can update when cats get adopted.</p>
                  <p class="animate-this" data-animate="fadeInRight">Technology Used: Python, flask, sqlite, HTML, JavaScript, CSS, AJAX</p>

                  <div class="animate-this" data-animate="fadeInRight"><strong>User Side</strong>
                  <ul>
                     <li>homepage views the latest cats up for adoption</li>
                     <li>All Cats available for adoption are viewable by the date the rescue added the cat to the system</li>
                     <li>hovering over (or clicking on) a cat will give additional details on the cat</li>
                     <li>adoption application form that automatically gets sent to the rescue</li>
                     <li>ability to share cats through social media (Facebook, Twitter)</li>
                     <li>success stories regarding the cats who have been adopted</li>
                     <li>cats searchable by trait and age</li>
                  </ul>
                  </div>

                  <div class="animate-this" data-animate="fadeInRight"><strong>Rescue Side</strong>
                  <ul>
                     <li>rescues have individual logins</li>
                     <li>rescues can add new cats whenever they are ready to be put up for adoption</li>
                     <li>rescues can follow up with potential adopters and include brief notes</li>
                     <li>staff can allow or deny applications; instructions sent on when to meet the cat </li>
                     <li>adjust cat status when a cat is adopted and update the description</li>
                  </ul>

                  </div>

                  <div class="animate-this" data-animate="fadeInRight"><strong>Admin Side</strong>
                  <ul>
                     <li>can do any actions that the public cam make (ex. submitting application)</li>
                     <li>can make any changes to any cat (add, remove, update, delete)</li>
                     <li>approve and manage the rescues</li>
                     <li>small messaging system within the admin side</li>
                  </ul>

                  </div>

                  <!--<a href="#" class="button animate-this" data-animate="fadeInRight">Learn More</a>-->
                  <br/>

   
               </div>



            </div> <!-- /info-entry-content -->

         </div> <!-- /info-entry -->



   	</section> <!-- projects -->



		<!-- Case Studies
   	================================================== -->
		<!--<section id="caseStudies" style='color:black';>

	   	<div class="row section-intro animate-this" style='color:black';>
	   		<div class="col-twelve with-bottom-line" style='color:black';>

	   			<h2 style='color:black;'>Case Study (VOXWEB)</h2>

<!could include issue about getting TTC info onto the other page and had to do "explode"-->
<!--implementing soundcloud to Point website-->

	   			<!--<div style='color:#003026;' class='lead animate-this' data-animate="fadeInRight">Regarding VOXWEB (tech news site)</div>-

	   		</div>   		
	   	</div>

	   	<div class='row'>

		   	<div class='col-six animate-this' data-animate="fadeInLeft">
		   		<h3 style='color:black;font-size:2;'>Images/BLOBs</h5>
		         <img style='border:solid 2px black;display:inline-block;float:right;width:50%;margin-left:2%;' src='images/caseStudy/blobs.jpg'>
		         <p>As it was a news site, there are expected to be images (content, user submitted, profile photos, etc.) that need to be looked into. After some research regarding LONGBLOBs, I used this for all of my images. The main issue was when I was transferring my tables to colleague's table and it was often too large to transfer.</p>
		       
		        <p>BLOBs were fairly simple to figure out as it just requires an image viewer. When a user submits an image, the image needs to be looked at to ensure it is properly going into the datbase.</p>

		   	</div>

		   	<div class='col-six animate-this' data-animate="fadeInRight">
		   	<h3 style='color:black;font-size:2;'>Search Feature</h3>
		   	<p>The search feature was more in depth than I imagined while starting out. It took a few tries until I was able to understand how the query worked and why it was outputting specific articles.</p>
		   	<img style='border:solid 2px black;display:inline-block;float:right;width:50%;margin-left:2%;' src='images/caseStudy/searchingArticles.jpg'>
		   	<p>A search is on almost every website and people rely on the search feature quite a bit so it's important that feature is accurate, even if it seems like a small detail. It's important to think about what needs to be searched. Sometimes the whole table will need to be searched; sometimes only specific columns. In this case, I wrote it so that the user would enter a search term and that would be compared to each article. Each article is fairly long so it could get back more than the desired number of searches so there are other potential ways to limit it. For the user images search, there were three different search options (category, title, and author) so that the user would be able to find the type of image that he/she was looking for.</p>
		   	</div>

	   	</div>

	   	<br/>
	   	<br/>
	   	<br/>
<!
	   	<div class='row'>

		   	<div class='col-six'>
			<h3>Chat Feature</h3>
			<p>It was pretty hard.</p>
			<img style='display:inline-block;float:left;width:60%;margin-right:2%;' src='images/caseStudy/chat/includeChatAndForm.jpg'>
		   	</div>

		   	<div class='col-six'>
			<h3>Chat Feature</h3>
			<p>It was most likely REALLY hard. It gets a second place for it. AJAX this time though.</p>
			<img style='display:inline-block;float:right;width:65%;margin-left:2%;' src='images/caseStudy/chat/ajax.jpg'>
			<p>AJAX is fun but I usually mess it up somehow.</p>
		   	</div>
		   	
	   	</div>

	   	

	   </section> <! Case Studies -->


	

<!-- More Info
   	================================================== -->
	<!--	<section id="moreInfo">

	   	<div class="row section-intro animate-this">
	   		<div class="col-twelve with-bottom-line">

	   			<h2>Additional Information</h2>

	   			<p>I am currently a student in the post-graduate Web Development program at Humber College. Prior to going back to school, I was working for five years. I also completed my diploma for Executive Office Administration about six years ago. While I was employed full time, I continued to take part time courses (in programming, payroll, and human resources). I have worked mostly with PHP, JavaScript, and MySQL although I have experience in various other programming languages and frameworks. I have worked with jQuery, HTML, Python, C, C++, Java, C#, Turing, VisualBasic, XML, and various APIs.</p>
				<p>My most recent job was with a company for five years where I was part time, promoted to full time, and unfortunately had to decrease my hours to part time when I went back to college. Through working with the company for five years, I have had a lot of experience with teamwork, communication, customer service, and time management. I was also able to look at many of the current processes and increase the efficiency either through Microsoft Excel or basic programming skills. I worked in a very fast-paced, time sensitive environment and am used to expecting the unknown.</p>

				</div><!end class bottom line
				</div><!end class row)

			<div class="row animate-this" >
			<h2 class="animate-this" style='font-color:#003026;font-size:1.7em;text-align:center;'>Education and Experience</h2>
			</div>



	   	<div class="row animate-this" style='font-color:#003026;' >
	   		<div style='font-color:#003026;' class="col-twelve">

					<div style='font-color:#003026;'>
						

					<br/>
					<div class="col-twelve" style='font-color:#003026;'>
						<div class="col-six" style='font-color:#003026;'>
						<h4 style='font-color:#003026;font-size:1.7em;margin-left:15%;'>Education</h4>

							<div style='font-size:0.9em;' class="col-four">
							2016 - current
							</div>

							<div class="col-eight">
								<strong>Web Development (post-graduate program)</strong>
								<div style='font-size:0.9em;'>
								Humber College, Toronto ON
		                    	</div>
		                    	<div style='font-size:0.9em;'>
		                    	Expected Graduation: August 2017
		                    	</div>
							</div>

							<div style='font-size:0.9em;' class="col-four">
							2012 - 2014
							</div>

							<div class="col-eight">
		 						<strong>PCP Certification</strong>
		                    	<div style='font-size:0.9em;'>
		                    	Canadian Payroll Association
		                    	</div>
		                    	<div style='font-size:0.9em;'>
		                    	Payroll Compliance Practitioner
		                    	</div>
							</div>

							<div style='font-size:0.9em;' class="col-four">
							2009 - 2011
							</div>

							<div class="col-eight">
								<strong>Diploma, Office Administration - Executive</strong>
		                    	<div style='font-size:0.9em;'>
		                    	Conestoga College, Kitchener ON
		                    	</div>
							</div>
					</div>

					
						<div class="col-six">
						<h4 style='font-size:1.7em;margin-left:15%;;'>Experience</h4>

							<div style='font-size:0.9em;' class="col-four">
							2016 - 2017
							</div>

							<div class="col-eight">
							<strong>Scheduling Administrator</strong>
	                    	<div style='font-size:0.9em;'>
	                    	Maple Leaf Sports &amp; Entertainment
	                    	</div>
							</div>

							<div style='font-size:0.9em;' class="col-four">
							2013 - 2016
							</div>

							<div class="col-eight">
							<strong>Scheduling Coordinator</strong>
	                    	<div style='font-size:0.9em;'>
	                    	Maple Leaf Sports &amp; Entertainment
	                    	</div>
							</div>

							<div style='font-size:0.9em;' class="col-four">
								2011 - 2013
							</div>

							<div class="col-eight">
								<strong>Scheduling Administrator</strong>
	                    		<div style='font-size:0.9em;'>
	                    		Maple Leaf Sports &amp; Entertainment
	                    		</div>
							</div>


						</div>
					</div>

					<!close div for row-->   			

			   	<!-- <a class="button large animate-this" href="#">                               
			         Download Elevate
			      </a>  	could download resume-->

	   		</div>
	   	</div>

	   		</div>   		
	   	</div>



	   </section> <!-- /moreInfo Us -->


	   <!-- contact
   	================================================== -->
	   <section style='color:#003026;' id="contact">
	   	<div style='color:#003026;' class="row">

	   		<div class="col-twelve">

	   			<h2 style='color:black;text-align:center;' class="h01 animate-this" data-animate="fadeInRight">
                  Contact Shayna
               </h2>

				<p class='animate-this' data-animate="fadeInRight" style='text-align:center;font-size:1.5em;'>E-mail: <a style='color:#8c8cff;' href="mailto:shayna@shaynak112.com">shayna@shaynak112.com</a></p>
				<p class='animate-this' data-animate="fadeInRight" style='text-align:center;font-size:1.5em;'>Phone: 647-963-6315</p>

                <div style='color:#003026;text-align:center;' class="buttons animate-this" data-animate="fadeInRight">
						<a href="https://www.linkedin.com/in/shayna-kingsbury-33189234/" style='color:#003026;' class="button animate-intro">LinkedIn</a>
						<a href="https://github.com/shaynak112" style='color:#003026;' class="button animate-intro">GitHub</a>
				</div>

				<br/>
				<br/>
				<br/>

				<div class='col-twelve animate-this' data-animate="fadeInLeft" align='center'>

					<form name="contactform" style='margin:0 auto;' method="post" action="">

				<div>
				<label for="yourName" >Your name: </label>
				  <input id="yourName" type="text" style='width:30%;' placeholder="Name" name="yourName"/>
				</div>

				<div>
				<label for="email">Your e-mail address: </label>
				  <input id="email" type="text" style='width:30%;' placeholder="Email" name="email"/>
				</div>

				<div>
				<label for="phone">Your phone number: </label>
				  <input id="phone" type="text" style='width:30%;' placeholder="Phone Number" name="phone"/>
				</div>

				<div>
				<label for="message">Your message: </label>
				</div>
				<div>
				  <textarea cols='50%' id="message" placeholder="Message" name="message"></textarea>
				</div>


				  <input type="submit" value="Submit" name="Submit" id="Submit">

				  </form>

				  <?php




            
				ini_set("SMTP","mail.shaynak112.com");
				ini_set("smtp_port","25");
				ini_set('sendmail_from', 'test@shaynak112.com');

				$from = "Sender <test@shaynak112.com>";
				$to = "Shayna <shayna@shaynak112.com>";
				$subject = "Message from Portfolio Website";

				$headers = array ('From' => $from, 'To' => $to, 'Subject' => $subject);

				if(isset($_POST['Submit']))
				{
				  $contactName = $_POST['yourName'];
				  $contactEmail = $_POST['email'];
				  $contactPhone = $_POST['phone'];
				  $contactBody = $_POST['message'];
				  $message = "A message from " . $contactName . " at " . $contactEmail . " and " . $contactPhone . " The message is:     " . $contactBody;

              $formVal = new formValidation();

              $validateName = $formVal->inputTextLogic($contactName);
              $validateEmail = $formVal->emailLogic($contactEmail);
              $validatePhone = $formVal->phoneLogic($contactPhone);
              $validateBody = $formVal->inputTextLogic($contactBody);


              if($validateName=='' && $validateEmail=='' && $validatePhone=='' && $validateBody=='')
               {
                  mail($to,$subject,$message,$from);
                  echo "<br/>Message sent";
               }
               else
               {
                  echo "<br/>Please fill out all fields correctly.";
               }
				}

				?>
				 
				</div>	<!-- end div class col 12 form-->
				</div>	<!-- end div class col 12 for whole contact us section-->
					
	   		</div> <!--end row-->
	   	
	   </section> <!-- /contact Us -->

   
   </div> <!-- /main-content-wrap -->


   <!-- footer
	================================================== -->
	<footer id="main-footer">

   	
	   	
	<div class="footer-bottom"> 

	   	<div class="copyright">
		     	<span>Copyright © www.shaynak112.com</span> 
		     	         	
		</div>  		
   	</div>
	   	
   </footer>   

   <div id="go-top">
		<a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-long-arrow-up"></i></a>
	</div>

   <!-- preloader
   ================================================== -->
   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>

</body>

</html>