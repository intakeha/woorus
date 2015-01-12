<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">
<head>
  
    <!-- Basic -->
	<title>Woorus - Dev | A Digital Agency</title>
    
    <!-- Define Charset -->
	<meta charset="utf-8">
    
    <!-- Responsive MetaTag -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- Page Description and Author -->
    <meta name="description" content="Woorus - Boutique IT company">
    <meta name="author" content="woorus">
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png">

    
    <!-- Bootstrap CSS Styles -->
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="screen">
    
    <!-- Plugins CSS Styles -->
    <link rel="stylesheet" href="css/plugins.css" type="text/css" media="screen">
  
    <!-- Woorus CSS Styles -->
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
  
    <!-- Responsive CSS Styles -->
	<link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">
    
    <!-- Css3 Animations Styles -->
	<link rel="stylesheet" type="text/css" href="css/animate.css" media="screen">
	
    <!-- Owl CSS Styles -->
	<link rel="stylesheet" type="text/css" href="css/owl.theme.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/owl.transitions.css" media="screen">
  
    <!-- Icons Font CSS Styles -->
    <link rel="stylesheet" type="text/css" href="css/icons.css" media="screen">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="screen">
    
    <!-- Color CSS Styles -->
    <link rel="stylesheet" type="text/css" href="css/orange.css" title="orange" media="screen">
    <link rel="stylesheet" type="text/css" href="css/yellow.css" title="yellow" media="screen" disabled/>
    <link rel="stylesheet" type="text/css" href="css/red.css" title="red" media="screen" disabled/>
    <link rel="stylesheet" type="text/css" href="css/pink.css" title="pink" media="screen" disabled/>
    <link rel="stylesheet" type="text/css" href="css/turquoise.css" title="turquoise" media="screen" disabled/>
    <link rel="stylesheet" type="text/css" href="css/blue.css" title="blue" media="screen" disabled/>
    <link rel="stylesheet" type="text/css" href="css/green.css" title="green" media="screen" disabled/>
    
    <!-- Custom CSS Styles -->
    <link rel="stylesheet" type="text/css" href="css/custom.css" media="screen">
     

	<!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	
</head>
<body>

<!-- Page Loader -->
<div id="pageloader" class="dark">
    <div class="loader-container">
        <div class="loader-logo "><img src="images/woorus-logo.png" alt="" /></div>
        <div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div> 
    </div>
</div>
    
<!-- Start Home Section -->

<?php $bg = array("bg-02.jpg","bg-03.jpg", "bg-05.jpg", "bg-08.jpg");?>
<div id="home" class="section-home fullscreen one-slide parallax dark-section" style="background-image: url(images/<?php echo $bg[array_rand($bg)];?>)">
    
    <!-- Overlay -->
	<div class="section-overlay"></div>
    
    <!-- Home Container -->
    <div class="container text-center">
        
        <img src="images/big-logo.png" alt="" />
        
        <!-- Text Slider -->
    	<div class="text-slider">
		<div class="item"><h1 class="fit-text">Welcome To <strong class="accent-color">Woorus</strong></h1></div>
		<div class="item"><h1 class="fit-text">We Are <strong class="accent-color">Artisans</strong></h1></div>
		<div class="item"><h1 class="fit-text">We <strong class="accent-color">Build</strong> Websites</h1></div>
        </div>
	
        <!-- Text -->
        <p>Helping businesses &amp; individuals grow their digital presence</p>
        
        <!-- Button -->
        <a href="#about" class="goAbout btn-sys btn-light btn-border btn-large btn-crv">More About Us <i class="icon-arrow-right2"></i></a>
    
    </div>
    
    <a href="#about" class="goAbout scroll-down-icon"><i class="fa fa-angle-double-down"></i></a>

</div>
<!-- End Home Section -->
    
    
    
<!-- Start Header -->
<header id="header" class="header-1 light-header">

	<div class="container">
    
        <!-- Logo -->
        <div id="logo" class="visible-lg visible-md hide">
            <a href="#home"><img alt="" src="images/woorus-logo-nav.png"/></a>
        </div>
        <div id="logo" class="visible-sm visible-xs hide">
            <a href="#home"><img alt="" src="images/woorus-logo-nav-sm.png"/></a>
        </div> 
 
        <!-- Toggle Menu - Responsive -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-menu"><i class="icon-menu2"></i></button>
        
        <!-- Navigation Menu -->
        <div id="nav-menu" class="nav-menu collapse navbar-collapse">
        	<ul>
		<li class="active"><a href="#home">Home</a></li>
		<li><a href="#about">About</a></li>
		<li><a href="#services">Services</a></li>
		<li><a href="#process">Process</a></li>
		<li><a href="#contact">Contact</a></li>
            </ul>
        </div>
        
    </div>

</header>
<!-- End Header -->
    
    
    
