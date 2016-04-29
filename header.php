<html>
	<head>
		<title>Murray Jewelery</title>
		
		<link rel="stylesheet" href="css/bootstrap.css" />
		<link rel="stylesheet" href="css/bootstrap-theme.css" />
		<link rel="stylesheet" href="css/font-awesome.min.css" />
		<link rel="stylesheet" href="css/main-style.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js" /></script>
		
		<script>
		$(document).ready(function() {
			$("#myNavbar > ul > li").click(function () {
				if ($(this).hasClass("selected")) {
					$(".selected .dropdown").slideUp();
					$("#myNavbar > ul > li.d").removeClass("selected");
				} else {
					$(".selected .dropdown").slideUp();
					$("#myNavbar > ul > li.d").removeClass("selected");
					$(this).addClass("selected");
					$(".selected .dropdown").slideDown();
				}
				return false;
			});
			$("#myNavbar2 > ul > li.d > a").click(function () {
				if ($(this).parent().hasClass("selected")) {
					$(".selected .dropdown").slideUp();
					$("#myNavbar2 > ul > li.d").removeClass("selected");
				} else {
					$(".selected .dropdown").slideUp();
					$("#myNavbar2 > ul > li.d").removeClass("selected");
					$(this).parent().addClass("selected");
					$(".selected .dropdown").slideDown();
				}
				return false;
			});
		});
		</script>
	</head>
	
	<body>
	
		<header class="">
		<!-- Header Starts -->
		
			<article class="top-header">
			<!-- Top Header Starts -->
			
				<nav class="navbar tp">
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span> 
							</button>
						</div>
						<div class="collapse navbar-collapse" id="myNavbar">
							<ul class="">
								<li class="active"><a href="#"><img src="images/1_0.png" alt="" width="30" /> Estate Appraisal</a>
									<div class="dropdown">
									<div class="container top-menu">
										<div class="col-sm-3">
											<img src="images/1_0.png" alt="" />
										</div>
										<div class="col-sm-9">
            <h1>Estate Appraisals</h2>
            
            <p>Murray Jewelry performs AGS Certified services including appraisals and engravings.</p>

            <p>We can perform two types of appraisals, Insurance Replacement Appraisals and Estate Appraisals.</p>
            
            <p>We provide engraving services for items purchased in our store. Other services include our Layaway program, Gift Certificate Purchase Option and Stone </p>

										</div>
									</div>
									</div>
								</li>
								<li><a href="#"><img src="images/1_0.png" alt="" width="30" /> Insurance Appraisal</a>
									<div class="dropdown">
									<div class="container top-menu">
										<div class="col-sm-3">
											<img src="images/1_0.png" alt="" />
										</div>
										<div class="col-sm-9">
        
            <h1>Insurance Appraisal</h2>
            
            <p>Murray Jewelry performs AGS Certified services including appraisals and engravings.</p>

            <p>We can perform two types of appraisals, Insurance Replacement Appraisals and Estate Appraisals.</p>
            
            <p>We provide engraving services for items purchased in our store. Other services include our Layaway program, Gift Certificate Purchase Option and Stone </p>
            
            
										</div>
									</div>
									</div>
								</li>
								<li><a href="#"><img src="images/1_0.png" alt="" width="30" /> Layaway</a>
									<div class="dropdown">
									<div class="container top-menu">
										<div class="col-sm-3">
											<img src="images/1_0.png" alt="" />
										</div>
										<div class="col-sm-9">
<h1>Our Layaway Services</h1>

<p>Murray Jewelry offers Layaway for In-Store Merchandise.</p>

<p>We make it easy for you to get that special item.</p>

<p>Layaway an item for up to One Year <a href="layaway">More info&hellip;</a></p>
										</div>
									</div>
									</div>
								</li> 
								<li><a href="#"><img src="images/1_0.png" alt="" width="30" /> Repairs</a>
									<div class="dropdown">
									<div class="container top-menu">
										<div class="col-sm-3">
											<img src="images/1_0.png" alt="" />
										</div>
										<div class="col-sm-9">
