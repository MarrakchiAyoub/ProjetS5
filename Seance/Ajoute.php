<?php session_start(); include('../lib/bdd.php'); $nom = isset($_SESSION['nom']) ? $_SESSION['nom'] : NULL; $pre = isset($_SESSION['pre']) ? $_SESSION['pre'] : NULL; 
if(!isset($_SESSION['nom']) || $_SESSION['type']!="prof") header('location: /ProjetS5/Error/404.php'); ?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width"/>
<title>Genie Informatique</title>
<!-- STYLES & JQUERY 
================================================== -->

<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Lato|Quicksand'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" type="text/css" href="../css/style.css"/>
<link rel="stylesheet" type="text/css" href="../css/icons.css"/>
<link rel="stylesheet" type="text/css" href="../css/slider.css"/>
<link rel="stylesheet" type="text/css" href="../css/skinblue.css"/><!-- change skin color -->
<link rel="stylesheet" type="text/css" href="../css/responsive.css"/>
<script src="../js/jquery-1.9.0.min.js"></script><!-- the rest of the scripts at the bottom of the document -->
</head>
<body>
<!-- TOP LOGO & MENU
================================================== -->
<div class="grid">
	<div class="row space-bot">
		<!--Logo-->
		<div class="c4">
			<a href="../index.php">
				<img src="../images/logo.png" class="logo" alt="" height="100px" width="160px">
			</a>
		</div>
		<!--Menu-->
		<?php	include("../menu.php"); ?>
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
				<h1 class="titlehead">Ajouter une seance</h1>
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
	   <script>
            function checkgroup() {
                var fil = document.forms["seance"]["fil"].value;
            var nve = document.forms["seance"]["nve"].value;
            if ((fil == 'GI' && nve != 'L3') || ((fil == 'SIAD' || fil=='SIR') && (nve!='M1' || nve!='M2')) || (fil=='LSI' && (nve!='C1' || nve!='C2' || nve!='C3')) ){
                 document.getElementById("nve").innerHTML="ce niveau ne correspond pas la filiere choisie";
                 return false;
            }
            }
        </script>
        <div class="d3">
            <form mothod="POST" name="seance" onsubmit="return checkgroup()">
				<?php include 'Validate.php'; ?>
                
                <p class="d1">
				Selectionner la filiere :* </p>
                
                <div class="sel sel--black-panther ">
                <select name="fil" required>
                <option value="GI">Genie informatique</option>
                <option value="LSI">Logiciels et systemes informatiques</option>
                <option value="SIAD">Systemes Informatiques et Aide a la decision</option>
                <option value="SIR">Systemes informatiques et reseaux</option>
                </select>
                </div>
                
                <hr class="rule">
                
                <p class="d1">Niveau d'etude:*</p> 
                <div class="sel sel--superman">
                <select name="nve" required>
                <option value="L3">3eme annee licence</option>
                <option value="M1">1ere annee Master</option>
                <option value="M2">2eme annee Master</option>
                <option value="C1">1ere annee cycle</option>
                <option value="C2">2eme annee cycle</option>
                <option value="C3">3eme annee cycle</option>
                </select>
                </div>
                
                <hr class="rule">
                
                    <p id="nve" class="err"></p>
					<p class="d1">Votre module:</p>
                
                <div class="sel sel--superman1">
					<select name="mod">
					<option value="GIACS">Architecture C/S et Developpement Web Dynamique</option>
					<option value="GIBDD">Bases de Donnees</option>
					<option value="GICPP">Programmation Orientee Objet en C++</option>
					<option value="GIIRI">Introduction aux Reseaux Informatiques</option>
					<option value="GISEL">Systeme d’exploitation UNIX/Linux</option>
					<option value="GITEA">TEC et Anglais</option>
					</select>
                </div>
                
                <hr class="rule">
                
                <div class="d2">
					<p class="d1">
                        Quand voulez-vous la programmer ?
                        <input type="date" name="date"> </p>
                </div>
                    <hr class="rule">
					<div class="sel sel--superman2">
                    <select name="cren">
					<option value=1>8:30 - 10:15</option>
					<option value=2>10:30 - 12:15</option>
					<option value=3>13:30 - 15:15</option>
					<option value=4>15:30 - 17:15</option>
					</select>
                    </div>
                
                <hr class="rule">
                
                <div class="d2">
					<p class="d1">La salle:
                        <input type="text" name="sal" placeholder="Ex: E23"></p> 
                </div>
					<button type="submit" name="valid-aj" formmethod="post" class="blue">Valide</button>
	 			</form>
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
				<img src="../images/logo.png" alt="" width="160" height="180" style="padding-top: 70px;">
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
<!-- all -->
<script src="../js/modernizr-latest.js"></script>

<!-- menu & scroll to top -->
<script src="../js/common.js"></script>

<!-- cycle -->
<script src="../js/jquery.cycle.js"></script>

<!-- twitter -->
<script src="../js/jquery.tweet.js"></script>

<!-- filtering -->
<script src="../js/jquery.isotope.min.js"></script>

<!-- CALL filtering & masonry-->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src="js/index.js"></script>
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