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
				<h1 class="titlehead">Timeline</h1>
			</div>
			<div class="c4">				<h1 class="titlehead rightareaheader"><?php if(isset($_SESSION['nom'])) echo '<i class="icon-user"></i>'; echo " ".$nom." ".$pre ?></h1>
</div>
		</div>
	</div>
</div>
<!-- CONTENT
================================================== -->
<div class="grid">
		<div class="shadowundertop">
		</div>
		<div class="row">
			<div class="c12">
				<h1 class="maintitle ">
				<span>Planning</span>
				</h1>
				<div id="timelineContainer">
					<div class="timelineToggle">
						
					</div>
					<br class="clear">
					
					
					<div class="timelineMajor">
						<h2 class="timelineMajorMarker"><span>Septembre, 2017</span></h2>
						<dl class="timelineMinor">
							<dt id="19540517"><a>Debut du semestre</a></dt>
							<dd class="timelineEvent" id="19540517EX" style="display: none;">
							<h3>March 2, 2013</h3>
							<p>
								 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
							</p>
							<br class="clear">
							</dd>
							<!-- /.timelineEvent -->
						</dl>
						<!-- /.timelineMinor -->
					</div>
					
					
					<!-- /.timelineMajor -->
					<div class="timelineMajor">
						<h2 class="timelineMajorMarker"><span>Novembre, 2017</span></h2>
						<dl class="timelineMinor">
							<dt id="19550828"><a>Semaine de preparation</a></dt>
							<dd class="timelineEvent" id="19550828EX" style="display: none;">
							<h3>February 28, 2013</h3>
							<p>
								 There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet, with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
							</p>
							<br class="clear">
							</dd>
							<!-- /.timelineEvent -->
						</dl>
						<!-- /.timelineMinor -->
						<dl class="timelineMinor">
							<dt id="19551201"><a>Demarage des controles continues 1</a></dt>
							<dd class="timelineEvent" id="19551201EX" style="display: none;">
							<h3>February 14, 2013</h3>
							<p>
								 So, there are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words
							</p>
							<br class="clear">
							</dd>
							<!-- /.timelineEvent -->
						</dl>
						<!-- /.timelineMinor -->
					</div>
					
					
					<!-- /.timelineMajor -->
					<div class="timelineMajor">
						<h2 class="timelineMajorMarker"><span>Decembre, 2017</span></h2>
						<dl class="timelineMinor">
							<dt id="19550828"><a>Semaine de preparation</a></dt>
							<dd class="timelineEvent" id="19550828EX" style="display: none;">
							<h3>February 28, 2013</h3>
							<p>
								 There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet, with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
							</p>
							<br class="clear">
							</dd>
							<!-- /.timelineEvent -->
						</dl>
						<!-- /.timelineMinor -->
						<dl class="timelineMinor">
							<dt id="19551201"><a>Demarage des controles continues 2</a></dt>
							<dd class="timelineEvent" id="19551201EX" style="display: none;">
							<h3>February 14, 2013</h3>
							<p>
								 So, there are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words
							</p>
							<br class="clear">
							</dd>
							<!-- /.timelineEvent -->
						</dl>
						<!-- /.timelineMinor -->
					</div>
					
					
					<!-- /.timelineMajor -->
					<div class="timelineMajor">
						<h2 class="timelineMajorMarker"><span>Janvier, 2018</span></h2>
						<dl class="timelineMinor">
							<dt id="19550828"><a>Semaine de rattrapage</a></dt>
							<dd class="timelineEvent" id="19550828EX" style="display: none;">
							<h3>February 28, 2013</h3>
							<p>
								 There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet, with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
							</p>
							<br class="clear">
							</dd>
							<!-- /.timelineEvent -->
						</dl>
						<!-- /.timelineMinor -->
						<dl class="timelineMinor">
							<dt id="19551201"><a>Fin du semestre</a></dt>
							<dd class="timelineEvent" id="19551201EX" style="display: none;">
							<h3>February 14, 2013</h3>
							<p>
								 So, there are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words
							</p>
							<br class="clear">
							</dd>
							<!-- /.timelineEvent -->
						</dl>
						<!-- /.timelineMinor -->
					</div>
					
					
					<br class="clear">
					
					
					<div class="timelineMajor">
						<h2 class="timelineMajorMarker"><span>Janvier, 2018</span></h2>
						<dl class="timelineMinor">
							<dt id="19540517"><a>Debut du semestre</a></dt>
							<dd class="timelineEvent" id="19540517EX" style="display: none;">
							<h3>March 2, 2013</h3>
							<p>
								 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
							</p>
							<br class="clear">
							</dd>
							<!-- /.timelineEvent -->
						</dl>
						<!-- /.timelineMinor -->
					</div>
					
					
					<!-- /.timelineMajor -->
					<div class="timelineMajor">
						<h2 class="timelineMajorMarker"><span>Mars, 2018</span></h2>
						<dl class="timelineMinor">
							<dt id="19550828"><a>Semaine de preparation</a></dt>
							<dd class="timelineEvent" id="19550828EX" style="display: none;">
							<h3>February 28, 2013</h3>
							<p>
								 There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet, with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
							</p>
							<br class="clear">
							</dd>
							<!-- /.timelineEvent -->
						</dl>
						<!-- /.timelineMinor -->
						<dl class="timelineMinor">
							<dt id="19551201"><a>Demarage des controles continues 1</a></dt>
							<dd class="timelineEvent" id="19551201EX" style="display: none;">
							<h3>February 14, 2013</h3>
							<p>
								 So, there are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words
							</p>
							<br class="clear">
							</dd>
							<!-- /.timelineEvent -->
						</dl>
						<!-- /.timelineMinor -->
					</div>
					
					
					<!-- /.timelineMajor -->
					<div class="timelineMajor">
						<h2 class="timelineMajorMarker"><span>Mai, 2018</span></h2>
						<dl class="timelineMinor">
							<dt id="19550828"><a>Semaine de preparation</a></dt>
							<dd class="timelineEvent" id="19550828EX" style="display: none;">
							<h3>February 28, 2013</h3>
							<p>
								 There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet, with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
							</p>
							<br class="clear">
							</dd>
							<!-- /.timelineEvent -->
						</dl>
						<!-- /.timelineMinor -->
						<dl class="timelineMinor">
							<dt id="19551201"><a>Demarage des controles continues 2</a></dt>
							<dd class="timelineEvent" id="19551201EX" style="display: none;">
							<h3>February 14, 2013</h3>
							<p>
								 So, there are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words
							</p>
							<br class="clear">
							</dd>
							<!-- /.timelineEvent -->
						</dl>
						<!-- /.timelineMinor -->
					</div>
					
					
					<!-- /.timelineMajor -->
					<div class="timelineMajor">
						<h2 class="timelineMajorMarker"><span>Juin, 2018</span></h2>
						<dl class="timelineMinor">
							<dt id="19550828"><a>Semaine de rattrapage</a></dt>
							<dd class="timelineEvent" id="19550828EX" style="display: none;">
							<h3>February 28, 2013</h3>
							<p>
								 There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet, with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
							</p>
							<br class="clear">
							</dd>
							<!-- /.timelineEvent -->
						</dl>
						<!-- /.timelineMinor -->
						<dl class="timelineMinor">
							<dt id="19551201"><a>Fin du semestre</a></dt>
							<dd class="timelineEvent" id="19551201EX" style="display: none;">
							<h3>February 14, 2013</h3>
							<p>
								 So, there are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words
							</p>
							<br class="clear">
							</dd>
							<!-- /.timelineEvent -->
						</dl>
						<!-- /.timelineMinor -->
					</div>
					
					
					
					<br class="clear">
				</div>
			</div>
		</div>
</div><!-- end grid -->
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
<!-- JAVASCRIPTS
================================================== -->
<!-- all -->
<script src="js/modernizr-latest.js"></script>

<!-- menu & scroll to top -->
<script src="js/common.js"></script>

<!-- twitter -->
<script src="js/jquery.tweet.js"></script>

<!-- cycle -->
<script src="js/jquery.cycle.js"></script>

<!-- call timeline script -->
<script src="js/timeline.js"></script>

</body>
</html>