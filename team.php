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
				<h1 class="titlehead">Meet the Staff</h1>
			</div>
			<div class="c4">
				<h1 class="titlehead rightareaheader"><?php if(isset($_SESSION['nom'])) echo '<i class="icon-user"></i>'; echo " ".$nom." ".$pre ?></h1>
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
				<span>Administration</span>
				</h1>
			</div>
			<!-- BEGIN TEAM STYLE 1
			================================================== -->
			<!-- box 1 -->
			<div class="c3" style="text-align:center;">
				<img src="http://placehold.it/270x180" class="imgOpa teamimage" alt="">
				<div class="teamdescription">
					<h1>Pr. EN-NAIMI Mokhtar</h1>
					<span class="hirefor">Chef de Departement</span>
				</div>
			</div>
			<!-- box 2 -->
			<div class="c3">
				<img src="http://placehold.it/270x180" class="imgOpa teamimage" alt="">
				<div class="teamdescription">
					<h1>Pr. ELBRAK Mohammed</h1>
					<span class="hirefor"> Chef de "Genie Info (Licence)" </span>
				</div>
			</div>
			<!-- box 3 -->
			<div class="c3">
				<img src="http://placehold.it/270x180" class="imgOpa teamimage" alt="">
				<div class="teamdescription">
					<h1> Pr. BOUHORMA Mohammed </h1>
					<span class="hirefor"> Chef de "Systèmes informatiques et réseaux (MASTER)"</span>
				</div>
			</div>
			<!-- box 4 -->
			<div class="c3">
				<img src="http://placehold.it/270x180" class="imgOpa teamimage" alt="">
				<div class="teamdescription">
					<h1>Pr. GHADI Abderrahim</h1>
					<span class="hirefor">Chef de "Logiciels et systèmes informatiques (CI)"</span>
				</div>
			</div>
			<!-- END TEAM STYLE 1
			================================================== -->
		</div>
		
		<div class="row space-top">
			<div class="c12 space-top">
				<h1 class="maintitle ">
				<span>Notre Departement</span>
				</h1>
			</div>
			<!-- BEGIN TEAM STYLE 2
			================================================== -->
			<div class="c4">
				<p>
					<img src="http://placehold.it/367x251" style="border-bottom: 5px solid #eee;" alt="">
				</p>
			</div>
			<div class="c4">
				<h5>Pr. EN-NAIMI Mokhtar</h5>
				<p>
					Chef du Departement et professeur a la FSTT depuis 1999.
				</p>
				<p>
				</p>
				<ul class="social-links">
					<li class="twitter-link">
					<a href="#" class="twitter has-tip" target="_blank" title="Follow Us on Twitter">Twitter</a>
					</li>
					<li class="facebook-link">
					<a href="#" class="facebook has-tip" target="_blank" title="Join us on Facebook">Facebook</a>
					</li>
					<li class="google-link">
					<a href="#" class="google has-tip" title="Google +" target="_blank">Google</a>
					</li>
					<li class="dribbble-link">
					<a href="#" class="dribbble has-tip" title="Dribbble" target="_blank">Dribbble</a>
					</li>
					<li class="linkedin-link">
					<a href="#" class="linkedin has-tip" title="Linkedin" target="_blank">Linkedin</a>
					</li>
					<li class="pinterest-link">
					<a href="#" class="pinterest has-tip" title="Pinterest" target="_blank">Pinterest</a>
					</li>
				</ul>
				<div class="clear"></div>
				<p>
				</p>
			</div>
			<div class="c4">
				<ul id="skill">
					<li><span class="bar progressorange" style="width:100%;"></span>
					<h3>Webdesign 100%</h3>
					</li>
					<li><span class="bar progressgreen" style="width:80%;"></span>
					<h3>jQuery 80%</h3>
					</li>
					<li><span class="bar progressblue" style="width:60%;"></span>
					<h3>Wordpress 60%</h3>
					</li>
				</ul>
			</div>
			<!-- END TEAM STYLE 1
			================================================== -->
		</div>
		
		<div class="row space-top">
			<div class="c12">
				<h1 class="maintitle ">
				<span>Nos professeurs</span>
				</h1>
			</div>
			<!-- BEGIN TEAM STYLE CAROUSEL
			================================================== -->
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
								<a href="#"><img class="imgOpa" src="http://placehold.it/275x185" alt=""></a>
							</div>
							<div class="featured-projects-content">
								<h1><a href="#">Pr. BAIDA</a></h1>
								<p>
									 Professeur de Web Developpement.
								</p>
							</div>
						</div>
						</li>
						<!--featured-projects 2-->
						<li>
						<div class="featured-projects">
							<div class="featured-projects-image">
								<a href="#"><img class="imgOpa" src="http://placehold.it/275x185" alt=""></a>
							</div>
							<div class="featured-projects-content">
								<h1><a href="#">Pr. Ghadi</a></h1>
								<p>
									 Professeur de Linux.
								</p>
							</div>
						</div>
						</li>
						<!--featured-projects 3-->
						<li>
						<div class="featured-projects">
							<div class="featured-projects-image">
								<a href="#"><img class="imgOpa" src="http://placehold.it/275x185" alt=""></a>
							</div>
							<div class="featured-projects-content">
								<h1><a href="#">Pr. EMRANI</a></h1>
								<p>
									 Professeur de UNIX
								</p>
							</div>
						</div>
						</li>
						<!--featured-projects 4-->
						<li>
						<div class="featured-projects">
							<div class="featured-projects-image">
								<a href="#"><img class="imgOpa" src="http://placehold.it/275x185" alt=""></a>
							</div>
							<div class="featured-projects-content">
								<h1><a href="#">Pr. ELBRAK</a></h1>
								<p>
									 Professeur du Reseaux Informatiques.
								</p>
							</div>
						</div>
						</li>
						<!--featured-projects 5-->
						<li>
						<div class="featured-projects">
							<div class="featured-projects-image">
								<a href="#"><img class="imgOpa" src="http://placehold.it/275x185" alt=""></a>
							</div>
							<div class="featured-projects-content">
								<h1><a href="#">Pr. EZZIYYANI</a></h1>
								<p>
									 Professeur de Bases de Donnees.
								</p>
							</div>
						</div>
						</li>
						<!--featured-projects 6-->
						<li>
						<div class="featured-projects">
							<div class="featured-projects-image">
								<a href="#"><img class="imgOpa" src="http://placehold.it/275x185" alt=""></a>
							</div>
							<div class="featured-projects-content">
								<h1><a href="#">Pr. GUILLI</a></h1>
								<p>
									 Professeur du TEC.
								</p>
							</div>
						</div>
						</li>
						<!--featured-projects 7-->
						<li>
						<div class="featured-projects">
							<div class="featured-projects-image">
								<a href="#"><img class="imgOpa" src="http://placehold.it/275x185" alt=""></a>
							</div>
							<div class="featured-projects-content">
								<h1><a href="#">Pr. EN-NAIMI</a></h1>
								<p>
									 Professeur du C++.
								</p>
							</div>
						</div>
						</li>
						<!--featured-projects 8-->
						<li>
						<div class="featured-projects">
							<div class="featured-projects-image">
								<a href="#"><img class="imgOpa" src="http://placehold.it/275x185" alt=""></a>
							</div>
							<div class="featured-projects-content">
								<h1><a href="#">Pr. AITKBIR</a></h1>
								<p>
									 Professeur de Programmation Web et mobile.
								</p>
							</div>
						</div>
						</li>
					</ul>
					<div class="clearfix">
					</div>
				</div>
			</div>
			<!-- END TEAM STYLE CAROUSEL
			================================================== -->
			
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

<!-- carousel -->
<script src="js/jquery.carouFredSel-6.0.3-packed.js"></script>

<!-- Call Showcase Team- change 4 from min:4 and max:4 to the number of items you want visible -->
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

<!-- CALL opacity on hover images -->
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