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
				<h1 class="titlehead">A propos de la FSTT</h1>
			</div>
			<div class="c4">				<h1 class="titlehead rightareaheader"><?php if(isset($_SESSION['nom'])) echo '<i class="icon-user"></i>'; echo " ".$nom." ".$pre ?></h1>
</div>
		</div>
	</div>
</div>
<!-- CONTENT
================================================== -->
<div class="grid">
		<div class="shadowundertop"></div>
		<div class="row">
			<div class="c8">
				<h1 class="maintitle ">
				<span>OUR HISTORY</span>
				</h1>
				<p>
					<span class="dropcap">C</span>réée en 1995, la FST de Tanger est un des huit établissements de l’Université Abdelmalek Essaâdi. Elle regroupe actuellement une trentaine de programmes d'études repartis sur quatre cycles offerts par neuf  départements : Sciences de la Vie, Sciences de la Terre, Génie Chimique, Physique, Mathématiques, Génie Informatique, Génie Electrique et Génie Mécanique et  de Langues. Derrière ses programmes d’enseignement et de recherche, totalement inscrits dans le courant actuel des Sciences et Techniques, la FST de Tanger compte avec un corps professoral, jeune et performant, de 151  enseignants chercheurs et un staff veillant de 55 administratifs. Avec ses stages, sa formation pratique, son lien serré avec son environnement socio-économique, la FST de Tanger offre une formation adaptée, un encadrement personnalisé et est à l'écoute des besoins des étudiants. Un service des stages est également à la disposition des étudiants.
				</p>
			</div>
			<div class="c4">
				<h1 class="maintitle">
				<span>SKILLS</span>
				</h1>
				<ul id="skill">
					<li><span class="bar progressdefault" style="width:100%;"></span>
					<h3>Webdesign 100%</h3>
					</li>
					<li><span class="bar progressdefault" style="width:80%;"></span>
					<h3>jQuery 80%</h3>
					</li>
					<li><span class="bar progressdefault" style="width:60%;"></span>
					<h3>Wordpress 60%</h3>
					</li>
				</ul>
			</div>
		</div>
		<!-- OUR TEAM
		================================================== -->
		<div class="row space-top space-bot">
			<div class="c12">
				<h1 class="maintitle text-center">
				<span>Administration</span>
				</h1>
			</div>
			<!-- box 1 -->
			<div class="c3" style="text-align:center;">
				<img src="http://placehold.it/270x180" class="imgOpa teamimage" alt="">
				<div class="teamdescription">
					<h1>Pr. Mohamed ADDOU </h1>
					<span class="hirefor">Doyen de la FSTT</span>
				</div>
			</div>
			<!-- box 2 -->
			<div class="c3">
				<img src="http://placehold.it/270x180" class="imgOpa teamimage" alt="">
				<div class="teamdescription">
					<h1>PR. MOHAMMED BAKKALI </h1>
					<span class="hirefor">Vice Doyen Chargé de la Recherche Scientifique et de la Coopération</span>
				</div>
			</div>
			<!-- box 3 -->
			<div class="c3">
				<img src="http://placehold.it/270x180" class="imgOpa teamimage" alt="">
				<div class="teamdescription">
					<h1>Pr. Mustapha DIANI</h1>
					<span class="hirefor"> Vice Doyen Chargé des Affaires Pédagogiques</span>
				</div>
			</div>
			<!-- box 4 -->
			<div class="c3">
				<img src="http://placehold.it/270x180" class="imgOpa teamimage" alt="">
				<div class="teamdescription">
					<h1>Pr. Hassan BIHRI</h1>
					<span class="hirefor">Secrétaire général</span>
				</div>
			</div>
			<!-- end box4 -->			
		</div>
		<!-- CLIENTS
		================================================== -->
		<div class="row space-top">
			<div class="c12 space-top">
				<h1 class="maintitle">
				<span>Clients</span>
				</h1>
			</div>
		</div>
		<div class="row">
			<div class="c12">
				<div class="list_carousel">
					<div class="carousel_nav">
						<a class="prev" id="car_prev" href="#"><span>prev</span></a>
						<a class="next" id="car_next" href="#"><span>next</span></a>
					</div>
					<div class="clearfix">
					</div>
					<ul id="recent-projects">
						<!--box 1-->
						<li>
						<div class="featured-projects clientslogo">
							<div class="featured-projects-image">
								<a href="#"><img src="http://placehold.it/220x140" class="imgOpa" alt=""></a>
							</div>
						</div>
						</li>
						<!--box 2-->
						<li>
						<div class="featured-projects clientslogo">
							<div class="featured-projects-image">
								<a href="#"><img src="http://placehold.it/220x140" class="imgOpa" alt=""></a>
							</div>
						</div>
						</li>
						<!--box 3-->
						<li>
						<div class="featured-projects clientslogo">
							<div class="featured-projects-image">
								<a href="#"><img src="http://placehold.it/220x140" class="imgOpa" alt=""></a>
							</div>
						</div>
						</li>
						<!--box 4-->
						<li>
						<div class="featured-projects clientslogo">
							<div class="featured-projects-image">
								<a href="#"><img src="http://placehold.it/220x140" class="imgOpa" alt=""></a>
							</div>
						</div>
						</li>
						<!--box 5-->
						<li>
						<div class="featured-projects clientslogo">
							<div class="featured-projects-image">
								<a href="#"><img src="http://placehold.it/220x140" class="imgOpa" alt=""></a>
							</div>
						</div>
						</li>
						<!--box 6-->
						<li>
						<div class="featured-projects clientslogo">
							<div class="featured-projects-image">
								<a href="#"><img src="http://placehold.it/220x140" class="imgOpa" alt=""></a>
							</div>
						</div>
						</li>
						<!--box 7-->
						<li>
						<div class="featured-projects clientslogo">
							<div class="featured-projects-image">
								<a href="#"><img src="http://placehold.it/220x140" class="imgOpa" alt=""></a>
							</div>
						</div>
						</li>
						<!--box 8-->
						<li>
						<div class="featured-projects clientslogo">
							<div class="featured-projects-image">
								<a href="#"><img src="http://placehold.it/220x140" class="imgOpa" alt=""></a>
							</div>
						</div>
						</li>
					</ul>
					<div class="clearfix">
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
<!-- all-->
<script src="js/modernizr-latest.js"></script>

<!-- menu & scroll to top -->
<script src="js/common.js"></script>

<!-- testimonial rotator -->
<script src="js/jquery.cycle.js"></script>

<!-- twitter -->
<script src="js/jquery.tweet.js"></script>

<!-- cycle -->
<script src="js/jquery.cycle.js"></script>

<!-- carousel items -->
<script src="js/jquery.carouFredSel-6.0.3-packed.js"></script>

<!-- CALL Showcase - change 5 from min:5 and max:5 to the number of items you want visible -->
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
						min: 5,
						max: 5
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

<!-- CALL tabs -->
<script type="text/javascript">
$(document).ready(function() {	
	$('#tabs li a:not(:first)').addClass('inactive');
	$('.container:not(:first)').hide();	
	$('#tabs li a').click(function(){		
		var t = $(this).attr('href');
		if($(this).hasClass('inactive')){ //added to not animate when active
			$('#tabs li a').addClass('inactive');		
			$(this).removeClass('inactive');
			$('.container').hide();
			$(t).fadeIn('slow');	
		}			
		return false;
	}) //end click
});
</script>
</body>
</html>