<!-- Start About Section -->
<div id="about" class="section about-section light-section" style="padding-top:80px; padding-bottom:0; background-color:#fff;">

	<div class="container">
    
    	<div class="row">
            
            <div class="col-md-6 col-md-offset-3">
                <!-- Title -->
                <div class="section-title text-center">
		<h1>About Us</h1>
		<h2>A Boutique Digital Agency</h2>
		<div class="title-icon"><span><i class="icon-megaphone5"></i></span></div>
		<p class="lead">We focus on buidling strong digital solutions that break the mold and get you noticed!  We work passionately to help you achieve your unique goals, strategies, and outcomes.</p>
		<p>We are based in Palo Alto, California, right in the heart of Silicon Valley.</p>
                </div>
                <!-- Space -->
                <div class="hr" style="margin-bottom:50px;"></div>
            </div>
            
        </div>
    	
        <div class="row">
            
            <div class="col-md-12 text-center" data-animation="fadeInUp" data-animation-delay="2">
                
                <!-- Image with Marker -->
                <div class="image-notes">
                    <!-- Marker 1 -->
                    <div class="img-note light-note" style="left:21%; top:51%">
                        <div class="note-marker"></div>
                        <div class="img-note-content">
                            <h5>Clean and Fluid Designs</h5>
                            <p>We build responsive websites so your customers can access your business and content on any device.</p>
                        </div>
                    </div>
                    <!-- Marker 2 -->
                    <div class="img-note light-note" style="left:49.1%; top:55%">
                        <div class="note-marker"></div>
                        <div class="img-note-content">
                            <h5>Creative Solutions</h5>
                            <p>We can assist with branding, marketing, and identity, as well as photo shooting for web design work and graphics.</p>
                        </div>
                    </div>
                    <!-- Marker 3 -->
                    <div class="img-note light-note" style="left:84.7%; top:17%">
                        <div class="note-marker"></div>
                        <div class="img-note-content">
                            <h5>Digital Partner</h5>
                            <p>We work closely with you to build your online presence. We can also help maintain your site so you can focus on other things.</p>
                        </div>
                    </div>
                    <!-- Image -->
                    <img src="images/bg-09.jpg" alt="" />
                </div>
                <!-- End Image with Marker -->
                
            </div>
        
        </div>

    </div>

</div>
<!-- End About Section -->
 
<!-- Start Break Section -->
<div id="break" class="section break-section parallax-section dark-section" style="padding-top:120px; padding-bottom:120px; background: url(images/bg-05.jpg);">
    <!-- Overlay -->
	<div class="section-overlay"></div>
	
	<div class="container">
		<div class="quote-content">We do websites and all that goes along with it.</div>
	</div>
</div>
<!-- End Break Section --> 
    
<!-- Start Services Section -->
<div id="services" class="section services-section light-section" style="padding-top:70px; padding-bottom:0; background:#fff;">

	<div class="container">
	    
		<div class="row">
		    
			<div class="col-md-6 col-md-offset-3">
				<!-- Title -->
				<div class="section-title text-center">
				<h1>Services</h1>
				<h2>One Stop Shop</h2>
				<div class="title-icon"><span><i class="icon-websitebuilder"></i></span></div>
				<p class="lead">We differentiate ourselves by providing one stop shop for all of your online needs.</p>
				</div>
				<!-- Space -->
				<div class="hr" style="margin-bottom:30px;"></div>
			</div>
			    
		</div>
		
		<!-- Services boxes Carousel -->
		<div class="custom-carousel" data-appeared-items="4" data-navigation="0">
		    
			<!-- Service box 1 -->
			<div class="item service-box style-1">
			<i class="icon-briefcase6"></i>
			<h4>Consulting</h4>
			<p>We provide consulting services to help you pick the appropriate technologies, hosting options, and maintenance support.</p>
			</div>

			<!-- Service box 2 -->
			<div class="item service-box style-1">
			<i class="icon-browser4"></i>
			<h4>Web Design</h4>
			<p>First impressions are important. We translate your goals and strategies into visual concepts and online experiences.</p>
			</div>
			
			<!-- Service box 3 -->
			<div class="item service-box style-1">
			<i class="icon-cube2"></i>
			<h4>Branding</h4>
			<p>Your brand is the cornerstone of your success. We can integrate your current brand assets or create a new identity.</p>
			</div>
			
			<!-- Service box 4 -->
			<div class="item service-box style-1">
			<i class="icon-share"></i>
			<h4>Social Media</h4>
			<p>We can help setup your social media presence to entice potential customers and audiences, and increase brand awareness.</p>
			</div>

			<!-- Service box 5 -->
			<div class="item service-box style-1">
			<i class="icon-camera"></i>
			<h4>Photography</h4>
			<p>Our creativity goes beyond technology. We capture the magic of your identity by simply setting up a photoshoot.</p>
			</div>
		
			<!-- Service box 6 -->
			<div class="item service-box style-1">
			<i class="icon-cloud"></i>
			<h4>Hosting</h4>
			<p>You can host your site on our dedicated cloud servers. Our environments are optimized for performance and scalability.</p>
			</div>

			<!-- Service box 7 -->
			<div class="item service-box style-1">
			<i class="icon-stats3"></i>
			<h4>Analytics</h4>
			<p>We use web analytics to help you capture, analyze, and interpret the information that is most important to you.</p>
			</div>

			<!-- Service box 8 -->
			<div class="item service-box style-1">
			<i class="icon-bubbles4"></i>
			<h4>Support</h4>
			<p>Small tweaks and updates are a reality for any website. We pride ourselves on being available and responsive to your needs.</p>
			</div>
		
		</div>
    
	</div>

