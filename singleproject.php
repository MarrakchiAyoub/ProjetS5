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
				<img src="images/logo.png" class="logo" alt="" height="100px" width="160px">
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
				<h1 class="titlehead">Single Project</h1>
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
			<div class="c12">
				<h1 class="maintitle ">
				<span>Project Name</span>
				</h1>
			</div>
		</div>
		<div class="row">
		
			<!-- begin description area -->
			<div class="c6">
				<p>
					 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam hendrerit lacus mattis orci fermentum mollis iaculis purus lobortis. In et purus ut nunc elementum dapibus facilisis in quam. Phasellus porta porta eleifend. Praesent elit nulla, consectetur fringilla dignissim eu, scelerisque et tellus. Maecenas hendrerit enim sed nulla euismod id feugiat neque bibendum.
				</p>
				<p class="simplebox">
				 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam hendrerit lacus mattis orci fermentum mollis iaculis purus lobortis. In et purus ut nunc elementum dapibus facilisis in quam. Phasellus porta porta eleifend.
				<p>
					 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam hendrerit lacus mattis orci fermentum mollis iaculis purus lobortis. In et purus ut nunc elementum dapibus facilisis in quam. Phasellus porta porta eleifend. Praesent elit nulla, consectetur fringilla dignissim eu, scelerisque et tellus. Maecenas hendrerit enim sed nulla euismod id feugiat neque bibendum.
				</p>
				<i>Year</i> : 2013<br>
				<i>Client</i> : John Doe<br>
				<i>Category</i> : Advertising
			</div><!-- end description area -->
				
			<!-- begin slider area -->
			<div class="c6">
				<div class="flexslider">
					<ul class="slides">
						<li>
						<img src="http://placehold.it/552x369&text=any.size.you+wish" alt="">
						</li>
						<li>
						<img src="http://placehold.it/552x369&text=any.size.you+wish" alt="">
						</li>
						<li>
						<img src="http://placehold.it/552x369&text=any.size.you+wish" alt="">
						</li>
					</ul>
				</div>
			</div><!-- end slider area -->
				
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
				<img class="foot-logo" src="images/logo.png" alt="">
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
					<dt>Ancienne Route de l’Aeroport, Km 10, Ziaten. BP : 416. Tanger - Maroc</dt>
					<dd><span>Telephone:</span>+ 212 (0) 5 39 39 39 54 / 55</dd>
					<dd>E-mail: <a href="more.html">depinfo@fstt.ac.ma</a></dd>
				</dl>
				
			</div>
			<!-- 4th column -->
			<div class="c3">
				<h2 class="title"><i class="icon-link"></i> Links</h2>
				<hr class="footerstress">
				<ul>
					<li><a href="http://www.fstt.ac.ma">www.fstt.ac.ma</a></li>
					
					
					
					
					
					
					
					
					
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
				 Aghziel Aymane, Marrakchi Ayoub, Rahmouni Fatine, El Hasyouti Nourelhouda  &copy; 2018. All Rights Reserved.
			</div>
			<div class="c6">
				<span class="right">
				</span>
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

<!-- flexslider -->
<script src="js/jquery.flexslider-min.js"></script>

<!-- CALL flexslder -->
<script>
// Can also be used with $(document).ready()
$(window).load(function() {
$('.flexslider').flexslider({
animation: "slide"
});
});
</script>
</body>
</html>