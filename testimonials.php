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
				<h1 class="titlehead">Testimonials</h1>
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
				<span>What clients say</span>
				</h1>
				<div id="content">
					<!-- box -->
					<div class="boxfourcolumns fw">
						<div class="testimonial">
							<img src="http://placehold.it/90x90" class="avatarspic" alt="">
							<h6>Relativity</h6>
							 "When you are courting a nice girl an hour seems like a second. When you sit on a red-hot cinder a second seems like an hour. That's relativity. "
						</div>
						<div class="author-wrapper">
							<div class="arrow">
							</div>
							<div class="testimonial-name">
								 Albert Einstein <span>Leader</span>
							</div>
						</div>
					</div>
					<!-- box -->
					<div class="boxfourcolumns fw">
						<div class="testimonial">
							<img src="http://placehold.it/90x90" class="avatarspic" alt="">
							<h6>Sports</h6>
							 My grandmother started walking five miles a day when she was sixty. She's ninety-seven now, and we don't know where the hell she is. "
						</div>
						<div class="author-wrapper">
							<div class="arrow">
							</div>
							<div class="testimonial-name">
								 Ellen DeGeneres <span>Leader</span>
							</div>
						</div>
					</div>
					<!-- box -->
					<div class="boxfourcolumns fw">
						<div class="testimonial">
							<img src="http://placehold.it/90x90" class="avatarspic" alt="">
							<h6>Logics</h6>
							 "It's amazing that the amount of news that happens in the world every day always just exactly fits the newspaper."
						</div>
						<div class="author-wrapper">
							<div class="arrow">
							</div>
							<div class="testimonial-name">
								 Jerry Seinfeld <span>America</span>
							</div>
						</div>
					</div>
					<!-- box -->
					<div class="boxfourcolumns fw">
						<div class="testimonial">
							<img src="http://placehold.it/90x90" class="avatarspic" alt="">
							<h6>Design</h6>
							 Design is a funny word. Some people think design means how it looks. But of course, if you dig deeper, it's really how it works. "
						</div>
						<div class="author-wrapper">
							<div class="arrow">
							</div>
							<div class="testimonial-name">
								 Steve Jobs <span>Founder</span>
							</div>
						</div>
					</div>
					<!-- box -->
					<div class="boxfourcolumns fw">
						<div class="testimonial">
							<img src="http://placehold.it/90x90" class="avatarspic" alt="">
							<h6>Comedy</h6>
							 "Most comedy is based on getting a laugh at somebody else's expense. And I find that that's just a form of bullying in a major way. So I want to be an example that you can be funny and be kind, and make people laugh without hurting somebody else's feelings."
						</div>
						<div class="author-wrapper">
							<div class="arrow">
							</div>
							<div class="testimonial-name">
								 Ellen DeGeneres <span>Leadaer</span>
							</div>
						</div>
					</div>
					<!-- box -->
					<div class="boxfourcolumns fw">
						<div class="testimonial">
							<img src="http://placehold.it/90x90" class="avatarspic" alt="">
							<h6>Pyshics</h6>
							 "It is funny that men who are supposed to be scientific cannot get themselves to realise the basic principle of physics, that action and reaction are equal and opposite, that when you persecute people you always rouse them to be strong and stronger."
						</div>
						<div class="author-wrapper">
							<div class="arrow">
							</div>
							<div class="testimonial-name">
								 Gertrude Stein <span>Leader</span>
							</div>
						</div>
					</div>
					<!-- box -->
					<div class="boxfourcolumns fw">
						<div class="testimonial">
							<img src="http://placehold.it/90x90" class="avatarspic" alt="">
							<h6>Education</h6>
							 "Screaming at children over their grades, especially to the point of the child's tears, is child abuse, pure and simple. It's not funny and it's not good parenting. It is a crushing, scarring, disastrous experience for the child. It isn't the least bit funny."
						</div>
						<div class="author-wrapper">
							<div class="arrow">
							</div>
							<div class="testimonial-name">
								 Bob Stein <span>Leader</span>
							</div>
						</div>
					</div>
					<!-- box -->
					<div class="boxfourcolumns fw">
						<div class="testimonial">
							<img src="http://placehold.it/90x90" class="avatarspic" alt="">
							<h6>Excitement</h6>
							 "I have just returned from Boston. It is the only thing to do if you find yourself up there. "
						</div>
						<div class="author-wrapper">
							<div class="arrow">
							</div>
							<div class="testimonial-name">
								 Fred Allen <span>Leader</span>
							</div>
						</div>
					</div>
					<!-- box etc -->
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

<!-- masonry -->
<script src="js/jquery.isotope.min.js"></script>

<!-- call masonry -->
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
});
</script>
</body>
</html>