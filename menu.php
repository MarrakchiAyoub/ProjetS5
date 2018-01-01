<div class="c8">
<nav id="topNav">
<ul id="responsivemenu">
    <li class="active"><a href="index.php"><i class="icon-home homeicon"></i><span class="showmobile">Home</span></a></li>
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
    <li><a href="#">Emplois du temps</a>
      <ul>
        <li><a href="emploi-LGI.html">Licence</a></li>
        <li><a href="portfolio-masonry4.html">Master</a></li>
        <li><a href="portfolio-masonry5.html">'.$cycle.'</a></li>					
        <li><a href="singleproject.html">Doctorat</a></li>
    </ul>
    </li>
    <?php if(!isset($_SESSION['type']))
    {
   echo '<li class="last"><a href="#">Se Connecter</a>
        <ul>
        <li><a href="connectetu.php">Etudiant</a></li>
        <li><a href="connectpro.php">Professeur</a></li>
        </ul>
     </li>';
     }
     else {if($_SESSION['type']=='etudiant') {  
         echo '<li class="last"><a href="#">Espace Etudiant</a>
        <ul>
        <li><a href="#">Télécharger des cours</a></li>
        <li><a href="#">Gestion de compte</a></li>
       <li><a href="dec.php">Deconnexion</a></li>
        </ul>
     </li>';}
     else if($_SESSION['type']=='prof') {  
        echo '<li class="last"><a href="#">Espace Professeurs</a>
       <ul>
       <li><a href="connectetu.php">Joindre des cours</a></li>
       <li><a href="connectpro.php">Gestion de compte</a></li>
       <li><a href="dec.php">Deconnexion</a></li>
       </ul>
    </li>';}
     }
     ?>
</ul>
</nav>
</div>
