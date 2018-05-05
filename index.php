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
   <meta property="og:site_name" content="Portfolio for Shayna Kingsbury"/>
   <meta property="og:title" content="Portfolio for Web Developer, Shayna Kingsbury"/>
   <meta property="og:description" content="Web Development Portfolio. Specializing in PHP, MySQL, and JavaScript."/>
   <meta property="og:image" content="favicon.png">
   <meta property="og:url" content="http://www.shaynak112.com/">
   <meta property="og:type" content="portfolio"/>

	<meta name="description" content="Web Developer Portfolio">  
	<meta name="author" content="Shayna Kingsbury">
   <meta name="image" content="favicon.png">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/style.css">
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
   	

	   <a class="menu-toggle" href="#"><span>Menu</span>
      </a>   	

   </header>

   <!-- main navigation 
   ================================================== -->
   <nav id="menu-nav-wrap">

   	<h3>Navigation</h3>   	
		<ul class="nav-list">
			<li><a class="smoothscroll" style='color:#54FF9F;' href="#intro" title="Portfolio Home">Home</a></li>
			<li><a class="smoothscroll" style='color:#54FF9F;' href="#about" title="About Shayna">About</a></li>
         <!--<li class="treeview smoothscroll">-->
            <li><a class="treeview smoothscroll" style='color:#54FF9F;' href="#projects" title="Projects">Projects</span></li>
            <ul>
               <li><a class="smoothscroll" style='color:#54FF9F;' href="#vox" title="VOXWEB news site">VOXWEB</a></li>
               <li><a class="smoothscroll" style='color:#54FF9F;' href="#point" title="Point Entertainment Toronto">Point Entertainment</a></li>
               <li><a class="smoothscroll" style='color:#54FF9F;' href="#ryu" title="Remember Your Umbrella">Remember Your Umbrella</a></li>
               <li><a class="smoothscroll" style='color:#54FF9F;' href="#catAdopt" title="Cat Adoption">Cat Adoption</a></li>
               <li><a class="smoothscroll" style='color:#54FF9F;' href="#artPortfolio" title="Artist Portfolio">Artist Portfolio</a></li>
            
            </ul>
         </li>

       <!--<li><a class="smoothscroll" style='color:#54FF9F;' href="#mockups" title="mockup to draft to HTML">Mockups</a></li>-->

         <!--<li><a class="smoothscroll" style='color:#54FF9F;' href="#caseStudyPoint.php" title="mockup to draft to HTML">Point Case Study</a></li>-->

        <!-- <li><a class="smoothscroll" style='color:#54FF9F;' href="#videos" title="Video Previews">Video Previews</a></li>  -->

         <li><a class="smoothscroll" style='color:#54FF9F;' href="#contact" title="contact Shayna">Contact</a></li>    

			<!--<li><a class="smoothscroll" style='color:#54FF9F;' href="#projects" title="">Projects</a></li>


			<li><a class="smoothscroll" style='color:#54FF9F;' href="#caseStudies" title="">Case Study</a></li>
			<li><a class="smoothscroll" style='color:#54FF9F;' href="#moreInfo" title="">Additional Information</a></li>	
				
		</ul>-->


          </ul>


	</nav> <!-- /menu-nav-wrap -->


	<!-- main content wrap
   ================================================== -->
   <div id="main-content-wrap">



		<!-- main content wrap
   	================================================== -->
   	

<?php
   include 'intro.php';
?>


		<!-- about
   	================================================== -->

<?php
   include 'about.php';
?>

 <!-- /about -->


		<!-- projects
   	================================================== -->
   	<section id="projects">
<?php
   include 'vox.php';
?>
      
<?php
   include 'point.php';
?>

<?php
   include 'ryu.php';
?>
      
<?php
   include 'catAdopt.php';
?>      	
   				
 <?php
   include 'dimaPortfolio.php';
?>  





   	</section> <!-- projects -->
</div>



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

	   	

	   </section> 

-->
	
			



         <!-- Mockups
      ================================================== -->

<!--<?php
   //include 'mockupsWhiteBG.php'
   ?>-->


         <!-- Case Study Point
      ================================================== -->





         

       <!-- Contact
      ================================================== -->

<!--<div style='width:100%;height:25px;background-color:#54FF9F;margin-left:0px;'>
</div> only need if two white BGs in a row-->

<!--<?php
  // include 'videoPreviews.php'
?>-->

<?php
   include 'contact.php'
?>
   
   </div> <!-- /main-content-wrap -->




   <!-- footer
	================================================== -->
	<footer id="main-footer">

   	
	   	
	<div class="footer-bottom"> 

	   	<div class="copyright">
         <span>Shayna Kingsbury, Web Developer</span> 
		     	<span>Copyright © www.shaynak112.com</span>
            <span><a href='maito:shayna@shaynk112.com'>shayna@shaynak112.com</a></span>
		     	         	
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