</div>
<!-- End Services Section -->
 
   
    
<!-- Start Process Section -->
<div id="process" class="section process-section dark-section" style="padding-top:70px; padding-bottom:0; background-image: url(images/bg-11.jpg);">

	<!-- Overlay -->
	<div class="section-overlay"></div>
	
	<div class="container">
    
		<div class="row">
		    
			<div class="col-md-6 col-md-offset-3">
				<!-- Title -->
				<div class="section-title text-center">
					<h1>Our Process</h1>
					<h2> Free-Flowing Collaboration</h2>
					<div class="title-icon"><span><i class="icon-trophy4"></i></span></div>
					<p class="lead">We believe the foundation of any successful project is a firm understanding of your needs and unrestricted communication.</p>
				</div>
				<!-- Space -->
				<div class="hr" style="margin-bottom:50px;"></div>
			</div>
		    
		</div>

		<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center"><h4 class="accent-color">Meet</h4></div>
			<div class="col-md-12"><img alt="" src="images/meet.png"/></div>
			<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
				<div class="steps">The first step is to discover more about you and your vision. This is where we identify your style, brand, strategy, and goals, as well as detailing any feature requests you may have for your online presence.</div>
			</div>
		</div>
		<!-- Space -->
		<div class="hr" style="margin-bottom:25px;"></div>


		<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center"><h4 class="accent-color">Plan &amp; Brainstorm</h4></div>
			<div class="col-md-12"><img alt="" src="images/plan.png"/></div>
			<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
				<div class="steps">We then create the site map and visual representation of how your site will look based on our initial discussion.  This is where the layout of the website begins to take shape.  We will also decide the technologies needed during this phase.</div>
			</div>
		</div>
		<!-- Space -->
		<div class="hr" style="margin-bottom:25px;"></div>
		
		<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center"><h4 class="accent-color">Design &amp; Develop</h4></div>
			<div class="col-md-12"><img alt="" src="images/design.png"/></div>
			<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
				<div class="steps">Once we decide on the visual concepts, it's time to put it all together.  We will transform your ideas into code and integrate your content into the site.</div>
			</div>
		</div>		
		<!-- Space -->
		<div class="hr" style="margin-bottom:25px;"></div>
		
		<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center"><h4 class="accent-color">Test</h4></div>
			<div class="col-md-12"><img alt="" src="images/test.png"/></div>
			<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
				<div class="steps">Here we run your website through several diagnostics, which ensures the quality of your project. This is the most valuable step because your reputation is our reputation!</div>
			</div>
		</div>		
		<!-- Space -->
		<div class="hr" style="margin-bottom:25px;"></div>
		
		<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center"><h4 class="accent-color">Launch</h4></div>
			<div class="col-md-12"><img alt="" src="images/launch.png"/></div>
			<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
				<div class="steps">Once we receive your approval, we will launch your site onto the production server. This marks the official launch of your site, as it is now viewable to the public.</div>
			</div>
		</div>
		<!-- Space -->
		<div class="hr" style="margin-bottom:25px;"></div>
		
		<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center"><h4 class="accent-color">Maintain</h4></div>
			<div class="col-md-12"><img alt="" src="images/maintenance.png"/></div>
			<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
				<div class="steps">Small tweaks and updates are a reality for any websites. We are more than happy to continue working closely with you to update the information on your website.</div>
			</div>
		</div>

	</div>
        
</div>
<!-- End Process Section -->

    
<!-- Start Portfolio -->

<!-- End Portfolio -->
    
    
<!-- Start Dark Call-Action Section -->
<div id="call-action" class="section action-section dark-section">

	<a href="#contact" class="scroll-to"><h3>Do you need to get in <strong>touch</strong> with us?</h3></a>

