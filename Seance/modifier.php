<?php session_start(); include('../lib/bdd.php'); $nom = isset($_SESSION['nom']) ? $_SESSION['nom'] : NULL; $pre = isset($_SESSION['pre']) ? $_SESSION['pre'] : NULL;  ?>
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
				<h1 class="titlehead">Modifier une séance</h1>
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
	<div class="c6">
	<script>
	function checkgroup() {
		var fil = document.forms["seance"]["fil"].value;
	var nve = document.forms["seance"]["nve"].value;
	if ((fil == 'GI' && nve != 'L3') || ((fil == 'SIAD' || fil=='SIR') && (nve!='M1' || nve!='M2')) || (fil=='LSI' && (nve!='C1' || nve!='C2' || nve!='C3')) ){
		 document.getElementById("nve").innerHTML="ce niveau ne correspond pas la filière choisie";
		 return false;
	}
	}
	</script>
				<form mothod="POST" name="seance" onsubmit="return checkgroup()">
				<?php include 'Validate.php' ?>
				selectionner le group
				filière:* <select name="fil" required>
    <option value="GI">Génie informatique</option>
    <option value="LSI">Logiciels et systèmes informatiques</option>
    <option value="SIAD">Systèmes Informatiques et Aide à la décision</option>
    <option value="SIR">Systèmes informatiques et réseaux</option>
  </select>
				Niveau d'étude:* <select name="nve" required>
    <option value="L3">3éme année licence</option>
    <option value="M1">1ére année Master</option>
    <option value="M2">2éme année Master</option>
    <option value="C1">1ére année cycle</option>
    <option value="C2">2éme année cycle</option>
    <option value="C3">3éme année cycle</option>
	</select><p id="nve" class="err"></p>
					<span>la scéance que vous voulez modifier:</span>
					le :<select name="day1">
					<option value="Monday">Lundi</option>
					<option value="Tuesday">Mardi</option>
					<option value="Wednesday">Mercredi</option>
					<option value="Thursday">jeudi</option>
					<option value="Friday">Vedredi</option>
					<option value="Saturday">Samedi</option>
					</select>
					à
					<select name="cren1">
					<option value=1>8:30 - 10:15</option>
					<option value=2>10:30 - 12:15</option>
					<option value=3>13:30 - 15:15</option>
					<option value=4>15:30 - 17:15</option>
					</select>
					<span>Quand voulez la rendre:</span>
					le :<select name="day2">
					<option value="Monday">Lundi</option>
					<option value="Tuesday">Mardi</option>
					<option value="Wednesday">Mercredi</option>
					<option value="Thursday">jeudi</option>
					<option value="Friday">Vedredi</option>
					<option value="Saturday">Samedi</option>
					</select>
					à
					<select name="cren2">
					<option value=1>8:30 - 10:15</option>
					<option value=2>10:30 - 12:15</option>
					<option value=3>13:30 - 15:15</option>
					<option value=4>15:30 - 17:15</option>
					</select>
					la salle:
					<input type="text" name="sal" placeholder="Ex: E23">
					Appliqué les modification à partir de: 
					<input type="radio" value="today" name="debut"> cette semaine 
					<input type="radio" value="next week" name="debut"> la semaine prochaine <br><br>
					<button type="submit" name="valid-mod" formmethod="post" class="blue">Validé</button>
	 			</form>
			</div>
			<div class="c6">
				"some cool image"
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