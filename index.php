<?php session_start(); ?>
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
			<img src="images/ece.png" class="logo" alt="">
			</a>
		</div>
		<!--Menu-->
	<?php	include("menu.php"); ?>
	</div>
</div>
<div class="undermenuarea">
	<div class="boxedshadow">
	</div>
	<!-- SLIDER AREA
	================================================== -->
	<div id="da-slider" class="da-slider">
		<!--Slide 1-->
		<div class="da-slide">
			<h2> Elegant Design </h2>
			<p>
				With the right, great looking responsive website template, you will be able to attract visitors and increase your sales. This is an elegant theme designed for multi-purpose use.
			</p>
			<a href="#" class="da-link" style="width:202px;">Multi-Purpose</a>
			<div class="da-img">
				<img class="imgslide" src="./images/160.jpg" alt="">
			</div>
		</div>
		<!--Slide 2-->
		<div class="da-slide">
			<h2>Responsive</h2>
			<p>
				 We produce comprehensive mapping of consumers' relationships with communications across bought, owned & earned media based on bespoke insight.
			</p>
			<a href="#" class="da-link" style="width:192px;">MEDIA DEVICES</a>
			<div class="da-img">
				<img class="imgslide" src="./images/286.jpg" alt="">
			</div>
		</div>
		<!--Slide 3-->
		<div class="da-slide">
			<h2> Easy to modify </h2>
			<p>
				 We design, create and manage fully integrated social media platforms, online PR strategy and campaigns for our clients, ability to analyse, monitor and optimise brand presence.
			</p>
			<a href="#" class="da-link" style="width:224px;">fully supported</a>
			<div class="da-img">
				<img class="imgslide" src="./images/923.jpg" alt="">
			</div>
		</div>
		<nav class="da-arrows">
		<span class="da-arrows-prev"></span>
		<span class="da-arrows-next"></span>
		</nav>
	</div>
</div>
<!-- UNDER SLIDER - BLACK AREA
================================================== -->
<div class="undersliderblack">
	<div class="grid">
		<div class="row space-bot">
			<div class="c12">
				<!--Box 1-->
				<div class="c4 introbox introboxfirst">
					<div class="introboxinner">
						<span class="homeicone">
						<i class="icon-bolt"></i>
						</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					</div>
				</div>
				<!--Box 2-->
				<div class="c4 introbox introboxmiddle">
					<div class="introboxinner">
						<span class="homeicone">
						<i class="icon-cog"></i>
						</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					</div>
				</div>
				<!--Box 3-->
				<div class="c4 introbox introboxlast">
					<div class="introboxinner">
						<span class="homeicone">
						<i class="icon-lightbulb"></i>
						</span>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="shadowunderslider">
