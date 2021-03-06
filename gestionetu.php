<?php session_start(); include('lib/bdd.php'); $nom = isset($_SESSION['nom']) ? $_SESSION['nom'] : NULL; $pre = isset($_SESSION['pre']) ? $_SESSION['pre'] : NULL;  
if(!isset($_SESSION['nom']) || $_SESSION['type']!="etudiant") header('location: /ProjetS5/Error/404.php');?>
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
				<h1 class="titlehead">Mettre a jour mes informations</h1>
			</div>
			<div class="c4">				<h1 class="titlehead rightareaheader"><?php if(isset($_SESSION['nom'])) echo '<i class="icon-user"></i>'; echo " ".$nom." ".$pre ?></h1>
</div>
		</div>
	</div>
</div>
<!-- CONTENT
================================================== -->
<div id="form"  style="margin-left:7%; margin-top: 45px; width: 30%; float: left">
	<h3>Email</h3><br>
	<script>
function validatemail() {
    var x = document.forms["up_mail"]["mail"].value;
	var y = document.forms["up_mail"]["n_mail"].value;
    if (x != y) {
		document.getElementById("vmail").innerHTML="Les emails ne sont pas identiques";
        return false;
    }

}
</script>
<form name="up_mail" method="POST" onsubmit="return validatemail()">
Nouveau email:<?php $mail=$_SESSION['email']; echo '<input name="mail" type="email" autocomplete="off" placeholder="votre email actuelle: ',$mail,'" required><br>'; ?>
Resaisir le nouveau email:<input name="n_mail" type="email" autocomplete="off" required><p id="vmail" class="err"></p><br>
mot de pass:<input name="psw" type="password" autocomplete="off" required><br>
<?php
$cne=$_SESSION['cne'];
if(isset($_POST['m_send'])){
	$n_mail=$_POST['mail'];
	$pwd=$_POST['psw'];
	$sql = "SELECT * FROM etudiants where cod_etu='$cne' and pwd_etu='$pwd'";
	$result = mysqli_query($conn, $sql);
	if(!mysqli_num_rows($result)) echo '<p align="center" class="err">mot de pass incorrecte</p>';
	else {
		$sql="UPDATE `etudiants` SET `email_etu` ='$n_mail' WHERE `etudiants`.`cod_etu` = '$cne' ";
		if(mysqli_query($conn, $sql))
			 {
			 echo '<p align="center" class="info">email a ete met a jour avec succes<p>';
			 }
		 else{
			 echo '<p align="center" class="err">Cette email existe deja</p>';
			 }
	}
}
?>
<button class="blue" type="submit" name="m_send"/>Valider</button>
  <input type="reset" value="Annuler"><br>
</form>
</div>

<div id="form" style="margin-left:50%; margin-top: 58px; width: 30%"> 
	<h3>Mot de passe</h3><br>
<script>
function validatepass() {
    var x = document.forms["up_pass"]["psw"].value;
	var y = document.forms["up_pass"]["n_psw"].value;
    if (x != y) {
		document.getElementById("pwd").innerHTML="Les mot de passes ne sont pas identiques";
        return false;
    }

}
</script>
<form mothod="POST" name="up_pass" onsubmit="return validatepass()">
Ancien mot de passe: <input name="o_psw" type="password" autocomplete="off" required><br>
Nouveau mot de passe: <input name="psw" type="password" autocomplete="off" required><br>
Resaisir le nouveau mot de passe: <input name="n_psw" type="password" autocomplete="off" required><p id="pwd" class="err"></p><br>
<?php 
$cne=$_SESSION['cne'];
if(isset($_POST['p_send'])){
	$n_pwd=$_POST['psw'];
	$pwd=$_POST['o_psw'];
	$sql = "SELECT * FROM etudiants where cod_etu='$cne' and pwd_etu='$pwd'";
	$result = mysqli_query($conn, $sql);
	if(!mysqli_num_rows($result)) echo '<p align="center" class="err">mot de pass incorrecte</p>';
	else {
		$sql="UPDATE `etudiants` SET `pwd_etu` ='$n_pwd' WHERE `etudiants`.`cod_etu` = '$cne' ";
		if(mysqli_query($conn, $sql))
			 {
			 echo '<p align="center" class="info">mot de pass a ete met a jour avec succes<p>';
			 }
		 else{
			 $n="n'a";
			 echo '<p align="center" class="err">le mot de pass '.$n.' pas pu être mis a jour</p>';
			 }
	}
}
 ?>
<button class="blue" type="submit" formmethod="post" name="p_send"/>Valider</button>
  <input type="reset" value="Annuler"><br>
  </form>
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