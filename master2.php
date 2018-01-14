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
				<h1 class="titlehead">Master Systemes Informatiques et Aide a la Decision</h1>
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
               <span class="dropcap">L</span>e Master Sciences et techniques : Systèmes Informatiques et d’aide à la décision répond à un besoin de formation dans le domaine des technologies de l´information et des systèmes d’aides à la décision. Ce Master intègre non seulement des considérations scientifiques et techniques mais également les aspects économiques et sociaux liés aux avancées dans les domaines de l'informatique et de l’intelligence artificielle. Le Master à pour but d’une part d’étudier les méthodes d’apprentissage non supervisé, semi-supervisé et supervisé. Ces méthodes utilisées dans le contexte de fouille de données qui est l’art d’extraire des informations, voire des connaissances à partir des données de plus en plus volumineuses. Celles-ci peuvent provenir de divers domaines tels que la génomique, l’analyse textuelle, l’image, les réseaux et la parole. D’autre part, une attention particulière sera accordée à la visualisation des données de grande dimension. 
				</p>
				<h1 class="maintitle ">
				<span>Public cible et conditions d'admission:</span>
				</h1>
                <ol style="1">
                    <strong><li>Diplômes requis</li></strong>
                        Licence Informatique, licence sciences et techniques en Informatique, licence fondamentale, licence scientifique avec les pré-requis pédagogiques ou niveau équivalent.
                    <strong><li>Pré-requis pédagogiques</li></strong>
                    <ul style="list-style-type:square">
                        <li> Formation informatique générale algorithmique et programmation </li>
                        <li> Bonne connaissance des mathématiques de base (logique, algèbre, analyse, probabilités, ...).</li>
                       <li>Initiation aux réseaux informatiques</li>
                       <li>Initiation aux systèmes d’information</li>
                    </ul>
                    <strong><li>Procédures de sélection</li></strong>
                    (La norme RG3 prévoit que l’accès aux formations du MST doit se faire sur étude de dossier et par voie de concours)
                    <ul  style="list-style-type:square">
                        <li> Etude du dossier</li>
                        <li> Test écrit</li>
                       <li> Éventuellement un test oral</li>
                       <li>Autres informations (voir la page du lancement du concours de la FSTT)</li>
                    </ul>
                </ol>
				<h1 class="maintitle ">
				<span>Competences visees et debouches:</span>
				</h1>
					<span class="dropcap">L</span>'informatique est une discipline particulièrement ouverte vers le milieu professionnel. Nul n'a besoin de rappeler le nombre d'offres d'emplois dans ce secteur durant ces dernières années. Il est plus que probable qu'il reste en pleine expansion encore quelque temps, autant dans les entreprises que dans les métiers de l'enseignement et de la recherche.
                    Le parcours fournit aux étudiants des bases théoriques solides qui leur permettront d’effectuer de la recherche théorique ou appliquée de haut niveau. Deux options sont possibles :
                    <ul style="list-style-type:square">
                        <li> Continuer en thèse de doctorat dans un des domaines de recherche particuliers tels que : l’image, le texte, la parole ou le signal, ou dans le domaine de la bioinformatique, dans un laboratoire universitaire ou celui d’une entreprise publique ou privée.</li>
                        <li> Faire de la recherche appliquée en tant qu’ingénieur de recherche dans un département de recherche et développement (R&D) d’une entreprise publique ou privée, dans les domaines tels que la grande distribution, le secteur bancaire, la surveillance, le marketing, le diagnostic, la bioinformatique, le traitement et l’analyse du signal et de l’image, le web mining, le text mining etc </li>
				    </ul>
                		<!-- Contenu S1 / S2 / S3 / S4
		================================================== -->

			<!-- box 1 -->
			<div class="c4">
				<h1 class="faqstitle"><span class="icon-tags faqsicon"></span>CONTENU</h1>
				<dl class="faqs">
            
				<dt>Semestre 1</dt>
					<dd>
                        <ul style="list-style-type:square">
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
                        <ul style="list-style-type:square">
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
                        <ul style="list-style-type:square">
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
					<h2 class="title stresstitle">S.I.A.D</h2>
					<hr class="hrtitle">
					<img src="images/siad.jpg" class="imgOpa teamimage" alt="">
					<div class="teamdescription">
						
					</div>
					<br/>
					<img src="images/Prof.png" class="imgOpa teamimage" alt="">
					<div class="teamdescription">
						<h1>Prof. GHADI Abderrahim</h1>
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