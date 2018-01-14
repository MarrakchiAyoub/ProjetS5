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
				<h1 class="titlehead">Portfolio Four</h1>
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
		<!-- begin categories -->
		<div class="row space-bot">
			<div class="c12">
				<h1 class="maintitle space-top">
				<span>EXPLORE OUR WORK</span>
				</h1>
				<div id="nav">
					<ul class="option-set">
						<li><a href="" data-filter="*" class="selected">Show All</a></li>
						<li><a href="" data-filter=".cat1">Business</a></li>
						<li><a href="" data-filter=".cat2">Light</a></li>
						<li><a href="" data-filter=".cat3">Modern</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- end categories -->
		<div class="row space-top">
			<div id="content">
				<!-- box 1 -->
				<div class="boxfourcolumns cat2">
					<div class="boxcontainer">
						<div class="mosaic-block cover mosaicover4col">
							<div class="mosaic-overlay">
								<img src="http://placehold.it/278x180" alt="">
							</div>
							<a href="singleproject.html" target="_blank" class="mosaic-backdrop blue">
							<div class="details">
								<b>Innovative Art & Dalya brings you Quality Furniture</b>
								<p>
									 via Salique
								</p>
								<i class="icon-link mosaiclink"></i>
							</div>
							</a>
						</div>
						<h1><a href="#">Dalya Cream</a></h1>
						<p>
							 porta acean pulvinar
						</p>
					</div>
				</div>
				<!-- box 2 -->
				<div class="boxfourcolumns cat1">
					<div class="boxcontainer">
						<div class="mosaic-block cover mosaicover4col">
							<div class="mosaic-overlay">
								<img src="http://placehold.it/278x180" alt="">
							</div>
							<a href="singleproject.html" target="_blank" class="mosaic-backdrop orange">
							<div class="details">
								<b>Innovative Art & Dalya brings you Quality Furniture</b>
								<p>
									 via Salique
								</p>
								<i class="icon-link mosaiclink"></i>
							</div>
							</a>
						</div>
						<h1><a href="#">Office Look</a></h1>
						<p>
							 porta acean pulvinar
						</p>
					</div>
				</div>
				<!-- box 3 -->
				<div class="boxfourcolumns cat1 cat3">
					<div class="boxcontainer">
						<div class="mosaic-block cover mosaicover4col">
							<div class="mosaic-overlay">
								<img src="http://placehold.it/278x180" alt="">
							</div>
							<a href="singleproject.html" target="_blank" class="mosaic-backdrop green">
							<div class="details">
								<b>Innovative Art & Dalya brings you Quality Furniture</b>
								<p>
									 via Salique
								</p>
								<i class="icon-link mosaiclink"></i>
							</div>
							</a>
						</div>
						<h1><a href="#">Open Space</a></h1>
						<p>
							 porta acean pulvinar
						</p>
					</div>
				</div>
				<!-- box 4 -->
				<div class="boxfourcolumns cat2 cat3">
					<div class="boxcontainer">
						<div class="mosaic-block cover mosaicover4col">
							<div class="mosaic-overlay">
								<img src="http://placehold.it/278x180" alt="">
							</div>
							<a href="singleproject.html" target="_blank" class="mosaic-backdrop orangered">
							<div class="details">
								<b>Innovative Art & Dalya brings you Quality Furniture</b>
								<p>
									 via Salique
								</p>
								<i class="icon-link mosaiclink"></i>
							</div>
							</a>
						</div>
						<h1><a href="#">Stylish White</a></h1>
						<p>
							 porta acean pulvinar
						</p>
					</div>
				</div>
				<!-- box 5 -->
				<div class="boxfourcolumns cat2">
					<div class="boxcontainer">
						<div class="mosaic-block cover mosaicover4col">
							<div class="mosaic-overlay">
								<img src="http://placehold.it/278x180" alt="">
							</div>
							<a href="singleproject.html" target="_blank" class="mosaic-backdrop green">
							<div class="details">
								<b>Innovative Art & Dalya brings you Quality Furniture</b>
								<p>
									 via Salique
								</p>
								<i class="icon-link mosaiclink"></i>
							</div>
							</a>
						</div>
						<h1><a href="#">Classic Beauty</a></h1>
						<p>
							 porta acean pulvinar
						</p>
					</div>
				</div>
				<!-- box 6 -->
				<div class="boxfourcolumns cat2 cat3">
					<div class="boxcontainer">
						<div class="mosaic-block cover mosaicover4col">
							<div class="mosaic-overlay">
								<img src="http://placehold.it/278x180" alt="">
							</div>
							<a href="singleproject.html" target="_blank" class="mosaic-backdrop blue">
							<div class="details">
								<b>Innovative Art & Dalya brings you Quality Furniture</b>
								<p>
									 via Salique
								</p>
								<i class="icon-link mosaiclink"></i>
							</div>
							</a>
						</div>
						<h1><a href="#">Warm Home</a></h1>
						<p>
							 porta acean pulvinar
						</p>
					</div>
				</div>
				<!-- box 7 -->
				<div class="boxfourcolumns cat2">
					<div class="boxcontainer">
						<div class="mosaic-block cover mosaicover4col">
							<div class="mosaic-overlay">
								<img src="http://placehold.it/278x180" alt="">
							</div>
							<a href="singleproject.html" target="_blank" class="mosaic-backdrop blue">
							<div class="details">
								<b>Innovative Art & Dalya brings you Quality Furniture</b>
								<p>
									 via Salique
								</p>
								<i class="icon-link mosaiclink"></i>
							</div>
							</a>
						</div>
						<h1><a href="#">Dalya Cream</a></h1>
						<p>
							 porta acean pulvinar
						</p>
					</div>
				</div>
				<!-- box 8 -->
				<div class="boxfourcolumns cat2">
					<div class="boxcontainer">
						<div class="mosaic-block cover mosaicover4col">
							<div class="mosaic-overlay">
								<img src="http://placehold.it/278x180" alt="">
							</div>
							<a href="singleproject.html" target="_blank" class="mosaic-backdrop blue">
							<div class="details">
								<b>Innovative Art & Dalya brings you Quality Furniture</b>
								<p>
									 via Salique
								</p>
								<i class="icon-link mosaiclink"></i>
							</div>
							</a>
						</div>
						<h1><a href="#">Dalya Cream</a></h1>
						<p>
							 porta acean pulvinar
						</p>
					</div>
				</div>
				<!-- box 9 etc -->
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

