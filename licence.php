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
				<h1 class="titlehead">Licence Genie informatique</h1>
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
                <li>Avoir une culture de base scientifique </li>
                <li>Acquerir une base solide dans les axes majeurs et fondamentaux de la discipline informatique :</li>
                <li>Algorithmique, Programmation, Bases de Donnees, Technologies Web, Systemes d’Exploitation et Reseaux Informatiques,... ;</li>

                <li>Developper un savoir-faire technique en informatique : technologie objet, informatique distribuee, architectures client-serveur et n-tiers, applications heterogenes,…</li>
				</p>
			</div>
            <div class="c8">
				<h1 class="maintitle ">
				<span>Public cible et conditions d'admission:</span>
				</h1>
				<p>
					<span class="dropcap">L</span>’acces aux filieres Licence en Sciences et Techniques a eu lieu sur etude de dossier et /ou par voie de test ou de concours, ouvert aux etudiants titulaires d’un baccalaureat ou d’un diplôme reconnu equivalent en satisfaisant aux criteres d’admission precises dans le descriptif de la filiere L’acces aux filieres Licence en Sciences et Techniques peut se faire egalement a differents niveaux de la licence, sur etude de dossier et/ou par voie de test ou de concours, pour les etudiants satisfaisant aux pre-requis relatifs a ces niveaux et qui sont precises dans le descriptif de la filiere.
				</p>
			</div>
            <div class="c8">
				<h1 class="maintitle ">
				<span>Competences visees et debouches:</span>
				</h1>
				<p>
					<span class="dropcap">T</span>echnicien superieur en developpement d’application en C++ et JAVA ; Technicien superieur en reseaux locaux ; Technicien superieur en SGBD-R : installation, configuration et administration des SGBD ; WebMaster et developpeur des sites web dynamiques, ... Les orientations potentielles de poursuite des etudes sont de type : Masters a dominance informatique, Masters orientes e-Technologies, Masters a dominance automatique ou informatique industrielle ou informatique decisionnelle et formations d’ingenieurs.
				</p>
			</div>
			
		</div>
		<!-- S5
		================================================== -->
		<div class="row space-top">
			<div class="c12 space-top">
				<h1 class="maintitle ">
				<span>Contenu Semestre 5:</span>
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
							<a href="#"><img src="./images/cpp.jpg" class="imgOpa teamimage" alt=""></a>
						</div>
						<div class="featured-projects-content">
                            <h1><a href="#">Programmation Orientee Objet en C++</a></h1>
							<p>
								 Prof. EN-NAIMI
							</p>
                        </div>
					</div>
					</li>
					<!--featured-projects 2-->
                    <li>
					<div class="featured-projects">
						<div class="featured-projects-image">
							<a href="#"><img src="./images/css.jpg" class="imgOpa teamimage" alt=""></a>
						</div>
						<div class="featured-projects-content">
                            <h1><a href="#">Architecture C/S et Developpement Web Dynamique</a></h1>
							<p>
								 Prof. BAIDA
							</p>
                        </div>
					</div>
					</li>
					<!--featured-projects 3-->
					<li>
					<div class="featured-projects">
						<div class="featured-projects-image">
							<a href="#"><img src="./images/bdd.png" class="imgOpa teamimage" alt=""></a>
						</div>
						<div class="featured-projects-content">
							<h1><a href="#">Base de Donnees</a></h1>
							<p>
								 Prof. EZZIYYANI
							</p>
						</div>
					</div>
					</li>
					<!--featured-projects 4-->
                    <li>
					<div class="featured-projects">
						<div class="featured-projects-image">
							<a href="#"><img src="./images/reseau.jpg" class="imgOpa teamimage" alt=""></a>
						</div>
						<div class="featured-projects-content">
							<h1><a href="#">Introduction aux Reseaux Informatiques</a></h1>
							<p>
								 Prof. ELBRAK
							</p>
						</div>
					</div>
					</li>
					<!--featured-projects 5-->
                    <li>
					<div class="featured-projects">
						<div class="featured-projects-image">
							<a href="#"><img src="./images/linux.jpg" class="imgOpa teamimage" alt=""></a>
						</div>
						<div class="featured-projects-content">
							<h1><a href="#">Systeme d’exploitation UNIX/Linux</a></h1>
							<p>
								 Prof. GHADI & Prof. EMRANI
							</p>
						</div>
					</div>
					</li>
					<!--featured-projects 6-->
                    <li>
					<div class="featured-projects">
						<div class="featured-projects-image">
							<a href="#"><img src="./images/English.jpg" class="imgOpa teamimage" alt=""></a>
						</div>
						<div class="featured-projects-content">
							<h1><a href="#">TEC & Anglais</a></h1>
							<p>
								 Prof. GUILLI & Prof. BAKKALI
							</p>
						</div>
					</div>
					</li>
				</ul>
				</div>		
		  </div>
        </div>
		<!-- S6
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
					<span class="hirefor">Modelisation UML</span>
				</div>
			</div>
			<!-- box 2 -->
			<div class="c3">
				<img src="./images/java.jpg" class="imgOpa teamimage" alt="">
				<div class="teamdescription">
					
					<span class="hirefor">Programmation Orientee Objet en Langage JAVA</span>
				</div>
			</div>
			<!-- box 3 -->
			<div class="c3">
				<img src="./images/ip.jpg" class="imgOpa teamimage" alt="">
				<div class="teamdescription">
					<span class="hirefor">Les Reseaux TCP/IP</span>
				</div>
			</div>
			<!-- box 4 -->
			<div class="c3">
				<img src="./images/diploma.png" class="imgOpa teamimage" alt="">
				<div class="teamdescription">
					<span class="hirefor"> PFE </span>
				</div>
			</div>
			<!-- end box4 -->			
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