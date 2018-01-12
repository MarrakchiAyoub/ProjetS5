<?php session_start(); $nom = isset($_SESSION['nom']) ? $_SESSION['nom'] : NULL; $pre = isset($_SESSION['pre']) ? $_SESSION['pre'] : NULL;  ?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width"/>
<title>Genie Informatique</title>
<!-- STYLES & JQUERY 
================================================== -->
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/icons.css"/>
<link rel="stylesheet" type="text/css" href="css/slider.css"/>
<link rel="stylesheet" type="text/css" href="css/skinblue.css"/><!-- change skin color -->
<link rel="stylesheet" type="text/css" href="css/responsive.css"/>
<script src="js/jquery-1.9.0.min.js"></script><!-- the rest of the scripts at the bottom of the document -->
</head>
<body>
<!-- TOP LOGO & MENU
================================================== -->
<div class="grid">
	<div class="row space-bot">
		<!--Logo-->
		<div class="c4">
			<a href="index.php">
				<img src="images/ece.png" class="logo" alt="" height="100px" width="160px">
			</a>
		</div>
		<!--Menu-->
	<?php	include("menu.php"); ?>
	</div>
</div>
<!-- HEADER
================================================== -->
<div class="undermenuarea">
	<div class="boxedshadow">
	</div>
	<div class="grid">
		<div class="row">
			<div class="c8">
				<h1 class="titlehead">Pricing Table</h1>
			</div>
			<div class="c4">				<h1 class="titlehead rightareaheader"><?php if(isset($_SESSION['nom'])) echo '<i class="icon-user"></i>'; echo " ".$nom." ".$pre ?></h1>
</div>
		</div>
	</div>
</div>
<!-- CONTENT
================================================== -->
<div class="grid">
		<div class="shadowundertop">
		</div>
		<div class="row">
			<!-- begin pricing style 1 -->
			<div class="c12">
				<h1 class="maintitle ">
				<span>Pricing Style</span>
				</h1>
				<div class="vuzz-pricing-table c3">
					<div class="vuzz-pricing">
						<div class="vuzz-pricing-header">
							<h5>Gold</h5>
							<div class="vuzz-pricing-cost">
								$29.99
							</div>
							<div class="vuzz-pricing-per">
								per month
							</div>
						</div>
						<div class="vuzz-pricing-content">
							<ul>
								<li>5 products</li>
								<li>1 image per product</li>
								<li>basic stats</li>
								<li>non commercial</li>
							</ul>
						</div>
						<div class="vuzz-pricing-button">
							<a href="#" class="vuzz-button buttonprice" target="_self" rel="nofollow"><span class="vuzz-button-inner">Sign Up</span></a>
						</div>
					</div>
				</div>
				<div class="vuzz-pricing-table c3">
					<div class="vuzz-pricing">
						<div class="vuzz-pricing-header">
							<h5>Premium</h5>
							<div class="vuzz-pricing-cost">
								$29.99
							</div>
							<div class="vuzz-pricing-per">
								per month
							</div>
						</div>
						<div class="vuzz-pricing-content">
							<ul>
								<li>5 products</li>
								<li>1 image per product</li>
								<li>basic stats</li>
								<li>non commercial</li>
							</ul>
						</div>
						<div class="vuzz-pricing-button">
							<a href="#" class="vuzz-button buttonprice" target="_self" rel="nofollow"><span class="vuzz-button-inner">Sign Up</span></a>
						</div>
					</div>
				</div>
				<div class="vuzz-pricing-table c3">
					<div class="vuzz-pricing popular">
						<div class="vuzz-pricing-header">
							<h5>Featured</h5>
							<div class="vuzz-pricing-cost">
								$29.99
							</div>
							<div class="vuzz-pricing-per">
								per month
							</div>
						</div>
						<div class="vuzz-pricing-content">
							<ul>
								<li>5 products</li>
								<li>1 image per product</li>
								<li>basic stats</li>
								<li>non commercial</li>
							</ul>
						</div>
						<div class="vuzz-pricing-button">
							<a href="#" class="vuzz-button buttonprice" target="_self" rel="nofollow"><span class="vuzz-button-inner">Sign Up</span></a>
						</div>
					</div>
				</div>
				<div class="vuzz-pricing-table c3">
					<div class="vuzz-pricing">
						<div class="vuzz-pricing-header">
							<h5>Diamond</h5>
							<div class="vuzz-pricing-cost">
								$29.99
							</div>
							<div class="vuzz-pricing-per">
								per month
							</div>
						</div>
						<div class="vuzz-pricing-content">
							<ul>
								<li>5 products</li>
								<li>1 image per product</li>
								<li>basic stats</li>
								<li>non commercial</li>
							</ul>
						</div>
						<div class="vuzz-pricing-button">
							<a href="#" class="vuzz-button buttonprice" target="_self" rel="nofollow"><span class="vuzz-button-inner">Sign Up</span></a>
						</div>
					</div>
				</div>
			</div>
			<!-- end pricing style 1 -->
		</div>
		<div class="row space-top">
			<div class="c12 space-top">
				<h1 class="maintitle ">
				<span>Pricing Style Alt</span>
				</h1>
				<!-- begin pricing style 2 -->
				<div id="pricing-table" class="clear">
					<div class="plan">
						<h3>Enterprise<span>$59</span></h3>
						<a class="signup" href="">Sign up</a>
						<ul>
							<li><b>10GB</b> Disk Space</li>
							<li><b>100GB</b> Monthly Bandwidth</li>
							<li><b>20</b> Email Accounts</li>
							<li><b>Unlimited</b> subdomains</li>
						</ul>
					</div>
					<div class="plan" id="most-popular">
						<h3>Professional<span>$29</span></h3>
						<a class="signup" href="">Sign up</a>
						<ul>
							<li><b>5GB</b> Disk Space</li>
							<li><b>50GB</b> Monthly Bandwidth</li>
							<li><b>10</b> Email Accounts</li>
							<li><b>Unlimited</b> subdomains</li>
						</ul>
					</div>
					<div class="plan">
						<h3>Standard<span>$17</span></h3>
						<a class="signup" href="">Sign up</a>
						<ul>
							<li><b>3GB</b> Disk Space</li>
							<li><b>25GB</b> Monthly Bandwidth</li>
							<li><b>5</b> Email Accounts</li>
							<li><b>Unlimited</b> subdomains</li>
						</ul>
					</div>
					<div class="plan">
						<h3>Basic<span>$9</span></h3>
						<a class="signup" href="">Sign up</a>
						<ul>
							<li><b>1GB</b> Disk Space</li>
							<li><b>10GB</b> Monthly Bandwidth</li>
							<li><b>2</b> Email Accounts</li>
							<li><b>Unlimited</b> subdomains</li>
						</ul>
					</div>
				</div>
				<!-- end pricing style 2 -->
			</div>
		</div>
