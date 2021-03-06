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
				<h1 class="titlehead">Right Sidebar</h1>
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
			
			<!-- MAIN CONTENT -->
			<div class="c9">
				<h1 class="maintitle space-top">
				<span>VIVAMUS ADIPISCING, SAPIEN</span>
				</h1>
				<p>
					<span class="dropcap">S</span>ed sit amet nibh cursus libero bibendum vestibulum sed sit amet sem. Mauris dolor mauris, ultrices ac tincidunt ac, mollis sed ante. Nunc egestas augue non augue facilisis laoreet facilisis orci auctor. Nullam vulputate dui non ante fermentum laoreet. In hac habitasse platea dictumst. Aliquam eu urna arcu. Etiam nec justo urna, vel cursus lorem. Sed blandit purus faucibus neque sollicitudin facilisis vel eget purus. In tincidunt eros nec leo varius imperdiet. Vivamus non nulla vitae justo rutrum mattis. Etiam vehicula, velit nec eleifend eleifend, velit tellus adipiscing nunc, nec ornare purus odio at diam. Sed dictum purus at risus laoreet eget venenatis neque sodales. Mauris at ligula urna.
				</p>
				<p class="justabox">
					 Praesent et ante vestibulum nibh mattis viverra a et risus. Praesent accumsan semper dolor, at viverra nibh porttitor sed. Etiam tellus nibh, blandit sed bibendum vel, eleifend nec leo. Praesent in varius erat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam ligula metus, posuere non pulvinar eget, placerat id lorem. Pellentesque at ultricies tellus. Nulla facilisi. Aenean id arcu leo. Vestibulum vitae ultricies tellus. Donec rutrum metus id mauris sodales at ornare lorem pharetra. Phasellus vitae mauris id tortor varius tincidunt in vitae est. Proin mollis, nisi in viverra facilisis, eros sem accumsan nisi, eu viverra nulla magna et nunc. Nulla a nisi ac neque viverra auctor non vitae ipsum. Integer eget tristique elit.
				</p>
				<p>
					<i>
					Aliquam vehicula justo et nibh malesuada mollis. Mauris commodo odio sit amet felis condimentum at luctus erat ornare. Proin fermentum libero malesuada nisi laoreet sit amet scelerisque lacus pellentesque. Proin elementum eleifend orci in venenatis. Morbi dapibus faucibus sollicitudin. Donec pharetra, elit et luctus aliquet, turpis est ultrices est, ut bibendum ligula lectus in nibh. Quisque tempus mollis hendrerit. Cras et ligula malesuada urna aliquam sodales nec vel erat. Pellentesque iaculis ante id leo congue vel vulputate ipsum fermentum. </i>
				</p>
				<p class="simplebox">
					 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam hendrerit lacus mattis orci fermentum mollis iaculis purus lobortis. In et purus ut nunc elementum dapibus facilisis in quam. Phasellus porta porta eleifend. Praesent elit nulla, consectetur fringilla dignissim eu, scelerisque et tellus. Maecenas hendrerit enim sed nulla euismod id feugiat neque bibendum. Maecenas mattis dictum purus aliquam faucibus. Maecenas at lacus in lectus aliquam condimentum vitae eleifend dolor.
				</p>
			</div><!-- end main content -->
			
			<!-- SIDEBAR -->	
			<div class="c3">
				<div class="rightsidebar">
					<h2 class="title stresstitle">Sidebar Area</h2>
					<hr class="hrtitle">
					<img src="http://placehold.it/255x170" class="imgOpa teamimage" alt="">
					<div class="teamdescription">
						<h1>John Doe</h1>
						<span class="hirefor">Product Designer</span>
					</div>
					<br/>
					<img src="http://placehold.it/255x170" class="imgOpa teamimage" alt="">
					<div class="teamdescription">
						<h1>Brian V. Roberts</h1>
						<span class="hirefor"> Senior Designer</span>
					</div>
				</div>
			</div><!-- end sidebar -->			
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

<!-- cycle -->
<script src="js/jquery.cycle.js"></script>

<!-- twitter -->
<script src="js/jquery.tweet.js"></script>

</body>
</html>