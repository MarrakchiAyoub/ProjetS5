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
				<h1 class="titlehead">Master Systèmes informatiques et réseaux</h1>
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
				<span>Objectifs de la formation:</span>
				</h1>
				<p>
                Le Master Systèmes Informatiques et Réseaux répond a besoin de formation par la recherchedans le domaine de technologies de l’information et de la communication caractérisée par laconvergence des techniques des réseaux et des applications informatiques.

   La création de ceMaster résulte d’un constat intégrant non seulement des considérations scientifiques ettechniques mais également les aspects économiques et industriels liés aux avancées dans lesdomaines des Technologies de l’information et de la Communication.
				</p>
			</div>
            <div class="c8">
				<h1 class="maintitle ">
				<span>Public cible et conditions d'admission:</span>
				</h1>
				<p>
					L'accès aux formations de Master en Sciences et techniques est ouvert aux titulaires :
                    <br>
                    <ul  style="list-style-type:disc">

                        <li>De la licence dans le domaine de formation du Master en Sciences et Techniques ou d’undiplôme reconnu équivalent satisfaisant aux critères d’admission prévus dans le descriptif dela filière.. </li>
                        <li>De diplômes au moins d’un niveau équivalent de la licence, sur étude de dossier et/ou parvoie de concours, et satisfaisant aux critères d’admission prévus dans le descriptif de la filière.</li>
                        <li>Pré-requis pédagogiques : Ecologie, Biologie, Géologie, Chimie, Statistique, Informatique. Procédures de sélection et d’entretien : sur dossier et entretien. </li>
                    </ul>
				</p>
			</div>
            <div class="c8">
				<h1 class="maintitle ">
				<span>Competences visees et debouches:</span>
				</h1>
				<p>
					<span class="dropcap">A</span>près l’obtention du Master Recherche, une alternative est offerte, soit entreprendre une formation de haut niveau par la préparation d’une thèse en informatique, soit rejoindre le mondeindustriel ou cette première expérience en recherche pourra déjà ouvrir les portes des servicesde recherche et développement. Néanmoins, la poursuite en Thèse reste la finalité première dece Master Recherche.
				</p>
			</div>
			
		</div>
		<!-- Contenu S1 / S2 / S3 / S4
		================================================== -->
    
		<div class="grid">
		<div class="shadowundertop"></div>
		<div class="row">
			<!-- box 1 -->
			<div class="c4">
				<h1 class="faqstitle"><span class="icon-tags faqsicon"></span>CONTENU</h1>
				<dl class="faqs">
            
				<dt>Semestre 1</dt>
					<dd>
                        <ul>
                            <li>Bases de données avancées</li>
                            <li>Théorie des graphes et applications</li>
                            <li>Architecture des réseaux et protocoles</li>
                            <li>Systèmes d'exploitation et systèmes embarqués</li>
                            <li>Programmation orientée objets  (Java/C++)</li>
                            <li>Anglais avancé et techniques d'expositions</li>
                        </ul>
                    </dd>
                <dt>Semestre 2</dt>
					<dd>
                        <ul>
                            <li>Programmation Web et mobiles</li>
                            <li>Réseaux sans fil et mobiles</li>
                            <li>Développement d'applications distribuées</li>
                            <li>Ressource et planification des entreprises (OpenERP)</li>
                            <li>Administration système et réseaux</li>
                            <li>Anglais professionnel et techniques de coaching</li>
                        </ul>
                    </dd>
                <dt>Semestre 3</dt>
					<dd>
                        <ul>
                            <li>Architectures et Technologies de virtualisation</li>
                            <li>Développement d’applications mobiles</li>
                            <li>RIA et Web sémantique</li>
                            <li>Informatique Ambiante et Mobile</li>
                            <li>Sécurité des Systèmes et Réseaux</li>
                            <li>Management de projets et gestion de l'innovation</li>
                        </ul>
                    </dd>
                    <dt>Semestre 4</dt>
					<dd>
                        <ul>
                            <li>PFE</li>
                        </ul>
                    </dd>
            </dl>
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