</div>
<!-- End Dark Call-Action Section -->

    
<!-- Start Contact Section -->
<div id="contact" class="section contact-section light-section" style="padding-top:80px; padding-bottom:20px; background:#fff;">

	<div class="container">
        
        <div class="row">
            
		<div class="col-md-8 col-md-offset-2">
			<!-- Title -->
			<div class="section-title text-center">
			    <h1>Contact Us</h1>
			    <h2>Get In Touch</h2>
			    <div class="title-icon"><span><i class="icon-paperplane2"></i></span></div>
			    <p class="lead">We would love to hear from you and talk about possibilities. If you have a project you are excited about or if you just want to find out more about who we are and what we do, please give us a call or send us an email. We look forward to meeting you soon.</p>		
			</div>
			
			<div class="row">
				<div class="col-md-5 col-md-offset-1 col-sm-6">
					<div class="row">
						<div class="col-md-4 col-md-offset-2 col-sm-3 col-sm-offset-3 text-center"><i class="icon-phone-hang-up"></i><strong> Phone</strong></div>
						<div class="col-md-4 col-sm-3 text-center">650.383.7729</div>
					</div>
				</div>
				<div class="visible-xs"><div class="hr" style="margin-bottom:20px;"></div></div>
				<div class="col-md-5 col-sm-6">
					<div class="row">
						<div class="col-md-4 col-md-offset-2 col-sm-3 col-sm-offset-3 text-center"><i class="icon-email2"></i><strong> Email</strong></div>
						<div class="col-md-4 col-sm-3 text-center">hello@woorus.com</div>
					</div>
				</div>
			</div>
		<!-- Space -->
		<div class="hr" style="margin-bottom:50px;"></div>
		
		</div>
	</div>
    
    	<div class="row">
        
            <!-- Contact Form -->
        	<div class="col-xs-12">
                <div id="contant-form-bx" class="contant-form-bx">
                	<div class="contact-loader"></div>
                	<form action="mail.php" id="contact-form" class="contact-form" name="cform" method="post">
                    	<div class="row">
                            <div class="col-md-6">  
                                <label for="name" id="name_label">Name</label>
                                <span class="name-missing">Please enter your name</span>  
                                <input id="name" type="text" value="" name="name" size="30"> 
                            </div> 
                            <div class="col-md-6 columns"> 
                                <label for="e-mail" id="email_label">Email</label>
                                <span class="email-missing">Please enter a valid e-mail</span> 
                                <input id="e-mail" type="text" value="" name="email" size="30">
                            </div>
                            <div class="col-md-12"> 
                                <label for="message" id="phone_label">Message</label>
                                <span class="message-missing">Let us know how we can help</span>
                                <textarea id="message" name="message" rows="7" cols="40"></textarea>
                            </div>
                            <div class="col-md-12 text-center"> 
                                <input type="submit" name="submit" class="button" id="submit_btn" value="Send Message">  
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        
        </div>
        
    </div>
    
</div>
<!-- End Contact Section -->
    
    
    
<!-- Start Map Section -->

<!-- End Map Section -->
    
    
    
<!-- Start Footer -->
<div id="footer" class="section footer-section light-section">
    
    <a href="#home" id="goTop"><i class="icon-arrow-up11"></i></a>

	<div class="container">
    
    	<div class="row">
        
        	<div class="col-md-12">
                <!-- Footer Logo -->
            	<div class="logo-img"><img alt="" src="images/woorus-logo-grey.png" /></div>
                
                <!-- Copyright -->
                <div class="copyright">All rights reserved. Copyright &copy; 2015 Woorus</div>
                <!-- Social Icons -->
                <div class="social-icons">
                	<ul>
			<li><a href="#"><i class="icon-yelp"></i></a></li>
			<li><a href="#"><i class="icon-linkedin4"></i></a></li>
			<li><a href="#"><i class="icon-facebook"></i></a></li>
			<li><a href="#"><i class="icon-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        
        </div>
    
    </div>
    
</div>
<!-- End Footer -->

<!-- Main JS  -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.migrate.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
<script type="text/javascript" src="js/jquery.outside-events.min.js"></script>
<script type="text/javascript" src="js/jquery.easing-1.3.pack.js"></script>
<script type="text/javascript" src="js/jquery.parallax.js"></script>
<script type="text/javascript" src="js/jquery.mb.YTPlayer.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/jquery.appear.js"></script>
<script type="text/javascript" src="js/jquery.scrollTo.js"></script>
<script type="text/javascript" src="js/jquery.nav.js"></script>
<script type="text/javascript" src="js/jquery.fitvids.js"></script>
<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="js/counter.js"></script>
<script type="text/javascript" src="js/imagesloaded.min.js"></script>
<script type="text/javascript" src="js/smooth-scroll.js"></script>
<script type="text/javascript" src="js/contact-form.js"></script>
<!-- <script type="text/javascript" src="js/portfolio.js"></script> -->
<script type="text/javascript" src="js/main.js"></script>

    
</body>
</html>