</div>
<!-- START content area
================================================== -->
<div class="grid">
	<div class="row space-bot">
		<!--INTRO-->
		<div class="c12">
			<div class="royalcontent">
			  <h1 class="royalheader">Departement Genie Informatique</h1>
			  <h1 class="title" style="text-transform:none;">Html theme with awesome features, sliders, unlimited colors & much more!</h1>
			</div>
		</div>
		<!--Box 1-->
		<div class="c4">
		  <h2 class="title hometitlebg"><em class="icon-qrcode smallrightmargin"></em>Cycle Licence</h2>
		  <div class="noshadowbox">
			<h5>DELIVERY</h5>
				<p>
					 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam hendrerit lacus mattis orci fermentum mollis iaculis purus lobortis. In et purus ut nunc elementum dapibus facilisis in quam.
				</p>
				<p class="bottomlink">
					<a href="#" class="neutralbutton"><i class="icon-link"></i></a>
				</p>
			</div>
		</div>
		<!--Box 2-->
		<div class="c4">
		  <h2 class="title hometitlebg"><em class="icon-cog smallrightmargin"></em>cycle master</h2>
		  <div class="noshadowbox">
			<h5>QUALITY</h5>
				<p>
					 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam hendrerit lacus mattis orci fermentum mollis iaculis purus lobortis. In et purus ut nunc elementum dapibus facilisis in quam.
				</p>
				<p class="bottomlink">
					<a href="#" class="neutralbutton"><i class="icon-link"></i></a>
				</p>
			</div>
		</div>
		<!--Box 3-->
		<div class="c4">
		  <h2 class="title hometitlebg"><em class="icon-user" style="margin-right:10px;"></em> cycle d'ingenieur</h2>
		  <div class="noshadowbox">
			<h5>PRICING</h5>
				<p>
					 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam hendrerit lacus mattis orci fermentum mollis iaculis purus lobortis. In et purus ut nunc elementum dapibus facilisis in quam.
				</p>
				<p class="bottomlink">
					<a href="#" class="neutralbutton"><i class="icon-link"></i></a>
				</p>
			</div>
		</div>
	</div>
	<!-- SHOWCASE
	================================================== -->
	<div class="row space-top">
		<div class="c12 space-top">
			<h1 class="maintitle ">
			<span>SHOWCASE</span>
			</h1>
		</div>
	</div>
	<div class="row space-bot">
		<div class="c12">
			<div class="list_carousel">
				<div class="carousel_nav">
					<a class="prev" id="car_prev" href="#"><span>prev</span></a>
					<a class="next" id="car_next" href="#"><span>next</span></a>
				</div>
				<div class="clearfix">
				</div>
				<ul id="recent-projects">
					<!--featured-projects 1-->
					<li>
					<div class="featured-projects">
						<div class="featured-projects-image">
							<a href="#"><img src="http://placehold.it/275x180" class="imgOpa" alt=""></a>
						</div>
						<div class="featured-projects-content">
							<h1><a href="#">Dolor sit amet</a></h1>
							<p>
								 porta acean pulvinar
							</p>
						</div>
					</div>
					</li>
					<!--featured-projects 2-->
					<li>
					<div class="featured-projects">
						<div class="featured-projects-image">
							<a href="#"><img src="http://placehold.it/275x180" class="imgOpa" alt=""></a>
						</div>
						<div class="featured-projects-content">
							<h1><a href="#">Nunc elementum </a></h1>
							<p>
								 porta acean pulvinar
							</p>
						</div>
					</div>
					</li>
					<!--featured-projects 3-->
					<li>
					<div class="featured-projects">
						<div class="featured-projects-image">
							<a href="#"><img src="http://placehold.it/275x180" class="imgOpa" alt=""></a>
						</div>
						<div class="featured-projects-content">
							<h1><a href="#">Sit amet</a></h1>
							<p>
								 porta acean pulvinar
							</p>
						</div>
					</div>
					</li>
					<!--featured-projects 4-->
					<li>
					<div class="featured-projects">
						<div class="featured-projects-image">
							<a href="#"><img src="http://placehold.it/275x180" class="imgOpa" alt=""></a>
						</div>
						<div class="featured-projects-content">
							<h1><a href="#">Dapibus facilisis</a></h1>
							<p>
								 porta acean pulvinar
							</p>
						</div>
					</div>
					</li>
					<!--featured-projects 5-->
					<li>
					<div class="featured-projects">
						<div class="featured-projects-image">
							<a href="#"><img src="http://placehold.it/275x180" class="imgOpa" alt=""></a>
						</div>
						<div class="featured-projects-content">
							<h1><a href="#">Nunc elementum</a></h1>
							<p>
								 porta acean pulvinar
							</p>
						</div>
					</div>
					</li>
					<!--featured-projects 6-->
					<li>
					<div class="featured-projects">
						<div class="featured-projects-image">
							<a href="#"><img src="http://placehold.it/275x180" class="imgOpa" alt=""></a>
						</div>
						<div class="featured-projects-content">
							<h1><a href="#">Dolor sit amet</a></h1>
							<p>
								 porta acean pulvinar
							</p>
						</div>
					</div>
					</li>
					<!--featured-projects 7-->
					<li>
					<div class="featured-projects">
						<div class="featured-projects-image">
							<a href="#"><img src="http://placehold.it/275x180" class="imgOpa" alt=""></a>
						</div>
						<div class="featured-projects-content">
							<h1><a href="#">HTML Theme</a></h1>
							<p>
								 porta acean pulvinar
							</p>
						</div>
					</div>
					</li>
					<!--featured-projects 8-->
					<li>
					<div class="featured-projects">
						<div class="featured-projects-image">
							<a href="#"><img src="http://placehold.it/275x180" class="imgOpa" alt=""></a>
						</div>
						<div class="featured-projects-content">
							<h1><a href="#">Salique bedroom</a></h1>
							<p>
								 porta acean pulvinar
							</p>
						</div>
					</div>
					</li>
				</ul>
				<div class="clearfix">
				</div>
			</div>
		</div>
	</div>
	<!-- CALL TO ACTION 
	================================================== -->
	<div class="row space-bot">
		<div class="c12">
			<div class="wrapaction">
				<div class="c9">
					<h1 class="subtitles">Salique is incredibly awesome, with a refreshingly clean design</h1>
					 We produce comprehensive mapping of consumers' relationships with communications across bought, owned & earned media based on bespoke insight. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam hendrerit lacus mattis orci fermentum mollis iaculis.
				</div>
				<div class="c3 text-center" style="margin-top:40px;">
					<div class="actionbutton">
						<i class=" icon-download-alt"></i> DOWNLOAD NOW
					</div>
				</div>
			</div>
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
				<img src="images/ece.png" class="logo" alt="">
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
<!-- END CONTENT AREA -->
<!-- JAVASCRIPTS
================================================== -->
<!-- all -->
<script src="js/modernizr-latest.js"></script>

<!-- menu & scroll to top -->
<script src="js/common.js"></script>

<!-- slider -->
<script src="js/jquery.cslider.js"></script>

<!-- cycle -->
<script src="js/jquery.cycle.js"></script>

<!-- carousel items -->
<script src="js/jquery.carouFredSel-6.0.3-packed.js"></script>

<!-- twitter -->
<script src="js/jquery.tweet.js"></script>

<!-- Call Showcase - change 4 from min:4 and max:4 to the number of items you want visible -->
<script type="text/javascript">
$(window).load(function(){			
			$('#recent-projects').carouFredSel({
				responsive: true,
				width: '100%',
				auto: true,
				circular	: true,
				infinite	: false,
				prev : {
					button		: "#car_prev",
					key			: "left",
						},
				next : {
					button		: "#car_next",
					key			: "right",
							},
				swipe: {
					onMouse: true,
					onTouch: true
					},
				scroll : 2000,
				items: {
					visible: {
						min: 4,
						max: 4
					}
				}
			});
		});	
</script>

<!-- Call opacity on hover images from carousel-->
<script type="text/javascript">
$(document).ready(function(){
    $("img.imgOpa").hover(function() {
      $(this).stop().animate({opacity: "0.6"}, 'slow');
    },
    function() {
      $(this).stop().animate({opacity: "1.0"}, 'slow');
    });
  });
</script>
</body>
</html>