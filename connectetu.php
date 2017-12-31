<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width"/>
<title>Genie Informatique</title>
<!-- STYLES & JQUERY 
================================================== -->
<style>
        table { border-collapse: collapse; }
    tr {
        height: 50px;
        }
    td {
        border: solid 2px;
        width: 180px;
    }
    .first {
        width: 80px;
    }
    </style>
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
				<img src="images/ece.png" class="logo" alt="" height="100px" width="160px">
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
				<li class="last"><a href="contact.html">Se Connecter</a>
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
<!-- HEADER
================================================== -->
<div class="undermenuarea">
	<div class="boxedshadow">
	</div>
	<div class="grid">
		<div class="row">
			<div class="c8">
				<h1 class="titlehead">Compte Etudiant</h1>
			</div>
			<div class="c4">				<h1 class="titlehead rightareaheader"><i class="icon-map-marker"></i>Contacter nous en + 212 (0) 5 39 39 39 54 / 55</h1>
</div>
		</div>
	</div>
</div>
<!-- CONTENT
================================================== -->
<div id="login"  style="margin-left:7%; margin-top: 45px; width: 30%; float: left">
<form method="POST">

email:<input name="mailetu" type="email" required><br>

mot de passe: <input name="passetu" type="password" required><br>
<?php include 'verif.php'; ?>
  <button type="submit" name="send" class="blue" name="sendetu"/>connexion</button>
  <input type="reset" value="Annuler" id="button"><br>
</form>
</div>
<div id="subscribe" style="margin-left:50%; margin-top: 45px; width: 30%"> 
CNE:<input class="i" name="login" type="text"><br><br>
Nom:<input class="i" name="login" type="text"><br><br>
Prenom<input class="i" name="login" type="text"><br><br>
Mot de passe: <input class="r" name="psw" type="password" style="margin-right: 40px"><br><br>
Resaisir le mot de passe: <input class="r" name="n_psw" type="password"><br><br>
E-mail: <input class="i" name="email" type="text" ><br><br>
Date de naissance: <input class="i" name="date_naiss" type="date"><br><br>
Niveau d'étude: <input class="i" name="login" type="text"><br><br>
Filiére/<select name="cod_fil">
    <option value="LGI">LGI</option>
    <option value="LSI">LSI</option>
    <option value="SIAD">SIAD</option>
    <option value="SIR">SIR</option>
  </select>
  <button type="submit" name="valider" class="blue" name="sendetu"/>Valider</button>
  <input type="reset" value="Annuler" id="button"><br>
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
<!-- END CONTENT AREA -->
<!-- JAVASCRIPTS
================================================== -->
<!-- all -->
<script src="js/modernizr-latest.js"></script>

<!-- menu & scroll to top -->
<script src="js/common.js"></script>

<!-- cycle -->
<script src="js/jquery.cycle.js"></script>

<!-- twitter -->
<script src="js/jquery.tweet.js"></script>

<!-- filtering -->
<script src="js/jquery.isotope.min.js"></script>

<!-- CALL filtering & masonry-->
<script>
$(document).ready(function(){
var $container = $('#content');
  $container.imagesLoaded( function(){
        $container.isotope({
	filter: '*',
	animationOptions: {
     duration: 750,
     easing: 'linear',
     queue: false,
   }
});
});
$('#nav a').click(function(){
  var selector = $(this).attr('data-filter');
    $container.isotope({ 
	filter: selector,
	animationOptions: {
     duration: 750,
     easing: 'linear',
     queue: false,
   }
  });
  return false;
});
$('#nav a').click(function (event) {
    $('a.selected').removeClass('selected');
    var $this = $(this);
    $this.addClass('selected');
    var selector = $this.attr('data-filter');
    $container.isotope({
         filter: selector
    });
    return false; // event.preventDefault()
});
});
 </script>
 
  <!-- Call opacity on hover images-->
<script type="text/javascript">
$(document).ready(function(){
    $(".boxcontainer img").hover(function() {
      $(this).stop().animate({opacity: "0.6"}, 'slow');
    },
    function() {
      $(this).stop().animate({opacity: "1.0"}, 'slow');
    });
  });
</script>
</body>
</html>