<h1>Jewelry and Watch Repair</h1>

<p>Murray Jewelry performs nearly all repairs and stones settings in-house, with over 50 years of experience. We can provide you with a quote BEFORE the repair is started.</p>

<p>Your property is safe while in our care with state-of-the-art security, safes, locks and surveillance at our store location.</p>

<p>Allen Wagner is our resident stone setter, and watch and jewelry technician. We provide all facets of jewelry repair, from sterling silver to platinum.</p>
										</div>
									</div>
									</div>
								</li> 
							</ul>
						</div>
					</div>
				</nav>
				
			<!-- Top Header Ends -->
			</article>
			
			<section class="container">
			
			<article class="call col-sm-3">
				<span>CALL US NOW!</span><br />
				<a href="tel:9037537133">903-753-7133</a><br />
				<a href="#" target="_blank"><img src="images/icon-fb.png" /></a>
				<a href="#" target="_blank"><img src="images/icon-tw.png" /></a>
				<a href="#" target="_blank"><img src="images/icon-u.png" /></a>
				<a href="#" target="_blank"><img src="images/icon-pin.png" /></a>
			</article>
		
			<article class="logo col-sm-6">
				<img src="images/logo.png" class="img-responsive" />
			</article>
			
			<article class="ad col-sm-3 text-center">
				<img src="images/rolex-img.png" />
			</article>
			
			<div class="clearfix"></div>
			
			</section>
			
			<article class="top-header bottom-header">
			<!-- Bottom Header Starts -->
			
				<nav class="navbar">
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar2">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span> 
							</button>
						</div>
						<div class="collapse navbar-collapse" id="myNavbar2">
							<ul class="">
								<li class="active"><a href="index">Home</a></li>
								<li><a href="rolex">Rolex</a></li>
								<li class="d"><a href="watches">Watches</a>
									<div class="dropdown">
										<ul>
											<li><a href="watches"><strong>Watches</strong>         </a></li>
											<li><a href="belair">Belair         </a></li>
											<li><a href="reactor">Reactor        </a></li>
											<li><a href="seiko">Seiko          </a></li>
											<li><a href="vintage-watches">Vintage Watches</a></li>
										</ul>
									</div>
								</li>
								<li><a href="diamond-search">Diamond Search</a></li> 
								<li class="d"><a href="jewelry">Jewelry</a>
									<div class="dropdown">
										<ul>
											<li><a href="jewelry"><strong>Jewelry</strong></a></li>
											<li><a href="bellari">Bellarri</a></li>
											<li><a href="charles-krypell">Charles Krypell        </a></li>
											<li><a href="costar-imports">Costar Imports          </a></li>
											<li><a href="pandora-jewelry">Pandora Jewelry</a></li>
											<li><a href="ziva-jewels">Ziva Jewels</a></li>
										</ul>
									</div>
								</li> 
								<li class="d"><a href="services">Services</a>
									<div class="dropdown">
										<ul>
											<li><a href="services"><strong>Services</strong></a></li>
											<li><a href="estate-appraisals">Estate Appraisals</a></li>
											<li><a href="insurance-appraisal">Insurance Appraisal</a></li>
											<li><a href="layaway">Layaway</a></li>
											<li><a href="repairs">Repairs</a></li>
											<li><a href="stone-setting">Stone Setting</a></li>
										</ul>
									</div>
								</li> 
								<li class="d"><a href="about-us">About Us</a>
									<div class="dropdown">
										<ul>
											<li><a href="about-us"><strong>About Us</strong></a></li>
											<li><a href="location">Location</a></li>
											<li><a href="site-map">Site Map</a></li>
											<li><a href="contact-us">Contact Us</a></li>
										</ul>
									</div>
								</li> 
								<li><a href="#">News & Updates</a></li> 
							</ul>
						</div>
					</div>
				</nav>
				
			<!-- Bottom Header Ends -->
			</article>
			
		<!-- Header Ends -->
		</header>