</div><!-- end grid -->
<!-- FOOTER
================================================== -->
<div id="wrapfooter">
	<div class="grid">
		<div class="row" id="footer">
			<!-- to top button  -->
			<p class="back-top floatright">
				<a href="#top"><span></span></a>
			</p>
			<!-- 1st column -->
			<div class="c3">
				<img class="foot-logo" src="images/logo.png" alt="" style="padding-top: 70px;">
			</div>
			<!-- 2nd column -->
			<div class="c3">
				<h2 class="title"><i class="icon-twitter"></i> Follow us</h2>
				<hr class="footerstress">
				<ul class="social-links" style="margin-top:15px;">
					<li class="twitter-link smallrightmargin">
					<a href="twitter.com" class="twitter has-tip" target="_blank" title="Follow Us on Twitter">Twitter</a>
					</li>
					<li class="facebook-link smallrightmargin">
					<a href="facebook.com" class="facebook has-tip" target="_blank" title="Join us on Facebook">Facebook</a>
					</li>
					<li class="google-link smallrightmargin">
					<a href="google.com" class="google has-tip" title="Google +" target="_blank">Google</a>
					</li>
					<li class="linkedin-link smallrightmargin">
					<a href="linkedin.com" class="linkedin has-tip" title="Linkedin" target="_blank">Linkedin</a>
					</li>
				</ul>
			</div>
			<!-- 3rd column -->
			<div class="c3">
				<h2 class="title"><i class="icon-envelope-alt"></i> Contact</h2>
				<hr class="footerstress">
				<dl>
					<dt>Ancienne Route de l’Aéroport, Km 10, Ziaten. BP : 416. Tanger - Maroc</dt>
					<dd><span>Telephone:</span>+ 212 (0) 5 39 39 39 54 / 55</dd>
					<dd>E-mail: <a href="more.html">depinfo@fstt.ac.ma</a></dd>
				</dl>
				
			</div>
			<!-- 4th column -->
			<div class="c3">
				<h2 class="title"><i class="icon-link"></i> Links</h2>
				<hr class="footerstress">
				<ul>
					<li>Services</li>
					<li>Privacy Policy</li>
					<li>Shortcodes</li>
					<li>Columns</li>
					<li>Portfolio</li>
					<li>Blog</li>
					<li>Contact</li>
					<li>Font Awesome</li>
					<li>Single Project</li>
					<li>Home</li>
				</ul>
			</div>
			<!-- end 4th column -->
		</div>
	</div>
</div>
<!-- copyright area -->
<div class="copyright">
	<div class="grid">
		<div class="row">
			<div class="c6">
				 Your Name &copy; 2015. All Rights Reserved.
			</div>
			<div class="c6">
				<span class="right">
				Premium Template by WowThemesNet </span>
			</div>
		</div>
	</div>
</div>
<!-- JAVASCRIPTS
================================================== -->
<!-- all -->
<script src="js/modernizr-latest.js"></script>

<!-- menu & scroll to top -->
<script src="js/common.js"></script>

<!-- twitter -->
<script src="js/jquery.tweet.js"></script>

<!-- cycle -->
<script src="js/jquery.cycle.js"></script>
</body>
</html>