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
				<h1 class="titlehead">Cycle d'Ingenieur</h1>
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
                Former des ingénieurs capables de :
                <ul style="list-style-type:disc">
                    <li>Comprendre les enjeux technologiques et métiers </li>
                    <li>Proposer et construire des solutions compétitives et réalistes</li>
                    <li>Intervenir sur des problématiques complexes</li>
                    <li>Piloter des projets et les changements qu'ils entrainent.</li>
                </ul>

                Les élèves-ingénieurs complètent leur formation académique en effectuant des stages pratiques en entreprise au cours du Cycle Ingénieur.
				</p>
			</div>
            <div class="c8">
				<h1 class="maintitle ">
				<span>Public cible et conditions d'admission:</span>
				</h1>
				<p>
					 Titulaires de :
                    <br>
                    <ul  style="list-style-type:disc">
                        <li>DEUST, DEUG, DEUT ou DUT en 2 ans avec au moins une mention A.B. : Épreuve Écrite</li>
                        <li>Licence Sciences et Techniques et Licence Fondamentale : Dossier & Entretien ;</li>
                        <li>Classes préparatoires et réussite au concours commun des écoles d’ingénieurs.</li>
                    </ul>
				</p>
			</div>
            <div class="c8">
				<h1 class="maintitle ">
				<span>Competences visees et debouches:</span>
				</h1>
				<p>
				<ul style="list-style-type:disc">
                    <li>Ingénierie logicielle</li>
                    <li>Ingénierie de réseaux d’entreprises</li>
                    <li>Intégration des systèmes client-serveur</li>
                    <li>Administrateur Système et réseau.</li>
                </ul>
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
                            <li> Mathématiques pour l’ingénieur</li>
                            <li>Systèmes d’exploitation et systèmes embarqués</li>
                            <li>Architecture des ordinateurs</li>
                            <li>Programmation C  et Structures de données</li>
                            <li>Architecture des réseaux informatiques et techniques d’acheminent</li>
                            <li>Systèmes d’informations relationnelles et langage des requêtes</li>
                            <li>Management général et comptabilité général</li>
                        </ul>
                    </dd>
                <dt>Semestre 2</dt>
					<dd>
                        <ul>
                            <li>Urbanisation des SI et Conduite des projets Informatique</li>
                            <li>Développement web et Frameworks   (php, zend, samfony)</li>
                            <li>Statistique descriptive et inferentielle</li>
                            <li>Modélisation orientée objet et Programmation C++</li>
                            <li>Théorie des graphes et Applications</li>
                            <li>Anglais  et techniques de rédaction</li>
                            <li>Gestion de L’innovation et management de projet</li>
                        </ul>
                    </dd>
                <dt>Semestre 3</dt>
					<dd>
                        <ul>
                            <li>Programmation Java et Programmation mobile</li>
                            <li>Administration des bases de données et optimisation des requêtes</li>
                            <li>INTERNET DES OBJETS  et Architectures Mobile</li>
                            <li>Administration réseaux et systèmes</li>
                            <li>Méthodologies de l'Intelligence Artificielle</li>
                            <li>Anglais avancé et techniques d’exposition</li>
                            <li>Management stratégique et comptabilité analytique</li>
                        </ul>
                    </dd>
                    <dt>Semestre 4</dt>
					<dd>
                        <ul>
                            <li>Architectures web distribuées   (j2ee)</li>
                            <li>Systèmes Multi-Agents et Systèmes Multi-Experts</li>
                            <li>Vision Artificielle</li>
                            <li>Technologies   .net</li>
                            <li>Techniques Avancées en Génie  logiciel</li>
                            <li>Ressources de planification d'entreprise  (Open Erp)</li>
                            <li>Mangement des ressources humaines</li>
                        </ul>
                    </dd>
                    <dt>Semestre 5</dt>
					<dd>
                        <ul>
                            <li>Processus d'évaluation et Qualité des Logiciels</li>
                            <li>Audit et Sécurité Intélligentedes systèmes d’informations</li>
                            <li>Systèmes d’informations décisionnel et data mininig</li>
                            <li>Cloud Intelligence et virtulisation</li>
                            <li>Géodecisionnel et Systèmes d’informations géographiques</li>
                            <li>Intelligence économique</li>
                            <li>Anglais professionnel et techniques de coaching</li>
                        </ul>
                    </dd>
                    <dt>Semestre 6</dt>
					<dd>
                        <ul>
                            <li>PFE</li>
                        </ul>
                    </dd>
            </dl>
        </div>
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