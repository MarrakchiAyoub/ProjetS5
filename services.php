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
				<h1 class="titlehead">Services</h1>
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
			<!-- MAIN ACTIVITY-->
			<div class="c8">
				<h1 class="maintitle">
				<span>Our main activity</span>
				</h1>
				<p>
					<span class="dropcap">D</span>unt in anim uis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in anim id est laborum. Allamco laboris nisi ut aliquip ex ea commodo consequat. Aser velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in anim id est laborum. Malesuada tortor, nec scelerisque lorem mattis. Nunc et rutrum consetetur sadipscing elitr, sed diam nonumy at volutpat. Sed consectetur suscipit lorem nunc.adipiscing elit. Integer commodo tristique odio, quis fringilla ligula aliquet ut. Maecenas sed justo varius velit imperdiet bibendum et rutrum.
				</p>
				<ul class="icons">
					<li><i class="icon-double-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing maecenas sed justo varius velit imperdiet bibendum volensot.</li>
					<li><i class="icon-double-angle-right"></i> Aliquam hendrerit lacus mattis orci fermentum mollis maecenas sed justo varius velit imperdiet bibendum ciaruns.</li>
					<li><i class="icon-double-angle-right"></i> In et purus ut nunc elementum dapibus. Sov et purus maecenas sed justo varius velit imperdiet bibendum et rut.</li>
					<li><i class="icon-double-angle-right"></i> Liquam hendrerit lacus mattis orci fermentum mollis maecenas sed justo varius velit imperdiet bibendum et rutru. </li>
				</ul>
			</div>
			<!-- TESTIMONIALS-->
			<div class="c4">
				<h1 class="maintitle">
				<span>Clients say</span>
				</h1>
				<div id="testimonials">
					<div>
						<div class="testimonial">
							<img src="http://placehold.it/90x90" class="avatarspic" alt=""> "Let every nation know, whether it wishes us well or ill, that we shall pay any price, bear any burden, meet any hardship, support any friend, oppose any foe to assure the survival and the success of liberty. A nation that is afraid to let its people judge the truth and falsehood in an open market is a nation that is afraid of its people. The cost of freedom is always high "
						</div>
						<div class="author-wrapper">
							<div class="arrow">
							</div>
							<div class="testimonial-name">
								 Mary Kayra <span>Sweden</span>
							</div>
						</div>
					</div>
					<div>
						<div class="testimonial">
							<img src="http://placehold.it/90x90" class="avatarspic" alt=""> "Geography has made us neighbors. History has made us friends. Economics has made us partners, and necessity has made us allies. Those whom God has so joined together, let no man put asunder. A nation that is afraid to let its people judge the truth and falsehood in an open market is a nation that is afraid of its people. The cost of freedom is always high "
						</div>
						<div class="author-wrapper">
							<div class="arrow">
							</div>
							<div class="testimonial-name">
								 John F Keneddy <span>Client</span>
							</div>
						</div>
					</div>
				</div>
			</div><!-- END TESTIMONIALS-->
		</div>
		
		
		<div class="row space-top">
			<!-- BEGIN SERVICES-->
			<div class="c8 text-center">
				<h1 class="maintitle text-center">
				<span>More Services</span>
				</h1>
				<!-- service 1-->
				<div class="c4">
					<h1 class="subtitles">
					<span class="serviceicon"><i class="icon-pushpin rotate"></i></span><br/>
					20+ HTML Pages </h1>
					<p>
						 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam hendrerit lacus mattis orci fermentum mollis iaculis purus lobortis. In et purus ut nunc elementum dapibus.
					</p>
				</div>
				<!-- service 2-->
				<div class="c4">
					<h1 class="subtitles">
					<span class="serviceicon"><i class="icon-cog rotate"></i></span><br/>
					Color Schemes</h1>
					<p>
						 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam hendrerit lacus mattis orci fermentum mollis iaculis purus lobortis. In et purus ut nunc elementum dapibus facilisis.
					</p>
				</div>
				<!-- service 3-->
				<div class="c4">
					<h1 class="subtitles">
					<span class="serviceicon"><i class="icon-heart rotate"></i></span><br/>
					Fully Responsive</h1>
					<p>
						 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam hendrerit lacus mattis orci fermentum mollis iaculis purus lobortis. In et purus ut nunc elementum dapibus.
					</p>
				</div><!-- end service 3-->
			</div>
			<!-- END SERVICES-->
			
			<!-- BEGIN WHY CHOOSE US-->
			<div class="c4">
				<h1 class="maintitle">
				<span>Why choose us</span>
				</h1>
				<dl class="faqs nopadding noborder">
					<dt>Lorem ipsum dolor sit amet, consectetuer bibendum cia</dt>
					<dd style="display: none;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.</dd>
					<dt>Aenean commodo ligula eget dolor massa strivet alus</dt>
					<dd style="display: none;">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. </dd>
					<dt class="">Donec pede justo, fringilla vel, aliquet nec bibendum cia</dt>
					<dd style="display: none;">Nam eget dui. Etiam rhoncus. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. </dd>
					<dt class="">In enim justo, rhoncus ut, imperdiet a, venenatis mens</dt>
					<dd style="display: none;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.</dd>
					<dt class="">Donec pede justo, fringilla vel, aliquet nec navia zoralinda</dt>
					<dd style="display: none;">Nam eget dui. Etiam rhoncus. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. </dd>
					<dt class="">In enim justo, rhoncus ut, imperdiet a, venenatis salica</dt>
					<dd style="display: none;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.</dd>
				</dl>
			</div>
			<!-- END WHY CHOOSE US-->
			
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
<<<<<<< HEAD
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
=======
					<li><a href="#">Services</a></li>
					
					
					
					
					
					
					
					
					
>>>>>>> ceed3da3ece2021981bec0a1b16d8dbff720b12b
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

<!-- CALL toggle -->
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