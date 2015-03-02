<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">
<head>
  
    <!-- Basic -->
	<title>Woorus | Boutique Digital Agency</title>
    
    <!-- Define Charset -->
	<meta charset="utf-8">
    
    <!-- Responsive MetaTag -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- Page Description and Author -->
    <meta name="description" content="Woorus - A Boutique Digital Company">
    <meta name="author" content="woorus">
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="../images/favicon.png">

    
    <!-- Bootstrap CSS Styles -->
	<link rel="stylesheet" href="../css/bootstrap.css" type="text/css" media="screen">
    
    <!-- Plugins CSS Styles -->
	<link rel="stylesheet" href="../css/plugin.css" type="text/css" media="screen">
  
    <!-- Woorus CSS Styles -->
	<link rel="stylesheet" type="text/css" href="../css/style.css" media="screen">
  
    <!-- Responsive CSS Styles -->
	<link rel="stylesheet" type="text/css" href="../css/responsive.css" media="screen">
    
    <!-- Css3 Animations Styles -->
	<link rel="stylesheet" type="text/css" href="../css/animate.css" media="screen">
	
    <!-- Owl CSS Styles -->
	<link rel="stylesheet" type="text/css" href="../css/owl.theme.css" media="screen">
	<link rel="stylesheet" type="text/css" href="../css/owl.carousel.css" media="screen">
	<link rel="stylesheet" type="text/css" href="../css/owl.transitions.css" media="screen">
  
    <!-- Icons Font CSS Styles -->
    <link rel="stylesheet" type="text/css" href="../css/icons.css" media="screen">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css" media="screen">
    
    <!-- Color CSS Styles -->
    <link rel="stylesheet" type="text/css" href="../css/orange.css" title="orange" media="screen">
    <link rel="stylesheet" type="text/css" href="../css/yellow.css" title="yellow" media="screen" disabled/>
    <link rel="stylesheet" type="text/css" href="../css/red.css" title="red" media="screen" disabled/>
    <link rel="stylesheet" type="text/css" href="../css/pink.css" title="pink" media="screen" disabled/>
    <link rel="stylesheet" type="text/css" href="../css/turquoise.css" title="turquoise" media="screen" disabled/>
    <link rel="stylesheet" type="text/css" href="../css/blue.css" title="blue" media="screen" disabled/>
    <link rel="stylesheet" type="text/css" href="../css/green.css" title="green" media="screen" disabled/>
    
    <!-- Custom CSS Styles -->
    <link rel="stylesheet" type="text/css" href="../css/custom.css" media="screen">
     

	<!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

	<!-- Google Analytics -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-59748793-1', 'auto');
	  ga('send', 'pageview');
	</script>

</head>
<body>

<!-- Page Loader -->
<div id="pageloader" class="dark">
    <div class="loader-container">
        <div class="loader-logo "><img src="../images/woorus-logo.png" alt="" /></div>
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

<?php $bg = array("heartstrings-bg.jpg");?>
<div id="home" class="section-home fullscreen one-slide parallax dark-section" style="background-image: url(../images/clients/<?php echo $bg[array_rand($bg)];?>)">
    
    <!-- Overlay
	<div class="section-overlay"></div>
     -->
    <!-- Home Container -->
    <div class="container text-center">
        
	
        <!-- Text -->
        <p>Helping businesses &amp; individuals grow their digital presence</p>
        
        <!-- Button -->
        <a href="#about" class="goAbout btn-sys btn-light btn-border btn-large btn-crv">More About Us <i class="icon-arrow-right2"></i></a>
	<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
		<input type="hidden" name="cmd" value="_s-xclick">
		<input type="hidden" name="hosted_button_id" value="E52XSKFW5N2MY">
		<input type="image" src="http://woorus.com/images/signup.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
		<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
	</form>

    
    </div>
    
    <a href="#about" class="goAbout scroll-down-icon"><i class="fa fa-angle-double-down"></i></a>

</div>
<!-- End Home Section -->
    
    
    
<!-- Start Header -->
<header id="header" class="header-1 light-header">

	<div class="container">
    
        <!-- Logo -->
        <div id="logo" class="visible-lg visible-md">
            <a href="/"><img alt="" src="../images/woorus-logo-nav-white.png"/></a>
        </div>
        <div id="logo" class="visible-sm visible-xs">
            <a href="/"><img alt="" src="../images/woorus-logo-nav-white-sm.png"/></a>
        </div> 
 
        <!-- Toggle Menu - Responsive -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-menu"><i class="icon-menu2"></i></button>
        
        <!-- Navigation Menu -->
        <div id="nav-menu" class="nav-menu collapse navbar-collapse">
        	<ul>
		<li class="active"><a href="/#home">Home</a></li>
		<li><a href="/#about">About</a></li>
		<li><a href="/#services">Services</a></li>
		<li><a href="/#process">Process</a></li>
		<li><a href="/#contact">Contact</a></li>
            </ul>
        </div>
        
    </div>

</header>
<!-- End Header -->
    
    
    
<!-- Start About Section -->
<div id="detailed-services" class="section about-section light-section" style="padding-top:80px; padding-bottom:0; background-color:#fff;">

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
                    <img src="../images/bg-09.jpg" alt="" />
                </div>
                <!-- End Image with Marker -->
                
            </div>
        
        </div>

    </div>

</div>
<!-- End About Section -->
    
<!-- Start Footer -->
<div id="footer" class="section footer-section light-section">
    
    <a href="#home" id="goTop"><i class="icon-arrow-up11"></i></a>

	<div class="container">
    
    	<div class="row">
        
        	<div class="col-md-12">
                <!-- Footer Logo -->
            	<div class="logo-img"><img alt="" src="../images/woorus-logo-grey.png" /></div>
                
                <!-- Copyright -->
                <div class="copyright">All rights reserved. Copyright &copy; 2015 Woorus</div>
                <!-- Social Icons -->
	      <!--
                <div class="social-icons">
                	<ul>
			<li><a href="#"><i class="icon-yelp"></i></a></li>
			<li><a href="#"><i class="icon-linkedin4"></i></a></li>
			<li><a href="#"><i class="icon-facebook"></i></a></li>
			<li><a href="#"><i class="icon-google-plus"></i></a></li>
                    </ul>
                </div>
		-->
            </div>
        
        </div>
    
    </div>
    
</div>
<!-- End Footer -->

<!-- Main JS  -->
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/jquery.migrate.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/retina-1.1.0.min.js"></script>
<script type="text/javascript" src="../js/jquery.outside-events.min.js"></script>
<script type="text/javascript" src="../js/jquery.easing-1.3.pack.js"></script>
<script type="text/javascript" src="../js/jquery.parallax.js"></script>
<script type="text/javascript" src="../js/jquery.mb.YTPlayer.js"></script>
<script type="text/javascript" src="../js/owl.carousel.min.js"></script>
<script type="text/javascript" src="../js/jquery.appear.js"></script>
<script type="text/javascript" src="../js/jquery.scrollTo.js"></script>
<script type="text/javascript" src="../js/jquery.nav.js"></script>
<script type="text/javascript" src="../js/jquery.fitvids.js"></script>
<script type="text/javascript" src="../js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="../js/counter.js"></script>
<script type="text/javascript" src="../js/imagesloaded.min.js"></script>
<script type="text/javascript" src="../js/smooth-scroll.js"></script>
<script type="text/javascript" src="../js/contact-form.js"></script>
<!-- <script type="text/javascript" src="../js/portfolio.js"></script> -->
<script type="text/javascript" src="../js/main.js"></script>

    
</body>
</html>