<!-- filtering -->
<script src="js/jquery.isotope.min.js"></script>

<!-- hover effects -->
<script type="text/javascript" src="js/mosaic.1.0.1.min.js"></script>

<!-- CALL hover effects -->
<script type="text/javascript">  			
			$(document).ready(function($){				
				$('.cover').mosaic({
					animation	:	'slide',	//fade or slide
					hover_x		:	'578'		//Horizontal position on hover
				});		    
		    });		    
</script>

<!-- CALL isotope filtering -->
<script>
$(document).ready(function(){
var $container = $('#content');
  $container.imagesLoaded( function(){
        $container.isotope({
	filter: '*',
	animationOptions: {
     duration: 750,
     easing: 'linear',
     queue: false,
   }
});
});
$('#nav a').click(function(){
  var selector = $(this).attr('data-filter');
    $container.isotope({ 
	filter: selector,
	animationOptions: {
     duration: 750,
     easing: 'linear',
     queue: false,
   }
  });
  return false;
});
$('#nav a').click(function (event) {
    $('a.selected').removeClass('selected');
    var $this = $(this);
    $this.addClass('selected');
    var selector = $this.attr('data-filter');
    $container.isotope({
         filter: selector
    });
    return false; // event.preventDefault()
});
});
 </script>
</body>
</html>