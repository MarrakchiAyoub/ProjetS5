<?php session_start(); $nom = isset($_SESSION['nom']) ? $_SESSION['nom'] : NULL; $pre = isset($_SESSION['pre']) ? $_SESSION['pre'] : NULL;  ?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width"/>
<title>Salique Theme Multipurpose Responsive </title>
<!-- STYLES & JQUERY 
================================================== -->
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/icons.css"/>
<link rel="stylesheet" type="text/css" href="css/skinblue.css"/><!-- Change skin color here -->
<link rel="stylesheet" type="text/css" href="css/responsive.css"/>
<script src="js/jquery-1.9.0.min.js"></script><!-- scripts are at the bottom of the document -->
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
				<h1 class="titlehead">Genie informatique</h1>
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
                <li>Avoir une culture de base scientifique </li>
                <li>Acquérir une base solide dans les axes majeurs et fondamentaux de la discipline informatique :</li>
                <li>Algorithmique, Programmation, Bases de Données, Technologies Web, Systèmes d’Exploitation et
Réseaux Informatiques,... ;</li>

                <li>Développer un savoir-faire technique en informatique : technologie objet, informatique distribuée,
architectures client-serveur et n-tiers, applications hétérogènes,…</li>
				</p>
			</div>
            <div class="c8">
				<h1 class="maintitle ">
				<span>Public cible et conditions d'admission:</span>
				</h1>
				<p>
					<span class="dropcap">L</span>’accès aux filières Licence en Sciences et Techniques a eu lieu sur étude de dossier et /ou par voie de test ou de concours, ouvert aux étudiants titulaires d’un baccalauréat ou d’un diplôme reconnu équivalent en satisfaisant aux critères d’admission précisés dans le descriptif de la filière

L’accès aux filières Licence en Sciences et Techniques peut se faire également à différents niveaux de la licence, sur étude de dossier et/ou par voie de test ou de concours, pour les 
étudiants satisfaisant aux pré-requis relatifs à ces niveaux et qui sont précisés dans le descriptif de la filière.
				</p>
			</div>
            <div class="c8">
				<h1 class="maintitle ">
				<span>Competences visees et debouches:</span>
				</h1>
				<p>
					<span class="dropcap">T</span>echnicien supérieur en développement d’application en C++ et JAVA ; Technicien supérieur en réseaux locaux ; Technicien supérieur en SGBD-R : installation, configuration et administration des SGBD ; WebMaster et développeur des sites web dynamiques, ...

Les orientations potentielles de poursuite des études sont de type : Masters à dominance informatique, Masters orientés e-Technologies, Masters à dominance automatique ou informatique industrielle ou informatique décisionnelle et formations d’ingénieurs.
				</p>
			</div>
			
		</div>
		<!-- OUR TEAM
		================================================== -->
		<div class="row space-top space-bot">
			<div class="c12">
				<h1 class="maintitle text-center">
				<span>Contenu Semestre 5:</span>
				</h1>
			</div>
			<!-- box 1 -->
			<div class="c3" style="text-align:center;">
				<img src="./images/cpp.jpg" class="imgOpa teamimage" alt="">
				<div class="teamdescription">
					<span class="hirefor">Programmation Orientée Objet en C++</span>
				</div>
			</div>
			<!-- box 2 -->
			<div class="c3">
				<img src="./images/css.jpg" class="imgOpa teamimage" alt="">
				<div class="teamdescription">
					
					<span class="hirefor">Architecture C/S et Développement Web Dynamique</span>
				</div>
			</div>
			<!-- box 3 -->
			<div class="c3">
				<img src="./images/bdd.png" class="imgOpa teamimage" alt="">
				<div class="teamdescription">
					<span class="hirefor">Bases de Donnees</span>
				</div>
			</div>
			<!-- box 4 -->
			<div class="c3">
				<img src="./images/reseau.jpg" class="imgOpa teamimage" alt="">
				<div class="teamdescription">
					<span class="hirefor"> Introduction aux Réseaux Informatiques</span>
				</div>
			</div>
            
        <div class="row space-top space-bot">
			<div class="c12">
				<h1 class="maintitle text-center">
				<span></span>
				</h1>
			</div>
			
            <!-- box 5 -->
			<div class="c3" style="text-align:center;">
				<img src="./images/linux.png" class="imgOpa teamimage" alt="">
				<div class="teamdescription">
					<span class="hirefor">Système d’exploitation UNIX/Linux</span>
				</div>
			</div>
			<!-- box 6 -->
			<div class="c3">
				<img src="./images/English.jpg" class="imgOpa teamimage" alt="">
				<div class="teamdescription">
					
					<span class="hirefor">TEC & Anglais</span>
				</div>
			</div>
			<!-- end box6 -->			
		</div>
		<!-- CLIENTS
		================================================== -->
		<div class="row space-top space-bot">
			<div class="c12">
				<h1 class="maintitle text-center">
				<span>Contenu Semestre 6:</span>
				</h1>
			</div>
			<!-- box 1 -->
			<div class="c3" style="text-align:center;">
				<img src="./images/uml.png" class="imgOpa teamimage" alt="">
				<div class="teamdescription">
					<span class="hirefor">Modélisation UML</span>
				</div>
			</div>
			<!-- box 2 -->
			<div class="c3">
				<img src="./images/java.jpg" class="imgOpa teamimage" alt="">
				<div class="teamdescription">
					
					<span class="hirefor">Programmation Orientée Objet en Langage JAVA</span>
				</div>
			</div>
			<!-- box 3 -->
			<div class="c3">
				<img src="./images/ip.jpg" class="imgOpa teamimage" alt="">
				<div class="teamdescription">
					<span class="hirefor">Les Réseaux TCP/IP</span>
				</div>
			</div>
			<!-- box 4 -->
			<div class="c3">
				<img src="#" class="imgOpa teamimage" alt="">
				<div class="teamdescription">
					<span class="hirefor"> PFE </span>
				</div>
			</div>
			<!-- end box4 -->			
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
				<img src="images/ECE.png" alt="" width="160" height="180" style="padding-top: 70px;">
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