<?php session_start(); ?>
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
				<h1 class="titlehead">Les cours</h1>
			</div>
			<div class="c4">				<h1 class="titlehead rightareaheader"><i class="icon-map-marker"></i>Contacter nous en + 212 (0) 5 39 39 39 54 / 55</h1>
</div>
		</div>
	</div>
</div>
<!-- CONTENT
================================================== -->
<div class="grid">
		<div class="shadowundertop"></div>
		<div class="row">
		<div class="c12">
			<h1 class="maintitle space-top">
			<span>Choisisez votre fillières</span>
			</h1>
		</div>
		</div>
		<!-- begin filter -->
		<div class="row space-bot">
			<div class="c12">
				<div id="nav">
					<ul>
						<li><a href="" data-filter="*" class="selected">tous les cours</a></li>
						<li><a href="" data-filter=".cat1">Lisence</a></li>
						<li><a href="" data-filter=".cat2">Master</a></li>
						<li><a href="" data-filter=".cat3">cycle</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- end filter -->		
		<div class="row space-top">
			<div id="content">
				<!-- image 1 -->
				<div class="boxfourcolumns cat1 cat3">
					<div class="boxcontainer">
						<span class="gallery">
						<a data-gal="prettyPhoto[gallery1]" href="http://www.youtube.com/watch?v=QX2yt95Yu90"><img src="http://placehold.it/350x150&text=any.size.you+wish" alt="Add Title" class="imgOpa"/></a>
						</span>
						<h1><a href="#">Dalya</a></h1>
						<p>
							 porta acean pulvinar
						</p>
					</div>
				</div>
				<!-- image 2 -->
				<div class="boxfourcolumns cat1">
					<div class="boxcontainer">
						<span class="gallery">
						<a data-gal="prettyPhoto[gallery1]" href="images/yourimage.jpg"><img src="http://placehold.it/350x150&text=any.size.you+wish" alt="Add Title" class="imgOpa"/></a>
						</span>
						<h1><a href="#">Veluria</a></h1>
						<p>
							 porta acean pulvinar
						</p>
					</div>
				</div>
				<!-- image 3 -->
				<div class="boxfourcolumns cat2 cat3">
					<div class="boxcontainer">
						<span class="gallery">
						<a data-gal="prettyPhoto[gallery1]" href="images/yourimage.jpg"><img src="http://placehold.it/350x150&text=any.size.you+wish" alt="Add Title" class="imgOpa"/></a>
						</span>
						<h1><a href="#">Warm Living</a></h1>
						<p>
							 porta acean pulvinar
						</p>
					</div>
				</div>
				<!-- image 4 -->
				<div class="boxfourcolumns cat1">
					<div class="boxcontainer">
						<span class="gallery">
						<a data-gal="prettyPhoto[gallery1]" href="images/yourimage.jpg"><img src="http://placehold.it/350x150&text=any.size.you+wish" alt="Add Title" class="imgOpa"/></a>
						</span>
						<h1><a href="#">Classy Sofa</a></h1>
						<p>
							 porta acean pulvinar
						</p>
					</div>
				</div>
				<!-- image 5 -->
				<div class="boxfourcolumns cat2">
					<div class="boxcontainer">
						<span class="gallery">
						<a data-gal="prettyPhoto[gallery1]" href="images/yourimage.jpg"><img src="http://placehold.it/350x150&text=any.size.you+wish" alt="Add Title" class="imgOpa"/></a>
						</span>
						<h1><a href="#">Corner Settee</a></h1>
						<p>
							 porta acean pulvinar
						</p>
					</div>
				</div>
				<!-- image 6 -->
				<div class="boxfourcolumns cat2">
					<div class="boxcontainer">
						<span class="gallery">
						<a data-gal="prettyPhoto[gallery1]" href="http://www.youtube.com/watch?v=QX2yt95Yu90"><img src="http://placehold.it/350x150&text=any.size.you+wish" alt="Add Title" class="imgOpa"/></a>
						</span>
						<h1><a href="#">Nostalgic</a></h1>
						<p>
							 porta acean pulvinar
						</p>
					</div>
				</div>
				<!-- image 7 -->
				<div class="boxfourcolumns cat2 cat3">
					<div class="boxcontainer">
						<span class="gallery">
						<a data-gal="prettyPhoto[gallery1]" href="images/yourimage.jpg"><img src="http://placehold.it/350x150&text=any.size.you+wish" alt="Add Title" class="imgOpa"/></a>
						</span>
						<h1><a href="#">Clean Style</a></h1>
						<p>
							 porta acean pulvinar
						</p>
					</div>
				</div>
				<!-- image 8 -->
				<div class="boxfourcolumns cat1">
					<div class="boxcontainer">
						<span class="gallery">
						<a data-gal="prettyPhoto[gallery1]" href="images/yourimage.jpg"><img src="http://placehold.it/350x150&text=any.size.you+wish" alt="Add Title" class="imgOpa"/></a>
						</span>
						<h1><a href="#">Simple & White</a></h1>
						<p>
							 porta acean pulvinar
						</p>
					</div>
				</div>
				<!-- image 9 -->
				<div class="boxfourcolumns cat2 cat3">
					<div class="boxcontainer">
						<span class="gallery">
						<a data-gal="prettyPhoto[gallery1]" href="images/yourimage.jpg"><img src="http://placehold.it/350x150&text=any.size.you+wish" alt="Add Title" class="imgOpa"/></a>
						</span>
						<h1><a href="#">Holiday Look</a></h1>
						<p>
							 porta acean pulvinar
						</p>
					</div>
				</div>
				<!-- image 10 -->
				<div class="boxfourcolumns cat2 cat3">
					<div class="boxcontainer">
						<span class="gallery">
						<a data-gal="prettyPhoto[gallery1]" href="images/yourimage.jpg"><img src="http://placehold.it/350x150&text=any.size.you+wish" alt="Add Title" class="imgOpa"/></a>
						</span>
						<h1><a href="#">Space Mov</a></h1>
						<p>
							 porta acean pulvinar
						</p>
					</div>
				</div>
				<!-- image 11 etc -->
				
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
<!-- all -->
<script src="js/modernizr-latest.js"></script>

<!-- menu & scroll to top -->
<script src="js/common.js"></script>

<!-- twitter -->
<script src="js/jquery.tweet.js"></script>
<script src="js/jquery.cycle.js"></script>

<!-- filterable -->
<script src="js/jquery.isotope.min.js"></script>

<!-- gallery -->
<script src="js/jquery.prettyPhoto.js"></script>

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

<!-- CALL filtering -->
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
 
<!-- CALL lightbox prettyphoto -->
<script type="text/javascript">
  $(document).ready(function(){
    $("a[data-gal^='prettyPhoto']").prettyPhoto({social_tools:'', animation_speed: 'normal' , theme: 'dark_rounded'});
  });
</script>

</body>
</html>