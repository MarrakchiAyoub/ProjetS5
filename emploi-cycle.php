<?php session_start();
$nom = isset($_SESSION['nom']) ? $_SESSION['nom'] : NULL;
$pre = isset($_SESSION['pre']) ? $_SESSION['pre'] : NULL;
 ?>
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
		padding-top: 1px;
		padding-bottom: 20px;
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
				<h1 class="titlehead">Logiciels et systemes informatiques</h1>
			</div>
			<div class="c4">				<h1 class="titlehead rightareaheader"><?php if(isset($_SESSION['nom'])) echo '<i class="icon-user"></i>'; echo " ".$nom." ".$pre ?></h1>
</div>
		</div>
	</div>
</div>
<!-- CONTENT
================================================== -->
<?php include 'lib/timetable.php';
$timestamp= strtotime("today");
$week=idate('W', $timestamp);
$grp="GI-L3-1";
$month=date('n');
if ($month>=8 && $month<=12){$year1=date('Y'); $year2=date('Y')+1;}
else if ($month>=1 && $month<=2) {$year1=date('Y')-1; $year2=date('Y');}
if (isset($_GET['send'])){
	$date=strtotime($_GET['date']);
	$week=idate('W', $date);
}
?>
<form method="GET">
<span style="float: left;margin-top: 15px;margin-left: 12px;">selectionne une date precise: </span>
<input type="date" name="date" min="<?php echo $year1; ?>-09-15" max="<?php echo $year2; ?>-01-20" style="width: 10%;float: left;margin: 10px;height: 30px;padding: 0px;">
<input name="send" value="valider" class="actionbutton" style="margin-top: 13px;width: 80px;padding: 0;margin-left: 1px;" type="submit">
</form>
<table class="emploi">
		<tr style="height:30px"><td class="first" style="border:none"></td><td><div style="float:left">8:30</div><div style="float:right">10:15</div></td><td><div style="float:left">10:30</div><div style="float:right">12:15</div></td><td><div style="float:left">1:30</div><div style="float:right">15:15</div></td><td><div style="float:left">15:30</div><div style="float:right">17:15</div></td></tr>
		<tr><td class="first">Lundi</td><td><?php timetable($week, 1, $grp) ?></td><td><?php timetable($week, 2, $grp) ?></td><td><?php timetable($week, 3, $grp) ?></td><td><?php timetable($week, 4, $grp) ?></td></tr>
		<tr><td class="first">Mardi</td><td><?php timetable($week, 5, $grp) ?></td><td><?php timetable($week, 6, $grp) ?></td><td><?php timetable($week, 7, $grp) ?></td><td><?php timetable($week, 8, $grp) ?></td></tr>
		<tr><td class="first">Mercredi</td><td><?php timetable($week, 9, $grp) ?></td><td><?php timetable($week, 10, $grp) ?></td><td><?php timetable($week, 11, $grp) ?></td><td><?php timetable($week, 12, $grp) ?></td></tr>
		<tr><td class="first">Jeudi</td><td><?php timetable($week, 13, $grp) ?></td><td><?php timetable($week, 14, $grp) ?></td><td><?php timetable($week, 15, $grp) ?></td><td><?php timetable($week, 16, $grp) ?></td></tr>
		<tr><td class="first">Vendredi</td><td><?php timetable($week, 17, $grp) ?></td><td><?php timetable($week, 18, $grp) ?></td><td><?php timetable($week, 19, $grp) ?></td><td><?php timetable($week, 20, $grp) ?></td></tr>
		<tr><td class="first">Samedi</td><td><?php timetable($week, 21, $grp) ?></td><td><?php timetable($week, 22, $grp) ?></td><td><?php timetable($week, 23, $grp) ?></td><td><?php timetable($week, 24, $grp) ?></td></tr>
	</table>
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