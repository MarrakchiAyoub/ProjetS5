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
				<img src="images/logo.png" class="logo" alt="" >
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
				<h1 class="titlehead">Master Systemes Informatiques et Reseaux</h1>
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
	<div class="shadowundertop"></div>
		<div class="row">
			<div class="c8">
				<h1 class="maintitle ">
				<span>Objectifs de la formation:</span>
				</h1>
				<p>
                <span class="dropcap">L</span>e Master Systemes Informatiques et Reseaux repond a besoin de formation par la recherchedans le domaine de technologies de l’information et de la communication caracterisee par laconvergence des techniques des reseaux et des applications informatiques.

                La creation de ceMaster resulte d’un constat integrant non seulement des considerations scientifiques ettechniques mais egalement les aspects economiques et industriels lies aux avancees dans lesdomaines des Technologies de l’information et de la Communication.
				</p>
				<h1 class="maintitle ">
				<span>Public cible et conditions d'admission:</span>
				</h1>
					L'acces aux formations de Master en Sciences et techniques est ouvert aux titulaires :
                    <ul  style="list-style-type:square">
                        <li> De la licence dans le domaine de formation du Master en Sciences et Techniques ou d’undiplôme reconnu equivalent satisfaisant aux criteres d’admission prevus dans le descriptif dela filiere.. </li>
                        <li> De diplômes au moins d’un niveau equivalent de la licence, sur etude de dossier et/ou parvoie de concours, et satisfaisant aux criteres d’admission prevus dans le descriptif de la filiere.</li>
                        <li> Pre-requis pedagogiques : Ecologie, Biologie, Geologie, Chimie, Statistique, Informatique. Procedures de selection et d’entretien : sur dossier et entretien. </li>
                    </ul>
				<h1 class="maintitle ">
				<span>Competences visees et debouches:</span>
				</h1>
				<p>
					<span class="dropcap">A</span>pres l’obtention du Master Recherche, une alternative est offerte, soit entreprendre une formation de haut niveau par la preparation d’une these en informatique, soit rejoindre le mondeindustriel ou cette premiere experience en recherche pourra deja ouvrir les portes des servicesde recherche et developpement. Neanmoins, la poursuite en These reste la finalite premiere dece Master Recherche.
				</p>
                		<!-- Contenu S1 / S2 / S3 / S4
		================================================== -->
			<div class="c4">
				<h2 class="title stresstitle">CONTENU</h2>
					<hr class="hrtitle">
				<dl class="faqs">
				<dt>Semestre 1</dt>
					<dd>
                        <ul style="list-style-type:square">
                            <li>Bases de donnees avancees</li>
                            <li>Theorie des graphes et applications</li>
                            <li>Architecture des reseaux et protocoles</li>
                            <li>Systemes d'exploitation et systemes embarques</li>
                            <li>Programmation orientee objets  (Java/C++)</li>
                            <li>Anglais avance et techniques d'expositions</li>
                        </ul>
                    </dd>
                <dt>Semestre 2</dt>
					<dd>
                        <ul style="list-style-type:square">
                            <li>Programmation Web et mobiles</li>
                            <li>Reseaux sans fil et mobiles</li>
                            <li>Developpement d'applications distribuees</li>
                            <li>Ressource et planification des entreprises (OpenERP)</li>
                            <li>Administration systeme et reseaux</li>
                            <li>Anglais professionnel et techniques de coaching</li>
                        </ul>
                    </dd>
                <dt>Semestre 3</dt>
					<dd>
                        <ul style="list-style-type:square">
                            <li>Architectures et Technologies de virtualisation</li>
                            <li>Developpement d’applications mobiles</li>
                            <li>RIA et Web semantique</li>
                            <li>Informatique Ambiante et Mobile</li>
                            <li>Securite des Systemes et Reseaux</li>
                            <li>Management de projets et gestion de l'innovation</li>
                        </ul>
                    </dd>
                    <dt>Semestre 4</dt>
					<dd>
                        <ul style="list-style-type:square">
                            <li>PFE</li>
                        </ul>
                    </dd>
                </dl>
            </div>
			</div>
            <!-- SIDEBAR -->
            <div class="c3">
				<div class="rightsidebar">
					<h2 class="title stresstitle">S.I.R.</h2>
					<hr class="hrtitle">
					<img src="images/sir.jpg" class="imgOpa teamimage" alt="">
					<div class="teamdescription">
						
					</div>
					<br/>
					<img src="images/Prof.png" class="imgOpa teamimage" alt="">
					<div class="teamdescription">
						<h1>Prof. BOUHORMA Mohammed </h1>
						<span class="hirefor">RESPONSABLE DE FILIERE</span>
					</div>
				</div>
			</div>       
            <!-- end sidebar -->
    </div>
</div>
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
<!-- END CONTENT AREA -->
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
<script type="text/javascript"> 
  $(document).ready(function () {
	   // ---- FAQs ---------------------------------------------------------------------------------------------------------------
		$('.faqs dd').hide(); // Hide all DDs inside .faqs
		$('.faqs dt').hover(function(){$(this).addClass('hover')},function(){$(this).removeClass('hover')}).click(function(){ // Add class "hover" on dt when hover
		$(this).next().slideToggle('normal'); // Toggle dd when the respective dt is clicked
		}); 
});
</script>
</body>
</html>