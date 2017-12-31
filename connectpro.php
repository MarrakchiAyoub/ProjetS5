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
			<a href="index.html">
			<img src="images/ece.png" class="logo" alt="">
			</a>
		</div>
		<!--Menu-->
		<div class="c8">
			<nav id="topNav">
			<ul id="responsivemenu">
				<li class="active"><a href="index.html"><i class="icon-home homeicon"></i><span class="showmobile">Home</span></a></li>
				<li><a href="#">DEPARTEMENT</a>
				  <ul style="display: none;">
				  <li><a href="about.html">A propos</a></li>
				  <li><a href="services.html">Services</a></li>
				  <li><a href="faq.html">F.A.Q.s</a></li>					
					<li><a href="gallery.html">Gallery</a></li>
					<li><a href="timeline.html">Timeline</a></li>
					<li class="last"><a href="404.html">404 Page</a></li>
				</ul>
				</li>
				<li><a href="#">Elements</a>
				<ul style="display: none;">					
					<li><a href="team.html">Team</a></li>
					<li><a href="pricing.html">Pricing Tables</a></li>
					<li><a href="columns.html">Columns</a></li>
					<li><a href="rightsidebar.html">Right Sidebar</a></li>
					<li><a href="leftsidebar.html">Left Sidebar</a></li>					
					
				</ul>
				</li>
				<li><a href="#">Emplois du temps</a>
				  <ul>
				    <li><a href="emploi-LGI.html">Licence</a></li>
					<li><a href="portfolio-masonry4.html">Master</a></li>
					<li><a href="portfolio-masonry5.html">Cycle d'Ingenieur</a></li>					
					<li><a href="singleproject.html">Doctorat</a></li>
				</ul>
				</li>
				<li class="last"><a href="#">Se Connecter</a>
					<ul>
				    <li><a href="connectetu.php">Etudiant</a></li>
					<li><a href="connectpro.php">Professeur</a></li>
					</ul>
				</li>
			</ul>
			</nav>
		</div>
	</div>
</div>
<div class="undermenuarea">
	<div class="boxedshadow">
	</div>
	

<?php
if (isset($_POST['send'])) {
	if (empty($_POST['psw']) || empty($_POST['login']))
		echo '<p align="center" class="r">veillez saisire vos informations</p>';
	else {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projet";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {die("Connection failed: ". mysqli_connect_error());}
$login = isset($_POST['login']) ? $_POST['login'] : NULL;
$pwd = isset($_POST['psw']) ? $_POST['psw'] : NULL;
$sql = "SELECT * FROM professeurs where email_prof='$login' and pwd_prof='$pwd'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)){
	$time=7*20*3600;
	setcookie("projet", $login, time()+$time, "/");
                        $Row=mysqli_fetch_assoc($result);
	$_SESSION['nom']=$Row['nom-prof'];
                        $_SESSION['pre']=$Row['pre_prof'];
	header("location: index.html");}
	
else echo '<p align="center" class="r">informations incorrect</p>';
	}
}
?>

Email:<input class="i" name="login" type="text"><br>

mot de passe: <input class="r" name="psw" type="password"><br>

<br>
<input type="submit" name="send" value="connexion" id="button">
<input type="reset" value="Annuler" id="button"><br>

</div>

	
	<!-- CALL TO ACTION 
	================================================== -->

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